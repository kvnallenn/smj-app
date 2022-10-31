<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $datas = Rating::all();
        return view ('admin.rating.index', compact(
            'datas'
        ));
    }

}
