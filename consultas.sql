-- Evento que actualiza cada 24 horas

delimiter |

CREATE EVENT e
    ON SCHEDULE
      EVERY 24 HOUR
    DO
      BEGIN

        UPDATE programacion set hora_salida=addtime(hora_salida, '0:30:0') WHERE hora_salida<>'15:00:00';
        UPDATE programacion set hora_salida='04:30:00' WHERE hora_salida='15:00:00';
        
    END |

delimiter ;


-- 	
-- SET GLOBAL event_scheduler=ON;







"codeigniter" 3 "pagination" "jquery"