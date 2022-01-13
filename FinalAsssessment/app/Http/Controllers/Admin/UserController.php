<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Password;

//A resource controller for admin user
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gate to check for logged in user
        if(Gate::denies('logged-in')){
            session()->flash('failure','You need to login');
            return redirect(view('admin.login'));
        }
        if(Gate::allows('is-admin')){
            return view('admin.users', ['users' =>User::all()]);
        }
        session()->flash('failure','User is not an admin');
        return redirect(route('home'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.createuser', ['roles'=> Role::all()]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $attributes=$request->validate([
            'name'=>'required|max:255',            
            'email' => 'required|string|email|max:255|unique:users,email,',
            'password'=>'required|min:7|max:255',
        ]);
        try{
            $user=User::create($attributes);
            //Using current user model to populate the role_user table using eloquent relation defined in role() method in user model
            $user->roles()->sync($request->roles);
            Password::sendResetLink($request->only(['email']));    
            session()->flash('success','User has been created');
        }
        catch(\Exception $exception){
            dd($exception);
            // session()->flash('failure','User could not be created');

            session()->flash('failure','This email could not be added to our list');
    
        }
        return redirect(route('admin.users.index'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edituser', 
        [
            'roles'=> Role::all(),
            'user'=>User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Search for the user and update
     */
    public function update(Request $request, $id)
    {
        try{
            $user=User::findOrFail($id);
            $user->update($request->except(['_token','roles']));
            $user->roles()->sync($request->roles);
            session()->flash('success','The user has been edited');
            
        }
        catch(\Exception $exception){
            session()->flash('failure','The user could not be edited');

            //session()->flash('failure','This email could not be added to our list');
    
        }
        return redirect(route('admin.users.index'));

    }

    /**
     * Remove the specified user from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            User::destroy($id);
            
            session()->flash('success','The user has been deleted');
            
        }
        catch(\Exception $exception){
            session()->flash('failure','The user could not be deleted');

            //session()->flash('failure','This email could not be added to our list');
    
        }
        return redirect(route('admin.users.index'));
    }
}
