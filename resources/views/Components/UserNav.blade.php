<div class=" bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand text-light" href="#">Hello {{ $userName }}</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
                    <div class="d-flex" role="search">
                        <a class="btn btn-outline-danger" href="{{ url('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

    </div>

</div>
