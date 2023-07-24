CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `short_link` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `clicks` int(20) NOT NULL DEFAULT 0,
  `added` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;