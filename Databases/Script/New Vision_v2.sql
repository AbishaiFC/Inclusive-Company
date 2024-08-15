create database New_Vision2;
use New_Vision2;

create table TipoUsuario(
ID_Usuario int primary key auto_increment,
Usuario varchar(100),
Correo varchar(100),
Contraseña varchar(15),
TipoUsuario enum("Empresa","Postulante"),
Foto varchar(255)
);

create table Datosusuario(
ID_Usuario int,
ID_Foro int,
ID_Notificacion int,
ID_Postulacion int,
Nombre varchar(50),
ApellidoPaterno varchar(50),
ApellidoMaterno varchar(50),
Direccion varchar(50),
CodigoPostal int,
Telefonofijo varchar(12),
Sexo enum("Masculino", "Femenino"),
foreign key(ID_Usuario) references Tipousuario(ID_Usuario));

create table PerfilUsuario(
ID_Usuario int,
PerfilProfesional varchar(100),
DescripcionPerfilProfesional varchar(500),
Curriculum varchar(255),
IMSS int,
foreign key(ID_Usuario) references Tipousuario(ID_Usuario)
);

create table Empresa(
ID_Usuario int,
Nombre varchar(100),
Correo varchar(100),
Telefono varchar(12),
Direccion varchar(50),
DiscapacidadAdmitidas varchar(100),
TipoDeEmpresa enum("Microempresa","Pequeña empresa","Mediana empresa","Gran empresa"),
foreign key(ID_Usuario) references Tipousuario(ID_Usuario));

create table notificacion(
ID_Notificacion int primary key auto_increment,
ID_Usuario int,
Titulo varchar(50),
Asunto varchar(75),
Estado enum("Visto", "No visto"),
Categoria varchar(30),
Fecha date,
foreign key(ID_Usuario) references Tipousuario(ID_Usuario)
);

create table entrevista(
ID_Entrevista int primary key auto_increment,
ID_Usuario int,
ID_Empresa int,
Estado enum("En progreso", "Finalizado"),
Descripcion varchar(100),
Resultado enum("Aprobado","En revision", "No aprobado"),
FechaDeEmision date,
FechaDeResultado date,
foreign key(ID_Usuario)references Tipousuario(ID_Usuario)
);

create table foro(
ID_Foro int primary key auto_increment,
ID_Usuario int,
Titulo varchar(20),
Mensaje varchar(500),
NumeroDeRespuestas int,
FechaDePublicacion datetime,
FOREIGN KEY(ID_Usuario) REFERENCES Tipousuario(ID_usuario));

create table discapacidad(
ID_Usuario int,
TipoDeDiscapacidad varchar(50),
Dependencias varchar(100),
NivelDeAfectacion varchar(100),
DescripciónAdicional varchar(300),
foreign key(ID_Usuario) references Tipousuario(ID_Usuario));

create table postulacion(
ID_Postulacion int primary key auto_increment,
ID_Usuario int,
ID_Discapacidad int,
PerfilProfesional varchar(50),
Descripcion varchar(200),
foreign key(ID_Usuario) references Tipousuario(ID_Usuario));

create table trabajo(
ID_Trabajo int primary key auto_increment,
ID_Usuario int,
ID_EstatusLegal int,
Categoria varchar(25),
Nombre varchar(50),
Salario int,
TipoDiscapacidad varchar(100),
Descripcion varchar(200),
Requisitos varchar(100),
TipoDeContrato varchar(50),
DiasLaborales varchar(100),
FechaDePublicacion date,
FechaLimite date,
foreign key(ID_Usuario) references Tipousuario(ID_Usuario));

create table estatusLegal(
ID_EstatusLegal int primary key auto_increment,
ID_Usuario int,
EstatusDeLaEmpresa enum("Verificado", "En revision", "No verificado"),
Descripcion varchar(200),
FechaDeRevision date,
foreign key(ID_Usuario) references Tipousuario(ID_Usuario)
);