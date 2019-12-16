-- *********************************************
-- * Standard SQL generation                   
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.1              
-- * Generator date: Dec  4 2018              
-- * Generation date: Fri Dec 13 14:30:53 2019 
-- * LUN file: D:\Thierry\OneDrive - Association Cesi Viacesi mail\CESI\projetPAV\merisePAV\191202 pavMCD2.lun 
-- * Schema: 191213 PAV-MLD1/4 
-- ********************************************* 


-- Database Section
-- ________________ 

-- create database mcdpav;


-- DBSpace Section
-- _______________


-- Tables Section
-- _____________ 

create table pav (
     id_pav char(1) not null,
     quartier varchar(255) not null,
     adresse varchar(255) not null,
     postal numeric(5) not null,
     ville varchar(255) not null,
     latitude float(10) not null,
     longitude numeric(10) not null,
     etat char not null,
     constraint ID_pav_ID primary key (id_pav));

create table tournee (
     id_tournee numeric(1) not null,
     date_tournee date not null,
     etat_tournee numeric(1) not null,
     id_user char(1) not null,
     constraint ID_tournee_ID primary key (id_tournee));

create table releve (
     id_releve char(1) not null,
     id_pav char(1) not null,
     id_tournee numeric(1) not null,
     date_releve date not null,
     taux_remplissage numeric(1) not null,
     commentaire varchar(255) not null,
     constraint ID_appartient_a_ID primary key (id_tournee, id_pav),
     constraint IDreleve unique (id_releve));

create table user (
     id_user char(1) not null,
     nom varchar(255) not null,
     prenom varchar(255) not null,
     identifiant varchar(5) not null,
     password varchar(255) not null,
     role numeric(1) not null,
     constraint ID_user_ID primary key (id_user));


-- Constraints Section
-- ___________________ 

alter table tournee add constraint ID_tournee_CHK
     check(exists(select * from releve
                  where releve.id_tournee = id_tournee)); 

alter table tournee add constraint FKeffectue_FK
     foreign key (id_user)
     references user;

alter table releve add constraint FKapp_tou
     foreign key (id_tournee)
     references tournee;

alter table releve add constraint FKapp_pav_FK
     foreign key (id_pav)
     references pav;

alter table user add constraint ID_user_CHK
     check(exists(select * from tournee
                  where tournee.id_user = id_user)); 


-- Index Section
-- _____________ 

create unique index ID_pav_IND
     on pav (id_pav);

create unique index ID_tournee_IND
     on tournee (id_tournee);

create index FKeffectue_IND
     on tournee (id_user);

create unique index ID_appartient_a_IND
     on releve (id_tournee, id_pav);

create index FKapp_pav_IND
     on releve (id_pav);

create unique index ID_user_IND
     on user (id_user);

