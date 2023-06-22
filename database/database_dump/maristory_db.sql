-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/06/2023 às 03:56
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maristory_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment_text`, `created_at`, `updated_at`, `username`) VALUES
(18, 10, 'Estou comentando', '2023-06-20 14:59:58', NULL, 'Rhara'),
(19, 10, 'Im going back to 505', '2023-06-20 15:00:19', NULL, 'Leandro'),
(20, 10, 'Eu sou rockeiro', '2023-06-20 15:00:41', NULL, 'Vitor'),
(21, 12, 'oii gente', '2023-06-20 15:01:01', NULL, 'Isa'),
(22, 10, 'Oi, estou testando, esse post está muito bom!', '2023-06-20 16:13:54', NULL, 'Isadora'),
(23, 26, 'Esse post tá uma merda', '2023-06-22 01:37:01', NULL, 'Vitória'),
(24, 10, 'WOOOOOOOOOOOOOOOOOOOOW BORA GRITAARA', '2023-06-22 01:39:48', NULL, 'Colegas da Rhara'),
(25, 27, 'Miau', '2023-06-22 01:53:36', NULL, 'Bichinho');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20230523151449, 'CreateUsers', '2023-06-13 02:07:45', '2023-06-13 02:07:45', 0),
(20230523153437, 'CreatePosts', '2023-06-13 02:07:45', '2023-06-13 02:07:45', 0),
(20230523155740, 'CreateComment', '2023-06-13 02:07:45', '2023-06-13 02:07:46', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `author_post` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `synopsis` text DEFAULT NULL,
  `review` text DEFAULT NULL,
  `rating` enum('1','2','3','4','5') DEFAULT NULL,
  `image` text DEFAULT NULL,
  `author_book` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `author_post`, `title`, `synopsis`, `review`, `rating`, `image`, `author_book`, `gender`, `created_at`, `updated_at`) VALUES
(2, 7, 'Trambolho', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Necessitatibus officia eaque quam ullam voluptates reprehenderit veritatis. Eveniet sed eum est dolorem qui. Soluta voluptates aut nam at commodi distinctio. Rerum nihil dolorum ipsum omnis.', '2', NULL, 'Janaina Quintana Filho', 'Ficção Juvenil', '2023-06-12 21:08:00', '2023-06-19 21:07:58'),
(3, 10, 'A revolução dos Bichos', 'Verdadeiro clássico moderno, concebido por um dos mais influentes escritores do século XX, A revolução dos bichos é uma fábula sobre o poder. Narra a insurreição dos animais de uma granja contra seus donos. Progressivamente, porém, a revolução degenera numa tirania ainda mais opressiva que a dos humanos.', 'Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.Ipsum dolor earum consequatur quisquam saepe ut labore. Voluptatum et illum facilis. Asperiores est ad vero autem consequatur quod. Cumque sint et aut nemo. Voluptatem corrupti ea quas eveniet.', '3', 'https://m.media-amazon.com/images/I/51KXvVFa2HL.jpg', 'Srta. Ayla Marinho Quintana Sobrinho', 'Distopia', '2023-06-12 21:08:00', '2023-06-19 23:33:39'),
(4, 7, 'oi', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Delectus repudiandae est ut qui. Laborum qui molestias voluptates voluptatem. Error modi laboriosam aut velit neque culpa.', '3', NULL, 'Sr. Murilo Zamana', 'Dener Pena', '2023-06-12 21:08:00', '2023-06-21 21:24:11'),
(5, 3, 'Alice no país das maravilhas', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Eius in voluptatem molestiae voluptatem error aut sit sequi. Debitis recusandae veritatis occaecati quos. Necessitatibus voluptatem minus incidunt labore aut ut.', '4', NULL, 'Srta. Laura de Oliveira Vieira', 'Sr. David Willian Barreto Filho', '2023-06-12 21:08:00', NULL),
(6, 11, 'Dom Quixote', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Et deleniti nihil ipsa rerum. Ipsam quos eveniet qui inventore quis. Et qui impedit esse provident incidunt iure.', '4', NULL, 'Dr. Laiane Roque', 'Liz Liz Galvão', '2023-06-12 21:08:00', NULL),
(7, 11, 'O primo Levi', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Voluptatibus commodi aut odit qui consequatur aut. Qui impedit incidunt minima dolorem similique modi. Et perferendis reiciendis unde est et.', '1', NULL, 'Jaqueline Serra', 'Diego Uchoa Tamoio', '2023-06-12 21:08:00', NULL),
(8, 13, 'Cosmos', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Repellendus autem suscipit cumque. Officia impedit laboriosam et ratione aut quia similique. Neque et magnam iste minus. Voluptate dolorem dolores ut adipisci incidunt est nostrum.', '4', NULL, 'Dr. Paula Esteves Vale Neto', 'Dr. Simon Galindo Filho', '2023-06-12 21:08:00', NULL),
(9, 13, 'Dom Casmurro', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Et necessitatibus tempora voluptas consectetur deleniti mollitia. Unde deleniti nemo expedita. Totam rerum placeat ut enim.', '4', NULL, 'Sr. Luiz Sepúlveda Sobrinho', 'Dr. Gabriela Michele Gonçalves Jr.', '2023-06-12 21:08:00', NULL),
(10, 9, '1984', 'Exatamente como intitula o livro, a história passa-se em 1984. A narrativa revela um futuro distópico em que o Estado é extremamente autoritário e impõe um regime de vigilância sobre a sociedade. O romance acontece na cidade que um dia fora Londres, na fictícia Oceânia, território dominado pela repressão e pelo medo.', 'Numquam voluptatum eius sit. Quo voluptatem qui in molestiae. Sint sint omnis cupiditate praesentium tenetur. Dolorum beatae nihil dolor reiciendis aliquid. Facilis ipsum veritatis aut.', '4', 'https://genfonts.com/wp-content/uploads/2021/03/Livro-1984-capa-dura.jpg', 'Edilson Toledo Bittencourt', 'Ficção histórica', '2023-06-12 21:08:00', '2023-06-17 19:17:01'),
(11, 13, 'As mil e uma noites', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Ullam ea suscipit quas accusamus architecto. Id aspernatur maiores porro id quo hic vel. Error cum reprehenderit praesentium numquam maxime.', '4', NULL, 'Dr. Alexa Talita Domingues Filho', 'Dr. Maximiano Emerson Dominato', '2023-06-12 21:08:00', NULL),
(12, 1, 'A Divina Comédia', 'O livro relata a viagem de Dante ao Inferno, ao Purgatório e ao Paraíso. O poeta Virgílio o acompanha tanto ao inferno – um vale nas entranhas da terra – como ao Purgatório, local onde as almas se purificam dos pecados capitais. Beatriz, a musa de Dante, o conduz ao Paraíso, formado por nove céus.\n', 'Laboriosam voluptate odio veniam aliquid. Voluptatibus delectus officiis est aut. Voluptate ut illum deleniti nam eum saepe ipsam.', '2', 'data:image/jpeg;base64,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', 'Dr. Alexandre Perez', 'Poesia', '2023-06-12 21:08:00', '2023-06-17 19:16:38'),
(13, 1, 'Romeu e Julieta', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Sed nulla quod consequatur quod. Deserunt suscipit magni reiciendis et. Voluptatem pariatur officia non voluptate. Ut sit culpa officia nobis. Debitis iusto sunt earum. Hic omnis unde occaecati et.', '3', NULL, 'Srta. Marília Cynthia Marés Sobrinho', 'Gian Edilson Alcantara Sobrinho', '2023-06-12 21:08:00', NULL),
(14, 6, 'Apologia de Sócrates', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Modi et nobis distinctio porro repellat. Veniam fugiat aliquam quidem sint qui fuga quo. Repellat sed laboriosam quia minus. Culpa tempore ratione facere ratione similique ab sed qui.', '4', NULL, 'Juan Campos Caldeira Neto', 'Rodolfo Bittencourt Sobrinho', '2023-06-12 21:08:00', NULL),
(15, 10, 'O romance das equações algébricas', 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.', 'Ad vero aperiam vel non molestias. Aut iste quod architecto ex illo animi tenetur. Deleniti et expedita qui quos. Et aut similique reprehenderit perspiciatis voluptatem voluptatem.', '1', NULL, 'Julieta de Oliveira Sobrinho', 'Srta. Gabriela Suzana Sandoval', '2023-06-12 21:08:00', NULL),
(16, 5, 'O sonho de Einstein', 'Neste singelo romance que já se tornou um clássico moderno, Alan Lightman imagina os curiosos sonhos do jovem Albert Einstein, nos quais a noção de tempo é totalmente subvertida. Corre o fim da primavera e o início do verão de 1905.', 'Livro sensacional, melhor que já li.', '5', NULL, 'Alan Lightman', 'Poesia', '2023-06-17 14:05:39', NULL),
(17, 8, 'Cem Anos de Solidão', 'Cem Anos de Solidão\" é um romance escrito por Gabriel García Márquez, publicado em 1967. A história se passa na fictícia Macondo, uma cidade isolada do mundo exterior. Acompanhamos a trajetória da família Buendía ao longo de várias gerações, enquanto o tempo se desdobra em um ciclo eterno de amor, traição, morte e solidão.', '\"Cem Anos de Solidão\" é uma obra-prima da literatura latino-americana. Gabriel García Márquez nos presenteia com um mergulho profundo na história de uma família e, ao mesmo tempo, na própria história da América Latina. Sua escrita exuberante e repleta de imagens vívidas cria um mundo fictício tão real que transcende as páginas do livro.', '5', NULL, 'Alan Lightman', 'Realismo Mágico', '2023-06-17 14:24:28', NULL),
(18, 3, 'Cem Anos de Solidão', 'Cem Anos de Solidão\" é um romance escrito por Gabriel García Márquez, publicado em 1967. A história se passa na fictícia Macondo, uma cidade isolada do mundo exterior. Acompanhamos a trajetória da família Buendía ao longo de várias gerações, enquanto o tempo se desdobra em um ciclo eterno de amor, traição, morte e solidão.', '\"Cem Anos de Solidão\" é uma obra-prima da literatura latino-americana. Gabriel García Márquez nos presenteia com um mergulho profundo na história de uma família e, ao mesmo tempo, na própria história da América Latina. Sua escrita exuberante e repleta de imagens vívidas cria um mundo fictício tão real que transcende as páginas do livro.', '5', NULL, 'Alan Lightman', 'Realismo Mágico', '2023-06-17 14:24:28', NULL),
(19, 1, 'Cem Anos de Solidão', 'Cem Anos de Solidão\" é um romance escrito por Gabriel García Márquez, publicado em 1967. A história se passa na fictícia Macondo, uma cidade isolada do mundo exterior. Acompanhamos a trajetória da família Buendía ao longo de várias gerações, enquanto o tempo se desdobra em um ciclo eterno de amor, traição, morte e solidão.', '\"Cem Anos de Solidão\" é uma obra-prima da literatura latino-americana. Gabriel García Márquez nos presenteia com um mergulho profundo na história de uma família e, ao mesmo tempo, na própria história da América Latina. Sua escrita exuberante e repleta de imagens vívidas cria um mundo fictício tão real que transcende as páginas do livro.', '5', NULL, 'Alan Lightman', 'Realismo Mágico', '2023-06-17 14:24:28', NULL),
(20, 16, 'Título title', 'Escreva a sinopse aqui', 'Escreva a resenha aqui', '5', 'public/images/posts/arte-digital-x-bart-simpsons-desenho.jpg', NULL, 'Romance,Ficção,Guia,', '2023-06-19 01:19:30', NULL),
(21, 16, 'Faz o L', 'Sinopse qualquer', 'Resenhamos', '5', 'public/images/posts/arte-digital-x-bart-simpsons-desenho.jpg', NULL, 'Romance,Ficção,Psicológico,', '2023-06-19 02:55:27', NULL),
(22, 16, 'Teste', 'Escreva a sniopse', 'Qualquer coisa', '3', 'public/images/posts/arte-digital-x-bart-simpsons-desenho.jpg', NULL, 'Romance,Psicológico,Terror,', '2023-06-19 20:58:32', NULL),
(23, 16, 'Seiya de Pégaso', 'Cair uma duas vezes ainda é pouco', 'Que me derrubem mil vez vou me levantar de novo', '5', 'public/images/posts/arte-digital-x-bart-simpsons-desenho.jpg', NULL, 'Romance,Psicológico,Terror,Guia', '2023-06-19 21:22:02', NULL),
(24, 16, 'Testando imagem', 'Sinkp´se', 'Resenha', '5', 'public/images/posts/arte-digital-x-bart-simpsons-desenho.jpg', NULL, 'Romance,Ficção,Psicológico', '2023-06-19 23:24:42', NULL),
(25, 16, 'Code Jr', 'Sinopse', 'Resenha', '5', 'public/images/posts/arte-digital-x-bart-simpsons-desenho.jpg', NULL, 'Romance,Psicológico,Guia', '2023-06-20 16:20:59', NULL),
(26, 16, 'Lets create a new post guys', 'Thats a new synopsis!', 'Thats a new review!', '1', 'public/images/posts/img61a90dab78dbb8.81298788.jpg', NULL, 'Romance,Ficção,Psicológico,Autoajuda,Terror,Guia,Infantil', '2023-06-22 00:16:19', NULL),
(27, 16, 'De qualquer forma', 'Os melhores', 'Escrva abc aqui', '2', 'public/images/posts/images.jpg', NULL, 'Ficção,Psicológico,Autoajuda', '2023-06-22 01:52:52', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'benites.gael', 'natan38@deverso.net', 's\'&&$*,}&8BPjhDlK', NULL, '2023-06-12 21:07:57', NULL),
(2, 'ofontes', 'ydasdores@terra.com.br', 'JYtF([_$', NULL, '2023-06-12 21:07:57', NULL),
(3, 'marcelo28', 'bgoncalves@dasilva.net', 'UGE,zxMX98MyDyde\"<', NULL, '2023-06-12 21:07:57', NULL),
(4, 'mcasanova', 'giovanna95@correia.br', 'i|DM2C', NULL, '2023-06-12 21:07:57', NULL),
(5, 'malena.deverso', 'dmares@yahoo.com', 's7!?0R7', NULL, '2023-06-12 21:07:57', NULL),
(6, 'bernardo.saraiva', 'flores.joaquin@uol.com.br', 'k])>xH8YLfww-k4', NULL, '2023-06-12 21:07:57', NULL),
(7, 'hfonseca', 'serra.horacio@terra.com.br', 'HQIhR$', NULL, '2023-06-12 21:07:57', NULL),
(8, 'alonso06', 'paulo43@uol.com.br', '_Stg^0Vsd}9ZoWK!K%8', NULL, '2023-06-12 21:07:57', NULL),
(9, 'bella16', 'gfernandes@ig.com.br', 'bmn-h9h0#:`0J3o)U', NULL, '2023-06-12 21:07:57', NULL),
(10, 'ferraz.roberto', 'hramires@gmail.com', '7O$PGm]B/+\'MN+}', NULL, '2023-06-12 21:07:57', NULL),
(11, 'hpacheco', 'pietra74@esteves.org', 'lg([qj\"lQA+', NULL, '2023-06-12 21:07:57', NULL),
(12, 'adriana72', 'simon43@marques.com', 'd|(9[7G2f_\"', NULL, '2023-06-12 21:07:57', NULL),
(13, 'rogerio48', 'proque@santos.org', '<T`YQ/q7w{mi', NULL, '2023-06-12 21:07:57', NULL),
(14, 'ddelatorre', 'joaquim.vila@padilha.net', 'Z,J!5N1', NULL, '2023-06-12 21:07:57', NULL),
(15, 'rios.tomas', 'pgalhardo@gmail.com', 'CV?f&9VJx04T4', NULL, '2023-06-12 21:07:57', NULL),
(16, 'Admin', 'admin@gmail.com', '12345678', NULL, '2023-06-17 20:07:27', NULL),
(17, 'Vitória SZ', 'vitoria@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', NULL, '2023-06-20 16:17:45', '2023-06-20 16:18:08'),
(18, 'Ricardo', 'ricardo@gmail.com', '1234', NULL, '2023-06-21 21:14:18', NULL),
(19, 'José', 'email', '', 'public/images/users/arte-digital-x-bart-simpsons-desenho.jpg', '2023-06-21 21:45:51', '2023-06-21 22:09:08'),
(20, 'Usuario', 'abc', '', 'public/images/users/fotografia-final-de-semana-1024x768.jpg', '2023-06-21 22:15:52', '2023-06-21 22:18:27'),
(21, 'Amaral', 'amaralzinho@gmail.com', '1234', 'public/images/users/fotografia-final-de-semana-1024x768.jpg', '2023-06-22 01:50:34', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_post_id_posts` (`post_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`version`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_user_id_users` (`author_post`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_users_email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_post_id_posts` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE NO ACTION;

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_user_id_users` FOREIGN KEY (`author_post`) REFERENCES `users` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
