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
                            <strong>Modifier</strong> un utilisateur 
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
                            <form action="{{ route('user.update', $users->id) }}" method="post" class="">
                                @csrf
                                @method('PUT')
                                <div class="form-group col-md-6"><label for="name" class=" form-control-label"><strong>Nom</strong></label><input type="text" id="name" name="name" placeholder="Entrer votre nom.." class="form-control" required value="{{ old('name')??$users->name }}"></div>
                                <div class="form-group col-md-6"><label for="prenom" class=" form-control-label"><strong>Prénom</strong></label><input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom.." class="form-control" required value="{{ old('prenom')??$users->prenom }}"></div>
                                <div class="form-group col-md-6"><label for="email" class=" form-control-label"><strong>Adresse Email</strong></label><input type="email" id="email" name="email" placeholder="Enter une adresse email.." class="form-control" required value="{{ old('email')??$users->email }}"></div>
                                <div class="form-group col-md-6"><label for="password" class=" form-control-label"><strong>Mot de passe</strong></label><input type="password" id="password" name="password" placeholder="Enter un mot de passe.." class="form-control" required value="{{ old('password')??$users->password }}"></div>                          
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