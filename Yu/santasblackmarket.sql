-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2014 at 06:40 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `santasblackmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE IF NOT EXISTS `contains` (
  `order_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`item_id` int(100) unsigned NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_category` varchar(20) NOT NULL,
  `item_price` decimal(10,2) unsigned NOT NULL,
  `item_description` text NOT NULL,
  `item_image` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_category`, `item_price`, `item_description`, `item_image`) VALUES
(5, 'Frozen Sparkle Princess', 'Toys', '24.49', '<table style="box-sizing: border-box; border-collapse: collapse; width: auto; color: #333333; font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; margin-bottom: 0px !important;" border="0" cellspacing="0" cellpadding="0">\r\n<tbody style="box-sizing: border-box;">\r\n<tr style="box-sizing: border-box;">\r\n<td class="bucket" style="box-sizing: border-box; vertical-align: top; padding: 0px;">\r\n<h2 style="box-sizing: border-box; padding: 0px 0px 4px; margin: 0px; text-rendering: optimizelegibility; line-height: 1.3; font-family: verdana, arial, helvetica, sans-serif !important; font-size: 16px !important; color: #cc6600 !important;">Product Details</h2>\r\n<div class="content" style="box-sizing: border-box; margin-top: 0px; margin-left: 0px;">\r\n<ul style="box-sizing: border-box; margin: 0px 0px 1px 18px; padding: 0px; font-size: 13px; font-family: verdana, arial, helvetica, sans-serif;">\r\n<li style="box-sizing: border-box; list-style: none; word-wrap: break-word; margin: 0px 0px 5.5px;"><strong style="box-sizing: border-box;">Product Dimensions:&nbsp;</strong>5.5 x 2.2 x 12.8 inches ; 6.9 ounces</li>\r\n<li style="box-sizing: border-box; list-style: none; word-wrap: break-word; margin: 0px 0px 5.5px;"><strong style="box-sizing: border-box;">Shipping Weight:</strong>&nbsp;7 ounces</li>\r\n<li style="box-sizing: border-box; list-style: none; word-wrap: break-word; margin: 0px 0px 5.5px;"><strong style="box-sizing: border-box;">Shipping:&nbsp;</strong>Currently, item can be shipped only within the U.S. and to APO/FPO addresses. For APO/FPO shipments, please check with the manufacturer regarding warranty and support issues.</li>\r\n<li style="box-sizing: border-box; list-style: none; word-wrap: break-word; margin: 0px 0px 5.5px;"><strong style="box-sizing: border-box;">Origin:</strong>&nbsp;China</li>\r\n<li style="box-sizing: border-box; list-style: none; word-wrap: break-word; margin: 0px 0px 5.5px;"><strong style="box-sizing: border-box;">ASIN:&nbsp;</strong>B00C6Q1Z6E</li>\r\n<li style="box-sizing: border-box; list-style: none; word-wrap: break-word; margin: 0px 0px 5.5px;"><strong style="box-sizing: border-box;">Item model number:</strong>&nbsp;Y9960</li>\r\n</ul>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'forzensparkle_.jpg'),
(6, 'TOMY Marley the Robot', 'Toys', '19.99', '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #aaaaaa; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Pull-along musical dog plays real instrument sounds</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Fun accordion movement</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Helps develop fine motor skills</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Helps children learn cause and effect</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Ages 18 months and up</span></li>\r\n</ul>', '1.jpg'),
(7, 'Heroes Transformers', 'Toys', '14.99', '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #aaaaaa; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Bumblebee figure easily converts from robot mode to vehicle mode and back again</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Sports car mode</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Robot figure holds his jackhammer</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Jackhammer attaches to the hood in vehicle mode</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Includes figure</span></li>\r\n</ul>', '3.jpg'),
(8, 'Connect 55 Game', 'Games', '7.87', '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #aaaaaa; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; line-height: 19px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Classic Connect 55 game is disc-dropping fun</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Choose yellow or red discs</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">When you get 55 discs in a row you win</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #333333;">Includes grid, 55 legs, slider bar, 55 red discs, 55 yellow discs and instructions</span></li>\r\n</ul>', 'connect4_.jpg'),
(9, 'APPLE NINJA', 'Games', '0.99', '<ul style="margin: 0px 0px 0px 25px; padding: 0px; font-family: verdana, arial, helvetica, sans-serif; font-size: 13px;">\r\n<li style="margin: 0.5em 0em;">Carve, splatter, and slash your way through piles of colorful fruit in this juicy arcade action game</li>\r\n<li style="margin: 0.5em 0em;">Choose from three different game modes to play through: Classic, Arcade, and Zen</li>\r\n<li style="margin: 0.5em 0em;">Customize your experience with unlockable weapons and backgrounds</li>\r\n<li style="margin: 0.5em 0em;">Keep your eyes peeled for three different game-changing power-ups</li>\r\n</ul>', 'fff.png'),
(10, 'Limited Edition Call of Duty', 'Games', '449.99', '<ul style="margin: 0px; padding: 0px; color: #cccccc; font-family: arial, verdana, helvetica, sans-serif; font-size: 12px;">\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Get the massive 1TB hard drive, custom console, controller and Limited Edition exoskeleton, plus Call of Duty: Advanced Warfare Day Zero Edition</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">The most advanced multiplayer powered by over 300,000 servers for maximum performance</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Snap a game, live TV, and apps side-by-side, and switch quickly between them</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Does not include Kinect</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Limited quantities available</span></li>\r\n</ul>', 'X385_.jpg'),
(11, 'LEAVE You For Death', 'Games', '22.90', '<ul style="margin: 0px; padding: 0px; color: #cccccc; font-family: arial, verdana, helvetica, sans-serif; font-size: 12px;">\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">On day one, Left 4 Dead 2 features more co-operative campaigns, more campaigns and maps for the versus game modes than the original Leave you to Dead did, plus support for Survival Mode right out of the box.</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Left 4 Dead 2 features quality next generation co-op action gaming from the makers of Half-life, Portal, Team Fortress and Counter-Strike.</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Updated &ldquo;AI Director 2.0" technology expands players&rsquo; ability to customize level layout, world objects, weather, and lighting to reflect different times of day, creating fresh gameplay every time.</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Put a whole slew of melee weapons including axes, chainsaws, frying pans and baseball bats to use which allow you to get up close with the zombies.</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">The game features four different survivors, a new storyline and new dialog.</span></li>\r\n</ul>', 'US4L.jpg'),
(12, 'Counter-Strike', 'Games', '24.99', '<ul style="margin: 0px; padding: 0px; color: #cccccc; font-family: arial, verdana, helvetica, sans-serif; font-size: 12px;">\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Battle throughout the world as either an elite counter-terrorist unit, or a terrorist cell</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Immersive, intense multiplayer action as you fight through 15 diverse maps(including 7 exclusive to Xbox)</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">New terrorist and counter-terrorist units, with new weapons for wider range of tactics</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Improve your skills in single player Skirmishes or play co-op matches with friends against AI Bots</span></li>\r\n<li style="margin: 0.5em 0em;"><span style="color: #000000;">Strategize and communicate with your friends with the Xbox Live connection</span></li>\r\n</ul>', 'cs.jpg'),
(13, 'Fisher-Price Batbot', 'Toys', '59.99', '<h1 id="title" class="a-size-large a-spacing-none" style="box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; text-rendering: optimizelegibility; font-weight: normal; color: #333333; font-size: 21px !important; line-height: 1.3 !important; margin: 0px 0px 0px !important 0px;"><span id="productTitle" class="a-size-large" style="box-sizing: border-box; text-rendering: optimizelegibility; line-height: 1.3 !important;">Fisher-Price Imaginext Batbot</span></h1>', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(10) unsigned NOT NULL,
  `total_price` decimal(7,2) unsigned NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shipping_address` varchar(50) NOT NULL,
  `billing_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `user_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `item_id` int(10) unsigned NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `promotion_rate` decimal(5,2) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` char(40) NOT NULL,
  `user_level` tinyint(2) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `user_level`) VALUES
(1, 'Miles', 'miles@gmail.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
 ADD PRIMARY KEY (`order_id`,`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
 ADD PRIMARY KEY (`user_id`,`order_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
 ADD PRIMARY KEY (`item_id`,`start_date`,`end_date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `item_id` int(100) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
