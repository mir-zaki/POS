@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Purchase
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



                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Purchase</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="{{ route('Purchase_add') }}" method="post">
                        {{-- enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="box-body">


                            <div class="form-group">
                                <label for="supplier_name">Supplier</label>
                                <select type="text" class="form-control select_group"


                                id="supplier_name" name="supplier_name"
                                    placeholder="supplier" autocomplete="off">
                                    <option>Select Supplier</option>
                                    {{-- @foreach ($supplier as $add)

                                    <option value="{{$add->id}}">{{$add->supplier_name}}</option>

                                @endforeach --}}
                            </select>

                            </div>









                            <div class="form-group">
                                <label for="product_name">Challan No</label>
                                <select type="text" class="form-control" id="Challan_no" name="Challan_no"
                                    placeholder="Enter product name" autocomplete="off">

                                </select>
                            </div>



                            <div class="form-group">
                                <label for="price">Total Purchase</label>
                                <input type="text" class="form-control" id="total_Purchase" name="total_Purchase"
                                    placeholder="Total Purchase" autocomplete="off" />
                            </div>



                            <div class="form-group">
                                <label for="qty">Received By</label>
                                <input type="text" class="form-control" id="received" name="received" placeholder="received"
                                    autocomplete="off" />
                            </div>



                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>

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
