CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    PilotName VARCHAR(100) NOT NULL,              
    DateOfBirth DATE NOT NULL,                  
    Email VARCHAR(150) NOT NULL,                  
    PhoneNumber VARCHAR(15),                     
    LicenseNumber VARCHAR(50) NOT NULL,         
    SubmissionDate DATETIME DEFAULT CURRENT_TIMESTAMP
);
