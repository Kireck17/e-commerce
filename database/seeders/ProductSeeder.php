<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //animales
        //1
        $product = new Product();
        $product -> barcode = 34890135;
        $product -> name = 'Cepillo Deslanador Pelo Cepillo Grande Para Mascotas.';
        $product -> category_id = 1;
        $product -> subcategory_id = 6;
        $product -> trademark_id = 1;
        $product -> description = "Dientes de acero inoxidable 2 en 1 especiales para mascotas de pelo largo ---
        Nuestra herramienta para el cuidado de mascotas con diseño de hoja de 9 y 17 de doble cara, de 9 dientes para
        tapetes y enredos rebeldes, y con 17 dientes para un cepillo regular para eliminar esteras y adelgazar. 
        Peine de aseo para quitar las esteras de diseño especial para las necesidades de perros, gatos, conejos,
        caballos o mascotas. Su mejor opción para rastrillo de capa base, cepillo para desmaterizar, 
        cepillo para rastrillo.";
        $product -> save();
//2
        $product = new Product();
        $product -> barcode = 64357289;
        $product -> name = 'Lámpara Para Pecera, 39 Cm, Cambia De Color';
        $product -> category_id = 1;
        $product -> subcategory_id = 6;
        $product -> trademark_id = 1;
        $product -> description = "Imágenes coloridas con control remoto --- Con 16 colores sólidos y 4 
        modos de luz diferentes, el control remoto inalámbrico le permite marcar el color que desee, 
        cambiar la intensidad, ajustar la velocidad de cambio de color, encender / apagar la luz a pedido. 
        Y sus peces y reptiles se ven como nadar o moverse en parte de los océanos cuando se enciende.";
        $product -> save();
//3
        $product = new Product();
        $product -> barcode = 54120237;
        $product -> name = 'Bebedero Dispensador De Agua Para Perro O Gato 3.8 Litros';
        $product -> category_id = 1;
        $product -> subcategory_id = 6;
        $product -> trademark_id = 1;
        $product -> description = "Descripción: Bebedero Automático P/ Perros Tamaño Chico.
        Características:
        •Bebedero automático seguro que no requiere electricidad. - GRAVEDAD-
        •El producto está hecho con materia prima de calidad alimentaria (material amigable al medio ambiente).
        •Fácil de limpiar.
        •No se mueve ya que cuenta con “gomas” en la base para evitar resbalarse sobre la superficie. 
        •Para llenarlo levante el recipiente y desenrosque la tapa, la cual que permite el flujo de agua una 
        vez que vuelva a colocarlo.
        Medida: 37 cm x 32 cm x 37 cm.
        Capacidad: 1 GAL / 3.8 LTS";
        $product -> save();
//4
        $product = new Product();
        $product -> barcode = 1523687;
        $product -> name = 'Guante Para Cepillar Mascotas, Mano Derecha';
        $product -> category_id = 1;
        $product -> subcategory_id = 6;
        $product -> trademark_id = 1;
        $product -> description = "Guante for cepillar mascotas perro mano derecha y regalo
        peso: 50 g
        
        Material:
        caucho Tipo: guante de limpieza para mascotas";
         $product -> save();
//5
         $product = new Product();
        $product -> barcode = 47392304;
        $product -> name = 'Nutriplus Gel 120g Virbac Vitaminas Para Perros Y Gatos';
        $product -> category_id = 1;
        $product -> subcategory_id = 6;
        $product -> trademark_id = 1;
        $product -> description = "Nutri-plus gel es un suplemento energético nutricional para perros, 
        gatos y cerdos que aporta vitaminas, minerales y oligoelementos a la dieta del animal.
        Es un complemento nutricional de alta energía que puede ser administrado a animales en 
        convalecencia postoperatoria o durante alguna enfermedad, para contrarrestar la pérdida de apetito, 
        en estados carenciales, desarrollo de animales jóvenes y en períodos de esfuerzos prolongados, de 
        estrés y entrenamiento, así como para hembras gestantes o en lactación.
        Está recomendado para perros, gatos y cerdos.
        Perros y gatos: Nutri-plus gel debe ser administrado como complemento nutricional a razón de 1 a 2 
        cucharadas* por cada 5 kg de peso, al día.";
        $product -> save();
//6
        //anime
        $product = new Product();
        $product -> barcode = 2390345;
        $product -> name = 'Sudadera Ahegao, Ecchi, Manga, Anime';
        $product -> category_id = 2;
        $product -> subcategory_id = 1;
        $product -> trademark_id = 2;
        $product -> description = "Sudadera impreso total con serigrafía de la más alta calidad y duración
        con rubor.
        Tenemos el pants en otra publicación y la playera para hacer juego
        Enviamos a toda la República con mercado envios.
        MEDIDAS
        SUDADERA-----------Largo cintura cuello (72cm) / ancho pecho (58 cm)";
        $product -> save();
//7
        $product = new Product();
        $product -> barcode = 3998245;
        $product -> name = 'Caballeros Del Zodiaco Anime Heroes Figura Articulada Bandai';
        $product -> category_id = 2;
        $product -> subcategory_id = 2;
        $product -> trademark_id = 3;
        $product -> description = "Las nuevas figuras Anime Heroes de Caballeros del Zodiaco tienen 6.5” de
        altura de altura. Con más de 17 puntos de articulación y tintas metálicas en sus armaduras en donde
        podrás ver todos los detalles de estos icónicos personajes.
        Cada figura cuenta con accesorios e incluyen un par de manos intercambiables adicionales para que
        puedas recrear tus poses de batalla favoritas.
        Colecciónalos todos. Seiya de Pegaso, Saga de Geminis y Aioros de Sagitario. ¡Y muchos más por venir! 
        Y recuerda las figuras Anime Heroes de Caballeros del Zodiaco son sólo de Bandai.)";
        $product -> save();
