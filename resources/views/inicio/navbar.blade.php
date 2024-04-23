<nav class="navbar navbar-expand-lg purple-navbar">
    <div class="container-fluid">
        <a class="navbar-brand techstore" href="{{ route('inicio') }}">TechStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('disciplinas.index') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loja')}}">Loja</a>
                </li>
            </ul>
            <div class="metal-coin">
                <span id="metal-coin-count">100</span>  💰
            </div>
        </div>
    </div>
</nav>

