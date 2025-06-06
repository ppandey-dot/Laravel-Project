<!-- using withStatus function -->
                                @if(session('status'))
                                 <div class="alert alert-success">
                                    
                                    {{session('status')}}
                                   
                                </div>
                                @endif
                                 @if(session('error'))
                                 <div class="alert alert-danger">
                                    
                                    {{session('error')}}
                                   
                                </div>
                                 @endif
                                <!-- using with function key value -->
                               <!--  <div class="alert alert-success">
                                    @if(session('success'))
                                    {{session('success')}}
                                    @endif

                                </div> -->
                            @if(count($errors))
                            <div class="alert alert-danger">
                            <strong>Validation error: Please Fix the following issues</strong>
                            <ul>@foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            </div>
                            @endif