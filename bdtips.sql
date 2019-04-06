-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2018 às 23:26
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdtips`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalunos`
--

CREATE TABLE `tbalunos` (
  `cod_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(30) NOT NULL,
  `login_aluno` varchar(20) NOT NULL,
  `senha_aluno` varchar(20) NOT NULL,
  `cpf_aluno` varchar(14) NOT NULL,
  `turma_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbalunos`
--

INSERT INTO `tbalunos` (`cod_aluno`, `nome_aluno`, `login_aluno`, `senha_aluno`, `cpf_aluno`, `turma_aluno`) VALUES
(1, 'Flávio', 'flaviohugo14', 'bohemian', '105.067.706-83', 3),
(2, 'Paulo Emílio', 'paulop', 'mercury', '105.168.707-84', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbexercicios`
--

CREATE TABLE `tbexercicios` (
  `cod_exercicio` int(11) NOT NULL,
  `unidade` varchar(2) NOT NULL,
  `pagina` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_audio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbexercicios`
--

INSERT INTO `tbexercicios` (`cod_exercicio`, `unidade`, `pagina`, `total`, `nome`, `id_audio`) VALUES
(1, '1', '21', 10, 'Exercise 1', 3),
(2, '2', '35', 8, 'Exercise 2', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbresultados`
--

CREATE TABLE `tbresultados` (
  `cod_aluno` int(11) NOT NULL,
  `cod_exercicio` int(11) NOT NULL,
  `acertos` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `cod_registro` int(11) NOT NULL,
  `erros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbresultados`
--

INSERT INTO `tbresultados` (`cod_aluno`, `cod_exercicio`, `acertos`, `data`, `cod_registro`, `erros`) VALUES
(1, 1, 10, '07/06/2018', 1, 0),
(1, 2, 5, '07/06/2018', 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbturmas`
--

CREATE TABLE `tbturmas` (
  `cod_turma` int(11) NOT NULL,
  `turma` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbturmas`
--

INSERT INTO `tbturmas` (`cod_turma`, `turma`) VALUES
(1, '1°B'),
(2, '2°E'),
(3, '3°E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbalunos`
--
ALTER TABLE `tbalunos`
  ADD PRIMARY KEY (`cod_aluno`),
  ADD KEY `turma_aluno` (`turma_aluno`);

--
-- Indexes for table `tbexercicios`
--
ALTER TABLE `tbexercicios`
  ADD PRIMARY KEY (`cod_exercicio`),
  ADD KEY `id_audio` (`id_audio`);

--
-- Indexes for table `tbresultados`
--
ALTER TABLE `tbresultados`
  ADD PRIMARY KEY (`cod_registro`),
  ADD KEY `cod_aluno` (`cod_aluno`,`cod_exercicio`),
  ADD KEY `cod_exercicio` (`cod_exercicio`);

--
-- Indexes for table `tbturmas`
--
ALTER TABLE `tbturmas`
  ADD PRIMARY KEY (`cod_turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbalunos`
--
ALTER TABLE `tbalunos`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbexercicios`
--
ALTER TABLE `tbexercicios`
  MODIFY `cod_exercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbresultados`
--
ALTER TABLE `tbresultados`
  MODIFY `cod_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbturmas`
--
ALTER TABLE `tbturmas`
  MODIFY `cod_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbalunos`
--
ALTER TABLE `tbalunos`
  ADD CONSTRAINT `tbalunos_ibfk_1` FOREIGN KEY (`turma_aluno`) REFERENCES `tbturmas` (`cod_turma`);

--
-- Limitadores para a tabela `tbresultados`
--
ALTER TABLE `tbresultados`
  ADD CONSTRAINT `tbresultados_ibfk_1` FOREIGN KEY (`cod_aluno`) REFERENCES `tbalunos` (`cod_aluno`),
  ADD CONSTRAINT `tbresultados_ibfk_2` FOREIGN KEY (`cod_exercicio`) REFERENCES `tbexercicios` (`cod_exercicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
