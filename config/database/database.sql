CREATE TABLE if not exists `smsMessages` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  `content` text,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);
