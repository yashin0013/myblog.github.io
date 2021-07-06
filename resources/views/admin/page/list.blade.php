@extends('admin/layout.layout')

@section('page_title','Page List')

@section('container')

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Page</h4>
		 </div>
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th width="2%" >S.No</th>
									<th width="20%">Name</th>
									<th width="35%">Slug</th>
									<th width="10%">Date</th>
									<th width="18%">Action</th>
								 </tr>
							  </thead>
							  <tbody>
							  @foreach($result as $list)
								 <tr>
									<td>{{$list->id}}</td>
									<td>{{$list->name}}</td>
									<td>{{$list->slug}}</td>
									<td>{{$list->added_on}}</td>
									<td>
									<a href="{{url('admin/page/edit/'.$list->id)}}" class="btn btn-info">Edit</a>
									<a href="{{url('admin/page/delete/'.$list->id)}}" class="btn btn-danger">Delete</a>
									</td>
								 </tr>
								@endforeach
							  </tbody>
						   </table>
						</div>
						<a href="/admin/page/add" class="btn btn-primary">Add page</a>
						<span class="text-success" >{{session('msg')}}</span>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
@endsection