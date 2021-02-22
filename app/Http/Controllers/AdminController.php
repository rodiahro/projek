<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Cardata;
use App\Buyer;

class AdminController extends Controller
{
    public function home()
    {
    	return view('layout.master');
    }

     public function login(){
    	return view('login');
    }

    public function postlogin(Request $req){
    	// $data = $req->all();
    	// if (Auth::guard('web')->attemp(['email'=>$data['email'], 'password'=>$data['password']])) {
    	// 	return redirect('/home');
    	// }else{
    	// 	return view('login')->with('message', 'Account is not valid');
    	// }
    	$email = $req->input('email');
        $password = $req->input('password');        
        
        $login = User::where('email', '=', $req->input('email'))->first();

        if(!$login) {
            $res = array(
                'success' => false,
                'message' => 'Your email or password is incorrect'
            ); 
            return view('login').'<script type="text/javascript">alert("This account has not been registered. Please entry your data.")</script>';//return response($res);
        } else {        
            
            if(Hash::check($password, $login->password )){//$password == $login->password) {                        
                $api_token = sha1(time());                    
                $create_token = User::where('email', $req->input('email'))->update(['api_token' => $api_token]);
                if($create_token) {
                    $res = array(
                        'success' => true,
                        'api_token' => $api_token,
                        'message' => $login
                    );                    
            }else{
                    $res = array (
                        'success' => true,
                        'message' => 'Your email or password is incorrect'
                    );        
                    $session = $req->session()->put('Name', $login->Name, 'id', $login->id);                                        
                    return redirect('/home').'<script type="text/javascript">alert("Incorrect email or password. Please try again.")</script>';
                }
        } 
    }
    }

  
public function buyer()
{
	$dt = Buyer::all();
	return view('buyer',['data'=> $dt]);
}

public function addbuyer()
{
	return view('addbuyer');
}

public function postbuyer(Request $req){
	$data = new Buyer();
	$data->name = $req->name;
	$data->email = $req->email;
	$data->no_telp = $req->no_telp;
	$data->car_type = $req->car_type;
	$data->save();
return redirect ('/buyer');
}

public function delete($id_buyer)
{
$dt = Buyer::find($id_buyer);
$dt=delete();
return redirect('/buyer')
}

public function car(){
	return view('cardata');
}

    public function addcar()
    {
    	return view('addcar');
    }

    public function postcar(Request $req){
    	// $user = User::find('id');
     //    if($req->session()->has('data')){
     //        $users = $req->session()->get('data')[0]['id'];
        $post = new Cardata();
        $post->namecar = $req->namecar;
        $post->price = $req->prise;
        $post->stok = $req->stok;
        $post->save();
        return redirect('/cardata');
    // }else{
    //     return redirect('/login');
    // }
    }
}
