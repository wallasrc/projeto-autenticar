@if ($current != 'login')
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a @if ($current == 'inicio') class="nav-link active" @else class="nav-link" @endif
                            aria-current="page" href="/index">Início</a>
                    </li>
                    <li class="nav-item">
                        <a @if ($current == 'quartos') class="nav-link active" @else class="nav-link" @endif
                            aria-current="page" href="/quartos-disponiveis">Quartos disponíveis</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link" aria-current="page" href="{{ route('logout') }}">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endif
