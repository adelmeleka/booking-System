DELIMITER //
CREATE PROCEDURE AddNewHotel
(
    IN ownwerID INT,
    IN HotelName VARCHAR(255),
    IN starsRate INT,
    IN location VARCHAR(255),
    IN premiumOrNot BOOLEAN,
    IN singleExist BOOLEAN,
    IN singleRoomNumber INT,	
    IN singleRoomPrice FLOAT,
    IN doubleExist BOOLEAN,
    IN doubleRoomNumber INT,
    IN doubleRoomPrice FLOAT,
    IN tripleExist BOOLEAN,
    IN tripleRoomNumber INT,
    IN tripleRoomPrice FLOAT,
    IN suitExist BOOLEAN,
    IN suitRoomNumber INT,
    IN suitRoomPrice FLOAT
)
BEGIN

	DECLARE SingleID INT DEFAULT 0;
    DECLARE DoubleID INT DEFAULT 0;
    DECLARE TripleID INT DEFAULT 0;
    DECLARE SuitID INT DEFAULT 0;
	DECLARE HotelID INT DEFAULT 0;
    DECLARE x INT DEFAULT 0;
    DECLARE y INT DEFAULT 0;
    DECLARE facility INT DEFAULT 0;
    
	#Hotel table
	INSERT INTO Hotel
    (
        Hotel_name ,
    	Stars_rate,
     	Location, 
     	Created_date,
     	Premium_or_not,
     	Hotel_owner_ID
    )
	VALUES
    (
       HotelName,
       starsRate ,
       location,
       now(),
       premiumOrNot,
       ownwerID
    );
    
    #Room_Type_Details
    SELECT Hotel_ID into HotelID FROM Hotel WHERE Hotel_name = HotelName;
    
    IF singleExist = true
    THEN 
    
    	SELECT Type_ID into SingleID FROM Hotel_Room_Type WHERE Type_name ="Single Room";
    	
        INSERT INTO Room_Type_Details
        (
            Hotel_room_type_ID,
            Hotel_ID ,
            Room_count,
            Availabe_room_count,
            Room_price
        )
    
		VALUES
    	(
           SingleID,
           HotelID,
           singleRoomNumber,
           singleRoomNumber,
           singleRoomPrice 
        );
        
        #Hotel_Rooms
      
        SET x =  singleRoomNumber;
        WHILE x  > 0
        DO
        
        	INSERT INTO Hotel_Rooms
            (
                Hotel_ID,
                Room_type_ID
            )
            VALUES
            (
               HotelID,
               SingleID
      	    );
        
         	SET  x = x - 1;
        
        END WHILE;
        
        #Images
        
        
        #Facilities
        
    END IF;
    
    IF doubleExist 
    THEN 
    	SELECT Type_ID into DoubleID FROM Hotel_Room_Type WHERE Type_name ="Double Room";
    	
        INSERT INTO Room_Type_Details
        (
            Hotel_room_type_ID,
            Hotel_ID ,
            Room_count,
            Availabe_room_count,
            Room_price
        )
		VALUES
    	(
           DoubleID,
           HotelID,
           doubleRoomNumber,
           doubleRoomNumber,
           doubleRoomPrice 
        );
        
        #Hotel_Rooms
        SET x =  doubleRoomNumber;
        WHILE x  > 0
        DO
        
        	INSERT INTO Hotel_Rooms
            (
                Hotel_ID,
                Room_type_ID
            )
            VALUES
            (
               HotelID,
               DoubleID
      	    );
        
         	SET  x = x - 1;
        
        END WHILE;
        
        #Images
        
        
        #Facilities
       
    END IF;
    
    IF tripleExist 
    THEN 
    	SELECT Type_ID into TripleID FROM Hotel_Room_Type WHERE Type_name ="Triple Room";
    	
        INSERT INTO Room_Type_Details
        (
            Hotel_room_type_ID,
            Hotel_ID ,
            Room_count,
            Availabe_room_count,
            Room_price
        )
    
		VALUES
    	(
           TripleID,
           HotelID,
           tripleRoomNumber,
           tripleRoomNumber,
           tripleRoomPrice 
        );
        
        #Hotel_Rooms
        SET x =  tripleRoomNumber;
        WHILE x  > 0
        DO
        
        	INSERT INTO Hotel_Rooms
            (
                Hotel_ID,
                Room_type_ID
            )

            VALUES
            (
               HotelID,
               TripleID
      	    );
        
         	SET  x = x - 1;
        
        END WHILE;
        
        #Images
        
        
        #Facilities
       
    END IF;
    
    IF suitExist 
    THEN 
    	SELECT Type_ID into SuitID FROM Hotel_Room_Type WHERE Type_name ="Suit Room";
    	
        INSERT INTO Room_Type_Details
        (
            Hotel_room_type_ID,
            Hotel_ID ,
            Room_count,
            Availabe_room_count,
            Room_price
        )
    
		VALUES
    	(
           SuitID,
           HotelID,
           suitRoomNumber,
           suitRoomNumber,
           suitRoomPrice 
        );
        
        #Hotel_Rooms
        SET x =  suitRoomNumber;
        WHILE x  > 0
        DO
        
        	INSERT INTO Hotel_Rooms
            (
                Hotel_ID,
                Room_type_ID
            )

            VALUES
            (
               HotelID,
               SuitID
      	    );
        
         	SET  x = x - 1;
        
        END WHILE;
        
        #Images
        
        
        #Facilities
        
    END IF;
    #Room_Images not handeled yet
   
END //
DELIMITER ;
