@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Sylabus PDF
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Sylabus Image</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-6">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">English medium</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <table id="example1" class="table table-bordered table-striped" style="margin-top:15px">
                        <thead class="bg-primary">
                           <tr>
                              <th>Standart</th>
                              <th>PDF</th>
                              <th>Choose file</th>
                              <th>Update</th>
                           </tr>
                        </thead>
                        @foreach($sylabuengs as $sylabu)
                        <tbody>
                           <tr>
                              <td><b>{{$sylabu->std}}</b></td>
                              <td>
                                 @if($sylabu->file == '/sylabuspdf/')
                                 @else
                                 <a href="{{$sylabu->file}}" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                              </td>
                              @endif

                              {!! Form::model($sylabu, ['method'=>'PATCH', 'action'=> ['AdminSylabusController@update', $sylabu->id],'files'=>true,'class'=>'form-horizontal']) !!}
                              @csrf
                              <td>
                                 <input type="file" class="form-control" name="file" id="file" accept="application/pdf">
                              </td>
                              <td>
                                 {!! Form::submit('Update', ['class'=>'btn btn-success text-white mt-1']) !!}
                              </td>
                           </tr>
                           {!! Form::close() !!}
                        </tbody>
                        @endforeach
                     </table>

                  </div>
                  <!-- /.box -->
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <div class="col-md-6">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">Gujrati medium</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="box box-info">
                     <table id="example1" class="table table-bordered table-striped" style="margin-top:15px">
                        <thead class="bg-primary">
                           <tr>
                              <th>Standart</th>
                              <th>PDF</th>
                              <th>Choose file</th>
                              <th>Update</th>
                           </tr>
                        </thead>
                        @foreach($sylabugujs as $sylabu)
                        <tbody>
                           <tr>
                              <td><b>{{$sylabu->std}}</b></td>
                              <td>
                                 @if($sylabu->file == '/sylabuspdf/')
                                 @else
                                 <a href="{{$sylabu->file}}" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                              </td>
                              @endif

                              {!! Form::model($sylabu, ['method'=>'PATCH', 'action'=> ['AdminSylabusController@update', $sylabu->id],'files'=>true,'class'=>'form-horizontal']) !!}
                              @csrf
                              <td>
                                 <input type="file" class="form-control" name="file" id="file" accept="application/pdf">
                              </td>
                              <td>
                                 {!! Form::submit('Update', ['class'=>'btn btn-success text-white mt-1']) !!}
                              </td>
                           </tr>
                           {!! Form::close() !!}
                        </tbody>
                        @endforeach
                     </table>
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

      $("form[name='galleryform']").validate({
         rules: {
            file: {
               required: true,
            },
            category: {
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
         $("#blah_gall").attr("src", e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
      $("#blah_gall").css("display", "block");
   });
</script>
@endsection
