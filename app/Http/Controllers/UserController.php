<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;


class UserController extends Controller
{
    private $user;
    private $employee;
    function __construct(User $user,Employee $employee)
    {
        $this->user = $user;
        $this->employee = $employee;
    }

    public function get(){
        echo "<pre>";
        print_r($this->employee->get());
    }

    public function login(Request $request){
        dd($request);
    }
}
