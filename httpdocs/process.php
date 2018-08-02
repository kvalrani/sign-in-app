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

// function createCheckboxes()
// { 
// // Number of inputs to create
//             $number = 0;
//             $temp = array();
//             $query = "SELECT * FROM visitors WHERE status = 1";
//             $temp = mysqli_fetch_array($query);
//             dd($temp);
//             exit;
//             // Container <div> where dynamic content will be placed
//             var container = document.getElementById("container");
//             var submitcontainer = document.getElementById("submitcontainer");
//             // Clear previous contents of the container
//             while (container.hasChildNodes()) {
//                 container.removeChild(container.lastChild);
//             }
//             for (i=0;i<number;i++){
//                 // Append a node with a random text
//                 // Create an <input> element, set its type and name attributes
//                 var input = document.createElement("input");
//                 input.type = "checkbox";
//                 input.name = "member" + i;
//                 container.appendChild(input);
//                 // Append a line break 
//                 container.appendChild(document.createElement("br"));
//                    var submit = document.createElement("input");
           
//             }
//  submit.type="submit"
//             submit.value = "Sign Out";
//             submit.id ="checkout_button";
//             submit.className ="bttn bttn-default formbutton"
//             submitcontainer.appendChild(submit);
//  }
?>




