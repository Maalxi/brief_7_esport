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


INSERT INTO game (name,station, format) VALUES
('Apex Legends', 'PlayStation 4', 'FPS'),
('Minecraft', 'PC', 'Sandbox'),
('Rainbow Six Siege', 'PC', 'FPS tactique'),
('Starcraft II', 'PC', 'Stratégie en temps réel'),
('FIFA 22', 'PlayStation 5', 'Sport'),
('Call of Duty: Warzone', 'PC', 'Battle Royale'),
('Halo Infinite', 'Xbox Series X/S', 'FPS'),
('Valorant', 'PC', 'FPS'),
('PlayerUnknown''s Battlegrounds', 'PC', 'Battle Royale'),
('Counter-Strike: Global Offensive', 'PC', 'FPS'),
('League of Legends', 'PC', 'MOBA'),
('Dota 2', 'PC', 'MOBA'),
('Fortnite', 'PlayStation 4', 'Battle Royale'),
('Overwatch', 'Xbox One', 'FPS');

INSERT INTO competition (name, description, city, format, cash_prize) VALUES
('LCS Summer Split', 'Championnat de League of Legends', 'Los Angeles', 'MOBA', 250000),
('Overwatch League 2023', 'Ligue professionnelle Overwatch', 'New York', 'FPS', 500000),
('FIFA eWorld Cup 2023', 'Compétition FIFA', 'Londres', 'Sport', 200000);

INSERT INTO team (name, description) VALUES
('Sans Equipe', 'Sans Equipe'),
('Fnatic', 'Équipe multigaming'),
('G2 Esports', 'Équipe multigaming'),
('Cloud9', 'Équipe multigaming'),
('Team Secret', 'Équipe multigaming'),
('Ninjas in Pyjamas', 'Équipe multigaming'),
('OG Esports', 'Équipe multigaming'),
('Team Vitality', 'Équipe multigaming'),
('Team Envy', 'Équipe multigaming'),
('Team SoloMid', 'Équipe multigaming'),
('FaZe Clan', 'Équipe multigaming'),
('Renegades', 'Équipe multigaming'),
('Mousesports', 'Équipe multigaming'),
('Immortals', 'Équipe multigaming'),
('100 Thieves', 'Équipe multigaming'),
('Evil Geniuses', 'Équipe multigaming'),
('Team Liquid', 'Équipe multigaming'),
('Virtus.pro', 'Équipe multigaming'),
('Natus Vincere', 'Équipe multigaming'),
('Team Spirit', 'Équipe multigaming'),
('Gambit Esports', 'Équipe multigaming');

INSERT INTO player (first_name, second_name, city, team_id, game_id) VALUES
('Søren (Bjergsen)', 'Bjerg', 'Copenhague', 5, 1),
('Sergey (G)' ,'Bragin', 'Moscou', 6, 2),
('Aleksei (Hutji)', 'Yelizarov', 'Moscou', 6, 2),
('Håvard (rain)', 'Nygaard', 'Bergen', 7, 3),
('Robin (ropz)', 'Kool', 'Tartu', 4, 3),
('Fabien (kioShiMa)', 'Fiey', 'Lorraine', 3, 3),
('Benjamin (Benjyfishy)', 'Fish', 'Sunbury-on-Thames', 5, 5),
('Shawn (Skadoodle)', 'Gerasimov', 'Tarentum', 5, 6),
('Timothy (Automatic)', 'Ta', 'San Francisco', 5, 6),
('Jaryd (summit1g)', 'Lazar', 'Colorado Springs', 5, 3);

INSERT INTO sponsor (name, team_id) VALUES
('Mountain Dew', 5),
('Corsair', 3),
('Asus', 2),
('Gillette', 1),
('Twitch', 4),
('Monster Energy', 3),
('Scuf Gaming', 5),
('Secretlab', 2),
('Nvidia', 4),
('BMW', 1),
('G FUEL', 2),
('Puma', 5),
('Razer', 4),
('Intel', 1),
('Logitech', 3),
('HyperX', 4),
('Bud Light', 5),
('Red Bull', 2),
('Coca-Cola', 3);

INSERT INTO team_competition (team_id, competition_id) VALUES
(2, 3),
(5, 2),
(1, 1),
(3, 2),
(4, 3),
(5, 1);

COMMIT;