<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
    
    <!-- CSS de Bootstrap 5 (URL COMPLETA Y CORREGIDA) -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-body-tertiary"> 
    <div class="container-fluid px-4"> 
        <a class="navbar-brand" href="#">Navbar</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                <li class="nav-item"> 
                    <a class="nav-link active" aria-current="page" href="#">Home</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('productos') }}">productos</a> </li> 
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a> 
                        <ul class="dropdown-menu"> 
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li> 
                                <li><a class="dropdown-item" href="#">Another action</a>
                            </li> 
                            <li>
                                <hr class="dropdown-divider"></li> <li><a class="dropdown-item" href="#">Something else here</a></li> 
                            </ul> 
                        </li> 
                    </ul> 
                    <!-- Buscador de la barra --> 
                     <form class="d-flex" role="search"> 
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
                        <button class="btn btn-outline-success" type="submit">Search</button> 
                    </form>
                 </div> 
                </div> 
            </nav> 
            <!-- 2. Contenido principal (Sección de productos) --> 
             <main class="container py-5">

    <!-- Destinos destacados -->
    <section class="mb-5">
        <h2 class="h3 fw-bold mb-4">
            <i class="fa-solid fa-star text-warning me-2"></i> Destinos destacados
        </h2>

        <div class="row g-4">

            <div class="col-12 col-sm-6 col-lg-3">
                <article class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="https://picsum.photos/seed/destino1/400/250"
                             class="card-img-top" alt="Destino 1">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Playa</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5 fw-semibold">Cartagena</h3>
                        <p class="card-text text-secondary small flex-grow-1">
                            Ciudad amurallada con playas cristalinas.
                        </p>
                        <a href="#" class="card-link text-decoration-none fw-medium">
                            Ver más <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <article class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="https://picsum.photos/seed/destino2/400/250"
                             class="card-img-top" alt="Destino 2">
                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Montaña</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5 fw-semibold">Medellín</h3>
                        <p class="card-text text-secondary small flex-grow-1">
                            La ciudad de la eterna primavera.
                        </p>
                        <a href="#" class="card-link text-decoration-none fw-medium">
                            Ver más <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <article class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="https://picsum.photos/seed/destino3/400/250"
                             class="card-img-top" alt="Destino 3">
                        <span class="badge bg-info text-dark position-absolute top-0 end-0 m-2">Ciudad</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5 fw-semibold">París</h3>
                        <p class="card-text text-secondary small flex-grow-1">
                            La ciudad de la luz y el amor.
                        </p>
                        <a href="#" class="card-link text-decoration-none fw-medium">
                            Ver más <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <article class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="https://picsum.photos/seed/destino4/400/250"
                             class="card-img-top" alt="Destino 4">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Aventura</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title h5 fw-semibold">Cusco</h3>
                        <p class="card-text text-secondary small flex-grow-1">
                            Puerta de entrada a Machu Picchu.
                        </p>
                        <a href="#" class="card-link text-decoration-none fw-medium">
                            Ver más <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>

        </div>
    </section>

    <!-- Sobre nosotros -->
    <section class="mb-5">
        <h2 class="h3 fw-bold mb-3">
            <i class="fa-solid fa-circle-info text-primary me-2"></i> Sobre nosotros
        </h2>
        <p class="text-secondary lh-lg mb-0">
            En <strong class="text-dark">TourSystem</strong> trabajamos para ofrecer experiencias
            inolvidables. Nuestro equipo diseña cada paquete pensando en
            brindarte comodidad, seguridad y aventura.
        </p>
    </section>

</main>

    <!-- JavaScript de Bootstrap (URL COMPLETA Y CORREGIDA) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>