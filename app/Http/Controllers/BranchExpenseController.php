<?php

namespace App\Http\Controllers;

use App\Models\BranchExpense;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Branch;


class BranchExpenseController extends Controller
{
    public function index()
    {
        $BranchExpense=BranchExpense::all();
        $buses=Bus::all();
        $branches=Branch::all();
        return view('expanse.index',compact('buses','branches','BranchExpense'));
    }

    public function add()
    {
        $branches=Branch::all();
        return view('expanse.add',compact('branches'));
    }

    public function store(Request $request)
    {
        dd($request);
    }

}
