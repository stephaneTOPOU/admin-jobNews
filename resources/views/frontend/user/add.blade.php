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
                            <strong>Ajouter</strong> un utilisateur 
                        </div>
                        <div class="card-body card-block">
                            <div class="card-body card-block">
                                <form action="" method="post" class="">
                                    <div class="form-group col-md-6"><label for="text-input" class=" form-control-label"><strong>Nom</strong></label><input type="text" id="text-input" name="text-input" placeholder="Entrer votre nom.." class="form-control"></div>
                                    <div class="form-group col-md-6"><label for="text-input" class=" form-control-label"><strong>Prénom</strong></label><input type="text" id="text-input" name="text-input" placeholder="Entrer votre prénom.." class="form-control"></div>
                                    <div class="form-group col-md-6"><label for="email-input" class=" form-control-label"><strong>Adresse Email</strong></label><input type="email" id="email-input" name="email-input" placeholder="Enter une adresse email.." class="form-control" required=""></div>
                                    <div class="form-group col-md-6"><label for="password-input" class=" form-control-label"><strong>Mot de passe</strong></label><input type="password" id="password-input" name="password-input" placeholder="Enter un mot de passe.." class="form-control"></div>                          
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
