DELIMITER $$
CREATE PROCEDURE Search
(
	IN isPriceSelected BOOLEAN,
	IN price INT,
 	IN isStarsSelected BOOLEAN,
    IN stars INT,
    IN isRatingSelected BOOLEAN,
    IN rating INT,
    IN location VARCHAR(25),
    IN roomType VARCHAR(25)
)
BEGIN

    DECLARE roomTypeID INT DEFAULT 0;
    DECLARE hotelID INT DEFAULT 0;
 
    SELECT 
        Type_ID
    INTO
        roomTypeID
     FROM
        hotel_room_type
     WHERE
        Type_name = roomType;
        
 IF isPriceSelected = true
    THEN
    	
        SELECT 
        	* 
        FROM
        	hotel
        WHERE
        	hotel.Location = location
            AND 
            hotel.Hotel_ID IN (SELECT Hotel_ID FROM room_type_details 
                               WHERE Hotel_room_type_ID = roomTypeID AND Availabe_room_count > 0 AND Room_price <= price)
            AND                   
          	hotel.Broker_Suspender_ID IS NULL
            
        ORDER BY hotel.Premium_or_not DESC;           
             

    END IF;
    
    IF isStarsSelected = true
    THEN
    	
        SELECT 
        	* 
        FROM
        	hotel
        WHERE
        	hotel.Location = location
            AND 
            hotel.Hotel_ID IN (SELECT Hotel_ID FROM room_type_details WHERE Hotel_room_type_ID = roomTypeID AND Availabe_room_count > 0)
            AND
            hotel.Stars_rate = stars
            AND
            hotel.Broker_Suspender_ID IS NULL
            
        ORDER BY hotel.Premium_or_not DESC;
        
    END IF;
    
    IF isRatingSelected = true
    THEN
    	
        SELECT 
        	* 
        FROM
        	hotel
        LEFT JOIN
    		user_rates
    	ON
    		hotel.Hotel_ID = user_rates.Hotel_ID    
        WHERE
        	hotel.Location = location
            AND 
            hotel.Hotel_ID IN (SELECT Hotel_ID FROM room_type_details 
                               WHERE Hotel_room_type_ID = roomTypeID AND Availabe_room_count > 0)
           	AND
            user_rates.Rating = rating
            AND                   
          	hotel.Broker_Suspender_ID IS NULL
            
        ORDER BY hotel.Premium_or_not DESC;
        
    END IF;
 
 
END$$
DELIMITER ;

