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
         <li class="active">Sylabus PDF</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">

      @if(session('alert'))
         <div class="alert alert-success alert-dismissible" style="border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{ session('alert') }}
         </div>
      @endif

      <div class="row">
         <div class="col-md-4">
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
                              <th style="width: 25%;">Standard</th>
                              <th style="width: 15%; text-align: center;">PDF</th>
                              <th style="width: 60%;">Upload Syllabus</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($sylabuengs as $sylabu)
                           <tr>
                              <td style="vertical-align: middle;"><b>{{$sylabu->std}}</b></td>
                              <td style="vertical-align: middle; text-align: center;">
                                 @if($sylabu->hasPdf())
                                    <a href="{{ asset($sylabu->file) }}" target="_blank" title="View PDF"><i class="fa fa-file-pdf-o fa-2x text-danger" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin.sylabus.destroy', $sylabu->id) }}" onclick="return confirm('Are you sure you want to remove this PDF?')" class="text-danger" style="margin-left: 8px;" title="Delete PDF"><i class="fa fa-trash"></i></a>
                                 @elseif(!empty($sylabu->getRawOriginal('file')))
                                    <span class="label label-warning" title="File not found in folder. Please re-upload.">Missing</span>
                                    <a href="{{ route('admin.sylabus.destroy', $sylabu->id) }}" onclick="return confirm('Reset this missing entry?')" class="text-danger" style="margin-left: 5px;" title="Reset entry"><i class="fa fa-times"></i></a>
                                 @else
                                    <span class="text-muted">-</span>
                                 @endif
                              </td>
                              <td style="vertical-align: middle;">
                                 <form method="POST" action="{{ route('admin.sylabus.update', $sylabu->id, false) }}" enctype="multipart/form-data" class="syllabus-upload-form" data-std="{{$sylabu->std}}" data-medium="English Medium">
                                    @csrf
                                    @method('PATCH')
                                    <div style="display: flex; gap: 6px; align-items: center;">
                                       <input type="file" class="form-control syllabus-file-input" name="file" accept="application/pdf" required style="padding: 3px 6px; height: 30px; font-size: 12px; flex: 1; min-width: 0;">
                                       <button type="submit" class="btn btn-success btn-sm syllabus-submit-btn" style="flex-shrink: 0; height: 30px; line-height: 18px;">
                                          <i class="fa fa-upload"></i> Update
                                       </button>
                                    </div>
                                 </form>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>

                  </div>
                  <!-- /.box -->
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <div class="col-md-4">
            <div class="box box-success">
               <div class="box-header">
                  <h3 class="box-title">Gujrati medium</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="box box-info">
                     <table id="example2" class="table table-bordered table-striped" style="margin-top:15px">
                        <thead class="bg-primary">
                           <tr>
                              <th style="width: 25%;">Standard</th>
                              <th style="width: 15%; text-align: center;">PDF</th>
                              <th style="width: 60%;">Upload Syllabus</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($sylabugujs as $sylabu)
                           <tr>
                              <td style="vertical-align: middle;"><b>{{$sylabu->std}}</b></td>
                              <td style="vertical-align: middle; text-align: center;">
                                 @if($sylabu->hasPdf())
                                    <a href="{{ asset($sylabu->file) }}" target="_blank" title="View PDF"><i class="fa fa-file-pdf-o fa-2x text-danger" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin.sylabus.destroy', $sylabu->id) }}" onclick="return confirm('Are you sure you want to remove this PDF?')" class="text-danger" style="margin-left: 8px;" title="Delete PDF"><i class="fa fa-trash"></i></a>
                                 @elseif(!empty($sylabu->getRawOriginal('file')))
                                    <span class="label label-warning" title="File not found in folder. Please re-upload.">Missing</span>
                                    <a href="{{ route('admin.sylabus.destroy', $sylabu->id) }}" onclick="return confirm('Reset this missing entry?')" class="text-danger" style="margin-left: 5px;" title="Reset entry"><i class="fa fa-times"></i></a>
                                 @else
                                    <span class="text-muted">-</span>
                                 @endif
                              </td>
                              <td style="vertical-align: middle;">
                                 <form method="POST" action="{{ route('admin.sylabus.update', $sylabu->id, false) }}" enctype="multipart/form-data" class="syllabus-upload-form" data-std="{{$sylabu->std}}" data-medium="Gujarati Medium">
                                    @csrf
                                    @method('PATCH')
                                    <div style="display: flex; gap: 6px; align-items: center;">
                                       <input type="file" class="form-control syllabus-file-input" name="file" accept="application/pdf" required style="padding: 3px 6px; height: 30px; font-size: 12px; flex: 1; min-width: 0;">
                                       <button type="submit" class="btn btn-success btn-sm syllabus-submit-btn" style="flex-shrink: 0; height: 30px; line-height: 18px;">
                                          <i class="fa fa-upload"></i> Update
                                       </button>
                                    </div>
                                 </form>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <div class="col-md-4">
            <div class="box box-warning">
               <div class="box-header">
                  <h3 class="box-title">Hindi medium</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="box box-info">
                     <table id="example3" class="table table-bordered table-striped" style="margin-top:15px">
                        <thead class="bg-primary">
                           <tr>
                              <th style="width: 25%;">Standard</th>
                              <th style="width: 15%; text-align: center;">PDF</th>
                              <th style="width: 60%;">Upload Syllabus</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($sylabuhins as $sylabu)
                           <tr>
                              <td style="vertical-align: middle;"><b>{{$sylabu->std}}</b></td>
                              <td style="vertical-align: middle; text-align: center;">
                                 @if($sylabu->hasPdf())
                                    <a href="{{ asset($sylabu->file) }}" target="_blank" title="View PDF"><i class="fa fa-file-pdf-o fa-2x text-danger" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin.sylabus.destroy', $sylabu->id) }}" onclick="return confirm('Are you sure you want to remove this PDF?')" class="text-danger" style="margin-left: 8px;" title="Delete PDF"><i class="fa fa-trash"></i></a>
                                 @elseif(!empty($sylabu->getRawOriginal('file')))
                                    <span class="label label-warning" title="File not found in folder. Please re-upload.">Missing</span>
                                    <a href="{{ route('admin.sylabus.destroy', $sylabu->id) }}" onclick="return confirm('Reset this missing entry?')" class="text-danger" style="margin-left: 5px;" title="Reset entry"><i class="fa fa-times"></i></a>
                                 @else
                                    <span class="text-muted">-</span>
                                 @endif
                              </td>
                              <td style="vertical-align: middle;">
                                 <form method="POST" action="{{ route('admin.sylabus.update', $sylabu->id, false) }}" enctype="multipart/form-data" class="syllabus-upload-form" data-std="{{$sylabu->std}}" data-medium="Hindi Medium">
                                    @csrf
                                    @method('PATCH')
                                    <div style="display: flex; gap: 6px; align-items: center;">
                                       <input type="file" class="form-control syllabus-file-input" name="file" accept="application/pdf" required style="padding: 3px 6px; height: 30px; font-size: 12px; flex: 1; min-width: 0;">
                                       <button type="submit" class="btn btn-success btn-sm syllabus-submit-btn" style="flex-shrink: 0; height: 30px; line-height: 18px;">
                                          <i class="fa fa-upload"></i> Update
                                       </button>
                                    </div>
                                 </form>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
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

