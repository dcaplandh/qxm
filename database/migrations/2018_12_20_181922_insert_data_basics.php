<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataBasics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      \DB::table('types')->insert([
       [ 'name' => 'Gas','icon' => 'gas.png' ],
       [ 'name' => 'Plomeria','icon' => 'plomeria.png' ],
       [ 'name' => 'Albañileria','icon' => 'albanileria.png' ],
       [ 'name' => 'Electricidad','icon' => 'electricidad.png' ],
       [ 'name' => 'Servicios Varios','icon' => 'varios.png' ],
       [ 'name' => 'Cerrajeria','icon' => 'cerrajeria.png' ],
       [ 'name' => 'Instalación','icon' => 'instalacion.png' ],
       [ 'name' => 'Pisos','icon' => 'pisos.png' ],
       [ 'name' => 'Cristaleria','icon' => 'cristaleria.png' ],
       [ 'name' => 'Mudanza','icon' => 'mudanza.png' ],
       [ 'name' => 'Muebles','icon' => 'muebles.png' ],
       [ 'name' => 'Belleza y Saludo','icon' => 'belleza.png' ],
       [ 'name' => 'Eventos','icon' => 'eventos.png' ],
       [ 'name' => 'Carpintería','icon' => 'carpinteria.png' ],
       [ 'name' => 'Sumate','icon' => 'sumate.png' ]
     ]);

     \DB::table('subtypes')->insert([
      [ 'name' => 'Inodoro'],
      [ 'name' => 'Ducha/Bañera'],
      [ 'name' => 'Cocina'],
      [ 'name' => 'Bacha'],
      [ 'name' => 'Bidet'],
      [ 'name' => 'Pérdidas'],
      [ 'name' => 'Griferia']
      ]);

      \DB::table('subtype_type')->insert([
       [ 'subtype_id' => '1', 'type_id' => 2],
       [ 'subtype_id' => '2', 'type_id' => 2],
       [ 'subtype_id' => '3', 'type_id' => 2],
       [ 'subtype_id' => '4', 'type_id' => 2],
       [ 'subtype_id' => '5', 'type_id' => 2],
       [ 'subtype_id' => '6', 'type_id' => 2],
       [ 'subtype_id' => '7', 'type_id' => 2],
       [ 'subtype_id' => '3', 'type_id' => 1],
       [ 'subtype_id' => '6', 'type_id' => 1],
       [ 'subtype_id' => '7', 'type_id' => 1]
       ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
