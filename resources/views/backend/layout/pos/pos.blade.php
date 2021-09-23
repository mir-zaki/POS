@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Point of Sell
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">POS</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>



                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">POS</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="#" method="post">
                        {{-- enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="box-body">




                            <div class="form-group">
                                <label for="date" class="form-label">Date</label>
                                <input required type="date" class="form-control" id="purchase_date" name="sell_date">
                              </div>






                            <div class="form-group">
                                <label for="supplier_name">Customer</label>
                                <select type="text" class="form-control select_group"


                                id="supplier_name" name="supplier_name"
                                    placeholder="supplier" autocomplete="off">
                                    <option>Walk in Customer</option>
                                    @foreach ($customer as $add)

                                    <option value="{{$add->id}}">{{$add->name}}</option>

                                @endforeach
                            </select>

                            </div>




                             <div class="form-group">
                                <label for="product_name">Product name</label>
                                <select type="text" class="form-control select_group" id="product_name" name="product_name"
                                    placeholder="Enter product name" autocomplete="off">
                                    <option>Select Product</option>
                                @foreach ($product as $add)

                                    <option value="{{$add->id}}">{{$add->product_name}}</option>

                                @endforeach
                                </select>
                            </div>





                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="buy_price"
                                    placeholder="Enter price" autocomplete="off" />
                            </div>



                            <div class="form-group">

                                <label for="price">Discount</label>
                                <input type="text" class="form-control" id="discount" name="discount"
                                    placeholder="%" autocomplete="off" />
                            </div>



                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty"
                                    autocomplete="off" />
                            </div>


                            {{-- <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control select_group" id="category" name="category"
                                    multiple="multiple">

                                @foreach ($categories as $add)

                                    <option value="{{$add->id}}">{{$add->category_name}}</option>

                                @endforeach


                                </select>
                            </div> --}}




                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>

                        </div>
                    </form>

                    <form role="form" action="{{ route('Purchase_manage') }}" method="post">
                        @csrf
                    <div class="box-body">
                        <table id="manageTable" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th style="width:80px">SL</th>
                            <th>Product Name</th>
                            <th>Buy Price</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th style="width:50px">
                                <i class="fa fa-trash"></i>
                            </tr>
                          </thead>
                          <tbody>

                            {{-- @foreach($pur as $purc)
                            <tr>
                                <td>{!!$purc->id!!}</td>
                                <td>{{$purc->Product->product_name}}</td>
                                <td>{{$purc->buy_price}}</td>
                                <td>{{$purc->qty}}</td>
                                <td>100</td>





                                <td class="">
                                  <a href="#"><i class="fa fa-trash"></i></a>


                                </td>




                            </tr>
                            @endforeach() --}}


                      </tbody>

                        </table>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {{-- <a href="{{route('Purchase_manage')}}" type="button" class="btn btn-info" >Submit</a> --}}
                        </div>

                    </form>

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

<script type="text/javascript">
    $(document).ready(function () {
        $(".select_group").select2();
        $("#description").wysihtml5();

        $("#mainProductNav").addClass('active');
        $("#addProductNav").addClass('active');

        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';
        $("#product_image").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
            layoutTemplates: {
                main2: '{preview} ' + btnCust + ' {remove} {browse}'
            },
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

    });

</script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      })
    })
  </script>

<div>
</div>

@endsection
