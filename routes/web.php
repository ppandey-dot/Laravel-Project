<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\GstController;
use App\Http\Controllers\VendorInvoice;

//Index Route
Route::get('/', [AppController::class, 'index']);

//Party Route
Route::get("/add-party",[PartyController::class, 'addParty'])->name('add-party');

//Route For post form submission
Route::post("/create-party",[PartyController::class,'createParty'])->name('create-party');
Route::get("/manage-parties",[PartyController::class,'manageParty'])->name('manage-parties');
Route::get("/edit-party/{id}",[PartyController::class,'editParty'])->name('edit-party');
//put request for update you can use post as wll but this is good practice
Route::put("/update-party/{id}",[PartyController::class,'updateParty'])->name('update-party');
//delete request for delete recordes
Route::delete("/delete-party/{party}",[PartyController::class,'deleteParty'])->name('delete-party');
 //Bill Route
Route::get("/add-gst-bill",[GstController::class, 'addGstBilling'])->name('add-gst-bill');
Route::get("/manage-gst-bill",[GstController::class, 'manageBill'])->name('manage-gst-bill');
Route::get("/print-gst-bill/{id}",[GstController::class,'printGstBill'])->name('print-gst-bill');
Route::post("/create-gst-bill",[GstController::class,'createGstBill'])->name('create-gst-bill');

//soft Delete Route
Route::get("/delete/{table}{id}", [AppController::class, 'delete'])->name('delete');

//Resource Controller routes
Route::resource('vendor-invoice', VendorInvoice::class);

//authentication route
Auth::routes();
// Route::resource('vendor-invoice', 'VendorInvoice');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
