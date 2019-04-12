DELIMITER $$
CREATE PROCEDURE SignIn
(
 IN isHotelOwnwer BOOLEAN,   
 IN isUser BOOLEAN,   
 IN email VARCHAR(25),
 IN pass VARCHAR(25),
 OUT currentID INT
)
BEGIN

 SET currentID = -1;
 
 IF isHotelOwnwer = true
    THEN
    	
        SELECT
        	hotel_owner.Owner_ID
        INTO
        	currentID 
        FROM
        	hotel_owner
        WHERE
        	hotel_owner.Owner_email = email
            AND
            hotel_owner.Owner_password = pass;
        
    END IF;
    
    IF isUser = true
    THEN
    	
         SELECT
        	users.User_ID
        INTO
        	currentID 
        FROM
        	users
        WHERE
        	users.User_email = email
            AND
            users.User_password = pass;
        
    END IF;
 
 
END$$
DELIMITER ;