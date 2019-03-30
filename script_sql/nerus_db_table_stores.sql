
-- --------------------------------------------------------

--
-- Estrutura da tabela `stores`
--

DROP TABLE IF EXISTS `stores`;
CREATE TABLE IF NOT EXISTS `stores` (
  `cd_store` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_store` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cd_store`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `stores`
--

INSERT INTO `stores` (`cd_store`, `nm_store`, `created_at`, `updated_at`) VALUES
('0001', 'Barro Preto', '2019-03-18 01:14:25', '2019-03-18 01:14:25'),
('0002', 'Barro Preto', '2019-03-18 01:04:05', '2019-03-18 01:04:05');
