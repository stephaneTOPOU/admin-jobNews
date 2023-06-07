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
                            <form action="{{ route('offre.update',$offres->id) }}" method="post" class="" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-4" >
                                        <label for="selectSm" class="form-control-label"><strong>Catégories</strong></label>
                                        <select name="categorie_id" id="SelectLm" class="form-control-sm form-control">
                                            <option value="0">Choisir la catégorie</option>
                                            @foreach ($categorie as $categories )
                                            <option value="{{ $categories->id }}" {{ $offres->categorie_id == $categories->id ? 'selected' : '' }}>{{ $categories->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Entreprise</strong></label><input type="text" id="text-input" name="entreprise" placeholder="Enter le nom de l'entreprise.." class="form-control" value="{{ old('entreprise')??$offres->entreprise }}" required></div>
                                    <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Titre</strong></label><input type="text" id="text-input" name="titre" placeholder="Enter le titre de l'offre.." class="form-control" value="{{ old('titre')??$offres->titre }}" required></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Description</strong></label><textarea name="description" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control" value="">{{ old('description')??$offres->description }}</textarea></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Mission</strong></label><textarea name="mission" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control" value="">{{ old('mission')??$offres->mission }}</textarea></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Profil</strong></label><textarea name="profil" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control" value="">{{ old('profil')??$offres->profil }}</textarea></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Dossier</strong></label><textarea name="dossier" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control" value="">{{ old('dossier')??$offres->dossier }}</textarea></div>
                                    <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Lien</strong></label><input type="text" id="text-input" name="lien" placeholder="Entrer le lien où postuler.." class="form-control" value="{{ old('lien')??$offres->lien }}"></div>
                                    <div class="form-group col-md-4"><label for="city" class=" form-control-label"><strong>Lieu</strong></label><input type="text" id="city" name="lieu" placeholder="Entrer le lieu" class="form-control" value="{{ old('lieu')??$offres->lieu }}"></div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><strong>Date limite</strong></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input class="form-control" value="{{ old('date_lim')??$offres->date_lim }}" name="date_limite">
                                        </div>
                                        <small class="form-text text-muted">ex. JJ/MM/AAAA</small>
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
        </div>
        <!-- .animated -->
    </div>
    <!-- .content -->
</div>
