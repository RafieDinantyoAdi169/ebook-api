<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" =>  3103118101,
            "Name" => "Nisrina Thifal Khairunnisa",
            "Gender" => "Perempuan",
            "Phone" =>  +6285714591232,
            "Class" => "XII RPL 3",

        ];
    }
}