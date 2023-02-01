-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: dev.vocallcontact.com.br    Database: recorder
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `api_batch_item`
--

DROP TABLE IF EXISTS `api_batch_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `api_batch_item` (
  `id_item` int NOT NULL AUTO_INCREMENT,
  `id_batch` int DEFAULT NULL,
  `processado` smallint DEFAULT '0',
  `data` text,
  `log` text,
  PRIMARY KEY (`id_item`),
  KEY `idx_id_batch` (`id_batch`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `api_batch_item`
--

LOCK TABLES `api_batch_item` WRITE;
/*!40000 ALTER TABLE `api_batch_item` DISABLE KEYS */;
INSERT INTO `api_batch_item` VALUES (1000,1000,0,'{\"codigo_empresa\":\"45\",\"tipo_relacao\":\"\",\"tipo_de_negocio\":\"\",\"razao_social\":\"Eox Tecnologia\",\"nome_fantasia\":\"\",\"cnpj\":\"11.793.026\\/0001-50\",\"inscricao_estadual\":\"\",\"inscricao_municipal\":\"\",\"codigo_matriz\":\"0\",\"restricao\":\"\",\"data_fundacao\":\"\",\"setor\":\"\",\"segmento\":\"\",\"ramo_atividade\":\"\",\"porte\":\"\",\"email\":\"kelly.l@eox.com.br\",\"email_alternativo\":\"\",\"telefone_principal\":\"4131537200\",\"telefone_1\":\"\",\"telefone_2\":\"\",\"site\":\"\",\"logradouro_faturamento\":\"\",\"numero_faturamento\":\"\",\"complemento_faturamento\":\"\",\"bairro_faturamento\":\"\",\"cep_faturamento\":\"\",\"cidade_faturamento\":\"\",\"uf_faturamento\":\"\",\"pais_faturamento\":\"\",\"logradouro_entrega\":\"\",\"numero_entrega\":\"\",\"complemento_entrega\":\"\",\"bairro_entrega\":\"\",\"cep_entrega\":\"\",\"cidade_entrega\":\"\",\"uf_entrega\":\"\",\"pais_entrega\":\"\",\"data_cadastro\":\"\",\"saldo_disponivel\":\"0,00\",\"limite_credito\":\"0,00\",\"situacao\":\"\",\"observacoes\":\"\",\"data_ultimo_pedido\":\"\",\"data_ultimo_faturamento\":\"\",\"ticket_medio\":\"0,00\",\"recompra_media\":\"0\",\"classificacao\":\"\",\"codigo_responsavel\":\"0\",\"nome_responsavel\":\"\",\"abc_total\":\"0,00\",\"porcento_total\":null,\"evolucao\":\"0\",\"ticket_recompra\":null,\"codigo_empresa_original\":\"45\",\"saldo_devedor\":\"0,00\",\"vendas_apoio\":\"0\",\"codigo_gestor\":\"81070-190\",\"nome_gestor\":\"\",\"campo_complementar\":null,\"campo_complementar2\":null}',NULL),(1001,1000,0,'{\"codigo_empresa\":\"46\",\"tipo_relacao\":\"\",\"tipo_de_negocio\":\"\",\"razao_social\":\"Plinx Tecnologia\",\"nome_fantasia\":\"\",\"cnpj\":\"03.350.452\\/0001-91\",\"inscricao_estadual\":\"\",\"inscricao_municipal\":\"\",\"codigo_matriz\":\"0\",\"restricao\":\"\",\"data_fundacao\":\"\",\"setor\":\"\",\"segmento\":\"\",\"ramo_atividade\":\"\",\"porte\":\"\",\"email\":\"kelly.l@eox.com.br\",\"email_alternativo\":\"\",\"telefone_principal\":\"4131537200\",\"telefone_1\":\"\",\"telefone_2\":\"\",\"site\":\"\",\"logradouro_faturamento\":\"\",\"numero_faturamento\":\"\",\"complemento_faturamento\":\"\",\"bairro_faturamento\":\"\",\"cep_faturamento\":\"\",\"cidade_faturamento\":\"\",\"uf_faturamento\":\"\",\"pais_faturamento\":\"\",\"logradouro_entrega\":\"\",\"numero_entrega\":\"\",\"complemento_entrega\":\"\",\"bairro_entrega\":\"\",\"cep_entrega\":\"\",\"cidade_entrega\":\"\",\"uf_entrega\":\"\",\"pais_entrega\":\"\",\"data_cadastro\":\"\",\"saldo_disponivel\":\"0,00\",\"limite_credito\":\"0,00\",\"situacao\":\"\",\"observacoes\":\"\",\"data_ultimo_pedido\":\"\",\"data_ultimo_faturamento\":\"\",\"ticket_medio\":\"0,00\",\"recompra_media\":\"0\",\"classificacao\":\"\",\"codigo_responsavel\":\"0\",\"nome_responsavel\":\"\",\"abc_total\":\"0,00\",\"porcento_total\":null,\"evolucao\":\"0\",\"ticket_recompra\":null,\"codigo_empresa_original\":\"45\",\"saldo_devedor\":\"0,00\",\"vendas_apoio\":\"0\",\"codigo_gestor\":\"81070-190\",\"nome_gestor\":\"\",\"campo_complementar\":null,\"campo_complementar2\":null}',NULL),(1002,1001,1,'{\"codigo_empresa\":\"45\",\"tipo_relacao\":\"\",\"tipo_de_negocio\":\"\",\"razao_social\":\"Eox Tecnologia\",\"nome_fantasia\":\"\",\"cnpj\":\"11.793.026\\/0001-50\",\"inscricao_estadual\":\"\",\"inscricao_municipal\":\"\",\"codigo_matriz\":\"0\",\"restricao\":\"\",\"data_fundacao\":\"\",\"setor\":\"\",\"segmento\":\"\",\"ramo_atividade\":\"\",\"porte\":\"\",\"email\":\"kelly.l@eox.com.br\",\"email_alternativo\":\"\",\"telefone_principal\":\"4131537200\",\"telefone_1\":\"\",\"telefone_2\":\"\",\"site\":\"\",\"logradouro_faturamento\":\"\",\"numero_faturamento\":\"\",\"complemento_faturamento\":\"\",\"bairro_faturamento\":\"\",\"cep_faturamento\":\"\",\"cidade_faturamento\":\"\",\"uf_faturamento\":\"\",\"pais_faturamento\":\"\",\"logradouro_entrega\":\"\",\"numero_entrega\":\"\",\"complemento_entrega\":\"\",\"bairro_entrega\":\"\",\"cep_entrega\":\"\",\"cidade_entrega\":\"\",\"uf_entrega\":\"\",\"pais_entrega\":\"\",\"data_cadastro\":\"\",\"saldo_disponivel\":\"0,00\",\"limite_credito\":\"0,00\",\"situacao\":\"\",\"observacoes\":\"\",\"data_ultimo_pedido\":\"\",\"data_ultimo_faturamento\":\"\",\"ticket_medio\":\"0,00\",\"recompra_media\":\"0\",\"classificacao\":\"\",\"codigo_responsavel\":\"0\",\"nome_responsavel\":\"\",\"abc_total\":\"0,00\",\"porcento_total\":null,\"evolucao\":\"0\",\"ticket_recompra\":null,\"codigo_empresa_original\":\"45\",\"saldo_devedor\":\"0,00\",\"vendas_apoio\":\"0\",\"codigo_gestor\":\"81070-190\",\"nome_gestor\":\"\",\"campo_complementar\":null,\"campo_complementar2\":null}','{\"codigo_empresa\":\"45\",\"success\":true}'),(1003,1001,1,'{\"codigo_empresa\":\"46\",\"tipo_relacao\":\"\",\"tipo_de_negocio\":\"\",\"razao_social\":\"Plinx Tecnologia\",\"nome_fantasia\":\"\",\"cnpj\":\"03.350.452\\/0001-91\",\"inscricao_estadual\":\"\",\"inscricao_municipal\":\"\",\"codigo_matriz\":\"0\",\"restricao\":\"\",\"data_fundacao\":\"\",\"setor\":\"\",\"segmento\":\"\",\"ramo_atividade\":\"\",\"porte\":\"\",\"email\":\"kelly.l@eox.com.br\",\"email_alternativo\":\"\",\"telefone_principal\":\"4131537200\",\"telefone_1\":\"\",\"telefone_2\":\"\",\"site\":\"\",\"logradouro_faturamento\":\"\",\"numero_faturamento\":\"\",\"complemento_faturamento\":\"\",\"bairro_faturamento\":\"\",\"cep_faturamento\":\"\",\"cidade_faturamento\":\"\",\"uf_faturamento\":\"\",\"pais_faturamento\":\"\",\"logradouro_entrega\":\"\",\"numero_entrega\":\"\",\"complemento_entrega\":\"\",\"bairro_entrega\":\"\",\"cep_entrega\":\"\",\"cidade_entrega\":\"\",\"uf_entrega\":\"\",\"pais_entrega\":\"\",\"data_cadastro\":\"\",\"saldo_disponivel\":\"0,00\",\"limite_credito\":\"0,00\",\"situacao\":\"\",\"observacoes\":\"\",\"data_ultimo_pedido\":\"\",\"data_ultimo_faturamento\":\"\",\"ticket_medio\":\"0,00\",\"recompra_media\":\"0\",\"classificacao\":\"\",\"codigo_responsavel\":\"0\",\"nome_responsavel\":\"\",\"abc_total\":\"0,00\",\"porcento_total\":null,\"evolucao\":\"0\",\"ticket_recompra\":null,\"codigo_empresa_original\":\"45\",\"saldo_devedor\":\"0,00\",\"vendas_apoio\":\"0\",\"codigo_gestor\":\"81070-190\",\"nome_gestor\":\"\",\"campo_complementar\":null,\"campo_complementar2\":null}','{\"codigo_empresa\":\"46\",\"success\":true}'),(1004,1002,1,'{\"codigo_contato\":\"52\",\"nome\":\"dev\",\"codigo_empresa\":\"45\",\"contato_principal\":\"0\",\"email\":\"\",\"cargo\":\"\",\"email_alternativo\":\"\",\"telefone_principal\":\"456456456\",\"telefone_celular\":\"\",\"telefone_alternativo\":\"\",\"telefone_residencial\":\"\",\"observacoes\":\"\",\"data_aniversario\":\"\"}','{\"codigo_contato\":\"52\",\"success\":true}'),(1005,1002,1,'{\"codigo_contato\":\"53\",\"nome\":\"dev2\",\"codigo_empresa\":\"45\",\"contato_principal\":\"0\",\"email\":\"\",\"cargo\":\"\",\"email_alternativo\":\"\",\"telefone_principal\":\"65456478\",\"telefone_celular\":\"\",\"telefone_alternativo\":\"\",\"telefone_residencial\":\"\",\"observacoes\":\"\",\"data_aniversario\":\"\"}','{\"codigo_contato\":\"53\",\"success\":true}');
/*!40000 ALTER TABLE `api_batch_item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-01 15:05:36
