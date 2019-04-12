DROP
    DATABASE IF EXISTS HotelSystem;
   
CREATE DATABASE HotelSystem; 

USE
    HotelSystem;
    
CREATE TABLE Hotel(
    Hotel_ID INT NOT NULL AUTO_INCREMENT,
    Hotel_name VARCHAR(100) UNIQUE,
    #mn wezaret el seya7a
    Stars_rate INT,
    Location VARCHAR(100),
    Created_date DATE,
    #single image for the hotel total 
    Hotel_image BLOB,
    Premium_or_not BOOLEAN,
    Hotel_owner_ID INT NOT NULL,
    Broker_Suspender_ID INT,
    Amout_to_pay FLOAT DEFAULT 0,
    PRIMARY KEY(Hotel_ID)
);

CREATE TABLE Hotel_Room_Type(
    Type_ID INT NOT NULL AUTO_INCREMENT,
    Type_name VARCHAR(100),
    PRIMARY KEY(Type_ID)
);


CREATE TABLE Hotel_Rooms(
    Room_ID INT NOT NULL AUTO_INCREMENT,
    Hotel_ID INT NOT NULL,
    Room_type_ID INT NOT NULL,
    PRIMARY KEY(Room_ID , Hotel_ID)
);

CREATE TABLE Hotel_Owner(
    Owner_ID INT NOT NULL AUTO_INCREMENT,
    Owner_name VARCHAR(100) NOT NULL,
    Owner_email VARCHAR(100) NOT NULL,
    Owner_password VARCHAR(100) NOT NULL,
    PRIMARY KEY(Owner_ID)
);

CREATE TABLE Users(
    User_ID INT NOT NULL AUTO_INCREMENT,
    User_name VARCHAR(100) NOT NULL,
    User_email VARCHAR(100) NOT NULL,
    User_password VARCHAR(100) NOT NULL,
    Registration_numbers INT DEFAULT 0,
    PRIMARY KEY(User_ID)
);

CREATE TABLE Broker(
    Broker_ID INT NOT NULL,
    Broker_name VARCHAR(100) NOT NULL,
    Broker_email VARCHAR(100) NOT NULL,
    Broker_password VARCHAR(100) NOT NULL,
    PRIMARY KEY(Broker_ID)
);

CREATE TABLE Hotel_Suspend(
    Hotel_ID INT NOT NULL,
    Broker_ID INT NOT NULL,
    Amount_to_pay FLOAT NOT NULL,
    PRIMARY KEY(Hotel_ID)
);

CREATE TABLE User_Block(
    User_ID INT NOT NULL,
    Broker_ID INT NOT NULL,
    Blocking_date DATE NOT NULL,
    PRIMARY KEY(User_ID)
);

CREATE TABLE Room_Type_Details(
    Hotel_room_type_ID INT NOT NULL,
    Hotel_ID INT NOT NULL,
    Room_count INT DEFAULT 0,
    #has as default Room_count
    Availabe_room_count INT DEFAULT 0,
    #price is per night
    Room_price FLOAT NOT NULL,
    PRIMARY KEY(Hotel_room_type_ID,Hotel_ID)
);

CREATE TABLE User_Rates(
    User_ID INT NOT NULL ,
    Hotel_ID INT NOT NULL,
    Rating INT DEFAULT 0,
    PRIMARY KEY(User_ID,Hotel_ID)
);

CREATE TABLE Registration(
    User_ID INT NOT NULL,
    Room_ID INT NOT NULL,
    Hotel_ID INT NOT NULL,
    Check_in_date DATE NOT NULL,
    Check_out_date DATE NOT NULL,
    Checked_in BOOLEAN,
    Amout_to_pay INT DEFAULT 0,
    PRIMARY KEY(User_ID,Hotel_ID,Room_ID)
);

CREATE TABLE Room_Images(
    Room_image_ID INT NOT NULL AUTO_INCREMENT,
    Hotel_room_type_ID INT NOT NULL,
    Hotel_ID INT NOT NULL,
    Room_image BLOB,
    PRIMARY KEY(Room_image_ID)
);

CREATE TABLE Room_Facilities(
    Hotel_room_type_ID INT NOT NULL,
    Hotel_ID INT NOT NULL,
    Room_facility VARCHAR(100) NOT NULL,
    PRIMARY KEY( Hotel_room_type_ID,Hotel_ID,Room_facility)
);


