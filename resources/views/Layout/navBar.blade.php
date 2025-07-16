   <!-- Navigation -->
    <nav class="navbar">
        <a href="/" class="logo">OptCare</a>
        <ul class="nav-links">
            <li><a href="/#home" class="active">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#quiz">Predict</a></li>
            <li><a href="/#contact">Contact</a></li>
        </ul>

        <div class="auth-links">
            @auth
                <div class="user-menu">
                    <span class="user-name">{{ Auth::user()->name }}</span>
                    <div class="user-dropdown">
                        <a href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('auth.login') }}" class="auth-btn-nav">Sign In</a>
                <a href="{{ route('auth.register') }}" class="auth-btn-nav register">Sign Up</a>
            @endauth
        </div>

        <div class="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <br>
