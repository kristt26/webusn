        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>/assets/index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url() ?>/assets/img/logo/logo2.png">
                </div>
                <div class="sidebar-brand-text mx-3">USN Papua</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>/assets/index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item" ng-class="{'active': collapse=='Setting'}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setView" aria-expanded="true" aria-controls="setView">
                        <i class="fab fa-fw fa-wpforms"></i>
                    <span>Set View</span>
                </a>
                <div id="setView" class="collapse" ng-class="{'show': collapse=='Setting'}" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" ng-class="{'active': title=='Slider'}" href="<?= base_url() ?>/admin/slide">Slide</a>
                        <a class="collapse-item" href="<?= base_url() ?>/assets/form_advanceds.html">Form Advanceds</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>