-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS u783757499_htwebsites CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Selecionar banco
USE u783757499_htwebsites;

-- Criar tabela
CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(20),
    tipo_site VARCHAR(100),
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
