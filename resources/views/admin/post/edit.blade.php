@extends('admin/layout.layout')

@section('page_title','Edit Post')

@section('container')

   <div class="">
                  <div class="page-title">
                     <div class="title_left">
                        <h3>Manage Post</h3>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="x_panel">
                           <div class="x_content">
                              <br />
                              <form method="Post" action="{{url('/admin/post/update/'.$result['0']->id)}}" enctype="multipart/form-data" class="form-horizontal form-label-left">
                              @csrf
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Title" name="title" value="{{$result['0']->title}}" >
                                       @error('title')
                                       <span class="text-danger" >{{$message}}</span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{$result['0']->slug}}" >
                                       @error('slug')
                                       <span class="text-danger" >{{$message}}</span>
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Short Desc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="short_desc">{{$result['0']->short_desc}}</textarea>
                                       @error('short_desc')
                                       <span class="text-danger" >{{$message}}</span>
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Desc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="long_desc">{{$result['0']->long_desc}}</textarea>
                                       @error('long_desc')
                                       <span class="text-danger" >{{$message}}</span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="file" name="image">
                                       @error('image')
                                       <span class="text-danger" >{{$message}}</span>
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Post Date</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="date" name="post_date" value="{{$result['0']->post_date}}" class="form-control" >
                                       @error('post_date')
                                       <span class="text-danger" >{{$message}}</span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="ln_solid"></div>
                                 <div class="form-group">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                       <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            

@endsection