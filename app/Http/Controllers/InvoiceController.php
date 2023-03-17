<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::all();
        return response()->json([
            'message' => "Success",
            'status' => 'success',
            'data' => $invoice
        ], 200);
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
        $request->validate([
            'vat' => 'required|numeric',
            'date' => 'required|date',
            'service_charge' => 'required|numeric',
            'billed_to_line_1' => 'required|string|max:255',
            'billed_to_line_2' => 'required|string|max:255',
            'billed_to_line_3' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'account_number' => 'required|numeric',
            'bank_name' => 'required|string|max:255',
            'line_items' => 'required|json',
        ]);
        $input = $request->all();
        $invoice = Invoice::create($input);

        return response()->json([
            'message' => "Success",
            'status' => 'success',
            'data' => $invoice
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $invoice = Invoice::where('id', $id)->get();
        if (!$invoice) {
            return response()->json([
                'message' => "Invoice not found",
                'status' => 'error',
            ], 404);
        } else {
            return response()->json([
                'message' => "Success",
                'status' => 'success',
                'data' => $invoice
            ], 200);
        }
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
        //
    }
}
