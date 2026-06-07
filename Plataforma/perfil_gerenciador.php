<?php require 'trava.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil do Gerenciador</title>

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
            
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal_gerenciador.php">
                <div class="sidebar-brand-text mx-3"><img src="img/Fiscaliza_branco.png" alt="" width="60%"></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="principal_gerenciador.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Painel Geral</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Gestão de Dados
            </div>

            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Usuários / Cidadãos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="relatorios.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Relatórios de Desempenho</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="certificados.php">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Certificados Emitidos</span>
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
                                <a class="dropdown-item" href="perfil_gerenciador.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="configuracoes_gerenciador.php">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-body text-center py-5">
                                    <img class="img-profile rounded-circle mb-3 border border-4 border-success" src="img/perfil.png" style="width: 150px; height: 150px; object-fit: cover; border-width: 4px !important;">
                                    
                                    <h5 class="font-weight-bold text-gray-900 mb-1">(Nome do Usuário)</h5>
                                    
                                    <!--<div class="badge badge-success p-2 px-3 mb-3 text-uppercase">Nível Ouro em Cidadania</div>-->
                                    
                                    <p class="small text-gray-600">Membro desde Março de 2026</p>
                                    
                                   <!-- <button class="btn btn-outline-primary btn-sm mt-3"><i class="fas fa-camera mr-1"></i> Alterar Foto</button> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Informações Pessoais</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputNome" class="text-gray-800 font-weight-bold">Nome Completo</label>
                                                <input type="text" class="form-control" id="inputNome" value="(Nome do Usuário)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail" class="text-gray-800 font-weight-bold">E-mail</label>
                                                <input type="email" class="form-control" id="inputEmail" value="usuario@email.com">
                                            </div>
                                        </div>

                                        <hr class="mt-4 mb-4">
                                        <h6 class="font-weight-bold text-gray-800 mb-3">Segurança</h6>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputSenha">Nova Senha</label>
                                                <input type="password" class="form-control" id="inputSenha" placeholder="Digite a nova senha">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputConfirma">Confirmar Senha</label>
                                                <input type="password" class="form-control" id="inputConfirma" placeholder="Repita a senha">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <a href="perfil.php" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Salvar Alterações</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!--<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Fiscaliza AI &copy; No ar desde 202</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Confirmar" se você quer mesmo sair.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Confirmar</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>