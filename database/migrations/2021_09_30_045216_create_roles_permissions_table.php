<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('permission_id');

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

            //SETTING THE PRIMARY KEYS
            $table->primary(['role_id','permission_id']);
            $table->timestamps();
        });
        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "1";
        $rolepermit->permission_id = "1";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "1";
        $rolepermit->permission_id = "2";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "1";
        $rolepermit->permission_id = "3";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "1";
        $rolepermit->permission_id = "4";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "2";
        $rolepermit->permission_id = "5";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "2";
        $rolepermit->permission_id = "6";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "2";
        $rolepermit->permission_id = "7";
        $rolepermit->save();

        $rolepermit = new \App\Models\RolesPermission();
        $rolepermit->role_id = "2";
        $rolepermit->permission_id = "8";
        $rolepermit->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
