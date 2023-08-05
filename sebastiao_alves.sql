-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2023 às 15:30
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `descricao` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `imagem`, `descricao`) VALUES
(1, 'https://localhost/sebastiao_alves/uploads/Perfil/conteudo.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet turpis ac lectus aliquet congue at id magna. Phasellus quis rhoncus nunc. Proin fringilla euismod massa, vitae dictum risus laoreet eu. Ut imperdiet nunc sed metus viverra, vitae sagittis odio iaculis. Quisque at efficitur enim, ac semper nulla. Ut et diam mauris. Phasellus commodo neque quis mauris laoreet eleifend. Proin tristique diam pellentesque, dignissim nunc ac, sagittis velit. Suspendisse potenti. Sed consequat risus eu erat semper, in lacinia diam tincidunt. Suspendisse eget vestibulum nunc. Proin eros nunc, eleifend eget tortor quis, lacinia consequat ante.\r\n\r\nInteger non tempus lorem. Morbi mattis sem eu tempor tincidunt. Quisque semper nibh quis nulla ultricies aliquam. Donec et magna nec dolor bibendum vestibulum. Proin eu mauris vitae mi fermentum bibendum non sed augue. Nullam eget lorem at odio bibendum sollicitudin. Quisque fringilla risus at elit convallis efficitur. Etiam blandit, justo eget ultrices vestibulum, nisl eros ultricies lectus, et tristique tortor mi id enim. Nam ut dictum purus, sed blandit lacus. Curabitur a blandit augue, nec dapibus nulla. Suspendisse in urna eu enim tristique congue ut vitae purus. Vestibulum magna enim, ullamcorper sed lectus scelerisque, blandit fringilla felis. Suspendisse ornare magna ut dignissim dictum. Nam quis ligula ex. Proin malesuada nulla in rhoncus rutrum. Etiam sed justo et felis placerat euismod sed ac sapien. Morbi pharetra ac diam gravida lobortis. Morbi ante lacus, euismod non turpis in, volutpat scelerisque diam. Vivamus eu eros mattis, iaculis dui vitae, iaculis sem. Donec tincidunt lectus quis quam euismod, in lobortis ipsum suscipit. Vivamus lacinia venenatis tellus, quis lobortis lacus rhoncus sit amet. Aliquam tempor justo at accumsan vehicula. Suspendisse in rhoncus augue.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sem urna, laoreet id enim ut, cursus iaculis quam. Pellentesque feugiat tellus et dictum dapibus. Donec pulvinar augue vitae lorem tristique lobortis. Nulla pulvinar felis ac quam sagittis hendrerit. Nulla consequat accumsan nisl ut aliquet. Etiam sollicitudin justo vel velit convallis, ut imperdiet nulla lobortis. Praesent vitae ex in justo pharetra rutrum vitae non felis.\r\n\r\nMorbi fermentum, augue a eleifend posuere, ligula neque ultricies erat, nec malesuada turpis arcu et justo. In vitae urna at est semper tempor. Quisque dignissim condimentum enim at tempus. Donec ut placerat urna. Nullam consectetur vehicula sapien, quis cursus mi sodales vitae. Nulla ligula odio, sodales in imperdiet nec, bibendum eu felis. Curabitur condimentum sem eu leo congue, sit amet malesuada orci finibus. Maecenas sit amet leo ante. Duis nibh ipsum, faucibus ut est at, tempor commodo erat. Integer auctor est vitae turpis pretium, eget rutrum libero hendrerit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut est lectus, tempor id metus sit amet, pretium accumsan erat. Maecenas dui erat, molestie quis arcu non, tempus tempus metus. Donec interdum condimentum urna, in malesuada lectus congue et. Nam sit amet risus rhoncus, porta lectus at, dapibus velit. Nam sed tincidunt metus. Fusce convallis pharetra erat, eu ullamcorper tortor mollis sit amet. Ut maximus diam id ante facilisis accumsan. Morbi a orci urna. Pellentesque mollis ipsum nec leo iaculis, sit amet mollis orci facilisis. Nulla facilisi. Mauris euismod enim risus, at hendrerit erat rutrum et.\r\n\r\nEtiam ultrices ornare bibendum. Sed fermentum, neque ut interdum consectetur, ligula neque tempor quam, in suscipit ex neque et ante. Vestibulum ac congue nisi, non ultricies ex. Duis posuere, libero nec finibus blandit, nisl mauris scelerisque enim, eget feugiat velit libero ac orci. Praesent faucibus, ligula commodo eleifend pharetra, nibh odio dictum est, non cursus mi augue quis ex. Morbi ullamcorper luctus nisl, at faucibus lectus volutpat ultricies. Praesent a elit purus. Maecenas convallis leo volutpat turpis auctor ullamcorper vel id metus. Nam erat orci, efficitur ac interdum non, porta ac augue. Aliquam interdum rhoncus elit, sed pharetra ex lacinia eget. Donec quis viverra mi.\r\n\r\nPraesent mollis tortor vehicula velit pretium, mattis imperdiet elit tristique. Vestibulum id magna diam. Quisque et fringilla erat. Nam vulputate sem nunc. Quisque ac sem ultricies, faucibus magna vitae, sagittis ante. Fusce pretium fringilla est at interdum. Fusce turpis purus, sodales eu sem convallis, consectetur condimentum magna. Pellentesque dignissim sapien id nisl vehicula scelerisque. Vestibulum consectetur neque purus, quis finibus erat euismod cursus. Sed ultrices volutpat porta.\r\n\r\nSed eget dui nunc. Nullam mauris velit, viverra vestibulum tempus ut, laoreet a libero. Fusce vestibulum sollicitudin hendrerit. Etiam eget tellus tellus. Integer vel pharetra quam, eget blandit tortor. Curabitur aliquam sem eget tellus vehicula, at molestie nisi vestibulum. Praese');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `imagem_desktop` varchar(250) NOT NULL,
  `imagem_mobile` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `imagem_desktop`, `imagem_mobile`, `titulo`, `subtitulo`, `link`) VALUES
