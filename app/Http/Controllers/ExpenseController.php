<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::query()
            ->orderByDesc('date_purchased')
            ->get();
        $currencies = Currency::all();

        return view('home', compact('expenses', 'currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Validation

        // Save image
        $path = $request->file('receipt')
            ->store('receipt');

        // Save Expense
        $expense = new Expense();
        $expense->date_purchased = Input::get('date_purchased', now());
        $expense->description = Input::get('description', '');
        $expense->comment = Input::get('comment', '');
        $expense->ammount = Input::get('ammount', 0);
        $expense->currency_id = Input::get('currency_id', Currency::CHF);
        $expense->receipt = $path;
        $expense->save();

        return redirect('expense.show', $expense->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expense = Expense::findOrFail($id);

        return view('expense.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::findOrFail($id)
            ->delete();

        return redirect('expense.index');
    }
}
