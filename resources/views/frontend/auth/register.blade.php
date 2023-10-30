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
                    <a href="index.html">
                        <img class="align-content" src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" name="name">
                        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                        </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Enrégistrer</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Vous avez déjà un compte ? <a href="{{ route('login') }}"> Connexion</a></p>
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
