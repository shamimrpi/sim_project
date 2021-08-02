@extends('layouts.master')
@section('content')
  
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Employee Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Employee </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <div class="content">
      <div class="container-fluid">
     
   
          

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Create Employee</h5>
                <a class="btn btn-info btn-sm float-sm-right" href="{{route('emaployee.all')}}">Employee list</a>
                <br>
                <form action="{{route('employee.store')}}" method="POST" id="studentForm" enctype="multipart/form-data">
                  @csrf
                
                  @method('POST')
                
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Enter Fee Category name">
                           
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Father Name</label>
                            <input type="text" name="f_name" class="form-control form-control-sm" id="f_name" placeholder="Enter Father Name" value="">
                          
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mother Name</label>
                            <input type="text" name="m_name" class="form-control form-control-sm" id="m_name" placeholder="Enter Mother Name" value="">
                           
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="mobile" class="form-control form-control-sm" id="mobile" placeholder="Enter Mobile Number" value="">
                            
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" class="form-control form-control-sm" id="address" placeholder="Enter Address" value="">
                            
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
                            <select class="form-control form-control-sm" name="gender_id" id="gender_id" >
                              <option value="">Select Gender</option>
                              @foreach($genders as $gender)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>
                              @endforeach
                            </select>
                            
                         
                          
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Religion</label>
                            <select class="form-control form-control-sm"  name="religion_id" id="religion_id">
                              <option value="">Select Religion</option>
                               @foreach($religions as $religion)
                                <option value="{{$religion->id}}" {{(@$a_student->student->religion_id == $religion->id)?'selected':''}}>{{$religion->name}}</option>
                              @endforeach
                            </select>
                            
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Join Date</label>
                            <input type="date" name="join_date" class="form-control form-control-sm" id="join_date" placeholder="Enter Fee Category name" autocomplete="off">
                           
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input type="date" name="dob" class="form-control form-control-sm" id="dob" placeholder="Enter Fee Category name" autocomplete="off">
                            
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Designation</label>
                            <select class="form-control form-control-sm" name="designation_id" id="designation_id" >
                              <option value="">Select Designation</option>
                              @foreach($designations as $designation)
                                <option value="{{$designation->id}}">{{$designation->name}}</option>
                              @endforeach
                            </select>
                             
                          
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="text" name="salary" class="form-control form-control-sm" id="salary" placeholder="Enter salary" autocomplete="off" >
                           
                          </div>
                        </div>



                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm" id="imgload">
                           
                          </div>
                        </div>

                        <div class="col-md-3">
                          <img id="showImage" src="{{asset('upload/no_found.png')}}"  style="height: 150px;width: 170px;border: 1px solid #eee">
                        </div>
                    
                    </div>
                    <div class="row"> 
                      <div class="col-md-3">
                        <button type="submit" class="btn btn-primary fa fa-save"> Save</button>
                     </div>
                    </div>
                </form>
                <div>
              
            </div><!-- /.card -->
          </div>
        
          <!-- /.col-md-6 -->
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    

@endsection