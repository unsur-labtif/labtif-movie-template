CREATE TABLE movies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    cover VARCHAR(255) NOT NULL
);

INSERT INTO movies VALUES
(DEFAULT, 'The Witcher: Nightmare of the Wolf', 'Dark Fantasy', 'The Witcher: Nightmare of the Wolf is a 2021 animated film based on the Witcher series.', 'tw.jpg')  