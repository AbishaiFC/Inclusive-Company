CREATE DEFINER=`root`@`localhost` TRIGGER `usuario_AFTER_INSERT` AFTER INSERT ON `postulante` FOR EACH ROW begin
	INSERT INTO discapacidad(ID_Postulante) values (New.ID_Postulante);
    INSERT INTO perfilprofesional(ID_Postulante) values (NEW.ID_Postulante);
end