<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" style="margin-bottom: 20px;"></a>
        </div>
        <!--Secciones-del-tablero-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-home"></span>
                        <span>Início</span></a>
                </li>
                <li>
                    <a href=""><span class="lab la-phoenix-squadron"></span>
                        <span>Tatuagens</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                        <span>Dados</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Início
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar" />
            </div>
            <div class="user-wrapper">
                <div>
                    <a href="php/authenticate/logout.php"><h4>Lougout</h4></a>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span style="margin-top: 15px;">Novas Procuras</span>
                    </div>
                    <div>
                        <span class="las la-search"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span style="margin-top: 15px;">Tattos feitas</span>
                    </div>
                    <div>
                        <span class="lab la-phoenix-squadron"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span style="margin-top: 15px;">Tattos reservadas</span>
                    </div>
                    <div>
                        <span class="las la-bell"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span style="margin-top: 15px;">Tattos Canceladas</span>
                    </div>
                    <div>
                        <span class="las la-frown"></span>
                    </div>
                </div>
            </div>
            <!--Tabla-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Clientes</h3>
                            <button>Mostrar todos <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nome</td>
                                            <td>Tatuagem</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rafael Vidal</td>
                                            <td>Pontilhismo</td>
                                            <td><span class="status green"></span> Confirmado</td>
                                        </tr>
                                        <tr>
                                            <td>Victor Vieira</td>
                                            <td>Realismo</td>
                                            <td><span class="status red"></span> Cancelado</td>
                                        </tr>
                                        <tr>
                                            <td>Pedro Hugo</td>
                                            <td>Tribal</td>
                                            <td><span class="status yellow"></span> Reservando</td>
                                        </tr>
                                        <tr>
                                            <td>Wellyson Gustavo</td>
                                            <td>Minimalista</td>
                                            <td><span class="status green"></span> Confirmado</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Atendidos</h3>
                            <button>Mostrar todos <span class="las la-arrow-right">
                                </span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <div>
                                        <h4>Ana Maria</h4>
                                        <small>12/07/2022</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <a href=""><span class="las la-user-circle"></span></a>
                                    <a href="https://contate.me/pedrohugo"><span class="lab la-whatsapp"></span></a>
                                    <a href="https://www.instagram.com/pdrohugo/"><span class="lab la-instagram"></span></a>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <div>
                                        <h4>Karen Deon</h4>
                                        <small>01/07/2022</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <a href=""><span class="las la-user-circle "></span></a>
                                    <a href="https://contate.me/pedrohugo11"><span class="lab la-whatsapp "></span></a>
                                    <a href="https://www.instagram.com/29.wellss/"><span class="lab la-instagram"></span></a>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <div>
                                        <h4>Samir Rodrigues</h4>
                                        <small>15/06/2022</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <a href=""><span class="las la-user-circle"></span></a>
                                    <a href="https://contate.me/pedrohugo"><span class="lab la-whatsapp "></span></a>
                                    <a href="https://www.instagram.com/fernandalaiss/"><span class="lab la-instagram"></span></a>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div> 
            </div>
        </main>
    </div>
</body>
</html>