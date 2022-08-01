<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function list()
    {
        $salaries = Salary::query()->select('*')->with('staff')->paginate(5);
        return view('salary.list-salary', compact('salaries'));
    }
}
