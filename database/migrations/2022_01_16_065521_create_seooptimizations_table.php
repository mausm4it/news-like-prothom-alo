<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeooptimizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seooptimizations', function (Blueprint $table) {
            $table->id();
            $table->string('keywords')->nullable();
            $table->string('author',100)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('site_map')->nullable();
            $table->longText('google_analytics')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        $seo = new \App\Models\Seooptimization();
        $seo->keywords = "iSmart4News";
        $seo->author = "https://masum4it.pro";
        $seo->meta_title = "iSmart4News of Masum4iT";
        $seo->meta_description = "iSmart4News of Masum4iT Web Application Software Solution";
        $seo->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seooptimizations');
    }
}
