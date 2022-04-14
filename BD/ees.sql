-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/12/2021 às 23:32
-- Versão do servidor: 10.4.20-MariaDB
-- Versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ees`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `nome_empresa`, `cpf_cnpj`, `endereco`, `numero`, `bairro`, `cep`, `telefone`, `celular`, `site`, `observacoes`, `data_cadastro`) VALUES
(2, 'Marcel da silva', 'Marcel Construções LTDA', '333.333.333-11bb', 'Rua Franciscooo', '22222', 'Nova Cidade3e', '08012-211eee', '(11) 9432-1230', '(11) 9332-2110', 'www.marcelconstrucoes.com.br//', 'Marcel é cliente TOPeeee', '2021-11-22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servico` int(11) NOT NULL,
  `titulo_servico` varchar(255) NOT NULL,
  `objetivo` varchar(255) NOT NULL,
  `tituloItem2` text NOT NULL,
  `descricaoItem2` text NOT NULL,
  `tituloItem3` text NOT NULL,
  `descricaoItem3` text NOT NULL,
  `data_execucao` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `pecas_materiais` text NOT NULL,
  `condicoes_pagamento` varchar(255) NOT NULL,
  `tabela_hh` text NOT NULL,
  `tipo_servico` varchar(255) NOT NULL,
  `status_servico` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id_servico`, `titulo_servico`, `objetivo`, `tituloItem2`, `descricaoItem2`, `tituloItem3`, `descricaoItem3`, `data_execucao`, `preco`, `pecas_materiais`, `condicoes_pagamento`, `tabela_hh`, `tipo_servico`, `status_servico`, `data_cadastro`) VALUES
(11, 'Laudos', 'Objetivo ', 'pra mostrar pra pretinha que eu sou top,a mais 2,a mais 3,a mais 3,a mais item 4,a mais item 5', 'Desc,a mais 2\r\n,a mais 3,a mais 3,a mais item 4,a mais item 5', 'Esse só vai ter 1,a mais item 2', 'Descrição 1,a mais item 2', 'Esse serviço sera feito dia 11/11/2023', 'R$ 30.000,00', 'Peça 1\r\nPeça 2\r\nPeça 3', 'Pagar a primeira até dia 01/01/2023', 'a\r\na\r\na\r\na\r\na\r\n', '2', '1', '2021-11-24'),
(13, 'Nova Proposta', 'Teste', 'Esse é o primeiro Títuloyyyy,Esse é o segundo titulo 2,Esse é o terceiro titulo 2,item a mais 3,item a mais 4', 'Essa é a primeira descrição 2,Essa é a segunda descrição 2,Esse é o terceiro descrição 2,item a mais 3,item a mais 4', 'Esse é a primeiro titulo 3', 'Essa é a primeira descrição 3', 'Esse serviço sera feito dia 02/11/2023', 'R$ 4.500,00', 'PEças ', 'Pagar a primeira até dia 01/01/2023', 'Eita', '3', '1', '2021-12-13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `nivel_acesso` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `usuario`, `senha`, `data_cadastro`, `nivel_acesso`) VALUES
(5, 'Matheus de Souza Pereira', 'matheus.pereira', 'MTIzNDU2Nzg=', '2021-12-07', '1'),
(7, 'Murilo de Souza', 'murilo.souza', 'MTIzNDU2Nzg=', '2021-12-08', '2'),
(9, 'Elizeu', 'elizeu.admin', 'RWxpemV1QDIwMjE=', '2021-12-22', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
