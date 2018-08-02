<?php
require "../vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as DB;
$req = \Illuminate\Http\Request::createFromGlobals();
$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();
 $servername = getenv('SERVERNAME');
 $username = getenv('USERNAME');
 $password = getenv('PASSWORD');
 $dbname = getenv('DBNAME');
// Create connection
$db = new DB;

$db->addConnection([
	'database'=>$dbname,
	'username'=>$username,
	'password'=>$password,
	'driver'=>'mysql',
	'host'=>$servername,
]);

$db -> setAsGlobal();


$inputname = $req->fieldname;
$company = $req->company;
DB::table('visitors')->insert(['company'=>$company, 'status'=>'1', 'name'=>$inputname, 'signintimestamp'=>date('Y-m-d H:i:s')]);

header("location: index.php");

$array = array_wrap(explode(', ', $req->guestsfield));

	foreach($array as $guestsfield)
	{
		DB::table('visitors')->insert(['company'=>$company, 'status'=>'1', 'name'=>$guestsfield, 'signintimestamp'=>date('Y-m-d H:i:s')]);
	}

?>




