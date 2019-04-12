DELIMITER //
CREATE PROCEDURE OwnerHotelsWithReservations(IN ownwerID INT)
BEGIN

    SELECT 
        hotel.Hotel_name, 
    	registration.Room_ID,
        registration.Check_in_date,
        registration.Check_out_date 	
        
    FROM
    	registration

    LEFT JOIN
    	hotel
    ON
    	registration.Hotel_ID = hotel.Hotel_ID
    
    WHERE hotel.Hotel_owner_ID = ownwerID; 
    

END //
DELIMITER ;
