<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debts extends Model
{
    use HasFactory;

    protected $fillable = [
        "debtor_id",
        "reason_debt",
        "date_debt",
        "value_debt",
    ];
}
