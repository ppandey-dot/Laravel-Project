 @extends('layout.app')
 @section('content') 
            <div class="row">
                <div class="col">
                    <div class="page-title-box">
                        <h2 class="page-title font-weight-bold text-uppercase">Manage Clients</h2>
                    </div>
                </div>

            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        @include('include.alert')
                        <a href="{{route('add-party')}}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                            <i class="mdi mdi-plus-circle"></i> Add Client
                        </a>
                        <h4 class="header-title mb-4 text-uppercase">Manage Clients</h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-10">
                                <div class="dataTables_length" id="alternative-page-datatable_length"><label>Show
                                        <select name="alternative-page-datatable_length"
                                            aria-controls="alternative-page-datatable"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div id="alternative-page-datatable_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm"
                                            placeholder="" aria-controls="alternative-page-datatable"></label>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered"
                            id="tickets-table">
                            <thead>
                                <tr>
                                    <th>
                                        S.No.
                                    </th>
                                    <th>Clint Type</th>
                                    <th>Client Info</th>
                                    <th>Bank Details</th>
                                    <th>Created On</th>
                                    <th class="hidden-sm">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($parties))
                                @foreach($parties as $index=>$party)
                                <tr>
                                    <td><b>{{$index+1}}</b></td>
                                    <td>
                                        {{$party->party_type}}
                                    </td>

                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Name :</b><span> {{$party->full_name}}</span></li>
                                            <li><b>Phone :</b> <span> {{$party->phone_no}}</span></li>
                                            <li><b>Address :</b><span> {{$party->address}}</span></li>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Account_holder_name :</b><span> {{$party->account_holder_name}}</span></li>
                                            <li><b>Account_no</b> <span> {{$party->account_no}}</span></li>
                                            <li><b>Bank Name :</b><span> {{$party->bank_name}}</span></li>
                                            <li><b>Ifsc Code :</b><span> {{$party->ifsc_code}}</span></li>
                                            <li><b>Branch Address :</b><span> {{$party->branch_address}}</span></li>
                                        </ul>
                                    </td>

                                    <td>
                                        {{date("d-m-y", strtotime($party->created_at))}}
                                    </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);"
                                                class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{route('edit-party',$party->id)}}"><i
                                                        class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                               <!--  <a class="dropdown-item" href="#"><i
                                                        class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a> -->
                             <form method="post" action="{{route('delete-party', $party)}}">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="sumbit" ><i
                                                        class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</button>
                                 
                             </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div><!-- end col -->
                </div>

            </div>
            <!-- end row -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@endsection