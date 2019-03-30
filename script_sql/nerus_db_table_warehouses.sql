
-- --------------------------------------------------------

--
-- Estrutura da tabela `warehouses`
--

DROP TABLE IF EXISTS `warehouses`;
CREATE TABLE IF NOT EXISTS `warehouses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cd_product` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cd_store` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_product` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `warehouses_cd_product_foreign` (`cd_product`),
  KEY `4` (`cd_store`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `warehouses`
--

INSERT INTO `warehouses` (`id`, `cd_product`, `cd_store`, `qtd_product`, `created_at`, `updated_at`) VALUES
(2, '0001', '0001', 5, '2019-03-18 01:14:53', '2019-03-18 01:18:47');
