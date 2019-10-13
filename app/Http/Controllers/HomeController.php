<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function dashBoard() {
        return view('admin.pages.home');
    }

//     public function getImage(Request $request) {
//          $articles =" Article::all();";
//         // $count = 2;
//         // if ($count > 0) {
//             return response()->json($articles, 200); 
//         // }else {
//         //     return response()->json([
//         //         'data' => 'Not Found',
//         //         'error' => 'No Article retrireved',
//         //         'statusCode' => "404"
//         //     ], 404); 
//         // }
//     }

//     public function getImages($category) {
//         switch ($category)
//         {
//             case "all":
//                 $articles =" Article::all();".$category;
//                 break;
//             case 2:
//                 echo "Number 2";
//                 break;
//             default:
//                 echo "No number between 1 and 3";
//         }
//         return response()->json($articles, 200); 
//    }
}
