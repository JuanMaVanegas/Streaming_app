<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Models\Payment;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;
use Flash;

class TransactionController extends AppBaseController
{
    /** @var TransactionRepository $transactionRepository*/
    private $transactionRepository;

    public function __construct(TransactionRepository $transactionRepo)
    {
        $this->transactionRepository = $transactionRepo;
        $this->middleware('permission:transaction-list', ['only' => ['index','store']]);
    }

    /**
     * Display a listing of the Transaction.
     */
    public function index(Request $request)
    {
        $transactions = Payment::paginate(10);

        return view('transactions.index')
            ->with('transactions', $transactions);
    }


    /**
     * Display the specified Transaction.
     */
    public function show($id)
    {
        $transaction = Payment::find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('transactions.index'));
        }

        return view('transactions.show')->with('transaction', $transaction);
    }


}
