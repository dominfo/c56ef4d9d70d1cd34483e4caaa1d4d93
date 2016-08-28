-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 06:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickyug`
--

-- --------------------------------------------------------

--
-- Table structure for table `soft`
--

CREATE TABLE `soft` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `release_date` date NOT NULL,
  `total_download` int(10) UNSIGNED NOT NULL,
  `rating` int(2) NOT NULL,
  `download_name` varchar(255) NOT NULL,
  `update_at` date NOT NULL,
  `path` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soft`
--

INSERT INTO `soft` (`id`, `name`, `description`, `size`, `release_date`, `total_download`, `rating`, `download_name`, `update_at`, `path`) VALUES
(1, 'Opela', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 775, '0000-00-00', 61, 100, 'sem_mauris_laoreet.js', '2016-01-12', '1HUBbm82zFz2hvDWY9gCHWAmqMZL3fU8vW'),
(2, 'Y-find', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 812, '0000-00-00', 41, 86, 'blandit.js', '2016-02-25', '1LVztthzRyichj5Y9xYEuMCcbAdLS2GHLr'),
(3, 'Stim', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 501, '0000-00-00', 43, 100, 'viverra_pede_ac.html', '2016-03-17', '1B63VDSH9xbBpzZADEAeonEr4ihcEiZmro'),
(4, 'Zontrax', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 310, '0000-00-00', 14, 77, 'rutrum_nulla.css', '2016-04-14', '1P2Md3CunHxzvq7iA71GmvLpT8ntoStaeK'),
(5, 'Veribet', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 93, '0000-00-00', 43, 54, 'nibh_ligula.css', '2016-08-08', '12CSo9XgXLc5CppqiT8DrqoAvCZRjB1pLB'),
(6, 'Asoka', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 149, '0000-00-00', 89, 81, 'justo_in_blandit.js', '2015-09-02', '16Z1jEqGd7Y9YzinoPRaFidRayt7dJpN1N'),
(7, 'Zontrax', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 632, '0000-00-00', 15, 10, 'nullam_orci_pede.js', '2015-11-04', '19rK4mPUas5BdohqJ4Mg9qb6SVuv3vYsRx'),
(8, 'Bytecard', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 470, '0000-00-00', 75, 35, 'primis.js', '2016-04-02', '1LnPRuefmVNBtB33TQHMbSgAeRbFc3csEW'),
(9, 'Toughjoyfax', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 460, '0000-00-00', 22, 29, 'quis_orci.html', '2016-03-08', '1BAdKedxvxUFAvPAip32THjxJQqxF9ApqM'),
(10, 'Cardify', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 270, '0000-00-00', 36, 61, 'parturient_montes_nascetur.java', '2015-11-20', '12UR8eSptqvtd659Vp9j2994eqdUUZJvXA'),
(11, 'Subin', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', 399, '0000-00-00', 39, 72, 'nulla_nunc.java', '2016-04-04', '1DTxwV4bj8W9vioNi6ASeM8kzPeVdftSVh'),
(12, 'Konklab', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 601, '0000-00-00', 25, 42, 'eros.js', '2015-11-02', '1DqZ4hiq2FZM57AkEJvmP24ksFgCknCGtu'),
(13, 'Span', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 781, '0000-00-00', 44, 81, 'rutrum.js', '2015-11-21', '18KH4F91Tg2sdQvzE85WdCJcLtNDt1F6e3'),
(14, 'Tin', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 755, '0000-00-00', 27, 82, 'vestibulum_sed.js', '2015-10-12', '15DjFCzXaHztj8fs7SJinhAqP99wXcBK1v'),
(15, 'Regrant', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 566, '0000-00-00', 17, 77, 'ultrices_mattis.html', '2015-09-11', '19nLGznMsXE5ZDUbpcX81iR7HeTWtLemer'),
(16, 'Fix San', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 597, '0000-00-00', 90, 84, 'sapien_urna_pretium.html', '2015-12-24', '1NBV8212ReYZqkS9S6h2ZqBoK1izzhd1hi'),
(17, 'Flexidy', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 663, '0000-00-00', 29, 54, 'arcu.java', '2016-02-01', '1NWVLQJFqZPovTEBjfFqz5F6EpRhckzwvd'),
(18, 'Bitchip', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 159, '0000-00-00', 40, 50, 'consectetuer.css', '2016-08-08', '1BPSyvJKybW6tAxnwMkCMryhSyyuyboqoy'),
(19, 'Asoka', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 654, '0000-00-00', 51, 93, 'proin_risus_praesent.html', '2016-01-27', '1CB2ic9u88CR4LPzYfPQuGxBCiLRTpWqRn'),
(20, 'Bytecard', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 753, '0000-00-00', 12, 91, 'pede.css', '2016-07-13', '12ULSXcQgY4KQF7H5TPF75x1G1yFt5424f'),
(21, 'Zathin', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 275, '0000-00-00', 12, 59, 'vestibulum_ante_ipsum.js', '2016-07-17', '1BysE5DJpW2UyEWAQJhhDt6mvsFax6y7Ph'),
(22, 'Zamit', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 480, '0000-00-00', 19, 33, 'mollis.js', '2016-01-05', '1FeBnvaZcm1B7nddGMc31Ls4U5BhBxi42x'),
(23, 'Solarbreeze', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 297, '0000-00-00', 79, 96, 'ut_suscipit.js', '2016-05-04', '1PwpgmLGhGDLm5HZZGyutDdXX283zFJpv2'),
(24, 'Zaam-Dox', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 676, '0000-00-00', 100, 80, 'nullam_orci.js', '2015-11-19', '1ARtxk59uzp44n4S7uPDxrSb8y75abMjAr'),
(25, 'It', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 550, '0000-00-00', 47, 2, 'ante_ipsum.java', '2015-12-12', '1MRaEaZ9s797LZhtwS945zwhie2vVf3VGc'),
(26, 'Toughjoyfax', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 259, '0000-00-00', 45, 5, 'convallis_nulla.html', '2015-12-14', '14Ltc9LovUk8LAM5d1DNJuwFB46NeaKBku'),
(27, 'Konklux', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 75, '0000-00-00', 55, 62, 'libero_ut_massa.js', '2016-07-12', '1Q4cPBCLEeAYsy8n7VCU8ssaeM3L8CuXU2'),
(28, 'Otcom', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 183, '0000-00-00', 13, 8, 'posuere_cubilia.js', '2015-11-30', '13u3Pw7xD8BAccJ7bWFtZebUu8sQ49rNiY'),
(29, 'Latlux', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 261, '0000-00-00', 70, 56, 'id_ornare_imperdiet.html', '2016-03-30', '1FZpLv2NX7NdNJfmL3a8u9z4qyK6C7DoDa'),
(30, 'Duobam', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 549, '0000-00-00', 80, 23, 'vivamus_vestibulum_sagittis.html', '2015-08-29', '1C6iaAguArmbv47xoMSpW9Sdf6AdPvKaGF'),
(31, 'Keylex', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 728, '0000-00-00', 5, 93, 'natoque.css', '2016-07-13', '1NBYWzGURPprcw3m7qeVdHQTNnruDzQbc7'),
(32, 'Temp', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 446, '0000-00-00', 53, 5, 'ridiculus.java', '2016-04-25', '1KPNjJZ7FZ1c1dPvZzGDVyiyfmXDWtVH99'),
(33, 'Tampflex', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 387, '0000-00-00', 97, 60, 'maecenas.css', '2015-09-09', '1ALXWv44q6X269UGnnCXNCMSBQr8dzg5kP'),
(34, 'Zathin', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 299, '0000-00-00', 69, 9, 'lacus.css', '2016-05-30', '1LPce8UuCJr7W1bZ5NHiFnPDB9J3h2F3Yz'),
(35, 'Duobam', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 328, '0000-00-00', 99, 75, 'felis_donec_semper.css', '2016-06-27', '1K48fC11dmrojPqXfwLB84uhfCYaPZiKPr'),
(36, 'Vagram', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 664, '0000-00-00', 58, 4, 'aenean.js', '2015-09-19', '1Md2wHnz4wtQTzgMiTiXKqoU2XPc5LqYnA'),
(37, 'Tempsoft', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 250, '0000-00-00', 26, 62, 'amet.java', '2016-03-15', '1PuwTstxWTwgx6zp71i6Ze21dZV4KuW1Hd'),
(38, 'Namfix', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 663, '0000-00-00', 94, 61, 'tristique_tortor.java', '2015-11-08', '1PQoe2QwsU8uVjzRLYL97fdSwwSRjpzHRE'),
(39, 'Tres-Zap', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 448, '0000-00-00', 81, 70, 'proin.css', '2016-02-09', '1CoB4pimvWMa1fxFK2mkSLgyzUT3kZhvCK'),
(40, 'Sub-Ex', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 424, '0000-00-00', 21, 59, 'lectus_aliquam.java', '2015-11-14', '19Ma3d72D14VzSt59FZJgeHH2ZWw9W2fNd'),
(41, 'Matsoft', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 584, '0000-00-00', 4, 100, 'et_ultrices.js', '2015-11-08', '193ooH7srHcNyPyZ7adSUSJsAKkTycf1KF'),
(42, 'Cookley', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 237, '0000-00-00', 46, 13, 'varius_nulla.css', '2016-05-10', '13uyRjS6BtLEq52nJye6gL7EzVxkjoKWD4'),
(43, 'Sub-Ex', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 140, '0000-00-00', 84, 23, 'ligula_in_lacus.java', '2016-06-03', '1FJRwPEJjGXgqTNN1beg4ULAPKUs45zUEg'),
(44, 'Cookley', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 901, '0000-00-00', 50, 13, 'duis.js', '2016-06-10', '1HuGMp1gVXDd6Wn7hijgrL8KTMZDGXbK8D'),
(45, 'Zontrax', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 62, '0000-00-00', 100, 65, 'tellus_in_sagittis.js', '2016-04-20', '13RhEvH411sdHB7rVLRo4xBCoLdXKNvX7Y'),
(46, 'Y-Solowarm', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 534, '0000-00-00', 94, 49, 'vestibulum.css', '2016-04-03', '14sjykzMA9MF7ztVoJbJA9PSWRZ8vVp7aU'),
(47, 'Namfix', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 226, '0000-00-00', 4, 36, 'semper_rutrum_nulla.css', '2015-09-06', '19wD7aaVTdHKR331YyrX1ib5GrT9tWCEhL'),
(48, 'Home Ing', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\n\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 997, '0000-00-00', 97, 23, 'felis_fusce.js', '2016-03-02', '1FWRDviYvabnp1fMU9HWLZEqttRCw5uFJG'),
(49, 'Lotstring', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 332, '0000-00-00', 80, 58, 'non_mattis.js', '2016-03-08', '1MnHjCNJK3KBBb4M5DVrtFeCfkGd8VULDk'),
(50, 'Greenlam', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 924, '0000-00-00', 45, 83, 'id_consequat_in.css', '2015-12-11', '17iK1Gq4Cv5JSDwF5NDDpHQ5cviqxRU6JP'),
(51, 'Sonair', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 195, '0000-00-00', 31, 70, 'parturient_montes.css', '2015-11-07', '18hbrLNZZNfzkPpF3AUEjzDw7MxvvPH8FV'),
(52, 'Sonair', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 390, '0000-00-00', 66, 31, 'vestibulum.java', '2015-11-03', '1G7zEdebxuD37hb6JpKmDZr6xph563RRxT'),
(53, 'Home Ing', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\n\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 307, '0000-00-00', 42, 29, 'ut.css', '2016-08-02', '1JpvCGnbFrUns5VQSAMsi9RhBQWHhpa3g1'),
(54, 'Zamit', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 267, '0000-00-00', 13, 51, 'posuere_cubilia.html', '2016-06-25', '1JsiYcKZU5TomrsFy3AT65XdRCVdLhnJXn'),
(55, 'Temp', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 359, '0000-00-00', 44, 45, 'lorem_ipsum.css', '2015-10-12', '1EPQ8ZhaY8ggvihM4Gm4nJBgsmiq8kVgVK'),
(56, 'Biodex', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 102, '0000-00-00', 69, 15, 'sem_mauris_laoreet.js', '2015-11-12', '1N6rBHc1cGfX7Mgrj8JbBPSXfoRGvwLCDR'),
(57, 'Tempsoft', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 809, '0000-00-00', 9, 33, 'ipsum_primis.js', '2015-09-13', '1DPPPWu1gqgePPDa2GW6DQuervyabBNoAP'),
(58, 'Otcom', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 263, '0000-00-00', 80, 47, 'fusce_posuere.js', '2015-12-23', '1NsjeKvbf3ng8r36hbN34BqkSKBx2n9UiE'),
(59, 'Voltsillam', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 503, '0000-00-00', 13, 84, 'in_quam.css', '2016-02-19', '1GCqWAnjrDFgY8YUvaV39mZPdp9zmJF7PC'),
(60, 'Vagram', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\n\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 856, '0000-00-00', 47, 95, 'at_ipsum.js', '2015-12-28', '139Dsxh51HqT8Tp9mD3B1KykALnn8pc42G'),
(61, 'Tempsoft', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 951, '0000-00-00', 81, 62, 'donec_vitae.js', '2016-04-10', '1AXjUxpgKHRiCSi78RAHJtLN8sFDEbmJZz'),
(62, 'It', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 794, '0000-00-00', 47, 77, 'semper_est_quam.java', '2016-04-19', '1G3ULxbBU3hrD2JHRiMT96KUJicD9pf58v'),
(63, 'Veribet', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 538, '0000-00-00', 27, 73, 'convallis.css', '2016-07-16', '18QYuqPpHPAThFmC9JfXutEqGYp7cL6ivk'),
(64, 'Duobam', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 422, '0000-00-00', 1, 50, 'justo.java', '2016-03-16', '1CWzvmRuwhczxWioSZ5W5dXeZKFcqjxgwE'),
(65, 'Stronghold', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 143, '0000-00-00', 6, 36, 'morbi_quis.html', '2015-12-15', '13jVkSMistsntg4QwN2mq31mrRDi12fTKp'),
(66, 'Opela', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\n\nFusce consequat. Nulla nisl. Nunc nisl.', 565, '0000-00-00', 25, 45, 'tempus.css', '2015-12-12', '1FkyJF7TardkgkR2TBamhpLmjYy65UMZDM'),
(67, 'Latlux', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 494, '0000-00-00', 9, 36, 'vestibulum.js', '2015-12-12', '1JvDfH8u7w3NrYZPZaVAJ17G56q8gPaezZ'),
(68, 'Viva', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 893, '0000-00-00', 12, 90, 'ut.js', '2015-11-10', '1KvrbcWjYoz5Gw2k7BMN8L4rH83h4okUoK'),
(69, 'Kanlam', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 71, '0000-00-00', 59, 43, 'non.js', '2016-01-23', '19zgH5qXFbiJxkpNSQ9WAEANzdSWCQ5UAU'),
(70, 'Temp', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 841, '0000-00-00', 97, 14, 'sapien_iaculis_congue.java', '2016-07-08', '15F1rMs7aFfuYGdFpEZNkWRc8VxambPQzs'),
(71, 'Opela', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 237, '0000-00-00', 42, 80, 'pellentesque.js', '2016-03-28', '1DxBMLwV9a9tryhYrwuB4RGxqMEcb46J2J'),
(72, 'Toughjoyfax', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 696, '0000-00-00', 79, 11, 'sodales_sed_tincidunt.js', '2016-06-11', '1BV4zT43mnXPYLLmZfgV5yRVdhXWfN67gY'),
(73, 'Zontrax', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 622, '0000-00-00', 70, 33, 'faucibus_cursus.js', '2016-02-07', '1M1jRxM8zWenovVytVDsfUbXvpo3E5fLig'),
(74, 'Vagram', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 665, '0000-00-00', 51, 41, 'hac_habitasse.html', '2016-01-12', '1L2XzWWfFtEPFa5kqEkdBvdfAz1rErCeQk'),
(75, 'Solarbreeze', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 732, '0000-00-00', 21, 92, 'auctor_sed.html', '2015-09-20', '1Gbm7D8Gb2NwrHfe3aa4A6BvFKiN5NFB2R'),
(76, 'Alpha', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 945, '0000-00-00', 55, 57, 'donec.js', '2016-07-11', '14wuUPrk9sNLcJ5g9Yj4sfyu4w1Ts1NNZV'),
(77, 'Zathin', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 126, '0000-00-00', 39, 63, 'at.js', '2016-02-27', '1GEBkcG9E7pZ4d24SxJ35hiMAumGfLNVbf'),
(78, 'Tresom', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.\n\nVestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 597, '0000-00-00', 20, 92, 'risus_auctor.js', '2015-11-24', '151v8dEPsyzYZhB1EL4UapqMiaSTqTgcTv'),
(79, 'Voltsillam', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 539, '0000-00-00', 3, 53, 'turpis.js', '2015-09-22', '1KCdSfHvppSyT2vp7zt2V8wigUthzwBFua'),
(80, 'Aerified', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 82, '0000-00-00', 19, 75, 'odio_donec_vitae.css', '2015-12-07', '1F1LqctcHRnnNerutqEqmC9kd4C7nWsU5n'),
(81, 'Redhold', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 930, '0000-00-00', 88, 35, 'non_quam.java', '2016-06-06', '18XDaxgijX79Xkaco8M3CWwfAGbuzpcNM5'),
(82, 'Gembucket', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 259, '0000-00-00', 84, 92, 'sed_tristique_in.js', '2016-03-05', '1PBqejkE7VESkYHxw5Y3GmnMxbB6JB23VB'),
(83, 'Zontrax', 'Fusce consequat. Nulla nisl. Nunc nisl.\n\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 692, '0000-00-00', 89, 95, 'nam.java', '2015-10-23', '1Djdj6xJ1ZJyvss3rsbLRmFKhYgWrU4s6X'),
(84, 'Stronghold', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 666, '0000-00-00', 38, 49, 'egestas_metus.html', '2015-10-03', '1JPfJvgESGhPuxnNUfG82p5CBwKjmmntFZ'),
(85, 'Vagram', 'Fusce consequat. Nulla nisl. Nunc nisl.', 909, '0000-00-00', 81, 71, 'ullamcorper_purus_sit.css', '2016-06-23', '1K33y9JC4itZmJBtgqmNnaDwpSKYBr87H'),
(86, 'Bitwolf', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 754, '0000-00-00', 9, 7, 'in.css', '2015-11-01', '1G5Jn7YpTyNsSCpV7dQuDTsgrYPByfwhYt'),
(87, 'Gembucket', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 870, '0000-00-00', 45, 87, 'nisi_nam_ultrices.js', '2016-06-16', '14KiyQMBh7xW9NvUiFkm1KtTaSV58LHNua'),
(88, 'Domainer', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 922, '0000-00-00', 32, 50, 'condimentum_id_luctus.css', '2015-09-16', '1NkLPoCuuMNRnADBGZPkeMk2iQJKyQdBPG'),
(89, 'Bamity', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 867, '0000-00-00', 3, 80, 'pede.js', '2015-09-26', '1DUWPyidav2MFrNwbaPDJbDBs2Vns3JLPt'),
(90, 'Fintone', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 574, '0000-00-00', 48, 42, 'felis_sed.html', '2016-08-24', '17ixEkMCck2ppCnGZMUqq1aYN1HPZkHbGb'),
(91, 'Aerified', 'Fusce consequat. Nulla nisl. Nunc nisl.\n\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 163, '0000-00-00', 87, 49, 'dolor.js', '2016-05-18', '1keT1HxoTf6rPgAAKGX5oEEK2dftwf9Rf'),
(92, 'Andalax', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 419, '0000-00-00', 5, 58, 'vitae_ipsum.css', '2016-02-23', '18AFh15ATH51zLtE2yPNq7WeMcPLNHx6Uu'),
(93, 'Cookley', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 384, '0000-00-00', 80, 43, 'ultrices.java', '2016-05-11', '1DEmGH1ns3q2Zp1JxEwNaMM3pG2kpPaXv4'),
(94, 'Otcom', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 502, '0000-00-00', 46, 29, 'sapien_in_sapien.java', '2015-10-05', '1M6tWJLPbnzGQtjAxzENCzJRkN8QaW182u'),
(95, 'Greenlam', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 751, '0000-00-00', 40, 53, 'arcu.js', '2015-12-10', '14NYaPXRuqeRfpa55ZzoDRK7GjUceSfmqJ'),
(96, 'Bigtax', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 871, '0000-00-00', 99, 94, 'integer_a.css', '2015-11-06', '1G23f2MUhq3yGSnaxevynjfvsGusbmjzrK'),
(97, 'Tres-Zap', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 199, '0000-00-00', 100, 21, 'sollicitudin.css', '2016-03-14', '1B1RS5H1Kp46F8uokRx2yUFE9A3qcaGBBS'),
(98, 'Cardify', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 426, '0000-00-00', 73, 65, 'sit.js', '2016-05-27', '1HPnr68t9vprwiazqKcHXyyjaSwLgWMv5d'),
(99, 'Otcom', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\n\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 926, '0000-00-00', 93, 57, 'ultrices.js', '2016-06-19', '12JmP5gTcHJqVqbVdC6VVniAVxxbaoPUgs'),
(100, 'Lotlux', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 560, '0000-00-00', 17, 81, 'nulla_pede.java', '2016-02-15', '1NUcpj1PzZhV2YfA6sPpyEZqWbnFyFsWgg');

-- --------------------------------------------------------

--
-- Table structure for table `soft_cat`
--

CREATE TABLE `soft_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `parent_cat_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soft_cat`
--

INSERT INTO `soft_cat` (`id`, `name`, `level`, `parent_cat_id`, `slug`) VALUES
(1, 'win', 1, 0, '/win'),
(2, 'linux', 1, 0, '/linux\r\n'),
(3, 'win1', 2, 1, '/win/win1'),
(4, 'lin1', 2, 2, '/linux/lin1\r\n'),
(5, 'win2', 2, 1, '/win/win2'),
(6, 'win3', 2, 1, '/win/win3');

-- --------------------------------------------------------

--
-- Table structure for table `soft_img`
--

CREATE TABLE `soft_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `soft_id` int(10) UNSIGNED NOT NULL,
  `hash` varchar(255) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soft_img`
--

INSERT INTO `soft_img` (`id`, `soft_id`, `hash`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'sadfe', 'er', '2016-08-04', '2016-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'dallen0', 'Donald', 'Allen', 'dallen0@purevolume.com', 'u0uKnNB1p'),
(2, 'dalvarez1', 'Douglas', 'Alvarez', 'dalvarez1@qq.com', '1RfJjJz2dPk7'),
(26, 'avasquezp', 'Albert', 'Vasquez', 'avasquezp@1688.com', 'S84BKD'),
(28, 'hstewartr', 'Harry', 'Stewart', 'hstewartr@phpbb.com', 'rhAJzKdoQAI'),
(30, 'asimmonst', 'Andrew', 'Simmons', 'asimmonst@soundcloud.com', 'ZFtJOp52Z'),
(31, 'lduncanu', 'Larry', 'Duncan', 'lduncanu@sfgate.com', 'sw1AlU9u3'),
(32, 'mfernandezv', 'Mark', 'Fernandez', 'mfernandezv@un.org', 'z8NpBNAaby'),
(33, 'nolsonw', 'Nicholas', 'Olson', 'nolsonw@prnewswire.com', 'dkH72pBeg2R'),
(34, 'pellisx', 'Paul', 'Ellis', 'pellisx@a8.net', '479CalI'),
(35, 'sbradleyy', 'Sean', 'Bradley', 'sbradleyy@japanpost.jp', 'n0kAMU'),
(36, 'dstephensz', 'Donald', 'Stephens', 'dstephensz@bloglovin.com', 'ocXkjlvXC'),
(37, 'egreen10', 'Eugene', 'Green', 'egreen10@163.com', 'ZfWalo7cTu1'),
(38, 'hthompson11', 'Harold', 'Thompson', 'hthompson11@dagondesign.com', 'vQIKFKB8'),
(39, 'bpeters12', 'Benjamin', 'Peters', 'bpeters12@wikimedia.org', 'TMdOlSVUd4bg'),
(40, 'dschmidt13', 'Daniel', 'Schmidt', 'dschmidt13@shutterfly.com', 'Rp0p4fu'),
(41, 'aford14', 'Andrew', 'Ford', 'aford14@com.com', 'gWMo1a'),
(42, 'emendoza15', 'Eugene', 'Mendoza', 'emendoza15@usatoday.com', 'h4byjyyQt'),
(43, 'bgraham16', 'Bobby', 'Graham', 'bgraham16@aboutads.info', '0CV1PV'),
(44, 'abarnes17', 'Aaron', 'Barnes', 'abarnes17@mozilla.com', 'SG5JaVgMW'),
(45, 'rreed18', 'Robert', 'Reed', 'rreed18@studiopress.com', 'Vaagafo'),
(46, 'jmendoza19', 'Jerry', 'Mendoza', 'jmendoza19@is.gd', 'r1tZcaG7g2'),
(47, 'smason1a', 'Steven', 'Mason', 'smason1a@stanford.edu', 'ahCuGP1jUcZ'),
(48, 'rgarza1b', 'Robert', 'Garza', 'rgarza1b@yale.edu', 'YQhOXvYj'),
(49, 'cbrown1c', 'Carl', 'Brown', 'cbrown1c@prweb.com', 'ZDCxdCWN83F'),
(50, 'hortiz1d', 'Harry', 'Ortiz', 'hortiz1d@upenn.edu', 'eL8AgQy2Kg'),
(51, 'pnichols1e', 'Paul', 'Nichols', 'pnichols1e@unblog.fr', '4hqNpUMc0W'),
(52, 'bgray1f', 'Bobby', 'Gray', 'bgray1f@pinterest.com', 'DVg3ym5'),
(53, 'klopez1g', 'Kenneth', 'Lopez', 'klopez1g@youku.com', 'ZcHdbG9'),
(54, 'rcarr1h', 'Richard', 'Carr', 'rcarr1h@nps.gov', 'uZhsNnmr2P'),
(55, 'jelliott1i', 'Jose', 'Elliott', 'jelliott1i@artisteer.com', 'pLhJXpneIyu'),
(56, 'jthomas1j', 'Juan', 'Thomas', 'jthomas1j@gmpg.org', 'DEa4nh2vow'),
(57, 'ecrawford1k', 'Edward', 'Crawford', 'ecrawford1k@china.com.cn', 'IeqBYh1o9u'),
(58, 'rwashington1l', 'Roy', 'Washington', 'rwashington1l@qq.com', 'S76dOLjy'),
(59, 'pthompson1m', 'Phillip', 'Thompson', 'pthompson1m@buzzfeed.com', 'hHB10RB'),
(60, 'smurray1n', 'Samuel', 'Murray', 'smurray1n@blogger.com', 'dBoficiR6FLZ'),
(61, 'lnguyen1o', 'Louis', 'Nguyen', 'lnguyen1o@shop-pro.jp', 'VSTjSsYd1'),
(62, 'ckim1p', 'Charles', 'Kim', 'ckim1p@yandex.ru', '9ig5dAsje'),
(63, 'ccastillo1q', 'Carlos', 'Castillo', 'ccastillo1q@free.fr', 'l3nBwbZyQl'),
(64, 'rjackson1r', 'Ryan', 'Jackson', 'rjackson1r@zimbio.com', 'XR24Uh'),
(65, 'emontgomery1s', 'Eric', 'Montgomery', 'emontgomery1s@fastcompany.com', 'aeStxsm0aj'),
(66, 'rgraham1t', 'Raymond', 'Graham', 'rgraham1t@networkadvertising.org', 'MJ20AgTYAWT'),
(67, 'egibson1u', 'Eugene', 'Gibson', 'egibson1u@nps.gov', '13tMd6'),
(68, 'krobinson1v', 'Kevin', 'Robinson', 'krobinson1v@canalblog.com', 'TpXNURl'),
(69, 'sstanley1w', 'Sean', 'Stanley', 'sstanley1w@purevolume.com', 'HmJNmaeln3in'),
(70, 'lfox1x', 'Larry', 'Fox', 'lfox1x@vimeo.com', 'ELl9iNhb4EO'),
(71, 'rmorris1y', 'Robert', 'Morris', 'rmorris1y@go.com', 'VGmLIAZ'),
(72, 'hreynolds1z', 'Howard', 'Reynolds', 'hreynolds1z@infoseek.co.jp', 'H6RPiXExE'),
(73, 'hedwards20', 'Harold', 'Edwards', 'hedwards20@people.com.cn', 'aYXuRt'),
(74, 'lspencer21', 'Louis', 'Spencer', 'lspencer21@gnu.org', 'G9PT5H6knsi'),
(75, 'aschmidt22', 'Adam', 'Schmidt', 'aschmidt22@wikia.com', 'imkaB1Jx'),
(76, 'cmoore23', 'Clarence', 'Moore', 'cmoore23@clickbank.net', 'FHdww1'),
(77, 'jsullivan24', 'Joshua', 'Sullivan', 'jsullivan24@msu.edu', 'RjngUj'),
(78, 'jmitchell25', 'James', 'Mitchell', 'jmitchell25@nhs.uk', 'QnbCDoLBnk'),
(79, 'eanderson26', 'Eric', 'Anderson', 'eanderson26@google.com.au', 'zgzlHNne4bgs'),
(80, 'mmurray27', 'Michael', 'Murray', 'mmurray27@usa.gov', 'TTd5UY1xZ9'),
(81, 'sellis28', 'Samuel', 'Ellis', 'sellis28@chron.com', '9Kukid'),
(82, 'lburton29', 'Louis', 'Burton', 'lburton29@foxnews.com', 'Kv2WrhY'),
(83, 'rwalker2a', 'Raymond', 'Walker', 'rwalker2a@google.com.br', 'rXHySmC'),
(84, 'jdunn2b', 'Jason', 'Dunn', 'jdunn2b@discuz.net', 'AnGrkxJ9'),
(85, 'aolson2c', 'Arthur', 'Olson', 'aolson2c@booking.com', 'ejTDJd'),
(86, 'rwilson2d', 'Russell', 'Wilson', 'rwilson2d@ask.com', '3qoPayMwD'),
(87, 'dmiller2e', 'David', 'Miller', 'dmiller2e@china.com.cn', 'onLmNVc6'),
(88, 'lhernandez2f', 'Louis', 'Hernandez', 'lhernandez2f@biblegateway.com', 'kEASLeMPYn'),
(89, 'smendoza2g', 'Steven', 'Mendoza', 'smendoza2g@typepad.com', 'xFDXegtrjzfa'),
(90, 'slynch2h', 'Steven', 'Lynch', 'slynch2h@addtoany.com', '1bxQheCa'),
(91, 'hharvey2i', 'Henry', 'Harvey', 'hharvey2i@plala.or.jp', 'oLux8l3HK2'),
(92, 'cevans2j', 'Clarence', 'Evans', 'cevans2j@discuz.net', 'oUlc6M'),
(93, 'kray2k', 'Kenneth', 'Ray', 'kray2k@amazon.co.uk', 'XSxTGPS56d8'),
(94, 'sellis2l', 'Steven', 'Ellis', 'sellis2l@hexun.com', 'JmOQCghAe'),
(95, 'emontgomery2m', 'Eric', 'Montgomery', 'emontgomery2m@senate.gov', 'ED1YFDNS'),
(96, 'kmoore2n', 'Kenneth', 'Moore', 'kmoore2n@aol.com', 'o3KRiocueHxa'),
(97, 'bmiller2o', 'Brandon', 'Miller', 'bmiller2o@mlb.com', '5JdzqyFqks'),
(98, 'mchapman2p', 'Michael', 'Chapman', 'mchapman2p@howstuffworks.com', 'CW9yCFweD'),
(99, 'jrodriguez2q', 'Jesse', 'Rodriguez', 'jrodriguez2q@ox.ac.uk', 'JecgXNxKmnb'),
(100, 'gortiz2r', 'Gary', 'Ortiz', 'gortiz2r@cafepress.com', '1wuVbhcu34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soft`
--
ALTER TABLE `soft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft_cat`
--
ALTER TABLE `soft_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft_img`
--
ALTER TABLE `soft_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soft`
--
ALTER TABLE `soft`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `soft_cat`
--
ALTER TABLE `soft_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `soft_img`
--
ALTER TABLE `soft_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
