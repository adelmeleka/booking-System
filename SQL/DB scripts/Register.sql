DELIMITER $$
CREATE PROCEDURE Register
(
	IN roomType VARCHAR(25),
    IN hotelName VARCHAR(25),
	IN userID INT,
	IN totalPrice INT,
	IN check_in_date DATE,
	IN check_out_date DATE
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
		
	SELECT 
        Hotel_ID
    INTO
        hotelID
     FROM
        hotel
     WHERE
        Hotel_name = hotelName;
		
	
	
 
END$$
DELIMITER ;