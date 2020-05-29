<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">

            <li>
                <a href="/" class=" waves-effect">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>

            <li>
                <a href="{{ route('parcours.index') }}" class=" waves-effect">
                    <i class="fas fa-chart-line"></i>
                    <span>Parcours</span>
                </a>
            </li>

            <li>
                <a href="{{ route('beneficiaires.index') }}" class=" waves-effect">
                    <i class="fas fa-users"></i>
                    <span>Bénéficiaire</span>
                </a>
            </li>

            <li>
                <a href="{{ route('conseillers.index') }}" class=" waves-effect">
                    <i class="fas fa-user-tie"></i>
                    <span>Conseiller</span>
                </a>
            </li>

            <li>
                <a href="{{ route('referents.index') }}" class=" waves-effect">
                    <i class="fas fa-handshake"></i>
                    <span>Référent</span>
                </a>
            </li>

            <li>
                <a href="{{ route('prescripteurs.index') }}" class=" waves-effect">
                    <i class="fas fa-briefcase"></i>
                    <span>Prescripteur</span>
                </a>
            </li>

            <li>
                <a href="{{ route('projets.index') }}" class=" waves-effect">
                    <i class="fas fa-tasks"></i>
                    <span>Projet</span>
                </a>
            </li>

            <li>
                <a href="{{ route('prestations.index') }}" class=" waves-effect">
                    <i class="fas fa-tasks"></i>
                    <span>Prestation</span>
                </a>
            </li>

            <li>
                <a href="#" class=" waves-effect">
                    <i class="fas fa-cogs"></i>
                    <span>Configuration</span>
                </a>
            </li>


        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->
