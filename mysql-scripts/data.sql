INSERT INTO `film`
(`film_id`, `name`, `genre`, `age_rating`)
VALUES(1, "Die Hard", "Action", 18);

INSERT INTO `actor`
(`actor_id`, `name`)
VALUES(1, "Bruce Willis");

INSERT INTO `film_actor`
(`film_id`, `actor_id`)
VALUES(1, 1);