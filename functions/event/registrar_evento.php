<!-- 

select count(u.id_usuario) from usuario_evento u
inner join evento e on e.id_evento = u.id_evento
where e.mes = "Junio" and e.semana = 1

Para validar la cantidad de usuarios que hay en cada evento

 -->