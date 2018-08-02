<?php


namespace App;
use Illuminate\Database\Capsule\Manager as DB;


class ReturnVisitorsController
{
    public function __construct()
    {
        new Database();
        $users = DB::table('visitors')->where(['status'=>'1'])->get()->toArray();
        return response()->json($users);
    }
}