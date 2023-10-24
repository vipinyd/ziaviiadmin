<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    public function index(Request $request)
    {

    Spatie\DbDumper\Databases\MySql::create()
    ->setDbName("fcc_live")
    ->setUserName("fccroot")
    ->setPassword("fccziavii")
    ->dumpToFile('dump.sql');
 
        // dd(Transaction::all());
         if ($request->ajax()) {
            $transaction = Transaction::all();
            return datatables()->of($transaction)->make(true);
        }

        return view('admin.transaction.index');

    }
}
