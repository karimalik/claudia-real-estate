-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table claudia-real-estate.categories: ~3 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'A Vendre ou Louer', '2023-02-18 04:11:50', '2023-02-18 04:11:50'),
	(2, 'A Vendre', '2023-02-18 04:11:58', '2023-02-18 04:11:58'),
	(3, 'A Louer', '2023-02-18 04:12:13', '2023-02-18 04:12:13');

-- Dumping data for table claudia-real-estate.contacts: ~0 rows (approximately)

-- Dumping data for table claudia-real-estate.failed_jobs: ~0 rows (approximately)

-- Dumping data for table claudia-real-estate.migrations: ~0 rows (approximately)

-- Dumping data for table claudia-real-estate.password_resets: ~0 rows (approximately)

-- Dumping data for table claudia-real-estate.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table claudia-real-estate.properties: ~7 rows (approximately)
INSERT INTO `properties` (`id`, `name`, `beds`, `baths`, `city`, `address`, `area`, `number_pieces`, `years`, `description`, `image`, `images`, `basement`, `garage`, `foundation`, `price`, `categorie_id`, `created_at`, `updated_at`) VALUES
	(2, 'MAISON DE PLAIN-PIED', '4', '2', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '6', '2012', 'Super belle opportunité dans le secteur de Gracefield. Un grand bungalow de plus de 1110 pi2 comprenant 4 chambres à coucher et 2 salle de bains L\'emplacement de cette propriété permet d\'avoir une luminosité incroyable à toute heure de la journée. Possibilité de garder le logement parental au sous-sol et générer un revenu mensuel supplémentaire. Une visite s\'impose!', '1676697178-MAISON DE PLAIN-PIED.jpg', NULL, 'Oui', 'Oui', NULL, '189 900', 1, '2023-02-18 04:12:58', '2023-02-18 04:12:58'),
	(3, 'Triplex', '10', '5', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '+10', '2020', 'Super belle maison rénovée au fil du temps. Elle comprend 4 chambres à coucher au total dont 2 au sous-sol. Cette propriété a été aménagé avec un logement parental avec entrée indépendante permettant de générer un revenu supplémentaire. Présentement, les locataires payent 900$ par mois chauffé, éclairé et l\'internet (sans bail). Ils sont prêts à rester ou à quitter. Le logement parental peut être tout simplement enlevé et faire une salle familiale également.', '1676697257-Triplex.jpg', NULL, 'Oui', 'Oui', NULL, '30000', 1, '2023-02-18 04:14:17', '2023-02-18 04:14:17'),
	(4, 'Duplex', '7', '2', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '8', '2020', 'Super belle maison rénovée au fil du temps. Elle comprend 4 chambres à coucher au total dont 2 au sous-sol. Cette propriété a été aménagé avec un logement parental avec entrée indépendante permettant de générer un revenu supplémentaire. Présentement, les locataires payent 900$ par mois chauffé, éclairé et l\'internet (sans bail). Ils sont prêts à rester ou à quitter. Le logement parental peut être tout simplement enlevé et faire une salle familiale également', '1676697323-Duplex.jpg', NULL, 'Non', 'Oui', NULL, '340 000', 2, '2023-02-18 04:15:23', '2023-02-18 04:15:23'),
	(5, 'Duplex', '9', '4', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '+10', '2020', 'Super belle maison rénovée au fil du temps. Elle comprend 4 chambres à coucher au total dont 2 au sous-sol. Cette propriété a été aménagé avec un logement parental avec entrée indépendante permettant de générer un revenu supplémentaire. Présentement, les locataires payent 900$ par mois chauffé, éclairé et l\'internet (sans bail). Ils sont prêts à rester ou à quitter. Le logement parental peut être tout simplement enlevé et faire une salle familiale également', '1676697381-Duplex.jpg', NULL, 'Oui', 'Oui', NULL, '1000 000', 2, '2023-02-18 04:16:21', '2023-02-18 04:16:21'),
	(6, 'Duplex', '1', '2', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '3', '2020', 'Super belle maison rénovée au fil du temps. Elle comprend 4 chambres à coucher au total dont 2 au sous-sol. Cette propriété a été aménagé avec un logement parental avec entrée indépendante permettant de générer un revenu supplémentaire. Présentement, les locataires payent 900$ par mois chauffé, éclairé et l\'internet (sans bail). Ils sont prêts à rester ou à quitter. Le logement parental peut être tout simplement enlevé et faire une salle familiale également', '1676698044-Duplex.jpg', NULL, 'Oui', 'Oui', NULL, '189 900', 1, '2023-02-18 04:27:24', '2023-02-18 04:27:24'),
	(7, 'Triplex', '9', '6', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '+10', '2020', 'Super belle maison rénovée au fil du temps. Elle comprend 4 chambres à coucher au total dont 2 au sous-sol. Cette propriété a été aménagé avec un logement parental avec entrée indépendante permettant de générer un revenu supplémentaire. Présentement, les locataires payent 900$ par mois chauffé, éclairé et l\'internet (sans bail). Ils sont prêts à rester ou à quitter. Le logement parental peut être tout simplement enlevé et faire une salle familiale également', '1676698080-Triplex.jpg', NULL, 'Oui', 'Oui', NULL, '189 900', 1, '2023-02-18 04:28:00', '2023-02-18 04:28:00'),
	(8, 'MAISON DE PLAIN-PIED', '4', '5', 'Quebec', '280 route 105, Gracefield, Qc', NULL, '9', '2012', 'Super belle maison rénovée au fil du temps. Elle comprend 4 chambres à coucher au total dont 2 au sous-sol. Cette propriété a été aménagé avec un logement parental avec entrée indépendante permettant de générer un revenu supplémentaire. Présentement, les locataires payent 900$ par mois chauffé, éclairé et l\'internet (sans bail). Ils sont prêts à rester ou à quitter. Le logement parental peut être tout simplement enlevé et faire une salle familiale également', '1676698127-MAISON DE PLAIN-PIED.jpg', NULL, 'Oui', 'Non', NULL, '1000 000', 2, '2023-02-18 04:28:48', '2023-02-18 04:28:48');



/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
