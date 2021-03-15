<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="<?= base_url() ?>"> <img src="<?= base_url('img/LOGO UIN 1.png') ?>" alt="" width="60" height="60">PUSAT PENGEMBANGAN BAHASA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('layanan') ?>">pelatihan & tes</a>
                        <a class="dropdown-item" href="<?= base_url('terjemah') ?>">terjemah</a>
                    </div>
                </li>

                <li class="dropdown-divider"></li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('download') ?>">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('faq') ?>">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="material-icons">
                            search
                        </span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>