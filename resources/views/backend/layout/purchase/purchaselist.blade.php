@extends('backend.master')
@section('content')


@php
    $total=0;
@endphp


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Purchase Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Purchase</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages"></div>


                    <a href="{{route('product')}}" class="btn btn-primary">Add Purchase</a>
            <br /> <br />


            <button class="btn btn-primary" onclick="printDiv('printableArea')">
                <i class="fa fa-printer"></i>Print
            </button>

            <a href="{{route('addpay_supplier',['id' => $id])}}" class="btn btn-primary">Payment</a>

            <div id="printableArea">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Purchase Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>

                  <th>No</th>
                  <th>Item</th>
                  <th>Qty</th>
                  <th>Unit Price</th>
                  <th>Sub Total</th>
                  </tr>
                </thead>
                <tbody>




                    @foreach($purchaseList as $key=>$list)

                    @php

                    $total=$list->sub_total+ $total
                @endphp

                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{$list->product->product_name}}</td>
                        <td>{{$list->qty}}</td>
                        <td>{{$list->unit_price}}</td>
                        <td>{{$list->sub_total}}</td>






                    </tr>
                    @endforeach()

            </tbody>
            </div>

              </table>

              <tr>
                <th>Total: {{$total}} TK</th>
            </tr>

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


  <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>


@endsection
