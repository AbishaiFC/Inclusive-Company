delimiter $$
create procedure AutoIncrementoVerificacion()
begin
declare max_id int;
select ifnull(max(ID_usuario), 0)INTO max_ID FROM ejemplo;
SET @sql = CONCAT('ALTER TABLE ejemplo AUTO_INCREMENT = ',max_id +1);
prepare stmt FROM @sql;
execute stmt;
deallocate prepare stmet;
end
