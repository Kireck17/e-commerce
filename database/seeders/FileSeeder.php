<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\File;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //APARTADO CATEGORIA
        $file = new File();
        $file-> fileable_id = 1;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://gruponatic.pe/pub/media/wysiwyg/banner-web--mascota.png";
        $file -> save();
        
        $file = new File();
        $file-> fileable_id = 2;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://zenstatic.blob.core.windows.net/blog/4c0q4xbj.pjy";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 3;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://tecnicos24-7.com/wp-content/uploads/2019/10/banner-3-1.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 4;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://i1.wp.com/www.fixealo.com/wp-content/uploads/2019/06/BANNER-PAGINA.jpg?ssl=1";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 5;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "http://ingernet.com.co/wp-content/uploads/2016/04/suministros-y-equipos.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 6;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://image.freepik.com/vector-gratis/banners-rebajas-moda-fotografia_52683-9828.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 7;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://www.confeccionesgarrido.com/wp-content/uploads/2016/12/banner-confecciones-garrido-primavera-verano-2017-hombre.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 8;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://irp-cdn.multiscreensite.com/ad618081/MOBILE/images/1d2e76bf-3427-4efb-b3d9-287427c3577b.jpg?1447848839118&v=7.3.45002";
        $file -> save();

//APARTADO VARIACIONES 
//1
        $file = new File();
        $file-> fileable_id = 1;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_877585-CBT43277996445_082020-O.webp";
        $file -> save();
//2
        $file = new File();
        $file-> fileable_id = 2;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_976294-CBT46282821253_062021-O.webp";
        $file -> save();
//3
        $file = new File();
        $file-> fileable_id = 3;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_676907-CBT45649300832_042021-O.webp";
        $file -> save();
//4
        $file = new File();
        $file-> fileable_id = 4;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_825029-MLM44817156040_022021-O.webp";
        $file -> save();
