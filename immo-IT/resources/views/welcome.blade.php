<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immo-IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylej4.css">
</head>

<body id="accueil" class="bg-dark">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-secondary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Immo-IT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h5><a class="nav-link active text-light" aria-current="page" href="#accueil">Accueil</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5><a class="nav-link active text-light" aria-current="page" href="#biens">Nos biens</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5><a class="nav-link active text-light" aria-current="page" href="#contact">Contactez Nous</a>
                        </h5>
                    </li>
                </ul>
                <!-- Bouton Tableau de bord -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                       <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Tableau de bord</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container-fluid">

        <!-- Section Liste des biens immobiliers -->
        <div id="biens" class="mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success text-center" role="alert">
                        <h3>Liste des biens immobiliers : </h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <!-- Cards des biens immobiliers -->
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/Maison 1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Maison 1</h5>
                                    <p class="card-text">Résidence à Antibes</p>
                                    <a href="#contact" class="btn btn-primary">Contacter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/Maison 2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Maison 2</h5>
                                    <p class="card-text">Résidence en Dordogne</p>
                                    <a href="#contact" class="btn btn-primary">Contacter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/Maison 3.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Maison 3</h5>
                                    <p class="card-text">Résidence sur la cote d'Azur</p>
                                    <a href="#contact" class="btn btn-primary">Contacter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/Maison 4.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Maison 4</h5>
                                    <p class="card-text">Résidence près de Paris</p>
                                    <a href="#contact" class="btn btn-primary">Contacter</a>
                                </div>
                            </div>
                        </div>
                        <!-- Fin des Cards des biens immobiliers -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Carrousel -->
        <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/chambre1.jpeg') }}" class="d-block w-100" style="max-height: 400px;"
                        alt="chambre1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chambre luxieuse</h5>
                        <p>Un lieu ou tout etre reve de dormir et d'y passer ses nuits.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/cuisine1.jpeg') }}" class="d-block w-100" style="max-height: 400px;"
                        alt="cuisine1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cuisine spacieuse et familiale</h5>
                        <p>Une piece pour passer des moments entre amis ou en famille autour d'un bon repas.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/douche1.jpg') }}" class="d-block w-100" style="max-height: 400px;"
                        alt="douche1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Douche moderne</h5>
                        <p>Chanter et danser a haute voix dans votre douche ne sera plus qu'une realité. Exprimez vos
                            talents cachés!.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Formulaire de contact -->
        <div id="contact" class="container mb-5">
            <h1 style="color:white">Contactez-nous</h1>
            <form action="{{ url('/contact') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="house_name" class="form-label" style="color:white">Nom de la maison</label>
                    <input type="text" class="form-control" id="house_name" name="house_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="color:white">Adresse mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label" style="color:white">Prénom</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label" style="color:white">Nom</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label" style="color:white">Sujet</label>
                    <select class="form-select" id="subject" name="subject" required>
                        <option value="Demande de rendez-vous">Demande de rendez-vous</option>
                        <option value="Demande d'achat">Demande d'achat</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label" style="color:white">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
