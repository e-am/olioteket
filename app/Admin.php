<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Admin extends Model
{
    public static function getAllUsers(){
        $users = DB::table('users')
            ->get();

        return $users;
    }
}
