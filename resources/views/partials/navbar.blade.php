<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img alt="Titulo" src="{{ asset('images/titulo.png') }}" />
        </a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarEnferData"
                aria-controls="navbarEnferData"
                aria-expanded="false"                 
                aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarEnferData">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="#beneficios">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#areas">Área de Gestión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>

            <a href="{{ url('/dashboard') }}" class="btn btn-info ms-lg-3">
                Probar Demo
            </a>

            <a class="btn btn-outline-success ms-3" 
               data-bs-toggle="modal"
               data-bs-target="#demoModal">
                Solicitar Alta
            </a>
        </div>
    </div>
</nav>