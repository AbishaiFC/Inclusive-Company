create view UsuarioDiscapacidad as select ID_Usuario, TipoDeDiscapacidad from discapacidad;
create view EstatusEmpresa as select ID_Empresa,Nombre, Estatus from empresa;
create view EntrevistaResultado as select Estado, Resultado, FechaDeResultado  from entrevista;
create view DetallesTrabajo as select Nombre, Salario, TipoDiscapacidad, Requisitos from trabajo;
create view Registro as select ID_Usuario, Nombre,Correo, Contraseña from usuario;
create view UsuarioPostulante as select ID_Usuario,Foto, Nombre, ApellidoPaterno, ApellidoMaterno, Sexo from usuario;