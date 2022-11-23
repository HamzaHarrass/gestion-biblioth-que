-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
<<<<<<< HEAD
-- Généré le : mer. 23 nov. 2022 à 10:25
=======
-- Généré le : lun. 21 nov. 2022 à 15:12
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `name_admin` varchar(255) DEFAULT NULL,
=======
  `name` varchar(255) DEFAULT NULL,
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name_admin`, `email`, `password`) VALUES
(1, 'hamza Harrass', 'h.harrass@library.youcode.ma', 'Hamza@1998'),
(2, 'mohmed med', 'm.mohmed@library.youcode.ma', 'Hamza@1998');

=======
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914
-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `name_book` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_genres` int(11) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `name_book`, `auteur`, `description`, `id_admin`, `id_genres`, `prix`, `image`) VALUES
(2, 'This Is How You Lose Her', 'Junot DÃ­az', 'Finalist for the 2012 National Book Award\r\n\r\nA Time and People Top 10 Book of 2012\r\nFinalist for the 2012 Story Prize\r\nChosen as a notable or best book of the year by The New York Times, Entertainment Weekly, The LA Times, Newsday, Barnes & Noble, Amazon,', 1, 7, 120, '51G2GGjeBjL._SX318_BO1,204,203,200_.jpg'),
(3, 'Florida', 'Lauren Groff ', 'The universally-acclaimed return of the New York Times bestselling author of Fates and Furies and Matrix.\r\n\r\nIn Lauren Groffâ€™s Florida, the hot sun shines, but a wild darkness lurks. Florida is a \"superlative\" book (Boston Globe), \"gorgeously weird and ', 1, 7, 110, '1572297319-51Y82I5ACdL.jpg'),
(5, 'CIRCE', 'Madeline Miller', '\"A bold and subversive retelling of the goddess\'s story,\" this #1 New York Times bestseller is \"both epic and intimate in its scope, recasting the most infamous female figure from the Odyssey as a hero in her own right\" (Alexandra Alter, The New York Time', 1, 3, 110, '51dzuwLmm-L.jpg'),
(6, 'Bird Box', 'Josh Malerman', 'Now a Netflix film starring Sandra Bullock, Trevante Rhodes, John Malkovich, Sarah Paulson, and Rosa Salazar!\r\n\r\nWritten with the narrative tension of The Road and the exquisite terror of classic Stephen King, Bird Box is a propulsive, edge-of-your-seat h', 1, 4, 130, '41sRIihnXzL.jpg'),
(7, '1776', ' David McCullough', 'Americaâ€™s beloved and distinguished historian presents, in a book of breathtaking excitement, drama, and narrative force, the stirring story of the year of our nationâ€™s birth, 1776, interweaving, on both sides of the Atlantic, the actions and decision', 1, 8, 140, '51eGhXmi23L._SX332_BO1,204,203,200_.jpg'),
(8, 'To Kill a Mockingbird', 'Harper Lee ', 'Voted America\'s Best-Loved Novel in PBS\'s The Great American Read\r\n\r\nHarper Lee\'s Pulitzer Prize-winning masterwork of honor and injustice in the deep Southâ€”and the heroism of one man in the face of blind and violent hatred\r\n\r\nOne of the most cherished ', 1, 2, 110, '51IXWZzlgSL._SX330_BO1,204,203,200_.jpg'),
(9, 'Wilder Girls', 'Rory Power ', 'Featured in Vultureâ€™s \"11 Books to Read If You Already Miss Yellowjackets\"!\r\n\r\nFrom the author of Burn Our Bodies Down, a feminist Lord of the Flies about three best friends living in quarantine at their island boarding school, and the lengths they go t', 1, 5, 100, '948bfb274921a76cb28b9591dd04cb4b.jpg'),
(10, 'Ninth House ', 'Leigh Bardugo ', '\"The best fantasy novel Iâ€™ve read in years, because itâ€™s about real people....Impossible to put down.\" â€•Stephen King\r\n\r\nThe smash New York Times bestseller from Leigh Bardugo, a mesmerizing tale of power, privilege, and dark magic set among the Ivy ', 2, 3, 220, '41cUxNtr5-L._SX326_BO1,204,203,200_.jpg'),
(11, 'Berserk Deluxe', 'Kentaro Miura', 'Have you got the Guts? Kentaro Miura\'s Berserk has outraged, horrified, and delighted manga and anime fanatics since 1989, creating an international legion of hardcore devotees and inspiring a plethora of TV series, feature films, and video games. And now', 2, 4, 320, '51IrW578SQL._SX347_BO1,204,203,200_.jpg'),
(12, 'Little Girls', ' Ronald Malfi', 'The Bram Stoker Award finalist delivers a chilling horror novel of a childhood revisited, memories resurrected, and fears reborn.\r\n\r\nYears ago, Laurie escaped the troubled house where she was raised. Now she is returning, with her husband and ten-year-old', 2, 4, 50, '41xbjOI02VL.jpg'),
(13, 'Little Women', ' Louisa May Alcott', 'The beautiful 150th anniversary edition of Louisa May Alcott\'s classic tale of the four March sisters, featuring new illustrations and an introduction by New York Times bestselling author J. Courtney Sullivan\r\n\r\nFor generations, children around the world ', 2, 2, 130, '51hKzIW4dzL._SX322_BO1,204,203,200_.jpg');

=======
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pasword` varchar(255) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_genres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914
-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genres` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
<<<<<<< HEAD
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `genres`) VALUES
(1, 'Action'),
(2, 'Classic'),
(3, 'Fantasy'),
(4, 'Horror'),
(5, 'Literary Fiction'),
(6, 'Romance'),
(7, 'Short Stories'),
(8, 'History');

--
=======
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_genres` (`id_genres`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
<<<<<<< HEAD
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_genres`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
=======
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`id_genres`) REFERENCES `genres` (`id`);
>>>>>>> 5c59c2619e74fc8191617c9132bd195544636914
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
