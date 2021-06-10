<?php

namespace App\Console\Commands;

use App\Models\Trademark;
use Illuminate\Console\Command;

class ShowQueries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:queries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mostrar consultas de la base de datos';

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
        $trademarks=Trademark::all();
        echo "-------------Marcas-------------------";
        echo "\n";
        foreach ($trademarks as $trademark) {
            echo " | ".$trademark->id." | ".$trademark->name." | ";
            echo "\n";
        }
        echo "---------------Productos--------------------------";
        echo "\n";
        $trademarks=Trademark::all();
        foreach ($trademarks as $trademark) {
            echo " | ".$trademark->id." | ".$trademark->name." | ";
            echo "\n";
        }
    }
}
