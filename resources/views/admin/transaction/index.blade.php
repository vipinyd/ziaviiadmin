
@extends('admin.layout.app')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-6">Booking
                            {{-- <h3 class="content-header-title float-left mb-0"><a href="{{url('/')}}/news/create" class="btn   btn-success">News</a></h3> --}}

                           
                            
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">


               

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        
                                        <div class="table-responsive">
                                            <table class="table zero-configuration mytable">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Appointment date</th>
                                                        <th>Order Id</th>
                                                        <th>Slot</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                              
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


@endsection

@section('scripts')


<script>
    
$(document).ready(function() {
   datatablefetch();
});

function datatablefetch()
{
   
        var dataTable = $('.mytable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax:{
                url: "{{url('/')}}/admin/transaction"
            },
            columns: [
               
                {
                    data:'appoint_id',
                    name:'appoint_id'
                },
                {
                    data:'appointment_date',
                    name:'appointment_date'
                },
             
                {
                    data:'order_id',
                    name:'order_id'
                },
                {
                    data:'slot',
                    name:'slot'
                },
                {
                    data:'slot_status',
                    name:'slot_status'
                },
             
              
                 {
                    data:'created_date',
                    name:'created_date'
                },
                
                
               { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/news/'+full.appoint_id+'/edit" style="margin: 5px;">Edit</a><button class="btn btn-danger" onclick="deletetr('+full.id+')" style="margin: 5px;">Delete</button>';
               
              }
            },
       
    
    
               
            ]
        });
}
function deletetr(id)
{
     $.ajax({
            type: "DELETE",
            url: "{{url('/')}}/news/"+id,
             data: {
            "_token": "{{ csrf_token() }}",
        },
            
           success: function(data)
           {
            $('.mytable').DataTable().destroy();
datatablefetch();
             swal("Success!", "Your request is successfully deleted !!", "success");
           }
         });
}
</script>



        @endsection