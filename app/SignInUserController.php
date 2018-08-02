<?php
/**
 * Created by PhpStorm.
 * User: kunal
 * Date: 02/08/2018
 * Time: 10:10
 */

namespace App;

class SignInUserController
{
    public function __construct()
    {
        $this->request = \Illuminate\Http\Request::createFromGlobals();


    }

    public function signin()
    {
        $signin = new SignIn($this->request->company, $this->request->fieldname);
        $signin ->addGuests($this->request->guestsfield);
        return redirect('/');
    }
}