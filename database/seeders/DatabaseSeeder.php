<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Publication;
use App\Models\Establishment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // USUARIOS DE CADA TIPO
        User::create([
            "name"=>"Victoria Almeida Calderón",
            "user"=>"Administrador web",
            "email"=>"admin@admin.com",
            "image"=>"user-default.png",
            "password"=>bcrypt("admin12345"),
            "type"=>"admin"
        ]);
        User::create([
            "name"=>"Victoria Almeida Calderón",
            "user"=>"Victoria cliente",
            "email"=>"viky2000.22@gmail.com",
            "image"=>"user-default.png",
            "password"=>bcrypt("viky"),
            "type"=>"customer"
        ]);
        User::create([
            "name"=>"Victoria Almeida Calderón",
            "user"=>"Victoria usuario",
            "email"=>"viky@viky.com",
            "image"=>"user-default.png",
            "password"=>bcrypt("viky"),
            "type"=>"user"
        ]);
        Customer::create([
            "user_id"=>"2"
        ]);
        // 3 ESTABLECIMIENTOS
        Establishment::create([
            "name" => "Node SA",
            "profile" => "629a45b0243e1-bg-showcase-3.jpg",
            "address" => "Avenida De Andalucía 15, 21400 Ayamonte, Provincia de Huelva, España",
            "menu" => "629a45b024bca-bg-showcase-2.jpg",
            "details" => "Trabajamos con unos de los lenguajes mas usado en los ultimos años.",
            "slug" => "Node-SA",
            "tlf" => "665570251",
            "SMS" => 1,
            "customer_id"=>1
        ]);
        Establishment::create([
            "name" => "lidl",
            "profile" => "629a493a2ab6b-lidl.jpg",
            "address" => "Lidl, Ayamonte, Provincia de Huelva 21400, España",
            "menu" => "629a493a2ba3a-lidl.jpg",
            "details" => "Empresa alemana",
            "slug" => "Lidl",
            "tlf" => "665570251",
            "SMS" => 0,
            "customer_id"=>1
        ]);
        Establishment::create([
            "name" => "Passage",
            "profile" => "629a4a1a4462e-passage.jpg",
            "address" => "Passage, Plaza de la Laguna 11, Ayamonte, Provincia de Huelva 21400, España",
            "menu" => "629a4a1a44ea1-passage.jpg",
            "details" => "Cafeteria con mucho encanto",
            "slug" => "Passage",
            "tlf" => "665570251",
            "SMS" => 1,
            "customer_id"=>1
        ]);
        //3 PUBLICACIONES DE ESTABLECIMIENTOS
        Publication::create([
            "title" => "Promocion champu",
            "image" => "champu_anticaspa_hs_promocion",
            "description" => "Un 30% de descuento en champu hs anticaspa",
            "establishment_id" => 2
        ]);
        Publication::create([
            "title" => "Rebajas cosmeticos",
            "image" => "Cosmeticos_lidl",
            "description" => "un 50% de rebajas en cosmeticos de nuestra marca",
            "establishment_id" => 2
        ]);
        Publication::create([
            "title" => "Cafe italiano por tiempo limitado",
            "image" => "champu_anticaspa_hs_promocion",
            "description" => "Cafe importado de italia con nata y leche condensada",
            "establishment_id" => 3
        ]);
        Publication::create([
            "title" => "Descuento en paginas web hecha con nodejs",
            "image" => "Pagina_node",
            "description" => "Pagina web hecha con nodejsa un 20% de descuento",
            "establishment_id" => 1
        ]);
        Event::create([
            "title" => "El rocio",
            "description" => '<p>Tras recorrer en romer&iacute;a, a pie, a&nbsp;<a href="https://es.wikipedia.org/wiki/Caballo">caballo</a>, en&nbsp;<a href="https://es.wikipedia.org/wiki/Carreta">carretas</a>, carros engalanados en coches de caballos o en &laquo;charrets&raquo;, el camino, el cual pasa en parte por el parque nacional de&nbsp;<a href="https://es.wikipedia.org/wiki/Do%C3%B1ana">Do&ntilde;ana</a>, una inmensa multitud de&nbsp;<a href="https://es.wikipedia.org/wiki/Devoci%C3%B3n">devotos</a>&nbsp;llegan a las puertas de la ermita, donde los almonte&ntilde;os la noche del domingo al lunes de Pentecost&eacute;s, realizan lo que popularmente llaman &laquo;el salto de la reja&raquo;. A continuaci&oacute;n, los almonte&ntilde;os sacan a la Virgen que llaman &laquo;Blanca Paloma&raquo; en&nbsp;<a href="https://es.wikipedia.org/wiki/Procesi%C3%B3n">procesi&oacute;n</a>&nbsp;y la llevan en hombros por la aldea. El trayecto recorre las distintas hermandades desde donde los sacerdotes le rezan la Salve, acompa&ntilde;ados por el pueblo rociero.</p>

            <p>La romer&iacute;a de El Roc&iacute;o es una de las romer&iacute;as m&aacute;s famosas y multitudinarias que existen. Cuenta con m&aacute;s de 125 hermandades (hasta 2021),<a href="https://es.wikipedia.org/wiki/Romer%C3%ADa_de_El_Roc%C3%ADo#cite_note-1">1</a>​ y entre las personas ilustres que han visitado la aldea de El Roc&iacute;o se encuentra el papa&nbsp;<a href="https://es.wikipedia.org/wiki/Juan_Pablo_II">Juan Pablo II</a>&nbsp;el 14 de junio de 1993. El que dijo ya la famosa frase &quot;Que todo el mundo sea Rociero&quot;<a href="https://es.wikipedia.org/wiki/Romer%C3%ADa_de_El_Roc%C3%ADo#cite_note-2">2</a>​<a href="https://es.wikipedia.org/wiki/Romer%C3%ADa_de_El_Roc%C3%ADo#cite_note-3">3</a>​ Adem&aacute;s, un mes antes de la explosi&oacute;n de la pandemia en Espa&ntilde;a, los reyes Felipe VI y Letizia, visitaron a la Virgen del Roc&iacute;o en Almonte y Do&ntilde;ana. Con motivo de la conmemoraci&oacute;n de los 50 a&ntilde;os del parque nacional de Do&ntilde;ana.&nbsp;<a href="https://es.wikipedia.org/wiki/Romer%C3%ADa_de_El_Roc%C3%ADo#cite_note-4">4</a>​</p>
            
            <p>La salida de la Virgen de El Roc&iacute;o en la madrugada del lunes de Pentecost&eacute;s se realiza tras acabar el rezo del&nbsp;<a href="https://es.wikipedia.org/wiki/Santo_Rosario">Santo Rosario</a>&nbsp;que comienza a medianoche, pasando todos los simpecados de la Hermandades filiales por delante de la ermita hasta que llega el de la hermandad matriz de Almonte, que entra en la ermita y debe llegar al presbiterio, siendo en ese instante cuando se produce el salto de la reja. La Virgen se encuentra en unas parihuelas en el presbiterio. Por todo esto, nunca puede predecirse con exactitud la hora de salida de la Virgen. En el a&ntilde;o 2019 el salto a la reja fue a las 2:49h, quince minutos m&aacute;s tarde que en el 2018.</p>',
            "slug" => 'El-rocio',
            "initDate_at" => "2022-05-30 00:00:00",
            "finishDate_at" => "2022-06-05 00:00:00", 
            "image" => "62a1c8b495436-el-rocio.jpg",
            "user_id" => 1
        ]);
        Event::create([
            "title" => "Semana santa",
            "description" => 'La Semana Santa es para Ayamonte su gran acontecimiento anual, se cuentan los días que faltan para el Domingo de Señas y se vive cada día para la preparación de la Semana Santa Ayamontina, quizás el arraigo viene  producida por una antigüedad de siglos, ejemplo de ello es La Hermandad del Santo Entierro, Soledad y Vera Cruz. Esta Hermandad  fue fundada en el siglo XVI por Dª. Teresa de Zúñiga, Duquesa de Bejer, aunque más tarde a causa de las vicisitudes por las qué pasó el convento y la Iglesia de San Francisco, permaneció años sin salir y la Iglesia cerrada al culto, hasta que buenos ayamontinos se hicieron cargo de ella y restauraron en lo posible la Iglesia y salieron de nuevo las imágenes a la calle en la Semana Grande de Ayamonte.',
            "slug" => 'Semana-santa',
            "initDate_at" => "2022-04-11 00:00:00",
            "finishDate_at" => "2022-04-17 00:00:00", 
            "image" => "62a1c8b495436-el-rocio.jpg",
            "user_id" => 1
        ]);
    }
}
