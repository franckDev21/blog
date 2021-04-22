<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // je recupere tous les utilisateurs
        $users = User::userNotAdmin();
        return view('admin.index',['users'=>$users]);
    }

    public function create(){
        $societes = Societe::all();
        return view('admin.create',['societes'=>$societes]);
    }

    public function store(){

        $data = request()->validate([
            'nom'     => 'required|min:3',
            'prenom'  => 'required',
            'email'   => 'required|email',
            'password'=> 'required',
            'socite'  => 'required',
            'tel'     => 'required'
        ]);

        User::create($data);

        return back();
        
    }

    public function show(User $user){
        return view('user.show', compact('user'));
    } 

    /* 
        ou
        public function show($id){
    //     $user = User::where('id',$id)->firstOrFail();
    //     return view('user.show',compact('user'));
    // }
    */
}
