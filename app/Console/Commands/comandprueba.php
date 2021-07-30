<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class comandprueba extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:showqery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $products = Product::all();
        foreach($products as $product)
        {
            echo '|'.$product->name.'|';
            echo '\n';
        }
    }
}
