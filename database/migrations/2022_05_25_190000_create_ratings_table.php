<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer("stars_food");
            $table->integer("stars_service");
            $table->integer("stars_relation_price_quality");
            $table->integer("stars_atmosphere");
            $table->string("comment")->nullable();
            $table->foreignId("establishment_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("user_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
