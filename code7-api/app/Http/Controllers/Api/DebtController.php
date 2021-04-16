<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Debts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DebtController extends Controller
{
    public function createNewDebt(Request $request){
        $debt = new Debts;
        $debt->debtor_id = $request->id;
        $debt->reason_debt = $request->reason;
        $debt->date_debt = $request->date;
        $debt->value_debt = $request->value;
        $debt->save();

        return response()->json($debt,201);
    }

    public function updateDebt ($id, Request $request){
        $debt = Debts::where('id', $id)->first();
        $debt->reason_debt = $request->reason;
        $debt->date_debt = $request->date;
        $debt->value_debt = $request->value;
        $debt->save();
    }

    public function deleteDebt($id){
        return response()->json($debt = Debts::where('id', $id)->delete(),200);
    }

    public function getAllDebts($id){
        $debts = Debts::where('debtor_id', $id)->get();
        return response()->json($debts,200);
    }
}
