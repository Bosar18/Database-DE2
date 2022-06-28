INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL,'Billy Ocean','Red Light Spells Danger');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL,'Billy Ocean','Suddenly');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL,'Billy Ocean','Love Really Hurts Without You');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL,'Billy Ocean','Carribean Queen');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL,'Billy Ocean','L.O.D');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NUll, "Guns N' Roses","Sweet Child O' Mine");
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL, "Guns N' Roses", 'November Rain');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL, "Guns N' Roses", 'Paradise City');
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL, "Guns N' Roses", "Knockin' On Heaven's Door");
INSERT INTO `songs`(`id`, `artist`, `title`) VALUES (NULL, "Guns N' Roses", 'Welcome To The Jungle');

-- hier UPDATE de database 5 keer
-- UPDATE songs
-- SET artist = 'willem'
-- WHERE id = 1

-- UPDATE songs
-- SET artist = 'john'
-- WHERE id = 2

-- UPDATE songs
-- SET title = 'is singing'
-- WHERE id = 1

-- UPDATE songs
-- SET title = 'is dancing'
-- WHERE id = 2

--Gebruik de SELECT statement om alle songs van een artiest te zien
-- SELECT *
-- FROM songs
-- WHERE artist = 'Billy Ocean'
-- ORDER BY artist ASC;

-- Gebruik SELECT om een song van een artiest te zien
-- SELECT *
-- FROM songs
-- WHERE title = 'L.O.D'
-- ORDER BY title ASC;

-- Dit verwijdert alle artiesten met de naam Billy Ocean
-- DELETE FROM `songs`
-- WHERE artist = 'Billy Ocean' 