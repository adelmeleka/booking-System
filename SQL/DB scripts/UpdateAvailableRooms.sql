DELIMITER $$
CREATE PROCEDURE UpdateAvailableRooms
(
    IN checkInDate DATE,
    IN checkOutDate DATE
)
BEGIN

	DECLARE v_finished   INT DEFAULT 0;
    DECLARE v_roomID     INT DEFAULT 0;
    DECLARE v_hotelID    INT DEFAULT 0;
    DECLARE v_checkInDate  INT DEFAULT 0;
    DECLARE v_checkOutDate INT DEFAULT 0;
    
    DECLARE RoomTypeID INT DEFAULT 0;
 
    -- declare cursor for registration table
    DEClARE registration_cursor CURSOR FOR 
    SELECT Room_ID,Hotel_ID,Check_in_date,Check_out_date FROM registration;

    -- declare NOT FOUND handler
    DECLARE CONTINUE HANDLER 
    FOR NOT FOUND SET v_finished = 1;

     OPEN registration_cursor;
     
     #set default available room count
    UPDATE
        	room_type_details
        SET 
        	room_type_details.Availabe_room_count = room_type_details.Room_count
       	WHERE 
        	room_type_details.Hotel_room_type_ID = RoomTypeID
            AND
            room_type_details.Hotel_ID = v_hotelID;

     get_reg: LOOP

     FETCH registration_cursor INTO v_roomID,v_hotelID,v_checkInDate,v_checkOutDate;

     IF v_finished = 1 THEN 
     LEAVE get_reg;
     END IF;

     -- Update Available room count here 
     IF (v_checkInDate BETWEEN checkInDate AND checkOutDate) OR (v_checkOutDate BETWEEN checkInDate AND checkOutDate)
     THEN
     
     	SELECT 
        	Room_type_ID 
       	INTO 
        	RoomTypeID
        FROM
        	hotel_rooms
        WHERE
        	hotel_rooms.Hotel_ID = v_hotelID 
            AND
            hotel_rooms.Room_ID = v_roomID;
        
        UPDATE
        	room_type_details
        SET 
        	room_type_details.Availabe_room_count = room_type_details.Availabe_room_count - 1
       	WHERE 
        	room_type_details.Hotel_room_type_ID = RoomTypeID
            AND
            room_type_details.Hotel_ID = v_hotelID;
     	
     END IF;

     END LOOP get_reg;

     CLOSE registration_cursor;
    
	

END$$
DELIMITER ;
