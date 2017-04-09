<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileMakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_makers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('address');
            $table->string('contact');
            $table->string('phone');
            $table->date('created');
            $table->text('description');
            $table->text('terms');
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
        Schema::dropIfExists('profile_makers');
    }
}
