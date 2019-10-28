<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getCategory() {
        return view('admin.abstract.category');
    }

    public function createCategory(Request $request) {
        $category = Category::create([
    		'name'=>$request->input('name')
        ]);
        return response()->json($category);
    }



    public function checkCategory(Request $request) {
        if ($request->ajax()) {
            $categoryName = $request->input('categoryName');
             $category = DB::table('categories')->where('name',$name)->get();
             $res = ['found' => 1,'catname' => $categoryName];
             return response()->json($res);
            // if ($category != null) {
            //     $res = ['found' => 1];
            //     return response()->json($res);
            // }else {
            //     $res = ['found' => 0];
            //     return response()->json($res);
            // } 
        }else {
            $res = [
                'Request not Ajax'
            ];
             return response()->json($res); 
        }      
    }

    public function check($name) {
           $category = DB::table('categories')->where('name',$name)->first();
           dd($category);
            // if ($category != null) {
            //     $res = ['found' => 1];
            //     return response()->json($res);
            // }else {
            //     $res = ['found' => 0];
            //     return response()->json($res);
            // }        
    }
}