<!-- Upload Progress Modal Overlay -->
<div id="syllabusUploadModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); z-index: 99999; backdrop-filter: blur(2px);">
   <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 90%; max-width: 480px; background: #ffffff; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.35); overflow: hidden;">
      
      <!-- Modal Header -->
      <div style="background: #3c8dbc; color: #fff; padding: 14px 20px; display: flex; align-items: center; justify-content: space-between;">
         <h4 style="margin: 0; font-size: 17px; font-weight: 600;">
            <i class="fa fa-cloud-upload"></i> Uploading Syllabus PDF
         </h4>
         <span id="uploadStandardBadge" class="label label-warning" style="font-size: 12px; padding: 4px 8px;">Standard</span>
      </div>

      <!-- Modal Body -->
      <div style="padding: 22px 20px;">
         
         <!-- File Info Box -->
         <div style="background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 6px; padding: 10px 14px; margin-bottom: 18px;">
            <div style="font-size: 14px; font-weight: 600; color: #333; margin-bottom: 3px; word-break: break-all;" id="uploadFileName">
               <i class="fa fa-file-pdf-o text-danger" style="margin-right: 6px;"></i> document.pdf
            </div>
            <div style="font-size: 12px; color: #777;" id="uploadFileSize">Size: Calculating...</div>
         </div>

         <!-- Progress Bar Section -->
         <div style="margin-bottom: 15px;">
            <div style="display: flex; justify-content: space-between; font-size: 13px; font-weight: 600; margin-bottom: 6px;">
               <span id="uploadStatusText"><i class="fa fa-spinner fa-spin text-primary"></i> Uploading file...</span>
               <span id="uploadPercentText" class="text-primary" style="font-weight: 700;">0%</span>
            </div>
            
            <div class="progress progress-striped active" style="height: 22px; border-radius: 11px; background: #e9ecef; margin-bottom: 5px; box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);">
               <div id="uploadProgressBar" class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; font-size: 12px; line-height: 22px; font-weight: bold; transition: width 0.2s ease;">
               </div>
            </div>
         </div>

         <!-- Status Subtitle Message -->
         <p id="uploadDetailMessage" style="font-size: 12px; color: #777; text-align: center; margin: 8px 0 0 0;">
            Please wait while the PDF is securely uploaded and processed.
         </p>

         <!-- Error Alert Box -->
         <div id="uploadErrorBox" class="alert alert-danger" style="display: none; margin-top: 15px; margin-bottom: 0; padding: 12px 15px; border-radius: 4px;">
            <div id="uploadErrorMessage" style="font-size: 13px; line-height: 1.4;"></div>
            <div style="text-align: right; margin-top: 10px;">
               <button type="button" id="regularSubmitFallbackBtn" class="btn btn-sm btn-warning" style="margin-right: 6px;">
                  <i class="fa fa-refresh"></i> Submit Directly
               </button>
               <button type="button" id="closeUploadErrorBtn" class="btn btn-sm btn-default">Dismiss</button>
            </div>
         </div>

      </div>

   </div>