ALTER TABLE Hotel
ADD CONSTRAINT FK_Hotel_HotelOwner_HotelownerID
FOREIGN KEY (Hotel_owner_ID)
REFERENCES Hotel_Owner(Owner_ID);

ALTER TABLE Hotel
ADD CONSTRAINT FK_Hotel_Broker_BrokerSuspenderID
FOREIGN KEY (Broker_Suspender_ID)
REFERENCES Broker(Broker_ID);

ALTER TABLE Hotel_Rooms
ADD CONSTRAINT FK_HotelRooms_Hotel_Hotel_ID
FOREIGN KEY (Hotel_ID)
REFERENCES Hotel(Hotel_ID);

ALTER TABLE Hotel_Rooms
ADD CONSTRAINT FK_HotelRooms_HotelRoomType_RoomtypeID
FOREIGN KEY (Room_type_ID)
REFERENCES Hotel_Room_Type(Type_ID);

ALTER TABLE Hotel_Suspend
ADD CONSTRAINT FK_HotelSuspend_Hotel_HotelID
FOREIGN KEY (Hotel_ID)
REFERENCES Hotel(Hotel_ID);

ALTER TABLE Hotel_Suspend
ADD CONSTRAINT FK_HotelSuspend_Broker_BrokerID
FOREIGN KEY (Broker_ID)
REFERENCES Broker(Broker_ID);

ALTER TABLE User_Block
ADD CONSTRAINT FK_UserBlock_Users_UserID
FOREIGN KEY (User_ID)
REFERENCES Users(User_ID);


ALTER TABLE User_Block
ADD CONSTRAINT FK_UserBlock_Broker_BrokerID
FOREIGN KEY (Broker_ID)
REFERENCES Broker(Broker_ID);

ALTER TABLE Room_Type_Details
ADD CONSTRAINT FK_RoomTypeDetails_HotelRoomType_HotelroomtypeID
FOREIGN KEY (Hotel_room_type_ID)
REFERENCES Hotel_Room_Type(Type_ID);

ALTER TABLE Room_Type_Details
ADD CONSTRAINT FK_RoomTypeDetails_Hotel_HotelID
FOREIGN KEY (Hotel_ID)
REFERENCES Hotel(Hotel_ID);
                 
ALTER TABLE User_Rates
ADD CONSTRAINT FK_UserRates_Users_UserID
FOREIGN KEY (User_ID)
REFERENCES Users(User_ID);

ALTER TABLE User_Rates
ADD CONSTRAINT FK_UserRates_Hotel_HotelID
FOREIGN KEY (Hotel_ID)
REFERENCES Hotel(Hotel_ID);

ALTER TABLE Registration
ADD CONSTRAINT FK_Registration_Users_UserID
FOREIGN KEY (User_ID)
REFERENCES Users(User_ID);

ALTER TABLE Registration
ADD CONSTRAINT FK_Registration_HotelRooms_RoomID
FOREIGN KEY (Room_ID)
REFERENCES Hotel_Rooms(Room_ID);

ALTER TABLE Registration
ADD CONSTRAINT FK_Registration_HotelRooms_HotelID
FOREIGN KEY (Hotel_ID)
REFERENCES Hotel_Rooms(Hotel_ID);

ALTER TABLE Room_Images
ADD CONSTRAINT FK_RoomImages_RoomTypeDetails_HotelID
FOREIGN KEY (Hotel_ID)
REFERENCES Room_Type_Details(Hotel_ID);

ALTER TABLE Room_Images
ADD CONSTRAINT FK_RoomImages_RoomTypeDetails_HotelroomtypeID
FOREIGN KEY (Hotel_room_type_ID)
REFERENCES Room_Type_Details(Hotel_room_type_ID);

ALTER TABLE Room_Facilities
ADD CONSTRAINT FK_RoomFacilities_RoomTypeDetails_HotelroomtypeID
FOREIGN KEY (Hotel_room_type_ID)
REFERENCES Room_Type_Details(Hotel_room_type_ID);

ALTER TABLE Room_Facilities
ADD CONSTRAINT FK_RoomFacilities_RoomTypeDetails_HotelID
FOREIGN KEY (Hotel_ID)
REFERENCES Room_Type_Details(Hotel_ID);


