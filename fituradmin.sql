-- Procedure
DELIMITER //
CREATE PROCEDURE filterumur(date1 date, date2 date)
BEGIN
  SELECT username, birthday FROM user WHERE birthday > date1 AND birthday < date2;
END; //
DELIMITER;

-- php 
$sql = "CALL filterumur(\'1901-01-1\', \'2021-05-28\')";



-- Trigger
CREATE TRIGGER  AFTER
INSERT ON user
FOR EACH ROW

BEGIN
INSERT INTO user_data (email, date) VALUES
(NEW.email, CURRENT_TIMESTAMP());
END;
DELIMITER;