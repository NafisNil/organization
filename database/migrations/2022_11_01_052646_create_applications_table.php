<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("logo");
            $table->string("name_bn");
            $table->string('name_en');
            $table->string('spouse')->nullable();
            $table->string('spouse_designation')->nullable();
            $table->string('father');
            $table->string('father_designation');
            $table->string('mother');
            $table->string('mother_designation');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('birthdate');
            $table->string('occupation');
            $table->text('education')->nullable();
            $table->text('csrf')->nullable();
            $table->string("logo_signature");
            $table->string("form_serial");
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
        Schema::dropIfExists('applications');
    }
}
