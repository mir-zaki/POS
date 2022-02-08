@extends('backend.master')
@section('content')

@php
$total=0;
@endphp



<div class="content-wrapper">

    <head>
        <title>Sale</title>
    </head>
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <h1>
        Sale Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sale</li>
      </ol>
    </section> --}}

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>



                <br /> <br />
                <div>

                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" onclick="printDiv('printableArea')">
                        <i class="fa fa-printer"></i>Print
                    </button>

                    <a href="{{route('addpay_customer',['id' => $id])}}" class="btn btn-primary">Payment</a>
                    {{-- <a href="{{route('addpay_customer')}}" class="btn btn-primary">Payment</a> --}}

                    <br>
                    <br>

                </div>

                <div id="printableArea">


                    <div class="box">
                        <div class="box-header">
                            <img src="{{url('/uploads/m.png')}}" width="128" height="63" alt="" />
                            <h3 style="text-align: center;">MIR HARDWARE</h3>
                            <h6 style="text-align: center;">INVOICE</h6>
                        </div>



                        <div class="box">
                            <div class="col-md-6">
                                @foreach($customer as $list)

                                <div class="table-responsive">
                                    <table class="table table-sm table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th style="width:150px" class="pl-0 w-5" scope="row"><strong>Customer
                                                        Name:</strong></th>
                                                <td>{{$list->Customer->customer_name}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:100px" class="pl-0 w-5" scope="row"><strong>Mobile
                                                        No:</strong></th>
                                                <td>{{$list->Customer->phone}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:100px" class="pl-0 w-5" scope="row">
                                                    <strong>Address:</strong></th>
                                                <td>{{$list->Customer->address}}</td>
                                            </tr>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endforeach

                            </div>

                            <!-- /.box-header -->
                            <div style="width:1000px" class="box-body">
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




                                        @foreach($salelist as $key=>$list)

                                        @php

                                        $total=$list->sub_total+ $total
                                        @endphp

                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$list->product->product_name}}</td>
                                            <td>{{$list->qty}}</td>
                                            <td>{{$list->sale_price}}</td>
                                            <td>{{$list->sub_total}}</td>






                                        </tr>
                                        @endforeach()

                                    </tbody>



                                </table>




                                <div  class="col-md-6">
                                    @foreach($payment as $list)

                                    <div class="table-responsive">
                                        <table class="table table-sm table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th style="width:150px"  class="pl-0 w-5" scope="row" >
                                                        <strong>Total:
                                                        </strong></th>
                                                    <td>{{$list->amount}} TK</td>
                                                </tr>
                                                <tr>
                                                    <th style="width:100px" class="pl-0 w-5" scope="row">
                                                        <strong>Payment
                                                            Amount:</strong></th>
                                                    <td>{{$list->pay}} TK</td>
                                                </tr>
                                                <tr>
                                                    <th style="width:100px" class="pl-0 w-5" scope="row">
                                                        <strong>Due:</strong></th>
                                                    <td>{{$list->due}} TK</td>
                                                </tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endforeach

                                </div>




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
