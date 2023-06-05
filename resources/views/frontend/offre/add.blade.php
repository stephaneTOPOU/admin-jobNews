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
                            <div class="card-body card-block">
                                <form action="" method="post" class="">
                                    <div class="form-group col-md-4" >
                                        <label for="selectSm" class="form-control-label"><strong>Catégories</strong></label>
                                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                            <option value="0">Choisir la catégorie</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                            <option value="4">Option #4</option>
                                            <option value="5">Option #5</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Entreprise</strong></label><input type="text" id="text-input" name="text-input" placeholder="Enter le nom de l'entreprise.." class="form-control"></div>
                                    <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Titre</strong></label><input type="text" id="text-input" name="text-input" placeholder="Enter le titre de l'offre.." class="form-control"></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Description</strong></label><textarea name="textarea-input" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control"></textarea></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Mission</strong></label><textarea name="textarea-input" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control"></textarea></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Profil</strong></label><textarea name="textarea-input" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control"></textarea></div>
                                    <div class="form-group col-md-4"><label for="textarea-input" class=" form-control-label"><strong>Dossier</strong></label><textarea name="textarea-input" id="textarea-input" rows="4" placeholder="Saisir..." class="form-control"></textarea></div>
                                    <div class="form-group col-md-4"><label for="text-input" class=" form-control-label"><strong>Lien</strong></label><input type="text" id="text-input" name="text-input" placeholder="Entrer le lien où postuler.." class="form-control"></div>
                                    <div class="form-group col-md-4"><label for="city" class=" form-control-label"><strong>Lieu</strong></label><input type="text" id="city" placeholder="Entrer le lieu" class="form-control"></div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label"><strong>Date limite</strong></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input class="form-control">
                                        </div>
                                        <small class="form-text text-muted">ex. JJ/MM/AAAA</small>
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
                                class="btn btn-danger btn-sm"
                            >
                                <i class="fa fa-ban"></i> Annuler
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- .content -->
</div>
