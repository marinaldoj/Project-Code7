<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Debts;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    /**
    * @return \Illuminate\Http\Response
    */

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
        return response()->json(Debts::where('id', $id)->get(),200);
    }
}
