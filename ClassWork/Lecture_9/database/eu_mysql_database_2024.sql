-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 07:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eu_mysql_2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countrys`
--

INSERT INTO `countrys` (`id`, `name`) VALUES
(1, 'საქართველო'),
(2, 'ბელგია'),
(4, 'ესპანეთი'),
(8, 'იტალია');

-- --------------------------------------------------------

--
-- Table structure for table `navs`
--

CREATE TABLE `navs` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navs`
--

INSERT INTO `navs` (`id`, `name`, `title`, `text`, `created_at`) VALUES
(1, 'HTML', 'HTML (HyperText Markup Language)', 'HTML (HyperText Markup Language) არის ენა, რომელიც გამოიყენება ვებ-გვერდების შექმნისთვის და მათი სტრუქტურის განსაზღვრისთვის. HTML-ს გამოყენებით შეგიძლია შექმნა ტექსტები, სურათები, ვიდეოები, ფორმები და სხვა ელემენტები, რომლებიც ვებ-გვერდზე გამოჩნდება. HTML ბრაუზერებში ინტერპრეტირდება და კონვერტირდება ვიზუალურ ელემენტებად.\r\n\r\nHTML-ის მთავარი კომპონენტები არის ტეგები, რომლებიც იწყება < სიმბოლოთი და სრულდება >-ით. ტეგები განსაზღვრავენ სხვადასხვა ელემენტებს, მაგალითად, ტექსტებს, სურათებს და სხვა შინაარსს. ზოგიერთი ტეგი შესაძლოა შეიცავდეს ატრიბუტებს, რომლებიც დამატებით ინფორმაციას ან პარამეტრებს აწვდის ბრაუზერს.\r\n\r\nHTML დოკუმენტის სტრუქტურა იწყება ტეგით <html>, რომელიც აღნიშნავს HTML დოკუმენტის მთელ შიგთავსს. <head> ნაწილი შეიცავს ინფორმაციას, რომელიც არ ჩანს მომხმარებლისთვის, მაგრამ საჭიროა გვერდის სრულყოფილად წარმოსაჩენად, მაგალითად, გვერდის სათაური და მეტა მონაცემები. <body> ნაწილი შეიცავს იმას, რაც გამოჩნდება ვებ-გვერდზე, როგორც შინაარსი: ტექსტი, სურათები, კავშირები და სხვა ელემენტები.\r\n\r\nHTML-ის ძირითადი ტეგები მოიცავს <h1>, რომელიც გამოიყენება მთავარი სათაურის შესაქმნელად, <p>, რომელიც პარაგრაფის ტეგია, <a>, რომელიც ჰიპერლინკებს ქმნის, <img>, რომელიც სურათებს ემსახურება, <div>, რომელიც გვერდის სხვადასხვა ნაწილის დაყოფისთვის გამოიყენება, და <ul>, <ol>, <li>, რომელიც სიის შექმნისთვის გამოიყენება.\r\n\r\nHTML-ის დახმარებით ბრაუზერი განსაზღვრავს და აჩვენებს ტექსტებს, სურათებს და სხვა ვებ-ელემენტებს ისე, რომ ისინი სწორად გამოჩნდეს მომხმარებლის ეკრანზე. HTML არის ვებ-გვერდების დამკვიდრების საფუძველი და საწყისი ენა ვებ-დეველოპმენტში.', '2024-12-16 06:28:28'),
(2, 'CSS', 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) არის ენა, რომელიც გამოიყენება HTML ელემენტების ვიზუალური სტილის განსაზღვრისთვის. მისი მეშვეობით დეველოპერები და დიზაინერები მართავენ ვებ-გვერდების ვიზუალურ და დიზაინურ ასპექტებს, მაგალითად, ფერებს, შრიფტებს, ზომებს, განლაგებას და სხვა. CSS უზრუნველყოფს, რომ HTML შინაარსი მიიღოს ვიზუალურად მიმზიდველი და ორგანიზებული სახე.\r\n\r\nCSS საშუალებას აძლევს განისაზღვროს, როგორ უნდა გამოიყურებოდეს ელემენტები, მაგალითად, რამდენი შუალედით უნდა იყოს განლაგებული ტექსტი, როგორი იყოს ფონდის ფერი, თუ რა ზომის და სტილის შრიფტები უნდა გამოიყენოს გვერდი. CSS-ით ხდება HTML-ელემენტების სტილიზაცია ისე, რომ მათი ვიზუალური წარმოჩენა არ იყოს დამოკიდებული მხოლოდ HTML-ის სტრუქტურაზე.\r\n\r\nCSS-ის წერის სხვადასხვა მეთოდებია: Inline სტილი, როდესაც სტილი პირდაპირ HTML ელემენტში იწერება, Internal სტილი, როცა სტილები განთავსებულია HTML დოკუმენტის <head> ნაწილში, და External სტილი, რომელიც გამოიყენება ცალკე .css ფაილში, რომელსაც HTML ფაილში ვაკავშირებთ.\r\n\r\nCSS-ის მთავარ კომპონენტებს წარმოადგენს Selectors, Properties და Values. Selectors განსაზღვრავს, რომელ HTML ელემენტებზე უნდა განხორციელდეს სტილი. Properties განსაზღვრავს, რა ტიპის სტილი უნდა გამოიყენოს ამ ელემენტმა, ხოლო Values განსაზღვრავს კონკრეტულ მნიშვნელობას, რომელიც შეესაბამება ამ სტილისთვის.\r\n\r\nCSS-ის საშუალებით დეველოპერებს აქვთ საშუალება არა მხოლოდ სტილის, არამედ გვერდის ფუნქციონირების და ფუნქციონალური დიზაინის მენეჯმენტისთვის, რადგან იგი პასუხისმგებელია ელემენტების განლაგებაზე და ფორმატირებაზე. CSS თანამედროვე ვებ-დეველოპმენტის ერთ-ერთი ყველაზე მნიშვნელოვანი ნაწილია.', '2024-12-16 06:28:28'),
(3, 'JavaScript', NULL, NULL, '2024-12-16 06:29:21'),
(4, 'PHP', NULL, '\r\nPHP (Hypertext Preprocessor) არის დინამიკური ვებ-გვერდების შესაქმნელად და სერვერის მხარეს პროგრამირების ენა. PHP საშუალებას აძლევს დეველოპერებს შექმნან სკრიპტები, რომლებიც მუშაობენ სერვერზე და ქმნიან დინამიურ შინაარსს, მაგალითად, მონაცემთა ბაზიდან მონაცემების ამოღებას, ფორმების გადამუშავებას, ავტორიზაციის მართვას და სხვა.\r\n\r\nPHP ძირითადად გამოიყენება ვებ-აპლიკაციებში, სადაც საჭიროა მონაცემთა ბაზებთან ურთიერთობა ან მომხმარებელთა ინტერაქცია. მაგალითად, PHP-მოწყობილ ვებ-გვერდებზე შესაძლებელია რეგისტრაციისა და შესვლის ფორმების მართვა, კომენტარების სისტემები და ვებ-საიტების დინამიური შინაარსის გენერაცია.\r\n\r\nPHP სკრიპტები მუშაობენ სერვერზე, რაც ნიშნავს, რომ მათი შესრულება ხდება სერვერზე და არა ბრაუზერში. ამის შედეგად, PHP-ს შეუძლია შექმნას HTML, CSS და JavaScript კოდები, რომლებიც შემდეგ გამოიცემება მომხმარებლისთვის. PHP-ს კოდი არ ჩანს მომხმარებლის ეკრანზე, რადგან იგი გამოიხატება საბოლოო HTML კოდით.\r\n\r\nPHP-ს გამოყენება შესაძლებელია როგორც მარტივი დავალებების შესრულებისთვის, ისე შედგენილი სერიოზული ვებ-აპლიკაციების შესაქმნელად. PHP-ს ხშირად იყენებენ მონაცემთა ბაზებთან, მაგალითად MySQL-თან ინტეგრირებისთვის, რაც საშუალებას აძლევს ვებ-გვერდებს მოაგვარონ დიდი რაოდენობის მონაცემები და უზრუნველყონ მათი ეფექტური დამუშავება.\r\n\r\nPHP-ით დეველოპერები ასევე ქმნიან API-ს (Application Programming Interfaces), რაც საშუალებას აძლევს სხვა პროგრამებს უკავშირდნენ და გამოიყენონ მათი ფუნქციები. PHP ერთ-ერთი ყველაზე პოპულარული ენაა ვებ-დეველოპმენტში, რადგან ის სწრაფია, მოქნილი და ადვილად მასწავლებელი.', '2024-12-16 06:29:21'),
(5, 'Python', 'Python არის მაღალი დონის პროგრამირების ენა', NULL, '2024-12-16 06:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `country_id` int(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `mobile`, `country_id`, `created_at`) VALUES
(1, 'თენგო', 'კლდიაშვილი', 'tengo@eu.edu.ge', 'eu1234', '599 99 99 01', 1, '2024-12-16 05:44:18'),
(2, 'ალექსანდრე ', 'ეტმექჩიანი', 'aleqsandre@eu.edu.ge', 'eu123', '599 99 99 02', 1, '2024-12-16 05:44:18'),
(3, 'ნუკრი', 'მეშვილდიშვილი', 'nukri@yahoo.com', 'nukri12', '599 99 99 01', 2, '2024-12-16 05:46:34'),
(4, 'ნატო', 'ფიფია', 'nato@eu.edu.ge', 'nato1', '599 99 99 04', 4, '2024-12-16 05:46:34'),
(6, NULL, 'ვერულავა', NULL, '', NULL, 8, '2024-12-16 05:48:17'),
(11, NULL, '', NULL, '', NULL, 8, '2024-12-16 06:13:49'),
(12, NULL, '', NULL, '', NULL, 2, '2024-12-16 06:13:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navs`
--
ALTER TABLE `navs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_ibfk_1` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countrys`
--
ALTER TABLE `countrys`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `navs`
--
ALTER TABLE `navs`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countrys` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
