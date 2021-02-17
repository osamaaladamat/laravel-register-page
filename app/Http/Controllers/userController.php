<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = User::get();
        return view('dashboard.register', compact('all'));
        // return view('dashboard.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        // $input = $request->all();
        $request->validate([
            'fullname'      => 'required|min:2|max:50',
            'email'         => 'required|email',
            'password'      => 'required|confirmed|min:6',
            'mobile'        => 'required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->create($request);

        // 1nd way by inserting all the form inpusts in the table
        /* User::create($request->all()); */


        //2nd way by giving an array to the create method
        /*
        User::create([
                      'fullname'=>$request->input('fullname'),
                      'email'=>$request->input('email'),
                      'mobile'=>$request->input('mobile'),
                      'password'=>$request->input('password'),
                      ]);
       return view('registerForm');

        */

        //3rd way using creating a new obect
        $users = new User();
        //On left field name in DB and on right field name in Form/view
        $users->fullname = $request->input('fullname');
        $users->email    = $request->input('email');
        $users->password = $request->input('password');
        $users->mobile   = $request->input('mobile');
        $users->save();
        return redirect('/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('dashboard.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Geting old data
        $olduser = User::findorfail($id);
        //Checking if user set new password else keep old password
        if ($request->input('password')) {
            $password = $request->input('password');
            //changing the password validation if the user used a password
            $validation_array = [
                'fullname'      => 'required|min:2|max:50',
                'email'         => 'required|email',
                'password'      => 'required|confirmed|min:6|max:50',
                'mobile'        => 'required'
            ];
        } else {
            $password = $olduser->password;
            //changing the password validation if the user didnt use a password
            $validation_array = [
                'fullname'      => 'required|min:2|max:50',
                'email'         => 'required|email',
                'password'      => '',
                'mobile'        => 'required'
            ];
        }
        $request->validate($validation_array);

        //Selecting users record
        $user = User::findorfail($id);
        //Updating the DB with new data
        $user->update([
            'fullname'  => $request->input('fullname'),
            'email'     => $request->input('email'),
            'mobile'    => $request->input('mobile'),
            'password'  => $password
        ]);
        //Redirecting back to register
        return redirect('/register');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect("/register");
    }
}
