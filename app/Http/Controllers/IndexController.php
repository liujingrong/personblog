<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Category;
use DB;
class IndexController extends Controller
{
    //
    public function index()
    {
        $contents = Content::leftjoin('categories','contents.category_id','=','categories.id')->get();
        // foreach ($contents as $row) {
        //     # code...
        //     //echo $row->title . $row->cate_name;
        // }
        return view('index')->with('contents',$contents);
        //$contents = DB::table('contents')->select(DB::)
        //dd(public_path());
        //return view('index')->with('name','yuejianbin');
        

    }
}
