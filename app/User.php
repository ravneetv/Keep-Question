<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
/*
 public function post_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember_me = $request->has('remember_me') ? true : false; 

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me))
        {
           $user = Auth::user();
           return $user;
           dd($user);
        }else{
             return back()->with('error','your username and password are wrong.');
        }
    }
*/
/*
    public function post_login()
    {


        die;
        
        $credentials = array(
            'email' => strtolower(Input::get('email')),
            'password' => Input::get('password'),
        );


        if (Auth::attempt($credentials)){
            echo $remember = Input::get('remember_me');
           
            die;
            if (!empty($remember_me))
            {
               Auth::login(Auth::user()->id, true);

            }
            return Redirect::to('/home');
            //return view('signup');
        }else
        {

            return Redirect::to('index')->with('error', true);

        }
    }
*/

}












