CREATE table Checklist(
id_checklist INTEGER,
nome_checklist VARCHAR(100),
status 		 VARCHAR(10),
percent  INTEGER,
data 	DATE);
/*-----------------------------------*/
CREATE Table Notificacao(
id_notificacao INTEGER,
id_usuario INTEGER,
mensagem	VARCHAR(200));
/*-----------------------------------*/
CREATE Table Tarefa(
id_tarefa INTEGER,
descricao VARCHAR(100),
status VARCHAR(10),
data_aberto DATE, 
data_conclusao DATE,
list VARCHAR(50));
/*-----------------------------------*/
CREATE Table Usuario(
id_usuario INTEGER,
nome_usuario VARCHAR(100),
idade INTEGER,
login VARCHAR(20),
senha VARCHAR(8),
sexo  VARCHAR(20),
profissao VARCHAR(50),
cpf VARCHAR(11),
cidade VARCHAR(50));
/*-----------------------------------*/