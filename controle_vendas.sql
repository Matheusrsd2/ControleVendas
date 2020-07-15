-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.37-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para controlevendas
CREATE DATABASE IF NOT EXISTS `controlevendas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `controlevendas`;

-- Copiando estrutura para tabela controlevendas.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela controlevendas.migrations: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2020_07_13_202058_vendedor', 1),
	(2, '2020_07_13_203656_vendas', 2),
	(3, '2020_07_14_210532_vendedor', 3),
	(4, '2020_07_14_211059_vendas', 4),
	(5, '2020_07_15_080938_vendedor', 5),
	(6, '2020_07_15_082411_vendas', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela controlevendas.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comissao` double NOT NULL,
  `valor_venda` double NOT NULL,
  `vendedor_id` int(10) unsigned NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendas_vendedor_id_foreign` (`vendedor_id`),
  CONSTRAINT `vendas_vendedor_id_foreign` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela controlevendas.vendas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` (`id`, `comissao`, `valor_venda`, `vendedor_id`, `data`) VALUES
	(1, 2.125, 25, 1, '15-07-2020'),
	(2, 44.2, 520, 2, '15-07-2020'),
	(3, 102, 1200, 3, '15-07-2020'),
	(4, 46.75, 550, 1, '15-07-2020'),
	(5, 56.95, 670, 2, '15-07-2020'),
	(6, 10.2, 120, 1, '15-07-2020');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;

-- Copiando estrutura para tabela controlevendas.vendedores
CREATE TABLE IF NOT EXISTS `vendedores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela controlevendas.vendedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`id`, `nome`, `email`, `data`) VALUES
	(1, 'Matheus', 'matheus@mail.com', '15-07-2020'),
	(2, 'Mario', 'mario@mail.com', '15-07-2020'),
	(3, 'Marcos Silva', 'marc@mail.com', '15-07-2020'),
	(4, 'Roberto Alves', 'roberto@gmail.com', '15-07-2020');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
