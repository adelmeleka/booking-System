DELIMITER $$
CREATE PROCEDURE SignUp
(
 IN isHotelOwnwer BOOLEAN,   
 IN isUser BOOLEAN, 
 IN username VARCHAR(25),
 IN email VARCHAR(25),
 IN pass VARCHAR(25)
)
BEGIN
SELECT concat('facility count ', isHotelOwnwer);
 IF isHotelOwnwer = true
    THEN
    	
    	INSERT INTO Hotel_Owner
        (
            Owner_name,
            Owner_email,
            Owner_password
        )
        VALUES
        (
           username,
           email,
           pass
        );
        
    END IF;
     SELECT concat('facility count ', isUser);
    IF isUser = true
    THEN
    	
        INSERT INTO Users
        (
           User_name,
           User_email,
           User_password
        )
        VALUES
        (
           username,
           email,
           pass
        );
        
    END IF;
 
 
END$$
DELIMITER ;