<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta name="keywords" content="Bootstrap, Consulting Template, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="sPWR">

    <!--====== Title ======-->
    <title>Mattch</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/register.css">

</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="appilan-loader">
        <div class="preloader">
            <div class="spinner"></div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <div class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid px-0">
                                <!-- Header Logo Start -->
                                <a class="navbar-brand" href="index.html">
                                    <img src="assets/images/logo/logo.png" alt="Logo">
                                </a>
                                <!-- Header Logo End -->
                                <!-- Navbar Toggle Start -->
                                <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>
                                <!-- Navbar Toggle End -->
                                <!-- Header Menu Start -->
                                <div class="collapse navbar-collapse" id="navbarScroll">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="--bs-scroll-height: 100px;">

                                        <li class="nav-item">
                                            <a class="nav-link " href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="index.html#about">Sobre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="index.html#features">Funcionalidades</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="index.html#screenshot">Tatuagens</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="index.html#pricing">Tatuadores</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="index.html#app-vieo">Cuidados</a>
                                        </li>
                                    </ul>
                                    <div class="d-flex" >
                                        <!-- Header Button Start -->
                                        <div class="button" style="margin-left: 0px;">
                                            <a href="login.html" class="main-btn mouse-hover">Login<span></span></a>
                                        </div>
                                        <div class="button" style="margin-left: 0px;">
                                            <a href="register.html" class="main-btn mouse-hover">Registrar<span></span></a>
                                        </div>
                                        <!-- Header Button End -->
                                    </div>
                                </div>
                                <!-- Header Menu End-->
                            </div>
                        </nav>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <!-- Hero Area Start-->
        <div id="home" class="register-hero d-lg-flex align-items-center vh-100">
            <div class="overlay"></div>

            <div class="container ">
                <div class="row align-items-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <section class="vh-100">
                            <div class="container py-5 h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col col-xl-10">
                                        <div class="card" style="border-radius: 1rem;">
                                            <div class="row g-0">
                                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                                    <img src="https://images.unsplash.com/photo-1568515045052-f9a854d70bfd?ixlib=rb-1.2.1&w=1080&fit=max&q=80&fm=jpg&crop=entropy&cs=tinysrgb"
                                                         alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 97%;" />
                                                </div>
                                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                                    <div class="card-body p-4 p-lg-5 text-black">

                                                        <form method="post" action="php/authenticate/logar.php">

                                                            <h5 class="fw-normal mb-3 pb-1" style="letter-spacing: 1px; font-size: 15px;">Entre com sua conta!</h5>
                                                            <?php 
                                                                if (isset($_SESSION['login_msg'])) {
                                                                    echo $_SESSION['login_msg'];
                                                                }
                                                            ?>
                                                            <div class="form-outline mb-1">
                                                                <input type="email" id="idEmail" name="email" class="form-control form-control-sm" style="height: 30px;" required />
                                                                <label class="form-label" for="idEmail" style="font-size: 15px;">Email</label>
                                                            </div>

                                                            <div class="form-outline mb-1">
                                                                <input type="password" id="idSenha" name="senha" class="form-control form-control-sm" style="height: 30px;" required />
                                                                <label class="form-label" for="idSenha" style="font-size: 15px;">Senha</label>
                                                            </div>

                                                            <div class="pt-1 mb-1">
                                                                <button class="btn btn-dark btn-sm btn-block" type="submit" name="login-button" style="weight: 50px;">Login</button>
                                                            </div>

                                                            <a class="small text-muted" href="#!" style="font-size: 13px;">Esqueceu a senha?</a>
                                                            <p class="mb-5 pb-lg-2" style="color: #393f81; font-size: 14px;">Não possui uma conta? <a href="register.html"
                                                                                                                                      style="color: #393f81;">Registre-se aqui!</a></p>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <!-- Hero Area End -->
    </header>

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>


    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.min.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>


</body>

</html>