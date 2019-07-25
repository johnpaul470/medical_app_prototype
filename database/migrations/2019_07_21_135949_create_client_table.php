<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_id');
            $table->string('patient_id');
            $table->string('philhealth_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('gender');
            $table->string('age');
            $table->string('data_of_birth');
            $table->string('phone_number');
            $table->string('contact_person');
            $table->string('address_street');
            $table->string('address_barangay');
            $table->string('address_city');
            $table->string('address_province');
            $table->string('address_zip');
            $table->string('category_disease_ailment');
            $table->string('notes');            
            $table->string('member_since');
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
