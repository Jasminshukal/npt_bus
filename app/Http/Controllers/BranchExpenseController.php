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

    public function SelectDate()
    {
        $buses=Bus::all();
        $branches=Branch::all();
        return view('expanse.index',compact('buses','branches'));
    }

    public function store(Request $request)
    {
        dd($request);
    }

}
