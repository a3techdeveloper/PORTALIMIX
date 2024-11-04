-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/04/2024 às 10:11
-- Versão do servidor: 10.5.20-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_imix`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`id_admin`, `user`, `pass`) VALUES
(1, 'professor', 'ahrm1978@');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horario`
--

CREATE TABLE `horario` (
  `id_class` int(11) NOT NULL,
  `class` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `horario`
--

INSERT INTO `horario` (`id_class`, `class`) VALUES
(1, 'seg-qua-07:30'),
(2, 'seg-qua-08:30'),
(3, 'seg-qua-09:30'),
(4, 'seg-qua-10:30'),
(5, 'seg-qua-11:30'),
(6, 'seg-qua-12:30'),
(7, 'seg-qua-13:30'),
(8, 'seg-qua-14:30'),
(9, 'seg-qua-15:30'),
(10, 'seg-qua-16:30'),
(11, 'seg-qua-17:30'),
(12, 'seg-qua-18:30'),
(13, 'ter-qui-07:30'),
(14, 'ter-qui-08:30'),
(15, 'ter-qui-09:30'),
(16, 'ter-qui-10:30'),
(17, 'ter-qui-11:30'),
(18, 'ter-qui-12:30'),
(19, 'ter-qui-13:30'),
(20, 'ter-qui-14:30'),
(21, 'ter-qui-15:30'),
(22, 'ter-qui-16:30'),
(23, 'ter-qui-17:30'),
(24, 'ter-qui-18:30'),
(25, 'sex-07:30'),
(26, 'sex-09:00'),
(27, 'sex-10:30'),
(28, 'sex-12:00'),
(29, 'sex-13:30'),
(30, 'sex-15:00'),
(31, 'sex-16:30'),
(32, 'sex-18:00'),
(33, 'sáb-07:30'),
(34, 'sáb-09:00'),
(35, 'sáb-10:30'),
(36, 'sáb-12:00'),
(37, 'sáb-13:30'),
(38, 'sáb-15:00'),
(39, 'sáb-16:30'),
(40, 'sáb-18:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modulo`
--

CREATE TABLE `modulo` (
  `id_modulo` int(11) NOT NULL,
  `modulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `modulo`
--

INSERT INTO `modulo` (`id_modulo`, `modulo`) VALUES
(1, 'IPD/Windows'),
(2, 'Word'),
(3, 'Excel'),
(4, 'PowerPoint'),
(5, 'Internet/Mídias Sociais'),
(6, 'CorelDraw'),
(7, 'Photoshop'),
(8, 'InDesign'),
(9, 'Stencyl Games'),
(10, 'Youtuber'),
(11, 'Canva Design'),
(12, 'Manutenção e Configuração'),
(14, 'Gestor Administrativo e Financeiro'),
(15, 'Recursos Humanos'),
(16, 'Crédito, Cobrança e Atendimento'),
(17, 'Assistente Contábil'),
(18, 'Logística e Transporte'),
(19, 'Fiscal de Loja'),
(20, 'Liderança Eficaz e Oratória'),
(21, 'Home Office'),
(22, 'Marketing Digital'),
(23, 'Instagram para Vendas'),
(24, 'Operador de Caixa'),
(25, 'Técnicas de Redação'),
(26, 'Elaborando Currículo'),
(27, 'Atendente de Farmácia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `uploads`
--

CREATE TABLE `uploads` (
  `id_upload` int(11) NOT NULL,
  `arquivo` varchar(200) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `uploads`
--

INSERT INTO `uploads` (`id_upload`, `arquivo`, `id_user`) VALUES
(674, '[2]jump_monkey.stencyl', 81),
(716, '[1]1jump_monkey.stencyl_2.stencyl', 82),
(717, '[1][2]jump_monkey.stencyl', 81),
(767, '[1]jump_monkey_novo.stencyl', 81),
(785, '[1]11jump_monkeystencyl_3.stencyl', 82),
(786, '[1][1]precisa-se_de_um_amigo-_aula_2.pptx', 287),
(787, '[1]o_goias_do_pequi.pptm', 287),
(788, '[2]o_goias_do_pequi.pptm', 287),
(789, '[1]o_rio_de_janeiro.pptx', 287),
(790, '[1]goiÁs_raphael.pptx', 87),
(791, '[1]goias.pptx', 275),
(792, '[2]goias.pptx', 80),
(793, '[1][1]pasta1.xlsx34.xlsx', 221),
(794, '[1]goias_ash_exercicio_04.pptx', 146),
(795, '[1]formaÇao_da_toman.cdr', 252),
(796, '[1]manuel_gomes.cdr', 288),
(797, '[1]topzinho.cdr', 288),
(798, '[1]la_ele.cdr', 288),
(799, '[1]topzin.cdr', 288),
(800, '[1]crash_course_kit_01.stencyl', 82),
(801, '[1][1]goias_ash_exercicio_04.pptx', 146),
(803, '[1]sides_da_marieta_r._de_m3l0.pptx', 153),
(804, '[1]atividade_4_jessica_nayara.xlsx', 154),
(805, '[1]atividade_3_jessica_nayara.xlsx', 154),
(806, '[1]joao_lucas.indd', 246),
(808, '[1]sem_titulo-1.cdr_myke.cdr', 252),
(809, '[1]pizzaria.cdr', 288),
(810, '[1]aula1_analuisa.xlsx', 242),
(811, '[1]exercio_04.xlsx', 244),
(812, '[1]pasta_marcos.xlsx', 120),
(813, '[1]rafasouza.xlsx', 168),
(814, '[1]bella_pizzas_ruan_nilton_miranda_de_almeida_castoldi_coreldraw.cdr', 266),
(815, '[2]pasta_marcos.xlsx', 120),
(816, '[1]teste_ash_powerpoint.pptx', 146),
(818, '[1][1]sides_da_marieta_r._de_m3l0.pptx', 153),
(819, '[1]rio_de_janeiro.pptx________geovana_ketlen.pptx', 61),
(820, '[1][1]teste_ash_powerpoint.pptx', 146),
(822, '[1]ditados_populares_da_nobre_srt._ana_julia_r._d3_m3l0.pptx', 153),
(823, '[1]lana_sousa_mendes.indd', 62),
(824, '[1]prova_corel_isaac.png', 288),
(825, '[1]prova_exeu.xlsx', 112),
(826, '[1]ditados_populares.123.pptx', 287),
(827, '[1]ditados__populares.pptx', 275),
(828, '[1]logo_marcas_sabrina.cdr', 222),
(829, '[1]saco-vazio.png', 16),
(830, '[1]montagem_saco.png', 19),
(831, '[1]rosto-mulher.png', 19),
(832, '[1]mariany.xlsx', 169),
(833, '[1]pasta1_exercicio_ana.xlsx', 164),
(834, '[1]sem_titulo-1.cdr', 66),
(835, '[1][1][1]planfeito_tayla_6.indd', 39),
(836, '[1]tayla.indd', 39),
(837, '[1]davi_show.cdr', 228),
(838, '[1]salvouuuuuu.cdr', 228),
(839, '[1][1]lana_sousa_mendes.indd', 62),
(840, '[1]aula_foto_shop_casutora_bagy.psd', 252),
(841, '[1]1crash_course_kit_02.stencyl', 82),
(843, '[1]beco_do_salgado.cdr', 228),
(844, '[1][1]ditados_populares_da_nobre_srt._ana_julia_r._d3_m3l0_(2).pptx', 153),
(845, '[2][1]ditados_populares_da_nobre_srt._ana_julia_r._d3_m3l0_(2).pptx', 153),
(846, '[1]exercicio_2_ana.xlsx', 242),
(847, '[1]exercio2.xlsx', 254),
(848, '[1]pasta1_ana.xlsx', 164),
(849, '[1]prova_excel.xlsx', 244),
(850, '[2]mariany.xlsx', 169),
(851, '[1]pasta1.xlsx', 164),
(853, '[1]prova_de_coeldraw_ruan_nilton_miranda_de_almeida_castoldi.png', 266),
(854, '[2]rafasouza.xlsx', 168),
(855, '[1][1]prova_tayla.indd', 39),
(856, '[1]claro.cdr', 228),
(857, '[1]itau.cdr', 228),
(858, '[1]ana_julia_carioca.pptx', 153);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `pass` varchar(42) NOT NULL,
  `curso` varchar(20) DEFAULT NULL,
  `id_class` int(11) DEFAULT NULL,
  `id_modulo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `name`, `user`, `tel`, `pass`, `curso`, `id_class`, `id_modulo`) VALUES
(2, 'stéfany pereira de oliveira', 'stefanysp', '(61) 99443-3876', '27062022', 'Informática', 37, 5),
(3, 'wallacy dos santos coutrim', 'bocadebode19', '', '8494wsws', 'Informática', 24, 4),
(6, 'rebeca tavares paes', 'rebeca', '', 'rebecatavarespaes', 'Informática', 37, 5),
(7, 'rafaely ferreira de araujo', 'rafaely', '', 'RAFAELY', 'Informática', 37, 5),
(8, 'kauã Oliveira Cunha', 'kaua', '(00) 00000-0000', '123456', 'Informática', 37, 5),
(9, 'Erik Rauan Santo Da Silva', 'rauam', '', '12345671', 'Informática', 37, 5),
(15, 'ana clara rodrigues da silva ', 'aninha17', '', 'anasilva1', 'Informática', 37, 5),
(16, 'Erik de oliveira moura', 'Erik ', '(61) 99446-1060', 'Neymarerik', 'Informática', 38, 7),
(17, 'Victoria Montalvão', 'Montalvaovic', '(61) 99178-4702', 'senha', 'Informática', 38, 7),
(18, 'Luiz Eduardo Pinheiro Da Silva', 'Luiz', '', '0611', 'Informática', 38, 6),
(19, 'Ana Clara Da Silva Oliveira', 'anaclara02', '', '07022008acso', 'Informática', 38, 7),
(22, 'evellyn nathalia', 'evellyn', '', 'evellyn12345', 'Informática', 35, 25),
(24, 'Ana vitória lima silva soares', 'poxa-ana ', '(00) 00000-0000', '180410', 'Informática', 19, 5),
(25, 'victor ferreira dos santos', 'ferreira', '(00) 00000-0000', '2207', 'Informática', 40, 9),
(28, 'sophia    carneiro   santos   ', 'sophia', '', '123456', 'Informática', 40, 4),
(29, 'lara   kelle  da   silva   farias', 'lara', '', '123', 'Informática', 40, 4),
(36, 'Filipe Guilherme Alves dos Santos', 'liperlk7', '(61) 99567-7721', '36181054', 'Informática', 7, 9),
(39, 'tayla paiva chaves', '12tayla', '(00) 00000-0000', 'tayla12', 'Informática', 8, 9),
(40, 'gabriel tavares dos anjos', 'gabriel', '', 'gabriel', 'Informática', 31, 6),
(44, 'Rayllan Pablo Sousa Sana', 'RPZINN', '', '11042010', 'Informática', 9, 5),
(45, 'luis carlos ', 'lufu', '(00) 00000-0000', '23042012', 'Informática', 9, 9),
(46, 'Pedro Henrique Martins sousa', 'pedrohenri', '', '1234567', 'Informática', 10, 7),
(50, 'Stéfany Oliveira Do Nascimento', 'steh oliveira', '', '123456', 'Informática', 10, 5),
(51, 'LUDYZINHA', 'MARQUESZX', '', '12345', 'Informática', 10, 7),
(58, 'Jônatas nunes da costa silva', 'jonatas', '', '123', 'Informática', 11, 5),
(59, 'Samuel dos santos Rodrigues', 'samuel43', '(61) 98296-1326', 'brasil12', 'Informática', 29, 5),
(61, 'Geovanna Kletelen Fernandes Borges ', 'G I H H ', '(00) 00000-0000', '1234', 'Informática', 19, 4),
(62, 'Lana Sousa Mendes', 'linda', '(00) 00000-0000', 'linda', 'Informática', 19, 8),
(64, 'isaac menezes ', 'isaac', '(00) 00000-0000', '123456789ai', 'Informática', 20, 9),
(66, 'Matheus Souza de Andrade', 'Matheus Andrade', '', 'msa230504', 'Informática', 39, 6),
(67, 'anthony miguel menezes santos ', 'anthony miguel', '(00) 00000-0000', '6194043826', 'Informática', 20, 9),
(68, 'joao vitor meneses', 'joaomth', '(00) 00000-0000', '1234567890j', 'Informática', 21, 6),
(75, 'Nalison Barbosa Aguiar', 'djongador09', '', 'futebol2006', 'Informática', 22, 7),
(77, 'Manoella de Lima Pimentel', 'manoella', '(00) 00000-0000', '12345678', 'Informática', 23, 5),
(78, 'Nicoly Araújo  Ribeiro', 'nicoly', '(00) 00000-0000', '1234', 'Informática', 23, 5),
(80, 'Igor Henrique Alves Vargas', 'Alves', '', 'ALVES', 'Informática', 32, 3),
(81, 'Gabriel Santos Lima ', 'Gabriel', '', '1234', 'Informática', 24, 9),
(82, 'ana clara borges cardoso ', 'ana clara', '', 'ESTREL4', 'Informática', 24, 9),
(83, 'Socorro Maria Cordeiro', 'marysmc', '(00) 00000-0000', 'teddy2022', 'Profissionalizante', 24, 16),
(85, 'leticia dos santos carvalho', 'leehprds_', '', '28122907', 'Informática', 8, 7),
(87, 'Raphael Erick Lopes Lins', 'Raphael Erick', '', '1245', 'Informática', 31, 5),
(93, 'laryssa cristina', 'lary', '', '123456', 'Informática', 10, 6),
(94, 'yago kaua batista ', 'yago', '(61) 98181-3014', '12121034', 'Informática', 19, 8),
(97, 'pedrourieldossantopinto', 'nerdsanto', '', 'santonerd', 'Informática', 29, 5),
(101, 'Ana Heloisa Teles Moreira', 'ana heloisa', '', '123', 'Informática', 29, 5),
(107, 'victor rodrigues de souza ', 'victor ', '', '12345678', 'Informática', 29, 5),
(112, 'gabryel nicollas castro nerys', 'gabryel', '', '12345', 'Informática', 30, 3),
(114, 'arthur fabiano dias da silva', 'fabiano', '', 'fabiano', 'Informática', 37, 5),
(116, 'Eduardo Moraes Prado', 'DuduGamer', '', '1234567890', 'Informática', 38, 5),
(120, 'Marcos winicius barbosa silva', 'marcosdisf', '', '12344321', 'Informática', 40, 3),
(123, 'jose thayson alves dos santos', 'thayson', '', '123456789', 'Informática', 19, 4),
(124, 'Poliane Cristina Rodrigues dos Santos', 'Poliane', '', 'ipi217778', 'Informática', 20, 7),
(128, 'angela kelly santos silva', 'angela.12', '', 'kellyangela', 'Informática', 29, 5),
(129, 'Maria Eduarda Dias Rocha', 'mary', '', '101010', 'Informática', 21, 4),
(130, 'sara jully  da silva  nascimento  ', 'sara linda', '', '1234', 'Informática', 21, 3),
(131, 'paulo arthur', 'paulo@arthur.com', '', '333445', 'Informática', 22, 7),
(136, 'Edilene Ramos de Andrade', 'Leny', '', '1234', 'Informática', 24, 25),
(137, 'Gustavo Dias Rodriquês', 'gustavo', '(61) 98535-0355', 'gustavo554', 'Informática', 40, 6),
(141, 'Nathaly Barbosa de Araujo', 'Nathaly', '(00) 00000-0000', 'nemvem090', 'Informática', 37, 5),
(146, 'Ashley Rodrigues Tavares Da Silva', 'AshSilv4', '', '100922', 'Informática', 7, 4),
(147, 'Carine Araujo', 'carem', '(00) 00000-0000', 'carine4.', 'Informática', 20, 9),
(153, 'ana julia rodrigues de melo', 'anajupiter2009', '', '1234', 'Informática', 9, 3),
(154, 'jessica nayara santana dos santos', 'jessica nay', '', 'jess001', 'Informática', 9, 3),
(164, 'ana luiza ribeiro jesus dos santos ', 'ana luiza', '', 'aninha123', 'Informática', 39, 3),
(165, 'sabrinaoliveiragomesdejesus   ', 'sabrina1512', '', '10302040', 'Informática', 39, 2),
(167, 'lucas andre almeida de alcantara', 'lucas', '', '30369123', 'Informática', 40, 1),
(168, 'Rafaella Stephani Barbosa Souza', 'rafaella souza', '', 'souzarafa20', 'Informática', 40, 3),
(169, 'mariany lorrany paulino martins', 'mariany ', '(61) 99101-1726', 'paulino15', 'Informática', 39, 4),
(173, 'Anna Victoria', 'vick.kjjk', '', '20012009', 'Informática', 23, 1),
(187, 'mickael walace batista de sousa', 'mickael', '', '1234', 'Informática', 40, 2),
(215, 'daniel martins da silva', 'daniel m', '', 'daniel4488', 'Informática', 10, 7),
(216, 'raquel santos  ', 'yumemi-nank18', '', '1234', 'Informática', 10, 6),
(221, 'leticia lopes de almeida', 'leticia lopes de almeida', '(00) 00000-0000', '27102010', 'Informática', 32, 3),
(222, 'sabrina valdevino silva', 'sabrina', '(00) 00000-0000', '1234', 'Informática', 37, 5),
(228, 'davi rodrigo holanda da silva', 'davi', '', '1234', 'Informática', 8, 6),
(229, 'joão pedro gomes leal', 'jpleal021', '(00) 00000-0000', '0617501021', 'Informática', 31, 7),
(242, 'ana luisa rodrigues da silva ', 'annacat', '(61) 99305-6135', '1112', 'Informática', 38, 3),
(244, ' isa cristina silveira', 'cristina ', '(00) 00000-0000', '1234', 'Informática', 39, 2),
(246, 'João Lucas Moura dos Santos Costa', 'tzn', '(00) 00000-0000', 'jl12082009', 'Informática', 9, 9),
(249, 'William bispo dos passos ', 'william', '(62) 96152-955', '99767577', 'Informática', 22, 7),
(251, 'raphaela maiara passos da silva', 'luffy', '(61) 99385-3625', '1234', 'Informática', 22, 8),
(252, 'Ana Julia Soares Monteiro', 'Julia', '(00) 00000-0000', '1234', 'Informática', 23, 6),
(254, 'isabela mesquita de souza', 'isabela', '', 'igrmwf', 'Informática', 38, 2),
(257, 'joao carlos da silva', 'joao007', '', '01213242', 'Informática', 39, 1),
(259, 'guilherme lacerda da silva sampaio', 'Guizinn', '', '1234', 'Informática', 10, 7),
(263, 'Guilherme Paulino dos Santos ', 'guizin ', '(00) 00000-0000', '271929', 'Informática', 31, 6),
(264, 'Maria Eduarda Pereira da Silva', 'dudapereira09', '', 'Vida99', 'Informática', 39, 5),
(265, 'Allicia Costa De  Souza ', 'ALLICIA', '(00) 00000-0000', '69311', 'Informática', 39, 5),
(266, 'Ruan Nilton Miranda de Almeida Castoldi', 'crvg86rc', '', '19982011', 'Informática', 40, 6),
(271, 'Isadora Cristina Rodrigues dos Santos', 'Isa', '', '217778', 'Informática', 20, 7),
(275, 'Ellen Carine F. dos Santos', 'Ellen Carine', '', '12920112', 'Informática', 31, 3),
(276, 'Geovana Marques Mineiro', 'GEOVANA', '(61) 98556-4107', 'marques34', 'Informática', 40, 5),
(277, 'ryan silva dos anjos', 'ryan silva', '(00) 00000-0000', 'ugaugauga', 'Informática', 31, 6),
(284, 'Ana Beatriz de Sousa', 'bia', '', '1234', 'Informática', 31, 5),
(285, 'Maria Beatriz', 'beatriz', '', '1234', 'Informática', 36, 7),
(286, 'Luis Felipe Serra Pereira', 'Luis', '', '1234', 'Informática', 10, 7),
(287, 'Analice Araújo de Sousa', 'srta.hatake', '(00) 00000-0000', 'itachi', 'Informática', 30, 3),
(288, 'Isaac Nascimento dos Santos', 'isaac', '', '1234', 'Informática', 23, 6),
(289, 'Victor Rocha Oliveira', 'victor', '', '1234', 'Informática', 7, 1),
(290, 'Enzo Vinicius Rocha Oliveira', 'enzo', '', '1234', 'Informática', 7, 1),
(291, 'José Henrique Bispo Cardoso', 'jose', '', '1234', 'Informática', 7, 1),
(292, 'Alice Sousa Prado', 'alice', '', '1234', 'Informática', 7, 1),
(293, 'Hyara Brenna Oliveira Damaceno', 'hyara', '', '1234', 'Informática', 11, 1),
(294, 'Delzilene Alves da Silva', 'delzilene', '', '1234', 'Profissionalizante', 12, 14),
(295, 'Laura Monteiro de Moura', 'laura', '', '1234', 'Informática', 12, 1),
(296, 'Helloá Barros Tomaz da Silva', 'helloa', '', '1234', 'Informática', 21, 1),
(297, 'Taylor Brandão Bento', 'taylor', '', '1234', 'Informática', 30, 1),
(298, 'Geovar Bruno Sousa ', 'geovar', '', '1234', 'Informática', 32, 1),
(299, 'Artur Eduardo Ferreria Freitas', 'artur', '', '1234', 'Informática', 38, 1),
(300, 'Leonardo Kauê Pereira Afonso', 'leonardo', '', '1234', 'Informática', 38, 1),
(301, 'Matheus Alves de Sousa Dias', 'matheus', '', '1234', 'Informática', 39, 1),
(302, 'Nágina Kawany Maxlay de Oliveira Lima', 'kawany', '', '1234', 'Informática', 7, 1),
(303, 'Vitória Maria Dias Batista', 'vitoria', '', '1234', 'Informática', 21, 1),
(304, 'Ruth Barbosa Gomes', 'ruth', '(00) 00000-0000', '1234', 'Profissionalizante', 23, 14),
(305, 'Talia Moreira Liberato', 'talia', '', '1234', 'Informática', 12, 1),
(306, 'Arthur Andrey Silva Ribeiro', 'arthur', '', '1234', 'Informática', 31, 1),
(307, 'Isadora Barreto Diniz', 'isadora', '', '1234', 'Informática', 31, 1),
(308, 'Tiago de Araújo Santos', 'tiago', '', '1234', 'Informática', 39, 7),
(309, 'Erica de Freitas Sousa', 'erica', '', '1234', 'Informática', 39, 7),
(310, 'Ray Lopes Santos', 'ray', '', '1234', 'Informática', 11, 1),
(311, 'Ana Júlia da Silva Barroso', 'ana julia', '', '1234', 'Informática', 7, 1),
(312, 'Diogo Ferreira Rodrigues', 'diogo', '', '1234', 'Informática', 7, 1),
(313, 'Bruno Rodrigues Ferreira', 'bruno', '', '1234', 'Informática', 7, 1),
(314, 'João Vitor Martins', 'Jv Martines', '(00) 00000-0000', '2010', 'Informática', 11, 1),
(315, 'Juliana Queiroz Gonçalves da Silva', 'juliana', '', '1234', 'Informática', 11, 1),
(316, 'Luana Sofia Alves Miranda', 'luana', '', '1234', 'Informática', 11, 1),
(317, 'Maria Eduarda Barbosa', 'maria eduarda', '', '1234', 'Informática', 11, 1),
(318, 'Lorrany Sousa Paes Landim', 'Lorrany ', '(61) 99202-3454', '1234', 'Informática', 11, 1),
(319, 'Júlia Camily Silva Pereira', 'júlia', '', '1234', 'Informática', 21, 1),
(320, 'Samuel Filipe Farias de Oliveira', 'samuel', '', '1234', 'Informática', 21, 1),
(321, 'Ana Paula Andrade Fernandes', 'ana paula', '', '1234', 'Informática', 21, 1),
(322, 'Evellyn Barbosa Santos', 'evellyn', '', '1234', 'Informática', 21, 1),
(323, 'João Pedro Barbosa Santos', 'joão pedro', '', '1234', 'Informática', 21, 1),
(324, 'Juan Barbosa de Sousa', 'juan', '', '1234', 'Informática', 21, 1),
(325, 'Maria Eduarda Pereira Marinho', 'duda', '(00) 00000-0000', 'dudinha238', 'Informática', 23, 1),
(326, 'Guilherme de Brito Sobral', 'guilherme', '(61) 99146-5316', '1234', 'Informática', 30, 1),
(327, 'Isabella Sena de Souza', 'isabella', '(61) 98484-2741', '1234', 'Informática', 30, 1),
(328, 'Maria Luiza Passoa Martins', 'luiza', '(00) 00000-0000', '1234', 'Informática', 31, 1),
(329, 'Samara Alves da Silva', 'samara', '(61) 99186-3923', '1234', 'Informática', 37, 1),
(330, 'Nicole Pereira de Matos', 'nicole', '(61) 99209-2514', '1234', 'Informática', 37, 1),
(331, 'Eloá Rodrigues Santos Silva', 'eloá', '(61) 99158-2176', '1234', 'Informática', 37, 1),
(332, 'José Daniel da Silva', 'jose', '(00) 00000-0000', '1234', 'Informática', 38, 1),
(333, 'Fernanda Alves Gramacho', 'fernanda', '(00) 00000-0000', '1234', 'Informática', 38, 1),
(334, 'Jarlison Emanuel Rodrigues', 'jarlison', '(61) 00000-0000', '1234', 'Informática', 39, 1),
(335, 'Ana Clara de Araújo Silva', 'ana clara', '(61) 00000-0000', '1234', 'Informática', 39, 1),
(336, 'Lana Christiny Berilo Silva', 'Lana', '(61) 00000-0000', '1220232011', 'Informática', 39, 1),
(337, 'Alerrandro Ribeiro de Sá', 'alerrandro', '(61) 00000-0000', '1234', 'Informática', 39, 1),
(338, 'Aline de jesus silva', 'aline silva', '(00) 00000-0000', '1234', 'Informática', 30, 1),
(339, 'Laércio Campos Oliveira', 'laércio', '(00) 00000-0000', '1234', 'Informática', 37, 1),
(342, 'Karoline Oliveira Araújo', 'karoline', '(00) 00000-0000', '1234', 'Informática', 12, 1),
(343, 'Cleide Silva Brandão ', 'cleide', '(00) 00000-0000', '1234', 'Profissionalizante', 22, 14),
(344, 'Maria do Socorro Lopes Silva', 'socorrinha', '(00) 00000-0000', '1234', 'Informática', 24, 1),
(345, 'Ludmila Fernandes Borges', 'lud', '(00) 00000-0000', '1234', 'Informática', 19, 6),
(346, 'Alice Marinete Feitosa dos Santos Neta', 'alice marinete', '(00) 00000-0000', '1234', 'Informática', 24, 1),
(347, 'Antônia Gestrudes dos Santos', 'antonia', '(00) 00000-0000', '1234', 'Informática', 24, 1),
(348, 'Gustavo de Sousa Santos', 'gustavo', '(00) 00000-0000', '1234', 'Informática', 24, 1),
(349, 'Robertha Matos de Oliveira', 'robertha', '(00) 00000-0000', '1234', 'Informática', 31, 1),
(350, 'Antônio José Ribeiro', 'antonio', '(00) 00000-0000', '1234', 'Informática', 40, 12),
(351, 'Anderson Henrique Rodrigues Maciel', 'professor', '(79) 99831-8862', '1234', 'Farmácia', 1, 27),
(352, 'Mikael de Carvalho', 'mikael', '(00) 00000-0000', '1234', 'Informática', 19, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices de tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_class`);

--
-- Índices de tabela `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Índices de tabela `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=859;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `horario` (`id_class`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
