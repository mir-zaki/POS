@extends('backend.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            Stocks</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
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
                        <h3 class="box-title">Manage Stocks</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="manageTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Buy Price</th>
                                    <th>Sell Price</th>
                                    <th>Purchases</th>
                                    <th>Available Stock</th>
                                </tr>
                            </thead>
                            <tbody>


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
