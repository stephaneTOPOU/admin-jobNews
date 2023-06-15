@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')
@include('frontend.header.header8')
@include('frontend.header.header9')
@include('frontend.header.header10')
@include('frontend.side.side')

<div id="right-panel" class="right-panel">
    @include('frontend.head.head')
    @include('frontend.head.head2')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Ajouter</strong> images 
                        </div>
                        <div class="card-body card-block">
                            @if (Session::has('success'))
                            <div class="col-sm-12">
                                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Success</span> {{ Session::get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            @endif
                            <form
                                action="{{ route('sliderSearch1.store') }}"                             
                                method="post"
                                enctype="multipart/form-data"
                                class="form-horizontal"
                            >
                            @csrf
                                {{-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label
                                            for="file-multiple-input"
                                            class="form-control-label"
                                            >Choisir image</label
                                        >
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input
                                            type="file"
                                            id="file-multiple-input"
                                            name="image"
                                            multiple="images"
                                            class="form-control-file"
                                        />
                                    </div>
                                </div> --}}

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label
                                            for="file-input"
                                            class="form-control-label"
                                            >Sélectionner une image</label
                                        >
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input
                                            type="file"
                                            id="file-input"
                                            name="image"
                                            class="form-control-file"
                                        />
                                    </div>
                                </div>
                                
                        </div> 
                        <div class="card-footer">
                            <button
                                type="submit"
                                class="btn btn-success btn-sm"
                            >
                                <i class="fa fa-dot-circle-o"></i>
                                Ajouter
                            </button>
                            <button
                                type="reset"
                                onclick="windows.location='{{ URL::previous() }}'"
                                class="btn btn-danger btn-sm"
                            >
                                <i class="fa fa-ban"></i> Annuler
                            </button>
                        </div>
                    </form>                       
                    </div>
                </div>

            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- .content -->
</div>
@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
<script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer12')

