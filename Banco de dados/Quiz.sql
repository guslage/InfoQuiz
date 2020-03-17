create database Quiz;

use Quiz;

create table Jogador(
Jogador_id int not null auto_increment primary key,
Nome varchar(30) not null,
Sobrenome varchar(60) not null,
UserName varchar(30) not null,
Senha varchar(30) not null,
Sexo char not null,
Rec_Senha varchar(50) not null,
DataNasc date not null,
NivelAcesso int
);

create table Dificuldade(
Dificuldade_id int not null auto_increment primary key,
Dificuldade varchar(20)
);

create table Conteudo(
Conteudo_id int not null auto_increment primary key,
NomeConteudo varchar(30)
);

create table Materia(
Materia_id int not null auto_increment primary key,
Materia varchar(50) not null
);

create table Perguntas(
Pergunta_id int not null auto_increment primary key,
Enunciado varchar(1000) not null,
Alternativa1 varchar(30) not null,
Alternativa2 varchar(30) not null,
Alternativa3 varchar(30) not null,
Alternativa4 varchar(30) not null,
DificuldadePergunta int not null,
foreign key (DificuldadePergunta) references Dificuldade(Dificuldade_id),
Materia_id int not null,
foreign key (Materia_id) references Materia (Materia_id)
);

create table Pontuacao(
Pontuacao_id int not null auto_increment primary key,
Pontuacao int not null,
Pontuacao_Jogador_id int not null,
foreign key (Pontuacao_Jogador_id) references Jogador (Jogador_id),
Pontuacao_Materia_id int not null,
foreign key (Pontuacao_Materia_id) references Materia (Materia_id)
);

create table Resposta(
Resposta_id int not null auto_increment primary key,
Resposta varchar(30) not null,
Pergunta_Resposta_id int not null,
foreign key (Pergunta_Resposta_id) references Perguntas (Pergunta_id)
);

INSERT INTO `jogador` (`Jogador_id`, `Nome`, `Sobrenome`, `UserName`, `Senha`, `Sexo`, `Rec_Senha`, `DataNasc`, `NivelAcesso`) VALUES (NULL, 'admin', 'admin', 'admin', 'admin', 'M', 'admin', '2000-01-01', '1');