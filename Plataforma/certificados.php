<?php require 'trava.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Certificados Emitidos - Fiscalize Aí">
    <meta name="author" content="">

    <title>Certificados - Painel do Gerenciador</title>

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
            <li class="nav-item active">
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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por código de autenticação..." aria-label="Search">
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
                        <h1 class="h3 mb-0 text-gray-800">Controle de Certificados Emitidos</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total de Emissões (2026)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">430 Certificados</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-certificate fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Carga Horária Total Certificada</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">8.600 Horas</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clock fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Validação de Autenticidade</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">100% Seguros</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-shield-alt fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Registro Oficial de Emissões</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" width="100%" cellspacing="0">
                                    <thead class="bg-light text-gray-800">
                                        <tr>
                                            <th>Nome do Cidadão</th>
                                            <th>Data de Conclusão</th>
                                            <th>Nota Final</th>
                                            <th>Código de Autenticação</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle font-weight-bold">Maria Silva</td>
                                            <td class="align-middle">25/10/2026</td>
                                            <td class="align-middle text-success font-weight-bold">9.5</td>
                                            <td class="align-middle"><code class="text-dark bg-gray-200 px-2 py-1 rounded">FIS-2026-A8F9</code></td>
                                            <td class="align-middle">
                                                <button class="btn btn-sm btn-success" title="Baixar PDF"><i class="fas fa-file-pdf"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">Carlos Magno</td>
                                            <td class="align-middle">22/10/2026</td>
                                            <td class="align-middle text-success font-weight-bold">8.8</td>
                                            <td class="align-middle"><code class="text-dark bg-gray-200 px-2 py-1 rounded">FIS-2026-B1C4</code></td>
                                            <td class="align-middle">
                                                <button class="btn btn-sm btn-success" title="Baixar PDF"><i class="fas fa-file-pdf"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle font-weight-bold">Fernanda Souza</td>
                                            <td class="align-middle">15/10/2026</td>
                                            <td class="align-middle text-success font-weight-bold">10.0</td>
                                            <td class="align-middle"><code class="text-dark bg-gray-200 px-2 py-1 rounded">FIS-2026-X7Y2</code></td>
                                            <td class="align-middle">
                                                <button class="btn btn-sm btn-success" title="Baixar PDF"><i class="fas fa-file-pdf"></i></button>
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