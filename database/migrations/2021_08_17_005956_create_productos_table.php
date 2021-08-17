<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('product',250);
            $table->string('img');
            $table->integer('price');
            $table->integer('price_member');
            $table->integer('stars');
            $table->string('brand');
            $table->longtext('description');
            $table->longtext('spects');
            $table->longtext('benefices');
            $table->integer('stock');
            $table->string('reference');
            $table->timestamps();
        });
        DB::table("productos")->insert([
            'product' => "Pet Brunch Helado Centro De Res Cobertura Hígado De Ternera Y Chips De Avena",
            'img' => 'img/producto2.png',
            'price' => 3828,
            'price_member' => 3608,
            'stars' => 4,
            'brand' => 'PET BRUNCH',
            'description' => 'Helado con centro de proteína (res), cobertura crema de hígado de ternera y chips de avena, presentación al vacío.',
            'spects' => 'Conservarse siempre congelado, duración en congelación, empaque cerrado 2 meses, luego de destapado pasar a recipiente en la nevera y consumir en los siguientes 4 días. Nuestro producto no pierde su forma, si se descongela, puedes volver a congelar (importante no mantener fuera de refrigeración por más de 1 hora)  * Entrega en 1 Día Hábil Ruta Tarde *',
            'benefices' => 'Receta apta para todas las edades, . Con antioxidantes naturales, libre de químicos, gluten y transgénicos; 100% natural, aptas para el consumo humano.',
            'stock' => 20,
            'reference' => '75GR',
        ]);
        DB::table("productos")->insert([
            'product' => "Pet Brunch Pastel Trucha Espinaca",
            'img' => 'img/producto8.png',
            'price' => 3700,
            'price_member' => 3145,
            'stars' => 5,
            'brand' => 'PET BRUNCH',
            'description' => '50 gr de pastel, presentación al vacío. Con antioxidantes naturales, libre de químicos, gluten y transgénicos. 100% natural y aptos para el consumo humano. Su delicioso horneado lo hará el snack ideal. ¡Apto para mascotas con dermatitis o manifestaciones alérgicas!',
            'spects' => 'Conservarse siempre refrigerado, duración en refrigeración empaque cerrado 15 días, luego de destapado pasar a recipiente en la nevera y consumir en los siguientes 4 días.  * Entrega en 1 Día Hábil Ruta Tarde *',
            'benefices' => 'Receta para todas las edades, buen aporte de proteína, buen aporte de omegas 3 y 6, de mordida suave y fácil digestión. Mix de espinacas y filete de trucha, ideal para mascotas con problemas de piel, estimula los ácidos grasos de la piel, generando humectación y fortalecimiento evitando caída de pelo. Se recomienda en mascotas de edad avanzada o con problemas articulares.',
            'stock' => 10,
            'reference' => '50GR',
        ]);
        DB::table("productos")->insert([
            'product' => "Reeld´s Galletas Blandas Swesi Bombonera (Brownies)",
            'img' => 'img/producto9.jpg',
            'price' => 23571,
            'price_member' => 20035,
            'stars' => 5,
            'brand' => 'REELD¨S',
            'description' => 'Suplemento alimenticio para servir como snack o premio para perros de todas las razas y edades, sin Chocolate.',
            'spects' => 'Galletas blandas muy palatable ideal en razas pequeñas por su textura, con extractos naturales y proteínas hidrolizadas que evitan intolerancias alimenticias por proteínas, empacadas en bomboneras de material reciclable, no contiene chocolate. Ideal para perro adulto y cachorro',
            'benefices' => 'Galletas blandas muy palatable especiales para razas pequeñas por su textura suave, contiene extracto natural de romero y canela como fuentes de antioxidantes y proteínas hidrolizadas que evitan la presentación de intolerancias alimenticias. 180 Unidades por Bombonera.',
            'stock' => 0,
            'reference' => '1300GR',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
