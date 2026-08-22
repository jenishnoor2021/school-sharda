@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Staff
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Edit Staff</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- right column -->
         <div class="col-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
               <div class="box-header with-border">
                  <!-- <h3 class="box-title">Horizontal Form</h3> -->
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               {!! Form::model($body['testomonial'], ['method'=>'PATCH', 'action'=> ['AdminStaffController@update', $body['testomonial']['id']],'files'=>true,'class'=>'form-horizontal','name'=>'editstaff']) !!}
               @csrf
               <div class="box-body">
                  <div class="form-group">
                     <label for="testomonial" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{$body['testomonial']['name']}}" required>
                        @if($errors->has('testomonial'))
                        <div class="error text-danger">{{ $errors->first('testomonial') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="category" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-4">
                        <select name="category" id="category" class="custom-select" style="width:100%" required>
                           <option value="">Select category</option>
                           <option value="teaching" {{ $body['testomonial']['category'] == 'teaching' ?'selected' : '' }}>Teaching Staff</option>
                           <option value="office" {{ $body['testomonial']['category'] == 'teaching' ?'office' : '' }}>Office Staff</option>
                           <option value="nonteaching" {{ $body['testomonial']['category'] == 'nonteaching' ?'selected' : '' }}>Non Teaching Staff</option>
                        </select>
                        @if($errors->has('category'))
                        <div class="error text-danger">{{ $errors->first('category') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="name" class="col-sm-2 control-label">Profile image</label>
                     <div class="col-sm-3">
                        <input type="file" name="file" id="file" class="form-control border border-dark mb-2" accept="image/*">
                        @if($errors->has('file'))
                        <div class="error text-danger">{{ $errors->first('file') }}</div>
                        @endif
                     </div>
                     <div class="col-sm-1">
                        <img height="50" src="{{$body['testomonial']['file'] ? $body['testomonial']['file'] : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2"></label>
                     <img id="blah_staf_edit" src="#" alt="your image" style="display:none;max-height: 200px;width:250px" />
                  </div>
                  <div class="form-group">
                     <label for="qualification" class="col-sm-2 control-label">Qualification</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="qualification" id="qualification" value="{{$body['testomonial']['qualification']}}" required>
                        @if($errors->has('qualification'))
                        <div class="error text-danger">{{ $errors->first('qualification') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="designation" class="col-sm-2 control-label">Designation</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="designation" id="designation" value="{{$body['testomonial']['designation']}}" required>
                        @if($errors->has('designation'))
                        <div class="error text-danger">{{ $errors->first('designation') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="experience" class="col-sm-2 control-label">Experience</label>
                     <div class="col-sm-3">
                        <input type="number" class="form-control" name="experience" id="experience" value="{{$body['testomonial']['experience']}}" required>
                        @if($errors->has('experience'))
                        <div class="error text-danger">{{ $errors->first('experience') }}</div>
                        @endif
                     </div>
                     <div class="col-sm-1">
                        <p style="font-size:20px"><b>Years</b></p>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-3 col-sm-2 control-label">
                        {!! Form::submit('update', ['class'=>'btn btn-success text-white mt-1 mb-3']) !!}
                     </div>
                  </div>
               </div>
               {!! Form::close() !!}
            </div>
            <!-- /.box -->
         </div>
         <!--/.col (right) -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection
@section('script')
<script>
   $(function() {

      $("form[name='editstaff']").validate({
         rules: {
            name: {
               required: true,
            },
            category: {
               required: true,
            },
            qualification: {
               required: true,
            },
            designation: {
               required: true,
            },
            experience: {
               required: true,
            },
         },
         submitHandler: function(form) {
            form.submit();
         }
      });
   });

   $("#file").change(function() {
      let reader = new FileReader();
      reader.onload = (e) => {
         $("#blah_staf_edit").attr("src", e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
      $("#blah_staf_edit").css("display", "block");
   });
</script>
@endsection
