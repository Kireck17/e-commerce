<?php

namespace App\Console\Commands;

use App\Models\Stock;
use App\Models\User;
use App\Models\Variation;
use App\Notifications\stockLevel;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class NotificationTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notificacion:prueba';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prueba las notificaciones del sistema';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $stocks=Stock::with(['stockable' => function (MorphTo $morphTo) {
            $morphTo->constrain([
                Variation::class => function(Builder $query){
                    $query->with('product');
                },
            ]);
        }])->get();
        $user=User::find(1);
        foreach ($stocks as $stock) {
            $level=[
                'stock_id' => '',
                'product' => '',
                'level' => '',
            ];
            if ($stock->quantity < 20) {
                $level['stock_id']=$stock->id;
                $level['product']=$stock->stockable->product[0]->name;
                $level['level']='medianamente bajo';
                $user->notify(new stockLevel($level));
            }
            if ($stock->quantity < 5) {
                $level['stock_id']=$stock->id;
                $level['product']=$stock->stockable->product[0]->name;
                $level['level']='bajo';
                $user->notify(new stockLevel($level));
            }
            if ($stock->quantity == 0) {
                $level['stock_id']=$stock->id;
                $level['product']=$stock->stockable->product[0]->name;
                $level['level']='vacío';
                $user->notify(new stockLevel($level));
            }
        }
        echo "Test de notificaciones completado correctamente";
        echo "<br>";
    }
}
