<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewssubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newssubcategories', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('category_id');
            $table->string('name',100);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('newscategories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });


        $category = new \App\Models\Newssubcategory();
       
        $category->name         = "জাতীয়";
        $category->category_id        = "1";
    
        $category->user_id         = "1";
        $category->save();


        $category = new \App\Models\Newssubcategory();
      
        $category->name         = "রাজনীতি";
        $category->category_id        = "2";
      
        $category->user_id         = "1";
        $category->save();


        $category = new \App\Models\Newssubcategory();
       
        $category->name         = "অর্থনীতি";
        $category->category_id        = "3";
        
        $category->user_id         = "1";
        $category->save();


        $category = new \App\Models\Newssubcategory();
        
        $category->name         = "জেলা বার্তা";
        $category->category_id        = "4";
       
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newssubcategory();
       
        $category->name         = "আন্তর্জাতিক";
        $category->category_id        = "5";
        
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newssubcategory();
       
        $category->name         = "বিনোদন";
        $category->category_id        = "6";
       
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newssubcategory();
        $category->id         = "7";
        $category->name         = "খেলাধুলা";
        $category->category_id        = "7";
        
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newssubcategory();
       
        $category->name         = "ধর্ম";
        $category->category_id        = "8";
       
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newssubcategory();
        
        $category->name         = "শিক্ষা ও সাহিত্য";
        $category->category_id        = "9";
       
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newssubcategory();
     
        $category->name         = "তথ্যপ্রযুক্তি";
        $category->category_id        = "10";
       
        $category->user_id         = "1";
        $category->save();




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newssubcategories');
    }
}
