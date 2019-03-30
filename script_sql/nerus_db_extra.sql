
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `4` FOREIGN KEY (`cd_store`) REFERENCES `stores` (`cd_store`),
  ADD CONSTRAINT `warehouses_cd_product_foreign` FOREIGN KEY (`cd_product`) REFERENCES `products` (`cd_product`);
