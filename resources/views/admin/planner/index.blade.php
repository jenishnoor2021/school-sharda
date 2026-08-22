@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Planner
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Planner</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">

         <div class="col-md-4">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">ADD Planner</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::open(['method'=>'POST', 'action'=> 'AdminPlannersController@store','files'=>true,'class'=>'form-horizontal','name'=>'plannerform']) !!}
                     @csrf
                     <div class="box-body">
                        <div class="form-group">
                           <label for="year" class="col-sm-2 control-label">Acedemic year</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="year" id="year" placeholder="Enter Acedemic year" required>
                              @if($errors->has('year'))
                              <div class="error text-danger">{{ $errors->first('year') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="medium" class="col-sm-2 control-label">Medium</label>
                           <div class="col-sm-10">
                              <select name="medium" id="medium" class="custom-select" style="width:100%" required>
                                 <option value="">Select medium</option>
                                 <option value="english">English medium</option>
                                 <option value="gujrati">Gujrati medium</option>
                              </select>
                              @if($errors->has('medium'))
                              <div class="error text-danger">{{ $errors->first('medium') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="file" class="col-sm-2 control-label">PDF</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file" accept="application/pdf" required>
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-6 col-sm-2 control-label">
                              {!! Form::submit('Add', ['class'=>'btn btn-success text-white mt-1']) !!}
                           </div>
                        </div>
                     </div>
                     {!! Form::close() !!}
                  </div>
                  <!-- /.box -->
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>

         <div class="col-md-8">
            <div class="box box-primary">
               <div class="box-header">
                  <!-- <h3 class="box-title">List</h3> -->
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <!-- <a href="{{route('admin.planner.create')}}" class="bg-primary text-white text-decoration-none" style="padding:12px 12px;margin-left:20px"><i class="fa fa-plus editable" style="font-size:15px;">&nbsp;ADD</i></a> -->
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <th>Action</th>
                           <th>Acedemic year</th>
                           <th>Medium</th>
                           <th>PDF</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($planners as $planne)
                        <tr id="tr_{{$planne->id}}">

                           <td>
                              <!-- <a href="{{route('admin.planner.edit', $planne->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a> -->
                              <a href="{{route('admin.planner.destroy', $planne->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>{{$planne->year}}</td>
                           <td>{{$planne->medium}}</td>
                           <td>
                              <a href="{{$planne->file}}" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                           </td>

                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$planners->links('pagination::bootstrap-4')}}
                     </div>
                  </div>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection
@section('script')
<script>
   $(function() {

      $("form[name='plannerform']").validate({
         rules: {
            file: {
               required: true,
            },
            year: {
               required: true,
            },
            medium: {
               required: true,
            },
         },
         submitHandler: function(form) {
            form.submit();
         }
      });
   });
</script>
@endsection
