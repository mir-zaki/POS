@extends('backend.master')
@section('content')





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Supplier
            Payments</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Supplier
                Payments</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">




                <br /> <br />


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Supplier
                            Payments</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="userTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Account Type</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Pay Amount</th>
                                    <th>Pay Mathod</th>
                                    <th>Due</th>
                                    <th>Reference</th>


                                </tr>
                            </thead>


                            <tbody>


                                @foreach($pay as $supp)
                                @php
                                $due=$supp->amount-$supp->pay ;
                                @endphp
                                    <tr>
                                        <td>{{ $supp->payment_date }}</td>
                                        <td>{{ $supp->account_type }}</td>
                                        <td>{{ $supp->name}}</td>
                                        <td>{{ $supp->amount }}</td>
                                        <td>{{ $supp->pay }}</td>
                                        <td>{{ $supp->pay_method }}</td>
                                        <td>{{$due}}</td>
                                        <td>{{ $supp->refer }}</td>





                                        </td>

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
