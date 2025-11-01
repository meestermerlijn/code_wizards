-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                8.0.18 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Versie:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE = @@TIME_ZONE */;
/*!40103 SET TIME_ZONE = '+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0 */;
/*!40101 SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES = @@SQL_NOTES, SQL_NOTES = 0 */;


-- Databasestructuur van code_wizards wordt geschreven
DROP DATABASE IF EXISTS `code_wizards`;
CREATE DATABASE IF NOT EXISTS `code_wizards` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION = 'N' */;
USE `code_wizards`;

-- Structuur van  tabel code_wizards.posts wordt geschreven
CREATE TABLE IF NOT EXISTS `posts`
(
    `id`         int(10) unsigned                        NOT NULL AUTO_INCREMENT,
    `user_id`    int(10) unsigned                        NOT NULL,
    `title`      varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
    `content`    mediumtext COLLATE utf8mb4_general_ci   NOT NULL,
    `created_at` timestamp                               NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp                                        DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `FK__users` (`user_id`),
    CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Dumpen data van tabel code_wizards.posts: ~61 rows (ongeveer)
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`)
VALUES (1, 61, 'Ea quae sed ut tempora ex.',
        'Error voluptates culpa ut sunt. Porro vel eaque non. Maiores qui velit ut magni laborum laborum autem. Quos necessitatibus provident sapiente consectetur enim sit voluptatem aut. Autem et et ducimus est quae ut. Ad quia et minus recusandae dolor ab cum. Earum ex omnis eaque accusantium.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (2, 62, 'Sit explicabo et minus nisi.',
        'Nobis fugiat maiores iure provident aut et. Praesentium quisquam corporis atque dignissimos. Illum earum et perspiciatis eos consequatur. Corporis explicabo id totam accusamus. Temporibus autem voluptatibus vel. Dicta a repellat et. Vero voluptatem fugiat atque corporis rerum. Et eaque quia similique quia sed eum molestias.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (3, 62, 'Ut incidunt est nemo at.',
        'Nesciunt voluptate autem sed perspiciatis recusandae. Est ipsam optio porro eaque natus aliquid tempora et. Iste ipsum non mollitia repudiandae voluptatem veniam necessitatibus. Sit labore reiciendis consequatur impedit ut. Id est quam aut soluta excepturi. Et ad omnis praesentium porro adipisci eos harum. Deserunt debitis neque voluptatem eum.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (4, 62, 'Illum sunt assumenda labore officiis dolores.',
        'Eum fuga sed tempore harum dolorem quae ex. Occaecati facere dolore ab sit qui ut non. Tempora eum quae a harum. Eos velit enim quasi quo aliquid. Labore consequatur quae consectetur. Et similique maxime fugit fugiat et et nulla. Aliquam maiores quia ducimus consequatur ullam error. Iusto assumenda natus in sint. Fugit blanditiis quam rerum non.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (5, 63, 'Perspiciatis nulla odio quisquam nemo sed.',
        'Soluta et commodi ullam atque. Laborum quo veritatis voluptatem totam quam autem. Harum nihil rerum dignissimos quia. Maiores reiciendis et magnam magnam qui. Voluptas voluptatem maxime tempore consequatur aut perspiciatis rerum est.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (6, 63, 'Ullam quae ea et est. Voluptas qui et qui quidem.',
        'Enim iusto est itaque qui nemo praesentium nobis dolorem. Ea nesciunt eum minus ut. Nulla eos est qui ducimus mollitia qui iusto. Illo omnis eum maiores quidem. Amet aut deserunt quia. Velit tempore dignissimos ea et. Cumque assumenda excepturi ipsa.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (7, 63, 'Ut mollitia vel itaque nulla cum doloribus.',
        'Aliquid dolore accusamus nulla assumenda aut a sint. Ducimus rerum aspernatur illum ut quibusdam ut. Vel repellendus quaerat qui quidem blanditiis deleniti vel. Est doloremque esse omnis incidunt. Facere impedit similique qui quisquam. Vero minus neque id magni corrupti.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (8, 64, 'Et deserunt autem et.',
        'Non fuga et qui et. Non aut eius et vero aut omnis facilis. Blanditiis doloremque molestiae esse qui sapiente. Error enim delectus hic dolorum odio quasi rerum. Rerum necessitatibus omnis fugit eos nihil. Sed et quia rerum illum non quasi quis. Quasi est dolor praesentium quod ea. Perferendis consequatur incidunt dignissimos rerum. Fugit nesciunt et temporibus et quis voluptatem.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (9, 64, 'Deleniti aperiam aut quia nam ea sunt.',
        'Esse odit dolores numquam in. Officia asperiores sequi vel. Expedita architecto perspiciatis velit aut nihil odio. Est quas placeat nam a repellendus nemo temporibus. In tenetur deserunt sint vitae. Rerum laudantium aut accusantium numquam consequuntur corrupti cupiditate. Nostrum repudiandae commodi qui nihil. Vitae vel id earum est blanditiis.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (10, 65, 'Sit minima sit hic.',
        'Enim expedita voluptatum ducimus temporibus. Perspiciatis non laboriosam voluptate aut qui qui est et. Consequatur omnis cum maiores quo velit et et. Ipsa autem vel qui enim. Recusandae quis ullam voluptatem molestias. Debitis minus reiciendis voluptas dolore. Delectus ratione eos quo debitis in voluptatem. Quos temporibus ratione odit sapiente.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (11, 66, 'Et est omnis enim rerum aut.',
        'Facere rerum velit nostrum enim. Nihil sed sunt quae nisi temporibus et voluptas. Quia fuga neque tempore in maxime voluptas ut pariatur. Vero vitae omnis aut. Officia necessitatibus facere sapiente ducimus consequuntur voluptate rerum in. Debitis doloribus voluptas autem molestias adipisci. In qui et exercitationem aliquid amet temporibus. Modi est velit et aliquid sit.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (12, 66, 'Quae incidunt qui dolores harum voluptas tempora.',
        'Accusantium debitis ea doloribus doloremque debitis dolor. Omnis maiores minus reprehenderit in. Ducimus consequatur culpa mollitia amet at excepturi molestiae. Quas est praesentium qui temporibus eum id voluptas id. Nam itaque nobis non est quaerat labore. Amet nisi reiciendis sapiente eum veritatis nihil rerum voluptas. Eligendi illo et neque velit ducimus deserunt molestias.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (13, 66, 'Et amet suscipit quas sit.',
        'Autem quis id eos et rem qui. Ipsam accusamus voluptatem animi consectetur. Quia qui non et sed quo odit quia. Nesciunt nihil ut delectus velit et ut. Aut corrupti minus consequatur. Corrupti illo error nihil dolor qui. Non quo sint ullam dicta in error autem. Cupiditate voluptatem optio et voluptas saepe laborum vero magnam. Deserunt qui illo recusandae sunt id est.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (14, 67, 'Excepturi cupiditate eum velit nam.',
        'Eius unde voluptatem itaque maxime sed sed. Vel non animi illum molestiae. Quidem est nobis dolorem laborum repellendus excepturi perspiciatis. Voluptatem aliquam non voluptates laborum aliquid corrupti et. Rerum est laudantium nisi est et illum nulla. Iure ut temporibus quasi in modi. Dolores illo quia deserunt aut porro.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (15, 68, 'Hic et voluptatem sunt facere sunt.',
        'Molestiae odit amet enim quae sit et sed. Delectus ut cumque rem impedit dolores numquam. Id nostrum dolorem fugit et beatae alias omnis. Nostrum vitae non et voluptatibus aut est. Quisquam sequi enim doloribus magnam aut quisquam delectus. Accusamus voluptas qui voluptatum iusto sunt. Est ea quos dolorem.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (16, 68, 'Rerum ipsam possimus est iste.',
        'Tempore nam cupiditate eum. Quasi dolor ut vitae et sapiente veniam deserunt. Vel eveniet quia nemo quod impedit. Dolor minus quis non aut. Velit repellendus ut nihil quia qui itaque rerum in. Eius eos quis rerum molestiae omnis. Aut quibusdam aspernatur dignissimos modi quas corrupti occaecati. Illo fuga possimus labore rerum aut pariatur.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (17, 68, 'A ut magnam aut.',
        'Est quo illo doloremque ipsam rerum incidunt. Debitis expedita dignissimos et. Aliquam amet tempore itaque iusto est soluta. Distinctio voluptatem quo nesciunt maiores ducimus voluptatum animi. Tempore ut nostrum natus iure. Est incidunt ab amet et non modi. Dolor deleniti quibusdam ratione maiores. Reiciendis odit pariatur facere veniam maxime.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (18, 69, 'Necessitatibus nihil ipsum reiciendis ipsa harum.',
        'Quia reprehenderit repellat voluptates sed numquam voluptate deserunt. Et aut qui quia in consequuntur repudiandae quo. Quae qui placeat quis. Nemo repudiandae odio autem eos. Dolorem culpa nisi quae assumenda ipsa. Sequi dolores quis illum optio possimus amet ipsum. Corporis quod aut maxime amet modi.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (19, 69, 'Quia aut veritatis dolore culpa dolores a.',
        'Omnis nemo rerum similique eum voluptates. Numquam facilis reiciendis quod voluptatem. Et et quis omnis in animi natus ad corporis. Nulla eveniet nihil quasi debitis. Nobis dicta aut repellendus perspiciatis molestias. Reprehenderit sint sit distinctio quod eos. Et sapiente quis qui et facilis non ex. Aut alias perspiciatis et maiores vel.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (20, 70, 'Velit ipsam aliquam asperiores rerum.',
        'Laudantium atque est omnis ad quia. Est dicta quisquam vel tenetur quia laborum. Amet et eligendi quis ut. Omnis sed reiciendis qui. At enim consequatur sunt molestiae consectetur. Id veniam magni deserunt recusandae rerum. Rerum vel earum temporibus. Nisi similique sint non aut sunt. Error ab porro pariatur occaecati.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
       (21, 70, 'Mollitia sunt adipisci rem reprehenderit et ea.',
        'Soluta est nobis aut aut voluptatem libero. Aspernatur consequuntur id a nihil nostrum assumenda. Est et qui architecto in quos qui molestiae. Illo eum dolores non cupiditate fugiat sit. Accusantium nihil pariatur culpa vel minus. In consequuntur molestiae ut et pariatur itaque. Et facilis id nisi qui. Qui non quo unde dolorem sed.',
        '2023-09-07 07:27:24', '2023-09-07 07:27:24');

-- Structuur van  tabel code_wizards.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users`
(
    `id`         int(10) unsigned                        NOT NULL AUTO_INCREMENT,
    `email`      varchar(255) COLLATE latin1_general_ci  NOT NULL,
    `password`   varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
    `name`       varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
    `role`       varchar(25) COLLATE utf8mb4_general_ci           DEFAULT NULL,
    `profielfoto` varchar(255) COLLATE utf8mb4_general_ci           DEFAULT NULL,
    `created_at` timestamp                               NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp                                        DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` timestamp                               NULL     DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Dumpen data van tabel code_wizards.users: ~60 rows (ongeveer)
INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`, `created_at`, `updated_at`, `deleted_at`)
VALUES (31, 'dkorstman@sam.net', 'secret', 'ing. Pippa die Witte BA', NULL, '2023-09-07 07:23:02',
        '2023-09-07 07:23:02', NULL),
       (61, 'admin@psg.nl', '$2y$10$Iu/2Iftpnmq0yZmnMuZCJuejLk92l97EU8KgUSZSZqSOG3ymtuE4O',
        'Britt Kallen', 'admin', '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (62, 'vandeberg.sophia@sambo.com', '$2y$10$mhg7mDVeRC8kK/N25Kzrk.g6Q2lvLkq4LVOouF6O.192BSqiS.bMm',
        'Marijn Gerritsen Bsc', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (63, 'kort.stef@scholten.nl', '$2y$10$ITnBtU28G2EBN4YQ0YRy6.aOtQBbIrGezKAIE0fMRtLw9M1UIor0C',
        'ds. Maurits Lensen', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (64, 'vanveen.jake@galijn.net', '$2y$10$wnIx6Uis0YKtI6WGLzcxye07aqEjj6.G5QRWIWcJEiOEp7Ozh0N3G',
        'Luke Geldens AD', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (65, 'puck16@diesbergen.nl', '$2y$10$sVFMxQhWGyF9coXE9ZpPeeUp0YJNmTjqTFdlJeaBV4UuoF9Sl2Qfq', 'Ties Huisman',
        NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (66, 'yuksel.tess@devos.net', '$2y$10$vTpzaVN.2VpY75Rr66duZ.UDkuzPGTa72AjgILh9bzUiBgvm4eQT2',
        'ing. Janna Spiegelmaker Spanjaard', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (67, 'farah.justin@hotmail.nl', '$2y$10$uxzAaK2CYSCbxqX6SHtAGOT.ahDrcOLLi5zHFz9RKE/zSnP0YQf9K', 'Merle Wijland',
        NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (68, 'hunal@westerbeek.org', '$2y$10$9uWMvvfxSUOn7XZJZiD7L.TDIl5KyKHk8W7bsnKJPQaQYuW/dY8su', 'Loes Kuijpers',
        NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (69, 'isa23@mallien.org', '$2y$10$UknBBffPw19pOeTQUlPgt.W/2NnBKcskpgJfuGf44SUHV37wefUsq', 'Ivan de la Fleche',
        NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
       (70, 'lvandommelen@denijs.nl', '$2y$10$vYeUeBQ5sSe2Ze4sc0irvuPwdzzuqcz0CHbTweQM5txbqwrvBz9fi',
        'kand. Floortje Adriaansen', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL);

/*!40103 SET TIME_ZONE = IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE = IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS = IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES = IFNULL(@OLD_SQL_NOTES, 1) */;