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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
    
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <strong class="card-title">Bannière</strong>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('banner-search.create') }}" type="button" class="btn btn-block btn-success">Ajouter</a>
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
                                    @foreach ($bannerSearches as $bannerSearch)
                                    <tr>
                                        <td>{{ $bannerSearch->id }}</td>
                                        <td><img src="https://jobsactu.com/assets/img/banner/{{ $bannerSearch->image }}" alt="" width="60"></td>
                                        <td>
                                            <a href="{{ route('banner-search.edit', $bannerSearch->id) }}" type="button" class="btn btn-primary" style="color : white"><i class="fa fa-edit"></i>&nbsp; Modifier</a>
                                            {{-- <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>&nbsp; Supprimer</button>
                                            </form> --}}

                                            <button class="btn btn-danger" onclick="deleteData({{ $bannerSearch->id }})">
                                            <i class="fa fa-trash-o"></i>&nbsp; Supprimer</button>
                                            {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
                                            {{-- <script>

                                                function deleteData(id) {
                                                    Swal.fire({
                                                    title: 'Etes-vous sûr?',
                                                    text: "Vous ne pourrez pas revenir en arrière!",
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Oui, supprimez!'
                                                    }).then((result) => {
                                                    if (result.isConfirmed) {

                                                        let url = "{{url('banner')}}/" + id
                                                        //window.location.reload();

                                                        console.log(url);
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: url,
                                                            data: {
                                                            _method: 'DELETE',
                                                            _token: "{{ csrf_token() }}",
                                                            banner: id                                                               
                                                            },

                                                            success: function () {
                                                            Swal.fire(
                                                                'Supprimé!',
                                                                'La présentation a été supprimée.',
                                                                'success'
                                                            )
                                                            let table = $('#bootstrap-data-table-export');
                                                            table.dataTable({ ajax: "data.json"}).ajax.reload();
                                                            
                                                        },

                                                            error: function(){
                                                                alert('error');
                                                            },
                                                        })
                                                    }

                                                });

                                                }
                                            </script> --}}

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
                                                                url: "{{url('banner-search')}}/" + id,
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
