<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use App\Models\Job\Job;

class categoriesController extends Controller
{
    //
    public function singleCategory($name){
        $jobs=Job::where('category',$name)
        ->take(5)
        ->orderby('created_at','desc')
        ->get();
        return view('category.single',compact('jobs','name'));
    }
}
