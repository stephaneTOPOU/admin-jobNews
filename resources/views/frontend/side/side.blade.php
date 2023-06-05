<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('images/logo2.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Bannières & Sliders</h3><!-- /.menu-title -->
                
                <li>
                    <a href="{{ route('banner.index') }}"> <i class="menu-icon fa fa-picture-o"></i>Bannière </a>
                </li>
                <li>
                    <a href="{{ route('slider1.index') }}"> <i class="menu-icon fa fa-picture-o"></i>Slider1 </a>
                </li>
                <li>
                    <a href="{{ route('slider2.index')}}"> <i class="menu-icon fa fa-picture-o"></i>Slider2 </a>
                </li>
                <h3 class="menu-title">Offres</h3>
                <li>
                    <a href="{{ route('categorie.index')}}"> <i class="menu-icon ti-view-list-alt"></i>Catégories </a>
                </li>
                <li>
                    <a href="{{ route('offre.index')}}"> <i class="menu-icon fa fa-folder"></i>Offres </a>
                </li>
                <h3 class="menu-title">Paramètre</h3>
                <li>
                    <a href="{{ route('user.index')}}"> <i class="menu-icon fa fa-users"></i>Utilisateurs </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>