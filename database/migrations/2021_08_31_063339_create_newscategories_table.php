<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewscategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newscategories', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->string('type',100)->nullable();
            $table->string('image',255)->nullable();
            $table->integer('post_counter')->default(0);
            $table->integer('menu_publish')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        $category = new \App\Models\Newscategory();
       
        $category->name         = "জাতীয়";
        $category->slug        = "জাতীয়";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();


        $category = new \App\Models\Newscategory();
      
        $category->name         = "রাজনীতি";
        $category->slug        = "রাজনীতি";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();


        $category = new \App\Models\Newscategory();
       
        $category->name         = "অর্থনীতি";
        $category->slug        = "অর্থনীতি";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();


        $category = new \App\Models\Newscategory();
        
        $category->name         = "জেলা বার্তা";
        $category->slug        = "জেলা বার্তা";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newscategory();
       
        $category->name         = "আন্তর্জাতিক";
        $category->slug        = "আন্তর্জাতিক";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newscategory();
       
        $category->name         = "বিনোদন";
        $category->slug        = "বিনোদন";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newscategory();
        
        $category->name         = "খেলাধুলা";
        $category->slug        = "খেলাধুলা";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newscategory();
       
        $category->name         = "ধর্ম";
        $category->slug        = "ধর্ম";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newscategory();
        
        $category->name         = "শিক্ষা ও সাহিত্য";
        $category->slug        = "শিক্ষা ও সাহিত্য";
        $category->type         = "news";
        $category->user_id         = "1";
        $category->save();

        $category = new \App\Models\Newscategory();
     
        $category->name         = "তথ্যপ্রযুক্তি";
        $category->slug        = "তথ্যপ্রযুক্তি";
        $category->type         = "news";
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
        Schema::dropIfExists('newscategories');
    }
}
