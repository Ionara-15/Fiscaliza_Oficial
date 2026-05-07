-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Abr-2026 às 15:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fiscaliza_ai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados`
--

CREATE TABLE `certificados` (
  `id` int(11) NOT NULL,
  `codigo_autenticação` int(11) NOT NULL,
  `data_emissao` date NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `concluido` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `jogadas` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta_base`
--

CREATE TABLE `pergunta_base` (
  `id` int(11) NOT NULL,
  `resposta1` varchar(200) NOT NULL,
  `resposta2` varchar(200) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descrição` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id` int(11) NOT NULL,
  `enunciado` varchar(500) NOT NULL,
  `a` varchar(400) NOT NULL,
  `b` varchar(400) NOT NULL,
  `c` varchar(400) NOT NULL,
  `resposta_certa` varchar(500) NOT NULL,
  `id_prova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado_provas`
--

CREATE TABLE `resultado_provas` (
  `id` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `id_provas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_videos`
--

CREATE TABLE `status_videos` (
  `id` int(11) NOT NULL,
  `n_videos` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descrição` varchar(600) NOT NULL,
  `url_arquivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuarios`);

--
-- Índices para tabela `pergunta_base`
--
ALTER TABLE `pergunta_base`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Índices para tabela `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prova` (`id_prova`);

--
-- Índices para tabela `resultado_provas`
--
ALTER TABLE `resultado_provas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_provas` (`id_provas`);

--
-- Índices para tabela `status_videos`
--
ALTER TABLE `status_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pergunta_base`
--
ALTER TABLE `pergunta_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `provas`
--
ALTER TABLE `provas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultado_provas`
--
ALTER TABLE `resultado_provas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `status_videos`
--
ALTER TABLE `status_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `certificados`
--
ALTER TABLE `certificados`
  ADD CONSTRAINT `id_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `pergunta_base`
--
ALTER TABLE `pergunta_base`
  ADD CONSTRAINT `pergunta_base_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `questoes_ibfk_1` FOREIGN KEY (`id_prova`) REFERENCES `provas` (`id`);

--
-- Limitadores para a tabela `resultado_provas`
--
ALTER TABLE `resultado_provas`
  ADD CONSTRAINT `resultado_provas_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `resultado_provas_ibfk_2` FOREIGN KEY (`id_provas`) REFERENCES `provas` (`id`);

--
-- Limitadores para a tabela `status_videos`
--
ALTER TABLE `status_videos`
  ADD CONSTRAINT `status_videos_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
