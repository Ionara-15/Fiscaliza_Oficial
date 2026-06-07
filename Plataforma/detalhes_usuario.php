<?php require 'trava.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Detalhes do Usuário - Fiscalize Aí">
    <meta name="author" content="">

    <title>Perfil do Aluno - Painel do Gerenciador</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Boletim Individual</h1>
                        <a href="usuarios.php" class="btn btn-sm btn-secondary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50 mr-1"></i> Voltar para Lista</a>
                    </div>

                    <div class="row">

                        <div class="col-xl-4 col-lg-5">
                            
                            <div class="card shadow mb-4">
                                <div class="card-body text-center py-4">
                                    <img class="img-profile rounded-circle mb-3 border border-4 border-success" src="img/perfil.png" style="width: 120px; height: 120px; object-fit: cover;">
                                    <h4 class="font-weight-bold text-gray-900 mb-1">Maria Silva</h4>
                                    <div class="badge badge-success px-3 py-2 mb-3">Status: Concluído</div>
                                    
                                    <hr>
                                    
                                    <div class="row text-center mt-3">
                                        <div class="col-6 border-right">
                                            <div class="h5 font-weight-bold mb-0 text-gray-800">9.5</div>
                                            <span class="small text-muted">Média Geral</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h5 font-weight-bold mb-0 text-gray-800">850</div>
                                            <span class="small text-muted">Pontos (XP)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4 border-bottom-info">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-gamepad mr-2"></i>Desempenho no Simulador</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small text-gray-600 mb-2">Como a aluna se saiu no jogo prático de decisões fiscais:</p>
                                    <h4 class="small font-weight-bold">Reputação de Cidadania <span class="float-right text-info">Nível Diamante</span></h4>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-check text-success mr-2"></i>Exigiu Nota Fiscal no mercado</li>
                                        <li><i class="fas fa-check text-success mr-2"></i>Denunciou sonegação da padaria</li>
                                        <li><i class="fas fa-check text-success mr-2"></i>Cobra transparência do prefeito</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8 col-lg-7">
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file-alt mr-2"></i>Histórico de Provas e Simulados</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" width="100%" cellspacing="0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>Avaliação</th>
                                                    <th>Data de Envio</th>
                                                    <th>Nota</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left font-weight-bold">Simulado 1</td>
                                                    <td>10/10/2026</td>
                                                    <td class="text-info font-weight-bold">8.0</td>
                                                    <td><i class="fas fa-check-circle text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left font-weight-bold">Prova 1 (Módulos 1 ao 3)</td>
                                                    <td>15/10/2026</td>
                                                    <td class="text-primary font-weight-bold">9.5</td>
                                                    <td><i class="fas fa-check-circle text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left font-weight-bold">Simulado 2</td>
                                                    <td>22/10/2026</td>
                                                    <td class="text-info font-weight-bold">10.0</td>
                                                    <td><i class="fas fa-check-circle text-success"></i></td>
                                                </tr>
                                                <tr class="bg-light">
                                                    <td class="text-left font-weight-bold text-success">Prova Final de Conclusão</td>
                                                    <td>25/10/2026</td>
                                                    <td class="text-success font-weight-bold">9.5</td>
                                                    <td><i class="fas fa-award text-success"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-play-circle mr-2"></i>Módulos Assistidos</h6>
                                </div>
                                <div class="card-body">
                                    <p class="text-gray-600 mb-4">Progresso detalhado do consumo dos vídeos educativos:</p>
                                    
                                    <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                                        <div class="bg-success text-white rounded-circle mr-3 d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                                            <i class="fas fa-check small"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="font-weight-bold mb-0 text-gray-800">Módulo 1: O que é Educação Fiscal?</h6>
                                            <span class="small text-muted">Assistido 100%</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                                        <div class="bg-success text-white rounded-circle mr-3 d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                                            <i class="fas fa-check small"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="font-weight-bold mb-0 text-gray-800">Módulo 2: Importância da Nota Fiscal</h6>
                                            <span class="small text-muted">Assistido 100%</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-success text-white rounded-circle mr-3 d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                                            <i class="fas fa-check small"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="font-weight-bold mb-0 text-gray-800">Módulo 3: Transparência e Gastos</h6>
                                            <span class="small text-muted">Assistido 100%</span>
                                        </div>
                                    </div>

                                </div>
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