<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('main.index') }}">
            <strong>Mening shaxsiy blogim</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('main.index') }}">Asosiy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.index') }}">Muallif haqida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">Kontaklar</a>
                </li>
            </ul>
            @auth()
                <a class="btn btn-outline-success" href="{{ route('personal.main.index') }}">Profil</a>
            @endauth
            @guest()
                <a class="btn btn-outline-success" href="{{ route('personal.main.index') }}">Tizimga kirish</a>
            @endguest
        </div>
    </div>
</nav>
