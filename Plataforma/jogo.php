<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Simulador Educação Fiscal">
    <meta name="author" content="">

    <title>Jogo - A Jornada do Cidadão</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>

    <style>
        #game-container-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0f172a;
            border-radius: 10px;
            padding: 15px;
        }

        #game-window {
            width: 100%;
            max-width: 1000px;
            aspect-ratio: 16/9; /* Proporção de tela (padrão desktop) */
            max-height: 80vh; /* Impede que fique muito alto no desktop */
            background-color: #1e293b;
            border-radius: 15px; 
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            position: relative; 
            overflow: hidden; 
            display: flex; 
            flex-direction: column;
            border: 2px solid #1cc88a; /* Verde da Plataforma */
            user-select: none;
        }

        /* --- BACKGROUNDS --- */
        .bg-layer {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            transition: opacity 0.8s ease, background 0.8s ease; z-index: 1;
        }
        .bg-house { background: radial-gradient(circle at top left, #d4a373, #faedcd); }
        .bg-market { background: linear-gradient(135deg, #e0e0e0 25%, #f5f5f5 25%, #f5f5f5 50%, #e0e0e0 50%, #e0e0e0 75%, #f5f5f5 75%, #f5f5f5 100%); background-size: 40px 40px; }
        .bg-street { background: linear-gradient(to bottom, #7dd3fc 40%, #94a3b8 40%, #64748b 100%); }
        .bg-school { background: linear-gradient(to bottom, #1e293b, #0f172a); border-left: 100px solid #10b981; }
        .bg-hospital { background: linear-gradient(to bottom, #dcfce7, #bbf7d0); }
        .bg-townhall { background: radial-gradient(circle, #bfdbfe, #60a5fa); }
        .bg-bakery { background: linear-gradient(to bottom, #fde047, #fef08a); }
        .bg-end { background: linear-gradient(to bottom, #020617, #0f172a); }

        .overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 30%, rgba(0,0,0,0.95) 100%);
            z-index: 2;
        }

        /* --- HUD (CABEÇALHO) --- */
        #hud {
            position: relative; z-index: 10; display: flex; justify-content: space-between;
            align-items: center; padding: 10px 20px; background: rgba(15, 23, 42, 0.98);
            border-bottom: 2px solid #1cc88a; color: #f8fafc;
        }
        .stat { font-size: 1rem; font-weight: 800; display: flex; align-items: center; gap: 8px; }
        .chapter-badge { background: #1cc88a; color: #fff; padding: 3px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1px;}
        .money { color: #10b981; }
        .rep { color: #fbbf24; }

        /* Estilo para o botão de sair (que fica no HUD) */
        #btn-exit-fullscreen-hud {
            background: none; border: none; color: #fff; cursor: pointer; font-size: 1.2rem;
            opacity: 0.7; transition: opacity 0.2s;
        }
        #btn-exit-fullscreen-hud:hover { opacity: 1; }

        /* --- ÁREA DE INTERAÇÃO (DIÁLOGO) --- */
        #interaction-area {
            position: relative; z-index: 10; flex-grow: 1; display: flex;
            flex-direction: column; justify-content: flex-end; padding: 25px;
        }

        .dialogue-wrapper {
            display: flex; align-items: flex-end; gap: 20px; width: 100%;
        }

        #avatar-box {
            width: 100px; height: 100px; background: #e2e8f0;
            border-radius: 50%; border: 4px solid #fff;
            display: flex; justify-content: center; align-items: center;
            font-size: 3.5rem; flex-shrink: 0;
            box-shadow: 0 10px 25px rgba(0,0,0,0.6);
            z-index: 11;
        }

        .text-panel {
            flex-grow: 1; position: relative;
            background: rgba(30, 41, 59, 0.98); border: 2px solid #1cc88a;
            border-radius: 15px; padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            min-height: 110px;
        }

        #speaker-name {
            position: absolute; top: -15px; left: 20px;
            background: #1cc88a; color: #fff; padding: 5px 20px;
            border-radius: 10px; font-weight: 900; font-size: 1rem;
            text-transform: uppercase; letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        #dialogue-text {
            font-size: 1.15rem; line-height: 1.4; color: #f1f5f9;
        }

        /* --- BOTÕES DE ESCOLHA --- */
        #choices-area {
            display: flex; flex-direction: column; gap: 8px;
            margin-top: 15px; padding-left: 120px; /* Alinhamento com o texto no desktop */
            width: 100%;
        }

        .choice-btn {
            background: #334155; color: #f8fafc; border: 2px solid #64748b;
            padding: 12px 18px; border-radius: 10px; font-size: 1rem;
            font-weight: 700; cursor: pointer; transition: all 0.2s;
            text-align: left; display: flex; justify-content: space-between;
        }
        .choice-btn:hover { background: #1cc88a; color: #fff; border-color: #1cc88a; transform: translateX(8px); }

        /* ====================================================== */
        /* --- RESPONSIVIDADE (MEDIA QUERIES AGRESSIVAS) --- */
        /* ====================================================== */

        /* Tablets e Telas Médias (< 992px) */
        @media (max-width: 991px) {
            #game-window { aspect-ratio: auto; height: 60vh; }
            #dialogue-text { font-size: 1.05rem; }
            #avatar-box { width: 80px; height: 80px; font-size: 3rem; }
            #choices-area { padding-left: 100px; margin-top: 10px; }
            .choice-btn { padding: 10px 15px; font-size: 0.95rem; }
        }

        /* Celulares e Telas Pequenas (< 768px - MOBILE) */
        @media (max-width: 767px) {
            #game-container-wrapper { padding: 5px; background: none; }
            #game-window { 
                aspect-ratio: auto; height: 75vh; 
                border-radius: 10px; border-width: 1px; 
            }
            #hud { padding: 8px 12px; }
            .stat { font-size: 0.8rem; gap: 4px; }
            .chapter-badge { padding: 2px 8px; font-size: 0.75rem; }
            #interaction-area { padding: 15px; }
            #avatar-box { display: none; } /* OCULTA O AVATAR NO CELULAR */
            .text-panel { padding: 15px; min-height: 80px; }
            #speaker-name { font-size: 0.85rem; top: -12px; left: 10px; padding: 4px 15px; }
            #dialogue-text { font-size: 1rem; line-height: 1.3; }
            #choices-area { padding-left: 0; margin-top: 10px; } /* ESCOLHAS OCUPAM LARGURA TOTAL */
            .choice-btn { padding: 10px; font-size: 0.9rem; border-radius: 8px; }
        }

        /* ====================================================== */
        /* --- ESTILOS EXCLUSIVOS PARA TELA CHEIA (FULLSCREEN) --- */
        /* ====================================================== */
        :fullscreen #game-window {
            border: none; border-radius: 0; max-width: 100%; width: 100vw; height: 100vh;
        }
        :fullscreen #hud {
            padding: 15px 40px; border-bottom-width: 3px; font-size: 1.1rem;
        }
        :fullscreen #avatar-box { width: 140px; height: 140px; font-size: 5rem; }
        :fullscreen #dialogue-text { font-size: 1.5rem; line-height: 1.6; }
        :fullscreen .choice-btn { font-size: 1.3rem; padding: 18px 25px; }
    </style>

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal_cidadao.php">
                <div class="sidebar-brand-text mx-3"><img src="img/Fiscaliza_branco.png" alt="" width="60%"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="principal_cidadao.php"><i class="fas fa-fw fa-home"></i><span>Inicio</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Etapas</div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="videos.php"><i class="fas fa-fw fa-play-circle"></i><span>Vídeos</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="jogo.php"><i class="fas fa-fw fa-gamepad"></i><span>Jogo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="provas.php"><i class="fas fa-fw fa-file"></i><span>Provas e Simulados</span></a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    <ul class="navbar-nav ml-auto">
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
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Desafio Prático: O Jogo</h1>
                        
                        <button id="btn-start-fullscreen" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-play fa-sm text-white-50 mr-1"></i> Iniciar em Tela Cheia
                        </button>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-body p-0" id="game-container-wrapper">
                                    
                                    <div id="game-window">
                                        <div id="scene-bg" class="bg-layer bg-house"></div>
                                        <div class="overlay"></div>

                                        <div id="hud">
                                            <div class="d-flex gap-3 align-items-center">
                                                <div class="stat chapter-badge" id="ui-chapter">Capítulo 1</div>
                                                <div class="stat money">🎒 R$ <span id="ui-money">0,00</span></div>
                                                <div class="stat rep">⭐ <span id="ui-rep">0 pts</span></div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="stat d-none d-sm-block">📍 <span id="ui-location">Sua Casa</span></div>
                                                <button id="btn-exit-fullscreen-hud" title="Sair da Tela Cheia" style="display: none;">
                                                    <i class="fas fa-compress-arrows-alt"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div id="interaction-area">
                                            <div class="dialogue-wrapper">
                                                <div id="avatar-box">👩🏻</div>
                                                <div class="text-panel">
                                                    <div id="speaker-name">Mãe</div>
                                                    <div id="dialogue-text">Carregando história...</div>
                                                </div>
                                            </div>
                                            <div id="choices-area"></div>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        // Lógica de Tela Cheia (Fullscreen API)
        const gameWindow = document.getElementById('game-window');
        const btnStartFullscreen = document.getElementById('btn-start-fullscreen');
        const btnExitFullscreenHud = document.getElementById('btn-exit-fullscreen-hud');

        // Função genérica para entrar/sair de tela cheia
        function toggleFullscreen() {
            if (!document.fullscreenElement) {
                // Tenta entrar
                if (gameWindow.requestFullscreen) { gameWindow.requestFullscreen(); } 
                else if (gameWindow.webkitRequestFullscreen) { gameWindow.webkitRequestFullscreen(); } /* Safari */
                else if (gameWindow.msRequestFullscreen) { gameWindow.msRequestFullscreen(); } /* IE11 */
            } else {
                // Tenta sair
                if (document.exitFullscreen) { document.exitFullscreen(); }
            }
        }

        // Sincroniza o UI com o estado do fullscreen
        document.addEventListener('fullscreenchange', () => {
            if (document.fullscreenElement) {
                btnStartFullscreen.innerHTML = '<i class="fas fa-compress-arrows-alt fa-sm text-white-50 mr-1"></i> Sair da Tela Cheia';
                btnExitFullscreenHud.style.display = 'block'; // Mostra o botão interno
            } else {
                btnStartFullscreen.innerHTML = '<i class="fas fa-play fa-sm text-white-50 mr-1"></i> Iniciar em Tela Cheia';
                btnExitFullscreenHud.style.display = 'none'; // Esconde o botão interno
            }
        });

        // Eventos de clique nos botões
        btnStartFullscreen.addEventListener('click', toggleFullscreen);
        btnExitFullscreenHud.addEventListener('click', toggleFullscreen); // Botão interno chama a mesma lógica

        // --- ESTADO DO JOGO ---
        const state = {
            money: 0,
            rep: 0,
            hasReceipt: false
        };

        const uiChapter = document.getElementById('ui-chapter');
        const uiLocation = document.getElementById('ui-location');
        const uiMoney = document.getElementById('ui-money');
        const uiRep = document.getElementById('ui-rep');
        const sceneBg = document.getElementById('scene-bg');
        const avatarBox = document.getElementById('avatar-box');
        const speakerName = document.getElementById('speaker-name');
        const dialogueText = document.getElementById('dialogue-text');
        const choicesArea = document.getElementById('choices-area');

        function updateHUD() {
            uiMoney.innerText = `${state.money.toFixed(2)}`; // Corrigi o R$ para não duplicar
            uiRep.innerText = `${state.rep} pts`;
        }

        // --- HISTÓRIA (Copiada do seu código original) ---
        const story = {
            c1_start: {
                ch: "Capítulo 1", loc: "Sua Casa", bg: "bg-house", av: "👩🏻", name: "Mãe",
                text: "Filho(a), hoje é dia de feira. Toma R$ 50,00. Vai no mercado e compra os ingredientes do almoço. E não me venha sem a Nota Fiscal, ouviu? Isso é coisa séria!",
                choices: [
                    { text: "Pode deixar, mãe! Exigir a nota é meu direito.", action: () => { state.money += 50; state.rep += 5; go('c1_market'); } },
                    { text: "Tá, tá... peguei o dinheiro. Fui!", action: () => { state.money += 50; state.rep -= 2; go('c1_market'); } }
                ]
            },
            c1_market: {
                ch: "Capítulo 1", loc: "Supermercado", bg: "bg-market", av: "👨🏾‍💼", name: "Carlos (Caixa)",
                text: "Bom dia! Suas compras deram R$ 40,00. Vai querer CPF na nota para participar dos sorteios do estado e ajudar na arrecadação?",
                choices: [
                    { text: "Com certeza! Coloque meu CPF, por favor.", action: () => { state.money -= 40; state.hasReceipt = true; state.rep += 15; go('c1_market_good'); } },
                    { text: "Acho bobeira dar meu CPF. Me dê só a nota normal.", action: () => { state.money -= 40; state.hasReceipt = true; state.rep += 5; go('c1_market_ok'); } },
                    { text: "Não quero nota nenhuma. Fica com o troco.", action: () => { state.money -= 40; state.hasReceipt = false; state.rep -= 15; go('c1_market_bad'); } }
                ]
            },
            c1_market_good: {
                ch: "Capítulo 1", loc: "Supermercado", bg: "bg-market", av: "👨🏾‍💼", name: "Carlos (Caixa)",
                text: "Atitude de ouro! Com o imposto dessa compra, a prefeitura consegue investir em melhorias. Tenha um ótimo dia!",
                choices: [{ text: "Sair do mercado e voltar para casa.", action: () => go('c2_street') }]
            },
            c1_market_ok: {
                ch: "Capítulo 1", loc: "Supermercado", bg: "bg-market", av: "👨🏾‍💼", name: "Carlos (Caixa)",
                text: "Tudo bem, aqui está o seu cupom fiscal. O importante é que a venda foi registrada e o imposto será recolhido.",
                choices: [{ text: "Sair do mercado e voltar para casa.", action: () => go('c2_street') }]
            },
            c1_market_bad: {
                ch: "Capítulo 1", loc: "Supermercado", bg: "bg-market", av: "👨🏾‍💼", name: "Carlos (Caixa)",
                text: "Sério? Olha, sem a nota, não há garantia de que o dono do mercado vai repassar o imposto para o governo. Mas a escolha é sua...",
                choices: [{ text: "Dar de ombros e sair do mercado.", action: () => go('c2_street') }]
            },

            c2_street: {
                ch: "Capítulo 2", loc: "Rua Principal", bg: "bg-street", av: "💥", name: "Acidente",
                text: "No caminho de casa, você ouve um estrondo. Um carro acabou de quebrar a suspensão em um buraco gigante no meio do asfalto que não foi tapado.",
                choices: [
                    { text: "Ajudar o motorista e pensar sobre o asfalto.", action: () => go('c2_think') }
                ]
            },
            c2_think: {
                ch: "Capítulo 2", loc: "Rua Principal", bg: "bg-street", av: "🧠", name: "Seus Pensamentos",
                text: () => state.hasReceipt ? 
                    "Você pensa: 'Ainda bem que pedi a nota no mercado. O asfalto é consertado com o dinheiro do IPVA e do ICMS. Eu fiz a minha parte.'" : 
                    "Você sente um peso na consciência. 'Eu não pedi a nota hoje... Se todo mundo sonegar, a prefeitura nunca vai ter dinheiro pra tapar esse buraco.'",
                choices: [
                    { text: "Ir para casa dormir. Amanhã tem aula.", action: () => go('c3_school') }
                ]
            },

            c3_school: {
                ch: "Capítulo 3", loc: "Sala de Aula", bg: "bg-school", av: "👩🏽‍🏫", name: "Profª Helena",
                text: "Bom dia, turma! Ontem vimos a importância dos tributos. Quem aqui acha que cobrar impostos é algo ruim e desnecessário?",
                choices: [
                    { text: "Levantar a mão e dizer que o dinheiro é roubado.", action: () => { state.rep -= 10; go('c3_school_argue'); } },
                    { text: "Dizer que os impostos são essenciais para manter o país.", action: () => { state.rep += 15; go('c3_school_praise'); } }
                ]
            },
            c3_school_argue: {
                ch: "Capítulo 3", loc: "Sala de Aula", bg: "bg-school", av: "👩🏽‍🏫", name: "Profª Helena",
                text: "Compreendo sua frustração com a política, mas o imposto em si não é o vilão. Sem ele, não teríamos a polícia, essa escola pública, nem o SUS. Sonegar não é protesto, é prejudicar a si mesmo.",
                choices: [{ text: "Ouvir com atenção e aprender.", action: () => go('c4_hospital') }]
            },
            c3_school_praise: {
                ch: "Capítulo 3", loc: "Sala de Aula", bg: "bg-school", av: "👩🏽‍🏫", name: "Profª Helena",
                text: "Perfeito! A Constituição diz que o tributo tem função social. Pagamos impostos para garantir que os direitos básicos cheguem a todos, especialmente aos mais pobres.",
                choices: [{ text: "Anotar a matéria orgulhoso.", action: () => go('c4_hospital') }]
            },

            c4_hospital: {
                ch: "Capítulo 4", loc: "Hospital Municipal", bg: "bg-hospital", av: "🏥", name: "Recepção",
                text: "Após a aula, você vai visitar seu avô que torceu o pé e está na UPA. A unidade está cheia, mas ele já está sendo atendido em uma máquina de Raio-X novinha.",
                choices: [
                    { text: "Conversar com o enfermeiro de plantão.", action: () => go('c4_nurse') }
                ]
            },
            c4_nurse: {
                ch: "Capítulo 4", loc: "Hospital Municipal", bg: "bg-hospital", av: "👨🏻‍⚕️", name: "Enfermeiro",
                text: "Seu avô está bem! Essa máquina de Raio-X chegou semana passada. Foi comprada com a verba do 'Nota Cidadã'. O pessoal pedindo CPF na nota salvou a nossa emergência.",
                choices: [
                    { text: "Ficar feliz por ver o imposto funcionando.", action: () => { state.rep += 10; go('c5_bakery'); } }
                ]
            },

            c5_bakery: {
                ch: "Capítulo 5", loc: "Padaria do Bairro", bg: "bg-bakery", av: "🧑🏽", name: "João (Amigo)",
                text: "Ei! No caminho de casa, você passa na nova padaria do seu amigo João. 'E aí! Abri meu negócio, mas decidi não emitir nota fiscal pra ninguém. Vou lucrar o dobro enganando o fisco!'",
                choices: [
                    { text: "Avisar que isso é crime de sonegação e pode fechar a padaria.", action: () => { state.rep += 20; go('c5_bakery_good'); } },
                    { text: "Achar a ideia genial e pedir pão de graça.", action: () => { state.rep -= 25; go('c5_bakery_bad'); } }
                ]
            },
            c5_bakery_good: {
                ch: "Capítulo 5", loc: "Padaria do Bairro", bg: "bg-bakery", av: "🧑🏽", name: "João (Amigo)",
                text: "Sério? Eu não sabia que era crime... Achei que era só um jeito de economizar. Vou procurar um contador amanhã mesmo para legalizar tudo. Valeu pelo conselho, me salvou!",
                choices: [{ text: "Despedir-se e ir para a Prefeitura.", action: () => go('c6_townhall') }]
            },
            c5_bakery_bad: {
                ch: "Capítulo 5", loc: "Padaria do Bairro", bg: "bg-bakery", av: "🧑🏽", name: "João (Amigo)",
                text: "Né? Os bobos que paguem imposto! Toma aqui um pão de queijo por minha conta. (Você acaba de apoiar um sonegador e prejudicar o bairro).",
                choices: [{ text: "Comer o pão e ir para a Prefeitura.", action: () => go('c6_townhall') }]
            },

            c6_townhall: {
                ch: "Capítulo 6", loc: "Prefeitura", bg: "bg-townhall", av: "👨🏽‍💼", name: "Prefeito",
                text: "No dia seguinte, tem uma audiência pública na Prefeitura. Você levanta a mão para falar no microfone. O que você pergunta ao Prefeito?",
                choices: [
                    { text: "Cobrar o conserto do buraco na rua principal.", action: () => { state.rep += 15; go('c6_mayor_answer'); } },
                    { text: "Perguntar onde está publicado os gastos da cidade.", action: () => { state.rep += 25; go('c6_mayor_answer'); } },
                    { text: "Gritar xingamentos e ir embora.", action: () => { state.rep -= 30; go('ending'); } }
                ]
            },
            c6_mayor_answer: {
                ch: "Capítulo 6", loc: "Prefeitura", bg: "bg-townhall", av: "👨🏽‍💼", name: "Prefeito",
                text: "Cidadão, você está corretíssimo em cobrar! A obra da rua começa amanhã, e todos os nossos gastos estão no Portal da Transparência na internet. É um orgulho ver jovens como você fiscalizando!",
                choices: [{ text: "Agradecer e concluir sua jornada.", action: () => go('ending') }]
            },

            ending: {
                ch: "FIM", loc: "Seu Quarto", bg: "bg-end", av: "🏆", name: "O Resultado",
                text: () => generateEndingText(),
                choices: [{ text: "Jogar Novamente 🔄", action: () => location.reload() }]
            }
        };

        function generateEndingText() {
            if (state.rep >= 80) {
                return "🥇 CIDADÃO DIAMANTE: Incrível! Você entende que pedir nota, combater a sonegação e fiscalizar prefeitos é o que constrói um país de verdade. Você transformou sua cidade!";
            } else if (state.rep >= 30) {
                return "🥈 CIDADÃO PRATA: Você tem noção da importância dos impostos, mas cometeu alguns deslizes. Lembre-se: não há educação e saúde sem arrecadação justa.";
            } else {
                return "🚩 ALERTA VERMELHO: Você ignorou a nota fiscal e apoiou a sonegação. Quando a rua não for asfaltada e o hospital fechar as portas, você saberá de quem é a culpa. Precisa estudar mais!";
            }
        }

        // --- MOTOR DA VISUAL NOVEL ---
        let typingTimeout;

        function go(nodeId) {
            const node = story[nodeId];
            
            uiChapter.innerText = node.ch;
            uiLocation.innerText = node.loc;
            sceneBg.className = `bg-layer ${node.bg}`;
            avatarBox.innerText = node.av;
            speakerName.innerText = node.name;
            
            let textToShow = typeof node.text === 'function' ? node.text() : node.text;

            clearTimeout(typingTimeout);
            dialogueText.innerHTML = "";
            choicesArea.innerHTML = "";
            
            let i = 0;
            function typeWriter() {
                if (i < textToShow.length) {
                    dialogueText.innerHTML += textToShow.charAt(i);
                    i++;
                    typingTimeout = setTimeout(typeWriter, 15); // Texto um pouquinho mais rápido para celular
                } else {
                    node.choices.forEach(c => {
                        const btn = document.createElement('button');
                        btn.className = 'choice-btn';
                        btn.innerHTML = `<span>${c.text}</span> <span>▶</span>`;
                        btn.onclick = () => { c.action(); updateHUD(); };
                        choicesArea.appendChild(btn);
                    });
                }
            }
            typeWriter();
            updateHUD();
        }

        // Inicia o Jogo
        updateHUD();
        go('c1_start');

    </script>
</body>
</html>