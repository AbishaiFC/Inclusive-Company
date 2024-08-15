
/* Consultas de la tabla Usuario*/
INSERT INTO usuario(Usuario,Correo,Contraseña,TipoUsuario,Foto)values
("AbishaiFC","AprendienteAcademico05@gmail.com","P4s5w0rd!.","Postulante","https://i.pinimg.com/originals/76/f3/f3/76f3f3007969fd3b6db21c744e1ef289.jpg");

Insert into usuario(Usuario,Correo,Contraseña,TipoUsuario,Foto)values
("Inclusive Company","InclusiveCompanyOficial@gmail.com","P3RF3C7V1S10N","Empresa","https://i.pinimg.com/originals/eb/1e/4e/eb1e4e321d35811b4da68208f88251dd.jpg");

select Correo,Contraseña from usuario;

Delete from usuario where ID_Usuario = 2 ;

/* Consultas de la tabla Postulante*/
insert into postulante
(ID_Usuario,Nombre,ApellidoPaterno,ApellidoMaterno,Calle,NumeroCalle,Ciudad,EstadoPaís,CodigoPostal,Telefonocelular,Telefonofijo,Sexo) 
values
("1","Osvaldo Abishai","Flores","Campos","Linea de Pemex","312","Xicotepec","Puebla","73080","7761160598","","Masculino");

select Nombre,ApellidoPaterno,ApellidoMaterno, concat(Calle," ",NumeroCalle," ",Ciudad," ",EstadoPaís) from postulante;

Delete from postulante where ID_Postulante = 2 ;

/* Consultas de la tabla Empresa*/

insert into empresa 
(ID_Usuario,Nombre,Telefono,Calle,numeroCalle,Ciudad,EstadoPaís,Pais,CodigoPostal,DiscapacidadAdmitidas,TipoDeEmpresa) 
values
("2","Inclusive Company","7761261982","Centro","12","Xicotepec","Puebla","México","73080","Visual, Auditiva, Motriz, Intelectual, Del habla, Psicologica, Sensorial, Multiple", "Privada");

select Nombre,TipoDeEmpresa,DiscapacidadAdmitidas from empresa;

delete from empresa where ID_Empresa = 2;

