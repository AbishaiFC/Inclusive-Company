
/* Consultas de la tabla Usuario*/
INSERT INTO usuario(Usuario,Correo,Contrasenna,TipoUsuario,Foto)values
("AbishaiFC","AprendienteAcademico05@gmail.com","P4s5w0rd!.","Postulante","https://i.pinimg.com/originals/76/f3/f3/76f3f3007969fd3b6db21c744e1ef289.jpg");

Insert into usuario(Usuario,Correo,Contrasenna,TipoUsuario,Foto)values
("Inclusive Company","InclusiveCompanyOficial@gmail.com","P3RF3C7V1S10N","Empresa","https://i.pinimg.com/originals/eb/1e/4e/eb1e4e321d35811b4da68208f88251dd.jpg");

select Correo,Contrasenna from usuario;

Delete from usuario where ID_Usuario = 2 ;

Delete from usuario where ID_Usuario = 3 ;

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

/* Consultas de la tabla Perfil Profesional */
insert into perfilprofesional(ID_Postulante,perfilprofesional,DescripcionPerfilProfesional,Curriculum,IMSS,NivelDeEstudios) 
values
("1","Diseñador grafico","Diseñador enfocado a paginas web, marketing y publicidad en general","dvbhufiuewhfiuewfoiwniu","123452","Universidad");

delete from perfilprofesional where id = 2;

/* Consultas de la tabla Discapacidad */
insert into discapacidad(Id_Postulante,TipoDeDiscapacidad,Dependencias,NiveldeAfectacion,DescripciónAdicional) 
values ("1","Visual","Lentes","Parcial","La fatiga en la vista es mayor al estar expuesto a cuerpos de luz");

truncate discapacidad;

/* Consultas de la tabla Postulacion */
insert into postulacion (ID_Postulante,ID_PerfilProfesional,Descripcion) values ("1","1","Busco empleo, facilidad de adaptacion al entorno, Amigable, disponible 24hrs");

truncate postulacion;

/* Consultas de la tabla trabajo */

insert into trabajo
(ID_Empresa,Categoria,Nombre,Salario,TipoDiscapacidad,Descripcion,Requisitos,TipoDeContrato,DiasLaborales,FechaDePublicacion) 
values
("1","Programación","Programador Backend","1000","Del habla, Auditiva, Sensorial","Se solicita un programador minimo de nivel junior, disponibilidad las 24hrs",
"Disponibilidad, Equipo de computo, conocimientos intermedios de programacion, conocimientos de PHP","Temporal","Lunes,Jueves,Domingo",now());

select Nombre, Salario, TipoDiscapacidad,Requisitos from trabajo;





