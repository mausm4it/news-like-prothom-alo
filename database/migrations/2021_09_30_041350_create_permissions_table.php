<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        $permission = new \App\Models\Permission();
        $permission->id = "1";
        $permission->name = "view";
        $permission->slug = "view";
        $permission->save();

        $permission = new \App\Models\Permission();
        $permission->id = "2";
        $permission->name = "create";
        $permission->slug = "create";
        $permission->save();

        $permission = new \App\Models\Permission();
        $permission->id = "3";
        $permission->name = "edit";
        $permission->slug = "edit";
        $permission->save();

        $permission = new \App\Models\Permission();
        $permission->id = "4";
        $permission->name = "delete";
        $permission->slug = "delete";
        $permission->save();


        $permission = new \App\Models\Permission();
        $permission->id = "5";
        $permission->name = "view";
        $permission->slug = "view";
        $permission->save();

        $permission = new \App\Models\Permission();
        $permission->id = "6";
        $permission->name = "create";
        $permission->slug = "create";
        $permission->save();

        $permission = new \App\Models\Permission();
        $permission->id = "7";
        $permission->name = "edit";
        $permission->slug = "edit";
        $permission->save();

        $permission = new \App\Models\Permission();
        $permission->id = "8";
        $permission->name = "delete";
        $permission->slug = "delete";
        $permission->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
