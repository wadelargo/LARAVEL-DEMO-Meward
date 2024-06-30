<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trainor;
use Illuminate\Http\Request;

class TrainorController extends Controller
{
    public function index(){
        $trainor = Trainor::orderBy('id')->get();

        return view('trainor.index',['trainors' => $trainor]);
    }

    public function create()
    {
        $users = User::list();
        return view('trainor.create',['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'     => 'required|numeric',
            'specialty'   => 'required'
        ]);

        Trainor::create([
            'user_id'     => $request->user_id,
            'specialty'   => $request->specialty
        ]);

        return redirect('trainors')->with('message', 'A new trainor has been added.');
    }
}
