<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newscategory;
use App\Models\Newssubcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class NewscategoryController extends Controller
{
    /**
     * Display a listing of the News Category.
     *
     */
    public function maanNewsCategoryIndex()
    {
        $categories = Newscategory::paginate(10);

        return view('admin.pages.news.category.index',compact('categories'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maanNewsCategoryStore(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'type'=>'required',
           
        ]);
        //image validation..
        
        $getnewscategoryexist = Newscategory::where('type',$request->type)->exists();
        //return $getnewscategoryexist;
        if ($getnewscategoryexist) {
            $getnewscategory = Newscategory::where('type',$request->type)->first();
            if ($getnewscategory->type=='home' || $getnewscategory->type=='contact') {
                $newscategories = $getnewscategory ;
            }else{
                $newscategories           = new Newscategory();
            }
        }else {
            $newscategories           = new Newscategory();
        }

        // image..
       
        $newscategories->name     = trim($request->name) ;
        $newscategories->slug     = trim(strtolower($request->slug)) ;
        $newscategories->type     = trim(strtolower($request->type)) ;
      
        $newscategories->user_id  = Auth()->user()->id;
        $newscategories->save();
        //session message
        $this->setSuccess('Inserted');
        //redirect route
        return redirect()->route('admin.news.category');

    }
    /**
     * Display a listing of the News Category edit data.
     *
     */

    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maanNewsCategoryUpdate(Request $request, Newscategory $newscategory)
    {
         $request->validate([
             'name' => 'required',
             'slug' => 'required',
             'type' => 'required',
         ]);
    
   

        Newscategory::updateOrCreate(
            ['id'=>$newscategory->id],
            ['name'=>$request->name,'slug'=>trim(strtolower($request->slug)),'type'=>trim(strtolower($request->type)),'user_id'=> Auth()->user()->id]
        );
        //session message
        $this->setSuccess('Updated');
        //redirect route
        return redirect()->route('admin.news.category');
    }

    /**
     * Destroy  of the  requested data.
     *
     */
    public function maanNewsCategoryDestroy(Newscategory $newscategory)
    {
        $newscategory->delete();
        return redirect()->route('admin.news.category');
    }

}
