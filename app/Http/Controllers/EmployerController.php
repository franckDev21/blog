<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Societe;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        // je recupere tous les utilisateurs
        $employers = Employer::userNotAdmin();
        return view('admin.index', ['employers' => $employers]);
    }

    public function create()
    {
        $societes = Societe::all();
        return view('admin.create', [
            'societes' => $societes,
            'user'     => new Employer()
        ]);
    }

    public function store()
    {

        $data = request()->validate([
            'nom'         => 'required|min:3',
            'prenom'      => 'required',
            'email'       => 'required|email',
            'societe_id'  => 'required',
            'tel'         => 'required'
        ]);

        Employer::create($data);

        return back();
    }

    /**
     * @param Employer $user
     * 
     * @return [type]
     */
    public function show(Employer $user)
    {
        return view('user.show', compact('user'));
    } 

    /* 
        ou
        public function show($id){
            $user = User::where('id',$id)->firstOrFail();
            return view('user.show',compact('user'));
        }
    */

    public function edit(Employer $user){
        $societes = Societe::all();
        return view('admin.users.edit',compact('user','societes'));
    }

    public function update(Employer $user){
        $data = request()->validate([
            'nom'         => 'required|min:3',
            'prenom'      => 'required',
            'email'       => 'required|email',
            'societe_id'  => 'required',
            'tel'         => 'required'
        ]);

        $user->update($data);

        return redirect('/user/'.$user->id);
    }

    public function destroy(Employer $user){
        $user->delete();
        return redirect('admin');
    }


}
