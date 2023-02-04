CREATE TABLE
    `users` (
        `id` int(3) NOT NULL,
        `email` varchar(200) NOT NULL,
        `username` varchar(200) NOT NULL,
        `mypassword` varchar(200) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

ALTER TABLE `users` ADD PRIMARY KEY (`id`);

ALTER TABLE
    `users` MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

CREATE TABLE
    `new` (
        `id` int(3) NOT NULL,
        `title` varchar(200) NOT NULL,
        `description` TEXT NOT NULL,
        `username` varchar(200) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp()
    );

ALTER TABLE `new` ADD PRIMARY KEY (`id`);

ALTER TABLE
    `new` MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

CREATE TABLE
    `comments` (
        `id` int(3) NOT NULL,
        `username` varchar(200) NOT NULL,
        `post_id` int(3) NOT NULL,
        `comment` TEXT NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB;

ALTER TABLE `comments` ADD PRIMARY KEY (`id`);

COMMIT;