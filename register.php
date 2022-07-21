<?php
    session_start();
?>

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
                                <div class="d-flex">
                                    <!-- Header Button Start -->
                                    <div class="button" style="margin-left: 30px;">
                                        <a href="login.php" class="main-btn mouse-hover">Login<span></span></a>
                                    </div>
                                    <div class="button" style="margin-left: 30px;">
                                        <a href="register.php" class="main-btn mouse-hover">Registrar<span></span></a>
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


    <!--====== HEADER PART START ======-->
    <div class="header_area">

        <!-- Hero Area Start-->
        <div id="home" class="register-hero d-lg-flex align-items-center vh-100">
            <div class="overlay"></div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="d-flex justify-content-center align-items-center ">

                        <div class="card">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item text-center">
                                    <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill"
                                        href="#pills-home" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Cliente</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill"
                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Tatuador</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <form method="POST" action="php/operations/cliente.php">
                                        <div class="form px-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m">First name</label>
                                                        <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n">Last name</label>
                                                        <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-1">
                                                    <select class="form-select" id="states" name="estado">
                                                        <option>Estado</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="SP">São Paulo</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <select id="cities" class="form-select" name="cidade">
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <select class="form-select" name="genero">
                                                        <option>Gênero</option>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="feminino">Feminino</option>
                                                        <option value="outro">Outro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="email">E-mail</label>
                                                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="email"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="senha">Senha</label>
                                                        <input type="text" id="senha" class="form-control form-control-lg" name="senha"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex justify-content-end ">
                                                    <button type="submit" class="btn btn-default btn-md mt-3" name="saveCliente">Registrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form method="POST" action="php/operations/tatuador.php">
                                        <div class="form px-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m">First
                                                            name</label>
                                                        <input type="text" id="form3Example1m"
                                                            class="form-control form-control-lg" name="first_name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n">Last name</label>
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="last_name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-1">
                                                    <select class="form-select" id="states2" name="estado">
                                                        <option>Estado</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="SP">São Paulo</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <select id="cities2" class="form-select" name="cidade"></select>
                                                </div>
                                                <div class="col-md-4 mb-1">
                                                    <select class="form-select" name="genero">
                                                        <option>Gênero</option>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="feminino">Feminino</option>
                                                        <option value="outro">Outro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="email">E-mail</label>
                                                        <input type="text" id="email" name="email" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="senha">Senha</label>
                                                        <input type="text" id="senha" name="senha" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="anos">Experiencia (em anos)</label>
                                                        <input type="number" id="anos" class="form-control form-control-lg" name="experiencia" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="especialidade">Link WhatsApp</label>
                                                    <input type="text" id="especialidade" class="form-control form-control-lg" name="especialidade" />
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="Instagram">Instagram</label>
                                                        <input type="text" id="Instagram" name="instagram" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-default btn-md" name="saveTatuador">Registrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Area End -->
        </div>
    </div>

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>


    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.min.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script>
        const statesAndCities = [{
            SP: ["Adamantina",
                "Adolfo",
                "Aguaí",
                "Águas da Prata",
                "Águas de Lindóia",
                "Águas de Santa Bárbara",
                "Águas de São Pedro",
                "Agudos",
                "Alambari",
                "Alfredo Marcondes",
                "Altair",
                "Altinópolis",
                "Alto Alegre",
                "Alumínio",
                "Álvares Florence",
                "Álvares Machado",
                "Álvaro de Carvalho",
                "Alvinlândia",
                "Americana",
                "Américo Brasiliense",
                "Américo de Campos",
                "Amparo",
                "Analândia",
                "Andradina",
                "Angatuba",
                "Anhembi",
                "Anhumas",
                "Aparecida",
                "Aparecida d'Oeste",
                "Apiaí",
                "Araçariguama",
                "Araçatuba",
                "Araçoiaba da Serra",
                "Aramina",
                "Arandu",
                "Arapeí",
                "Araraquara",
                "Araras",
                "Arco-Íris",
                "Arealva",
                "Areias",
                "Areiópolis",
                "Ariranha",
                "Artur Nogueira",
                "Arujá",
                "Aspásia",
                "Assis",
                "Atibaia",
                "Auriflama",
                "Avaí",
                "Avanhandava",
                "Avaré",
                "Bady Bassitt",
                "Balbinos",
                "Bálsamo",
                "Bananal",
                "Barão de Antonina",
                "Barbosa",
                "Bariri",
                "Barra Bonita",
                "Barra do Chapéu",
                "Barra do Turvo",
                "Barretos",
                "Barrinha",
                "Barueri",
                "Bastos",
                "Batatais",
                "Bauru",
                "Bebedouro",
                "Bento de Abreu",
                "Bernardino de Campos",
                "Bertioga",
                "Bilac",
                "Birigui",
                "Biritiba-Mirim",
                "Boa Esperança do Sul",
                "Bocaina",
                "Bofete",
                "Boituva",
                "Bom Jesus dos Perdões",
                "Bom Sucesso de Itararé",
                "Borá",
                "Boracéia",
                "Borborema",
                "Borebi",
                "Botucatu",
                "Bragança Paulista",
                "Braúna",
                "Brejo Alegre",
                "Brodowski",
                "Brotas",
                "Buri",
                "Buritama",
                "Buritizal",
                "Cabrália Paulista",
                "Cabreúva",
                "Caçapava",
                "Cachoeira Paulista",
                "Caconde",
                "Cafelândia",
                "Caiabu",
                "Caieiras",
                "Caiuá",
                "Cajamar",
                "Cajati",
                "Cajobi",
                "Cajuru",
                "Campina do Monte Alegre",
                "Campinas",
                "Campo Limpo Paulista",
                "Campos do Jordão",
                "Campos Novos Paulista",
                "Cananéia",
                "Canas",
                "Cândido Mota",
                "Cândido Rodrigues",
                "Canitar",
                "Capão Bonito",
                "Capela do Alto",
                "Capivari",
                "Caraguatatuba",
                "Carapicuíba",
                "Cardoso",
                "Casa Branca",
                "Cássia dos Coqueiros",
                "Castilho",
                "Catanduva",
                "Catiguá",
                "Cedral",
                "Cerqueira César",
                "Cerquilho",
                "Cesário Lange",
                "Charqueada",
                "Chavantes",
                "Clementina",
                "Colina",
                "Colômbia",
                "Conchal",
                "Conchas",
                "Cordeirópolis",
                "Coroados",
                "Coronel Macedo",
                "Corumbataí",
                "Cosmópolis",
                "Cosmorama",
                "Cotia",
                "Cravinhos",
                "Cristais Paulista",
                "Cruzália",
                "Cruzeiro",
                "Cubatão",
                "Cunha",
                "Descalvado",
                "Diadema",
                "Dirce Reis",
                "Divinolândia",
                "Dobrada",
                "Dois Córregos",
                "Dolcinópolis",
                "Dourado",
                "Dracena",
                "Duartina",
                "Dumont",
                "Echaporã",
                "Eldorado",
                "Elias Fausto",
                "Elisiário",
                "Embaúba",
                "Embu",
                "Embu-Guaçu",
                "Emilianópolis",
                "Engenheiro Coelho",
                "Espírito Santo do Pinhal",
                "Espírito Santo do Turvo",
                "Estiva Gerbi",
                "Estrela d'Oeste",
                "Estrela do Norte",
                "Euclides da Cunha Paulista",
                "Fartura",
                "Fernando Prestes",
                "Fernandópolis",
                "Fernão",
                "Ferraz de Vasconcelos",
                "Flora Rica",
                "Floreal",
                "Florínia",
                "Flórida Paulista",
                "Franca",
                "Francisco Morato",
                "Franco da Rocha",
                "Gabriel Monteiro",
                "Gália",
                "Garça",
                "Gastão Vidigal",
                "Gavião Peixoto",
                "General Salgado",
                "Getulina",
                "Glicério",
                "Guaiçara",
                "Guaimbê",
                "Guaíra",
                "Guapiaçu",
                "Guapiara",
                "Guará",
                "Guaraçaí",
                "Guaraci",
                "Guarani d'Oeste",
                "Guarantã",
                "Guararapes",
                "Guararema",
                "Guaratinguetá",
                "Guareí",
                "Guariba",
                "Guarujá",
                "Guarulhos",
                "Guatapará",
                "Guzolândia",
                "Herculândia",
                "Holambra",
                "Hortolândia",
                "Iacanga",
                "Iacri",
                "Iaras",
                "Ibaté",
                "Ibirá",
                "Ibirarema",
                "Ibitinga",
                "Ibiúna",
                "Icém",
                "Iepê",
                "Igaraçu do Tietê",
                "Igarapava",
                "Igaratá",
                "Iguape",
                "Ilha Comprida",
                "Ilha Solteira",
                "Ilhabela",
                "Indaiatuba",
                "Indiana",
                "Indiaporã",
                "Inúbia Paulista",
                "Ipauçu",
                "Iperó",
                "Ipeúna",
                "Ipiguá",
                "Iporanga",
                "Ipuã",
                "Iracemápolis",
                "Irapuã",
                "Irapuru",
                "Itaberá",
                "Itaí",
                "Itajobi",
                "Itaju",
                "Itanhaém",
                "Itaóca",
                "Itapecerica da Serra",
                "Itapetininga",
                "Itapeva",
                "Itapevi",
                "Itapira",
                "Itapirapuã Paulista",
                "Itápolis",
                "Itaporanga",
                "Itapuí",
                "Itapura",
                "Itaquaquecetuba",
                "Itararé",
                "Itariri",
                "Itatiba",
                "Itatinga",
                "Itirapina",
                "Itirapuã",
                "Itobi",
                "Itu",
                "Itupeva",
                "Ituverava",
                "Jaborandi",
                "Jaboticabal",
                "Jacareí",
                "Jaci",
                "Jacupiranga",
                "Jaguariúna",
                "Jales",
                "Jambeiro",
                "Jandira",
                "Jardinópolis",
                "Jarinu",
                "Jaú",
                "Jeriquara",
                "Joanópolis",
                "João Ramalho",
                "José Bonifácio",
                "Júlio Mesquita",
                "Jumirim",
                "Jundiaí",
                "Junqueirópolis",
                "Juquiá",
                "Juquitiba",
                "Lagoinha",
                "Laranjal Paulista",
                "Lavínia",
                "Lavrinhas",
                "Leme",
                "Lençóis Paulista",
                "Limeira",
                "Lindóia",
                "Lins",
                "Lorena",
                "Lourdes",
                "Louveira",
                "Lucélia",
                "Lucianópolis",
                "Luís Antônio",
                "Luiziânia",
                "Lupércio",
                "Lutécia",
                "Macatuba",
                "Macaubal",
                "Macedônia",
                "Magda",
                "Mairinque",
                "Mairiporã",
                "Manduri",
                "Marabá Paulista",
                "Maracaí",
                "Marapoama",
                "Mariápolis",
                "Marília",
                "Marinópolis",
                "Martinópolis",
                "Matão",
                "Mauá",
                "Mendonça",
                "Meridiano",
                "Mesópolis",
                "Miguelópolis",
                "Mineiros do Tietê",
                "Mira Estrela",
                "Miracatu",
                "Mirandópolis",
                "Mirante do Paranapanema",
                "Mirassol",
                "Mirassolândia",
                "Mococa",
                "Mogi das Cruzes",
                "Mogi-Guaçu",
                "Mogi-Mirim",
                "Mombuca",
                "Monções",
                "Mongaguá",
                "Monte Alegre do Sul",
                "Monte Alto",
                "Monte Aprazível",
                "Monte Azul Paulista",
                "Monte Castelo",
                "Monte Mor",
                "Monteiro Lobato",
                "Morro Agudo",
                "Morungaba",
                "Motuca",
                "Murutinga do Sul",
                "Nantes",
                "Narandiba",
                "Natividade da Serra",
                "Nazaré Paulista",
                "Neves Paulista",
                "Nhandeara",
                "Nipoã",
                "Nova Aliança",
                "Nova Campina",
                "Nova Canaã Paulista",
                "Nova Castilho",
                "Nova Europa",
                "Nova Granada",
                "Nova Guataporanga",
                "Nova Independência",
                "Nova Luzitânia",
                "Nova Odessa",
                "Novais",
                "Novo Horizonte",
                "Nuporanga",
                "Ocauçu",
                "Óleo",
                "Olímpia",
                "Onda Verde",
                "Oriente",
                "Orindiúva",
                "Orlândia",
                "Osasco",
                "Oscar Bressane",
                "Osvaldo Cruz",
                "Ourinhos",
                "Ouro Verde",
                "Ouroeste",
                "Pacaembu",
                "Palestina",
                "Palmares Paulista",
                "Palmeira d'Oeste",
                "Palmital",
                "Panorama",
                "Paraguaçu Paulista",
                "Paraibuna",
                "Paraíso",
                "Paranapanema",
                "Paranapuã",
                "Parapuã",
                "Pardinho",
                "Pariquera-Açu",
                "Parisi",
                "Patrocínio Paulista",
                "Paulicéia",
                "Paulínia",
                "Paulistânia",
                "Paulo de Faria",
                "Pederneiras",
                "Pedra Bela",
                "Pedranópolis",
                "Pedregulho",
                "Pedreira",
                "Pedrinhas Paulista",
                "Pedro de Toledo",
                "Penápolis",
                "Pereira Barreto",
                "Pereiras",
                "Peruíbe",
                "Piacatu",
                "Piedade",
                "Pilar do Sul",
                "Pindamonhangaba",
                "Pindorama",
                "Pinhalzinho",
                "Piquerobi",
                "Piquete",
                "Piracaia",
                "Piracicaba",
                "Piraju",
                "Pirajuí",
                "Pirangi",
                "Pirapora do Bom Jesus",
                "Pirapozinho",
                "Pirassununga",
                "Piratininga",
                "Pitangueiras",
                "Planalto",
                "Platina",
                "Poá",
                "Poloni",
                "Pompéia",
                "Pongaí",
                "Pontal",
                "Pontalinda",
                "Pontes Gestal",
                "Populina",
                "Porangaba",
                "Porto Feliz",
                "Porto Ferreira",
                "Potim",
                "Potirendaba",
                "Pracinha",
                "Pradópolis",
                "Praia Grande",
                "Pratânia",
                "Presidente Alves",
                "Presidente Bernardes",
                "Presidente Epitácio",
                "Presidente Prudente",
                "Presidente Venceslau",
                "Promissão",
                "Quadra",
                "Quatá",
                "Queiroz",
                "Queluz",
                "Quintana",
                "Rafard",
                "Rancharia",
                "Redenção da Serra",
                "Regente Feijó",
                "Reginópolis",
                "Registro",
                "Restinga",
                "Ribeira",
                "Ribeirão Bonito",
                "Ribeirão Branco",
                "Ribeirão Corrente",
                "Ribeirão do Sul",
                "Ribeirão dos Índios",
                "Ribeirão Grande",
                "Ribeirão Pires",
                "Ribeirão Preto",
                "Rifaina",
                "Rincão",
                "Rinópolis",
                "Rio Claro",
                "Rio das Pedras",
                "Rio Grande da Serra",
                "Riolândia",
                "Riversul",
                "Rosana",
                "Roseira",
                "Rubiácea",
                "Rubinéia",
                "Sabino",
                "Sagres",
                "Sales",
                "Sales Oliveira",
                "Salesópolis",
                "Salmourão",
                "Saltinho",
                "Salto",
                "Salto de Pirapora",
                "Salto Grande",
                "Sandovalina",
                "Santa Adélia",
                "Santa Albertina",
                "Santa Bárbara d'Oeste",
                "Santa Branca",
                "Santa Clara d'Oeste",
                "Santa Cruz da Conceição",
                "Santa Cruz da Esperança",
                "Santa Cruz das Palmeiras",
                "Santa Cruz do Rio Pardo",
                "Santa Ernestina",
                "Santa Fé do Sul",
                "Santa Gertrudes",
                "Santa Isabel",
                "Santa Lúcia",
                "Santa Maria da Serra",
                "Santa Mercedes",
                "Santa Rita d'Oeste",
                "Santa Rita do Passa Quatro",
                "Santa Rosa de Viterbo",
                "Santa Salete",
                "Santana da Ponte Pensa",
                "Santana de Parnaíba",
                "Santo Anastácio",
                "Santo André",
                "Santo Antônio da Alegria",
                "Santo Antônio de Posse",
                "Santo Antônio do Aracanguá",
                "Santo Antônio do Jardim",
                "Santo Antônio do Pinhal",
                "Santo Expedito",
                "Santópolis do Aguapeí",
                "Santos",
                "São Bento do Sapucaí",
                "São Bernardo do Campo",
                "São Caetano do Sul",
                "São Carlos",
                "São Francisco",
                "São João da Boa Vista",
                "São João das Duas Pontes",
                "São João de Iracema",
                "São João do Pau d'Alho",
                "São Joaquim da Barra",
                "São José da Bela Vista",
                "São José do Barreiro",
                "São José do Rio Pardo",
                "São José do Rio Preto",
                "São José dos Campos",
                "São Lourenço da Serra",
                "São Luís do Paraitinga",
                "São Manuel",
                "São Miguel Arcanjo",
                "São Paulo",
                "São Pedro",
                "São Pedro do Turvo",
                "São Roque",
                "São Sebastião",
                "São Sebastião da Grama",
                "São Simão",
                "São Vicente",
                "Sarapuí",
                "Sarutaiá",
                "Sebastianópolis do Sul",
                "Serra Azul",
                "Serra Negra",
                "Serrana",
                "Sertãozinho",
                "Sete Barras",
                "Severínia",
                "Silveiras",
                "Socorro",
                "Sorocaba",
                "Sud Mennucci",
                "Sumaré",
                "Suzanápolis",
                "Suzano",
                "Tabapuã",
                "Tabatinga",
                "Taboão da Serra",
                "Taciba",
                "Taguaí",
                "Taiaçu",
                "Taiúva",
                "Tambaú",
                "Tanabi",
                "Tapiraí",
                "Tapiratiba",
                "Taquaral",
                "Taquaritinga",
                "Taquarituba",
                "Taquarivaí",
                "Tarabai",
                "Tarumã",
                "Tatuí",
                "Taubaté",
                "Tejupá",
                "Teodoro Sampaio",
                "Terra Roxa",
                "Tietê",
                "Timburi",
                "Torre de Pedra",
                "Torrinha",
                "Trabiju",
                "Tremembé",
                "Três Fronteiras",
                "Tuiuti",
                "Tupã",
                "Tupi Paulista",
                "Turiúba",
                "Turmalina",
                "Ubarana",
                "Ubatuba",
                "Ubirajara",
                "Uchoa",
                "União Paulista",
                "Urânia",
                "Uru",
                "Urupês",
                "Valentim Gentil",
                "Valinhos",
                "Valparaíso",
                "Vargem",
                "Vargem Grande do Sul",
                "Vargem Grande Paulista",
                "Várzea Paulista",
                "Vera Cruz",
                "Vinhedo",
                "Viradouro",
                "Vista Alegre do Alto",
                "Vitória Brasil",
                "Votorantim",
                "Votuporanga",
                "Zacarias"],
            RJ: ["Angra dos Reis",
                "Aperibé",
                "Araruama",
                "Areal",
                "Armação de Búzios",
                "Arraial do Cabo",
                "Barra do Piraí",
                "Barra Mansa",
                "Belford Roxo",
                "Bom Jardim",
                "Bom Jesus do Itabapoana",
                "Cabo Frio",
                "Cachoeiras de Macacu",
                "Cambuci",
                "Campos dos Goytacazes",
                "Cantagalo",
                "Carapebus",
                "Cardoso Moreira",
                "Carmo",
                "Casimiro de Abreu",
                "Comendador Levy Gasparian",
                "Conceição de Macabu",
                "Cordeiro",
                "Duas Barras",
                "Duque de Caxias",
                "Engenheiro Paulo de Frontin",
                "Guapimirim",
                "Iguaba Grande",
                "Itaboraí",
                "Itaguaí",
                "Italva",
                "Itaocara",
                "Itaperuna",
                "Itatiaia",
                "Japeri",
                "Laje do Muriaé",
                "Macaé",
                "Macuco",
                "Magé",
                "Mangaratiba",
                "Maricá",
                "Mendes",
                "Mesquita",
                "Miguel Pereira",
                "Miracema",
                "Natividade",
                "Nilópolis",
                "Niterói",
                "Nova Friburgo",
                "Nova Iguaçu",
                "Paracambi",
                "Paraíba do Sul",
                "Parati",
                "Paty do Alferes",
                "Petrópolis",
                "Pinheiral",
                "Piraí",
                "Porciúncula",
                "Porto Real",
                "Quatis",
                "Queimados",
                "Quissamã",
                "Resende",
                "Rio Bonito",
                "Rio Claro",
                "Rio das Flores",
                "Rio das Ostras",
                "Rio de Janeiro",
                "Santa Maria Madalena",
                "Santo Antônio de Pádua",
                "São Fidélis",
                "São Francisco de Itabapoana",
                "São Gonçalo",
                "São João da Barra",
                "São João de Meriti",
                "São José de Ubá",
                "São José do Vale do Rio Preto",
                "São Pedro da Aldeia",
                "São Sebastião do Alto",
                "Sapucaia",
                "Saquarema",
                "Seropédica",
                "Silva Jardim",
                "Sumidouro",
                "Tanguá",
                "Teresópolis",
                "Trajano de Morais",
                "Três Rios",
                "Valença",
                "Varre-Sai",
                "Vassouras",
                "Volta Redonda"],
            RN: ["Acari",
                "Açu",
                "Afonso Bezerra",
                "Água Nova",
                "Alexandria",
                "Almino Afonso",
                "Alto do Rodrigues",
                "Angicos",
                "Antônio Martins",
                "Apodi",
                "Areia Branca",
                "Arês",
                "Augusto Severo",
                "Baía Formosa",
                "Baraúna",
                "Barcelona",
                "Bento Fernandes",
                "Bodó",
                "Bom Jesus",
                "Brejinho",
                "Caiçara do Norte",
                "Caiçara do Rio do Vento",
                "Caicó",
                "Campo Redondo",
                "Canguaretama",
                "Caraúbas",
                "Carnaúba dos Dantas",
                "Carnaubais",
                "Ceará-Mirim",
                "Cerro Corá",
                "Coronel Ezequiel",
                "Coronel João Pessoa",
                "Cruzeta",
                "Currais Novos",
                "Doutor Severiano",
                "Encanto",
                "Equador",
                "Espírito Santo",
                "Extremoz",
                "Felipe Guerra",
                "Fernando Pedroza",
                "Florânia",
                "Francisco Dantas",
                "Frutuoso Gomes",
                "Galinhos",
                "Goianinha",
                "Governador Dix-Sept Rosado",
                "Grossos",
                "Guamaré",
                "Ielmo Marinho",
                "Ipanguaçu",
                "Ipueira",
                "Itajá",
                "Itaú",
                "Jaçanã",
                "Jandaíra",
                "Janduís",
                "Januário Cicco",
                "Japi",
                "Jardim de Angicos",
                "Jardim de Piranhas",
                "Jardim do Seridó",
                "João Câmara",
                "João Dias",
                "José da Penha",
                "Jucurutu",
                "Jundiá",
                "Lagoa d'Anta",
                "Lagoa de Pedras",
                "Lagoa de Velhos",
                "Lagoa Nova",
                "Lagoa Salgada",
                "Lajes",
                "Lajes Pintadas",
                "Lucrécia",
                "Luís Gomes",
                "Macaíba",
                "Macau",
                "Major Sales",
                "Marcelino Vieira",
                "Martins",
                "Maxaranguape",
                "Messias Targino",
                "Montanhas",
                "Monte Alegre",
                "Monte das Gameleiras",
                "Mossoró",
                "Natal",
                "Nísia Floresta",
                "Nova Cruz",
                "Olho-d'Água do Borges",
                "Ouro Branco",
                "Paraná",
                "Paraú",
                "Parazinho",
                "Parelhas",
                "Parnamirim",
                "Passa e Fica",
                "Passagem",
                "Patu",
                "Pau dos Ferros",
                "Pedra Grande",
                "Pedra Preta",
                "Pedro Avelino",
                "Pedro Velho",
                "Pendências",
                "Pilões",
                "Poço Branco",
                "Portalegre",
                "Porto do Mangue",
                "Presidente Juscelino",
                "Pureza",
                "Rafael Fernandes",
                "Rafael Godeiro",
                "Riacho da Cruz",
                "Riacho de Santana",
                "Riachuelo",
                "Rio do Fogo",
                "Rodolfo Fernandes",
                "Ruy Barbosa",
                "Santa Cruz",
                "Santa Maria",
                "Santana do Matos",
                "Santana do Seridó",
                "Santo Antônio",
                "São Bento do Norte",
                "São Bento do Trairí",
                "São Fernando",
                "São Francisco do Oeste",
                "São Gonçalo do Amarante",
                "São João do Sabugi",
                "São José de Mipibu",
                "São José do Campestre",
                "São José do Seridó",
                "São Miguel",
                "São Miguel de Touros",
                "São Paulo do Potengi",
                "São Pedro",
                "São Rafael",
                "São Tomé",
                "São Vicente",
                "Senador Elói de Souza",
                "Senador Georgino Avelino",
                "Serra de São Bento",
                "Serra do Mel",
                "Serra Negra do Norte",
                "Serrinha",
                "Serrinha dos Pintos",
                "Severiano Melo",
                "Sítio Novo",
                "Taboleiro Grande",
                "Taipu",
                "Tangará",
                "Tenente Ananias",
                "Tenente Laurentino Cruz",
                "Tibau",
                "Tibau do Sul",
                "Timbaúba dos Batistas",
                "Touros",
                "Triunfo Potiguar",
                "Umarizal",
                "Upanema",
                "Várzea",
                "Venha-Ver",
                "Vera Cruz",
                "Viçosa",
                "Vila Flor"],
            PB: ["Araçagi",
                "Arara",
                "Araruna",
                "Areia",
                "Areia de Baraúnas",
                "Areial",
                "Aroeiras",
                "Assunção",
                "Baía da Traição",
                "Bananeiras",
                "Baraúna",
                "Barra de Santa Rosa",
                "Barra de Santana",
                "Barra de São Miguel",
                "Bayeux",
                "Belém",
                "Belém do Brejo do Cruz",
                "Bernardino Batista",
                "Boa Ventura",
                "Boa Vista",
                "Bom Jesus",
                "Bom Sucesso",
                "Bonito de Santa Fé",
                "Boqueirão",
                "Borborema",
                "Brejo do Cruz",
                "Brejo dos Santos",
                "Caaporã",
                "Cabaceiras",
                "Cabedelo",
                "Cachoeira dos Índios",
                "Cacimba de Areia",
                "Cacimba de Dentro",
                "Cacimbas",
                "Caiçara",
                "Cajazeiras",
                "Cajazeirinhas",
                "Caldas Brandão",
                "Camalaú",
                "Campina Grande",
                "Campo de Santana",
                "Capim",
                "Caraúbas",
                "Carrapateira",
                "Casserengue",
                "Catingueira",
                "Catolé do Rocha",
                "Caturité",
                "Conceição",
                "Condado",
                "Conde",
                "Congo",
                "Coremas",
                "Coxixola",
                "Cruz do Espírito Santo",
                "Cubati",
                "Cuité",
                "Cuité de Mamanguape",
                "Cuitegi",
                "Curral de Cima",
                "Curral Velho",
                "Damião",
                "Desterro",
                "Diamante",
                "Dona Inês",
                "Duas Estradas",
                "Emas",
                "Esperança",
                "Fagundes",
                "Frei Martinho",
                "Gado Bravo",
                "Guarabira",
                "Gurinhém",
                "Gurjão",
                "Ibiara",
                "Igaracy",
                "Imaculada",
                "Ingá",
                "Itabaiana",
                "Itaporanga",
                "Itapororoca",
                "Itatuba",
                "Jacaraú",
                "Jericó",
                "João Pessoa",
                "Juarez Távora",
                "Juazeirinho",
                "Junco do Seridó",
                "Juripiranga",
                "Juru",
                "Lagoa",
                "Lagoa de Dentro",
                "Lagoa Seca",
                "Lastro",
                "Livramento",
                "Logradouro",
                "Lucena",
                "Mãe d'Água",
                "Malta",
                "Mamanguape",
                "Manaíra",
                "Marcação",
                "Mari",
                "Marizópolis",
                "Massaranduba",
                "Mataraca",
                "Matinhas",
                "Mato Grosso",
                "Maturéia",
                "Mogeiro",
                "Montadas",
                "Monte Horebe",
                "Monteiro",
                "Mulungu",
                "Natuba",
                "Nazarezinho",
                "Nova Floresta",
                "Nova Olinda",
                "Nova Palmeira",
                "Olho d'Água",
                "Olivedos",
                "Ouro Velho",
                "Parari",
                "Passagem",
                "Patos",
                "Paulista",
                "Pedra Branca",
                "Pedra Lavrada",
                "Pedras de Fogo",
                "Pedro Régis",
                "Piancó",
                "Picuí",
                "Pilar",
                "Pilões",
                "Pilõezinhos",
                "Pirpirituba",
                "Pitimbu",
                "Pocinhos",
                "Poço Dantas",
                "Poço de José de Moura",
                "Pombal",
                "Prata",
                "Princesa Isabel",
                "Puxinanã",
                "Queimadas",
                "Quixabá",
                "Remígio",
                "Riachão",
                "Riachão do Bacamarte",
                "Riachão do Poço",
                "Riacho de Santo Antônio",
                "Riacho dos Cavalos",
                "Rio Tinto",
                "Salgadinho",
                "Salgado de São Félix",
                "Santa Cecília",
                "Santa Cruz",
                "Santa Helena",
                "Santa Inês",
                "Santa Luzia",
                "Santa Rita",
                "Santa Teresinha",
                "Santana de Mangueira",
                "Santana dos Garrotes",
                "Santarém",
                "Santo André",
                "São Bentinho",
                "São Bento",
                "São Domingos de Pombal",
                "São Domingos do Cariri",
                "São Francisco",
                "São João do Cariri",
                "São João do Rio do Peixe",
                "São João do Tigre",
                "São José da Lagoa Tapada",
                "São José de Caiana",
                "São José de Espinharas",
                "São José de Piranhas",
                "São José de Princesa",
                "São José do Bonfim",
                "São José do Brejo do Cruz",
                "São José do Sabugi",
                "São José dos Cordeiros",
                "São José dos Ramos",
                "São Mamede",
                "São Miguel de Taipu",
                "São Sebastião de Lagoa de Roça",
                "São Sebastião do Umbuzeiro",
                "Sapé",
                "Seridó",
                "Serra Branca",
                "Serra da Raiz",
                "Serra Grande",
                "Serra Redonda",
                "Serraria",
                "Sertãozinho",
                "Sobrado",
                "Solânea",
                "Soledade",
                "Sossêgo",
                "Sousa",
                "Sumé",
                "Taperoá",
                "Tavares",
                "Teixeira",
                "Tenório",
                "Triunfo",
                "Uiraúna",
                "Umbuzeiro",
                "Várzea",],
        }]

        const states = document.querySelector('#states')
        const cities = document.querySelector('#cities')

        const states2 = document.querySelector('#states2')
        const cities2 = document.querySelector('#cities2')

        const removeChild = (el) => {
            while (el.firstChild) {
                el.removeChild(el.firstChild);
            }
        }

        const hideElement = el => el.style.display = 'none'

        const showElement = el => el.style.display = ''


        states.addEventListener('change', e => {
            removeChild(cities)
            if (e.target.value === states.value) {
                statesAndCities.map(data => {
                    data[e.target.value].map(city => {
                        const option = document.createElement("option")
                        const value = option.text = city;
                        cities.add(option);
                    })
                })
            }

        })

        states2.addEventListener('change', e => {
            removeChild(cities2)
            if (e.target.value === states2.value) {
                statesAndCities.map(data => {
                    data[e.target.value].map(city => {
                        const option = document.createElement("option")
                        const value = option.text = city;
                        cities2.add(option);
                    })
                })
            }

        })
    </script>

</body>

</html>