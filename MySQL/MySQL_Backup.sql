-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Mar-2020 às 22:53
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `texto` text,
  `data_publi` datetime DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id`, `titulo`, `descricao`, `texto`, `data_publi`, `ativo`) VALUES
(1, 'Nova CPU Threadripper', 'Nova CPU da AMD Ã© lanÃ§ada, e Ã© um montro.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex convallis augue laoreet pretium. Integer scelerisque nunc id nisl convallis mollis. Quisque commodo ligula quis turpis pulvinar, convallis scelerisque turpis pharetra. Etiam sit amet augue mollis, ultricies erat at, mollis lacus. Aliquam maximus sodales porttitor. Phasellus ullamcorper dapibus magna sagittis pretium. Duis ex massa, rhoncus in massa a, lobortis venenatis ante.\r\nVivamus vel rutrum mauris. Fusce hendrerit diam mauris, sed sagittis lectus ultricies in. Maecenas ut pharetra arcu. Fusce imperdiet libero et nulla rutrum sagittis. Curabitur bibendum facilisis lorem, a vulputate lectus iaculis vitae. Nam vel justo lorem. Sed fringilla pretium nisi sed egestas. Nam eget dignissim nibh, a lacinia sem. Nunc ac lectus eu enim placerat ornare lacinia non orci.\r\nDuis fermentum varius lorem. Nulla ut tellus sollicitudin, porta lectus ac, fringilla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere tristique sapien, at faucibus nisl malesuada eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec a sodales mauris. Nunc bibendum aliquam risus, sit amet iaculis ipsum semper gravida. Nunc tortor nisl, scelerisque at varius et, cursus vel dolor. Quisque gravida lacus ut lacus tempor molestie.\r\nSuspendisse eu iaculis justo. Maecenas quam est, tempor ac lorem et, ornare maximus odio. Integer eget ligula at nulla ultrices commodo. Cras ornare convallis nibh, sed gravida metus aliquam varius. Maecenas condimentum, nisi nec bibendum consectetur, leo neque porttitor magna, a mattis dui dolor ullamcorper massa. Maecenas luctus consequat ex, ac ornare metus. Aenean in mi tempor, feugiat erat in, ultricies nulla. Vivamus feugiat, libero non fringilla sollicitudin, odio nulla auctor nunc, in pellentesque arcu dolor nec ligula. Phasellus feugiat ultrices nibh, sit amet varius metus tincidunt in. Integer nec diam leo. Proin convallis lectus at semper accumsan.\r\nDuis vel lacinia nulla. Nam purus sapien, consequat porttitor mattis in, rhoncus id nisi. Aenean in imperdiet augue. Ut vel dictum velit. Quisque scelerisque urna lorem, eu elementum odio venenatis sit amet. Sed placerat bibendum purus, efficitur eleifend arcu rhoncus sed. Donec faucibus risus ut nisl euismod, nec commodo dolor bibendum. Aliquam a commodo quam. Etiam hendrerit maximus nibh ac suscipit. Vivamus quam velit, ultricies a lacus at, rutrum maximus sem. Donec sagittis mauris felis, non dignissim diam sodales sit amet. Praesent eros sem, faucibus ut ante eu, egestas dapibus tellus. Nulla mattis lorem nisi, ut congue lacus elementum vel. Aliquam erat volutpat.\r\nUt ut mi eget nulla blandit mattis. Nam condimentum tincidunt est nec gravida. Ut sit amet est eros. Quisque quam odio, blandit ac dui eget, sodales commodo lectus. Etiam vulputate fermentum urna eu tincidunt. Fusce viverra maximus leo eget vehicula. Mauris eu purus eu dolor posuere sagittis. Fusce at massa elit. Nam luctus felis et odio fermentum iaculis. Nam imperdiet lorem vel interdum rhoncus. Aenean elementum justo ac est tempus, eget efficitur neque eleifend. Integer et felis a purus scelerisque congue.\r\nUt eget nibh vitae nisi varius bibendum quis nec ligula. Morbi ultrices pellentesque feugiat. Integer condimentum mauris ac facilisis faucibus. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet fermentum ligula. Praesent at nibh in justo imperdiet imperdiet. Mauris scelerisque imperdiet velit, tempus accumsan orci maximus a. Cras cursus interdum lacus interdum mattis. Ut congue pretium tortor, in interdum risus laoreet a. Suspendisse facilisis quam eu massa malesuada ultricies.\r\nDonec sit amet dictum dolor. Duis feugiat lectus a commodo volutpat. Nulla facilisi. Etiam nunc diam, gravida eu vehicula eu, euismod eu erat. Quisque diam leo, mollis id condimentum nec, condimentum ac mi. Sed lacinia tellus ut sapien venenatis auctor. Duis ligula tortor, volutpat in interdum eget, ultrices in magna.\r\nMaecenas elementum orci sodales, volutpat nunc aliquam, pulvinar orci. Integer rutrum feugiat efficitur. Phasellus et est tortor. Nam laoreet in nisi quis luctus. Nunc eget aliquet justo. Suspendisse malesuada urna nec risus interdum mattis. Donec ac eleifend nisi. Quisque eu justo lectus. Donec faucibus erat et est faucibus, quis aliquam nisl dictum. Cras mollis dui sit amet congue fringilla. Phasellus ut finibus justo. Maecenas vehicula elit ac ante sagittis ultrices. Nam volutpat leo ut sem tristique, in ullamcorper velit mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sit amet erat quis tortor vestibulum rhoncus in eu mi. Aliquam quis condimentum nibh. ', '2020-03-09 18:39:26', 1),
(2, 'Artigo 2', 'YodaYoda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex convallis augue laoreet pretium. Integer scelerisque nunc id nisl convallis mollis. Quisque commodo ligula quis turpis pulvinar, convallis scelerisque turpis pharetra. Etiam sit amet augue mollis, ultricies erat at, mollis lacus. Aliquam maximus sodales porttitor. Phasellus ullamcorper dapibus magna sagittis pretium. Duis ex massa, rhoncus in massa a, lobortis venenatis ante.\r\nVivamus vel rutrum mauris. Fusce hendrerit diam mauris, sed sagittis lectus ultricies in. Maecenas ut pharetra arcu. Fusce imperdiet libero et nulla rutrum sagittis. Curabitur bibendum facilisis lorem, a vulputate lectus iaculis vitae. Nam vel justo lorem. Sed fringilla pretium nisi sed egestas. Nam eget dignissim nibh, a lacinia sem. Nunc ac lectus eu enim placerat ornare lacinia non orci.\r\nDuis fermentum varius lorem. Nulla ut tellus sollicitudin, porta lectus ac, fringilla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere tristique sapien, at faucibus nisl malesuada eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec a sodales mauris. Nunc bibendum aliquam risus, sit amet iaculis ipsum semper gravida. Nunc tortor nisl, scelerisque at varius et, cursus vel dolor. Quisque gravida lacus ut lacus tempor molestie.\r\nSuspendisse eu iaculis justo. Maecenas quam est, tempor ac lorem et, ornare maximus odio. Integer eget ligula at nulla ultrices commodo. Cras ornare convallis nibh, sed gravida metus aliquam varius. Maecenas condimentum, nisi nec bibendum consectetur, leo neque porttitor magna, a mattis dui dolor ullamcorper massa. Maecenas luctus consequat ex, ac ornare metus. Aenean in mi tempor, feugiat erat in, ultricies nulla. Vivamus feugiat, libero non fringilla sollicitudin, odio nulla auctor nunc, in pellentesque arcu dolor nec ligula. Phasellus feugiat ultrices nibh, sit amet varius metus tincidunt in. Integer nec diam leo. Proin convallis lectus at semper accumsan.\r\nDuis vel lacinia nulla. Nam purus sapien, consequat porttitor mattis in, rhoncus id nisi. Aenean in imperdiet augue. Ut vel dictum velit. Quisque scelerisque urna lorem, eu elementum odio venenatis sit amet. Sed placerat bibendum purus, efficitur eleifend arcu rhoncus sed. Donec faucibus risus ut nisl euismod, nec commodo dolor bibendum. Aliquam a commodo quam. Etiam hendrerit maximus nibh ac suscipit. Vivamus quam velit, ultricies a lacus at, rutrum maximus sem. Donec sagittis mauris felis, non dignissim diam sodales sit amet. Praesent eros sem, faucibus ut ante eu, egestas dapibus tellus. Nulla mattis lorem nisi, ut congue lacus elementum vel. Aliquam erat volutpat.\r\nUt ut mi eget nulla blandit mattis. Nam condimentum tincidunt est nec gravida. Ut sit amet est eros. Quisque quam odio, blandit ac dui eget, sodales commodo lectus. Etiam vulputate fermentum urna eu tincidunt. Fusce viverra maximus leo eget vehicula. Mauris eu purus eu dolor posuere sagittis. Fusce at massa elit. Nam luctus felis et odio fermentum iaculis. Nam imperdiet lorem vel interdum rhoncus. Aenean elementum justo ac est tempus, eget efficitur neque eleifend. Integer et felis a purus scelerisque congue.\r\nUt eget nibh vitae nisi varius bibendum quis nec ligula. Morbi ultrices pellentesque feugiat. Integer condimentum mauris ac facilisis faucibus. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet fermentum ligula. Praesent at nibh in justo imperdiet imperdiet. Mauris scelerisque imperdiet velit, tempus accumsan orci maximus a. Cras cursus interdum lacus interdum mattis. Ut congue pretium tortor, in interdum risus laoreet a. Suspendisse facilisis quam eu massa malesuada ultricies.\r\nDonec sit amet dictum dolor. Duis feugiat lectus a commodo volutpat. Nulla facilisi. Etiam nunc diam, gravida eu vehicula eu, euismod eu erat. Quisque diam leo, mollis id condimentum nec, condimentum ac mi. Sed lacinia tellus ut sapien venenatis auctor. Duis ligula tortor, volutpat in interdum eget, ultrices in magna.\r\nMaecenas elementum orci sodales, volutpat nunc aliquam, pulvinar orci. Integer rutrum feugiat efficitur. Phasellus et est tortor. Nam laoreet in nisi quis luctus. Nunc eget aliquet justo. Suspendisse malesuada urna nec risus interdum mattis. Donec ac eleifend nisi. Quisque eu justo lectus. Donec faucibus erat et est faucibus, quis aliquam nisl dictum. Cras mollis dui sit amet congue fringilla. Phasellus ut finibus justo. Maecenas vehicula elit ac ante sagittis ultrices. Nam volutpat leo ut sem tristique, in ullamcorper velit mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sit amet erat quis tortor vestibulum rhoncus in eu mi. Aliquam quis condimentum nibh. ', '2020-03-09 18:45:20', 1),
(3, 'Artigo 3', 'Um fogueira', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex convallis augue laoreet pretium. Integer scelerisque nunc id nisl convallis mollis. Quisque commodo ligula quis turpis pulvinar, convallis scelerisque turpis pharetra. Etiam sit amet augue mollis, ultricies erat at, mollis lacus. Aliquam maximus sodales porttitor. Phasellus ullamcorper dapibus magna sagittis pretium. Duis ex massa, rhoncus in massa a, lobortis venenatis ante.\r\nVivamus vel rutrum mauris. Fusce hendrerit diam mauris, sed sagittis lectus ultricies in. Maecenas ut pharetra arcu. Fusce imperdiet libero et nulla rutrum sagittis. Curabitur bibendum facilisis lorem, a vulputate lectus iaculis vitae. Nam vel justo lorem. Sed fringilla pretium nisi sed egestas. Nam eget dignissim nibh, a lacinia sem. Nunc ac lectus eu enim placerat ornare lacinia non orci.\r\nDuis fermentum varius lorem. Nulla ut tellus sollicitudin, porta lectus ac, fringilla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere tristique sapien, at faucibus nisl malesuada eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec a sodales mauris. Nunc bibendum aliquam risus, sit amet iaculis ipsum semper gravida. Nunc tortor nisl, scelerisque at varius et, cursus vel dolor. Quisque gravida lacus ut lacus tempor molestie.\r\nSuspendisse eu iaculis justo. Maecenas quam est, tempor ac lorem et, ornare maximus odio. Integer eget ligula at nulla ultrices commodo. Cras ornare convallis nibh, sed gravida metus aliquam varius. Maecenas condimentum, nisi nec bibendum consectetur, leo neque porttitor magna, a mattis dui dolor ullamcorper massa. Maecenas luctus consequat ex, ac ornare metus. Aenean in mi tempor, feugiat erat in, ultricies nulla. Vivamus feugiat, libero non fringilla sollicitudin, odio nulla auctor nunc, in pellentesque arcu dolor nec ligula. Phasellus feugiat ultrices nibh, sit amet varius metus tincidunt in. Integer nec diam leo. Proin convallis lectus at semper accumsan.\r\n\r\nDuis vel lacinia nulla. Nam purus sapien, consequat porttitor mattis in, rhoncus id nisi. Aenean in imperdiet augue. Ut vel dictum velit. Quisque scelerisque urna lorem, eu elementum odio venenatis sit amet. Sed placerat bibendum purus, efficitur eleifend arcu rhoncus sed. Donec faucibus risus ut nisl euismod, nec commodo dolor bibendum. Aliquam a commodo quam. Etiam hendrerit maximus nibh ac suscipit. Vivamus quam velit, ultricies a lacus at, rutrum maximus sem. Donec sagittis mauris felis, non dignissim diam sodales sit amet. Praesent eros sem, faucibus ut ante eu, egestas dapibus tellus. Nulla mattis lorem nisi, ut congue lacus elementum vel. Aliquam erat volutpat.\r\nUt ut mi eget nulla blandit mattis. Nam condimentum tincidunt est nec gravida. Ut sit amet est eros. Quisque quam odio, blandit ac dui eget, sodales commodo lectus. Etiam vulputate fermentum urna eu tincidunt. Fusce viverra maximus leo eget vehicula. Mauris eu purus eu dolor posuere sagittis. Fusce at massa elit. Nam luctus felis et odio fermentum iaculis. Nam imperdiet lorem vel interdum rhoncus. Aenean elementum justo ac est tempus, eget efficitur neque eleifend. Integer et felis a purus scelerisque congue.\r\nUt eget nibh vitae nisi varius bibendum quis nec ligula. Morbi ultrices pellentesque feugiat. Integer condimentum mauris ac facilisis faucibus. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet fermentum ligula. Praesent at nibh in justo imperdiet imperdiet. Mauris scelerisque imperdiet velit, tempus accumsan orci maximus a. Cras cursus interdum lacus interdum mattis. Ut congue pretium tortor, in interdum risus laoreet a. Suspendisse facilisis quam eu massa malesuada ultricies.\r\nDonec sit amet dictum dolor. Duis feugiat lectus a commodo volutpat. Nulla facilisi. Etiam nunc diam, gravida eu vehicula eu, euismod eu erat. Quisque diam leo, mollis id condimentum nec, condimentum ac mi. Sed lacinia tellus ut sapien venenatis auctor. Duis ligula tortor, volutpat in interdum eget, ultrices in magna.\r\nMaecenas elementum orci sodales, volutpat nunc aliquam, pulvinar orci. Integer rutrum feugiat efficitur. Phasellus et est tortor. Nam laoreet in nisi quis luctus. Nunc eget aliquet justo. Suspendisse malesuada urna nec risus interdum mattis. Donec ac eleifend nisi. Quisque eu justo lectus. Donec faucibus erat et est faucibus, quis aliquam nisl dictum. Cras mollis dui sit amet congue fringilla. Phasellus ut finibus justo. Maecenas vehicula elit ac ante sagittis ultrices. Nam volutpat leo ut sem tristique, in ullamcorper velit mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sit amet erat quis tortor vestibulum rhoncus in eu mi. Aliquam quis condimentum nibh. ', '2020-03-09 18:47:12', 1),
(4, 'Artigo 4', 'Um artigo demonstrativo.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex convallis augue laoreet pretium. Integer scelerisque nunc id nisl convallis mollis. Quisque commodo ligula quis turpis pulvinar, convallis scelerisque turpis pharetra. Etiam sit amet augue mollis, ultricies erat at, mollis lacus. Aliquam maximus sodales porttitor. Phasellus ullamcorper dapibus magna sagittis pretium. Duis ex massa, rhoncus in massa a, lobortis venenatis ante.\r\nVivamus vel rutrum mauris. Fusce hendrerit diam mauris, sed sagittis lectus ultricies in. Maecenas ut pharetra arcu. Fusce imperdiet libero et nulla rutrum sagittis. Curabitur bibendum facilisis lorem, a vulputate lectus iaculis vitae. Nam vel justo lorem. Sed fringilla pretium nisi sed egestas. Nam eget dignissim nibh, a lacinia sem. Nunc ac lectus eu enim placerat ornare lacinia non orci.\r\nDuis fermentum varius lorem. Nulla ut tellus sollicitudin, porta lectus ac, fringilla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere tristique sapien, at faucibus nisl malesuada eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec a sodales mauris. Nunc bibendum aliquam risus, sit amet iaculis ipsum semper gravida. Nunc tortor nisl, scelerisque at varius et, cursus vel dolor. Quisque gravida lacus ut lacus tempor molestie.\r\nSuspendisse eu iaculis justo. Maecenas quam est, tempor ac lorem et, ornare maximus odio. Integer eget ligula at nulla ultrices commodo. Cras ornare convallis nibh, sed gravida metus aliquam varius. Maecenas condimentum, nisi nec bibendum consectetur, leo neque porttitor magna, a mattis dui dolor ullamcorper massa. Maecenas luctus consequat ex, ac ornare metus. Aenean in mi tempor, feugiat erat in, ultricies nulla. Vivamus feugiat, libero non fringilla sollicitudin, odio nulla auctor nunc, in pellentesque arcu dolor nec ligula. Phasellus feugiat ultrices nibh, sit amet varius metus tincidunt in. Integer nec diam leo. Proin convallis lectus at semper accumsan.\r\n\r\nDuis vel lacinia nulla. Nam purus sapien, consequat porttitor mattis in, rhoncus id nisi. Aenean in imperdiet augue. Ut vel dictum velit. Quisque scelerisque urna lorem, eu elementum odio venenatis sit amet. Sed placerat bibendum purus, efficitur eleifend arcu rhoncus sed. Donec faucibus risus ut nisl euismod, nec commodo dolor bibendum. Aliquam a commodo quam. Etiam hendrerit maximus nibh ac suscipit. Vivamus quam velit, ultricies a lacus at, rutrum maximus sem. Donec sagittis mauris felis, non dignissim diam sodales sit amet. Praesent eros sem, faucibus ut ante eu, egestas dapibus tellus. Nulla mattis lorem nisi, ut congue lacus elementum vel. Aliquam erat volutpat.\r\nUt ut mi eget nulla blandit mattis. Nam condimentum tincidunt est nec gravida. Ut sit amet est eros. Quisque quam odio, blandit ac dui eget, sodales commodo lectus. Etiam vulputate fermentum urna eu tincidunt. Fusce viverra maximus leo eget vehicula. Mauris eu purus eu dolor posuere sagittis. Fusce at massa elit. Nam luctus felis et odio fermentum iaculis. Nam imperdiet lorem vel interdum rhoncus. Aenean elementum justo ac est tempus, eget efficitur neque eleifend. Integer et felis a purus scelerisque congue.\r\nUt eget nibh vitae nisi varius bibendum quis nec ligula. Morbi ultrices pellentesque feugiat. Integer condimentum mauris ac facilisis faucibus. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet fermentum ligula. Praesent at nibh in justo imperdiet imperdiet. Mauris scelerisque imperdiet velit, tempus accumsan orci maximus a. Cras cursus interdum lacus interdum mattis. Ut congue pretium tortor, in interdum risus laoreet a. Suspendisse facilisis quam eu massa malesuada ultricies.\r\nDonec sit amet dictum dolor. Duis feugiat lectus a commodo volutpat. Nulla facilisi. Etiam nunc diam, gravida eu vehicula eu, euismod eu erat. Quisque diam leo, mollis id condimentum nec, condimentum ac mi. Sed lacinia tellus ut sapien venenatis auctor. Duis ligula tortor, volutpat in interdum eget, ultrices in magna.\r\nMaecenas elementum orci sodales, volutpat nunc aliquam, pulvinar orci. Integer rutrum feugiat efficitur. Phasellus et est tortor. Nam laoreet in nisi quis luctus. Nunc eget aliquet justo. Suspendisse malesuada urna nec risus interdum mattis. Donec ac eleifend nisi. Quisque eu justo lectus. Donec faucibus erat et est faucibus, quis aliquam nisl dictum. Cras mollis dui sit amet congue fringilla. Phasellus ut finibus justo. Maecenas vehicula elit ac ante sagittis ultrices. Nam volutpat leo ut sem tristique, in ullamcorper velit mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sit amet erat quis tortor vestibulum rhoncus in eu mi. Aliquam quis condimentum nibh. ', '2020-03-09 18:47:47', 1),
(5, 'Artigo 5', 'Mais um artigo demonstrativo, mas sem imagem.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex convallis augue laoreet pretium. Integer scelerisque nunc id nisl convallis mollis. Quisque commodo ligula quis turpis pulvinar, convallis scelerisque turpis pharetra. Etiam sit amet augue mollis, ultricies erat at, mollis lacus. Aliquam maximus sodales porttitor. Phasellus ullamcorper dapibus magna sagittis pretium. Duis ex massa, rhoncus in massa a, lobortis venenatis ante.\r\nVivamus vel rutrum mauris. Fusce hendrerit diam mauris, sed sagittis lectus ultricies in. Maecenas ut pharetra arcu. Fusce imperdiet libero et nulla rutrum sagittis. Curabitur bibendum facilisis lorem, a vulputate lectus iaculis vitae. Nam vel justo lorem. Sed fringilla pretium nisi sed egestas. Nam eget dignissim nibh, a lacinia sem. Nunc ac lectus eu enim placerat ornare lacinia non orci.\r\nDuis fermentum varius lorem. Nulla ut tellus sollicitudin, porta lectus ac, fringilla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere tristique sapien, at faucibus nisl malesuada eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec a sodales mauris. Nunc bibendum aliquam risus, sit amet iaculis ipsum semper gravida. Nunc tortor nisl, scelerisque at varius et, cursus vel dolor. Quisque gravida lacus ut lacus tempor molestie.\r\nSuspendisse eu iaculis justo. Maecenas quam est, tempor ac lorem et, ornare maximus odio. Integer eget ligula at nulla ultrices commodo. Cras ornare convallis nibh, sed gravida metus aliquam varius. Maecenas condimentum, nisi nec bibendum consectetur, leo neque porttitor magna, a mattis dui dolor ullamcorper massa. Maecenas luctus consequat ex, ac ornare metus. Aenean in mi tempor, feugiat erat in, ultricies nulla. Vivamus feugiat, libero non fringilla sollicitudin, odio nulla auctor nunc, in pellentesque arcu dolor nec ligula. Phasellus feugiat ultrices nibh, sit amet varius metus tincidunt in. Integer nec diam leo. Proin convallis lectus at semper accumsan.\r\n\r\nDuis vel lacinia nulla. Nam purus sapien, consequat porttitor mattis in, rhoncus id nisi. Aenean in imperdiet augue. Ut vel dictum velit. Quisque scelerisque urna lorem, eu elementum odio venenatis sit amet. Sed placerat bibendum purus, efficitur eleifend arcu rhoncus sed. Donec faucibus risus ut nisl euismod, nec commodo dolor bibendum. Aliquam a commodo quam. Etiam hendrerit maximus nibh ac suscipit. Vivamus quam velit, ultricies a lacus at, rutrum maximus sem. Donec sagittis mauris felis, non dignissim diam sodales sit amet. Praesent eros sem, faucibus ut ante eu, egestas dapibus tellus. Nulla mattis lorem nisi, ut congue lacus elementum vel. Aliquam erat volutpat.\r\nUt ut mi eget nulla blandit mattis. Nam condimentum tincidunt est nec gravida. Ut sit amet est eros. Quisque quam odio, blandit ac dui eget, sodales commodo lectus. Etiam vulputate fermentum urna eu tincidunt. Fusce viverra maximus leo eget vehicula. Mauris eu purus eu dolor posuere sagittis. Fusce at massa elit. Nam luctus felis et odio fermentum iaculis. Nam imperdiet lorem vel interdum rhoncus. Aenean elementum justo ac est tempus, eget efficitur neque eleifend. Integer et felis a purus scelerisque congue.\r\nUt eget nibh vitae nisi varius bibendum quis nec ligula. Morbi ultrices pellentesque feugiat. Integer condimentum mauris ac facilisis faucibus. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet fermentum ligula. Praesent at nibh in justo imperdiet imperdiet. Mauris scelerisque imperdiet velit, tempus accumsan orci maximus a. Cras cursus interdum lacus interdum mattis. Ut congue pretium tortor, in interdum risus laoreet a. Suspendisse facilisis quam eu massa malesuada ultricies.\r\nDonec sit amet dictum dolor. Duis feugiat lectus a commodo volutpat. Nulla facilisi. Etiam nunc diam, gravida eu vehicula eu, euismod eu erat. Quisque diam leo, mollis id condimentum nec, condimentum ac mi. Sed lacinia tellus ut sapien venenatis auctor. Duis ligula tortor, volutpat in interdum eget, ultrices in magna.\r\nMaecenas elementum orci sodales, volutpat nunc aliquam, pulvinar orci. Integer rutrum feugiat efficitur. Phasellus et est tortor. Nam laoreet in nisi quis luctus. Nunc eget aliquet justo. Suspendisse malesuada urna nec risus interdum mattis. Donec ac eleifend nisi. Quisque eu justo lectus. Donec faucibus erat et est faucibus, quis aliquam nisl dictum. Cras mollis dui sit amet congue fringilla. Phasellus ut finibus justo. Maecenas vehicula elit ac ante sagittis ultrices. Nam volutpat leo ut sem tristique, in ullamcorper velit mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sit amet erat quis tortor vestibulum rhoncus in eu mi. Aliquam quis condimentum nibh. ', '2020-03-09 18:48:17', 1),
(6, 'Novo Ryzen 3950x', 'Um processador para desktop.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex convallis augue laoreet pretium. Integer scelerisque nunc id nisl convallis mollis. Quisque commodo ligula quis turpis pulvinar, convallis scelerisque turpis pharetra. Etiam sit amet augue mollis, ultricies erat at, mollis lacus. Aliquam maximus sodales porttitor. Phasellus ullamcorper dapibus magna sagittis pretium. Duis ex massa, rhoncus in massa a, lobortis venenatis ante.\r\nVivamus vel rutrum mauris. Fusce hendrerit diam mauris, sed sagittis lectus ultricies in. Maecenas ut pharetra arcu. Fusce imperdiet libero et nulla rutrum sagittis. Curabitur bibendum facilisis lorem, a vulputate lectus iaculis vitae. Nam vel justo lorem. Sed fringilla pretium nisi sed egestas. Nam eget dignissim nibh, a lacinia sem. Nunc ac lectus eu enim placerat ornare lacinia non orci.\r\nDuis fermentum varius lorem. Nulla ut tellus sollicitudin, porta lectus ac, fringilla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer posuere tristique sapien, at faucibus nisl malesuada eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec a sodales mauris. Nunc bibendum aliquam risus, sit amet iaculis ipsum semper gravida. Nunc tortor nisl, scelerisque at varius et, cursus vel dolor. Quisque gravida lacus ut lacus tempor molestie.\r\nSuspendisse eu iaculis justo. Maecenas quam est, tempor ac lorem et, ornare maximus odio. Integer eget ligula at nulla ultrices commodo. Cras ornare convallis nibh, sed gravida metus aliquam varius. Maecenas condimentum, nisi nec bibendum consectetur, leo neque porttitor magna, a mattis dui dolor ullamcorper massa. Maecenas luctus consequat ex, ac ornare metus. Aenean in mi tempor, feugiat erat in, ultricies nulla. Vivamus feugiat, libero non fringilla sollicitudin, odio nulla auctor nunc, in pellentesque arcu dolor nec ligula. Phasellus feugiat ultrices nibh, sit amet varius metus tincidunt in. Integer nec diam leo. Proin convallis lectus at semper accumsan.\r\n\r\nDuis vel lacinia nulla. Nam purus sapien, consequat porttitor mattis in, rhoncus id nisi. Aenean in imperdiet augue. Ut vel dictum velit. Quisque scelerisque urna lorem, eu elementum odio venenatis sit amet. Sed placerat bibendum purus, efficitur eleifend arcu rhoncus sed. Donec faucibus risus ut nisl euismod, nec commodo dolor bibendum. Aliquam a commodo quam. Etiam hendrerit maximus nibh ac suscipit. Vivamus quam velit, ultricies a lacus at, rutrum maximus sem. Donec sagittis mauris felis, non dignissim diam sodales sit amet. Praesent eros sem, faucibus ut ante eu, egestas dapibus tellus. Nulla mattis lorem nisi, ut congue lacus elementum vel. Aliquam erat volutpat.\r\nUt ut mi eget nulla blandit mattis. Nam condimentum tincidunt est nec gravida. Ut sit amet est eros. Quisque quam odio, blandit ac dui eget, sodales commodo lectus. Etiam vulputate fermentum urna eu tincidunt. Fusce viverra maximus leo eget vehicula. Mauris eu purus eu dolor posuere sagittis. Fusce at massa elit. Nam luctus felis et odio fermentum iaculis. Nam imperdiet lorem vel interdum rhoncus. Aenean elementum justo ac est tempus, eget efficitur neque eleifend. Integer et felis a purus scelerisque congue.\r\nUt eget nibh vitae nisi varius bibendum quis nec ligula. Morbi ultrices pellentesque feugiat. Integer condimentum mauris ac facilisis faucibus. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet fermentum ligula. Praesent at nibh in justo imperdiet imperdiet. Mauris scelerisque imperdiet velit, tempus accumsan orci maximus a. Cras cursus interdum lacus interdum mattis. Ut congue pretium tortor, in interdum risus laoreet a. Suspendisse facilisis quam eu massa malesuada ultricies.\r\nDonec sit amet dictum dolor. Duis feugiat lectus a commodo volutpat. Nulla facilisi. Etiam nunc diam, gravida eu vehicula eu, euismod eu erat. Quisque diam leo, mollis id condimentum nec, condimentum ac mi. Sed lacinia tellus ut sapien venenatis auctor. Duis ligula tortor, volutpat in interdum eget, ultrices in magna.\r\nMaecenas elementum orci sodales, volutpat nunc aliquam, pulvinar orci. Integer rutrum feugiat efficitur. Phasellus et est tortor. Nam laoreet in nisi quis luctus. Nunc eget aliquet justo. Suspendisse malesuada urna nec risus interdum mattis. Donec ac eleifend nisi. Quisque eu justo lectus. Donec faucibus erat et est faucibus, quis aliquam nisl dictum. Cras mollis dui sit amet congue fringilla. Phasellus ut finibus justo. Maecenas vehicula elit ac ante sagittis ultrices. Nam volutpat leo ut sem tristique, in ullamcorper velit mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas sit amet erat quis tortor vestibulum rhoncus in eu mi. Aliquam quis condimentum nibh. ', '2020-03-09 18:49:14', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `conteudo_id` int(11) DEFAULT NULL,
  `tipo` varchar(60) DEFAULT NULL,
  `arquivo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `conteudo_id`, `tipo`, `arquivo`) VALUES
(1, 1, 'image/jpeg', 'imagem1.jpg'),
(2, 2, 'image/png', 'imagem2.png'),
(3, 3, 'image/gif', 'imagem3.gif'),
(4, 4, 'image/jpeg', 'imagem4.jpg'),
(5, 6, 'image/jpeg', 'imagem6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `texto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `email`, `texto`) VALUES
(1, 'Rafael Azevedo', 'Rafa@hotmail.com', 'Muitos erros de portuguÃªs nos artigos, vocÃªs precisam de um editor melhor.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `tipo` varchar(60) DEFAULT NULL,
  `arquivo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profile`
--

INSERT INTO `profile` (`id`, `usuario_id`, `tipo`, `arquivo`) VALUES
(1, 1, 'image/png', 'profile1.png'),
(2, 2, 'image/jpeg', 'profile2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(60) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `nome`, `email`, `senha`, `admin`) VALUES
(1, 'Dwyriel', 'Rafael Balut', 'Dwyriel@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'Rafael', 'Rafael Azevedo', 'Rafa@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conteudo_id` (`conteudo_id`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`conteudo_id`) REFERENCES `conteudo` (`id`);

--
-- Limitadores para a tabela `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
