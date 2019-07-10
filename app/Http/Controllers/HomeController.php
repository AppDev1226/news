<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $employeeList = Employee::all();
        return view("home.index", compact('employeeList'));
    }
}
