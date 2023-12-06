<div class="app-body">
    <div class="sidebar d-flex py-2" style="background: linear-gradient(to right, rgb(93, 0, 0), rgb(193, 0, 0));">
        <nav class="sidebar-nav">
            <ul class="nav d-flex">
                <li class="nav-item">
                    <a href="{{ route('deptos.index') }}" class="btn btn-dark mr-2 mt-2"><i class="fas fa-home"></i>
                        <button type="submit">Home</button>
                    </a>
                </li>

                <li class="nav-item">
                    <form action="{{ route('disciplinas.index') }}" method="GET">
                        <button class="btn btn-dark mr-2 mt-1" type="submit">Buscar</button>
                        <input type="text" class="mr-2 mt-1" name="search" placeholder="Buscar disciplinas"
                            style="border-radius: 10px;">
                    </form>
                </li>

                <li class="nav-item">
                    <a href="https://www2.ufjf.br/biblioteca/" class="btn btn-dark mr-2 mt-2"><i
                            class="fas fa-book"></i>
                        <button type="submit">Biblioteca</button>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="https://www2.ufjf.br/ufjf/" class="btn btn-dark mr-2 mt-2"><i class="fas fa-book"></i>
                        <button type="submit">UFJF</button>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="https://siga.ufjf.br" class="btn btn-dark mr-2 mt-2"><i class="fas fa-file"></i>
                        <button type="submit">SIGA</button>
                    </a>
                </li>

                <li class="nav-item">
                    <form method="GET" action="{{ route('deptos.index') }}">
                        @csrf
                        <button class="btn btn-dark mr-2 mt-2" type="submit">Eventos</button>
                    </form>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-dark mr-2 mt-2" type="submit"><i class="fas fa-cancel"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
</div>
