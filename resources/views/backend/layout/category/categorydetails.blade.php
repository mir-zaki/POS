@extends('backend.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        Purchase</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages"></div>



            <br /> <br />

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#SL</th>
                  <th>Product Name</th>
                  <th>Price</th>

                  </tr>
                </thead>
                <tbody>
                    {{-- @dd($product) --}}

                    @foreach($product as $key=>$pro)
                    <tr>
                        {{-- <td>{{$pro->id}}</td> --}}
                        <td>{{$key+1}}</td>
                        <td>{{$pro->product_name}}</td>
                        {{-- <td>{{$purc->buy_price}}</td> --}}
                        <td>100</td>




{{--
                        <td class="">
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

  <!-- remove brand modal -->


        </form>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->





    <div class="control-sidebar-bg"></div>
  </div>


@endsection





