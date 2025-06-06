<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\GstBill;


class GstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Function to load add gst bill view
    public function addGstBilling(){
    $data['parties'] = Party::where('party_type', 'client')->orderBy('full_name', 'desc') ->get();
        return view("gst.add-gst-bill", $data);
    }

    // function to load gst bill
    public function manageBill()
    {
        $bills = GstBill::where('is_deleted', 0)->with('party')->get();   
        return view("gst.manage-gst-bill", compact('bills'));

    }
    public function printGstBill($id)
    {
        $data['bill'] = GstBill::where('id', $id)->with('party')->first();
        return view("gst.print-gst-bill", $data);
    }

    //Function to crate/store gstBill
    public function createGstBill(Request $request) {
        //validation Form
        $request->validate([
'party_id' => 'required|exists:parties,id',
'invoice_date' => 'required|date',
'invoice_no' => 'required|string|max:255',
'item_description' => 'required|max:250',
'total_amount' => 'required|numeric',
'cgst_rate' => 'nullable|min:0|max:100',
'cgst_amount' => 'numeric|min:0',
'sgst_rate' => 'nullable|min:0|max:100',
'sgst_amount' => 'numeric|min:0',
'igst_rate' => 'nullable|min:0|max:100',
'igst_amount' => 'numeric|min:0',
'tax_amount' => 'numeric|min:0',
'net_amount' => 'required|numeric|min:0',
'declaration' =>'nullable|max:250'
]);

        $param= $request->all();
        unset($param['_token']);
        GstBill::create($param);

        //redirect to managebills
        return redirect()->route('manage-gst-bill')->withStatus("Bill created Successfully");
    
    }


}
