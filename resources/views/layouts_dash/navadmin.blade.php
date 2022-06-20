<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="dropdown sidebar-profile-dropdown">
        <a class="dropdown-toggle d-flex align-items-center justify-content-between" href="#" data-toggle="dropdown"
            id="profileDropdown1">
            <div>
                @php
                $ts=auth()->user()->statut;
                if($ts==1){
                echo '<div class="nav-profile-name">Admin</div>';
                }
                elseif($ts==0)
                {
                echo '<div class="nav-profile-name">Commercial '. auth()->user()->name.'</div>';
                }

                @endphp
            </div>
        </a>

    </div>
    <ul class="nav">
        <li class="nav-item" id="dashboard">
            <div class="sidebar-title"></div>
            <a class="nav-link" href="{{ route('boss') }}">
                <i class="mdi mdi-cards-variant menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <?php
        $ts = auth()->user()->statut;
        if ($ts == 1) {
            echo '<li class="nav-item" id="NewUser"><div class="sidebar-title" > </div> <a class="nav-link"  data-toggle="collapse"  href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"> 
        <i class="mdi mdi-account-circle-outline menu-icon"></i><span class="menu-title">Utilisateur</span>
            <i class="menu-arrow"></i></a><div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu" >
            <li class="nav-item" >
            <a class = "nav-link" href="{{' . route('register') . '}}"> Ajout d \'Utilisateurs</a> </li ></ul> </div >
            </li>';
        }
        ?>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <i class="mdi mdi-settings-outline menu-icon"></i>
                <span class="menu-title">Paramètres</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '#' }}">Statut</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- @else --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-file-word-box menu-icon"></i>
                <span class="menu-title">HOTELS</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><span class="fa fa-plus"></span>
                        <a class="nav-link" href="{{ route('newhotelbyadmin') }}">Nouveau </a>
                    </li>
                    <li class="nav-item"><span class="fa fa-book"></span>
                        <a class="nav-link" href="{{ '#' }}">Liste </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Extractions</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- @endif --}}
    </ul>

</nav>
<!-- <script src="{{asset ('assets/js/jquery-3.2.1.min.js') }}">