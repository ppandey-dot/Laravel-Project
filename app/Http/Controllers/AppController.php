<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    //middlware use to chech authentication if user not found return to login page
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return redirect()->route('login');

    }

    //Function for soft Delete
    public function delete($table, $id){
        $param = array('is_deleted' => 1);
        DB::table($table)->where('id', $id)->update($param);

         //back function laravel function use for redirect where you click the button same page
        return redirect()->back()->withStatus("Record Deleted Successfully");
    }
}
