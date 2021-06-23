<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function index(){
       $categoris=Category::all();
       return view('categories',compact('categoris'));
   }

   public function create(){
    return view('create_cat');
   }

  
        public function store(Request $request )
        {
            Category::create($request->all());
        return redirect()->back();
        }

    
        public function destroy($id)
        {
            $category = Category::find($id);
          
            Category::destroy($id);
            return redirect()->back();
        }
    
}
