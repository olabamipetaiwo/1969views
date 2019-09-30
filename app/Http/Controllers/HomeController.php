<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
// use App\Http\Resources\Article as ArticleResource;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index() {
        // $articles =" Article::all();";
        // $count = 2;
        // if ($count > 0) {
        //     return response()->json($articles, 200); 
        // }else {
        //     return response()->json([
        //         'data' => 'Not Found',
        //         'error' => 'No Article retrireved',
        //         'statusCode' => "404"
        //     ], 404); 
        // }
        return view('welcome');
    }
}
