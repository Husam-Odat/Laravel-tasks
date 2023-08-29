<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class FormController extends Controller
{
    public function index(Request $request)
    {
     $username = $request->input('email');
     $password = $request->input('password');

        $users = users::all();
        $username1 = false;
        $password1 = false;
        foreach($users as $user){
        if ($user["email"]==$username) {
        $username1 = true;
        }
        }
        if ($username1) {
            foreach($users as $user){
            if ($user["password"]==$password) {
                $password1 = true;
                }
        }}

        if($username1 && $password1){

            return view('welcome');
            echo '<div class="alert alert-success"" style="text-align: center;" role="alert"> <p>login success</p></div>';

        }else{
            // echo "<script>
            // swal.fire('Failed!', 'You clicked the button!', 'error');
            //     </script>";
            echo '<div class="alert alert-danger" style="text-align: center;" role="alert"> <p>login failed</p></div>';
            return view('alert');
        }




// return view("index",$request->email);

    }
}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>