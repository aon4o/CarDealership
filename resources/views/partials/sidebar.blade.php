<nav class="navbar bg-dark navbar-dark border">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse show" id="collapsibleNavbar">
        <ul class="navbar-nav navbar-dark">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('brands.index') }}">Brands</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('models.index') }}">Models</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('vehicles.index') }}">Vehicles</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Rented Cars</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Customers</a></li>
        </ul>
    </div>
</nav>
