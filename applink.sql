create database applink;
use applink;

create table usuario(
    email varchar(50),
    nombre varchar(50),
    clave varchar(50),
    constraint USU_EMA_PK primary key(email)
);

create table links(
    id int auto_increment,
    nombre varchar(50),
    link varchar(100),
    emailFK varchar(50),
    constraint LIN_ID_PK primary key(id),
    constraint LIN_EMA_FK foreign key(emailFK) references usuario(email) 
        on delete cascade
);

