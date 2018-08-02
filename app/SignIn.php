<?php
/**
 * Created by PhpStorm.
 * User: kunal
 * Date: 02/08/2018
 * Time: 10:14
 */

namespace App;
use Illuminate\Database\Capsule\Manager as DB;

class SignIn
{
    private $company;
    private $inputname;
    private $guestsfield;

    public function __construct($company, $inputname)
    {
        $this->database = new Database();

        $this->company = $company;
        $this->inputname = $inputname;
        DB::table('visitors')->insert(['company'=>$company, 'status'=>'1', 'name'=>$inputname, 'signintimestamp'=>date('Y-m-d H:i:s')]);

    }

    public function addGuests($guestsfield)
    {
        $array = array_wrap(explode(', ', $guestsfield));

        foreach($array as $guestsfield)
        {
            DB::table('visitors')->insert(['company'=>$this->company, 'status'=>'1', 'name'=>$guestsfield, 'signintimestamp'=>date('Y-m-d H:i:s')]);
        }
    }

}