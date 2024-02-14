<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class MainController extends Controller
{
    public function index() {

        // $trains = Train :: all();
        $trains = Train :: whereDate('orario_di_partenza', now() -> toDateString()) -> get();

        return view('pages.index', compact('trains'));
    }
    
}
