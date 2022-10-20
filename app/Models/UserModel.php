<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'first_name', 'email'];
    protected $useAutoIncrement = true;
   
    //model for all users retreiving data from database
    function getAllUsers(){
        $builder = $this->db->table('users');
        $user = $builder->get()->getResult();
        return $user;
    }

    //model for single user retreiving data from database
    function getSingleUser($id){
    $query = $this
            ->table('users')
            ->select('*')
            ->where('id', $id)
            ->get();

    return $query->getResult();
    }

}