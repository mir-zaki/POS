@extends('backend.master')
@section('content')







<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Stocks Value</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="http://localhost/zakii/products/" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="http://localhost/zakii/products/" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-cadetblue">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Total Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="http://localhost/zakii/products/" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Total Paid Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="http://localhost/zakii/orders/" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>1</h3>

                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-people"></i>
                    </div>
                    <a href="http://localhost/zakii/users/" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Total Stores</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-home"></i>
                    </div>
                    <a href="http://localhost/zakii/stores/" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->


    </section>
    <!-- /.content -->
</div>

@endsection
