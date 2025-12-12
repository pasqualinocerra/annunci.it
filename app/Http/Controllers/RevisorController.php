<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class RevisorController extends Controller
{
    public function abilitaRevisore(User $user){
        $user->revisore = 1;
        $user->save();
        
        return redirect('/')->with('revisorMessage', 'ok');
    }
}
