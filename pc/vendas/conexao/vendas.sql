create database vendas2info2022;
use vendas2info2022;

create table usuario(
	id_Usuario int not null auto_increment primary key,
    nome varchar(100)not null,
    email varchar(100)not null,
    senha int not null
);

create table fornecedor(
	id_Fornecedor int not null auto_increment primary key,
    razao varchar(100) not null,
    cnpj varchar(18) not null, 
    endereco varchar(100)not null,
    contato varchar(100)not null,
    telefone varchar(100)not null,
    email varchar(100)not null
);

create table categoria(
	id_Categoria int not null auto_increment primary key,
    descricao varchar(100) not null
);

create table produto(
	id_Produto int not null auto_increment primary key,
    descricao varchar(100) not null,
    valorCusto decimal(12,2) not null,
    quantidade double not null,
    unidade char(2) not null,
    imagem varchar(100)not null,
    id_categoria int not null,
    constraint fk_cat foreign key (id_categoria)
		references categoria (id_categoria) 
);

create table fornecedorProduto(
    id_fornecedor int not null,
    id_produto int not null,
    primary key (id_fornecedor,id_produto),
    constraint fk_func foreign key (id_fornecedor)
		references fornecedor(id_fornecedor),
    constraint fk_pro foreign key (id_produto)
		references produto(id_produto)   
);

create table Cliente(
	id_Cliente int not null auto_increment primary key,
    nome varchar(100) not null,
    cpf varchar(14) not null,
    endereco varchar(100) not null,
    telefone varchar(100) not null,
    email varchar(100) not null,
    senha int not null
);

create table Condicao_Pagamento(
	id_CondPagto int not null auto_increment primary key,
    descricao varchar(50) not null
);

create table Pedido(
	id_Pedido int not null auto_increment primary key,
    dt_Compra datetime not null,
    id_Cliente int not null,
    vr_compra decimal(12,2), 
    id_CondPagto int not null,
    Qtde_Parcelas int default(1),
    vr_Parcela decimal(12,2),
    constraint fk_Cliente foreign key (id_Cliente)
		references Cliente(id_Cliente),
    constraint fk_CondPagto foreign key (id_CondPagto)
		references Condicao_Pagamento(id_CondPagto) 
);

create table Pedido_Produto(
	id_Pedido   int not null,
	id_Produto  int not null,
    Qtde        int not null,
    Vr_Unitario decimal(12,2),
    Vr_Total    decimal(12,2) AS (Qtde * Vr_Unitario) STORED , -- Campo calculado
   primary key (id_Pedido,id_Produto),
   constraint fk_Pedido foreign key (id_Pedido)
		references Pedido(id_Pedido),
   constraint fk_Produto foreign key (id_Produto)
		references Produto(id_Produto) 
);

-- COMANDOS DML - AULA 18/10/2022
INSERT INTO usuario
(nome,
email,
senha)
VALUES
(NULL,
'José Luis Datena',
'datenaOficial@gmail.com',
696969);

INSERT INTO usuario
(nome,
email,
senha)
VALUES
(NULL,
'Ana Luisa Datena',
'analu69@gmail.com',
343536);

INSERT INTO usuario
(nome,
email,
senha)
VALUES
('Felipe Gomes Gonçalves',
'Felipegg@hotmail.com',
565789);

INSERT INTO usuario VALUES (null, 'Dom Pedro de Alcantara','dpa@gmail.com',442235);

INSERT INTO usuario
 VALUES (null, 'Leopoldina de Castro Gana','lpcg2@gmail.com',658991),
		(null, 'Francisco da Silva Santos','fss31@hotmail.com',313235),
		(null, 'Madalena Aguiar Sobral','masobral@hotmail.com',192414),
		(null, 'Vicente Vidigal Vieira','vvv3@hotmail.com',789645),
		(null, 'Severino Chique Chique','scc45@gmail.com',123654);
	



SELECT*FROM USUARIO order by id_usuario;

-- cria a tabela bkp_usuario a partir da tabela usuario
create table bkp_usuario as(select*from usuario);
-- adiciona pk à tabela bkp_usuario
alter table bkp_usuario add primary key (id_usuario);

select*from bkp_usuario

Update bkp_usuario
	set nome = 'Maria Benedita da Silva'
    where id_usuario > 0; 
    
