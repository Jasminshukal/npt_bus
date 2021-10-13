<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchExpense extends Model
{
    use HasFactory;

    protected $fillable = ['expanse_date','branches_id','booking','no_seat','parsl','no_parsl','office_expanse','extra_income','remark'];

    public function Branch()
    {
        return $this->belongsTo(Branch::class,'branches_id');
    }

}
