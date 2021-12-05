@extends('layouts.master')

@section('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="box-title">Akun Pengguna </h4>
                <a href="{{route('view')}}" class="btn btn-primary btn-sm mb-2 mt-2 "><i class="fas fa-user-plus"></i> Buat Akun Baru</a></td>
            </div>
            <div class="card-body--">
                <div class="table-stats order-table ov-h">

                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">No</th>
                                {{-- <th class="avatar">Avatar</th> --}}
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                          

                                {{-- <th>Status</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                           
                          
                            @foreach ($tuser as $no => $laporan)
                        <tr>
                            <td Scope="col">{{$no+1}}</td>
                            <td><a href="http://localhost/phpmyadmin/sql.php?server=1&db=helpdesk&table=reports&pos=0">AFF{{$laporan->id}}</a></td>
                            <td>{{$laporan->name}}</td>
                            <td>{{$laporan->email}}</td>
                            <td>{{$laporan->role}}</td>
                            <td> 
                                <form action="/hapus{{$laporan->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn  btn-block btn-danger btn-sm mb-2 mt-2"><i class="far fa-times-circle"></i></button>
                                </form> 
                                

                                <a href="{{route('edit',$laporan->id)}}" class="btn btn-block btn-primary btn-sm mb-2 mt-2 "><i class="fas fa-edit"></i></a></td>
                            
                        </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div> <!-- /.table-stats -->
            </div>
        </div> <!-- /.card -->
    </div>  <!-- /.col-lg-8 -->

    
</div>
            
        
    
@endsection