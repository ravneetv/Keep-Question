<?php

namespace App\Http\Controllers\Auth;
use Socialite;
use Auth;
use App\User;

class googleController extends AuthController
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

        $user = Socialite::driver('google')->user();

        $data = [
            'google_id' => $user->getId(),
            'email' => $user->getEmail(),
            'name'  => $user->getName(),
            'avatar'=> $user->getAvatar(),
            'password'=> 'Google'


        ];

        dd($data);
        //Auth::login(User::firstOrCreate($data));
        //return redirect()->to('home');



        // try{
        //     $user = Socialite::driver('google')->user();
        // }catch(Exception $e){
        //     return redirect('auth/google');            
        // }
        
        // $authUser = $this->createUser($user);

        // Auth::login($authUser, true);
        // return redirect()->route('home');

        //$user = Socialite::driver('google')->user();
        // dd($user);
        // $user->token;

      

    }

}