//8
        $product = new Product();
        $product -> barcode = 9056434;
        $product -> name = 'Naruto Banda De La Aldea De La Hoja. Kakashi. Cosplay';
        $product -> category_id = 2;
        $product -> subcategory_id = 3;
        $product -> trademark_id = 3;
        $product -> description = "Placas Metálicas con Logo SERIGRAFIADO de alta gama
        Banda de tela reforzada con costura
        Medidas de banda
        5cm de ancho
        95 cm de largo
        Ideal para tu disfraz Cosplay";
        $product -> save();
//9
        $product = new Product();
        $product -> barcode = 2983464;
        $product -> name = 'Collar Naruto Akatzuki Hidan Collares Mixtos Cosplay Anime F';
        $product -> category_id = 2;
        $product -> subcategory_id = 3;
        $product -> trademark_id = 3;
        $product -> description = "Collar Naruto Akatzuki Hidan Collares Mixtos Cosplay Anime F
        Animado de Naruto Akatsuki Hidan Cosplay del collar de los colgantes
        Regalo perfecto para niños que quieren cosplay de anime japonés, ideal para fiestas de cosplay.
        Bonito regalo para los fanáticos de Naruto
        Collar duradero y con buen tacto
        Hecho de material metálico + cuerda de cuero PU
        Largo de cadena: 21cm aprox";
        $product -> save();
//10

        $product = new Product();
        $product -> barcode = 344045955;
        $product -> name = 'Sudadera Tokyo Ghoul Kaneki Anime Unisex Envio Gratis';
        $product -> category_id = 2;
        $product -> subcategory_id = 1;
        $product -> trademark_id = 2;
        $product -> description = "SUDADERA UNISEX
        *KANEKI TOKYO GHOUL*
        ¡Consigue una sudadera de tu anime favorito!
        *EN AFASANY’S LAND, EL ENVÍO ES GRATIS A PARTIR DE LA COMPRA DE DOS PRODUCTOS*
        -DISPONIBLE EN TODAS LAS TALLAS Y COLORES PUBLICADOS
        -TALLAS
        La medida de “Pecho/busto” en la guía de tallas, solo es de hombro a hombro, no circunferencia. La guía de tallas se 
        encuentra abajo de la guía de tallas (computadora) o arriba e la guía de tallas (Smartphone)";
        $product -> save();
//11
        $product = new Product();
        $product -> barcode = 923896563;
        $product -> name = 'Funko Pop! Animation: My Hero Academia - Deku #564';
        $product -> category_id = 2;
        $product -> subcategory_id = 2;
        $product -> trademark_id = 3;
        $product -> description = "Figura de Vinyl Coleccionable
        Funko Pop! Animation: My Hero Academia - Deku #564
        Articulo 100% Original
        Nuevo
        Caja Totalmente Nueva sin daños";
        $product -> save();

//12
        $product = new Product();
        $product -> barcode = 239754;
        $product -> name = 'Posters 10 Piezas Anime, Kimetsu No Yaiba, Koro No Sensei';
        $product -> category_id = 2;
        $product -> subcategory_id = 3;
        $product -> trademark_id = 3;
        $product -> description = "Póster Cromo de 27.6 x 21 cm, calidad de impresión suprema con protector UV.
        Son las 10 piezas de las imágenes por solo $ 100 pesos.
        10 modelos diferentes de estas maravillosas series.";
        $product -> save();
//13
        //HERRAMIENTA
        $product = new Product();
        $product -> barcode = 4094859872;
        $product -> name = 'Pinza Electronica Para Corte Cables Baku Bk 109 125mm';
        $product -> category_id = 3;
        $product -> subcategory_id = 5;
        $product -> trademark_id = 4;
        $product -> description = "
        ==== PINZA PARA CORTE DE CABLES BAKU 109 125MM ====
        *CORTE DE LAVADO COMPLETO
        USO DE 45º ANGULOS EN ESPACIOS APRETADOS
        * MUELLE CARGADO PARA USO FÁCIL (RESORTE QUE AYUDA A FACILITAR TU TRABAJO)
        * CONFORTABLE
        MANIJA ANTIDESLIZANTE
        *USO PROFESIONAL
        *ANTIESTATICAS
        *ACERO";
        $product -> save();
//14
        $product = new Product();
        $product -> barcode = 8495793250;
        $product -> name = 'Voltimetro Y Amperimetro Digital 0-100v 10a';
        $product -> category_id = 3;
        $product -> subcategory_id = 5;
        $product -> trademark_id = 4;
        $product -> description = "El Voltímetro Amperímetro Digital 100 VDC / 10 A es un instrumento digital 
        que nos ayudará tanto a la medición de voltaje y corriente de algún circuito o elemento pasivo, puede
        desempeñar algunas funciones de un multímetro. Es excelente para proyectos que requieran una pantalla 
        indicadora con mediciones precisas, baja inversión y tamaño reducido.";
        $product -> save();
//15
        //CELULARES
        $product = new Product();
        $product -> barcode = 37563;
        $product -> name = 'Xiaomi Redmi Note 10 Dual SIM 64 GB verde lago 4 GB RAM';
        $product -> category_id = 4;
        $product -> subcategory_id = 4;
        $product -> trademark_id = 6;
        $product -> description = "Fotografía profesional en tu bolsillo
        Descubre infinitas posibilidades para tus fotos con las 4 cámaras principales de tu equipo. 
        Pon a prueba tu creatividad y juega con la iluminación, diferentes planos y efectos para obtener
         grandes resultados.";
        $product -> save();



    }
}
