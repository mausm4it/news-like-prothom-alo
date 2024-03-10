<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Maanuser;
use App\Models\News;
use App\Models\Newscategory;
use App\Models\Photogallery;
use App\Models\Videogallery;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /**
     * Display a listing of the Web view information .
     *
     */
    public function maanIndex()
    {


        $latestnews = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('news.status',1)
            ->latest()
            ->take(3)
            ->get();

        $newscategories = Newscategory::orderByDesc('post_counter')->get();


        $popularsnews = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewsall = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewsworld = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','World')
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewslifestyle = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Lifestyle')
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewsentertainment = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Entertainment')
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewssports = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Sports')
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewstechnology = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Technology')
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $latestnewsnational = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','National')
            ->where('news.status',1)
            ->latest()
            ->take(4)
            ->get();
        $latestnewsworld = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','World')
            ->where('news.status',1)
            ->latest()
            ->take(3)
            ->get();
        $latestnewspolitics = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Politics')
            ->where('news.status',1)
            ->latest()
            ->take(6)
            ->get();
        $latestnewslifestyle = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Lifestyle')
            ->where('news.status',1)
            ->latest()
            ->take(5)
            ->get();

        $latestnewsentertainment = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Entertainment')
            ->where('news.status',1)
            ->latest()
            ->take(4)
            ->get();
        $latestnewssports = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Sports')
            ->where('news.status',1)
            ->latest()
            ->take(5)
            ->get();
        $latestnewstechnology = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Technology')
            ->where('news.status',1)
            ->latest()
            ->take(6)
            ->get();
        $latestnewsbusiness = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.name','Business')
            ->where('news.status',1)
            ->latest()
            ->take(5)
            ->get();
        $latestphotogalleries = Photogallery::join('users','photogalleries.user_id','=','users.id')
            ->select('photogalleries.id','photogalleries.title','photogalleries.image','photogalleries.created_at',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS user_name"))
            ->where('status',1)
            ->latest()
            ->take(10)
            ->get();
        $latestVideoGalleries = Videogallery::join('users','videogalleries.user_id','=','users.id')
            ->select('videogalleries.*',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS user_name"))
            ->where('status',1)
            ->latest()
            ->take(10)
            ->get();;

        // external

                
        $top_news3 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('speciality_id', 1)
           ->where('status', 1)
           ->latest()
           ->take(3)
           ->get();

        $ads= Advertisement::all();

        $top_sliding_news1 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title', 'news.summary','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('speciality_id', 2)
           ->where('status', 1)
           ->latest()
           ->take(1)
           ->get();


        $down_sliding_news2 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
           ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
           ->join('users','news.reporter_id','=','users.id')
           ->select('news.id','news.title', 'news.summary','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
           ->where('speciality_id', 6)
              ->where('status', 1)
              ->latest()
              ->skip(1)
              ->take(2)
              ->get();
           
        

        $top_rightside_news1= News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('speciality_id', 4)
           ->where('status', 1)
           ->latest()
           ->take(1)
           ->get();

        $latestnews12= News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('news.status',1)
        ->latest()
        ->take(12)
        ->get();

        $latestnews2 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newssubcategories.name as news_subcategory','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('status', 1)
        ->latest()
        ->skip(1)
        ->take(2)
        ->get();


        $category_id1_post4 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 1)
        ->where('news.status',1)
        ->latest()
        ->take(4)
        ->get();

        $category_id2_post4 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 2)
        ->where('news.status',1)
        ->latest()
        ->take(4)
        ->get();

        $category1 = Newscategory::find(1);
        $category2 = Newscategory::find(2);
        $category3 = Newscategory::find(3);
        $category4 = Newscategory::find(4);
        $category5 = Newscategory::find(5);
        $category6 = Newscategory::find(6);
        $category7 = Newscategory::find(7);
        $category8 = Newscategory::find(8);
        $category9 = Newscategory::find(9);
        $category10 = Newscategory::find(10);

        $category_id1_post7 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 1)
        ->where('news.status',1)
        ->latest()
        ->skip(4)
        ->take(7)
        ->get();

        $category_id2_post7 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 2)
        ->where('news.status',1)
        ->latest()
        ->skip(4)
        ->take(7)
        ->get();

        $category_id5_post4 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 5)
        ->where('news.status',1)
        ->latest()
        ->take(4)
        ->get();

        $category_id4_post2 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 4)
        ->where('news.status',1)
        ->latest()
        ->take(2)
        ->get();

        $category_id3_post3 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 3)
        ->where('news.status',1)
        ->latest()
        ->take(3)
        ->get();

        $category_id3_post5 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 4)
        ->where('news.status',1)
        ->latest()
        ->skip(1)
        ->take(5)
        ->get();

        $category_id6_post5 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 6)
        ->where('news.status',1)
        ->latest()
        ->take(5)
        ->get();

        $category_id6_post3 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 6)
        ->where('news.status',1)
        ->latest()
        ->skip(5)
        ->take(3)
        ->get();


        $category_id6_post5_2 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 6)
        ->where('news.status',1)
        ->latest()
        ->take(5)
        ->get();


        $category_id3_post5_2 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 4)
        ->where('news.status',1)
        ->latest()
        ->skip(6)
        ->take(5)
        ->get();

        $category_id7_post4 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 7)
        ->where('news.status',1)
        ->latest()
        ->take(4)
        ->get();

        $category_id7_post7 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 7)
        ->where('news.status',1)
        ->latest()
        ->skip(4)
        ->take(7)
        ->get();


        $category_id10_post4 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
        ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
        ->join('users','news.reporter_id','=','users.id')
        ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
        ->where('newscategories.id', 10)
        ->where('news.status',1)
        ->latest()
        ->take(4)
        ->get();


        $popularsnewscat8 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.id', 8)
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewscat9 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.id', 9)
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewscat1 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.id', 1)
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewscat2 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.id', 2)
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();
        $popularsnewscat3 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.id', 3)
            ->where('news.status',1)
            ->orderByDesc('news.viewers')
            ->limit(3)
            ->get();

        $latest_catagory_id6_post4 = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->join('users','news.reporter_id','=','users.id')
            ->select('news.id','news.title','news.image','news.date','news.created_at','newscategories.name as news_category','newscategories.slug as news_categoryslug',DB::raw("CONCAT(users.first_name,' ',users.last_name) AS reporter_name"))
            ->where('newscategories.id', 6)
            ->where('news.status',1)
            ->latest()
            ->take(4)
            ->get();

        


        

       


        // external

        $this->sitemap();



        return view('frontend.pages.home',compact('down_sliding_news2','top_sliding_news1','latest_catagory_id6_post4','popularsnewscat3','popularsnewscat2','popularsnewscat1','popularsnewscat9','category9','category8','popularsnewscat8','category_id10_post4','category_id7_post7','category_id7_post4','category10','category7','category_id6_post5_2','category_id6_post3','category_id6_post5','category6','category_id3_post5_2','category_id3_post5',
        'category_id4_post2','category4','category_id3_post3','category_id2_post7','category_id2_post4','category3','category2',
        'category_id5_post4','category5','category_id1_post7','category1','category_id1_post4','latestnews2',
        'latestnews12','top_rightside_news1','ads','top_news3','latestnews','newscategories',
        'popularsnews','popularsnewsall','popularsnewsworld','popularsnewslifestyle','popularsnewsentertainment',
        'popularsnewssports','popularsnewstechnology','latestnewsnational','latestnewsworld','latestnewspolitics',
        'latestnewslifestyle','latestphotogalleries','latestnewsentertainment','latestnewssports','latestnewstechnology',
        'latestnewsbusiness','latestVideoGalleries'));
    }

    public function sitemap()
    {
        $site = App::make('sitemap');
        //$site->add(URL::to('/'), date("Y-m-d h:i:s"),1,'daily');

        $latestnews = News::join('newssubcategories','news.subcategory_id','=','newssubcategories.id')
            ->join('newscategories','newssubcategories.category_id','=','newscategories.id')
            ->select('news.id','news.title','news.date','news.created_at','newscategories.name as news_category')
            ->latest()
            ->get();
        foreach ($latestnews as $news){
            $site->add(URL::to(strtolower($news->news_category)), $news->created_at,1.0,'daily');
        }

        $site->store('xml','sitemap');

    }

    public function subscribeAjax(Request $request)
    {
        $count = Maanuser::where('email',$request->email)->count();
        if ($count>0) {
           $this->setError('Existing');
            return $count;
        }
        Maanuser::updateOrCreate(['email'=>$request->email]);
        return $request;
    }

}
