<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('dash.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            {{-- Slider Nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Sliders
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('sliders.create') }}">Add Slider</a>
                    <a class="nav-link" href="{{ route('sliders.index') }}">Sliders List</a>
                </nav>
            </div>


            {{-- Service nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#service"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Services
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="service" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('services.create') }}">Add Service</a>
                    <a class="nav-link" href="{{ route('services.index') }}">Services List</a>
                </nav>
            </div>



            {{-- Product nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#product"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Products
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('products.create') }}">Add product</a>
                    <a class="nav-link" href="{{ route('products.index') }}">Products List</a>
                </nav>
            </div>


            {{-- Communication nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#communication"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Communication
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="communication" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('communications.create') }}">Add Communication Member</a>
                    <a class="nav-link" href="{{ route('communications.index') }}">Communication Member List</a>
                </nav>
            </div>

            {{-- Notice nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#notice"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Notice
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="notice" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('notices.create') }}">Add Notice</a>
                    <a class="nav-link" href="{{ route('notices.index') }}">Notice Lists</a>
                </nav>
            </div>

            {{-- Gallery nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#gallery"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                Gallery
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="gallery" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('gallery-photos.create') }}">Add Gallery</a>
                    <a class="nav-link" href="{{ route('gallery-photos.index') }}">Add Gallery</a>
                </nav>
            </div>



            {{-- About us nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#about"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                About
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="about" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('about.create') }}"> About Us</a>
                </nav>
            </div>


            {{-- Settings nav --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Setting"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                Settings
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Setting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('settings.general') }}">General Settings</a>
                </nav>
            </div>



        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ ucfirst(Auth::user()->name) }}
    </div>
</nav>
