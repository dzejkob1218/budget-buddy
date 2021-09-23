<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Faker\Factory;
use Faker\Generator as Faker;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|View
     */
    public function create()
    {
        $faker = Factory::create();

        // Check if a temp rec exists, make one if not
        // TODO: Can these assignments be done better?
        if (session('newReceipt') == null) {
            $newReceipt = new Receipt();
            $newReceipt->user_id = Auth::id();
            $newReceipt->date = date('Y-m-d');
            session(['newReceipt' => $newReceipt]);
        }

        // Load the view with the temp rec
        return view('pages.add-expenses', [
            'newReceipt' => session('newReceipt')
        ]);
    }

    /**
     * Update the temporary receipt in session
     */
    public function remember(Request $request)
    {
        session('newReceipt')->fill($request->all());
        session('newReceipt')->date = $request['date'];
    }

    /**
     * Remove the temporary receipt from session
     */
    public function forget()
    {
        return session()->pull('newReceipt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store()
    {
        // Save a temporary receipt to database
        // Save all temporary expenses under it too

        $receipt = $this->forget();
        $receipt->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Receipt $receipt
     * @return Response
     */
    public function show(Receipt $receipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Receipt $receipt
     * @return Response
     */
    public function edit(Receipt $receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Receipt $receipt
     * @return Response
     */
    public function update(Request $request, Receipt $receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Receipt $receipt
     * @return Response
     */
    public function destroy(Receipt $receipt)
    {
        //
    }
}
