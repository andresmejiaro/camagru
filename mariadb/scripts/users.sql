USE camagru;
        CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            email VARCHAR(150),
            token VARCHAR(100) DEFAULT NULL,
            created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            email_validation INT DEFAULT 0
        );