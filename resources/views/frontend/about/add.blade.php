@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')
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
                            <strong>Ajouter</strong> contact 
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
                            <form action="{{ route('about.store') }}" method="post" class="">
                                @csrf
                                <div class="form-group col-md-6"><label for="apropos" class=" form-control-label"><strong>Qui sommes-nous?</strong></label><textarea name="apropos" id="apropos" rows="4" placeholder="Saisir..." class="form-control" required></textarea></div>
                                <div class="form-group col-md-6"><label for="description" class=" form-control-label"><strong>Description</strong></label><textarea name="description" id="description" rows="4" placeholder="Saisir..." class="form-control" required></textarea></div>
                                <div class="form-group col-md-4"><label for="mission1" class=" form-control-label"><strong>Mission1</strong></label><textarea name="mission1" id="mission1" rows="4" placeholder="Saisir..." class="form-control" required></textarea></div>
                                <div class="form-group col-md-4"><label for="mission2" class=" form-control-label"><strong>Mission2</strong></label><textarea name="mission2" id="mission2" rows="4" placeholder="Saisir..." class="form-control" required></textarea></div>
                                <div class="form-group col-md-4"><label for="mission3" class=" form-control-label"><strong>Mission3</strong></label><textarea name="mission3" id="mission3" rows="4" placeholder="Saisir..." class="form-control" required></textarea></div>
                                
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
                                class="btn btn-danger btn-sm"
                                onclick="windows.location='{{ URL::previous() }}'"
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