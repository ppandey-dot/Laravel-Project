<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parties', function (Blueprint $table) {
    $table->id();
    $table->enum("party_type",['vendor','client','employee'])->nullable();
    $table->string("full_name", 100)->nullable();
    $table->string("phone_no")->nullable();
    $table->text("address")->nullable();
    $table->string("account_holder_name")->nullable();
    $table->string("account_no")->nullable();
    $table->string("bank_name")->nullable();
    $table->string("ifsc_code")->nullable();
    $table->string("branch_address")->nullable();
    $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
