-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 09:52 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvcentral`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateFavourites` (IN `uid` INT)  READS SQL DATA
SELECT shows.show_id,shows.show_name,airday.airday,airday.airchannel,shows.img from shows,favourites,airday where shows.show_id=favourites.show_id AND shows.show_id=airday.show_id AND favourites.user_id=uid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `airday`
--

CREATE TABLE `airday` (
  `show_id` int(11) DEFAULT NULL,
  `airday` varchar(15) NOT NULL,
  `airchannel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airday`
--

INSERT INTO `airday` (`show_id`, `airday`, `airchannel`) VALUES
(1, 'MONDAY', 'HBO'),
(2, 'WEDNESDAY', 'THE CW'),
(3, 'ARROW', 'THE CW'),
(4, 'SUNDAY', 'FUJI TV'),
(5, 'FRIDAY', 'NETFLIX'),
(6, 'WEDNESDAY', 'THE CW'),
(7, 'MONDAY', 'FOX'),
(8, 'TUESDAY', 'THE CW'),
(9, 'THURSDAY', 'AMC'),
(10, 'NO AIRDAY', 'BBC ONE'),
(11, 'FRIDAY', 'CBS'),
(12, 'SATURDAY', 'NETFLIX'),
(13, 'WEDNESDAY', 'ABC'),
(14, 'FRIDAY', 'FOX'),
(15, 'FRIDAY', 'THE CW'),
(16, 'FRIDAY', 'USA NETWORK'),
(17, 'SATURDAY', 'THE CW'),
(18, 'NO AIR DAY', 'FOX'),
(19, 'TUESDAY', 'HISTORY'),
(20, 'NO AIRDAY', 'MTV'),
(21, 'TUESDAY', 'NBC'),
(22, 'WEDNESDAY', 'USA NETWORK'),
(23, 'MONDAY', 'HBO'),
(24, 'THURSDAY', 'THE CW'),
(25, 'NO AIRDAY', 'THE CW'),
(26, 'FRIDAY', 'NETFLIX'),
(27, 'FRIDAY', 'NETFLIX'),
(28, 'FRIDAY', 'NETFLIX'),
(29, 'TUESDAY', 'ABC'),
(30, 'WEDNESDAY', 'NETFLIX'),
(31, 'MONDAY', 'NETFLIX'),
(32, 'NO AIRDAY', 'TV TOKYO'),
(33, 'SATURDAY', 'NBC'),
(34, 'SATURDAY', 'NETFLIX'),
(35, 'NO AIRDAY', 'CBS'),
(36, 'NO AIRDAY', 'NETFLIX'),
(37, 'SUNDAY', 'TV TOKYO'),
(38, 'WEDNESDAY', 'USA NETWORK'),
(39, 'NO AIRDAY', 'CBS'),
(40, 'NO AIRDAY', 'NBC'),
(41, 'TUESDAY', 'AMC'),
(42, 'SUNDAY', 'TV TOKYO'),
(43, 'NO AIRDAY', 'AMC'),
(44, 'SUNDAY', 'TV TOKYO'),
(45, 'SUNDAY', 'TV TOKYO'),
(46, 'SUNDAY', 'TV TOKYO'),
(47, 'TUESDAY', 'THE CW'),
(48, 'THURSDAY', 'HBO'),
(49, 'NO AIRDAY', 'TV TOKYO'),
(50, 'NO AIRDAY', 'TV TOKYO'),
(51, 'NO AIRDAY', 'TV TOKYO'),
(52, 'NO AIRDAY', 'TV TOKYO'),
(53, 'NO AIRDAY', 'TV TOKYO'),
(54, 'SUNDAY', 'TV TOKYO'),
(55, 'NO AIRDAY', 'TV TOKYO'),
(56, 'NO AIRDAY', 'TV TOKYO'),
(57, 'NO AIRDAY', 'TV TOKYO'),
(58, 'SUNDAY', 'TV TOKYO'),
(59, 'FRIDAY', 'CBS'),
(60, 'NO AIRDAY', 'NBC');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `show_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`show_id`, `user_id`) VALUES
(10, 1),
(2, 22),
(2, 23),
(2, 24),
(3, 24),
(6, 24),
(8, 24),
(11, 24),
(13, 24),
(27, 24),
(31, 24),
(34, 24),
(35, 24),
(42, 24);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `show_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`show_id`, `rating`) VALUES
(1, 9.5),
(2, 8.5),
(3, 8.6),
(4, 9.1),
(5, 7.2),
(6, 8.1),
(7, 7.3),
(8, 5.2),
(9, 8),
(10, 8.3),
(11, 9.2),
(12, 4.5),
(13, 6.2),
(14, 6.6),
(15, 5.8),
(16, 8.2),
(17, 7.3),
(18, 9.2),
(19, 6.3),
(20, 4.5),
(21, 6.8),
(22, 7.8),
(23, 9),
(24, 5.5),
(25, 7.2),
(26, 7.6),
(27, 7.9),
(28, 8.1),
(29, 8.2),
(30, 8.8),
(31, 9),
(32, 7),
(33, 8),
(34, 6.3),
(35, 4.1),
(36, 5),
(37, 6.9),
(38, 7),
(39, 8.1),
(40, 9),
(41, 8),
(42, 8.2),
(43, 9.2),
(44, 4.3),
(45, 6.1),
(46, 6),
(47, 5.3),
(48, 8),
(49, 7.3),
(50, 7.4),
(51, 5),
(52, 9.1),
(53, 4.2),
(54, 3),
(55, 8),
(56, 7.3),
(57, 6),
(58, 7.2),
(59, 5.3),
(60, 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `show_name` varchar(50) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `img` varchar(500) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `show_name`, `genre`, `status`, `img`, `description`) VALUES
(1, 'GAME OF THRONES', 'DRAMA', 'RUNNING', 'photos/got.jpg', 'Game of Thrones is roughly based on the storylines of A Song of Ice and Fire,set in the fictional Seven Kingdoms of Westeros and the continent of Essos.'),
(2, 'THE FLASH', 'SCI-FI', 'RUNNING', 'photos/flash.jpg', 'Barry Allen is a Central City police forensic scientist with a reasonably happy life, despite the childhood trauma of a mysterious red and yellow being killing his mother and framing his father.'),
(3, 'ARROW', 'SCI-FI', 'RUNNING', 'photos/arrow.jpg', 'It is based on the DC Comics character Green Arrow, a costumed crime-fighter created by Mort Weisinger and George Papp.'),
(4, 'DRAGON BALL SUPER', 'ANIME', 'RUNNING', 'photos/dbs.jpg', 'The story of the anime is set a few years after the defeat of Majin Buu, when the Earth has become peaceful once again.'),
(5, 'STRANGER THINGS', 'MYSTERY', 'RUNNING', 'photos/st.jpg', 'A love letter to the \'80s classics that captivated a generation, Stranger Things is set in 1983 Indiana, where a young boy vanishes into thin air.'),
(6, 'LEGENDS OF TOMORROW', 'SCI-FI', 'RUNNING', 'photos/lot.jpg', 'When heroes alone are not enough... the world needs legends. Time-traveling rogue Rip Hunter is tasked with assembling a disparate group of both heroes and villains to confront an unstoppable threat'),
(7, 'LUCIFER', 'SUPERNATURAL', 'RUNNING', 'photos/lucifer.jpg', 'The Devil has come to Los Angeles…Based upon the characters created by Neil Gaiman, Sam Kieth and Mike Dringenberg for DC Entertainment\'s Vertigo imprint, Lucifer is the story of the original fallen angel. '),
(8, 'SUPERGIRL', 'SCI-FI', 'RUNNING', 'photos/supergirl.jpg', 'Twenty-four-year-old Kara Zor-El, who was taken in by the Danvers family when she was 12 after being sent away from Krypton, must learn to embrace her powers after previously hiding them. '),
(9, 'THE WALKING DEAD', 'HORROR', 'RUNNING', 'photos/twd.jpg', 'Rick Grimes is a former Sheriff\'s deputy who has been in a coma for several months after being shot while on duty. When he wakes, he discovers that the world has been taken over by zombies, and that he seems to be the only person still alive. '),
(10, 'SHERLOCK', 'CRIME', 'TO BE DETERMINED', 'photos/sherlock.jpg', 'Sherlock is a crime drama television series based on Sir Arthur Conan Doyle\'s Sherlock Holmes detective stories.'),
(11, 'THE BIG BANG THEORY', 'COMEDY', 'RUNNING', 'photos/tbbt.jpg', 'Leonard and Sheldon are brilliant physicists - geniuses in the laboratory, but socially challenged everywhere else. Enter beautiful, street-smart neighbor, Penny, who aims to teach them a thing or two about life.'),
(12, 'MARVEL\'S DAREDEVIL', 'CRIME', 'RUNNING', 'photos/daredevil.jpg', 'Marvel\'s Daredevil, or simply Daredevil, is an American web television series created for Netflix by Drew Goddard, based on the Marvel Comics character of the same name.'),
(13, 'MARVEL\'S AGENTS OF SHIELD', 'ACTION', 'RUNNING', 'photos/aos.jpg', 'Phil Coulson heads an elite team of fellow agents with the worldwide law-enforcement organization known as S.H.I.E.L.D., as they investigate strange occurrences around the globe. '),
(14, 'GOTHAM', 'CRIME', 'RUNNING', 'photos/gotham.png', 'Gotham is an American crime-drama television series developed by Bruno Heller, based on characters appearing in and published by DC Comics in their Batman franchise, primarily those of James Gordon and Bruce Wayne.'),
(15, 'SUPERNATURAL', 'SUPERNATURAL', 'RUNNING', 'photos/supernatural.jpg', 'Starring Jared Padalecki as Sam Winchester and Jensen Ackles as Dean Winchester, the series follows the two brothers as they hunt demons, ghosts, monsters, and other supernatural beings in the world. '),
(16, 'MR.ROBOT', 'THRILLER', 'RUNNING', 'photos/robot.jpg', 'Mr. Robot follows Elliot, a young programmer who works as a cyber-security engineer by day and as a vigilante hacker by night.'),
(17, 'THE 100', 'SCI-FI', 'RUNNING', 'photos/100.jpg', 'The series is set 97 years after a devastating nuclear war wiped out almost all life on Earth. The only known survivors are the residents of twelve space stations in Earth\'s orbit prior to the war.'),
(18, 'PRISON BREAK', 'CRIME', 'ENDED', 'photos/pb.jpg', 'Lincoln Burrows is currently on death row and scheduled to die in a few months for an assassination his younger brother Michael is convinced he did not commit.'),
(19, 'VIKINGS', 'DRAMA', 'RUNNING', 'photos/vikings.jpg', 'With the promise of new land from the English, Ragnar leads his people to an uncertain fate on the shores of Wessex. King Ecbert has made many promises and it remains to be seen if he will keep them. '),
(20, 'TEEN WOLF', 'ROMANCE', 'ENDED', 'photos/tw.png', 'The series revolves around social outcast Scott McCall, a high school student living in the town of Beacon Hills. Scott\'s life drastically changes when he is bitten by a werewolf, becoming one himself. '),
(21, 'BLINDSPOT', 'CRIME', 'RUNNING', 'photos/blindspot.jpg', 'A beautiful woman, with no memories of her past, is found naked in Times Square with her body fully covered in intricate tattoos.'),
(22, 'SUITS', 'LEGAL', 'RUNNING', 'photos/suits.jpg', 'Harvey Specter is the best closer in New York City. He\'s at the top of his game closing mergers, acquisitions and even divorces; it\'s in his blood.'),
(23, 'WESTWORLD', 'SCI-FI', 'RUNNING', 'photos/westworld.jpg', 'The one-hour drama series Westworld is a dark odyssey about the dawn of artificial consciousness and the evolution of sin. Set at the intersection of the near future and the reimagined past'),
(24, 'THE ORIGINALS', 'ROMANCE', 'RUNNING', 'photos/originals.jpg', 'The show begins with the original siblings returning to the city of New Orleans for the first time since 1919. Having originally built the city, they had been forced to flee from their vengeful father.'),
(25, 'THE VAMPIRE DIARIES', 'ROMANCE', 'ENDED', 'photos/vd.jpg', 'The series takes place in Mystic Falls, Virginia, a fictional small town haunted and surrounded by supernatural beings.'),
(26, 'MARVEL\'S JESSICA JONES', 'ACTION', 'RUNNING ', 'photos/jj.jpg', 'Marvel\'s Jessica Jones, or simply Jessica Jones, is an upcoming American web television series created for Netflix by Melissa Rosenberg, based on the Marvel Comics character of the same name. '),
(27, 'MARVEL\'S IRON FIST', 'CRIME', 'RUNNING', 'photos/ironfist.jpg', 'After his family meets a tragic fate while on expedition in China, a young Rand is adopted by the people of the mystical lost city of K\'un-Lun, where he\'s taught a magical fighting style. Years later, he returns to New York to fight crime.'),
(28, 'MARVEL\'S LUKE CAGE', 'CRIME', 'RUNNING', 'photos/lc.jpg', 'After a sabotaged experiment leaves him with super strength and unbreakable skin, Luke Cage becomes a fugitive trying to rebuild his life in modern day Harlem, New York City. '),
(29, 'QUANTICO', 'CRIME', 'RUNNING', 'photos/quantico.jpg', 'The series follows a group of young FBI recruits; each has a specific reason for joining. Flashbacks detail their previous lives, while the recruits battle their way through training at the academy in Quantico, Virginia.'),
(30, 'MARVEL\'S DEFENDERS', 'CRIME', 'TO BE DETERMINED', 'photos/defenders.jpg', 'Marvel\'s The Defenders follows Daredevil, Jessica Jones, Luke Cage and Iron Fist. A quartet of singular heroes with one common goal - to save New York City.'),
(31, 'MARVEL\'S INHUMANS', 'DRAMA', 'RUNNING', 'photos/inhumans.jpg', 'Marvel\'s Inhumans explores the never-before-told epic adventure of the royal family including Black Bolt, the enigmatic, commanding King of the Inhumans, with a voice so powerful that the slightest whisper can destroy a city. '),
(32, 'NARUTO SHIPPUUDEN', 'ANIME', 'ENDED', 'photos/naruto.jpg', 'Naruto: Shippuden is the ongoing sequel to the original Naruto anime and covers the Naruto manga from volume twenty-eight on. '),
(33, 'THE BLACKLIST', 'THRILLER', 'RUNNING', 'photos/blacklist.jpg', 'The Blacklist is a crime drama involving a former government agent who turned into a high-profile criminal turning himself in to the FBI offering to help catch criminals.'),
(34, 'ORANGE IS THE NEW BLACK', 'COMEDY', 'RUNNING', 'photos/oitnb.jpg', 'The series revolves around Piper Chapman (Taylor Schilling), a woman living in New York City, who is sentenced to 15 months in a women\'s federal prison called Litchfield Penitentiary.'),
(35, 'LIMITLESS', 'CRIME', 'ENDED', 'photos/limitless.jpg', 'Limitless, based on Relativity\'s 2011 Bradley Cooper thriller, picks up where the movie left off and follows Brian Sinclair as he discovers the power of the mysterious drug NZT, and is coerced into using his newfound drug-enhanced abilities to solve weekly cases for the FBI.'),
(36, 'HOUSE OF CARDS', 'DRAMA', 'TO BE DETERMINED', 'photos/hoc.jpg', ' House of Cards is the story of Frank Underwood, a Democrat from South Carolina\'s 5th congressional district and House Majority Whip who, after being passed over for appointment as Secretary of State, initiates an elaborate plan to get himself into a position of greater power.'),
(37, 'BORUTO : NARUTO  NEXT GENERATION', 'ANIME', 'RUNNING', 'photos/boruto.jpg\r\n', 'A new generation of ninja are ready to take the stage, led by Naruto\'s own son, Boruto!'),
(38, 'SHOOTER', 'ACTION', 'TO BE DETERMINED', 'photos/shooter.jpg', 'Shooter is an action series about a highly decorated Marine sniper who is on the run after being falsely accused of trying to kill the President.'),
(39, 'THE MENTALIST', 'CRIME', 'ENDED', 'photos/mentalist.jpg', 'Patrick Jane, an independent consultant with the California Bureau of Investigation (CBI), has a remarkable track record for solving serious crimes by using his razor sharp skills of observation.'),
(40, 'CONSTANTINE', 'HORROR', 'ENDED', 'photos/contantine.jpg', 'Based on the wildly popular comic book series \"Hellblazer\" from DC Comics, seasoned demon hunter and master of the occult John Constantine is armed with a ferocious knowledge of the dark arts and a wickedly naughty wit. He fights the good fight - or at least he did. '),
(41, 'PREACHER', 'SUPERNATURAL', 'RUNNING', 'photos/preacher.jpg', ' Preacher is a supernatural, twisted and darkly comedic drama that follows a West Texas preacher named Jesse Custer, who is inhabited by a mysterious entity that causes him to develop a highly unusual power.'),
(42, 'POKEMON', 'ANIME', 'RUNNING', 'photos/pokemon.png', 'Pokemon Origins follows Red in his journey through the region of Kanto in his attempt to complete his \"Pokédex\" by capturing and cataloging all the Pokémon that exist. '),
(43, 'BREAKING BAD', 'CRIME', 'ENDED', 'photos/bb.jpg', 'Breaking Bad follows protagonist Walter White, a chemistry teacher who lives in New Mexico with his wife and teenage son who has cerebral palsy.'),
(44, 'ATTACK ON TITAN', 'ANIME', 'RUNNING', 'photos/aot.jpg', 'Attack on Titan is a Japanese manga series written and illustrated by Hajime Isayama.It is set in a world where humanity lives in cities surrounded by enormous walls; a defense against the Titans, gigantic humanoids that eat humans seemingly without reason.'),
(45, 'BLEACH', 'ANIME', 'ENDED', 'photos/bleach.jpg', 'Ichigo Kurosaki was an far from an average 15 year old high school student. He had bleach Orange hair and can see ghost. His life changes on day when he sees Rukia Kuchiki a shinigami. '),
(46, 'TOKYO GHOUL', 'ANIME', 'RUNNING', 'photos/tghoul.jpg', 'Tokyo Ghoul is set in an alternate reality where ghouls, individuals who can only survive by eating human flesh, live among the normal humans in secret, hiding their true nature to evade pursuit from the authorities.'),
(47, 'RIVERDALE', 'MYSTERY', 'RUNNING', 'photos/riverdale.jpg', 'Riverdale is a bold, subversive take on Archie, Betty, Veronica and their friends from the comics, exploring the surreality of small-town life - the darkness and weirdness bubbling beneath Riverdale\'s wholesome facade.'),
(48, 'TRUE DETECTIVE', 'MYSTERY', 'RUNNING', 'photos/true.jpg', 'Rustin \"Rust\" Cohle (McConaughey) and Martin \"Marty\" Hart (Harrelson)—and their pursuit of a serial killer over the course of seventeen years.Pizzolatto initially conceived the series as a novel, but later, as it began taking definite form, felt it was better suited for television.'),
(49, 'DRAGON BALL Z', 'ANIME', 'ENDED', 'photos/dbz.jpg', 'Part 2 of the Dragonball madness, this story starts when Goku is an adult and introduces him to his Saiyan origin. The main theme of Dragonball Z is fighting.'),
(50, 'DEATH NOTE', 'ANIME', 'ENDED', 'photos/dn.jpg', 'Death Note is an anime series based around a manga of the same name whereby a human finds a death god\'s notebook. Any person\'s name written in this notebook will die.'),
(51, 'MARVEL\'S AGENT CARTER', 'ACTION', 'ENDED', 'photos/ac.jpg', 'Agent Carter is an American television series based on Marvel Comics character Peggy Carter. It is being produced by Marvel Television and airs on the ABC network.'),
(52, 'CODE GEASS', 'ANIME', 'ENDED', 'photos/cg.jpg', 'The Empire of Britannia has invaded Japan using giant robot weapons called Knightmare Frames. Japan is now referred to as Area 11, and its people the 11\'s. '),
(53, 'AKAME GA KILL', 'ANIME', 'ENDED', 'photos/akamega.jpg', 'Under the rule of a tyrannical empire, Tatsumi, a young swordsman, leaves his home to save his poverty stricken village. He meets a girl named Akame, an assassin who was bought, brainwashed and trained to kill by the Empire.'),
(54, 'ONE PIECE ', 'ANIME', 'RUNNING', 'photos/onepiece.jpg', 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda.The story follows the adventures of Monkey D. Luffy, a boy whose body gained the properties of rubber after unintentionally eating a Devil Fruit.'),
(55, 'PARASYTE', 'ANIME', 'ENDED', 'photos/parasyte.jpg', 'Parasyte is a science fiction horror manga series written and illustrated by Hitoshi Iwaaki.The series follows Shinichi Izumi, a high school boy whose right hand becomes possessed by an alien Parasite named Migi, finding himself in a battle against other Parasites who feast on other humans.'),
(56, 'FULLMETAL ALCHEMIST', 'ANIME', 'ENDED', 'photos/fma.jpg', 'Ed and Al have been skilled alchemists since they were kids. After their mother\'s death they set out to find a way to bring her back. When the time came, their skills weren\'t enough to cheat death.'),
(57, 'SWORD ART ONLINE', 'ANIME', 'ENDED', 'photos/sao.jpg', 'In the near future, a Virtual Reality Massive Multiplayer Online Role-Playing Game (VRMMORPG) called Sword Art Online has been released where players control their avatars with their bodies using a piece of technology called: Nerve Gear.'),
(58, 'ONE PUNCH MAN', 'ANIME', 'RUNNING', 'photos/opm.jpg', 'One-Punch Man is a super hero who has trained so hard that his hair has fallen out, and who can overcome any enemy with one punch. However, because he is so strong, he has become bored and frustrated with winning all his battles so easily.'),
(59, 'YOUNG SHELDON', 'COMEDY', 'RUNNING', 'photos/youngsheldon.jpg', 'For 9-year-old Sheldon Cooper, it isn\'t easy growing up in East Texas. Being a once-in-a-generation mind capable of advanced mathematics and science isn\'t always helpful in a land where church and football are king. '),
(60, 'FRIENDS', 'COMEDY', 'ENDED', 'photos/frinds.jpg', 'Six young (20-something) people from New York City (Manhattan), on their own and struggling to survive in the real world, find the companionship, comfort and support they get from each other to be the perfect antidote to the pressures of life.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email_id`, `password`, `age`, `date`) VALUES
(1, 'vedanth', 'hiiamvedanth@gmail.com', '1234567890', 20, '0000-00-00'),
(8, 'surya', 'surya@gmail.com', '123', 20, '0000-00-00'),
(11, 'teju', 'tejnishreddy168@gmail.com', '56789', 20, '0000-00-00'),
(19, 'sumukh', 'sumukh@gmail.com', '123', 20, '0000-00-00'),
(22, 'shreesha', 'sd@sd', '123', 20, '2017-11-22'),
(23, 'rahul', 'rahul@gmail.com', '123', 20, '2017-11-24'),
(24, 'spoorthi', 'spoo@gmail.com', '123', 20, '2017-11-24');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `date` BEFORE INSERT ON `users` FOR EACH ROW SET new.date=CURRENT_DATE
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
