<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::where('Data_di_partenza', '2022-05-13')->get();

        $data = [
            "train" => new Train(),
            "trains" => $trains,
        ];

        return view('trains.index', $data);
    }
}
