-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2016 at 10:26 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `category_id`) VALUES
(1, 'Dan Brown', 'Dan Brown is the #1 New York Times bestselling author of The Da Vinci Code and, previously, Digital Fortress, Deception Point, and Angels and Demons. He is a graduate of Amherst College and Phillips Exeter Academy, where he spent time as an English teacher before turning his efforts fully to writing. He lives in New England with his wife.', 2),
(2, 'James Dashner', 'James Dashner is the author of the New York Times bestselling Maze Runner series that includes The Maze Runner, The Scorch Trials, The Death Cure, and The Kill Order. He has also written The Eye of Minds (book one in the Mortality Doctrine series), the 13th Reality series, and two books in The Infinity Ring series: A Mutiny in Time and The Iron Empire. \r\n\r\nDashner was born and raised in Georgia but now lives and writes in the Rocky Mountains', 5),
(3, 'Stephen King', 'Stephen King is the author of more than fifty books, all of them worldwide bestsellers. His recent work includes The Bill Hodges Trilogy, Revival, and Doctor Sleep. His novel 11/22/63 was named a top ten book of 2011 by The New York Times Book Review and won the Los Angeles Times Book Prize for Mystery/Thriller as well as the Best Hardcover Book Award from the International Thriller Writers Association. He is the recipient of the 2003 National Book Foundation Medal for Distinguished Contribution to American Letters. He lives in Bangor, Maine, with his wife, novelist Tabitha King.', 1),
(4, 'Cassandra Clare', 'Cassandra Clare is the author of the #1 New York Times, USA TODAY, Wall Street Journal, and Publishers Weekly bestselling Mortal Instruments series and the Infernal Devices trilogy, and coauthor of the Bane Chronicles with Sarah Rees Brennan and Maureen Johnson. She also wrote The Shadowhunter’s Codex with her husband, Joshua Lewis. Her books have more than 36 million copies in print worldwide and have been translated into more than thirty-five languages. Cassandra lives in western Massachusetts.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `accessibility` tinyint(1) NOT NULL,
  `excerpt` tinytext NOT NULL,
  `description` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `categoriy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `accessibility`, `excerpt`, `description`, `author_id`, `categoriy_id`) VALUES
(1, 'Inferno', 1, 'In the heart of Italy, Harvard professor of symbology Robert Langdon is drawn into a harrowing world centered on one of history\'s most enduring and mysterious literary masterpieces.Dante\'s Inferno.', 'In the heart of Italy, Harvard professor of symbology Robert Langdon is drawn into a harrowing world centered on one of history\'s most enduring and mysterious literary masterpieces.Dante\'s Inferno.\r\n\r\nAgainst this backdrop, Langdon battles a chilling adversary and grapples with an ingenious riddle that pulls him into a landscape of classic art, secret passageways, and futuristic science. Drawing from Dante\'s dark epic poem, Langdon races to find answers and decide whom to trust. Before the world is irrevocably altered.', 1, 2),
(2, 'Angels and Demons', 0, 'The explosive international thriller from Dan Brown, the #1 New York Times bestselling author of The Da Vinci Code. An ancient secret brotherhood...', 'The explosive international thriller from Dan Brown, the #1 New York Times bestselling author of The Da Vinci Code. An ancient secret brotherhood. A devastating new weapon of destruction.\r\nWhen world-renowned Harvard symbologist Robert Langdon is summoned to a Swiss research facility to analyze a mysterious symbol -- seared into the chest of a murdered physicist -- he discovers evidence of the unimaginable: the resurgence of an ancient secret brotherhood known as the Illuminati...the most powerful underground organization ever to walk the earth. The Illuminati has now surfaced to carry out the final phase of its legendary vendetta against its most hated enemy -- the Catholic Church.', 1, 2),
(3, 'The Da Vinci Code', 1, 'Harvard professor Robert Langdon receives an urgent late-night phone call while on business in Paris: the elderly curator of the Louvre has been brutally murdered inside the museum...', 'Harvard professor Robert Langdon receives an urgent late-night phone call while on business in Paris: the elderly curator of the Louvre has been brutally murdered inside the museum. Alongside the body, police have found a series of baffling codes. \r\nAs Langdon and a gifted French cryptologist, Sophie Neveu, begin to sort through the bizarre riddles, they are stunned to find a trail that leads to the works of Leonardo Da Vinci - and suggests the answer to a mystery that stretches deep into the vault of history.\r\n\r\nUnless Langdon and Neveu can decipher the labyrinthine code and quickly assemble the pieces of the puzzle, a stunning historical truth will be lost forever...', 1, 2),
(4, 'Insomnia', 1, 'Since his wife died, Ralph Roberts has been having trouble sleeping. Each night he wakes up a bit earlier, until he\'s barely sleeping at all...', 'Since his wife died, Ralph Roberts has been having trouble sleeping. Each night he wakes up a bit earlier, until he\'s barely sleeping at all. During his late night walks, he observes some strange things going on in Derry, Maine. He sees colored ribbons streaming from people\'s heads, two strange little men wandering around town after dark, and more. He begins to suspect that these visions are something more than hallucinations brought on by lack of sleep.\r\n\r\nThere\'s a definite mean streak running through this small New England city; underneath its ordinary surface awesome and terrifying forces are at work. The dying has been going on in Derry for a long, long time. Now Ralph is part of it and lack of sleep is the least of his worries.\r\n', 3, 1),
(5, 'Dreamcatcher', 0, 'Once upon a time, in the haunted city of Derry (site of the classics It and Insomnia), four boys stood together and did a brave thing...', 'Once upon a time, in the haunted city of Derry (site of the classics It and Insomnia), four boys stood together and did a brave thing. Certainly a good thing, perhaps even a great thing. Something that changed them in ways they could never begin to understand. \r\nTwenty-five years later, the boys are now men with separate lives and separate troubles. But the ties endure. Each hunting season the foursome reunite in the woods of Maine. This year, a stranger stumbles into their camp, disoriented, mumbling something about lights in the sky. His incoherent ravings prove to be dis-turbingly prescient. Before long, these men will be plunged into a horrifying struggle with a creature from another world. Their only chance of survival is locked in their shared past -- and in the Dreamcatcher. ', 3, 1),
(6, 'It', 0, 'Welcome to Derry, Maine. It\'s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real...', 'Welcome to Derry, Maine. It\'s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.\r\nThey were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the city\'s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derry\'s sewers.', 3, 1),
(7, 'Citi of Bones', 1, 'When fifteen-year-old Clary Fray heads out to the Pandemonium Club in New York City, she hardly expects to witness a murder -- much less a murder committed by three teenagers covered with strange tattoos and brandishing bizarre weapons...', 'When fifteen-year-old Clary Fray heads out to the Pandemonium Club in New York City, she hardly expects to witness a murder -- much less a murder committed by three teenagers covered with strange tattoos and brandishing bizarre weapons. Then the body disappears into thin air. It\'s hard to call the police when the murderers are invisible to everyone else and when there is nothing -- not even a smear of blood -- to show that a boy has died. Or was he a boy?\r\nThis is Clary\'s first meeting with the Shadowhunters, warriors dedicated to ridding the earth of demons. It\'s also her first encounter with Jace, a Shadowhunter who looks a little like an angel and acts a lot like a jerk. Within twenty-four hours Clary is pulled into Jace\'s world with a vengeance, when her mother disappears and Clary herself is attacked by a demon. But why would demons be interested in ordinary mundanes like Clary and her mother? And how did Clary suddenly get the Sight? The Shadowhunters would like to know...', 4, 3),
(8, 'City of Glass', 0, 'To save her mother\'s life, Clary must travel to the City of Glass, the ancestral home of the Shadowhunters never mind that entering the city without permission is against the Law...', 'To save her mother\'s life, Clary must travel to the City of Glass, the ancestral home of the Shadowhunters never mind that entering the city without permission is against the Law, and breaking the Law could mean death. To make things worse, she learns that Jace does not want her there, and Simon has been thrown in prison by the Shadowhunters, who are deeply suspicious of a vampire who can withstand sunlight.\r\nAs Clary uncovers more about her family\'s past, she finds an ally in mysterious Shadowhunter Sebastian. With Valentine mustering the full force of his power to destroy all Shadowhunters forever, their only chance to defeat him is to fight alongside their eternal enemies. But can Downworlders and Shadowhunters put aside their hatred to work together? While Jace realizes exactly how much he\'s willing to risk for Clary, can she harness her newfound powers to help save the Glass City whatever the cost?', 4, 3),
(9, 'The Maze Runner', 1, 'When Thomas wakes up in the lift, the only thing he can remember is his name. He\'s surrounded by ,strangers, boys whose memories are also gone...', 'When Thomas wakes up in the lift, the only thing he can remember is his name. He\'s surrounded by ,strangers, boys whose memories are also gone.\r\nOutside the towering stone walls that surround them is a limitless, ever-changing maze. It\'s the only way out and no one\'s ever made it through alive.\r\nThen a girl arrives. The first girl ever. And the message she delivers is terrifying: Remember. Survive. Run.', 2, 5),
(10, 'The Death Cure', 1, 'WICKED has taken everything from Thomas: his life, his memories, and now his only friends the Gladers. But it\'s finally over. The trials are complete, after one final test...', 'WICKED has taken everything from Thomas: his life, his memories, and now his only friends the Gladers. But it\'s finally over. The trials are complete, after one final test.\r\nWill anyone survive?\r\nWhat WICKED doesn\'t know is that Thomas remembers far more than they think. And it\'s enough to prove that he can\'t believe a word of what they say.\r\nThe truth will be terrifying.\r\nThomas beat the Maze. He survived the Scorch. He\'ll risk anything to save his friends. But the truth might be what ends it all. \r\nThe time for lies is over.', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Horror'),
(2, 'Thriler'),
(3, 'Science fiction'),
(4, 'Drama'),
(5, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `text`, `date`, `product_id`, `user_id`) VALUES
(1, 'Prvi komentar', 'Lorem ipsumdolor sit amet, consectetur adipiscing elit. Donec ut augue blandit est tincidunt convallis non.', '2016-10-31 08:31:18', 2, 2),
(2, 'Neki komentar', 'Lorem ipsumdolor sit amet, consectetur adipiscing elit. Donec ut augue blandit est tincidunt convallis non et sapien.', '2016-10-26 11:17:30', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Dajana Miljanovic', 'dajana@library.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Nicole Smith', 'booklover@library.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Petar Petrovic', 'petar@test.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Jane Doe', 'jane@test.com', 'c33367701511b4f6020ec61ded352059');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`category_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`author_id`),
  ADD KEY `categoriy_id` (`categoriy_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
