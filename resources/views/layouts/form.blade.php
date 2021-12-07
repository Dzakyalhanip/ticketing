@extends('layouts.master')

@section('content')
    
@if (session('status'))
<div class="alert alert-danger">{{session('status')}}</div>
@endif
          
                <div class="col-xl-12">
                  
                        <div class="card-body">
                            <h4 class="box-title">User Akun</h4>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <form action="{{route('update',$tuser->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <div class="card-header"><strong>Update</strong><small> Form</small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control"  value="{{$tuser->name}}">
                                    </div>

                                    <div class="form-group"><label for="vat" class=" form-control-label">Email</label>
                                        <input type="text" id="email" name="email" placeholder="DE1234567890" class="form-control" value="{{$tuser->email}}">
                                    </div>

                                    {{-- <div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
                                    <div class="row form-group">
                                        <div class="col-8">
                                            <div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div> --}}
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                     <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->

               
            </div>
        
    
@endsection