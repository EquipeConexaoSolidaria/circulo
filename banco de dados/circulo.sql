-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2022 às 07:12
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
-- Banco de dados: `circulo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `idDoacao` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descricao_item` varchar(45) NOT NULL,
  `status_doacao` varchar(20) NOT NULL,
  `unidade_item` varchar(10) NOT NULL,
  `quantidade_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `idDoador` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`idDoador`, `nome`, `email`, `senha`) VALUES
(1, 'Taís', 'taisbarbosarodrigues2004@gmail.com', 'sdfeytf'),
(2, 'Taís Rodrigues', 'taisbarbosarodrigues2004@gmail.com', 'hfth'),
(3, 'Taís Rodrigues', 'taisbarbosarodrigues2004@gmail.com', '4444'),
(4, 'Ana', 'ana@gmail.com', '5555555'),
(5, 'Ana', 'ana@gmail.com', '1212121'),
(6, 'Ana', 'ana@gmail.com', '1256666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idInstituicao` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(11) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `endereco2` varchar(255) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `diasSemanais` varchar(45) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `horario2` int(11) NOT NULL,
  `horario3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idInstituicao`, `nome`, `cnpj`, `senha`, `endereco`, `endereco2`, `cidade`, `estado`, `diasSemanais`, `horario`, `horario2`, `horario3`) VALUES
(1, 'tatata', '1234', '12345', 'rua da alegria', 'endereco2', 'endereco3', 'SP', '$this->dias', '10', 0, 0),
(2, 'tataata', '', '1234', 'fdsfd', '', 'atibaia', 'Piauí', ' domingo segunda terca', '19:23', 0, 0),
(3, 'tataata', '', '1234', 'fdsfd', '', 'atibaia', 'Piauí', ' domingo segunda terca', '19:23', 0, 0),
(4, 'Asilo', '', '123', 'Rua da felicidae', '', 'Bragança Paulista', 'São Paulo', ' segunda terca', '12:00', 0, 0),
(5, 'Asilo', '', '123', 'Rua da felicidae', '', 'Bragança Paulista', 'São Paulo', ' segunda terca', '12:00', 0, 0),
(6, 'Asilo', '', '123', 'Rua da felicidae', '', 'Bragança Paulista', 'São Paulo', ' segunda terca', '12:00', 0, 0),
(7, 'Asilo', '', '123', 'Rua da felicidae', '', 'Bragança Paulista', 'São Paulo', ' segunda terca', '12:00', 0, 0),
(8, 'Asilo', '', '123', 'Rua da felicidae', '', 'Bragança Paulista', 'São Paulo', ' segunda terca', '12:00', 0, 0),
(9, 'Asilo', '', '123', 'Rua da felicidae', '', 'Bragança Paulista', 'São Paulo', ' segunda terca', '12:00', 0, 0),
(10, 'Paróquia São Pedro', '', '1234', 'Rua martins', '', 'Atibaia', 'São Paulo', ' domingo segunda', '22:48', 0, 0),
(11, 'Paróquia São Pedro', '', '1234', 'Rua martins', '', 'Atibaia', 'São Paulo', ' domingo segunda', '22:48', 0, 0),
(12, 'asilo', '', '12121', 'flores', '', 'atibaia', 'Ceará', ' domingo segunda', '13:13', 0, 0),
(13, 'Oi', '', 'sdasf', 'sdbhasjlbf', 'cv,mcv,cxv,mcxv,.', 'Atibaia', 'São Paulo', ' quarta', '20:30', 0, 0),
(14, 'Canil', '', '1234', '300 Rua China', '300 Rua China', 'Atibaia', 'São Paulo', ' segunda', '23:59', 0, 0),
(15, 'Casa dos amigos', '', '1234', 'Rua dos amigos', 'Rua dos outros amigos', 'Bragança Paulista', 'Piauí', ' segunda', '18:43', 0, 0),
(16, 'Canil', '', '3455', '300 Rua China', '300 Rua China', 'Atibaia', 'São Paulo', ' segunda terca', '13:00', 0, 0),
(17, 'Canil', '', '2344444', '300 Rua China', '300 Rua China', 'Atibaia', 'São Paulo', ' quarta', '13:00', 0, 0),
(18, 'Canil', '', '4555666', '300 Rua China', '300 Rua China', 'Atibaia', 'São Paulo', ' domingo terca', '12:00', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensdoacao`
--

CREATE TABLE `itensdoacao` (
  `idItensDoacao` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `unidade` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`idDoacao`);

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`idDoador`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idInstituicao`);

--
-- Índices para tabela `itensdoacao`
--
ALTER TABLE `itensdoacao`
  ADD PRIMARY KEY (`idItensDoacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `idDoacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `idDoador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `itensdoacao`
--
ALTER TABLE `itensdoacao`
  MODIFY `idItensDoacao` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
