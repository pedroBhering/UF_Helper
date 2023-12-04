<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="main.html"><i class="icon-speedometer"></i> Dashboard <span
                            class="badge badge-primary">NEW</span></a>
                </li>

                <li class="nav-title">
                    UI Elements
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="components/buttons.html"><i class="icon-puzzle"></i> Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/social-buttons.html"><i class="icon-puzzle"></i> Social
                                Buttons</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <form method="GET" action="{{ route('deptos.index') }}">
                      @csrf
                      <button type="submit">Deptos</button>
                    </form>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="views/pages/login.html" target="_top"><i class="icon-star"></i>
                                Login</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit">Logout</button>
                            </form>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="views/pages/register.html" target="_top"><i
                                    class="icon-star"></i> Register</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
