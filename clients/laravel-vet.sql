CREATE TABLE `doctors` (
  `id` int unsigned PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE `pets` (
  `id` int unsigned PRIMARY KEY AUTO_INCREMENT,
  `client_id` int unsigned,
  `doctor_id` int unsigned,
  `illness` varchar(255),
  `name` varchar(255),
  `breed` varchar(255),
  `age` int(3),
  `weight` int(3),
  `photo` varchar(255)
);

CREATE TABLE `clients` (
  `id` int unsigned PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255),
  `surename` varchar(255),
  `homeaddress` varchar(255),
  `emailaddress` varchar(255),
  `telephonenumber` varchar(15),
  `info` varchar(255)
);

ALTER TABLE `pets` ADD FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

ALTER TABLE `pets` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
