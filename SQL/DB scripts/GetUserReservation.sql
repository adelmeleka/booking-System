DELIMITER //
CREATE PROCEDURE GetUserReservation(IN userID INT)
BEGIN

SELECT Hotel.Hotel_name,Registration.Check_in_date,Registration.Check_out_date,Registration.Checked_in,Registration.Amout_to_pay
FROM Registration
INNER JOIN Hotel ON Registration.Hotel_ID = Hotel.Hotel_ID AND  Registration.User_ID = userID;
    

END //
DELIMITER ;