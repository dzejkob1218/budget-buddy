<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store the newly created expense in session
     * (Long term storage will be handled by this expense's receipt controller)
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function remember(Request $request)
    {
        # Make sure the newExpenses array is there
         if (session('newExpenses') == null){
             session(['newExpenses' => []]);
         }

         request()->validate([
             'category' => ['required', 'max:20'],
             'quantity' => ['required','gt:0'],
             'price' => ['required', 'gte:0']
         ]);

        # check if the category exists, if not, assign 0 and it will be created when the shopping is saved
        # assign user id from auth
        # receipt_id stays null and will be assigned when receipt is saved
        $attributes['category'] = $request['category'];
        $attributes['quantity'] = $request['quantiy'];
        $attributes['price'] = $request['price'];

        $newExpense = new Expense($attributes);
        session(['newExpense' => $newExpense]);

        return view('components.display.new-expense-list-entry', [
            'id' => rand(0, 100)
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param Expense $expense
     * @return Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Expense $expense
     * @return Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Expense $expense
     * @return Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Expense $expense
     * @return Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
