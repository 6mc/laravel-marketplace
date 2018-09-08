<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use DateTime;
use Request;
use Session;
use \Input as Input;
use App\Profile;
use App\item;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    //

public function register()

{
	return view('register');
}

public function dash()

{
if (!empty(Session::get('eposta'))) {
	# code...

echo "Success logged";

}
else
{
	echo "Failed logged";
}



//	return view('dashboard');
}




public function login()

{

return view('login');
}


public function signin()

{

$check =  Request::all();
//return $check;
//$model = Profile::where('email',  $check['email'],'password',  $check['password']])->firstOrFail();

$model = Profile::where('email', $check['email'])
      ->where('password', $check['password'])     
      ->get();

      if (count($model) > 0) {
      	# code...
      	//echo "login Successful";
      	//$check->session()->put('mail',$check['email']); 
      	Session::put('eposta',$check['email']);

 //    echo Session::get('eposta');
      
//.$check->session()->get('mail');

     return view('dashboard');

      }
      else
  return view('home');

//$json['opId'];
//return $check['email'].$check['password'];

}


public function sell()

{function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


if (Input::hasFile('photo')) {
  # code...

$file=Input::file('photo');

$nagme = 'uploads/'.generateRandomString().'.jpg';

$file->move('uploads',$nagme);

//return $file->$nagme ;


}








  $checku =  Request::all();

item::create($checku);

	$modela = Profile::where('email', Session::get('eposta'))   
      ->get();

$modelb = item::where('item_name', $checku['item_name'])   
      ->get();

	$dt = new DateTime();
$dt= $dt->format('d-m-Y H:i:s');


$product = item::find($modelb[0]['id']);

$product->seller_id = $modela[0]['id'];

$product->date = $dt;

$product->photos = $nagme;

$product->save();

//print_r($modela);
//echo $modela[0]['id'];
//return $modelb[0]['id'];
return 'Successfully created';


}



public function signup()

{

$input =Profile::create($input);

return 'Success';


}
public function Browse()

{

$items = item::all();

return view('Browse',compact('items'));


}


}
