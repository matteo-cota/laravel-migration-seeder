<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $trains = Train::whereDate('orario_partenza', $today)->get();

        return view('home', compact('trains'));
    }
}