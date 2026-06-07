<?php require 'trava.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gestão de Usuários - Fiscalize Aí">
    <meta name="author" content="">

    <title>Usuários - Painel do Gerenciador</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal_gerenciador.php">
                <div class="sidebar-brand-text mx-3"><img src="img/Fiscaliza_branco.png" alt="" width="60%"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="principal_gerenciador.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Painel Geral</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Gestão de Dados</div>
            <li class="nav-item active">
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
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar por nome ou escola..." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fas fa-search fa-sm"></i></button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">(Nome do Gestor)</span>
                                <img class="img-profile rounded-circle" src="img/perfil.png">
                            </a>
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

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Lista de Usuários Cadastrados</h1>
                        <a href="#" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-plus fa-sm text-white-50 mr-1"></i> Adicionar Novo Usuário</a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cidadãos e Estudantes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr class="text-gray-800">
                                            <th>Nome do Cidadão</th>
                                            <th class="text-center">Progresso</th>
                                            <th class="text-center">Média Geral</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle mr-2" src="img/perfil.png" width="35">
                                                    <span class="font-weight-bold">Maria Silva</span>
                                                </div>
                                            </td>
                                            <td class="align-middle" style="min-width: 150px;">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto mr-2 small font-weight-bold text-gray-800">100%</div>
                                                    <div class="col">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle font-weight-bold">9.5</td>
                                            <td class="text-center align-middle"><span class="badge badge-success p-2">Concluiu</span></td>
                                            <td class="text-center align-middle">
                                                <a href="detalhes_usuario.php" class="btn btn-sm btn-info" title="Ver Detalhes"><i class="fas fa-eye"></i></a></i></button>
                                                <button class="btn btn-danger btn-sm" title="Remover"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle mr-2" src="img/perfil.png" width="35">
                                                    <span class="font-weight-bold">João Pedro</span>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto mr-2 small font-weight-bold text-gray-800">45%</div>
                                                    <div class="col">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 45%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle font-weight-bold">7.2</td>
                                            <td class="text-center align-middle"><span class="badge badge-info p-2 text-white">Estudando</span></td>
                                            <td class="text-center align-middle">
                                                <a href="detalhes_usuario.php" class="btn btn-sm btn-info" title="Ver Detalhes"><i class="fas fa-eye"></i></a></i></button>
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle mr-2" src="img/perfil.png" width="35">
                                                    <span class="font-weight-bold">Ana Beatriz</span>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto mr-2 small font-weight-bold text-gray-800">10%</div>
                                                    <div class="col">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle font-weight-bold">--</td>
                                            <td class="text-center align-middle"><span class="badge badge-warning p-2 text-white">Inativo</span></td>
                                            <td class="text-center align-middle">
                                                <a href="detalhes_usuario.php" class="btn btn-sm btn-info" title="Ver Detalhes"><i class="fas fa-eye"></i></a></i></button>
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>