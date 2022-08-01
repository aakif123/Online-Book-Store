-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2021 at 12:57 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mykart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `phone_no` bigint NOT NULL,
  `email_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `phone_no`, `email_id`, `password`) VALUES
(1, 'Mohammed', 'Adham', 9876543210, 'adham@admin.com', 'Adham@24'),
(2, 'Aakif', 'Khan', 9753108642, 'aakif@admin.com', 'Khan@24'),
(3, 'Afsar', 'Hussain', 8642097531, 'afsar@admin.com', 'Hussain@24'),
(4, 'Nazim', 'Reza', 9081726354, 'nazim@admin.com', 'Reza@24');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int NOT NULL AUTO_INCREMENT,
  `author_name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author_disc` varchar(1000) NOT NULL,
  `author_image` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`author_id`),
  KEY `author_name` (`author_name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `author_disc`, `author_image`) VALUES
(1, 'J.K. Rowling', 'Joanne Rowling (born 31 July 1965), better known by her pen name J. K. Rowling, is a British author, philanthropist, film producer, television producer and screenwriter. She is best known for writing the Harry Potter fantasy series, which has won multiple awards and sold more than 500 million copies, becoming the best-selling book series in history. The books are the basis of a popular film series, over which Rowling had overall approval on the scripts and was a producer on the final films. She also writes crime fiction under the pen name Robert Galbraith.', 'img/authors/J.K. Rowling.jpg'),
(2, 'Dan Brown', 'Daniel Gerhard Brown (born June 22, 1964) is an American author best known for his thriller novels, including the Robert Langdon novels Angels & Demons (2000), The Da Vinci Code (2003), The Lost Symbol (2009), Inferno (2013) and Origin (2017). His novels are treasure hunts that usually take place over a period of 24 hours. They feature recurring themes of cryptography, art, and conspiracy theories. His books have been translated into 57 languages and, as of 2012, have sold over 200 million copies. Three of them, Angels & Demons, The Da Vinci Code, and Inferno, have been adapted into films.', 'img/authors/Dan Brown.jpg'),
(3, 'Paulo Coelho', 'Paulo Coelho de Souza (born 24 August 1947) is a Brazilian lyricist and novelist, best known for his novel The Alchemist. In 2014, he uploaded his personal papers online to create a virtual Paulo Coelho Foundation. In 1982, Coelho published his first book, Hell Archives, which failed to make a substantial impact. In 1986 he contributed to the Practical Manual of Vampirism, although he later tried to take it off the shelves since he considered it \"of bad quality.\" After making the pilgrimage to Santiago de Compostela in 1986, Coelho wrote The Pilgrimage, published in 1987.', 'img/authors/Paulo Coelho.jpg'),
(4, 'Kahlil Gibran', 'Khalil Gibran (January 6, 1883 – April 10, 1931), was a Lebanese-American writer, poet and visual artist, also considered a philosopher although he himself rejected the title. He is best known as the author of The Prophet, which was first published in the United States in 1923 and has since become one of the best-selling books of all time, having been translated into more than 100 languages. Gibran explored literary forms as diverse as \"poetry, parables, fragments of conversation, short stories, fables, political essays, letters, and aphorisms.\" Two plays in English and five plays in Arabic were also published posthumously between 1973 and 1993; three unfinished plays written in English towards the end of Gibran\'s life remain unpublished (The Banshee, The Last Unction, and The Hunchback or the Man Unseen).', 'img/authors/Kahlil Gibran.jpg'),
(5, 'Hafsah Faizal', 'Faizal was born in Florida and grew up in California. She is of Sri Lankan and Arab descent and is an American Muslim. Hafsah Faizal is an American author of young adult novels, best known for her New York Times best-selling fantasy novel We Hunt the Flame. Faizal self-published her first book, a young adult science fiction novel called Unbreathable, set in a distant future where Earth was destroyed and humanity settled on a new planet devastated by food shortages and oxygen scarcity, under the pen name Hafsah Laziaf in October 2013. Faizal says that her background in design influences her writing to the degree that she considers to be a very visual writer.', 'img/authors/Hafsah Faizal.jpg'),
(6, 'Téa Obreht', 'Téa Obreht (born 30 September 1985) is a Serbian-American novelist. Her debut novel, The Tiger\'s Wife, won the 2011 Orange Prize for Fiction and was a 2011 National Book Award finalist. Obreht was a National Book Foundation 5 Under 35 honoree and was named by The New Yorker as one of the twenty best American fiction writers under forty. Her second novel, Inland, was released in 2019. Obreht received a MFA in fiction from the creative writing program at Cornell University in 2009. She currently lives in New York and teaches at Hunter College.', 'img/authors/Téa Obreht.jpg'),
(7, 'H.G. Wells', 'Herbert George Wells (21 September 1866 – 13 August 1946) was an English writer. Prolific in many genres, he wrote dozens of novels, short stories, and works of social commentary, history, satire, biography and autobiography. His work also included two books on recreational war games. Wells is now best remembered for his science fiction novels and is often called the \"father of science fiction\", along with Jules Verne and the publisher Hugo Gernsback. Some of his early novels, called \"scientific romances\", invented several themes now classic in science fiction in such works as The Time Machine, The Island of Doctor Moreau, The Invisible Man, The War of the Worlds, When the Sleeper Wakes, and The First Men in the Moon. He also wrote realistic novels that received critical acclaim, including Kipps and a critique of English culture during the Edwardian period, Tono-Bungay.', 'img/authors/H.G. Wells.jpg'),
(8, 'Louis Stevenson', 'Robert Louis Stevenson (born Robert Lewis Balfour Stevenson; 13 November 1850 – 3 December 1894) was a Scottish novelist, poet and travel writer, most noted for Treasure Island, Kidnapped, Strange Case of Dr Jekyll and Mr Hyde, and A Child\'s Garden of Verses. Treasure Island (1883) – his first major success, a tale of piracy, buried treasure and adventure, has been filmed frequently. In an 1881 letter to W. E. Henley, he provided the earliest-known title, \"The Sea Cook, or Treasure Island: a Story for Boys\". ', 'img/authors/Louis Stevenson.jpg'),
(9, 'A.P.J. Abdul Kalam', 'Avul Pakir Jainulabdeen Abdul Kalam (15 October 1931 – 27 July 2015) was an Indian aerospace scientist and politician who served as the 11th President of India from 2002 to 2007. He was born and raised in Rameswaram, Tamil Nadu and studied physics and aerospace engineering. Kalam was elected as the 11th President of India in 2002 with the support of both the ruling Bharatiya Janata Party and the then-opposition Indian National Congress. Widely referred to as the \"People\'s President\". In his book India 2020, Kalam strongly advocated an action plan to develop India into a \"knowledge superpower\" and a developed nation by the year 2020. He regarded his work on India\'s nuclear weapons programme as a way to assert India\'s place as a future superpower.', 'img/authors/A.P.J. Abdul Kalam.jpg'),
(10, 'George Orwell', 'Eric Arthur Blair (25 June 1903 – 21 January 1950), known by his pen name George Orwell, was an English novelist, essayist, journalist and critic. His work is characterised by lucid prose, biting social criticism, opposition to totalitarianism, and outspoken support of democratic socialism. As a writer, Orwell produced literary criticism and poetry, fiction and polemical journalism; and is best known for the allegorical novella Animal Farm (1945) and the dystopian novel Nineteen Eighty-Four (1949). In 2008, The Times ranked George Orwell second among \"The 50 greatest British writers since 1945\".', 'img/authors/George Orwell.jpg'),
(11, 'Markus Zusak', 'Markus Zusak (born 23 June 1975) is an Australian writer with Austrian and German roots. He is best known for The Book Thief and The Messenger (US title: I Am the Messenger), two novels which became international bestsellers. In 2014, Zusak won the Margaret A. Edwards Award from the American Library Association (ALA), which annually recognises an author and \"a specific body of his or her work, for significant and lasting contribution to young adult literature\". In 2006, Zusak was also the recipient of the Sydney Morning Herald\'s Young Australian Novelist of the Year Award. The Book Thief was published in 2005 and has since been translated into more than 40 languages.', 'img/authors/Markus Zusak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `purchase_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `product_name`, `cost`, `purchase_time`) VALUES
(1, 3, 7, 'We Hunt the Flame', 300, '2020-12-11 16:16:19'),
(2, 3, 13, 'A Promised Land', 1000, '2020-12-11 16:16:19'),
(3, 3, 15, 'Treasure Island', 50, '2020-12-11 16:16:19'),
(4, 3, 28, 'Notebooks', 150, '2020-12-11 16:16:19'),
(5, 3, 27, 'Personal Diary', 240, '2020-12-11 16:16:19'),
(6, 3, 3, 'The Alchemist', 450, '2020-12-14 10:40:55'),
(7, 3, 1, 'Harry Potter', 250, '2020-12-14 10:40:55'),
(24, 4, 28, 'Notebooks', 150, '2020-12-15 16:52:51'),
(25, 4, 1, 'Harry Potter', 250, '2020-12-15 16:52:51'),
(26, 6, 4, 'The Prophet', 60, '2020-12-17 07:49:49'),
(27, 6, 8, 'We Free The Stars', 300, '2020-12-17 07:49:49'),
(28, 6, 27, 'Personal Diary', 240, '2020-12-17 07:49:49'),
(29, 4, 15, 'Treasure Island', 50, '2020-12-22 10:27:08'),
(30, 4, 29, 'New Arabian Nights', 100, '2020-12-22 10:27:08'),
(31, 4, 7, 'We Hunt the Flame', 300, '2020-12-22 10:27:08'),
(32, 4, 28, 'Notebooks', 100, '2020-12-22 10:27:08'),
(33, 7, 2, 'Deception Point', 200, '2020-12-23 05:51:06'),
(34, 7, 5, 'Animal Farm', 50, '2020-12-23 05:51:06'),
(35, 7, 28, 'Notebooks', 100, '2020-12-23 05:51:06'),
(36, 3, 7, 'We Hunt the Flame', 300, '2020-12-30 20:25:43'),
(37, 3, 13, 'A Promised Land', 1000, '2020-12-30 20:25:43'),
(38, 3, 28, 'Notebooks', 100, '2020-12-30 20:25:43'),
(39, 8, 1, 'Harry Potter', 250, '2021-01-11 08:29:40'),
(40, 8, 4, 'The Prophet', 60, '2021-01-11 08:29:40'),
(41, 8, 1, 'Harry Potter', 250, '2021-01-11 09:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone_no` bigint NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `card_no` varchar(19) NOT NULL,
  `expiry_date` varchar(5) NOT NULL,
  `cvv` int NOT NULL,
  `amount_paid` float NOT NULL,
  `quantity` int NOT NULL,
  `payment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `user_id`, `full_name`, `phone_no`, `address`, `city`, `state`, `pincode`, `card_name`, `card_no`, `expiry_date`, `cvv`, `amount_paid`, `quantity`, `payment_time`) VALUES
(1, 5, 3, 'Mohammed Adham', 8884086554, '#66, 5th Cross, Muneshwara Nagar, Bandepalya', 'Bengaluru', 'Karnataka', 560068, 'Mohammed Adham', '5555-6666-7777-8888', '09/29', 999, 1780, 8, '2020-12-11 16:16:19'),
(2, 7, 3, 'Mohammed adham', 2222222222, 'bjhgkw', 'dakjkj', 'dslh', 666666, 'ddss', '7777-8888-9999-9999', '02/24', 555, 740, 4, '2020-12-14 10:40:56'),
(5, 10, 4, 'Aakif Khan', 8765432109, 'Welcome to my address', 'My', 'Kart', 242424, 'Khan Aakif', '5555-6666-7777-8888', '09/29', 456, 1340, 4, '2020-12-15 16:44:14'),
(24, 28, 6, 'nazim reza', 8765432109, 'Welcome to my address', 'My', 'Kart', 242424, 'Nazim', '2222-6666-5555-8888', '12/33', 123, 640, 4, '2020-12-17 07:49:49'),
(25, 32, 4, 'Aakif Khan', 8765432155, 'my address', 'My city', 'My state', 111111, 'Khan Aakif', '0000-2222-3333-4444', '12/30', 456, 590, 5, '2020-12-22 10:27:08'),
(26, 35, 7, 'afsar hussain ', 5555555555, 'muneshwara nagar 5th cross', 'bangalore', 'karnataka', 560032, 'afsar ', '9999-6666-5555-4444', '12/29', 666, 390, 4, '2020-12-23 05:51:06'),
(90, 38, 3, 'Mohammed Adham', 9876543210, 'My Address', 'My City', 'My State', 0, 'Mohammed Adham', '5555-6666-7777-8888', '08/32', 210, 1440, 4, '2020-12-30 20:25:43'),
(91, 40, 8, 'Aakif Khan', 8765432155, 'my address', 'My city', 'My state', 111111, 'aakif khan', '1234-4546-2564-9875', '03/65', 652, 350, 2, '2021-01-11 08:29:40'),
(92, 41, 8, 'Aakif Khan', 8765432155, 'my address', 'My city', 'My state', 111111, 'aakif khan', '1264-6525-6521-1526', '03/32', 325, 290, 1, '2021-01-11 09:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` enum('Books','Novels','Others') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cost` float NOT NULL,
  `product_disc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `book_image` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `author` (`author`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `author`, `category`, `cost`, `product_disc`, `book_image`) VALUES
(1, 'Harry Potter', 'J.K. Rowling', 'Books', 250, 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry\'s parents, but failed to kill Harry when he was just 15 months old.', 'img/books/Harry Potter.jpg'),
(2, 'Deception Point', 'Dan Brown', 'Books', 200, 'Deception Point is a 2001 mystery-thriller novel by American author Dan Brown. It is Brown\'s third novel and, as of 2020, his second and latest outside of the Robert Langdon series. It was published by Simon & Schuster. The novel follows White House intelligence analyst Rachel Sexton\'s involvement in corroborating NASA\'s discovery of a meteorite that supposedly contains proof of extraterrestrial life. The discovery comes at a time close to the United States presidential election in which her father is running. The discovery will aid the campaign of her employer, the incumbent president of the United States, Zachary Herney, but put her further at odds with her already estranged father, Senator Sedgwick Sexton, a senator who is running for election. Sexton, accompanied by a team of experts, must uncover the authenticity of the meteorite which will either make or break the campaign of President Herney.', 'img/books/Deception Point.jpg'),
(3, 'The Alchemist', 'Paulo Coelho', 'Novels', 150, 'The Alchemist (Portuguese: O Alquimista) is a novel by Brazilian author Paulo Coelho that was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller. An allegorical novel, The Alchemist follows a young Andalusian shepherd in his journey to the pyramids of Egypt, after having a recurring dream of finding a treasure there.', 'img/books/The Alchemist.jpg'),
(4, 'The Prophet', 'Kahlil Gibran', 'Novels', 60, 'The Prophet is a book of 26 prose poetry fables written in English by the Lebanese-American poet and writer Kahlil Gibran. It was originally published in 1923 by Alfred A. Knopf. It is Gibran\'s best known work. The Prophet has been translated into over 100 different languages, making it one of the most translated books in history, and it has never been out of print.', 'img/books/The Prophet.jpg'),
(5, 'Animal Farm', 'George Orwell', 'Books', 50, 'Animal Farm is an allegorical novella by George Orwell, first published in England on 17 August 1945. The book tells the story of a group of farm animals who rebel against their human farmer, hoping to create a society where the animals can be equal, free, and happy. Ultimately, however, the rebellion is betrayed, and the farm ends up in a state as bad as it was before, under the dictatorship of a pig named Napoleon.', 'img/books/Animal Farm.jpg'),
(6, 'Drunkards Walk', 'Leonard Mlodinow', 'Books', 500, 'The Drunkard\'s Walk: How Randomness Rules Our Lives is a 2008 popular science book by American physicist and author Leonard Mlodinow, which became a New York Times bestseller and a New York Times notable book. The Drunkard\'s Walk discusses the role of randomness in everyday events, and the cognitive biases that lead people to misinterpret random events and stochastic processes. The title refers to a certain type of random walk, a mathematical process in which one or more variables change value under a series of random steps. Mlodinow discusses the contributions of mathematical heavyweights Jacob Bernoulli, Pierre-Simon Laplace, and Blaise Pascal, and introduces basic statistical concepts such as regression toward the mean and the law of large numbers, while discussing the role of probability in examples from wine ratings and school grades to political polls.', 'img/books/Drunkards Walk.jpg'),
(7, 'We Hunt the Flame', 'Hafsah Faizal', 'Novels', 300, 'Inspired by ancient Arabia, the novel tells the story of a hunter who disguises herself as a man in order to travel into a dangerous forest and restore magic to her people. Faizal set the story in a world reminiscent of ancient Arabia, avoiding ties to South Asian cultures that she states are often wrongfully entwined with stories about the Middle East. She first got the idea to write the novel at 17, when she first came into contact with the young adult novel scene, due to being a book blogger. Faizal was inspired by The Hunger Games and Lord of the Rings, asking herself the question \"what if the games were set in a fantasy world?\" and using that as the basis for her story.\r\nWe Hunt the Flame was published by Farrar, Straus & Giroux in May 2019 and debuted on the New York Times bestseller list, at #5. It debuted to favorable reviews, earning a star from Booklist, School Library Journal, and the Bulletin of the Center for Children\'s Books.', 'img/books/We Hunt The Flame.jpg'),
(8, 'We Free The Stars', 'Hafsah Faizal', 'Novels', 300, 'The second book in the Sands of Arawiya duology by the masterful Hafsah Faizal—the follow-up to the smash New York Times bestselling novel We Hunt the Flame. Darkness surged in his veins. Power bled from her bones. Lush and striking, hopeful and devastating, We Free the Stars is the masterful conclusion to the Sands of Arawiya duology by New York Times–bestselling author Hafsah Faizal. The battle on Sharr is over. The Arz has fallen. Altair may be captive, but Zafira, Nasir, and Kifah are bound for Sultan’s Keep, determined to finish the plan Altair set in motion: restoring the hearts of the Sisters of Old to the minarets of each caliphate, finally bringing magic to all of Arawiya. But they are low on resources and allies alike, and the kingdom teems with fear of the Lion of the Night’s return.', 'img/books/We Free The Stars.jpg'),
(9, ' Train Dreams', 'Denis Johnson', 'Novels', 1000, 'Train Dreams is a 2011 novella by Denis Johnson. It was published by Farrar, Straus and Giroux on August 30, 2011. It was originally published, in slightly different form, in the Summer 2002 issue of The Paris Review. The novella details the life of Robert Grainier, an American railroad laborer, who lives a life of hermitage until he marries and has a daughter, only to lose both wife and child in a forest fire, and sink into isolation again. The novella won an O. Henry Award in 2003. It also won the 2002 Aga Khan Prize for Fiction. It was a finalist for the 2012 Pulitzer Prize for Fiction, but no award was given that year.', 'img/books/Train Dreams.jpg'),
(10, 'The Tiger\'s Wife', 'Téa Obreht', 'Novels', 400, 'The Tiger\'s Wife is the debut novel of Serbian-American writer Téa Obreht. It was published in 2011 by Weidenfeld & Nicolson, a British imprint of Orion Books, and by Random House in America. Obreht won the 2011 Orange Prize for Fiction for The Tiger\'s Wife. Obreht was the youngest winner of the prize to date, winning at age 25. The Tiger\'s Wife is set in an unnamed Balkan country, spanning the mid 20th-century to the early 21st century. It features a young doctor\'s relationship with her grandfather and the stories he tells her. Her grandfather retells stories about the \'deathless man\' who meets him several times in different places and who doesn\'t die, regardless of the danger he faces; and a deaf-mute girl from his childhood village who befriends a tiger that has escaped from a nearby zoo.', 'img/books/Tigers Wife.jpg'),
(11, 'Deep Work', 'Cal Newport', 'Books', 200, 'Deep Work: Rules for Focused Success in a Distracted World (2016) Read the Wall Street Journal Bestseller for \"cultivating intense focus\" for fast, powerful performance results for achieving success and true meaning in one\'s professional life (Adam Grant, author of Give and Take). Deep work is the ability to focus without distraction on a cognitively demanding task.', 'img/books/Deep Works.jpg'),
(12, 'Wings of Fire', 'A.P.J. Abdul Kalam', 'Books', 100, 'Wings of Fire: An Autobiography of A P J Abdul Kalam (1999), former President of India. It was written by Dr. Abdul Kalam and Arun Tiwari. Dr. Kalam examines his early life, effort, hardship, fortitude, luck and chance that eventually led him to lead Indian space research, nuclear and missile programs. Kalam started his career, after graduating from Aerospace engineering at MIT (Chennai), India, at Hindustan Aeronautics Limited and was assigned to build a hovercraft prototype. Later he moved to ISRO and helped establish the Vikram Sarabhai Space Centre and pioneered the first space launch-vehicle program. During the 1990s and early 2000, Kalam moved to the DRDO to lead the Indian nuclear weapons program, with particular successes in thermonuclear weapons development culminating in the operation Smiling Buddha and an ICBM Agni (missile). Kalam died on 27 July 2015, during a speech at Indian Institute of Management in Shillong, Meghalaya.', 'img/books/Wings of Fire.jpeg'),
(13, 'A Promised Land', 'Barack Obama', 'Books', 1000, 'A Promised Land is a memoir by Barack Obama, President of the United States from 2009 to 2017. Published on November 17, 2020 by Crown Publishing Group, it is the first of a planned two volume series. Obama said in a tweet following the announcement of the publication of the book that he has aimed to \"provide an honest accounting of my presidency, the forces we grapple with as a nation, and how we can heal our divisions and make democracy work for everybody\". The book concludes with the events of the killing of Osama bin Laden in May 2011.', 'img/books/A Promised Land.png'),
(14, 'The Book Thief', 'Markus Zusak', 'Novels', 200, 'The Book Thief is a historical novel by Australian author Markus Zusak, and is his most popular work. Published in 2005, The Book Thief became an international bestseller and was translated into 63 languages and sold 16 million copies. It was adapted into a 2013 feature film of the same name.', 'img/books/The Book Thief.jpg'),
(15, 'Treasure Island', 'Louis Stevenson', 'Novels', 50, 'Treasure Island (originally The Sea Cook: A Story for Boys) is an adventure novel by Scottish author Robert Louis Stevenson, narrating a tale of \"buccaneers and buried gold.\" Its influence is enormous on popular perceptions of pirates, including such elements as treasure maps marked with an \"X\", schooners, the Black Spot, tropical islands, and one-legged seamen bearing parrots on their shoulders.', 'img/books/Treasure Island.jpg'),
(16, 'Fahrenheit 451', 'Ray Bradbury', 'Novels', 250, 'Fahrenheit 451 is a dystopian novel by American writer Ray Bradbury, first published in 1953. Often regarded as one of his best works, the novel presents a future American society where books are outlawed and \"firemen\" burn any that are found. The book\'s tagline explains the title: \"Fahrenheit 451 – the temperature at which book paper catches fire, and burns...\", also known as Autoignition temperature. The lead character, Guy Montag, is a fireman who becomes disillusioned with his role of censoring literature and destroying knowledge, eventually quitting his job and committing himself to the preservation of literary and cultural writings.', 'img/books/Fahrenheit 451.jpg'),
(17, 'Five Point Someone', 'Chetan Bhagat', 'Novels', 70, 'Five Point Someone: What not to do at IIT is a 2004 novel written by Indian author Chetan Bhagat. The book sold more than a million copies worldwide. The Hindi movie 3 Idiots is based on this book. The book was also adapted into a play by the theatre company Evam.', 'img/books/Five point someone.jpg'),
(18, 'The Time Machine', 'H.G. Wells', 'Books', 80, 'The Time Machine is a science fiction novella by H. G. Wells, published in 1895 and written as a frame narrative. The work is generally credited with the popularization of the concept of time travel by using a vehicle or device to travel purposely and selectively forward or backward through time. The term \"time machine\", coined by Wells, is now almost universally used to refer to such a vehicle or device. The Time Machine has been adapted into three feature films of the same name, as well as two television versions and many comic book adaptations. It has also indirectly inspired many more works of fiction in many media productions.', 'img/books/The Time Machine.jpg'),
(19, 'Broken Wings', 'Kahlil Gibran', 'Novels', 500, 'Broken Wings (Arabic: الأجنحة المتكسرة‎, romanized: al-ajniḥa al-mutakassira) is a poetic novel written in Arabic by Kahlil Gibran and first published in 1912 by the printing house of the periodical Meraat-ul-Gharb in New York. It is a tale of tragic love, set at the turn of the 20th century in Beirut. A young woman, Selma Karamy, is betrothed to a prominent religious man\'s nephew. The protagonist (a young man that Gibran perhaps modeled after himself) falls in love with this woman. They begin to meet in secret, however they are discovered, and Selma is forbidden to leave her house, breaking their hopes and hearts. The book highlights many of the social issues of the time in the Eastern Mediterranean, including religious corruption, the rights of women (and lack thereof), and the weighing up of wealth and happiness. The book was later adapted as the 1962 Lebanese film The Broken Wings.', 'img/books/Broken Wings.jpg'),
(20, 'The Invisible Man', 'H.G. Wells', 'Novels', 90, 'The Invisible Man is a science fiction novel by H. G. Wells. Originally serialized in Pearson\'s Weekly in 1897, it was published as a novel the same year. The Invisible Man to whom the title refers is Griffin, a scientist who has devoted himself to research into optics and who invents a way to change a body\'s refractive index to that of air so that it neither absorbs nor reflects light. He carries out this procedure on himself and renders himself invisible, but fails in his attempt to reverse it. A practitioner of random and irresponsible violence, Griffin has become an iconic character in horror fiction.', 'img/books/The Invisible Man.jpg'),
(21, 'The War of Worlds', 'H.G. Wells', 'Novels', 100, 'The War of the Worlds is a science fiction novel by English author H. G. Wells, first serialised in 1897 by Pearson\'s Magazine in the UK and by Cosmopolitan magazine in the US. The novel\'s first appearance in hardcover was in 1898 from publisher William Heinemann of London. Written between 1895 and 1897, it is one of the earliest stories to detail a conflict between mankind and an extraterrestrial race. The novel is the first-person narrative of both an unnamed protagonist in Surrey and of his younger brother in London as southern England is invaded by Martians. The novel is one of the most commented-on works in the science fiction canon.', 'img/books/The War of the Worlds.jpg'),
(22, 'Inland', 'Téa Obreht', 'Novels', 600, 'Inland is the second novel the Serbian-American author Téa Obreht. The book was published by Random House on August 13, 2019, eight years after Obreht\'s 2011 debut novel, The Tiger\'s Wife.\r\nThe novel follows two parallel narratives in the American frontier. Living in the lawless, drought-ridden lands of the Arizona Territory in 1893, 37-year-old frontierswoman Nora Lark waits inside her home for the return of the men in her life. Lurie Mattie, an immigrant Muslim from a Balkan piece of the Ottoman Empire, is a former outlaw and a man haunted by ghosts. He is able to see lost souls who want something from him, and he acquires their \"wants\".\r\nInland was published by Random House on August 13, 2019. The novel debuted at number twelve on The New York Times Hardcover Fiction best-sellers list on September 1, 2019.', 'img/books/Inland.jpg'),
(23, 'Origin', 'Dan Brown', 'Novels', 150, 'Origin is a 2017 mystery thriller novel by American author Dan Brown and the fifth installment in his Robert Langdon series, following Inferno. The book was released on October 3, 2017 by Doubleday. The book is predominantly set in Spain and features minor sections in Sharjah and Budapest.\r\nIn August 2018, the book was #1 on The New York Times bestseller list. It had been on the list for 23 weeks. Brown visited many of the places in the book, for example the Guggenheim in Bilbao. He spent a great deal of time in Spain. Brown wrote and researched the book for four years. It is dedicated to his mother, who died in 2017. It had an initial printing of 2 million copies, with printing set for 42 languages.', 'img/books/Origin.jpg'),
(24, 'Eleven Minutes', 'Paulo Coelho', 'Books', 120, 'Eleven Minutes (Portuguese: Onze Minutos) is a 2003 novel by Brazilian novelist Paulo Coelho that recounts the experiences of a young Brazilian prostitute and her journey to self-realisation through sexual experience.\r\nMaria, a young girl from a remote village of Brazil, whose first encounters with love had left her heartbroken, goes to seek her fortune in Switzerland. She works for a time in a nightclub but soon becomes dissatisfied and after a heated discussion with her manager one night, she quits her job. She tries to become a model but is unsuccessful. Because she is running out of money, she accepts 1000 francs from an Arab man to spend the night with him. She then decides to become a prostitute and ends up in a brothel on Rue de Berne, the heart of Geneva\'s red-light district.', 'img/books/Eleven Minutes.jpg'),
(25, 'The Pilgrimage', 'Paulo Coelho', 'Novels', 200, 'The Pilgrimage (Portuguese: O Diário de Um Mago, \"Diary of a Magus\") is a 1987 novel by Brazilian novelist Paulo Coelho. It is a recollection of Paulo\'s experiences as he made his way across northern Spain on a pilgrimage to Santiago de Compostela. The novel serves as part adventure story, part guide to self-discovery.\r\nThe story begins in 1986 when Coelho undertakes his initiation into the order Regnus Agnus Mundi (RAM), which he subsequently fails. He is then told that he must embark on a pilgrimage along the Camino de Santiago to find the sword that is the symbol of his acceptance into the ranks of RAM. He must do this to gain insight into the simplicity of life. The journey transforms him as he learns to understand the nature of truth through the simplicity of life. He begins his journey with a guide, also a member of RAM, who goes by the alias Petrus. During the journey Petrus shows him meditation exercises and introduces him to some of the more down-to-earth elements of Western', 'img/books/The Pilgrimage.jpg'),
(26, 'The Ickabog', 'J.K. Rowling', 'Books', 650, 'The Ickabog is a fairy tale by British author J. K. Rowling. The story was published in installments by Rowling online, before its official publication in November 2020. The Ickabog is Rowling\'s first children\'s book since Harry Potter and the Deathly Hallows was published in 2007. The Ickabog is set in the mythical land of Cornucopia, which is ruled by King Fred the Fearless. The Ickabog is a legendary monster that is said to inhabit the marshes of the North, used to explain the disappearance of sheep and people that wander into the marshes, and used to scare children. The south of Cornucopia is a prosperous area, with cities each specialising in different foods, in contrast to the less-wealthy north, known as the Marshlands. The Ickabog was released as a published book, e-book and audiobook on 10th November 2020. The book is published by Hachette UK.', 'img/books/The Ickabog.jpg'),
(27, 'Personal Diary', 'None', 'Others', 120, 'Size : A5/B5, Theme : Executive with 365 Days Full.\r\nMonthly Planner with Monthly Calendar on Each Page, Time on Each Page, FULL SUNDAY PAGE.\r\nWith Well Binded Papers that are smooth for Writing.\r\nInformation Pages,Maps, Section for Notes and TO DO List Starting of Each Month.', 'img/books/Personal Diary.jpg'),
(28, 'Notebooks', 'None', 'Others', 50, 'The cover design of the notebook is subject to change, it depends on stock availability.\r\nThis notebook consists of high quality papers.\r\nSubject notebook-single line, 300 pages, spiral binding, soft cover.', 'img/books/Notebooks.png'),
(29, 'New Arabian Nights', 'Louis Stevenson', 'Books', 100, 'New Arabian Nights by Robert Louis Stevenson, first published in 1882, is a collection of short stories previously published in magazines between 1877 and 1880. The collection contains Stevenson\'s first published fiction, and a few of the stories are considered by some critics to be his best work, as well as pioneering works in the English-language short story tradition. The title is an allusion to the collection of tales known as the One Thousand and One Nights, which Stevenson had read and liked. Although Stevenson\'s stories were set in modern Europe, he was stylistically drawing a connection to the nested structure of the Arabian tales. New Arabian Nights is divided into two volumes. The first volume contains seven stories originally called Later-day Arabian Nights and published by London Magazine in serial format from June to October 1878. It is composed of two story groups, or cycles. The second volume is a collection of four unconnected (standalone) stories that were previously p', 'img/books/New Arabian Nights.jpg'),
(30, 'Burmese Days', 'George Orwell', 'Novels', 100, 'Burmese Days is the first novel by English writer George Orwell, published in 1934. Set in British Burma during the waning days of Empire, when Burma was ruled from Delhi as part of British India, it is \"a portrait of the dark side of the British Raj.\" At the centre of the novel is John Flory, \"the lone and lacking individual trapped within a bigger system that is undermining the better side of human nature.\" The novel describes \"both indigenous corruption and imperial bigotry\" in a society where, \"after all, natives were natives—interesting, no doubt, but finally...an inferior people\". Burmese Days was first published \"further afield,\" in the United States, because of concerns that it might be potentially libelous; that the real provincial town of Katha had been described too realistically; and that some of its fictional characters were based too closely on identifiable people.', 'img/books/Burmese Days.jpg'),
(31, 'Ignited Minds', 'A.P.J. Abdul Kalam', 'Books', 100, 'Ignited Minds: Unleashing the Power Within India (2002) is a book written by A. P. J. Abdul Kalam, who was the President of India from 2002 to 2007. Ignited Minds is a logical step forward from Dr. Kalam\'s earlier book, India 2020: A Vision for the New Millennium (1998). This book consists of many inspirational messages by A P J Abdul Kalam. Dr. Kalam has dedicated Ignited Minds to an intermediate school child, named Snehal Thakkar, whom he met at a school and while talking to his students, a question had come up: \"Who is our enemy?\". Kalam recalled that many answers came up, but the answer on which all agreed came from his (Snehal Thakkar): \"Our enemy is poverty\". The small book of 205 pages contains dynamic and original ideas, examines attitudes afflicting the Indians, and present prescriptions for rapid growth of India to enable the country to emerge as a developed country. The scientist and the seer inside Kalam has addressed the book to young citizen(s) of India. This book has bee', 'img/books/Ignited Minds.jpg'),
(32, 'Bridge of Clay', 'Markus Zusak', 'Novels', 250, 'Bridge of Clay is a 2018 novel by Australian author Markus Zusak. It revolves around five brothers coming to terms with the disappearance of their father. About a boy building a bridge and wanting it to be perfect. He wants to achieve greatness with this bridge, and the question is whether it will survive when the river floods.\r\nBridge of Clay was released in the United States and Australia on 9 October 2018, and in the United Kingdom on 11 October 2018. The novel has been short listed for the 2019 Indie Book Awards, chosen by Australian Independent Booksellers.', 'img/books/Bridge of Clay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `phone_no` bigint NOT NULL,
  `email_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pincode` int NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `phone_no`, `email_id`, `pincode`, `registration_time`, `password`) VALUES
(1, 'Abc', 'Def', 9876543210, 'abcd1234@gmail.com', 560102, '2020-11-14 08:42:31', 'Abc@123'),
(2, 'John', 'Deo', 9871236540, 'john12@yahoo.com', 112209, '2020-11-14 08:42:31', 'Deo@123'),
(3, 'Mohammed', 'Adham', 9916320544, 'mohammedadham7863@gmail.com', 560068, '2020-11-18 02:07:16', 'Adham@123'),
(4, 'Aakif', 'Khan', 9087654321, 'aakifkhan12@gmail.com', 560068, '2020-11-23 00:47:58', 'Aakif@123'),
(5, 'Afsar', 'Hussain', 9012345678, 'afsarhussain123@gmail.com', 565109, '2020-11-26 08:08:30', 'Afsar@12'),
(6, 'Nazim', 'Reza', 7864566666, 'nazim12@gmail.com', 222222, '2020-12-17 07:45:24', 'Nazim@123'),
(7, 'afsar', 'hussain', 5689742300, 'afsar12@gmail.com', 560033, '2020-12-23 05:45:33', 'Afsar@123'),
(8, 'aijs', 'Khan', 8765432156, 'khan123@gmail.com', 111112, '2021-01-11 08:25:41', 'Aakif@123'),
(9, 'khan', 'aakiff', 9596318292, 'khan321@gmail.com', 193223, '2021-01-11 09:19:20', 'Aakif@123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`author_name`) REFERENCES `products` (`author`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
