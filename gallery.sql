
CREATE TABLE `museum`.`visitors` (
  `name1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phnumber1` int(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `child` int(255) NOT NULL,
  `date1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `museum`.`gallery` (
  `src` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `gallery` (`src`, `alt`) VALUES ('./image/room4.jpg', 'Travel back through 3,000 years of Egyptian history and come face-to-face with the Rosetta Stone and the Statue of Ramesses II.'), ('./image/room5.jpg', 'Large stone sculptures and reliefs were a striking feature of the palaces and temples of ancient Assyria (modern northern Iraq)'), ('./image/room6.jpg', 'The Neo-Assyrian King Ashurnasirpal II (883–859 BC) built his magnificent Northwest Palace at Nimrud.'), ('./image/room7.jpg', 'Nineveh was the capital of the powerful ancient Assyrian empire, located in modern-day northern Iraq.'), ('./image/room8.jpg', 'Rooms 10a, 10b and 10c explore about 50 years of Assyrian history, in what is modern-day Iraq'), ('./image/room9.jpg', 'Encounter the fascinating cultures that developed in the Aegean during the Bronze Age – Crete, the Cyclades, Greece and the Troad – the first urban societies in Europe'), ('./image/room10.jpg', 'From the eighth century BC onwards, renewed contact with the Near East, Anatolia, Phoenicia, Egypt, and other people around the Mediterranean, had a profound impact on Greek culture. ');