@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')
@include('frontend.header.header9')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
                            <strong>Ajouter</strong> offre 
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
                            <form action="{{ route('offre.store') }}" method="post" class="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-4" >
                                    <label for="selectSm" class="form-control-label"><strong>Catégories</strong></label>
                                    <select name="categorie_id" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Choisir la catégorie</option>
                                        @foreach ($categorie as $categories )
                                            <option value="{{ $categories->id }}">{{ $categories->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4"><label for="entreprise" class=" form-control-label"><strong>Entreprise</strong></label><input type="text" id="entreprise" name="entreprise" placeholder="Enter le nom de l'entreprise.." class="form-control" required></div>
                                <div class="form-group col-md-4"><label for="titre" class=" form-control-label"><strong>Titre</strong></label><input type="text" id="titre" name="titre" placeholder="Enter le titre de l'offre.." class="form-control" required></div>
                                <div class="form-group col-md-6"><label for="job-description"><strong>Description du poste</strong></label><textarea id="summernote-1" name="description"></textarea></div>
                                <div class="form-group col-md-6"><label for="job-description"><strong>Mission</strong></label><textarea id="summernote-2" name="mission"></textarea></div>
                                <div class="form-group col-md-6"><label for="job-description"><strong>Profil</strong></label><textarea id="summernote-3" name="profil"></textarea></div>
                                <div class="form-group col-md-6"><label for="job-description"><strong>Dossier</strong></label><textarea id="summernote-4" name="dossier"></textarea></div>
                                <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Lien</strong></label><input type="text" id="text-input" name="lien" placeholder="Entrer le lien où postuler.." class="form-control"></div>
                                <div class="form-group col-md-4"><label for="city" class=" form-control-label"><strong>Lieu</strong></label><input type="text" id="city" name="lieu" placeholder="Entrer le lieu" class="form-control"></div>
                                <div class="form-group col-md-2">
                                    <label class="form-control-label"><strong>Date limite</strong></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" name="date_limite">
                                    </div>
                                    <small class="form-text text-muted">ex. JJ/MM/AAAA</small>
                                </div>
                                <div class="form-group col-md-3"><label class="switch switch-3d switch-success mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label></div>
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
@include('frontend.footer.footer13')
@include('frontend.footer.footer12')