<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('permission_id');

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

            //SETTING THE PRIMARY KEYS
            $table->primary(['user_id','permission_id']);
            $table->timestamps();
        });



        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "1";
        $userpermit->permission_id = "1";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "1";
        $userpermit->permission_id = "2";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "1";
        $userpermit->permission_id = "3";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "1";
        $userpermit->permission_id = "4";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "2";
        $userpermit->permission_id = "5";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "2";
        $userpermit->permission_id = "6";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "2";
        $userpermit->permission_id = "7";
        $userpermit->save();

        $userpermit = new \App\Models\UsersPermission();
        $userpermit->user_id = "2";
        $userpermit->permission_id = "8";
        $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "3";
        // $userpermit->permission_id = "28";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "3";
        // $userpermit->permission_id = "29";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "3";
        // $userpermit->permission_id = "30";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "3";
        // $userpermit->permission_id = "31";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "6";
        // $userpermit->permission_id = "6";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "6";
        // $userpermit->permission_id = "5";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "6";
        // $userpermit->permission_id = "7";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "6";
        // $userpermit->permission_id = "8";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "7";
        // $userpermit->permission_id = "9";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "7";
        // $userpermit->permission_id = "10";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "7";
        // $userpermit->permission_id = "11";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "7";
        // $userpermit->permission_id = "12";
        // $userpermit->save();


        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "8";
        // $userpermit->permission_id = "28";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "8";
        // $userpermit->permission_id = "29";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "8";
        // $userpermit->permission_id = "30";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "8";
        // $userpermit->permission_id = "31";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "9";
        // $userpermit->permission_id = "23";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "9";
        // $userpermit->permission_id = "24";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "9";
        // $userpermit->permission_id = "25";
        // $userpermit->save();

        
        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "16";
        // $userpermit->permission_id = "5";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "16";
        // $userpermit->permission_id = "6";
        // $userpermit->save();


        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "16";
        // $userpermit->permission_id = "7";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "16";
        // $userpermit->permission_id = "8";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "18";
        // $userpermit->permission_id = "9";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "18";
        // $userpermit->permission_id = "10";
        // $userpermit->save();


        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "18";
        // $userpermit->permission_id = "11";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "18";
        // $userpermit->permission_id = "12";
        // $userpermit->save();

        
        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "19";
        // $userpermit->permission_id = "9";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "19";
        // $userpermit->permission_id = "11";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "19";
        // $userpermit->permission_id = "12";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "20";
        // $userpermit->permission_id = "23";
        // $userpermit->save();

        
        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "20";
        // $userpermit->permission_id = "24";
        // $userpermit->save();

                
        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "20";
        // $userpermit->permission_id = "25";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "23";
        // $userpermit->permission_id = "23";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "23";
        // $userpermit->permission_id = "24";
        // $userpermit->save();

        // $userpermit = new \App\Models\UsersPermission();
        // $userpermit->user_id = "23";
        // $userpermit->permission_id = "25";
        // $userpermit->save();






  

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permissions');
    }
}
