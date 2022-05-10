<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/portafolio.css')}}">
</head>

<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo">Logo</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-portafolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-contact">Contac</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <!--Hearder -->
    <br>
    <header>
        <div class="container-fluid bg-success" id="container-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img id="user-image" src="{{ asset('assets/furia.jpg') }}" width="300" height="300">
                    </div>
                </div>
                <div class="user-description">
                    <p>Hello, my name is Bryan Reyes </p>
                    <p>Computer Science Enginner - Programmer Back-End</p>
                </div>
            </div>
        </div>
    </header>
    <!--sections About -->
    <section id="section-about" class="bg-warning">
        <div class="container">
            <h1 class="display-1" id="about-title">About</h1>
            <div class="row">
                <div class="col">
                    <p id="about-description-1">I studied UDG university located in Tonala Jalisco.
                        I have a little experience , but I worked in IMI company for 3 months.</p>
                </div>
                <div class="col">
                    <p id="about-description-2">My knowledge in the branch it is , I make web page with HTML , CSS and PHP, also I'm knowledge in
                        BOOTSTRAP , LARAVEL frameworks, so I programmer in PYTHON, JAVA API.</p>
                </div>
            </div>
            <div id="button">
                <button class="btn btn-primary" id="about-button">Free Download</button>
            </div>
        </div>
    </section>
    <!-- section Portafolio-->
    <section id="section-portafolio" class="bg-primary">
        <div class="container">
            <h1 class="display-1" id="portafolio-title">Portafolio</h1>
            <div class="row">
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
                <div class="col">
                    <img id="user-image" src="{{ asset('assets/proyecto.jpg') }}" width="300" height="300">
                </div>
            </div>
        </div>
    </section>

    <!-- section contact -->
    <section id="section-contact" class="bg-secondary">
        <div class="container">
            <h1 class="display-1" id="contact-title">Contact</h1>
            <div class="row">
                <div class="col" id="form">
                    <form action="" class="">
                        <div>
                            <label for="name" class="form-label">Name :</label>
                            <input type="text" class="form-control" placeholder="Enter Name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div>
                            <label for="" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" placeholder="Enter " required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div>
                            <label for="" class="form-label">Tel:</label>
                            <input type="text" class="form-control" placeholder="Enter " required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div>
                            <label for="" class="form-label">Email:</label>
                            <input type="text" class="form-control" placeholder="Enter " required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div>
                            <input type="submit" class="btn btn-success" id="form-button" value="Subtmit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">Location</div>
                <div class="col">aroun the web</div>
                <div class="col">about me</div>
            </div>
        </div>
    </footer>

</body>

</html>
