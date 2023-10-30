@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@include('frontend.header.header9')
@include('frontend.header.header10')
@include('frontend.side.side')

<div id="right-panel" class="right-panel">

    @include('frontend.head.head')
    @include('frontend.head.head2')
        
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <strong class="card-title">Slider2</strong>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('slider2.create')}}" type="button" class="btn btn-block btn-success">Ajouter</a>
                                </div>
                            </div>    
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slider as $slider2 )
                                    <tr>
                                        <td>{{ $slider2->id }}</td>
                                        <td><img src="https://jobsactu.com/assets/img/slider/{{ $slider2->image }}" alt="" width="60"></td>
                                        <td><a href="{{ route('slider2.edit', $slider2->id)}}" type="button" class="btn btn-primary" style="color: white"><i class="fa fa-edit"></i>&nbsp; Modifier</a>
                                            <button type="button" class="btn btn-danger" onclick="deleteData({{ $slider2->id }})"><i class="fa fa-trash-o"></i>&nbsp; Supprimer</button>
                                        
                                            <script type="text/javascript">
                                                function deleteData(id) {
                                                    swal.fire({
                                                        title: "Delete?",
                                                        icon: 'question',
                                                        text: "Please ensure and then confirm!",
                                                        type: "warning",
                                                        showCancelButton: !0,
                                                        confirmButtonText: "Yes, delete it!",
                                                        cancelButtonText: "No, cancel!",
                                                        reverseButtons: !0
                                                    }).then(function (e) {
                                            
                                                        if (e.value === true) {
                                                            
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: "{{url('slider2')}}/" + id,
                                                                data: {
                                                                    _token: "{{ csrf_token() }}",
                                                                    _method: 'delete'
                                                                },
                                                                dataType: 'JSON',
                                                                success: function (results) {
                                                                    if (results.success === true) {
                                                                        swal.fire("Done!", results.message, "success");
                                                                        // refresh page after 2 seconds
                                                                        setTimeout(function(){
                                                                            location.reload();
                                                                        },2000);
                                                                    } else {
                                                                        swal.fire("Error!", results.message, "error");
                                                                    }
                                                                }
                                                            });
                                            
                                                        } else {
                                                            e.dismiss;
                                                        }
                                            
                                                    }, function (dismiss) {
                                                        return false;
                                                    })
                                                }
                                            </script>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>


</div>

@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="vendors/jszip/dist/jszip.min.js"></script>
<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
@include('frontend.footer.footer12')
