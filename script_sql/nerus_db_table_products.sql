
-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `cd_product` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `un` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cd_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`cd_product`, `nm_product`, `un`, `created_at`, `updated_at`) VALUES
('0001', 'Batatao', 'PCT', '2019-03-18 01:14:39', '2019-03-18 01:14:39'),
('0002', 'Batatao', 'PCT', '2019-03-18 00:45:54', '2019-03-18 00:45:54');
