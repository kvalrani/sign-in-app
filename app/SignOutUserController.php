<?php
/**
 * Created by PhpStorm.
 * User: kunal
 * Date: 02/08/2018
 * Time: 12:07
 */

namespace App;


class SignOutUserController
{
    public function __construct()
    {
        $this->request = \Illuminate\Http\Request::createFromGlobals();


    }

    public function signout()
    {
        $signout = new SignOut();
        return redirect('/');
    }
}
