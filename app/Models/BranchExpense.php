<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchExpense extends Model
{
    use HasFactory;

    protected $fillable = ['expanse_date','branches_id'];

}
