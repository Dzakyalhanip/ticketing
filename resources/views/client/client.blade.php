@extends('client.master')

@section('content')
@section('judul','Dashboard')

   
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Profile Views</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Followers</h6>
                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Following</h6>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-12 col-xl-4">
                        {{-- <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Europe</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">862</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-europe"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">America</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">375</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-america"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">1025</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-indonesia"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Report</h4>
                            </div>
                            
                            <div class="card-body">
                                <div class="form">
                                    <form action="{{route('simpan')}}" method="POST">
                                    @csrf
                                      <div class="mb-3">
                                        <input type="hidden" class="form-control" id="user_id"  name="user_id" placeholder="name" value=" {{ Auth::user()->id }}">
                                      </div>

                                      {{-- <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <select class="form-select" id="user_id" value="{{old('user_id')}}"  name="user_id" aria-label="Default select example"  >
                                            
                                            <option value="1">{{ Auth::user()->name }}</option>
                                            <option value="2">{{ Auth::user()->id }}</option>
                                            <option value="3">{{ Auth::user()->name }}</option>
                                            <option value="Normal">Normal</option>
                                          </select>
                                      </div> --}}
                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject"  name="subject" placeholder="Enter a Value" value="{{old('subject')}}"> 
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Priority</label>
                                        <select class="form-select" id="priority" value="{{old('priority')}}"  name="priority" aria-label="Default select example"  >
                                            <option selected>Emergency</option>
                                            <option value="High">High</option>
                                            <option value="Low">Low</option>
                                            <option value="Normal">Normal</option>
                                          </select>
                                      </div>
                                      {{-- <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="description"  name="description" rows="3" value="{{old('description')}}"></textarea>
                                      </div> --}}
                                      <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" rows="5" cols="40" class="form-control tinymce-editor" id="description"  name="description" rows="3" value="{{old('description')}}"></textarea>
                                    </div>  
                                      {{-- <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                                            <select class="form-select"  id="status" value="{{old('status')}}"  name="status" aria-label="Default select example"  >
                                                <option selected >Open</option>
                                            </select>
                                            
                                      </div> --}}
                                      
                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                        <input type="hidden" class="form-control" id="status"  name="status" placeholder="Enter a Value" value="Terkirim"> 
                                      </div>

                                      <button type="submit" class="btn btn-primary">Simpan</button>

                                    </form>
                                </div>
                            </div>
                            
                        </div>
{{-- TABLE --}}
                        <div class="card">
                            <div class="card-header">
                                <h4>Reports</h4>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-12">
                                    <table class="table table-hover table-lg-50px">
                                        <thead>
                                            <tr>
                                                <th>No</th>

                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($laporans as $no => $laporan)
                                            <tr>
                                                <th Scope="col">{{$no+1}}</th>
                                                <td>{{$laporan->user->name}}</td>
                                                <td>{{$laporan->subject}}</td>
                                                <td>{{$laporan->description}}</td>
                                                <td>{{$laporan->status}}</td>

                                                
                                            </tr>
                                            @endforeach 
                                        
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                <h6 class="text-muted mb-0"> {{ Auth::user()->id }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Messages</h4>
                    </div>
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Hank Schrader</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/5.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Dean Winchester</h5>
                                <h6 class="text-muted mb-0">@imdean</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/1.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">John Dodol</h5>
                                <h6 class="text-muted mb-0">@dodoljohn</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                Conversation</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
            </div>
        </section>
    
    
@endsection