<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        $role =  new \App\Models\Role();
        $role->id = "1";
        $role->name = "Super Admin";
        $role->slug = "super-admin";
        $role->save();

        $role = new \App\Models\Role();
        $role->id = "2";
        $role->name = "Repoter";
        $role->slug = "repoter";
        $role->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
