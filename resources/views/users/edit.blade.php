@extends('layouts.master')
@section('content')
	
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          

            <div class="card card-primary card-outline">
              
              <div class="card-body">

                <h5 class="card-title">User Edit</h5>
                <br>
                <form action="{{route('users.update',$user->id)}}" method="POST">
                	@csrf
                  @method('PUT')
                
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                </div>
               
                <div class="col-md-6 col-lg-6 col-sm-6">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="name" value="{{$user->email}}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                   <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="number" name="mobile" class="form-control" value="{{$user->mobile}}">
                    @if($errors->has('mobile'))
                    <span class="text-danger">{{$errors->first('mobile')}}</span>
                    @endif
                  </div>
                </div>

                 <div class="col-md-6 col-lg-6 col-sm-6">
                   <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role">
                      <option value="">Select Role</option>
                      <option value="Admin">Admin</option>
                      <option value="Operator">Operator</option>
                    </select>
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                </div>
            
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary fa fa-save"> Update</button>
                </div>
              </form>
                
              </div>
            </div><!-- /.card -->
          </div>
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@endsection