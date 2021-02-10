<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function insertRecord(){
        $phone = new Phone();
        $phone->phone = '1234567890';
        $user = new User();
        $user->name = 'Eugene';
        $user->email = 'h1d@mail.ru';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return 'Record has been created successfully!';
    }

    public function fetchPhoneByUser($id){
        $phone = User::find($id)->phone;
        return $phone;
    }
}
