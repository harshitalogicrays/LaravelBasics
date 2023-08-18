<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\uppercase;
class signupcontroller extends Controller
{
    public function index(){
        return view('Form');
    }
    public function register(Request $request){
           // Accessing All Input Data
        // print_r($request->all());

        // Accessing All Input Data as an associative array
        // print_r($request->input());

        // Accessing An Input Data
        // print_r($request->input('uname'));
        // echo "<BR>";
        // print_r($request->input('email'));
        // print_r($request->input('pwd'));

        // Accessing Input Via Dynamic Properties
        // print_r($request->uname);
        // print_r($request->email);
        // print_r($request->pwd);

        // Accessing a Portion of Input Data
        // print_r($request->only(['email', 'pwd']));
        // print_r($request->only('email', 'pwd'));
        // print_r($request->except(['email', 'pwd']));
        // print_r($request->except('email', 'pwd'));

        // Determining If Input Is Present
        // if ($request->has('uname')) {
        //     print_r($request->input('uname'));
        // }

        // if ($request->has(['uname', 'email'])) {
        //     print_r($request->input('uname'));
        //     print_r($request->input('email'));
        // }

        // The hasAny method returns true if any of the specified values are present:
        // if ($request->hasAny(['uname', 'email'])) {
        //     print_r($request->input('uname'));
        //     print_r($request->input('email'));
        // }

        // if you would like to determine if a value is present on the request and is not empty, you may use the filled method:
        // if ($request->filled('uname')) {
        //     print_r($request->input('uname'));
        // }
        // else
        // {
        //     echo "uname is empty";
        // }

        // To determine if a given key is absent from the request, you may use the missing method:
        // if ($request->missing('uname1')) {
        //     echo('username not present');
        // }

        // The whenHas method will execute the given closure if a value is present on the request:
        // $request->whenHas('uname', function ($input) {
        //     print_r('Data Modified');
        //     echo $input;
        // }); 

        // The whenFilled method will execute the given closure if a value is present on the request and is not empty:
        // $request->whenFilled('uname', function ($input) {
        //     print_r('Data Modified');
        //     echo $input;
        // });

        // Flashing Input To The Session
        // It will flash the current input to the session so that it is available during the user's next request to the application:
        // $request->flash();

        // You may also use the flashOnly and flashExcept methods to flash a subset of the request data to the session. 
        // $request->flashOnly(['name1', 'email']);

        // $request->flashExcept('password'); 
        
        // Accessing Old Input
        // print_r($request->old('uname'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));


        $request->validate([
            'uname'=>['required',new uppercase],
            'email'=>'required|email',
            'pwd'=>['required','max:12',function($attribute,$value,$fail){
                // if($value=='1234567')
                if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\@\#\$\%\^]).{8,12}/",$value))
                    $fail("the :attribute cannot have $value");
            }],
            'cpwd'=>'required | same:pwd'         
        ]);

        $data=$request->except('_token');
        $data1=compact('data');
        return view('form')->with($data1);
    }
}
