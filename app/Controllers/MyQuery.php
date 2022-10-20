<?php

namespace App\Controllers;
use App\Models\UserModel;

class MyQuery extends BaseController
{


    //getting all data
    public function index()
    {

        $user = new UserModel();

        $data['users'] = $user->getAllUsers();
        return view('show', $data);
    }


    //getting single data to display
    public function singleUser($id){
   
        $user = new UserModel();
        $data['user'] = $user->getSingleUser($id); 
    
        return view('singleUser', $data); 
    }
   
}
