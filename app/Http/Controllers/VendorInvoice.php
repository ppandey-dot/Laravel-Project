<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorInvoice extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("vendor-invoice.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       #check for existing client(vendor)
        $party = DB::table('parties')
        ->where('party_type', 'vendor')
        ->where(['full_name' => $request->full_name, 'phone_no' =>$request->phone_no])
        ->first();
        if(!empty($party)){
            $party_id = $party->id;
        }else{
            # Create new Party
            $param = array(
             'party_type' => 'vendor',
             'full_name' => $request->full_name,
             'phone_no' => $request->phone_no,
             'address' => $request->address,
             'account_holder_name' => $request->account_holder_name,
            'account_no' => $request->account_no,
             'bank_name' => $request->bank_name,
             'ifsc_code' => $request->ifsc_code,
             'bank_address' => $request->bank_address,
             'invoice_date' => $request->invoice_date

            );
            $party_id = DB::table('parties')->insertGetID($param);
        }

        #Create vendor invoice
        $param=array(
             'party_id' => $party_id,
             'account_holder_name' => $request->account_holder_name,
            'account_no' => $request->account_no,
             'bank_name' => $request->bank_name,
             'ifsc_code' => $request->ifsc_code,
             'bank_address' => $request->bank_address,
             'invoice_date' => $request->invoice_date,
             'item_description' => $request->item_description,
             'total_amount' => $request->total_amount,
             'declaration' => $request->declaration,
             'created_at' =>date("Y-m-d H:i:s")
        );
        $invoice_id = DB::table('vendor_invoices')->insertGetId($param);
        if($invoice_id) {
            return redirect()->route('vendor-invoice.show', $invoice_id);
        } else{
            return redirect()->back()->withError("Something went wrong, please try gain");
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoice = DB::table('vendor_invoices')->where('id', $id)->first();
        return view('vendor-invoice.print', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
