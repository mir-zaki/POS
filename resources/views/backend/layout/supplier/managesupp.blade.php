@extends('backend.master')
@section('content')





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        Supplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Supplier</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

                      
                    
            <a href="{{route('supplier')}}" class="btn btn-primary">Add Supplier</a>
            <br /> <br />
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>SL</th>
                  <th>Supplier Name</th>
                  <th>Phone</th>
                  <th>address</th>
                  <th>Email</th>
                  <th>Action</th>
                    
                
                </tr>
                </thead>

                
                <tbody>

                @foreach($supplier as $supp)
                        <tr>
                            <td>{{$supp->id}}</td>
                            <td>{{$supp->supplier_name}}</td>
                            <td>{{$supp->phone}}</td>
                            <td>{{$supp->address}}</td>
                            <td>{{$supp->email}}</td>

                            <td class="">
                              <a href="#"><i class="material-icons">cancel</i></a>
                              <a href="#"><i class="material-icons">edit</i></a>
                              
                            </td>
                            
                            
                            {{-- <td>{{$category->active}}</td> --}}
                            {{-- <td class="">
                                <a href="#"><i class="material-icons">cancel</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                                
                            </td> --}}

                        </tr>				
                        @endforeach()
                 </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

</div>
@endsection