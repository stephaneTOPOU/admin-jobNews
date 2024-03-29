<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-JobsActu</title>
    <meta name="description" content="La plateforme des opportunités du TOGO (offres d'emploi togo, offres de stages)">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    @include("frontend.header.header3")
    @include("frontend.header.header4")
    @include("frontend.header.header5")
    @include("frontend.header.header6")
    @include("frontend.header.header7")
    @include("frontend.header.header9")

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ route('home') }}">
                        <img class="align-content" src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="login-form">
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
                    <form method="POST" action="{{ route('authenticate') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                                
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Connexion</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Vous n’avez pas de compte ? <a href="{{ route('register.index') }}"> Inscrivez-vous ici</a></p>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.footer.footer1')
    @include('frontend.footer.footer2')
    @include('frontend.footer.footer3')
    @include('frontend.footer.footer4')


</body>

</html>
