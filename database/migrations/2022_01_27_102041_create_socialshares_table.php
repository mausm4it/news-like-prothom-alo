<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialshares', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('icon_code')->nullable();
            $table->integer('follower')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        $social = new \App\Models\Socialshare();
        $social->url = "https://facebook.com/masum4it";
        $social->icon_code = "fab fa-facebook-f";
        $social->save();

        $social = new \App\Models\Socialshare();
        $social->url = "https://instagram.com/masum4it";
        $social->icon_code = "fab fa-instagram";
        $social->save();

        $social = new \App\Models\Socialshare();
        $social->url = "https://twitter.com/masum4it";
        $social->icon_code = "fab fa-twitter";
        $social->save();

        $social = new \App\Models\Socialshare();
        $social->url = "https://linkedin.com/masum4it";
        $social->icon_code = "fab fa-linkedin-li";
        $social->save();

        $social = new \App\Models\Socialshare();
        $social->url = "https://youtube.com/masum4it";
        $social->icon_code = "fab fa-youtube";
        $social->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialshares');
    }
}
