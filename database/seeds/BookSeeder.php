<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 172; $i++) { 
            $name = $this->name($i);
            $precio = $this->precio($i);
            $autor = $this->autor($i);
            $d=mt_rand(1,100000);

            App\Books::create([
                'cod' => $d,
                'name' => "$name",
                'year' => '2019',
                'quantity' => 4,
                'precie' => $precio,
                'id_author' => $autor,
                'id_edition' => 1
            ]);
        }
    }

    public function precio($i) 
    {
        switch ($i) {
            case '1':return "126500";break;
            case '2':return "161000";break;
            case '3':return "253000";break;
            case '4':return "182850";break;
            case '5':return "161000";break;
            case '6':return "138690";break;
            case '7':return "155250";break;
            case '8':return "192050";break;
            case '9':return "74750";break;
            case '10':return "195500";break;
            case '11':return "175950";break;
            case '12':return "185150";break;
            case '13':return "212750";break;
            case '14':return "103500";break;
            case '15':return "230000";break;
            case '16':return "230000";break;
            case '17':return "127650";break;
            case '18':return "241500";break;
            case '19':return "207000";break;
            case '20':return "92000";break;
            case '21':return "92000";break;
            case '22':return "92000";break;
            case '23':return "92000";break;
            case '24':return "219650";break;
            case '25':return "115000";break;
            case '26':return "164450";break;
            case '27':return "162150";break;
            case '28':return "126500";break;
            case '29':return "162150";break;
            case '30':return "179400";break;
            case '31':return "144900";break;
            case '32':return "103500";break;
            case '33':return "92000";break;
            case '34':return "195500";break;
            case '35':return "391000";break;
            case '36':return "289800";break;
            case '37':return "391000";break;
            case '38':return "379500";break;
            case '39':return "301070";break;
            case '40':return "155250";break;
            case '41':return "185150";break;
            case '42':return "185150";break;
            case '43':return "134550";break;
            case '44':return "242650";break;
            case '45':return "115000";break;
            case '46':return "223100";break;
            case '47':return "185150";break;
            case '48':return "144900";break;
            case '49':return "182850";break;
            case '50':return "144900";break;
            case '51':return "115000";break;
            case '52':return "115000";break;
            case '53':return "161000";break;
            case '54':return "161000";break;
            case '55':return "162150";break;
            case '56':return "161000";break;
            case '57':return "170200";break;
            case '58':return "212750";break;
            case '59':return "202400";break;
            case '60':return "138000";break;
            case '61':return "169050";break;
            case '62':return "162150";break;
            case '63':return "155250";break;
            case '64':return "169050";break;
            case '65':return "233450";break;
            case '66':return "216200";break;
            case '67':return "216200";break;
            case '68':return "212750";break;
            case '69':return "169050";break;
            case '70':return "209300";break;
            case '71':return "185150";break;
            case '72':return "115000";break;
            case '73':return "126500";break;
            case '74':return "158700";break;
            case '75':return "169050";break;
            case '76':return "103500";break;
            case '77':return "253000";break;
            case '78':return "162150";break;
            case '79':return "147200";break;
            case '80':return "144900";break;
            case '81':return "103500";break;
            case '82':return "103500";break;
            case '83':return "161000";break;
            case '84':return "126500";break;
            case '85':return "172500";break;
            case '86':return "103500";break;
            case '87':return "92000";break;
            case '88':return "92000";break;
            case '89':return "92000";break;
            case '90':return "126500";break;
            case '91':return "138000";break;
            case '92':return "103500";break;
            case '93':return "138000";break;
            case '94':return "138000";break;
            case '95':return "92000";break;
            case '96':return "103500";break;
            case '97':return "103500";break;
            case '98':return "103500";break;
            case '99':return "126500";break;
            case '100':return "138000";break;
            case '101':return "138000";break;
            case '102':return "92000";break;
            case '103':return "138000";break;
            case '104':return "126500";break;
            case '105':return "138000";break;
            case '106':return "126500";break;
            case '107':return "92000";break;
            case '108':return "138000";break;
            case '109':return "126500";break;
            case '110':return "92000";break;
            case '111':return "92000";break;
            case '112':return "92000";break;
            case '113':return "126500";break;
            case '114':return "126500";break;
            case '115':return "92000";break;
            case '116':return "103500";break;
            case '117':return "172500";break;
            case '118':return "322000";break;
            case '119':return "115000";break;
            case '120':return "125350";break;
            case '121':return "218500";break;
            case '122':return "169050";break;
            case '123':return "161000";break;
            case '124':return "161000";break;
            case '125':return "195500";break;
            case '126':return "218500";break;
            case '127':return "172500";break;
            case '128':return "161000";break;
            case '129':return "172500";break;
            case '130':return "149500";break;
            case '131':return "172500";break;
            case '132':return "179400";break;
            case '133':return "115000";break;
            case '134':return "232990";break;
            case '135':return "106950";break;
            case '136':return "103500";break;
            case '137':return "138000";break;
            case '138':return "162150";break;
            case '139':return "212750";break;
            case '140':return "161000";break;
            case '141':return "103500";break;
            case '142':return "103500";break;
            case '143':return "138000";break;
            case '144':return "161000";break;
            case '145':return "169050";break;
            case '146':return "103500";break;
            case '147':return "297850";break;
            case '148':return "195500";break;
            case '149':return "185150";break;
            case '150':return "207000";break;
            case '151':return "141450";break;
            case '152':return "161000";break;
            case '153':return "101200";break;
            case '154':return "0";break;
            case '155':return "185150";break;
            case '156':return "179400";break;
            case '157':return "184460";break;
            case '158':return "161000";break;
            case '159':return "104650";break;
            case '160':return "297850";break;
            case '161':return "305900";break;
            case '162':return "391000";break;
            case '163':return "126500";break;
            case '164':return "115000";break;
            case '165':return "138000";break;
            case '166':return "103500";break;
            case '167':return "115000";break;
            case '168':return "103500";break;
            case '169':return "115000";break;
            case '170':return "92000";break;
            case '171':return "195500";break;
            case '172':return "126500";break;
        }
    }

    public function name($i) 
    {
        switch ($i) {
            case '1':return "El siglo";break;
            case '2':return "Filosofia Frente al comunismo";break;
            case '3':return "Historia del Siglo XX";break;
            case '4':return "Antropologia del Deporte";break;
            case '5':return "Siete aproximaciones a Walter Benjamin";break;
            case '6':return "Capital Cultural,Escuela y espacio Social";break;
            case '7':return "Estructura Social de la economia";break;
            case '8':return "Sentido social del gusto el";break;
            case '9':return "Inseguridad social ,La";break;
            case '10':return "Gorila Invisible El";break;
            case '11':return "Por una vuelta al socialismo";break;
            case '12':return "Ultimo Round (02 Tomos ) Edicion 2017";break;
            case '13':return "Vuelta al dia en 80 mundos la (01 tomos ) edicion 2017";break;
            case '14':return "¡Izquierdas de todo el mundo uniós ";break;
            case '15':return "Cerebro Lector ,El";break;
            case '16':return "Cerebro Matematico ,El ";break;
            case '17':return "En busca de la Mente";break;
            case '18':return "Seminario la bestia T1";break;
            case '19':return "Seminario la bestia T2";break;
            case '20':return "Cuentos de los pueblos del mundo I";break;
            case '21':return "Cuentos de los pueblos del mundo II";break;
            case '22':return "Cuentos de los pueblos del mundo III";break;
            case '23':return "Cuentos de los pueblos del mundo IV";break;
            case '24':return "Datos  Pruebas e Ideas ";break;
            case '25':return "Diablo del Diablo , El";break;
            case '26':return "Repensar la justicia social";break;
            case '27':return "Giro Cultural ";break;
            case '28':return "Marc Bloch El Historiador en su Laboratorio";break;
            case '29':return "Por una repolitizacion del mundo";break;
            case '30':return "Mitomanias de los sexos";break;
            case '31':return "Mujeres y Varones";break;
            case '32':return "Inacabada revolucion feminista ,la mujeres reproduccion social y lucho por lo comun";break;
            case '33':return "Animales extinguidos del 1 al 10 ";break;
            case '34':return "Ciencia en el Aula ,La";break;
            case '35':return "El cartel Rojo";break;
            case '36':return "Imperialismo y Barbarie";break;
            case '37':return "La decadencia del imperio EEUU en un mundo caòtico ";break;
            case '38':return "Mi hermano";break;
            case '39':return "Terrerismo occidental";break;
            case '40':return "Que es la Critica";break;
            case '41':return "Arqueologia del Saber ,La ";break;
            case '42':return "Discursos y verdades";break;
            case '43':return "Origen de la Hermeneuticas de si el ";break;
            case '44':return "Palabras y las cosas las ";break;
            case '45':return "Una Lectura de Kant ";break;
            case '46':return "Vigilar y castigar";break;
            case '47':return "Pedagogia de la esperanza ";break;
            case '48':return "Maestro sin recetas ,el";break;
            case '49':return "Padagogias del Oprimido";break;
            case '50':return "Educacion como practica de la libertad ,La";break;
            case '51':return "Grito Manso ,el ";break;
            case '52':return "Pedagogia de la Autonomia";break;
            case '53':return "Pedagogia de la indignacion";break;
            case '54':return "Cartas a quien pretende enseñar";break;
            case '55':return "De Alemanes a nazis";break;
            case '56':return "Guia para criar hijos curiosos";break;
            case '57':return "Revolucion Francesa en debate la ";break;
            case '58':return "Venas abiertas de americas latina klas (edicion 2015) ";break;
            case '59':return "Memoria del Fuego 1( Edicion 2015)";break;
            case '60':return "Cancion de Nosotros ,la (Edicion 2017)";break;
            case '61':return "Cazadores de Historia ,El";break;
            case '62':return "Cerrado por Fútbol ";break;
            case '63':return "Dias de noche de amor de guerra";break;
            case '64':return "Futbol a sol y sombra,el (edicion 2014)";break;
            case '65':return "Hijos de los dias ,Los ( Edicion 2015)";break;
            case '66':return "Memoria del Fuego 3 (Edicion 2015)";break;
            case '67':return "Patas Arribas";break;
            case '68':return "Espejos(2015)";break;
            case '69':return "Libro de los abrazos ,El(Edicion 2015)";break;
            case '70':return "Memoria del Fuego 2 ( Edicion 2015)     ";break;
            case '71':return "Palabras Andantes Las (Ediciones 2015)";break;
            case '72':return "Vagamundo (edicion 2015)";break;
            case '73':return "Cinco reflexiones sobre Marc Bloch";break;
            case '74':return "Ciencia en en la cocina de 1700 a nuestros dias ,La ";break;
            case '75':return "Ciencia es eso que nos pasa mientras estamos ocupados haciendo otra cosa ,La";break;
            case '76':return "Nihilismo y capitalismo";break;
            case '77':return "Antoligia de Gramsci(2017)";break;
            case '78':return "Filosofia del Budismo Zen";break;
            case '79':return "Sociedad del cansancio Nueva edicion ampliada";break;
            case '80':return "Psicopolitica la ";break;
            case '81':return "Mètodo salvaje ,el:  El encuentrocon el Otro en el periodismo narrativo ";break;
            case '82':return "¿A quien le toca el durazno?";break;
            case '83':return "¿De dónde vienen esas voces?";break;
            case '84':return "¿Por qué es tan guapo el pavo real?";break;
            case '85':return "¿Por qué está trompudo el elefante?";break;
            case '86':return "09 Meses bajo la lupa";break;
            case '87':return "Bichos del 1 al 10 Reedicion 2018";break;
            case '88':return "Dinosaurio del 1 al 10";break;
            case '89':return "Ecologia del 01 al 10 ";break;
            case '90':return "Ecologia hasta en la sopa";break;
            case '91':return "El baño no fue siempre asi";break;
            case '92':return "El castillo de la bruja desordenada";break;
            case '93':return "El cine no fue siempre asi";break;
            case '94':return "El detective Intrigulis y el secuestro de Mimì";break;
            case '95':return "El sistema solar del 1 al 10 ";break;
            case '96':return "Esa no es mi cola";break;
            case '97':return "Esas no son mis orjas";break;
            case '98':return "Esas no son mis patas";break;
            case '99':return "Fisica Hasta en la sopa ";break;
            case '100':return "Guia Turistica de la tierra extrema";break;
            case '101':return "Guia Turisticas del sistema solar";break;
            case '102':return "Habitantes del mar del 1 al  10 ";break;
            case '103':return "La escuela no fue siempre asi";break;
            case '104':return "La luz y los colores para los màs curiosos ";break;
            case '105':return "La medicina no fue siempre asi ";break;
            case '106':return "La tierra y el sol para los mas curiosos";break;
            case '107':return "Lo que tù quieras";break;
            case '108':return "Los libros no fueron siempre asì";break;
            case '109':return "Matematica hasta en la sopa";break;
            case '110':return "Pelos y mas pelos ";break;
            case '111':return "Pieles y màs Pieles ";break;
            case '112':return "Plumas y mas plumas ";break;
            case '113':return "Terremotos y volcanes para los curiosos";break;
            case '114':return "Tormetas y tormados para los màs curiosos";break;
            case '115':return "Tu cuerpo del 1 al 10";break;
            case '116':return "Vitamina ¿Dónde estas?";break;
            case '117':return "Niños que contruyen su poder de leer y ";break;
            case '118':return "Nuestro Marx";break;
            case '119':return "Alejandra Kollantal : Relaciones sexuales y la lucha de clases,El comunismo y la familia";break;
            case '120':return "En defensa de la Sociologia";break;
            case '121':return "Reensamblar lo social";break;
            case '122':return "Gramaticas de la accion social";break;
            case '123':return "Bigudí";break;
            case '124':return "De familia en Familia";break;
            case '125':return "El perro de Nino no tenia";break;
            case '126':return "Mi pequeño";break;
            case '127':return "Palabras para la noche";break;
            case '128':return "Tan Tan Grande ";break;
            case '129':return "Me han dicho que la luna";break;
            case '130':return "Mi abuelo";break;
            case '131':return "Una rosa en la trompa de un elefante";break;
            case '132':return "Eduardo Galeano Un ilegal en el paraiso";break;
            case '133':return "Sociologia y Religion";break;
            case '134':return "Feminismo Inmodificado";break;
            case '135':return "Introduccion al pensamiento cientifico de punta ,hoy";break;
            case '136':return "Significado e impacto social de las ciencias de la complejidad";break;
            case '137':return "Cuando sea Grande Quiero Ser ";break;
            case '138':return "Dentro de la Cebra";break;
            case '139':return "Biblioteca de Noche ,La";break;
            case '140':return "Con Borges";break;
            case '141':return "Educacion popular en el siglo XXI";break;
            case '142':return "Reinventar la educacion abrir caminos a la matarmofosis de la humanidad ";break;
            case '143':return "Estudios sobre el pensamiento filosòfico latinoamericano";break;
            case '144':return "Fisica Cuantica ,La";break;
            case '145':return "Seis Estudios de Psicologia";break;
            case '146':return "China Secreto del Crecimiento";break;
            case '147':return "Memoria de los vencidos ,la";break;
            case '148':return "Por un medio ambiente sano";break;
            case '149':return "Contrademocracia,La";break;
            case '150':return "Sociedades iguales ,la";break;
            case '151':return "Borgues,Un escritor en las orillas ";break;
            case '152':return "Siete ensayos sobre Walter Bejamin";break;
            case '153':return "Mochilero cientificos el";break;
            case '154':return "Datos Pruebas e Ideas ";break;
            case '155':return "Razones para la esperanza";break;
            case '156':return "Editar desde la Izquierda";break;
            case '157':return "Que es y para que sirve la filosofia politica";break;
            case '158':return "Sociedad de los  cautivos  la";break;
            case '159':return "Nuevas caras de la derechas Las";break;
            case '160':return "Alzeimer y otras demencia";break;
            case '161':return "Che Gevara Pensamiento y Politica de la utopia";break;
            case '162':return "Pensamiento Monògamo poiamoros";break;
            case '163':return "Lev Vygotsky :Psicologia en la revolucion rusa";break;
            case '164':return "Contra -Amor ,Poliamor,Relaciones abierta y sexo casual ,reflexiones de lesbiana del desarrollo";break;
            case '165':return "Ètica y politica en la filosofia de la liberacion ";break;
            case '166':return "Lenin:La revolucion es una fiesta";break;
            case '167':return "Movimiento sociales hacias otros mundos posibles los ";break;
            case '168':return "Multiculturismo interculturalidad y educacion contribuciones desde america Latina ";break;
            case '169':return "Carceles de la Miseria -Ampliada";break;
            case '170':return "Tesis sobre la historia y otro fragmentos ";break;
            case '171':return "Historias de la America Latina ";break;
            case '172':return "Todo lo que usted siempre quiso saber so ";break;
        }
    }

    public function autor($i) 
    {
        switch ($i) {
            case '1':return 1;break;
            case '2':return 1;break;
            case '3':return 2;break;
            case '4':return 3;break;
            case '5':return 4;break;
            case '6':return 5;break;
            case '7':return 5;break;
            case '8':return 5;break;
            case '9':return 6;break;
            case '10':return 7;break;
            case '11':return 8;break;
            case '12':return 9;break;
            case '13':return 9;break;
            case '14':return 10;break;
            case '15':return 11;break;
            case '16':return 11;break;
            case '17':return 11;break;
            case '18':return 12;break;
            case '19':return 12;break;
            case '20':return 13;break;
            case '21':return 13;break;
            case '22':return 13;break;
            case '23':return 13;break;
            case '24':return 13;break;
            case '25':return 13;break;
            case '26':return 14;break;
            case '27':return 15;break;
            case '28':return 16;break;
            case '29':return 17;break;
            case '30':return 18;break;
            case '31':return 18;break;
            case '32':return 19;break;
            case '33':return 20;break;
            case '34':return 20;break;
            case '35':return 20;break;
            case '36':return 20;break;
            case '37':return 20;break;
            case '38':return 20;break;
            case '39':return 20;break;
            case '40':return 21;break;
            case '41':return 21;break;
            case '42':return 21;break;
            case '43':return 21;break;
            case '44':return 21;break;
            case '45':return 21;break;
            case '46':return 21;break;
            case '47':return 22;break;
            case '48':return 22;break;
            case '49':return 22;break;
            case '50':return 22;break;
            case '51':return 22;break;
            case '52':return 22;break;
            case '53':return 22;break;
            case '54':return 22;break;
            case '55':return 23;break;
            case '56':return 24;break;
            case '57':return 25;break;
            case '58':return 26;break;
            case '59':return 26;break;
            case '60':return 26;break;
            case '61':return 26;break;
            case '62':return 26;break;
            case '63':return 26;break;
            case '64':return 26;break;
            case '65':return 26;break;
            case '66':return 26;break;
            case '67':return 26;break;
            case '68':return 26;break;
            case '69':return 26;break;
            case '70':return 26;break;
            case '71':return 26;break;
            case '72':return 26;break;
            case '73':return 27;break;
            case '74':return 28;break;
            case '75':return 29;break;
            case '76':return 30;break;
            case '77':return 31;break;
            case '78':return 32;break;
            case '79':return 32;break;
            case '80':return 32;break;
            case '81':return 33;break;
            case '82':return 34;break;
            case '83':return 34;break;
            case '84':return 34;break;
            case '85':return 34;break;
            case '86':return 34;break;
            case '87':return 34;break;
            case '88':return 34;break;
            case '89':return 34;break;
            case '90':return 34;break;
            case '91':return 34;break;
            case '92':return 34;break;
            case '93':return 34;break;
            case '94':return 34;break;
            case '95':return 34;break;
            case '96':return 34;break;
            case '97':return 34;break;
            case '98':return 34;break;
            case '99':return 34;break;
            case '100':return 34;break;
            case '101':return 34;break;
            case '102':return 34;break;
            case '103':return 34;break;
            case '104':return 34;break;
            case '105':return 34;break;
            case '106':return 34;break;
            case '107':return 34;break;
            case '108':return 34;break;
            case '109':return 34;break;
            case '110':return 34;break;
            case '111':return 34;break;
            case '112':return 34;break;
            case '113':return 34;break;
            case '114':return 34;break;
            case '115':return 34;break;
            case '116':return 34;break;
            case '117':return 35;break;
            case '118':return 36;break;
            case '119':return 37;break;
            case '120':return 38;break;
            case '121':return 39;break;
            case '122':return 40;break;
            case '123':return 41;break;
            case '124':return 41;break;
            case '125':return 41;break;
            case '126':return 41;break;
            case '127':return 41;break;
            case '128':return 41;break;
            case '129':return 41;break;
            case '130':return 41;break;
            case '131':return 41;break;
            case '132':return 42;break;
            case '133':return 43;break;
            case '134':return 44;break;
            case '135':return 45;break;
            case '136':return 45;break;
            case '137':return 46;break;
            case '138':return 46;break;
            case '139':return 47;break;
            case '140':return 47;break;
            case '141':return 48;break;
            case '142':return 49;break;
            case '143':return 50;break;
            case '144':return 51;break;
            case '145':return 52;break;
            case '146':return 53;break;
            case '147':return 54;break;
            case '148':return 55;break;
            case '149':return 56;break;
            case '150':return 56;break;
            case '151':return 57;break;
            case '152':return 57;break;
            case '153':return 58;break;
            case '154':return 59;break;
            case '155':return 60;break;
            case '156':return 61;break;
            case '157':return 62;break;
            case '158':return 63;break;
            case '159':return 64;break;
            case '160':return 65;break;
            case '161':return 65;break;
            case '162':return 66;break;
            case '163':return 67;break;
            case '164':return 68;break;
            case '165':return 68;break;
            case '166':return 68;break;
            case '167':return 68;break;
            case '168':return 68;break;
            case '169':return 69;break;
            case '170':return 70;break;
            case '171':return 71;break;
            case '172':return 72;break;
        }
    }
}
