 @extends('layout.app')
@section('content')
 

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title font-weight-bold text-uppercase"> Update Clients </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Start Form  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <h4 class="header-title text-uppercase"> Update Info
                                    </h4>
                                

                                    <hr>
                                    <form class="needs-validation" novalidate="" method="POST" action="{{route('update-party',$party->id)}}">
                                            @csrf
                                            @method('PUT')

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom01">Client Type</label>
                                                    <select name="party_type" class="form-control border-bottom "
                                                        id="validationCustom01" placeholder="Please select Type"
                                                        >

<option value="client" @if($party->party_type == 'client') selected @endif>Client</option>
<option value="vendor" @if($party->party_type == 'vendor') selected @endif>Vendor</option>
<option value="employee" @if($party->party_type == 'employee') selected @endif>Employee</option>


                   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom01">Full Name</label>
                                                    <input name="full_name" value="{{$party->full_name}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom01" placeholder="Enter client's full name"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a Full name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">Phone/Mobile Number</label>
                                                    <input name="phone_no" value="{{$party->phone_no}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter phone/mobile number"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a Number.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom03">Address</label>
                                                    <input name="address" value="{{$party->address}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter Address" >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Address.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h4 class="header-title text-uppercase">Update Bank Details</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom04">Account Holder Name</label>
                                                    <input name="account_holder_name" value="{{$party->account_holder_name}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom04" placeholder="Enter Accoumt Holder name"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom05">Account Number</label>
                                                    <input name="account_no" value="{{$party->account_no}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom05" placeholder="Enter Account Number"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Code.
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">Bank Name</label>
                                                    <input name="bank_name" value="{{$party->bank_name}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter Bank Name"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a GSTIN No.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">IFSC Code</label>
                                                    <input name="ifsc_code" value="{{$party->ifsc_code}}" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter IFSC Code"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a Email.
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-8">
                                                <label for="validationCustom02">Branch Address</label>
                                                <input name="branch_address" value="{{$party->branch_address}}" type="text" class="form-control border-bottom "
                                                    id="validationCustom02" placeholder="Enter Branch Address" >
                                                <div class="invalid-feedback">
                                                    Please provide a Branch Name.
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <br>

                                        <button  class="btn btn-primary" type="submit">Update</button>
                                        <a class="btn btn-secondary" href ="{{route('manage-parties')}}">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

         

            <!-- End Form  -->

            

@endsection