<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function index(){
        $trainee = Trainee::orderBy('id')->get();

        return view('trainee.index',['trainees' => $trainee]);
    }
}