//5
        $file = new File();
        $file-> fileable_id = 5;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_731633-MLM43766394561_102020-O.webp";
        $file -> save();
        //6
        $file = new File();
        $file-> fileable_id = 6;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_624844-MLM44299820264_122020-O.webp";
        $file -> save();
        //7
        $file = new File();
        $file-> fileable_id = 7;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_872579-MLM42379516497_062020-O.webp";
        $file -> save();
        //8
        $file = new File();
        $file-> fileable_id = 8;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_792499-MLM42379516481_062020-O.webp";
        $file -> save();
        //9
        $file = new File();
        $file-> fileable_id = 9;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_628780-MLM45560478361_042021-O.webp";
        $file -> save();

        //10
        $file = new File();
        $file-> fileable_id = 10;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_886172-MLM43370610116_092020-O.webp";
        $file -> save();
        //11
        $file = new File();
        $file-> fileable_id = 11;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_2X_815374-MLM43370596459_092020-F.webp";
        $file -> save();
        //12
        $file = new File();
        $file-> fileable_id = 12;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_876632-MLM43370600377_092020-O.webp";
        $file -> save();

        //13
        $file = new File();
        $file-> fileable_id = 13;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_774846-MLM45644778711_042021-O.webp";
        $file -> save();

        //14
        $file = new File();
        $file-> fileable_id = 14;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_656032-MLM42947051399_072020-O.webp";
        $file -> save();
        //15
        $file = new File();
        $file-> fileable_id = 15;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_637381-MLM44241309181_122020-O.webp";
        $file -> save();
        //negro
        //16
        $file = new File();
        $file-> fileable_id = 16;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_836144-CBT45578637938_042021-O.webp";
        $file -> save();
        //17
        $file = new File();
        $file-> fileable_id = 17;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_963334-CBT45578637940_042021-O.webp";
        $file -> save();
        //18
        $file = new File();
        $file-> fileable_id = 18;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_839842-CBT45397675103_032021-O.webp";
        $file -> save();

        //blanco
        //19
        $file = new File();
        $file-> fileable_id = 19;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_816107-MLM32906321323_112019-O.webp";
        $file -> save();
        //20
        $file = new File();
        $file-> fileable_id = 20;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_841941-MLM32906320849_112019-O.webp";
        $file -> save();
        //21
        $file = new File();
        $file-> fileable_id = 21;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_794883-MLM44320778909_122020-O.webp";
        $file -> save();

        //22
        $file = new File();
        $file-> fileable_id = 22;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_880856-MLM46264998858_062021-O.webp";
        $file -> save();

        //23
        $file = new File();
        $file-> fileable_id = 23;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_741411-MLM42340485104_062020-O.webp";
        $file -> save();

        //24
        $file = new File();
        $file-> fileable_id = 24;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_888338-MLM32005403748_082019-O.webp";
        $file -> save();

        //25
        $file = new File();
        $file-> fileable_id = 25;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_852362-MLM43400803253_092020-O.webp";
        $file -> save();

        //26
        $file = new File();
        $file-> fileable_id = 26;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_766154-MLA46168604011_052021-O.webp";
        $file -> save();

        //27
        $file = new File();
        $file-> fileable_id = 27;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_607475-MLM45133046439_032021-O.webp";
        $file -> save();
        //28
        $file = new File();
        $file-> fileable_id = 28;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_989342-MLM45076499530_032021-O.webp";
        $file -> save();
        //29
        $file = new File();
        $file-> fileable_id = 29;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_607475-MLM45133046439_032021-O.webp";
        $file -> save();

        //30
        $file = new File();
        $file-> fileable_id = 30;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_675080-MLM45133046576_032021-O.webp";
        $file -> save();
        //31
        $file = new File();
        $file-> fileable_id = 31;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_750776-MLM45076511467_032021-O.webp";
        $file -> save();
        //32
        $file = new File();
        $file-> fileable_id = 40;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_675080-MLM45133046576_032021-O.webp";
        $file -> save();


        //33
        $file = new File();
        $file-> fileable_id = 41;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_971901-MLM45133046514_032021-O.webp";
        $file -> save();
        //34
        $file = new File();
        $file-> fileable_id = 42;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_730956-MLM45076518242_032021-O.webp";
        $file -> save();
        //35
        $file = new File();
        $file-> fileable_id = 43;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_971901-MLM45133046514_032021-O.webp";
        $file -> save();

        //36
        $file = new File();
        $file-> fileable_id = 44;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_975511-MLM43365555495_092020-O.webp";
        $file -> save();
        //37
        $file = new File();
        $file-> fileable_id = 45;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_702678-MLM43365534821_092020-O.webp";
        $file -> save();
        //38
        $file = new File();
        $file-> fileable_id = 46;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_975511-MLM43365555495_092020-O.webp";
        $file -> save();

        //39
        $file = new File();
        $file-> fileable_id = 47;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_619158-MLM43365561469_092020-O.webp";
        $file -> save();
        //40
        $file = new File();
        $file-> fileable_id = 48;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_682547-MLM43365572130_092020-O.webp";
        $file -> save();
        //41
        $file = new File();
        $file-> fileable_id = 49;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_619158-MLM43365561469_092020-O.webp";
        $file -> save();

        //42
        $file = new File();
        $file-> fileable_id = 50;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_770978-MLM32401929212_102019-O.webp";
        $file -> save();
        //43
        $file = new File();
        $file-> fileable_id = 51;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_725166-MLM32412301349_102019-O.webp";
        $file -> save();
        //44
        $file = new File();
        $file-> fileable_id = 52;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_2X_950042-MLM32412364563_102019-F.webp";
        $file -> save();
        
        //45
        $file = new File();
        $file-> fileable_id = 53;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_770978-MLM32401929212_102019-O.webp";
        $file -> save();
        //46
        $file = new File();
        $file-> fileable_id = 54;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_725166-MLM32412301349_102019-O.webp";
        $file -> save();
        //47
        $file = new File();
        $file-> fileable_id = 55;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_896586-MLM40592927498_012020-O.webp";
        $file -> save();

        //48
        $file = new File();
        $file-> fileable_id = 56;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_698873-MLM45294453027_032021-O.webp";
        $file -> save();
        //49
        $file = new File();
        $file-> fileable_id = 57;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_983514-MLM45294444234_032021-O.webp";
        $file -> save();
        //50
        $file = new File();
        $file-> fileable_id = 58;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_828862-MLM45294424655_032021-O.webp";
        $file -> save();


        //51
        $file = new File();
        $file-> fileable_id = 59;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_974991-MLM42091650241_062020-O.webp";
        $file -> save();
        //52
        $file = new File();
        $file-> fileable_id = 60;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_770305-MLM42091531336_062020-O.webp";
        $file -> save();
        //53
        $file = new File();
        $file-> fileable_id = 61;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_832162-MLM42091523426_062020-O.webp";
        $file -> save();


        //54
        $file = new File();
        $file-> fileable_id = 62;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_771397-MLM42960333048_072020-O.webp";
        $file -> save();
        //55
        $file = new File();
        $file-> fileable_id = 63;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_824343-MLM43683655362_102020-O.webp";
        $file -> save();
        //56
        $file = new File();
        $file-> fileable_id = 64;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_811186-MLM43571369397_092020-O.webp";
        $file -> save();


        //57
        $file = new File();
        $file-> fileable_id = 65;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_890385-MLM43571367227_092020-O.webp";
        $file -> save();
        //58
        $file = new File();
        $file-> fileable_id = 66;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_825397-MLM43571369653_092020-O.webp";
        $file -> save();
        //59
        $file = new File();
        $file-> fileable_id = 67;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_737512-MLM43275811357_082020-O.webp";
        $file -> save();


        //60
        $file = new File();
        $file-> fileable_id = 68;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_2X_694052-MLM44821950949_022021-F.webp";
        $file -> save();
        //61
        $file = new File();
        $file-> fileable_id = 69;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_2X_660682-MLM44821990511_022021-F.webp";
        $file -> save();
        //62
        $file = new File();
        $file-> fileable_id = 70;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_2X_694052-MLM44821950949_022021-F.webp";
        $file -> save();



        //63
        $file = new File();
        $file-> fileable_id = 71;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_692425-MLM45335611975_032021-O.webp";
        $file -> save();
        //64
        $file = new File();
        $file-> fileable_id = 72;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_850919-MLM45335632734_032021-O.webp";
        $file -> save();
        //65
        $file = new File();
        $file-> fileable_id = 73;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_936376-MLM45335612968_032021-O.webp";
        $file -> save();


        //66
        $file = new File();
        $file-> fileable_id = 74;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_633268-MLM42560793463_072020-O.webp";
        $file -> save();
        //67
        $file = new File();
        $file-> fileable_id = 75;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_640475-MLM42560756855_072020-O.webp";
        $file -> save();
        //68
        $file = new File();
        $file-> fileable_id = 76;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_938210-MLM42560881462_072020-O.webp";
        $file -> save();


        //69
        $file = new File();
        $file-> fileable_id = 77;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_826354-MLM45157424960_032021-O.webp";
        $file -> save();
        //70
        $file = new File();
        $file-> fileable_id = 78;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_913796-MLM45157444306_032021-O.webp";
        $file -> save();
        //71
        $file = new File();
        $file-> fileable_id = 79;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_659654-MLM45157424963_032021-O.webp";
        $file -> save();



        //72
        $file = new File();
        $file-> fileable_id = 80;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_857793-MLM46014341318_052021-O.webp";
        $file -> save();
        //73
        $file = new File();
        $file-> fileable_id = 81;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_693294-MLM46014272764_052021-O.webp";
        $file -> save();
        //74
        $file = new File();
        $file-> fileable_id = 82;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_832070-MLM46014290614_052021-O.webp";
        $file -> save();


        //75
        $file = new File();
        $file-> fileable_id = 83;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_795401-MLM45626946194_042021-O.webp";
        $file -> save();
        //76
        $file = new File();
        $file-> fileable_id = 84;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_931258-MLM45626934358_042021-O.webp";
        $file -> save();
        //77
        $file = new File();
        $file-> fileable_id = 85;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_987165-MLM45626935371_042021-O.webp";
        $file -> save();
        //78
        $file = new File();
        $file-> fileable_id = 86;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_941782-MLM45626940313_042021-O.webp";
        $file -> save();
        //79
        $file = new File();
        $file-> fileable_id = 87;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_931258-MLM45626934358_042021-O.webp";
        $file -> save();



        //80
        $file = new File();
        $file-> fileable_id = 88;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_610469-MLM41617738590_052020-O.webp";
        $file -> save();
        //81
        $file = new File();
        $file-> fileable_id = 89;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_706470-MLM41617742545_052020-O.webp";
        $file -> save();
        //82
        $file = new File();
        $file-> fileable_id = 90;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_833014-MLM41617723920_052020-O.webp";
        $file -> save();
        //83
        $file = new File();
        $file-> fileable_id = 91;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_610469-MLM41617738590_052020-O.webp";
        $file -> save();
        //84
        $file = new File();
        $file-> fileable_id = 92;
        $file-> fileable_type="App\Models\Variation";
        $file -> url = "https://http2.mlstatic.com/D_NQ_NP_706470-MLM41617742545_052020-O.webp";
        $file -> save();




         //85
         $file = new File();
         $file-> fileable_id = 93;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_993561-MLM45837907988_052021-O.webp";
         $file -> save();
         //86
         $file = new File();
         $file-> fileable_id = 94;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_644829-MLM31290049097_072019-O.webp";
         $file -> save();
         //87
         $file = new File();
         $file-> fileable_id = 95;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_984575-MLM45743429050_042021-O.webp";
         $file -> save();
         //88
         $file = new File();
         $file-> fileable_id = 96;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_801997-MLM44785578029_022021-O.webp";
         $file -> save();
         //89
         $file = new File();
         $file-> fileable_id = 97;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_871708-MLM44785524429_022021-O.webp";
         $file -> save();
         //90
         $file = new File();
         $file-> fileable_id = 98;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_626225-MLM32000482601_082019-O.webp";
         $file -> save();
         //91
         $file = new File();
         $file-> fileable_id = 99;
         $file-> fileable_type="App\Models\Variation";
         $file -> url = "https://http2.mlstatic.com/D_NQ_NP_966821-MLM44484017553_012021-O.webp";
         $file -> save();
        
        
    }
}
