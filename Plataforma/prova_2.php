<?php require 'trava.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vídeos</title>

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
                 <a class="nav-link collapsed" href="#">
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
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Menu
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
                    <h1 class="h3 mb-1 text-gray-800">Vídeos</h1>
                    <p class="mb-4">Continue de onde parou</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-8">
    
    <div class="card shadow mb-4 border-bottom-warning">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
            <h6 class="m-0 font-weight-bold text-warning">
                <i class="fas fa-tasks mr-2"></i>Avaliação 1: Fundamentos Básicos
            </h6>
            <span class="badge badge-warning text-white">2 Questões</span>
        </div>
        
        <div class="card-body">
            <p class="text-gray-700 mb-4">
                Responda às questões abaixo com base nos três primeiros vídeos. 
                Você precisa concluir este teste para desbloquear o próximo módulo.
            </p>
            
            <form>
                <div class="mb-4">
                    <p class="font-weight-bold text-gray-900 mb-2">1. Qual é a principal finalidade da arrecadação de tributos pelo município?</p>
                    
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="q1_respA" name="pergunta1" class="custom-control-input">
                        <label class="custom-control-label text-gray-700" for="q1_respA">A) Guardar dinheiro nos cofres da prefeitura.</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="q1_respB" name="pergunta1" class="custom-control-input">
                        <label class="custom-control-label text-gray-700" for="q1_respB">B) Financiar políticas públicas como saúde, educação e segurança.</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="q1_respC" name="pergunta1" class="custom-control-input">
                        <label class="custom-control-label text-gray-700" for="q1_respC">C) Repassar integralmente os valores para o Governo Federal.</label>
                    </div>
                </div>

                <hr class="sidebar-divider">

                <div class="mb-4">
                    <p class="font-weight-bold text-gray-900 mb-2">2. Todo cidadão tem o direito de exigir a Nota Fiscal?</p>
                    
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="q2_respA" name="pergunta2" class="custom-control-input">
                        <label class="custom-control-label text-gray-700" for="q2_respA">A) Sim, é um direito e um dever cidadão.</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="q2_respB" name="pergunta2" class="custom-control-input">
                        <label class="custom-control-label text-gray-700" for="q2_respB">B) Não, apenas empresas e contadores podem exigir.</label>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a href="aula_4.php" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Enviar Respostas e Avançar</span>
                    </a>
                </div>
            </form>
            
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