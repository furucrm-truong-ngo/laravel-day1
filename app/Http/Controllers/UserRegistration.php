<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function postRegister(Request $request)
    {
        //Retrieve the name input field
        $name = $request->input('name');
        echo 'Name: ' . $name;
        echo '<br>';

        //Retrieve the username input field
        $email = $request->email;
        echo 'Email: ' . $email;
        echo '<br>';

        //Retrieve the password input field
        $phone = $request->phone;
        echo 'Phone: ' . $phone;
    }
}
