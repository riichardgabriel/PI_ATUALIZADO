-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/07/2024 às 16:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_pcprevenido`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `ID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`ID`, `nome`, `preco`, `descricao`) VALUES
(1, 'Manutenção Preventiva', 120, 'A manutenção preventiva em hardware envolve a realização de procedimentos regulares para evitar falhas e prolongar a vida útil dos equipamentos. Isso inclui a limpeza física interna e externa do computador, verificação e eventual substituição de componentes como ventiladores e cabos, além da aplicação de atualizações de firmware e software essenciais para o funcionamento estável do sistema.'),
(3, 'Instalação', 60, 'Este serviço consiste na instalação e configuração de programas e sistemas operacionais em computadores. Inclui a preparação do ambiente, instalação dos softwares necessários conforme as necessidades do usuário ou da empresa, e garantia de que todos os drivers e atualizações estejam corretamente configurados para o funcionamento adequado do sistema.'),
(4, 'Montagem de Computador', 150, 'A montagem de computador envolve a seleção e conexão de todos os componentes necessários para construir um sistema funcional. Isso inclui a instalação da placa-mãe, processador, memória RAM, placa de vídeo, armazenamento, fonte de alimentação, além da montagem física dentro do gabinete, garantindo compatibilidade entre os componentes e seguindo padrões de segurança e eficiência.'),
(5, 'Formatação', 100, 'A formatação é o processo de apagar completamente o conteúdo do disco rígido de um computador e reinstalar o sistema operacional do zero. Esse serviço é útil para resolver problemas graves de software, como vírus persistentes, erros de sistema, ou para preparar um computador para ser vendido ou doado, restaurando-o às configurações de fábrica.'),
(6, 'Conserto/Reparo', 120, 'Este serviço abrange diagnóstico e resolução de problemas de hardware e software em computadores e notebooks. Inclui desde a troca de componentes defeituosos como placas-mãe, memória, ou telas, até a correção de erros de software, recuperação de dados perdidos, e ajustes finos para otimização de desempenho. É essencial para manter os dispositivos funcionando de forma eficiente e prolongar sua vida útil.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
