<?php

namespace App\Controllers;

use Core\Database\App;

class UsersController{
    public function users()
    {
        $names = App::get('database')->selectAll('users');
        return view('users', ['names'=>$names]);
    }
}