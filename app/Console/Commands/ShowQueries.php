<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Trademark;
//instanciamos modelos

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Variation;
use App\Models\Kit;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\File;

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
        $categories=Category::all();
        echo "------------------Categories------------------------";
        echo "\n";
        foreach ($categories as $categorie) {
            echo " | ".$categorie->id." | ".$categorie->name." | ";
            echo "\n";
        }

        $subcategories=SubCategory::all();
        echo "------------------SubCategories------------------------";
        echo "\n";
        foreach ($subcategories as $subcategorie) {
            echo " | ".$subcategorie->id." | ".$subcategorie->name." | ";
            echo "\n";
        }
        $kits=Kit::all();
        echo "------------------Kits------------------------";
        echo "\n";
        foreach ($kits as $kit) {
            echo " | ".$kit->id." | ";
            echo "\n";
        }

        $attributes=Attribute::all();
        echo "------------------Attributes------------------------";
        echo "\n";
        foreach ($attributes as $attribute) {
            echo " | ".$attribute->id." | ".$attribute->type." | ";
            echo "\n";
        }

        $attribute_values=AttributeValue::all();
        echo "------------------Attributes Values------------------------";
        echo "\n";
        foreach ($attribute_values as $attribute_value) {
            echo " | ".$attribute_value->id." | ".$attribute_value->attribute()->first()->type." | ".$attribute_value->value." | ";
            echo "\n";
        }

        $products=Product::all();
        echo "------------------Product------------------------";
        echo "\n";
        foreach ($products as $product) {
            echo " | ".$product->id." | ".$product->name." | ";
            echo "\n";
            foreach ($product->file()->get() as $file) {
                echo " | ".$file->id." | ".$file->url." | ";
                echo "\n";
            }
        }
        
        

        $files=File::all();
        echo "------------------file------------------------";
        echo "\n";
        foreach ($files as $file) {
            echo " | ".$file->id." | ".$file->url." | ";
            echo "\n";
        }

        $variations=Variation::all();
        echo "------------------Variation Details------------------------";
        echo "\n";
        foreach ($variations as $variation) {
            echo " | ".$variation->id." | ".$variation->product()->first()->name;
            echo "\n";
            foreach ($variation->attribute_value()->get() as $attribute_value){
                echo " | ".$attribute_value->attribute()->first()->type." | ".$attribute_value->value;
                echo "\n";
            }
            echo "------------------fin del producto------------------------";
            echo "\n";
        }
        echo "------------------Inventario------------------------";
        echo "\n";
        $products=Product::all();
        foreach ($products as $product) {
            echo "Producto: ".$product->name;
            echo "\n";
            echo "Descripción: ".$product->description;
            echo "\n";
            echo "Marca: ".$product->trademark()->first()->name;
            echo "          ";
            echo "Categoria: ".$product->category()->first()->name;
            echo "          ";
            echo "Subcategoria: ".$product->subcategory()->first()->name;
            echo "\n";
            foreach ($product->variation()->get() as $variation) {
                echo "Variacion: ".$variation->id;
                echo "\n";
                foreach ($variation->attribute_value()->get() as $attribute_value) {
                    echo $attribute_value->attribute()->first()->type;
                    echo "  ";
                    echo $attribute_value->value;
                    echo "\n";
                }
                if ($variation->stock()->get() ->count() > 0){
                    foreach ($variation->stock()->get() as $stock) {
                        echo "Cantidad de productos en el inventario: ".$stock->quantity;
                        echo "          ";
                        echo "Precio por unidad: ".$stock->price;
                        echo "\n";
                        echo "Almacén: ".$stock->warehouse()->first()->name;
                        echo "          ";
                        echo "Proveedor: ".$stock->provider()->first()->name;
                        echo "          ";
                        echo "País de origen del proveedor: ".$stock->provider()->first()->origin()->first()->country;
                        echo "\n";
                    }
                }
                
                
               /* foreach ($variation->kitdetail()->get() as $kit) {
                    $stock=$kit->kit()->first()->stock()->first();
                    echo "Kit: ".$kit->id;
                    echo "          ";
                    echo "Cantidad de productos a vender por kit: ".$kit->quantity;
                    echo "\n";
                    echo "Cantidad de productos en el inventario: ".$stock->quantity;
                    echo "          ";
                    echo "Precio por unidad: ".$stock->price;
                    echo "\n";
                    echo "Almacén: ".$stock->warehouse()->first()->name;
                    echo "          ";
                    echo "Proveedor: ".$stock->provider()->first()->name;
                    echo "          ";
                    echo "País de origen del proveedor: ".$stock->provider()->first()->origin()->first()->country;
                    echo "\n";
                }*/
            }
            echo "\n";
            echo "\n";
            echo "-------------------------------------------------------------------";
            echo "\n";
            echo "\n";
        }
    }
}
