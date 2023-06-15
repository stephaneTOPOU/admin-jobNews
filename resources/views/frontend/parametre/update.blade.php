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
                            <strong>Modifier</strong> contact 
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
                            <form action="{{ route('parametre.update', $parametres->id) }}" method="post" class="">
                                @csrf
                                @method('PUT')
                                <div class="form-group col-md-6"><label for="description" class=" form-control-label"><strong>Description</strong></label><textarea name="description" id="description" rows="4" placeholder="Saisir..." class="form-control" required value="">{{ old('description')??$parametres->description }}</textarea></div>
                                <div class="form-group col-md-3"><label for="email" class=" form-control-label"><strong>Email</strong></label><input type="email" id="email" name="email" placeholder="Entrer une adresse email.." class="form-control" required value="{{ old('email')??$parametres->email }}"></div>
                                <div class="form-group col-md-3"><label for="text-input" class=" form-control-label"><strong>Téléphone</strong></label><input type="text" id="text-input" name="numero" placeholder="Entrer un numéro.." class="form-control" required value="{{ old('numero')??$parametres->numero }}"></div>
                                <div class="form-group col-md-3"><label for="text-input" class=" form-control-label"><strong>Adresse</strong></label><input type="text" id="text-input" name="adresse" placeholder="Entrer une adresse.." class="form-control" required value="{{ old('adresse')??$parametres->adresse }}"></div>                          
                                <div class="form-group col-md-3"><label for="text-input" class=" form-control-label"><strong>Géolocalisation</strong></label><input type="text" id="text-input" name="localisation" placeholder="Entrer un lien.." class="form-control" required value="{{ old('localisation')??$parametres->localisation }}"></div>                         
                                
                        </div>
                        <div class="card-footer">
                            <button
                                type="submit"
                                class="btn btn-success btn-sm"
                            >
                                <i class="fa fa-dot-circle-o"></i>
                                Modifier
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