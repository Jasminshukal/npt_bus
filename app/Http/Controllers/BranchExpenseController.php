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
        $BranchExpense=BranchExpense::with('Branch')->orderBy('expanse_date','DESC')->get();
        $buses=Bus::all();
        $branches=Branch::all();
        return view('branch_expance.index',compact('buses','branches','BranchExpense'));
    }

    public function addExpanse()
    {
        $branches=Branch::all();
        dd($branches);
        return view('branch_expance.add',compact('branches'));
    }

    public function create()
    {
        $branches=Branch::all();
        return view('branch_expance.add',compact('branches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'expanse_date' => 'required|date',
            'branches_id' => 'required',
        ]);

        $flight = BranchExpense::firstOrCreate($validated);
         return redirect(route('BranchExpense.edit',$flight->id));
    }

    public function edit($id)
    {
        $BranchExpense=BranchExpense::findOrFail($id);
        $branches=Branch::all();
        return view('branch_expance.edit',compact('branches','BranchExpense'));
    }

    public function update($id,Request $request)
    {
        $BranchExpense=BranchExpense::where('id', $id)
            ->update($request->except('_token','_method'));
        return redirect(route('BranchExpense.index'));
    }

    public function show()
    {
        # code...
    }

}
