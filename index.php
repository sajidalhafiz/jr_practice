<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/fav-icon.svg" type="image/x-icon">
    <title>Bootstrap demo</title>
    <!-- home css -->
    <link rel="stylesheet" href="styles/home.css">
    <!-- typo css -->
    <link rel="stylesheet" href="styles/typo.css">
    <!-- card css -->
    <link rel="stylesheet" href="styles/card.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="p-5">
    <header class="container sticky-top bg-dark bg-opacity-25 rounded rounded-5">
        <nav class="navbar navbar-expand-lg p-0 mb-2">
            <div class="container-fluid p-0">
                <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <a class="navbar-brand d-flex gap-4 align-items-center" href="#">
                        <img src="images/logo.png" alt="">
                    </a>
                </button>
                <div class="collapse navbar-collapse d-md-flex justify-content-between" id="navbarTogglerDemo01">
                    <a class="navbar-brand d-none d-lg-flex gap-4 align-items-center" href="#">
                        <img src="images/logo.png" alt="">
                        <img src="images/logo-title.png" alt="">
                    </a>
                    <ul class="navbar-nav mb-0 d-flex gap-3 gap-lg-5">
                        <li class="nav-item">
                            <a class="nav-link d-flex gap-2 align-items-center" aria-current="page" href="#all-projects">
                                <img src="images/all-projects.png" alt="">
                                <p class="m-0 text-light fw-medium">All Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex gap-2 align-items-center" href="#my-projects">
                                <img src="images/my-projects.png" alt="">
                                <p class="m-0 text-light fw-medium">My Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><img src="images/avatar.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row row-sm-cols-1 row-lg-cols-2 align-items-center justify-content-between">
            <section class="col-sm-12 col-lg-4">
                <h1 class="display-4 fw-bolder">Don't Have Project Ideas?</h1>
                <span class="display-4 fw-bolder">Here We Are To</span>
                <h1 class="display-4 fw-bolder">Help You Out ...</h1>
                <p class="text-dark fw-medium py-5">We provide all the resources you need to build your next project
                    from
                    scratch. We are highly motivated to help junior industry explorer to provide production level
                    projects
                    resources.</p>
                <a class="get-start-btn" href="register.php">Get Started</a>
            </section>
            <section class="col-sm-12 col-lg-8 d-flex  justify-content-center">
                <div class="main">
                    <div class="card-slide" id="c1"></div>
                    <div class="card-slide" id="c2"></div>
                    <div class="card-slide" id="c3"></div>
                    <div class="card-slide" id="c4"></div>
                </div>
            </section>
        </div>
    </div>
    <div id="all-projects" class="container my-5 py-5 text-center">
        <h2>Build And Learn The Best Tools And Platforms By Creating Projects</h2>
        <p>We focus on industry leading platforms so that
            you can be prepared for your next job. </p>
        <div class="row row-cols-1 row-cols-md-4 my-5 py-5">
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <img src="images/project-card-1.svg" alt="">
                        <!-- <p class="title">FRONT SIDE</p>
                        <p>Hover Me</p> -->
                    </div>
                    <div class="backSide">
                        <button class="project-btn">Details</button>
                    </div>
                </div>
            </div>
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <img src="images/project-card-2.svg" alt="">
                        <!-- <p class="title">FRONT SIDE</p>
                        <p>Hover Me</p> -->
                    </div>
                    <div class="backSide">
                        <button class="project-btn">Details</button>
                    </div>
                </div>
            </div>
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <img src="images/project-card-3.svg" alt="">
                        <!-- <p class="title">FRONT SIDE</p>
                        <p>Hover Me</p> -->
                    </div>
                    <div class="backSide">
                        <button class="project-btn">Details</button>
                    </div>
                </div>
            </div>
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <img src="images/project-card-4.svg" alt="">
                        <!-- <p class="title">FRONT SIDE</p>
                        <p>Hover Me</p> -->
                    </div>
                    <div class="backSide">
                        <button class="project-btn">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>