<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        helper('text');
        $data =
            [
                'title' => "Sign In Belagu Muziek",
            ];
        return view('login.php', $data);
    }
}
