<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>


<!-- data table -->
<script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- sweet alert -->
<script src="{{asset('js')}}/sweetalert.min.js"></script>
<script src="{{asset('js')}}/notify.js"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){
     // image show javascript
     $("#imgload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myForm").validate({
          rules:{
            "fee_category_id":{
              required: true,
            },
            "student_class_id[]":{
              required: true,
            },
            "amount[]":{
              required: true,
            }
          },
          messages:{

          },
          errorElement:'span',
          errorPlacement:function(error,element){
            error:addClass('invalid-feedback');
            element:closest('.form-group').append(errpr);
          },
          hightlight:function(element,errorClass,validClass){
            element:addClass('is-invalid')
          }
          

         });
  })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myRollGenerateForm").validate({
          rules:{
            "roll[]":{
              required: true
          
          },
          messages:{

          },
          errorElement:'span',
          errorPlacement:function(error,element){
            error:addClass('invalid-feedback');
            element:closest('.form-group').append(errpr);
          },
          highlight:function(element,errorClass,validClass){
            element:addClass('is-invalid')
          }
           unhighlight:function(element,errorClass,validClass){
            element:addClass('is-invalid')
          }
          

         });
  })
</script>
<script>
  $(function () {
  	$('div.alert').not('.alert-important').delay(3000).fadeOut(350);

    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $(".sa-delete").on('click',function(){
    	let form_id = $(this).data("form-id");
    	swal({
			  title: "Are you sure?",
			  text: "Once deleted, you will not be able to recover this imaginary file!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			  	$('#'+form_id).submit();
			  	
			  }
			});
    	});

    

    var counter = 0;
        $(document).on("click",".addeventmore",function(){
          var whole_extra_item_add = $("#whole_extra_item_add").html();
          $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });

         $(document).on("click",".removeeventmore",function(event){
          
          $(this).closest("#delete_whole_extra_item_add").remove();
            counter-=1;
        });
      
      
         
  });
</script>


<script type="text/javascript">

  $(document).on("click","#search",function(){
    var year_id = $("#year_id").val();
    var student_class_id = $("#student_class_id").val();
    if(year_id == ''){
      $.notify("Year Required",{golbalPosition:'top right',className:'error'});
      return false;
    }
    if(student_class_id == ''){
      $.notify("Class Required",{golbalPosition:'top right',className:'error'});
      return false;
    }
  
    $.ajax({
        url:"{{route('student.roll.gen.get_student')}}",
        type: "GET",
        data:{'year_id':year_id,'student_class_id':student_class_id},
        success:function(data){
          $('#roll-generat').removeClass('d-none');
          var html = '';
          $.each(data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student.id+'" <td>'+
            '<td>'+v.student.name+'</td>'+
            '<td>'+v.student.f_name+'</td>'+
            '<td><input type="number" required="" name="roll[]" class="form-controll sm-form-controll" value="'+v.roll+'" <td>'+
            '</tr>';
          });
            html = $('#roll-generate-tr').html(html);
        }
    });


  });
</script>
 

@stack('scripts')