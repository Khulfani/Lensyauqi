<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        for ($i = 0; $i < count($reviews); $i++) :
            $reviews[$i]['rating'] = ($reviews[$i]->kualitasProduk + $reviews[$i]->layananJasa) * 0.5;
        endfor;

        return view('home', compact('reviews'));
    }
}
