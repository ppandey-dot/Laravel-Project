<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function Opis\Closure\unserialize;


class PartyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     #function to load parties(select parties table table)
    public function manageParty(){
        // select all record using party model
    // $parties = Party::all();

    //select all record for specific column
    $parties = Party::select(
        'id',
        'party_type',
        'full_name',
        'phone_no',
        'address',
        'account_holder_name',
        'account_no','bank_name',
        'ifsc_code',
        'branch_address',
        'created_at')
        ->get();


      return view('party.manage-parties',compact('parties'));

    }

    public function addParty(){
        return view('party.add');
    }

    public function createParty(Request $request)  //$request is the formdata
    {

        //validation Form
         $request->validate([
          'party_type'=>'required',
          'full_name'=>'required|string|min:2|max:20',
          'phone_no'=>'required',
          'address'=>'required|max:255',
          'account_holder_name'=>'required|min:2|max:20',
          'account_no'=>'required',
          'bank_name'=>'required|max:255',
          'ifsc_code'=>'required|max:30',
          'branch_address'=>'required|max:255',

         ]);
        




         //Pass parametar to save all form data in to dtabase
         $param = $request->all();

         //Remove token from post data before insrting
         unset($param['_token']);

          //Party model to save the data in party table
         Party::create($param);
         
         //redirect to form page after submit 
         //withStatus function give a succesfully massage best method
         return redirect()->route('add-party')->withStatus("Party Created Successfully");

         //one more method for print massage after submit successfully using key value like associative array method.
         // return redirect()->route('add-party')->with("success", "Party Created Successfully");


    }

    //edit controller
    public function editParty($party_id){
        $data['party'] = Party::find($party_id);
        

        return view('party.edit-party',$data);
    }

    public function updateParty($id, Request $request){
      //validation Form
        $request->validate([

    'full_name' => 'required|string|min:2|max:20',
    'phone_no' => 'required',
    'address' => 'required|max:255',
    'account_holder_name' => 'required|min:2|max:20',
    'account_no' => 'required',
    'bank_name' => 'required|max:255',
    'ifsc_code' => 'required|max:30',
    'branch_address' => 'required|max:255',
]);


        //update form
        $param= $request->all();
        unset($param['_token']);
        unset($param['_method']);
        Party::where('id', $id)->update($param);
        return redirect()->route('manage-parties')->withStatus("Party Updated Succesfully");
    }

    //delete recordes
    public function deleteParty(Party $party){
        $party->delete();
        return redirect()->route('manage-parties')->withStatus("Party deleted Succesfully");
    }



}
