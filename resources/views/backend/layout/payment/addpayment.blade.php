@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payments
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Payment</li>
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
                        <h3 class="box-title">Payment</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="" method="post">
                        {{-- enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="box-body">



                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="text" class="form-control  date" data-provide="datepicker"
                                    name="purchase_date" data-date-today-highlight="true" data-date-format="yyyy-mm-dd"
                                    value="2021-08-22">
                            </div>



                            <div class="form-group">
                                <label for="supplier_name">Payment Type</label>
                                <select type="text" class="form-control select_group"


                                id="supplier_name" name="supplier_name"
                                    placeholder="supplier" autocomplete="off">
                                    <option>Cash Recived</option>
                                    <option>Cash Pay</option>

                            </select>

                            </div>






                            <div class="form-group">
                                <label for="supplier_name">Account Type</label>
                                <select type="text" class="form-control select_group"


                                id="supplier_name" name="supplier_name"
                                    placeholder="supplier" autocomplete="off">
                                    <option>Account Type</option>
                                    {{-- @foreach ($customer as $add)

                                    <option value="{{$add->id}}">{{$add->name}}</option>

                                @endforeach --}}
                            </select>

                            </div>



                            <div class="form-group">
                                <label for="product_name">Accout ID</label>
                                <select type="text" class="form-control select_group" id="product_name" name="product_name"
                                    placeholder="Enter product name" autocomplete="off">
                                    <option>Select ID</option>
                                {{-- @foreach ($product as $add)

                                    <option value="{{$add->id}}">{{$add->product_name}}</option>

                                @endforeach --}}
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="supplier_name">Payment Method</label>
                                <select type="text" class="form-control select_group"


                                id="supplier_name" name="supplier_name"
                                    placeholder="supplier" autocomplete="off">
                                    <option>Hand Cash</option>
                                    <option>Bank</option>
                                    <option>Bkash</option>
                                    <option>Rocket</option>
                                    <option>Nagad</option>

                            </select>

                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-money"> Payment</i></button>

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
