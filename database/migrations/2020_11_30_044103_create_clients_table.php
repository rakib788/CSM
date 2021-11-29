<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('account_id');
            $table->string('account_type');
            $table->string('contact_name');
            $table->string('company');
            $table->string('address');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('state');
            $table->string('zipcode');
            $table->string('w_number');
            $table->string('c_number');
            $table->string('o_number');
            $table->string('website');
            $table->longText('notes');
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
        Schema::dropIfExists('clients');
    }
}
