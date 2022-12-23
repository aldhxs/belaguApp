<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        helper('text');
        $data =
            [
                'title' => "Sign Up Belagu Muziek",
            ];
        return view('sign-up.php', $data);
    }
}