</div>
@endsection

@section('script')
<script>
   $(function() {
      var isUploading = false;
      var $lastSubmittedForm = null;

      // File selection validation
      $(document).on('change', '.syllabus-file-input', function() {
         var file = (this.files && this.files.length) ? this.files[0] : null;
         if (file) {
            if (file.type && file.type !== 'application/pdf' && !file.name.toLowerCase().endsWith('.pdf')) {
               alert('Please select a valid PDF file (.pdf only).');
               $(this).val('');
               return false;
            }
            if (file.size > 25 * 1024 * 1024) {
               alert('File size exceeds the 25 MB limit.');
               $(this).val('');
               return false;
            }
         }
      });

      // Handle form submission with AJAX + real-time progress bar
      $(document).on('submit', '.syllabus-upload-form', function(e) {
         e.preventDefault();

         if (isUploading) {
            return false;
         }

         var $form = $(this);
         $lastSubmittedForm = $form;

         var $fileInput = $form.find('.syllabus-file-input');
         if (!$fileInput.length) {
            $fileInput = $form.closest('tr').find('.syllabus-file-input');
         }

         var fileInputEl = $fileInput[0];
         var file = (fileInputEl && fileInputEl.files && fileInputEl.files.length) ? fileInputEl.files[0] : null;

         if (!file) {
            if ($fileInput.length) {
               $fileInput.focus();
               $fileInput.css('border-color', '#dd4b39');
               setTimeout(function() {
                  $fileInput.css('border-color', '');
               }, 3000);
            }
            alert('Please choose a PDF file first before clicking Update.');
            return false;
         }

         var $submitBtn = $form.find('.syllabus-submit-btn');
         if (!$submitBtn.length) {
            $submitBtn = $form.closest('tr').find('.syllabus-submit-btn');
         }

         var standardName = $form.data('std') || 'Standard';
         var mediumName = $form.data('medium') || '';
         var fileSizeFormatted = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
         if (file.size < 1024 * 1024) {
            fileSizeFormatted = (file.size / 1024).toFixed(1) + ' KB';
         }

         // Lock state & prevent duplicate submissions
         isUploading = true;
         $('.syllabus-submit-btn').prop('disabled', true);
         $submitBtn.html('<i class="fa fa-spinner fa-spin"></i> Uploading...');

         // Configure modal display
         $('#uploadStandardBadge').text(mediumName + ' - ' + standardName);
         $('#uploadFileName').html('<i class="fa fa-file-pdf-o text-danger" style="margin-right: 6px;"></i> ' + file.name);
         $('#uploadFileSize').text('Size: ' + fileSizeFormatted);
         $('#uploadStatusText').html('<i class="fa fa-spinner fa-spin text-primary"></i> Uploading file...');
         $('#uploadPercentText').text('0%').removeClass('text-success text-danger').addClass('text-primary');
         $('#uploadProgressBar')
            .css('width', '0%')
            .removeClass('progress-bar-success progress-bar-danger')
            .addClass('progress-bar-primary progress-bar-striped active');
         $('#uploadDetailMessage').text('Please wait while the PDF is securely uploaded and processed.');
         $('#uploadErrorBox').hide();
         $('#syllabusUploadModal').fadeIn(150);

         // Send with FormData via XMLHttpRequest
         var formData = new FormData(this);
         if (!formData.get('file') && file) {
            formData.append('file', file);
         }

         var targetUrl = $form.attr('action');

         $.ajax({
            url: targetUrl,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
               'X-Requested-With': 'XMLHttpRequest',
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
               'Accept': 'application/json'
            },
            xhr: function() {
               var xhr = new window.XMLHttpRequest();
               xhr.upload.addEventListener('progress', function(e) {
                  if (e.lengthComputable) {
                     var percentComplete = Math.round((e.loaded / e.total) * 100);
                     if (percentComplete > 100) percentComplete = 100;

                     $('#uploadProgressBar').css('width', percentComplete + '%');
                     $('#uploadPercentText').text(percentComplete + '%');

                     if (percentComplete < 100) {
                        $('#uploadStatusText').html('<i class="fa fa-spinner fa-spin text-primary"></i> Uploading (' + percentComplete + '%)...');
                     } else {
                        $('#uploadStatusText').html('<i class="fa fa-gear fa-spin text-warning"></i> Processing PDF on server...');
                        $('#uploadDetailMessage').text('File uploaded! The server is saving and finalizing changes...');
                     }
                  }
               }, false);
               return xhr;
            },
            success: function(response) {
               $('#uploadProgressBar')
                  .css('width', '100%')
                  .removeClass('progress-bar-primary active')
                  .addClass('progress-bar-success');
               $('#uploadPercentText').text('100%').removeClass('text-primary').addClass('text-success');
               $('#uploadStatusText').html('<i class="fa fa-check-circle text-success"></i> Upload Complete!');
               $('#uploadDetailMessage').html('<strong class="text-success">' + (response.message || 'Syllabus PDF updated successfully!') + '</strong> Refreshing page...');

               setTimeout(function() {
                  window.location.reload();
               }, 800);
            },
            error: function(xhr, status, error) {
               isUploading = false;
               $('.syllabus-submit-btn').prop('disabled', false);
               $submitBtn.html('<i class="fa fa-upload"></i> Update');

               console.error('Syllabus upload error:', {
                  status: xhr.status,
                  statusText: xhr.statusText,
                  responseText: xhr.responseText,
                  responseJSON: xhr.responseJSON,
                  error: error
               });

               var errorMsg = 'An error occurred during upload. Please try again.';
               if (xhr.responseJSON && xhr.responseJSON.message) {
                  errorMsg = xhr.responseJSON.message;
               } else if (xhr.responseJSON && xhr.responseJSON.errors && xhr.responseJSON.errors.file) {
                  errorMsg = xhr.responseJSON.errors.file[0];
               } else if (xhr.status === 413) {
                  errorMsg = 'File is too large. Server rejected the payload.';
               } else if (xhr.status === 419) {
                  errorMsg = 'Session or CSRF token expired. Please refresh the page and try again.';
               } else if (xhr.status === 405) {
                  errorMsg = 'Method not allowed (405). The server rejected the request method.';
               } else if (xhr.status === 404) {
                  errorMsg = 'Upload endpoint not found (404) at: ' + targetUrl;
               } else if (xhr.status === 0) {
                  errorMsg = 'Connection error (Status 0). The request to ' + targetUrl + ' was blocked or aborted.';
               } else if (xhr.statusText) {
                  errorMsg = 'Server response (' + xhr.status + '): ' + xhr.statusText;
               }

               $('#uploadProgressBar')
                  .removeClass('progress-bar-primary active')
                  .addClass('progress-bar-danger');
               $('#uploadStatusText').html('<i class="fa fa-times-circle text-danger"></i> Upload Failed' + (xhr.status ? ' (' + xhr.status + ')' : ''));
               $('#uploadErrorMessage').html(errorMsg);
               $('#uploadErrorBox').slideDown();
            }
         });
      });

      // Regular submit fallback if AJAX is ever blocked
      $('#regularSubmitFallbackBtn').on('click', function() {
         if ($lastSubmittedForm && $lastSubmittedForm.length) {
            $('#syllabusUploadModal').fadeOut(100);
            $lastSubmittedForm.off('submit').submit();
         }
      });

      $('#closeUploadErrorBtn').on('click', function() {
         $('#syllabusUploadModal').fadeOut(150);
      });
   });
</script>
@endsection