(1, 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho1.jpg', 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho1M.jpg', 'Senhora do Amor e da Guerra', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis quibusdam alias nisi delectus culpa quis ratione mollitia est, reprehenderit error reiciendis, ipsam earum optio distinctio asperiores, ea laboriosam maxime cupiditate unde at', 'https://localhost/sebastiao_alves/livro/1'),
(2, 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho2.jpg', 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho2M.jpg', 'O Caracol Estrábico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lectus diam, pharetra quis malesuada non, volutpat ut diam. Nulla ut ultrices nulla, sit amet condimentum ante. Integer quis luctus turpis. Sed at enim lorem. Sed tincidunt justo id lectus', 'https://localhost/sebastiao_alves/livro/2'),
(3, 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho3.jpg', 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho3M.jpg', 'O Colecionador de Amnésias', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lectus diam, pharetra quis malesuada non, volutpat ut diam. Nulla ut ultrices nulla, sit amet condimentum ante. Integer quis luctus turpis. Sed at enim lorem. Sed tincidunt justo id lectus', 'https://localhost/sebastiao_alves/livro/3'),
(4, 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho4.jpg', 'https://localhost/sebastiao_alves/uploads/Carousel/cabecalho4M.jpg', 'O Velho que Pensava que Fugia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lectus diam, pharetra quis malesuada non, volutpat ut diam. Nulla ut ultrices nulla, sit amet condimentum ante. Integer quis luctus turpis. Sed at enim lorem. Sed tincidunt justo id lectus', 'https://localhost/sebastiao_alves/livro/4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id_colaborador` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id_colaborador`, `nome`, `usuario`, `senha`) VALUES
(1, 'Pedro Rodrigues', 'pedro', '$2y$10$bfAg00TBkNkr8pUHoU.9huramNotORONqgNIeXoHfpUGw2/2ccbK6'),
(2, 'Fabrício Vidal', 'fabricio', '$2y$10$QlVXVEcrQ7WD4z4Euin9bO9CjnIiRuw4bOxY3HRT/bl5lp5ety2bi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `morada` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `telefone`, `morada`, `email`, `horario`) VALUES
(1, '+351 *** *** ***', 'Lorem ipsum dolor sit amet 12.1234-543 Lorem', 'lorem@lorem.pt', 'Das 09:00 ás 18:00, Todos dias Uteis.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id_destaque` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `observacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id_destaque`, `id_livro`, `observacao`) VALUES
(1, 5, 'Novidade'),
(2, 2, 'Mais Popular'),
(3, 3, 'Mais Vendido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `ultimos_livros` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id_home`, `imagem`, `ultimos_livros`) VALUES
(1, 'https://localhost/sebastiao_alves/uploads/Perfil/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia optio doloribus facere quae enim nulla necessitatibus pariatur molestias quisquam! Dolorem sequi consequuntur dolores nemo reprehenderit quos, sint delectus qui quia in omnis iusto autem labore nihil a ea ab. Magni libero, alias aspernatur natus, tempora, omnis quia aliquam aliquid nobis illum excepturi exercitationem voluptatem corrupti voluptates. Voluptates quibusdam illum ab doloribus fugiat iusto labore facil</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id_noticia` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `dat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id_noticia`, `imagem`, `titulo`, `texto`, `dat`) VALUES
(1, 'https://localhost/sebastiao_alves/public/Imagens/Imprensa/imprensa1.jpg', 'Lançamento | Senhora do Amor e da Guerra', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt nam accusamus earum cumque obcaecati deserunt similique maxime libero eveniet distinctio rerum hic debitis ullam at veniam minus, doloremque placeat incidunt perferendis! Odio voluptas dignissimos architecto amet nisi aspernatur? Unde nihil reiciendis excepturi, iste nam error commodi cum, porro, sit temporibus magnam laborum libero? Similique harum architecto \r\nducimus unde nemo. Quae reprehenderit similique doloremque natus qui', 'Publicado a 17 Junho 2020'),
(2, 'https://localhost/sebastiao_alves/public/Imagens/Imprensa/imprensa2.jpg', 'Lançamento | \"O velho que pensa que fugia\"', 'Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \"O velho que pensava que fugia\", de Sebastião Alves. <br>\nNesta sessão o autor irá ler algumas das passagens do livro. <br>\n\"Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? <br>\nDe que foge? Que procura? Quem o persegue? <br>\nOnde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? <br>\nPorque elege para refúgio esse remoto lu', 'Publicado a 06 Dezembro 2017'),
(4, 'https://localhost/sebastiao_alves/public/Imagens/Imprensa/imprensa2.jpg', 'Noticia | O Mais Vendido \"Caracol\"', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt nam accusamus earum cumque obcaecati deserunt similique maxime libero eveniet distinctio rerum hic debitis ullam at veniam minus, doloremque placeat incidunt perferendis! Odio voluptas dignissimos architecto amet nisi aspernatur? Unde nihil reiciendis excepturi, iste nam error commodi cum, porro, sit temporibus magnam laborum libero? Similique harum architecto \nducimus unde nemo. Quae reprehenderit similique doloremque natus qui', 'Publicado a 25 Fevereiro 2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `imagem`, `titulo`, `texto`) VALUES
(2, 'https://localhost/sebastiao_alves/public/Imagens/Livros/livro-conteudo.jpg', 'Senhora do Amor e da Guerra', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus nisi, interdum vitae enim nec, maximus ultricies nisi. Praesent non mollis nulla. Vivamus varius diam vitae massa dictum molestie. Nullam at nunc pulvinar, faucibus mi sed, feugiat nisl. Maecenas in arcu viverra, posuere ipsum vel, placerat ante. Integer dignissim elit sed lectus posuere ultricies. Donec vestibulum dictum finibus. Curabitur posuere leo ac tempus sagittis. Curabitur viverra ut dui ut bibendum. Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper. Sed bibendum malesuada hendrerit. Integer imperdiet libero nec justo elementum, in interdum risus lobortis. Curabitur condimentum sollicitudin rhoncus. Donec eu enim ut mauris bibendum consequat. Aliquam dictum dui id dignissim convallis. Donec finibus congue dignissim. Phasellus a laoreet nisl. Suspendisse sagittis laoreet cursus. Proin rhoncus sem ligula, ut tristique erat egestas ac. Proin quis metus quis felis iaculis volutpat at ac nunc. Aenean eu aliquet ex. Cras eget ex eu sapien imperdiet aliquet nec quis arcu. Duis eget condimentum ante. Vivamus placerat urna convallis, bibendum sapien id, consectetur nisl. Ut fringilla quis purus sagittis tempor. Integer eleifend, neque quis tempus porta, eros nisl porttitor nulla, sed aliquam quam justo in urna. Curabitur molestie mauris ut erat iaculis ornare vitae at ex. Duis viverra at ex at placerat. Fusce sodales aliquet lac'),
(3, 'https://localhost/sebastiao_alves/public/Imagens/Livros/livro-conteudo2.jpg', 'O Colecionador de Amnésias', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus nisi, interdum vitae enim nec, maximus ultricies nisi. Praesent non mollis nulla. Vivamus varius diam vitae massa dictum molestie. Nullam at nunc pulvinar, faucibus mi sed, feugiat nisl. Maecenas in arcu viverra, posuere ipsum vel, placerat ante. Integer dignissim elit sed lectus posuere ultricies. Donec vestibulum dictum finibus. Curabitur posuere leo ac tempus sagittis. Curabitur viverra ut dui ut bibendum. Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper. Sed bibendum malesuada hendrerit. Integer imperdiet libero nec justo elementum, in interdum risus lobortis. Curabitur condimentum sollicitudin rhoncus. Donec eu enim ut mauris bibendum consequat. Aliquam dictum dui id dignissim convallis. Donec finibus congue dignissim. Phasellus a laoreet nisl. Suspendisse sagittis laoreet cursus. Proin rhoncus sem ligula, ut tristique erat egestas ac. Proin quis metus quis felis iaculis volutpat at ac nunc. Aenean eu aliquet ex. Cras eget ex eu sapien imperdiet aliquet nec quis arcu. Duis eget condimentum ante. Vivamus placerat urna convallis, bibendum sapien id, consectetur nisl. Ut fringilla quis purus sagittis tempor. Integer eleifend, neque quis tempus porta, eros nisl porttitor nulla, sed aliquam quam justo in urna. Curabitur molestie mauris ut erat iaculis ornare vitae at ex. Duis viverra at ex at placerat. Fusce sodales aliquet lac'),
(5, 'https://localhost/sebastiao_alves/public/Imagens/Livros/livro-conteudo4.jpg', 'O Velho que Pensava que Fugia', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus nisi, interdum vitae enim nec, maximus ultricies nisi. Praesent non mollis nulla. Vivamus varius diam vitae massa dictum molestie. Nullam at nunc pulvinar, faucibus mi sed, feugiat nisl. Maecenas in arcu viverra, posuere ipsum vel, placerat ante. Integer dignissim elit sed lectus posuere ultricies. Donec vestibulum dictum finibus. Curabitur posuere leo ac tempus sagittis. Curabitur viverra ut dui ut bibendum. Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper. Sed bibendum malesuada hendrerit. Integer imperdiet libero nec justo elementum, in interdum risus lobortis. Curabitur condimentum sollicitudin rhoncus. Donec eu enim ut mauris bibendum consequat. Aliquam dictum dui id dignissim convallis. Donec finibus congue dignissim. Phasellus a laoreet nisl. Suspendisse sagittis laoreet cursus. Proin rhoncus sem ligula, ut tristique erat egestas ac. Proin quis metus quis felis iaculis volutpat at ac nunc. Aenean eu aliquet ex. Cras eget ex eu sapien imperdiet aliquet nec quis arcu. Duis eget condimentum ante. Vivamus placerat urna convallis, bibendum sapien id, consectetur nisl. Ut fringilla quis purus sagittis tempor. Integer eleifend, neque quis tempus porta, eros nisl porttitor nulla, sed aliquam quam justo in urna. Curabitur molestie mauris ut erat iaculis ornare vitae at ex. Duis viverra at ex at placerat. Fusce sodales aliquet lac</p><p>Aenean eu aliquet ex. Cras eget ex eu sapien imperdiet aliquet nec quis arcu. Duis eget condimentum ante. Vivamus placerat urna convallis, bibendum sapien id, consectetur nisl. Ut fringilla quis purus sagittis tempor. Integer eleifend, neque quis tempus porta, eros nisl porttitor nulla, sed aliquam quam justo in urna. Curabitur molestie mauris ut erat iaculis ornare vitae at ex. Duis viverra at ex at placerat. Fusce sodales aliquet lac.</p><p>Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper.</p><p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus nisi, interdum vitae enim nec, maximus ultricies nisi. Praesent non mollis nulla. Vivamus varius diam vitae massa dictum molestie. Nullam at nunc pulvinar, faucibus mi sed, feugiat nisl. Maecenas in arcu viverra, posuere ipsum vel, placerat ante. Integer dignissim elit sed lectus posuere ultricies. Donec vestibulum dictum finibus. Curabitur posuere leo ac tempus sagittis. Curabitur viverra ut dui ut bibendum. Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper. Sed bibendum malesuada hendrerit. Integer imperdiet libero nec justo elementum, in interdum risus lobortis. Curabitur condimentum sollicitudin rhoncus.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus nisi, interdum vitae enim nec, maximus ultricies nisi. Praesent non mollis nulla. Vivamus varius diam vitae massa dictum molestie. Nullam at nunc pulvinar, faucibus mi sed, feugiat nisl. Maecenas in arcu viverra, posuere ipsum vel, placerat ante. Integer dignissim elit sed lectus posuere ultricies. Donec vestibulum dictum finibus. Curabitur posuere leo ac tempus sagittis. Curabitur viverra ut dui ut bibendum. Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper. Sed bibendum malesuada hendrerit. Integer imperdiet libero nec justo elementum, in interdum risus lobortis. Curabitur condimentum sollicitudin rhoncus. Donec eu enim ut mauris bibendum consequat. Aliquam dictum dui id dignissim convallis. Donec finibus congue dignissim. Phasellus a laoreet nisl. Suspendisse sagittis laoreet cursus. Proin rhoncus sem ligula, ut tristique erat egestas ac. Proin quis metus quis felis iaculis volutpat at ac nunc. Aenean eu aliquet ex. Cras eget ex eu sapien imperdiet aliquet nec quis arcu. Duis eget condimentum ante. Vivamus placerat urna convallis, bibendum sapien id, consectetur nisl. Ut fringilla quis purus sagittis tempor. Integer eleifend, neque quis tempus porta, eros nisl porttitor nulla, sed aliquam quam justo in urna. Curabitur molestie mauris ut erat iaculis ornare vitae at ex. Duis viverra at ex at placerat. Fusce sodales aliquet lac</p><p>Aenean eu aliquet ex. Cras eget ex eu sapien imperdiet aliquet nec quis arcu. Duis eget condimentum ante. Vivamus placerat urna convallis, bibendum sapien id, consectetur nisl. Ut fringilla quis purus sagittis tempor. Integer eleifend, neque quis tempus porta, eros nisl porttitor nulla, sed aliquam quam justo in urna. Curabitur molestie mauris ut erat iaculis ornare vitae at ex. Duis viverra at ex at placerat. Fusce sodales aliquet lac.</p><p>Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper.</p><p>orem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, 'https://localhost/sebastiao_alves/public/Imagens/Livros/livro-conteudo3.jpg', 'O Caracol Estrábico', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus nisi, interdum vitae enim nec, maximus ultricies nisi. Praesent non mollis nulla. Vivamus varius diam vitae massa dictum molestie. Nullam at nunc pulvinar, faucibus mi sed, feugiat nisl. Maecenas in arcu viverra, posuere ipsum vel, placerat ante. Integer dignissim elit sed lectus posuere ultricies. Donec vestibulum dictum finibus. Curabitur posuere leo ac tempus sagittis. Curabitur viverra ut dui ut bibendum. Sed felis augue, porta porttitor condimentum at, auctor tincidunt dolor. Suspendisse sodales tellus euismod ipsum blandit semper. Sed bibendum malesuada hendrerit. Integer imperdiet libero nec justo elementum, in interdum risus lobortis. Curabitur condimentum sollicitudin rhoncus. Donec eu enim ut mauris bibendum consequat. Aliquam dictum dui id dignissim convallis.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes`
--

CREATE TABLE `redes` (
  `id_rede` int(11) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redes`
--

INSERT INTO `redes` (`id_rede`, `facebook`, `instagram`, `linkedin`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://pt.linkedin.com/');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id_colaborador`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id_destaque`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id_destaque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
