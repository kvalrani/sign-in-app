<?php
/**
 * Created by PhpStorm.
 * User: kunal
 * Date: 02/08/2018
 * Time: 10:14
 */

namespace App;
use Illuminate\Database\Capsule\Manager as DB;

class SignOut
{


    public function __construct()
    {
        $this->database = new Database();

        DB::table('visitors')->update(['status'=>'0', 'signouttimestamp'=>date('Y-m-d H:i:s')]);

    }

}