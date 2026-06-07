<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simulados e Provas</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>

    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal_cidadao.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3"><img src="img/Fiscaliza_branco.png" alt="" width="60%"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="principal_cidadao.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span></a>
            </li>

             <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Etapas
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="videos.php">
                    <i class="fas fa-fw fa-play-circle"></i>
                    <span>Vídeos</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="jogo.php">
                    <i class="fas fa-fw fa-gamepad"></i>
                    <span>Jogo</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="provas.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Provas e Simulados</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">(Nome do Usuário)</span>
                                <img class="img-profile rounded-circle"
                                    src="img/perfil.png">
                            </a>
                            <!-- Dropdown - User Information -->
                           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="configuracoes.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair da conta
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Simulados e Provas</h1>
                    <p class="mb-4"></p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12 mb-3">
                            <h4 class="h5 font-weight-bold text-primary border-bottom pb-2"><i class="fas fa-dumbbell mr-2"></i>Área de Treino (Simulados)</h4>
                            <p class="text-sm text-gray-600">Treine seus conhecimentos antes das provas oficiais. Você pode refazer quantas vezes quiser!</p>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="font-weight-bold text-info mb-0">Simulado 1</h6>
                                        <span class="badge badge-info">10 Questões</span>
                                    </div>
                                    <p class="small text-gray-600 mb-4">Teste seus conhecimentos básicos sobre (conteúdo).</p>
                                    <a href="simulado_1.php" class="btn btn-info btn-block btn-sm"><i class="fas fa-play mr-1"></i> Iniciar Simulado</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="font-weight-bold text-info mb-0">Simulado 2</h6>
                                        <span class="badge badge-info">10 Questões</span>
                                    </div>
                                    <p class="small text-gray-600 mb-4">Aprofunde-se nos temas de (conteúdo).</p>
                                    <a href="simulado_2.php" class="btn btn-info btn-block btn-sm"><i class="fas fa-play mr-1"></i> Iniciar Simulado</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4 mb-3">
                            <h4 class="h5 font-weight-bold text-warning border-bottom pb-2"><i class="fas fa-award mr-2"></i>Avaliações Oficiais</h4>
                            <p class="text-sm text-gray-600">Estas provas são desbloqueadas conforme você avança nos vídeos. Elas valem nota para o certificado.</p>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100" style="opacity: 0.7;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="font-weight-bold text-secondary mb-0">Prova 1</h6>
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <p class="small text-gray-600 mb-4">Avaliação sobre os vídeos 1, 2 e 3.</p>
                                    <button class="btn btn-secondary btn-block btn-sm" disabled><i class="fas fa-lock mr-1"></i> Assista aos vídeos primeiro</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100" style="opacity: 0.7;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="font-weight-bold text-secondary mb-0">Prova 2</h6>
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <p class="small text-gray-600 mb-4">Avaliação sobre os vídeos 4, 5 e 6.</p>
                                    <button class="btn btn-secondary btn-block btn-sm" disabled><i class="fas fa-lock mr-1"></i> Assista aos vídeos primeiro</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100" style="opacity: 0.7;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="font-weight-bold text-danger mb-0">Prova Final</h6>
                                        <i class="fas fa-lock text-danger"></i>
                                    </div>
                                    <p class="small text-gray-600 mb-4">Avaliação final para emissão do certificado de conclusão.</p>
                                    <button class="btn btn-danger btn-block btn-sm" disabled><i class="fas fa-lock mr-1"></i> Conclua todas as etapas</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer --><!--
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>-->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>