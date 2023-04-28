START TRANSACTION;

DROP DATABASE IF EXISTS esport;

CREATE DATABASE IF NOT EXISTS esport;

USE esport;

CREATE TABLE IF NOT EXISTS team (
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(500) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS game (
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    station VARCHAR(50) NOT NULL,
    format VARCHAR(80) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS player (
    id INT(10) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    city VARCHAR(70) NOT NULL,
    team_id INT(10) DEFAULT 1,
    game_id INT(10),
    PRIMARY KEY (id),
    CONSTRAINT fk_team_player FOREIGN KEY (team_id) REFERENCES team(id) ON DELETE SET NULL,
    CONSTRAINT fk_game_player FOREIGN KEY (game_id) REFERENCES game(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS competition (
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(300) NOT NULL,
    city VARCHAR(70) NOT NULL,
    format VARCHAR(80) NOT NULL,
    cash_prize INT(9) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS team_competition(
    id INT(10) NOT NULL AUTO_INCREMENT,
    team_id INT(10) DEFAULT 1,
    competition_id INT(10),
    PRIMARY KEY (id),
    CONSTRAINT fk_team_teamcompetition FOREIGN KEY (team_id) REFERENCES team(id) ON DELETE SET NULL,
    CONSTRAINT fk_competition_teamcompetition FOREIGN KEY (competition_id) REFERENCES competition(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS sponsor(
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    team_id INT(10) DEFAULT 1,
    PRIMARY KEY (id),
    CONSTRAINT fk_team_sponsor FOREIGN KEY (team_id) REFERENCES team(id) ON DELETE SET NULL
);


INSERT INTO `game` (`name`,`station`, `format`) VALUES
('League of Legends', 'PC', 'MOBA'),
('Dota 2', 'PC', 'MOBA'),
('Counter-Strike: Global Offensive', 'PC', 'FPS'),
('Overwatch ', 'Xbox One', 'FPS'),
('Fortnite', 'PlayStation 4', 'Battle Royale'),
('Valorant', 'PC', 'FPS'),
('Hearthstone', 'PC', 'Jeu de cartes à collectionner'),
('Rocket League', 'PC', 'Sport'),
('Rainbow Six Siege', 'PC', 'FPS tactique'),
('Street Fighter V', 'PlayStation 4', 'Combat');

INSERT INTO `competition` (`name`, `description`, `city`, `format`, `cash_prize`) VALUES
('Thunderdome', 'Championnat CS: Global Offensive', 'Las Vegas', 'Battle Royale', 100000),
('Frostbite', 'Coupe de France Dota', 'France', 'FPS', 50000),
('Cyberstorm', 'Championnat League of Legends', 'Québec', 'MOBA', 250000);

INSERT INTO `team` (`name`, `description`) VALUES
('Sans Equipe', 'Sans Equipe'),
('Team Liquid', 'Équipe Dota 2'),
('SK Telecom T1', 'Équipe de League of Legends'),
('Astralis', 'Équipe de Counter-Strike: Global Offensive');

INSERT INTO `player` (`first_name`, `second_name`, `city`, `team_id`, `game_id`) VALUES
('Lee (Faker)', 'Sang-hyeok', 'Séoul',3 , 1),
('Oleksandr (s1mple)', 'Kostyliev', 'Kiev',4 , 1),
('Lee (Jaedong)', 'Jae-dong', 'Ulsan',3 , 3),
('Gabriel (FalleN)', 'Toledo', 'Itararé',4 , 2),
('Marcelo (coldzera)', 'David', 'São Paulo',4 , 3),
('Cho (Miro)', 'Seong-ju', 'Busan',2 , 2),
('Amer (Miracle-)', 'Al-Barkawi', '',2 , 5),
('Peter (ppd)', 'Dager', 'Fort Wayne',2 , 4);

INSERT INTO `sponsor` (`name`, `team_id`) VALUES
('Red Bull', 2),
('Intel', 2),
('Coca-Cola', 3),
('Logitech G', 4),
('HyperX', 3);

INSERT INTO `team_competition` (`team_id`, `competition_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(2, 2),
(3, 2),
(4, 2);


COMMIT;