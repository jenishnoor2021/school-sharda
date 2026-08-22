<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('fnumber')->nullable();
            $table->string('date')->nullable();
            $table->string('medium')->nullable();
            $table->string('sname')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('bod')->nullable();
            $table->string('cast')->nullable();
            $table->string('adm_std')->nullable();
            $table->string('lschool')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('file')->nullable();
            $table->string('message')->nullable();
            $table->boolean('is_show')->default(0);
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
        Schema::dropIfExists('admissions');
    }
}
