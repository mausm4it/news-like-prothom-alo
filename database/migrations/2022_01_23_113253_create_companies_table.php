<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('publisher_name')->nullable();
            $table->string('executive_editor_name')->nullable();
            $table->string('joit_editor_name')->nullable();

            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('phone',100)->nullable();
            $table->string('mobile')->nullable();
            $table->string('email',100)->nullable();
            $table->text('location_map')->nullable();
            $table->string('message')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });


        $company =  new \App\Models\Company();
        $company->name = "iSmart4News";
        $company->address_line1 = "sabujbag 4th len , Patuakhali, Bangladesh";
        $company->address_line2 = "Mazar road, jhalkuri, Narayanganj, Bangladesh";
        $company->phone = "+880 17898 08879";
        $company->email = "masum4itz@gmail.com";
        $company->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
