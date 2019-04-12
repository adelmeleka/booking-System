DELIMITER $$
CREATE PROCEDURE SearchHotelOwner
(
 IN username VARCHAR(25),
 IN email VARCHAR(25)
)
BEGIN

    SELECT Hotel_Owner.Owner_ID FROM Hotel_Owner WHERE Hotel_Owner.Owner_name = username AND Hotel_Owner.Owner_email = email;
         
 
END$$
DELIMITER ;
