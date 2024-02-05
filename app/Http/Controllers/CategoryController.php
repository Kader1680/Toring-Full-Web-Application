<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Story;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function webQuestions(){

        // $Category = Category::all()->w;
        $questions = Story::all()->where("id_category", 1);
        return view("categories.web", compact('questions'));
    }
    public function andQuestions(){

        // $Category = Category::all()->w;
        $questions = Story::all()->where("id_category", 2);
        return view("categories.android", compact('questions'));
    }
    public function dbQuestions(){

        // $Category = Category::all()->w;
        $questions = Story::all()->where("id_category", 3);
        return view("categories.db", compact('questions'));
    }
    public function osQuestions(){

        // $Category = Category::all()->w;
        $questions = Story::all()->where("id_category", 4);
        return view("categories.os", compact('questions'));
    }
}
