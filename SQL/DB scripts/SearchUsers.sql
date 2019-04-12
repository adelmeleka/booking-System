DELIMITER $$
CREATE PROCEDURE SearchUsers
(
 IN username VARCHAR(25),
 IN email VARCHAR(25)
)
BEGIN

    SELECT Users.User_ID FROM Users WHERE Users.User_name = username AND Users.User_email = email;
         
 
END$$
DELIMITER ;
