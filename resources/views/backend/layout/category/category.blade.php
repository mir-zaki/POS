@extends('backend.master')
@section('content')









<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		Manage
		<small>Category</small>
	  </h1>
	  <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Category</li>
	  </ol>
	</section>

	<!-- Main content -->
	<section class="content">
	  <!-- Small boxes (Stat box) -->
	  <div class="row">
		<div class="col-md-12 col-xs-12">

		  <div id="messages"></div>


					<button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Category</button>
			<br /> <br />

		  <div class="box">
			<div class="box-header">
			  <h3 class="box-title">Manage Categories</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <table id="manageTable" class="table table-bordered table-striped">
				<thead>

				<tr>
				  <th>Category Name</th>
				  <th>Status</th>
					<th>Action</th>
					</tr>
				</thead>

				<tbody>
						@foreach($categories as $category)
							<tr>
								<td>{{$category->category_name}}</td>
								<td>{{$category->active}}</td>
								<td class="">
									<a href="#"><i class="material-icons">cancel</i></a>
									<a href="#"><i class="material-icons">edit</i></a>
                                    <a href="{{route('categories_details',$category->id)}}"><i class="material-icons">details</i></a>

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

  <!-- create brand modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title">Add Category</h4>
		</div>

		<form role="form" action="{{route('categoryadd')}}" method="post" id="createForm">
      @csrf
		  <div class="modal-body">

			<div class="form-group">
			  <label for="brand_name">Category Name</label>
			  <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name" autocomplete="off">
			</div>
			<div class="form-group">
			  <label for="active">Status</label>
			  <select class="form-control" id="active" name="active">
				<option value="Active">Active</option>
				<option value="inactive">Inactive</option>
			  </select>
			</div>
		  </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Save changes</button>
		  </div>

		</form>


	  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- edit brand modal -->





	  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
  </div>
	<div class="control-sidebar-bg"></div>
  </div>


@endsection
