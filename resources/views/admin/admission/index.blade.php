@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Admission
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Admission</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="admissiontable" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <th>Action</th>
                           <th>Form No</th>
                           <th>Admission Date</th>
                           <th>Medium</th>
                           <th>Student Name</th>
                           <th>Father's Name</th>
                           <th>Mother's Name</th>
                           <th>Date of Birth</th>
                           <th>Caste</th>
                           <th>Desire to join Std</th>
                           <th>Last School Name</th>
                           <th>Address</th>
                           <th>Occupation of Father</th>
                           <th>Phone</th>
                           <th>Leaving Certificate</th>
                           <th>Your Message</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($admissions as $admission)
                        <tr id="tr_{{$admission->id}}">
                           <!-- <td><input type="checkbox" class="sub_chk" data-id="{{$admission->id}}"></td> -->
                           <td>
                              <a href="{{route('admin.admission.destroy', $admission->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>{{$admission->fnumber}}</td>
                           <td>{{$admission->date}}</td>
                           <td>{{$admission->medium}}</td>
                           <td>{{$admission->sname}}</td>
                           <td>{{$admission->fathername}}</td>
                           <td>{{$admission->mothername}}</td>
                           <td>{{$admission->bod}}</td>
                           <td>{{$admission->cast}}</td>
                           <td>{{$admission->adm_std}}</td>
                           <td>{{$admission->lschool}}</td>
                           <td>{{$admission->address}}</td>
                           <td>{{$admission->occupation}}</td>
                           <td>{{$admission->phonenumber}}</td>
                           <td>
                              <a href="{{$admission->file}}" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i></a>
                           </td>
                           <td>
                              @if(strlen($admission->message) > 50)
                              {!!substr($admission->message,0,50)!!}
                              <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                              <span class="read-more-content"> {{substr($admission->message,50,strlen($admission->message))}}
                                 <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                              @else
                              {{$admission->message}}
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

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
