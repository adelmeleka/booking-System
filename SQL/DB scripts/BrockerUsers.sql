DELIMITER //
CREATE PROCEDURE BrokerUsers()
BEGIN
	
    SELECT 
    	users.User_name,
        hotel.Hotel_name,
    	registration.Room_ID,
        registration.Check_in_date,
        registration.Check_out_date
    	
    FROM
    	registration
        
    LEFT JOIN
    	users
    ON
    	registration.User_ID = users.User_ID
        
    LEFT JOIN
    	hotel
    ON
    	registration.Hotel_ID = hotel.Hotel_ID;

END //
DELIMITER ;