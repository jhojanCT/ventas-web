<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.', 'Sistema de Ventas') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">Artículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sales.index') }}">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('detail-sales.index') }}">Detalles Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('entries.index') }}">Entradas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('detailEntries.index') }}">Detalles Entradas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports.sales.index') }}">  Reporte Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports.entries.index') }}">  Reporte Entradas</a>
                </li>


            </ul>

            
            <ul class="navbar-nav ml-auto">

            </ul>
        </div>
    </div>
</nav>
