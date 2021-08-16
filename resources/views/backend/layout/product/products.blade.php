@extends('backend.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>Products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
  
          <div id="messages"></div>
  
          
                    <a href="{{route('product')}}" class="btn btn-primary">Add Product</a>
            <br /> <br />
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  
                  <th>Product Name</th>
                  <th>Buy Price</th>
                  <th>Sell Price</th>
                  <th>Qty</th>
                  <th>Description</th>
                  <th>category</th>
                  
                  <th>Availability</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->product_image}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->buy_price}}</td>
                            <td>{{$product->sell_price}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->category->category_name}}</td>
                            <td>{{$product->availability}}</td>

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
              {{$products->links('pagination::bootstrap-4')}}
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
