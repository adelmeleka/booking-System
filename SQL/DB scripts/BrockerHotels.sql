DELIMITER //
CREATE PROCEDURE BrokerHotels()
BEGIN
	
    SELECT
    	hotel_owner.Owner_name,
        hotel.Hotel_name,
    	hotel.Amout_to_pay
    FROM
    	hotel
          
    LEFT JOIN
    	hotel_owner
    ON
    	hotel.Hotel_owner_ID = hotel_owner.Owner_ID;

END //
DELIMITER ;