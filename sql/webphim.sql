-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2017 lúc 05:27 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `pass`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `idphim`, `iduser`, `noidung`) VALUES
(1, 21, 1, 'phim hay'),
(2, 21, 1, 'phim hay'),
(3, 18, 1, 'hấp dẫn'),
(4, 10, 4, 'hay quá a ơi'),
(5, 15, 4, 'good men...'),
(6, 27, 1, 'cũng bình thường'),
(7, 31, 7, 'alo'),
(8, 31, 7, 'alo 123'),
(9, 18, 7, 'test thử bình luận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daodien`
--

CREATE TABLE `daodien` (
  `idphim` int(11) NOT NULL,
  `tendaodien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `daodien`
--

INSERT INTO `daodien` (`idphim`, `tendaodien`) VALUES
(0, 'Chris Wedge'),
(1, 'Baoqiang Wang'),
(1, 'Mike Mendez '),
(2, 'Baoqiang Wang'),
(3, 'Sarik Andreasyan'),
(4, 'Elliott Lester'),
(5, 'Damien Chazelle'),
(7, 'Từ Khắc'),
(8, 'D.J. Caruso'),
(9, 'Eric Summer'),
(9, 'Éric Warin'),
(10, 'Ding Sheng'),
(11, 'Baran bo Odar'),
(12, 'Gordon Chan'),
(13, 'Justin Kurzel'),
(14, 'Anna Foerster '),
(15, 'Trương Nghệ Mưu'),
(16, 'Paul W.S. Anderson'),
(17, 'Gareth Edwards'),
(18, 'Christophe Lourdelet'),
(18, 'Garth Jennings '),
(19, 'Scott Derrickson'),
(20, 'Peter Berg'),
(21, 'James Mangold'),
(22, 'Bill Condon'),
(23, 'James Cameron'),
(24, 'Don Hall'),
(24, 'Ron Clements'),
(25, 'Guillermo del Toro'),
(26, 'Diệp Vỹ Tín'),
(27, 'Daniel Espinosa'),
(28, 'Dean Israelite'),
(29, 'Ken Ochiai'),
(30, 'Peter Jackson'),
(31, 'Jordan Vogt-Roberts'),
(33, 'F. Gary Gray'),
(34, 'Kelly Asbury'),
(35, 'Chris Buck'),
(35, 'Jennifer Lee'),
(36, 'Chris Sanders'),
(36, 'Dean DeBlois'),
(37, 'Tom McGrath'),
(38, 'James Gray'),
(39, 'David Yates'),
(40, 'Chiu Sin-Hang'),
(40, 'Pak-Wing Yan'),
(41, 'Rupert Sanders'),
(42, 'David Yates'),
(43, 'Peter Jackson'),
(44, 'Peter Jackson'),
(45, 'Mark Cullen'),
(46, 'Nitesh Tiwari');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienvien`
--

CREATE TABLE `dienvien` (
  `idphim` int(11) NOT NULL,
  `tendienvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `dienvien`
--

INSERT INTO `dienvien` (`idphim`, `tendienvien`) VALUES
(0, 'Amy Ryan'),
(0, 'Barry Pepper'),
(0, 'Danny Glover'),
(0, 'Frank Whaley'),
(0, 'Holt McCallany'),
(0, 'Jane Levy'),
(0, 'Lucas Till'),
(0, 'Rob Lowe'),
(0, 'Thomas Lennon'),
(1, 'Aaron McPherson '),
(1, 'Billy Slaughter '),
(1, 'Dolph Lundgren '),
(1, 'Elissa Dowling '),
(1, 'Emily Brobst '),
(1, 'Jasi Cotton Lanier '),
(1, 'Kristina Klebe '),
(1, 'Michael Aaron Milligan '),
(1, 'Michelle West '),
(1, 'Sam Furman '),
(1, 'Tara Cardinal '),
(2, 'Bạch Khách'),
(2, 'Liễu Nham'),
(2, 'Lục Tiểu Linh Đồng'),
(2, 'Nhạc Vân Bằng'),
(2, 'Thích Tiểu Long'),
(2, 'Vương Bảo Cường'),
(3, 'Alina Lanina'),
(3, 'Anton Pampushnyy'),
(3, 'Sanjar Madi'),
(3, 'Sebastien Sisak'),
(3, 'Stanislav Shirin'),
(3, 'Valeriya Shkirando'),
(3, 'Vyacheslav Razbegaev'),
(4, 'Arnold Schwarzenegger'),
(4, 'Glenn Morshower'),
(4, 'Hannah Ware'),
(4, 'Kevin Zegers'),
(4, 'Maggie Grace'),
(4, 'Mariana Klaveno '),
(4, 'Scoot McNairy'),
(5, 'Amiée Conn'),
(5, 'Callie Hernandez'),
(5, 'Cinda Adams'),
(5, 'Emma Stone'),
(5, 'Jessica Rothe'),
(5, 'Ryan Gosling'),
(5, 'Sonoya Mizuno'),
(5, 'Terry Walters'),
(5, 'Thom Shelton'),
(7, 'Ba Đặc Nhĩ'),
(7, 'Diệu Thần'),
(7, 'Lâm Canh Tân'),
(7, 'Lâm Doãn'),
(7, 'Ngô Diệc Phàm'),
(7, 'Thư Kỳ'),
(7, 'Vương Lệ Khôn'),
(8, 'Chân Tử Đan'),
(8, 'Deepika Padukone'),
(8, 'Kris Wu'),
(8, 'Nina Dobrev'),
(8, 'Ruby Rose'),
(8, 'Tony Jaa'),
(8, 'Vin Diesel'),
(9, 'Carly Rae Jepsen'),
(9, 'Dane DeHaan'),
(9, 'Elle Fanning'),
(9, 'Maddie Ziegler'),
(9, 'Terrence Scammell'),
(10, 'Hiroyuki Ikeuchi'),
(10, 'Hoàng Tử Thao'),
(10, 'Jaycee Chan'),
(10, 'Kai Wang'),
(10, 'Ping Sang'),
(10, 'Thành Long'),
(11, 'David Harbour'),
(11, 'Dermot Mulroney'),
(11, 'Jamie Foxx'),
(11, 'Michelle Monaghan'),
(11, 'Scoot McNairy'),
(11, 'T.I.'),
(12, 'Huỳnh Thu Sinh'),
(12, 'Lưu Đức Hoa'),
(12, 'Lý Băng Băng'),
(12, 'Trương Bá Chi'),
(13, 'Ariane Labed'),
(13, 'Brendan Gleeson'),
(13, 'Charlotte Rampling'),
(13, 'Denis MÃ©nochet'),
(13, 'Jeremy Irons'),
(13, 'Marion Cotillard'),
(13, 'Michael Fassbender'),
(13, 'Michael Kenneth Williams'),
(14, 'Bradley James'),
(14, 'Charles Dance'),
(14, 'Clementine Nicholson'),
(14, 'James Faulkner'),
(14, 'Kate Beckinsale'),
(14, 'Lara Pulver'),
(14, 'Peter Andersson'),
(14, 'Theo James'),
(14, 'Tobias Menzies'),
(15, 'Bành Vu Yến'),
(15, 'Cảnh Điềm'),
(15, 'Hanyu Zhang'),
(15, 'Lâm Canh Tân'),
(15, 'Lu Han'),
(15, 'Lưu Đức Hoa'),
(15, 'Matt Damon'),
(15, 'Pedro Pascal'),
(15, 'Willem Dafoe'),
(16, 'Ali Larter'),
(16, 'Eoin Macken'),
(16, 'Fraser James'),
(16, 'Iain Glen'),
(16, 'Milla Jovovich'),
(16, 'Ruby Rose '),
(16, 'Shawn Roberts'),
(16, 'William Levy'),
(17, 'Alan Tudyk'),
(17, 'Ben Mendelsohn'),
(17, 'Chân Tử Đan'),
(17, 'Diego Luna'),
(17, 'Felicity Jones'),
(17, 'Forest Whitaker'),
(17, 'Guy Henry'),
(17, 'Wen Jiang'),
(18, 'John C. Reilly'),
(18, 'Matthew McConaughey'),
(18, 'Reese Witherspoon'),
(18, 'Scarlett Johansson'),
(18, 'Seth MacFarlane'),
(18, 'Taron Egerton'),
(19, 'Benedict Cumberbatch'),
(19, 'Benedict Wong'),
(19, 'Benjamin Bratt'),
(19, 'Chiwetel Ejiofor'),
(19, 'Mads Mikkelsen'),
(19, 'Michael Stuhlbarg'),
(19, 'Rachel McAdams'),
(19, 'Tilda Swinton'),
(20, 'Dicky Eklund Jr.'),
(20, 'Frank Czarnowski'),
(20, 'John Goodman'),
(20, 'Mark Wahlberg'),
(20, 'Michael Marchand'),
(20, 'Rachel Brosnahan'),
(20, 'Rhet Kidd'),
(21, 'Boyd Holbrook'),
(21, 'Dafne Keen'),
(21, 'Elizabeth Rodriguez'),
(21, 'Eriq La Salle'),
(21, 'Hugh Jackman'),
(21, 'Patrick Stewart'),
(21, 'Richard E. Grant'),
(21, 'Stephen Merchant'),
(22, 'Dan Stevens'),
(22, 'Emma Watson'),
(22, 'Hattie Morahan'),
(22, 'Haydn Gwynne'),
(22, 'Josh Gad'),
(22, 'Kevin Kline'),
(22, 'Luke Evans'),
(23, 'Giovanni Ribisi'),
(23, 'Joel David Moore'),
(23, 'Michelle Rodriguez'),
(23, 'Sam Worthington'),
(23, 'Sigourney Weaver'),
(23, 'Stephen Lang'),
(23, 'Zoe Saldana'),
(24, 'Alan Tudyk'),
(24, 'Dwayne Johnson'),
(24, 'Jemaine Clement'),
(24, 'Nicole Scherzinger'),
(24, 'Rachel House'),
(24, 'Temuera Morrison'),
(25, 'Burn Gorman'),
(25, 'Charlie Day'),
(25, 'Charlie Hunnam'),
(25, 'Diego Klattenhoff'),
(25, 'Idris Elba'),
(25, 'Max Martini'),
(25, 'Rinko Kikuchi'),
(25, 'Robert Kazinsky'),
(26, 'Chân Tử Đan'),
(26, 'Hùng Đại Lâm'),
(26, 'Lâm Gia Đống'),
(26, 'Nhậm Đạt Hoa'),
(26, 'Phàn Thiếu Hoàng'),
(27, 'Allen McLean'),
(27, 'Ariyon Bakare'),
(27, 'Hiroyuki Sanada'),
(27, 'Jake Gyllenhaal'),
(27, 'Jesus Del Orden'),
(27, 'Olga Dihovichnaya'),
(27, 'Rebecca Ferguson'),
(27, 'Ryan Reynolds'),
(28, 'Becky G.'),
(28, 'Bill Hader'),
(28, 'Bryan Cranston'),
(28, 'Dacre Montgomery'),
(28, 'Elizabeth Banks'),
(28, 'Ludi Lin'),
(28, 'Matt Shively'),
(28, 'Naomi Scott'),
(28, 'RJ Cyler'),
(29, 'B Trần'),
(29, 'Chi Pu'),
(29, 'Diễm My'),
(29, 'Diệp Lâm Anh'),
(29, 'Kim Lý'),
(29, 'Phương Ngọc'),
(29, 'Thái Hòa'),
(30, 'Aidan Turner'),
(30, 'Graham McTavish'),
(30, 'Ian McKellen'),
(30, 'James Nesbitt'),
(30, 'John Callen'),
(30, 'Ken Stott'),
(30, 'Martin Freeman'),
(30, 'Richard Armitage'),
(30, 'Stephen Hunter'),
(30, 'William Kircher'),
(31, 'Brie Larson'),
(31, 'Cảnh Điềm'),
(31, 'Corey Hawkins'),
(31, 'John C. Reilly'),
(31, 'John Goodman'),
(31, 'John Ortiz'),
(31, 'Samuel L. Jackson'),
(31, 'Toby Kebbell'),
(31, 'Tom Hiddleston'),
(33, 'Charlize Theron'),
(33, 'Dwayne Johnson'),
(33, 'Elsa Pataky'),
(33, 'Jason Statham'),
(33, 'Kurt Russell'),
(33, 'Ludacris'),
(33, 'Luke Evans'),
(33, 'Michelle Rodriguez'),
(33, 'Nathalie Emmanuel'),
(33, 'Tyrese Gibson'),
(33, 'Vin Diesel'),
(34, 'Danny Pudi'),
(34, 'Dee Bradley Baker'),
(34, 'Demi Lovato'),
(34, 'Jack McBrayer'),
(34, 'Joe Manganiello'),
(34, 'Mandy Patinkin'),
(34, 'Rainn Wilson'),
(35, 'Alan Tudyk'),
(35, 'Chris Williams'),
(35, 'Ciarán Hinds'),
(35, 'Idina Menzel'),
(35, 'Jonathan Groff'),
(35, 'Josh Gad'),
(35, 'Kristen Bell'),
(35, 'Santino Fontana'),
(36, 'America Ferrera'),
(36, 'Christopher Mintz-Plasse'),
(36, 'Craig Ferguson'),
(36, 'Gerard Butler'),
(36, 'Jay Baruchel'),
(36, 'Jonah Hill'),
(36, 'Kristen Wiig'),
(36, 'T.J. Miller'),
(37, 'Alec Baldwin'),
(37, 'Chris Miller'),
(37, 'Conrad Vernon'),
(37, 'Eric Bell Jr.'),
(37, 'Jimmy Kimmel'),
(37, 'Lisa Kudrow'),
(37, 'Miles Bakshi'),
(37, 'Steve Buscemi'),
(37, 'Tobey Maguire'),
(37, 'ViviAnn Yee'),
(38, 'Angus Macfadyen'),
(38, 'Charlie Hunnam'),
(38, 'Clive Francis'),
(38, 'Edward Ashley'),
(38, 'Ian McDiarmid'),
(38, 'Matthew Sunderland'),
(38, 'Pedro Coello'),
(38, 'Robert Pattinson'),
(38, 'Sienna Miller'),
(38, 'Tom Holland'),
(39, 'Alan Rickman'),
(39, 'Clémence Poésy'),
(39, 'Daniel Radcliffe'),
(39, 'Domhnall Gleeson'),
(39, 'Emma Watson'),
(39, 'Evanna Lynch'),
(39, 'Michael Gambon'),
(39, 'Ralph Fiennes'),
(39, 'Rupert Grint'),
(39, 'Warwick Davis'),
(40, 'Babyjohn Choi'),
(40, 'Cheung-Yan Yuen'),
(40, 'Hok-chi Chiu'),
(40, 'Meng Lo'),
(40, 'Min Chen Lin'),
(40, 'Richard Ng'),
(40, 'Sin-Hang Chiu'),
(40, 'Siu-Ho Chin'),
(40, 'Susan Yam-Yam Shaw'),
(41, 'Chin Han'),
(41, 'Danusia Samal'),
(41, 'Juliette Binoche'),
(41, 'Lasarus Ratuere'),
(41, 'Michael Pitt'),
(41, 'Pilou Asbæk'),
(41, 'Scarlett Johansson'),
(41, 'Takeshi Kitano'),
(41, 'Tawanda Manyimo'),
(41, 'Yutaka Izumihara'),
(42, 'Bill Nighy'),
(42, 'Bonnie Wright'),
(42, 'Daniel Radcliffe'),
(42, 'Emma Watson'),
(42, 'Harry Melling'),
(42, 'Ian Kelly'),
(42, 'Julie Walters'),
(42, 'Michelle Fairley'),
(42, 'Richard Griffiths'),
(42, 'Rupert Grint'),
(43, 'Aidan Turner'),
(43, 'Graham McTavish'),
(43, 'Ian McKellen'),
(43, 'James Nesbitt'),
(43, 'Ken Stott'),
(43, 'Martin Freeman'),
(43, 'Richard Armitage'),
(43, 'Stephen Hunter'),
(43, 'William Kircher'),
(44, 'Aidan Turner'),
(44, 'Graham McTavish'),
(44, 'Ian McKellen'),
(44, 'James Nesbitt'),
(44, 'Ken Stott'),
(44, 'Martin Freeman'),
(44, 'Richard Armitage'),
(44, 'Stephen Hunter'),
(44, 'William Kircher'),
(45, 'Bruce Willis'),
(45, 'Emily Robinson'),
(45, 'Famke Janssen'),
(45, 'Jason Momoa'),
(45, 'Jessica Gomes'),
(45, 'John Goodman'),
(45, 'Kaleti Williams'),
(45, 'Maurice Compte'),
(45, 'Myles Humphus'),
(45, 'Thomas Middleditch'),
(46, 'Aamir Khan'),
(46, 'Aparshakti Khurana'),
(46, 'Fatima Sana Shaikh'),
(46, 'Girish Kulkarni'),
(46, 'Ravi Aneja'),
(46, 'Ritwik Sahore'),
(46, 'Sakshi Tanwar'),
(46, 'Sanya Malhotra'),
(46, 'Suhani Bhatnagar'),
(46, 'Zaira Wasim');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichban`
--

CREATE TABLE `kichban` (
  `idphim` int(11) NOT NULL,
  `kichban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `kichban`
--

INSERT INTO `kichban` (`idphim`, `kichban`) VALUES
(0, 'Derek Connolly'),
(0, 'Matthew Robinson'),
(1, 'Baoqiang Wang'),
(1, 'Dan Berk'),
(1, 'Robert Olsen '),
(2, 'Baoqiang Wang'),
(3, 'Andrey Gavrilov'),
(4, 'Javier Gullón'),
(5, 'Damien Chazelle'),
(7, 'Châu Tinh Trì'),
(7, 'Si-Cheun Lee'),
(8, 'F. Scott Frazier'),
(8, 'Rich Wilkes'),
(9, 'Eric Summer'),
(10, 'Alex Jia'),
(10, 'He Keke'),
(11, 'Andrea Berloff'),
(11, 'Frédéric Jardi'),
(12, 'Felix Chong'),
(12, 'Gordon Chan'),
(13, 'Adam Cooper'),
(13, 'Michael Lesslie'),
(14, 'Cory Goodman'),
(14, 'Kyle Ward'),
(15, 'Carlo Bernard'),
(15, 'Doug Miro'),
(16, 'Paul W.S. Anderson'),
(17, 'Chris Weitz'),
(17, 'Tony Gilroy'),
(18, 'Garth Jennings'),
(19, 'Jon Spaihts'),
(19, 'Scott Derrickson'),
(20, 'Matt Cook'),
(20, 'Peter Berg'),
(21, 'James Mangold'),
(21, 'Scott Frank'),
(22, 'Evan Spiliotopoulos'),
(22, 'Stephen Chbosky'),
(23, 'James Cameron'),
(24, 'Jared Bush'),
(24, 'Ron Clements'),
(25, 'Guillermo del Toro'),
(25, 'Travis Beacham'),
(26, 'Edmond Wong'),
(26, 'Tai-lee Chan'),
(27, 'Paul Wernick'),
(27, 'Rhett Reese'),
(28, 'John Gatins'),
(28, 'Matt Sazama'),
(29, 'Ken Ochiai'),
(29, 'Michael Thai'),
(30, 'Fran Walsh'),
(30, 'Philippa Boyens'),
(31, 'Dan Gilroy'),
(31, 'Max Borenstein'),
(33, 'Chris Morga'),
(33, 'Gary Scott Thompson'),
(34, 'Pamela Ribon'),
(34, 'Stacey Harman'),
(35, 'Hans Christian Andersen'),
(35, 'Jennifer Lee'),
(36, 'Dean DeBlois'),
(36, 'William Davies'),
(37, 'Marla Frazee'),
(37, 'McCullers'),
(37, 'Michae'),
(38, 'David Grann'),
(38, 'James Gray'),
(39, 'J.K. Rowling'),
(39, 'Steve Kloves'),
(40, 'Ashley Cheung'),
(40, 'Ho Wing-Hong'),
(40, 'Yan Pak-Wing'),
(41, 'Jamie Moss'),
(41, 'Masamune Shirow'),
(41, 'William Wheeler'),
(42, 'J.K. Rowling'),
(42, 'Steve Kloves'),
(43, 'Fran Walsh'),
(43, 'J.R.R. Tolkien'),
(44, 'Fran Walsh'),
(44, 'J.R.R. Tolkien'),
(44, 'Philippa Boyens'),
(45, 'Mark Cullen'),
(45, 'Robb Cullen'),
(46, 'Piyush Gupta'),
(46, 'Shreyas Jain');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luotxem`
--

CREATE TABLE `luotxem` (
  `ngay` date NOT NULL,
  `luotxem` int(11) NOT NULL,
  `tong` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `luotxem`
--

INSERT INTO `luotxem` (`ngay`, `luotxem`, `tong`) VALUES
('2017-07-15', 2, 2),
('2017-07-16', 26, 28),
('2017-07-17', 3, 31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `idphim` int(11) NOT NULL,
  `tenphimvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenphimen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam` int(11) NOT NULL,
  `thoigian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemimdb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL,
  `linkphim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkphim_tm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phimbo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`idphim`, `tenphimvi`, `tenphimen`, `nam`, `thoigian`, `diemimdb`, `poster`, `mota`, `luotxem`, `linkphim`, `linkphim_tm`, `phimbo`) VALUES
(1, 'Thợ Săn Quỷ (2017)', 'Do not Kill It (2017) ', 2017, '1h 23min', '5.1', 'Dont.Kill.It.2016.jpg', 'Một con quỷ cổ xưa đang đe dọa một thị trấn nhỏ ở Mississippi.\r\n', 44, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqQXoxQ05OQUJTcTQ/preview', '', ''),
(2, 'Đại Náo Thiên Trúc (2017)', 'Buddies in India (2017)', 2017, '1h 39min', '4.0', 'Buddies.in.India.2017.jpg', 'Đại Náo Thiên Trúc là tác phẩm điện ảnh phóng tác dựa trên tiểu thuyết Tây Du Ký của Ngô Thừa Ân. Xoay quanh quá trình sang Ấn Độ tìm kiếm di chúc của nhóm 4 người Đường Sâm, Vũ Không, Chu Thiên Bằng và Ngộ Tĩnh. Trong phim, Lục Tiểu Linh Đồng vào vai Võ Thánh, cha của Vũ Không (Vương Bảo Cường). Đặc biệt, ông còn tái hiện lại hình ảnh Tôn Ngộ Không huyền thoại của mình trên màn ảnh rộng.', 52, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqSzZfeHEwVzd1QW8/preview', ''),
(3, 'Siêu Chiến Binh (2017)', 'The Guardians (2017)', 2017, '1h 28min', '3.7', 'The.Guardians.2017.jpg', 'Khi cuộc chiến tranh lạnh giữa Nga và Mỹ không ngừng leo thang căng thẳng, một tổ chức tên Patriot được lập ra nhằm đào tạo một biệt đội siêu anh hùng bao gồm các thành viên của những nước Xô Viết. Họ được cải tạo gen và biến thành những chiến binh bất khả chiến bại. Suốt nhiều năm, những siêu anh hùng này cố gắng che giấu danh tính của mình cho đến khi thời thế buộc họ phải xuất hiện, bảo vệ nền hòa bình trái đất.', 15, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqUnFOTWJxODJFbTg/preview', ''),
(4, 'Sau Thảm Họa (2017)', 'Aftermath (2017)', 2017, '1h 34min', '5.7', 'Aftermath.2017.jpg', 'Bộ phim dựa trên một sự việc có thật về thảm họa hàng không. Roman (Arnold Schwarzenegger thủ vai) nóng lòng chào đón vợ và cô con gái đang mang thai trở về nước Mỹ. Trong tư thế háo hức, nhưng khi đến sân bay, ông nhận được tin khủng khiếp rằng người thân của mình đã tử nạn trong vụ va chạm máy bay thảm khốc. Trong chớp mắt, mất hết cả gia đình, quá suy sụp, Roman thu mình vào một thế giới đau khổ và trống rỗng, nơi chỉ lấp đầy những kỷ niệm cùng những câu hỏi không có lời đáp. Người đàn ông có số phận nghiệt ngã nhất thế gian không thể nào yên lòng và quyết tâm tìm ra người chịu trách nhiệm cho mất mát của ông.', 25, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqWHFqck5QNHp5OXM/preview', ''),
(5, 'Những Kẻ Khờ Mơ Mộng (2016)', 'La La Land (2016)', 2016, '2h 8min', '8.3', 'La.La.Land.2016.jpg', 'La La Land là câu chuyện tình yêu tuyệt đẹp thời hiện đại giữa chàng nhạc công piano tài hoa chuyên diễn tại các quán bar Sebastian và cô diễn viên mới nổi xinh đẹp Mia Dolan. Thế nhưng, ở thiên đường điện ảnh Hollywood, tình yêu và sự thành công dường như không thể song hành. Khi thành công và sự nổi tiếng đến, họ sẽ phải đối mặt ra sao? ', 58, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqLUpTOW5xUXBQd2M/preview', '', ''),
(7, 'Tây Du Ký: Mối Tình Ngoại Truyện 2 (2017)', 'Journey to the West: The Demons Strike Back (2017)', 2017, '1h 49min', '5.5', 'Journey.to.the.West.The.Demons.Strike.Back2017.jpg', 'Tây Du Hàng Ma Thiên 2 2016 dựa trên cốt truyện nổi tiếng Tây Du Ký của Ngô Thừa Ân, chủ yếu xoay quanh câu chuyện thu phục 3 đệ tử của Đường Tam Tạng (Ngô Diệc Phàm). Trong đó, Lâm Canh Tân sẽ hóa thân thành Tôn Ngộ Không, khác xa với các hình tượng Tôn Ngộ Không khác. Tác phẩm do Châu Tinh Trì chỉ đạo diễn xuất, sẽ là một sự bùng nổ hay thảm họa?\r\n', 46, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqbzlPRmZQUDREcDg/preview', ''),
(8, 'xXx: Phản Đòn (2017)', 'xXx: Return of Xander Cage (2017)', 2017, '1h 47min', '5.3', 'xXx.Return.of.Xander.Cage.2017.jpg', 'xXx: Return Of Xander Cage 2017 là một tác phẩm điện ảnh hành động gay cấn được phát hành bởi hãng Paramount Pictures. Không chỉ quy tụ dàn diễn viên nổi tiếng quốc tế như Vin Diesel, Samuel L.Jackson, Chân Tử Đan, mà Sự Trở Lại Của Xander Cage còn có sự góp mặt của các nhân tố mới tiềm năng, điển hình như nam diễn viên Ngô Diệc Phàm.\r\n', 96, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqcVJlUVpXQ0l0SUk/preview', ''),
(9, 'Vũ Điệu Thần Tiên (2016)', 'Ballerina (2016)', 2016, '1h 29min', '6.8', 'Ballerina.2016.jpg', 'Vào những năm 1880, Félicie- một cô gái mồ côi nghèo với mơ ước trở thành một nữ diễn viên múa ballet nhưng không được đào tạo một cách chính quy… Cô bé quyết định thoát khỏi vùng nông thôn Brittany để đến với Paris hoa lệ cùng cậu bạn thân Victor. 11 tuổi – không một chút kinh nghiệm – không một xu dính túi nhưng với sự giúp đỡ của Victor và Odette (cựu diễn viên múa ballet tài giỏi) và sự quyết tâm cao độ, Félicie chấp nhận đương đầu với vô số thách thức để theo đuổi đam mê của mình. Liệu cô bé có đủ can đảm theo đuổi đam mê và biến ước mơ thành sự thật? ', 11, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqNXVwVGZwc0twYXM/preview', ''),
(10, 'Biệt Đội Mãnh Hổ (2016)', 'Railroad Tigers (2016)', 2016, '2h 4min', '6.1', 'Railroad.Tigers.2016.jpg', 'Railroad Tigers là bộ phim hành động, lịch sử được nhiều người chờ đón. Năm 1941, trong bối cảnh Trung Quốc thù trong giặc ngoài, một công nhân đường sắt Trung Quốc đã dẫn dắt những anh em có cùng chí hướng để chống lại quân Nhật, cướp lấy thực phẩm cứu khổ tế bần. Trước tình hình đó, quân đội Nhật bắt đầu gửi thêm quân đội tới đàn áp khiến đội Mãnh Hổ gặp vô vàn khó khăn. Đây là bộ phim võ thuật tiếp theo của “ông vua” Thành Long, phim còn có sự tham gia của nam diễn viên thực lực trẻ tuổi Vương Đại Lục và cựu thành viên nhóm nhạc EXO- Hoàng Tử Thao. ', 14, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqOFZvSkdQVXZtMEk/preview', ''),
(11, 'Đột Kích Màn Đêm (2017)', 'Sleepless (2017)', 2017, '1h 35min', '5.6', 'Sleepless.2017.jpg', 'Sau khi phi vụ vận chuyển ma túy trái phép gặp thất bại bởi hai cảnh sát Vincent Downs (Jamie Foxx) và Sean (Tip T.I. Harris), gã chủ sòng bài Stan Rubino (Dermot Mulroney) quyết định ra tay trả thù bằng cách bắt cóc con trai của Vincent (Octavius J. Johnson).\r\nBị truy đuổi bởi cả thanh tra đến từ Sở Nội vụ là Jen Bryant (Michelle Monaghan) lẫn những tên trùm khét tiếng, viên sĩ quan da màu buộc phải dựa vào bản năng để có thể giải cứu con trai mình ngay trong đêm định mệnh. ', 8, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqTExqZUlFODdoUHM/preview', ''),
(12, 'Đại Hiệp Triển Chiêu (2003)', 'Cat And Mouse (2003)', 2003, '1h 32min', '5.3', 'Cat.And.Mouse.2003.jpg', 'Trong phim Đại Hiệp Triển Chiêu, Bao Thanh Thiên là vị quan nổi tiếng nhất huyện Khai Phong thời Bắc Tống.Nhờ có ông mà dân chúng có được một cuộc sống ấm no hạnh phúc. Trong phim online này, Triển Chiêu là một trong những thủ hạ tâm đắc nhất của ông.Nhưng là một kẻ yêu thích sự tự do tự tại, cuộc sống nơi quan trường khiến Triển Chiêu cảm thấy nhàm chán.Anh liền đi chu du tứ hải hành hiệp trượng nghĩa.Trong một lần hành động,Triển Chiêu đã gặp phải một người bạn vừa đáng sợ vừa quan trọng trong cuộc đời của anh, Cẩm Mao Thử - Bạch Ngọc Đường.Và cũng xuất hiện 1 người con gái rất yêu anh nhưng cuối cùng lại ko có được anh - Nguyệt Hoa công chúa. Xem phim Đại Hiệp Triển Chiêu và hy vọng bộ phim sẽ mang lại những giờ phút thư giãn cho các bạn! \r\n', 11, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqRVhvbS1xTm5VWXc/preview', ''),
(13, 'Sát Thủ Bóng Đêm (2016)', 'Assassin is Creed (2016)', 2016, '1h 55min', '6.0', 'Assassin.is.Creed.2016.jpg', 'Phim xoay quanh Callum Lynch, trong những thí nghiệm công nghệ vô tình kích hoạt được những ký ức trong tiềm thức, từ đó có thể trải nghiệm được những gì mà tổ tiên anh - Aguilar thực hiện từ thế kỷ 15 ở Tây Ban Nha. Không chỉ vậy, Callum phát hiện ra mình là hậu duệ của hội Sát thủ, được thừa hưởng những kỹ năng và kiến thức phi thường để đánh bại hội Templar trong thời hiện tại.', 33, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqbVk0VFdqZU4yaVU/preview', ''),
(14, 'Thế Giới Ngầm 5: Trận Chiến Đẫm Máu (2016)', 'Underworld: Blood Wars (2016)', 2016, '1h 31min', '5.8', 'Underworld.Blood.Wars.2016.jpg', 'Sau năm năm vắng bóng, bông hồng nước anh Kate Beckinsale tiếp tục trở lại với hành trình săn người sói trong phần năm của series mang tên Underworld: Blood Wars. Ở phần phim trước, cả Người sói và phe Ma cà rồng đều bị loài người tấn công và tiêu diệt. Tuy nhiên, những hình cảnh trong trailer của Underworld: Blood Wars cho thấy cả 2 giống loài từng thống trị Thế giới từ hàng trăm năm trước này vẫn còn hùng mạnh lẫn nhiều bí ẩn bên trong mà người xem chưa được biết hết. Không những thế phe Người sói đã có thủ lĩnh mới là Marius và phát động cuộc chiến diện rộng chống lại Ma cà rồng. Không chỉ sử dụng súng mà cả 2 phe còn có những pha cận chiến với kiếm vô cùng mãn nhãn.', 9, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqTl9HV3JKMjdYamM/preview', ''),
(15, 'Tử Chiến Trường Thành (2016)', 'The Great Wall (2016)', 2016, '1h 43min', '6.1', 'The.Great.Wall.2016.jpg', 'Lấy bối cảnh thời kỳ Bắc Tống, chuyện phim xoay quanh câu chuyện của William Garin (Damon) – thành viên trong nhóm lính đánh thuê châu Âu được cử sang Trung Quốc để đánh cắp công thức chế tạo thuốc súng. Sau khi bị phát hiện và bị tống giam bên trong Vạn Lý Trường Thành, anh đã vô tình phát hiện ra những bí ẩn đáng sợ đằng sau công trình được coi là Đệ nhất kỳ quan của thế giới. ', 13, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqcWdzeWFuQ1hxY0U/preview', ''),
(16, 'Vùng Đất Quỷ Dữ 6: Hồi Cuối (2016)', 'Resident Evil: The Final Chapter (2016) ', 2016, '1h 47min', '5.6', 'Resident.Evil.The.Final.Chapter.2016.jpg', 'Trong phần 6 này, cô nàng nhân vật chính Alice trong phần này sẽ phải sống lại những kí ức kinh hoàng tại thành phố Raccoon City, nơi mà tập đoàn Umbrella đang tập trung mọi nguồn lực để giáng một đòn cuối cùng vào nhóm những người sống sót sau thảm họa zombie. Alice sẽ phải nhờ tới sự giúp đỡ của những người bạn xung quanh để chiến đấu với các chủng loài zombie mới xuất hiện cùng binh đoàn xác sống đang ùn ùn tiến về phía họ.', 11, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqVjhiYWs4MC1SQTA/preview', ''),
(17, 'Chiến Tranh Giữa Các Vì Sao: Ngoại Truyện (2016)', 'Rogue One (2016)', 2016, '2h 13min', '7.9', 'Rogue.One.2016.jpg', 'Rogue One: A Star Wars Story, còn được biết đến với tên Star Wars: Ngoại truyện, diễn ra trong khoảng thời gian giữa tập III (Revenge of the Sith) và tập IV (The New Hope). Theo chân nữ nhân vật chính xinh đẹp Jyn Erso trong sứ mệnh đánh cắp bản thiết kế của vũ khí huỷ diệt Ngôi Sao Chết (The Death Star). Đây chính là mấu chốt để vén lên bức màn sự thật đằng sau việc quân liên minh phát hiện ra điểm yếu của Ngôi Sao chết và phá huỷ nó trong tập IV. Điều này cũng khép lại những tranh luận về vì sao siêu vũ khí của đế chế lại có thể bị phá huỷ một cách dễ dàng như vậy, vốn đã kéo dài hơn 40 năm qua.', 51, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqdVZkS3ppTjBLNkE/preview', ''),
(18, 'Đấu Trường Âm Nhạc (2016)', 'Sing (2016)', 2016, '1h 48min', '7.2', 'sing.2016.jpg', 'Sing 2016 là bộ phim hoạt hình xoay quanh một cuộc thi âm nhạc của các loại động vậy. Phong cách vui nhộn, sự phong phú về đồ họa và dĩ nhiên, âm nhạc đặc sắc chính là những điểm đáng mong đợi ở tác phẩm này. Đạo diễn thực hiện phim là một tên tuổi khá lạ, Garth Jennings, tuy nhiên dàn diễn viên lồng tiếng lại cực kỳ quen mặt. Họ chính là Matthew McConaughey, Reese Witherspoon, Seth MacFarlane, Tori Kelly...\r\n', 31, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqTjhmcEhWRVpiVG8/preview', '', ''),
(19, 'Phù Thủy Tối Thượng (2016)', 'Doctor Strange (2016)', 2016, '1h 55min', '7.6', 'Doctor.Strange.2016.jpg', 'DOCTOR STRANGE là câu chuyện về bác sĩ Giải Phẫu Thần Kinh tên Stephen Vincent Strange. Cuộc đời anh thay đổi từ sau một tai nạn xe hơi khủng khiếp. Sau tai nạn đó, Stephen nhận ra mình có những năng lực bí ẩn cũng như biết thêm về thế giới ma thuật huyền bí. Từ một vị bác sĩ bình thường, Stephen Strange dần nhận được nhiều siêu năng lực để cứu trái đất khỏi những tai họa. ', 64, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqdzU4a1pmMVZjT3c/preview', ''),
(20, 'Ngày Định Mệnh (2016)', 'Patriots Day (2016)', 2016, '2h 13min', '7.4', 'Patriots.Day.2016.jpg', 'Trong phim Ngày Định Mệnh 2017, vụ đánh bom kinh hoàng ngày 15/04/2013 tại Giải Marathon Boston khiến 5 người thiệt mạng và hơn 280 người bị thương. Chứng kiến toàn bộ sự kiện khủng khiếp này, hạ sĩ Tommy Saunders (Mark Wahlberg) cùng những người sống sót, các điều tra viên và lực lượng FBI phải chạy đua với thời gian trong cuộc truy lùng khủng bố quy mô lớn chưa từng thấy trong lịch sử nước Mỹ.\r\n', 7, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqcWVZelVJRWNwUzA/preview', ''),
(21, 'Người Sói: Trận Chiến Cuối Cùng (2017)', 'Logan (2017)', 2017, '2h 17min', '8.3', 'logan2017.jpg', 'Đặt bối cảnh ở tương lai năm 2024, khi nhóm X-Men đã tan rã. Năng lực hồi phục của Wolverine – Logan dần dần mất đi còn giáo sư X lại mắc bệnh Alzheimer suy giảm trí nhớ. Lúc này, một tập đoàn do Nathaniel Essex lãnh đạo tìm cách phá hoại thế giới, Logan phải chiến đấu chống lại hắn cùng với sự giúp đỡ của cô bé Laura Kinney – một người đột biến được nhân bản từ chính ông.\r\n', 24, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqZmViOHNuUncyVUk/preview', ''),
(22, 'Người Đẹp Và Quái Vật (2017)', 'Beauty and the Beast (2017)', 2017, '2h 9min', '7.5', 'Beauty.and.the.Beast.2017.jpg', 'Câu chuyện của Beauty and the Beast xoay quanh Belle, một cô gái ham học và siêng năng. Bella đã thay cha làm tù nhân trong lâu đài của Beast xấu xí, nhưng rồi cô phát hiện ra rằng anh thực sự là một hoàng tử và đem lòng yêu anh. Khi biết Belle đã phải lòng Beast, Gaston dẫn một đám đông giận dữ tới để giết anh ta. Cuối cùng, tình yêu chân thành của Belle đã giúp Beast phá bỏ lời nguyền, được trở lại làm người.', 5, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqVEJXWWt3cnRDYWc/preview', ''),
(23, 'Avatar (2009)', 'Avatar (2009)', 2009, '2h 42min', '7.8', 'Avatar.2009.jpg', 'Avatar là câu chuyện về người anh hùng bất đắc dĩ Jake Sully – một cựu sĩ quan thủy quân lục chiến bị liệt nửa thân. Người anh em sinh đôi của anh được chọn để tham gia vào chương trình cấy gien với người ngoài hành tinh Na’vi nhằm tạo ra một giống loài mới có thể hít thở không khí tại hành tinh Pandora. Giống người mới này được gọi là Avatar. Sau khi anh của Jake bị giết, Jake được chọn để thay thế anh mình và đã trở thành một Avatar, Jake có nhiệm vụ đi tìm hiểu và nghiên cứu hành tinh Pandora. Những thông tin mà anh thu thập được rất có giá trị cho chiến dịch xâm chiếm hành tinh xanh thứ hai này của loài người. ', 14, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqNlA1T0tCMzhxcVU/preview', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqTlVhSE5Cb0c5Znc/preview', ''),
(24, 'Hành Trình Của Moana (2016)', 'Moana (2016)', 2016, '1h 47min', '7.7', 'Moana.2016.jpg', 'Ở một ngôi làng giữa biển khơi - có một cô bé đầy dũng mãnh, gan dạ, khao khát tự do và luôn tìm đến miền biển khơi, nhưng lại bị người làng ngăn cản - chính là Moana. Thế nhưng rồi, bóng tối hiện về, hòn đảo chết dần, cô được biển khơi trao tặng sứ mệnh vượt đại dương, trả lại trái tim cho Te Fiti, để cứu lấy nhân loại. Xuyên suốt đồng hành trên chuyến đi là Á Thần Maui - kẻ đã gây ra sai lầm trong quá khứ và chú gà HeiHei ngốc nghếch. Hành trình đầy giông bão và khó khăn, Moana và Maui sẽ vượt qua như thế nào ?!', 22, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqU3Vzd1NFbG9Yd00/preview', ''),
(25, 'Đại Chiến Thái Bình Dương (2013)', 'Pacific Rim (2013)', 2013, '2h 11min', '7.0', 'Pacific.Rim.2013.jpg', 'Một bộ phim hấp dẫn không thể bỏ qua khi con người phải chiến đấu chống lại những quái vật đến từ kẽ nứt của Thái Bình Dương mang tên gọi Kaiju. Chúng đang đe dọa hủy diệt thế giới loài người khi con người gần như thất bại hoàn toàn trước sức mạnh của lũ quái khổng lồ.', 12, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqbk1uYl9ndFg0dW8/preview', ''),
(26, 'Diệp Vấn (2008)', 'Ip Man (2008)', 2008, '1h 46min', '8.1', 'Ip.Man.2008.jpg', 'Vào năm 1937, chiến tranh bùng nổ, và quân Nhật nhanh chóng chiếm đóng Phật Sơn. Diệp gia bị niêm phong, Diệp Vấn cũng vợ con phải chuyển đến một căn nhà lụp xụp; anh phải đi xúc than để kiếm miếng ăn cho gia đình. Tên tướng Nhật là Miura bị ám ảnh bởi võ thuật, và dùng lương thực để thưởng cho những trận đấu võ giữa người dân và quân lính của hắn. Vài người bạn của Diệp Vấn không kiềm chế được và xin tham gia. Lam võ khùng vốn có lòng tự tôn dân tộc rất cao, không hề sợ hãi lao lên thách thức Miura nhưng đã phải trả giá bằng tính mạng của mình. Ngày hôm sau, chứng kiến thêm cái chết của Lưu sư phụ, Diệp Vấn nổi cơn thịnh nộ và hạ gục 10 tên lính nhật trong một lượt đấu. ', 6, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqS1dlNlhWREwxSk0/preview', ''),
(27, 'Mầm Sống Hiểm Họa (2017)', 'Life (2017)', 2017, '1h 44min', '6.8', 'Life.2017.jpg', 'Life 2017 là câu chuyện kể về một phi hành đoàn gồm 6 thành viên trên trạm vũ trụ quốc tế. Họ đang trong một nhiệm vụ mang tầm quan trọng nhất lịch sử nhân loại, đấy là tìm ra sự sống trên Sao Hỏa, Khi phi hành đoàn bắt đầu tiến hành nghiên cứu, phương pháp của họ đã có kết thúc gây nên hậu quả ngoài ý muốn, đồng thời cũng chứng minh tồn tại của một loài thực thể không ai mong đợi.\r\n', 13, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqaU9uLVBYbzRXVlk/preview', '', ''),
(28, 'Năm Anh Em Siêu Nhân (2017)', 'Power Rangers (2017)', 2017, '2h 4min', '6.5', 'Power.Rangers.2017.jpg', 'Phim 5 Anh Em Siêu Nhân xoay quanh một nhóm 5 chiến binh trẻ tuổi được chọn để chống lại phù thủy Rita Repulsa và ngăn chặn những âm mưu muốn hủy diệt trái đất. Họ có những năng lực siêu nhiên độc đáo và chỉ phát huy tác dụng mạnh nhất khi tất cả tập hợp lại và cùng chung tay giải cứu thế giới.', 11, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqNU43aEI0MUtaTTA/preview', ''),
(29, 'Vệ Sĩ Sài Gòn (2016)', 'Saigon Bodyguards (2016)', 2016, '1h 52min', '4.1', 've.si.sai.gon.2016.jpg', 'Trong Vệ Sĩ Sài Gòn, Mr. Hoàn Hảo và Mr. Mê Gái sắp phải đương đầu với một nhiệm vụ tưởng không khó nhưng không ngờ lại … khó không tưởng: bảo vệ Henry (B Trần đóng) - chàng công tử nhà giàu với tính cách khó gần. Công việc “bảo mẫu” không còn “ngon ăn” khi Henry bất ngờ bị bắt cóc. Cặp đôi vệ sĩ “bá đạo“ buộc phải "xắn tay áo" lên điều tra và hứa mang Henry về cho Thi - nữ khách hàng xinh đẹp (chi Pu đóng) vì nguyên tắc hàng đầu của một vệ sĩ là “bảo vệ thân chủ tới cùng!” Khác với những vai diễn trước, bên cạnh nét hài duyên dáng vốn làm nên tên tuổi và sự thành công của mình, lần này Thái Hòa sẽ có một vai diễn hành động thực thụ khi kết hợp cùng Kim Lý. Các khán giả nếu đã quá quen với một Thái Hoà "ngu ngơ" sẽ rất bất ngờ với tài đánh võ cực chất của anh trong những trường đoạn hành động vừa hồi hộp gay cấn nhưng cũng hài hước đến bất ngờ.\r\n', 10, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqRFQ1YXRzNVozQjA/preview', ''),
(30, 'Người Hobbit 3: Đại Chiến Năm Cánh Quân (2014)', 'The Hobbit: The Battle of the Five Armies (2014)', 2014, '2h 44min', '7.4', 'The.Hobbit.The.Battle.of.the.Five.Armies.2014.poster.jpg', 'Sau khi thành công tiến vào lãnh địa của con rồng Smaug, anh chàng Hobbit gan dạ Bilbo cùng những người đồng đội Dwarf của mình sẽ phải đối mặt với những nguy hiểm gì? Những đội quân Orc đang rình rập, liệu Thor Oakenshield có thành công giành lại vương quốc của mình hay không, và số phận của vùng Trung Địa sẽ xoay chuyển như thế nào khi thế lực bóng tối từ Modor dần dần hiện thân.', 35, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqSURrbWNsOVM0Y2c/preview', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqNlFSNFlwRFZ4Yk0/preview', ''),
(31, 'Kong: Đảo Đầu Lâu (2017)', 'Kong: Skull Island (2017)', 2017, '1h 58min', '6.9', 'Kong.Skull.Island.2017.poster.jpg', 'Phim Kong: Skull Island tái hiện lại hình tượng King Kong (Chúa tể loài khỉ) trong một hành trình phiêu lưu, hấp dẫn dưới bàn tay đạo diễn tài ba Jordan Vogt-Robert. Kong: Skull Islands được quay ngoại cảnh ở Tràng An, Vân Long, Tam Cốc, Vịnh Hạ Long và Động Phong Nha-Kẻ Bàng cùng các địa danh quốc tế như Hawaii, Úc...', 20, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqZEgtRlMtaWk1c0k/preview', ''),
(33, 'Quá Nhanh Quá Nguy Hiểm Phần 8 (2017)', 'The Fate of the Furious (2017)', 2017, '2h 16min', '7.0', 'The.Fate.of.the.Furious.2017.jpg', 'Dom và Letty hiện đang đi hưởng tuần trăng mật. Brian cùng Mia đã quyết định từ giã sự nghiệp. Các thành viên còn lại của nhóm cũng đã được minh oan và dần trở về với cuộc sống bình thường. Nhưng một người phụ nữ bí ẩn (do nữ diễn viên đoạt giải Oscar Charlize Theron thủ vai) đã dẫn dụ Dom vào thế giới tội phạm mà anh dường như không thể thoát ra được và thậm chí phản bội lại cả những người thân thiết nhất, họ sẽ phải trải qua những thử thách cam go mà họ chưa từng đối mặt.', 34, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqWVQ2Y3Q5aTZqd2s/preview', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqNFBFSHV6UEpmLVE/preview', ''),
(34, 'Xì Trum: Ngôi Làng Kỳ Bí (2017)', 'Smurfs: The Lost Village (2017)', 2017, '1h 30min', '5.9', 'Smurfs.The.Lost.Village.2017.jpg', 'Phim Smurfs: The Lost Village (2017): Dựa trên bộ truyện tranh Xì Trum bằng tiếng Pháp nổi tiếng của Bỉ ra mắt vào năm 1958. Xì Trum là một chủng tộc người da xanh tí hon sống trong xứ sở Xì Trum xa xôi. Chúng ở trong những ngôi nhà có hình cây nấm. Làng Xì Trum do Tí Vua đứng đầu và mỗi Tí đại đại diện cho một tính cách của con người. Họ phải đối mặt với lão phù thủy Gargamel độc ác luôn tìm cách xâm chiếm ngôi làng. Ngoài ra, cuộc sống thường ngày của các Tí cũng vô cùng hài hước và thú vị với đủ các trò tinh nghịch cũng như tai nạn dở khóc dở cười.\r\n', 13, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqdWJ2SlNmNWdOeG8/preview', ''),
(35, 'Nữ Hoàng Băng Giá (2013)', 'Frozen (2013)', 2013, '1h 42min', '7.5', 'Frozen.2013.jpg', 'Phim Nữ Hoàng Băng Giá 2013 là bộ phim dựa trên câu chuyện nổi tiếng The Snow Queen (Bà Chúa Tuyết) trong bộ truyện cổ tích của Andersen. Phim Nữ Hoàng Băng Giá là một bộ phim được mong chờ vì nó là sự kết hợp của phim hoạt hình, âm nhạc và hiệu ứng 3D. Đây cũng là bộ phim hoạt hình thứ 53 trong lịch sử của hãng Walt Disney. Mời các bạn cùng xem phim hay này!\r\n', 10, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqR3lnVHpWVWR4eGM/preview', ''),
(36, 'Bí Kíp Luyện Rồng (2010)', 'How to Train Your Dragon (2010)', 2010, '1h 38min', '8.1', 'How.To.Train.Your.Dragon.2010.jpg', 'Bộ phim lấy bối cảnh là một thế giới thần thoại của người Viking và loài rồng. Câu chuyện xoay quanh cậu bé Hiccup, sống tại đảo Berk. Khi Hiccup được tham gia vào khóa huấn luyện rồng với những cậu bé cùng trang lứa, cậu coi đây là cơ hội để chứng minh rằng mình đã trưởng thành và là một chiến binh thật sự. Cậu đã giải thoát và kết bạn với một chú rồng và đặt chú tên Toothless. Mối quan hệ này đã thay đổi hoàn toàn cuộc sống của cậu khi cậu đấu tranh để thuyết phục cả bộ tộc mình rằng việc giết rồng là không cần thiết… ', 16, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqUkZWMTB3Y2tVRlE/preview', ''),
(37, 'Nhóc Trùm (2017)', 'The Boss Baby (2017)', 2017, '1h 37min', '6.4', 'The.Boss.Baby.2017.jpg', 'Phim Nhóc Trùm Nói về cậu bé Tim 7 tuổi vốn dĩ đang có một cuộc sống rất ấm êm và đầy màu hồng thì bỗng dưng phải đối mặt với biến cố lớn trong đời: có một đứa em trai và phải học cách làm anh. Mọi khi cậu luôn là tâm điểm trong mắt bố mẹ, nhưng giờ đây Tim phải chấp nhận san sẻ tình yêu thương. Chưa hết, đứa em trai quái chiêu của cậu còn “thống trị” toàn bộ căn nhà, bắt nạt Tim và luôn khóc thét trước mặt bố mẹ để dành quyền được dỗ dành.', 8, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqbU1OazFQeTZlSG8/preview', '', ''),
(38, 'Thành Phố Vàng Đã Mất Tích (2016)', 'The Lost City of Z (2016)', 2016, '2h 21min', '6.8', 'The.Lost.City.of.Z.2016.jpg', 'Thành Phố Vàng Đã Mất kể lại câu chuyện có thật về nhà thám hiểm người Anh, Percy Fawcett, người đã thám hiểm tới Amazon vào thế kỷ 20 và phát hiện ra một nền văn minh tiên tiến chưa từng được biết tới. ', 1, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqQURiMjhHMi1rWkE/preview', ''),
(39, 'Harry Potter Và Bảo Bối Tử Thần: Phần 2 (2011)', 'Harry Potter and the Deathly Hallows: Part 2 (2011)', 2011, '130 min', '8.1', 'Harry.Potter.and.the.Deathly.Hallows.Part.2.2011.jpg', 'Kết thúc phần 1 là khi nhóm bạn Harry Potter, Ron và Hermione quay trở lại trường Hogwarts để tìm và tiêu diệt Trường Sinh Linh Giá cuối cùng của Voldemort. Nhưng Voldemort đã phát hiện ra nhiệm vụ của họ, và trận chiến pháp thuật lớn nhất trong lịch sử đã diễn ra ở đây, nơi mà biết bao người ngã xuống, nơi mà tất cả các pháp sư dũng cảm sẵn sàng đánh đổi cuộc sống của mình để tiêu diệt tận cùng thế lực hắc ám. Giáo sư Dumbledore mặc dù đã mất từ tập 6, nhưng ở phần cuối ông vẫn đóng vai trò quan trọng trong việc dẫn đường chỉ lối cho Harry chiến đấu với phù thủy hắc ám mạnh nhất mọi thời đại... ', 7, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqRFhOUDAzMy1lQm8/preview', '', ''),
(40, 'Biệt Đội Bắt Cương Thi (2017)', 'Vampire Cleanup Department (2017)', 2017, '1h 33min', '5.9', 'Vampire.Cleanup.Department.2017.jpg', 'Phim Biệt Đội Bắt Cương Thi - Vampire Cleanup Department 2017: Trong thời hiện đại ở Hồng Kông, một thế hệ các thanh thiếu niên trẻ mà điển hình là Tim Cheung quyết tâm gia nhập vào hội Vampire Cleanup Department, một đội đặc nhiệm và bí mật để giải quyết các vụ án có liên quan đến ma cà rồng tại Trung Quốc mà nhiều người hay gọi nó là Goeng Si. Trong quá trình hành động, anh được sự chỉ dẫn của chú Châu, một trong những đội ngũ cán bộ cao cấp, và cho đến cuối cùng anh lại tự mình cứu lấy một nữ Goeng Si, người đã bị vị lãnh chúa tà ác Goeng Si chôn sống cô kể từ thời phong kiến xa xưa.\r\n', 4, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqODF2VUl2ZERWTGc/preview', ''),
(41, 'Vỏ Bọc Ma (2017)', 'Ghost in the Shell (2017)', 2017, '1h 47min', '6.6', 'Ghost in the Shell 2017.jpg', 'Phim Vỏ Bọc Ma được xây dựng dựa trên tác phẩm truyện tranh nổi tiếng cùng tên của Nhật, nội dung phim nói về thiếu tá Motoko Kusanagi, chỉ huy lực lượng đặc nhiệm Khu 9, chuyên giải quyết những tên tội phạm nguy hiểm, và đang phải đối đầu với tên hacker có biệt danh Puppet Master đang âm mưu tiêu diệt kế hoạch cộng nghệ Hanka Robotic.', 6, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqNjhhc0lKRFl1Ym8/preview', ''),
(42, 'Harry Potter Và Bảo Bối Tử Thần: Phần 1 (2010)', 'Harry Potter and the Deathly Hallows: Part 1 (2010) ', 2010, '146 min', '7.7', 'Harry Potter and the Deathly Hallows P1 2010.jpg', 'Chúa tể Voldemort cùng đám tay chân của hắn đang âm mưu tấn công Harry Potter khi cậu rời khỏi ngôi nhà của gia đình Dursley lần cuối cùng. Ngay trước khi phép bảo vệ cho Harry tại gia đình Dursley hết hiệu lực vào thời điểm Harry bước qua tuổi 17, người của Hội Phượng hoàng đến để hộ tống cậu tới một nơi ở mới an toàn. Mặc dù đã dùng sáu người nguỵ trang thành Harry, Harry thật vẫn bị Voldemort cùng các Tử thần Thực tử phát hiện ra trên đường đi và bị tấn công... ', 1, 'https://drive.google.com/file/d/0Bz7FgiHfhIxqQkVQdWNOSWZYaUU/preview', '', ''),
(43, 'Người Hobbit 2: Đại Chiến Với Rồng Lửa (2013)', 'The Hobbit: The Desolation of Smaug (2013)', 2013, '161 min', '7.9', 'The.Hobbit.The.Desolation.of.Smaug.2013.jpg', 'Bỏ lại đằng sau những cảnh quay mát mắt của làng Shire, các thảo nguyên rộng lớn hay khung cảnh kỳ vĩ xinh đẹp của thung lũng Rivendell, Người Hobbit: Đại chiến với rồng lửa không còn là một bộ phim mãn nhãn về mặt thị giác với những cảnh quay lộng lẫy như phần trước, Người Hobbit: Hành trình vô định. Ngược lại, Người Hobbit: Đại chiến với rồng lửa mang đến một cái nhìn huyền bí, tăm tối và vô cùng u ám về hành trình giết rồng của 13 người lùn và một chàng Hobbit. Gần như toàn bộ bối cảnh của phim đều diễn ra trong nhà kho, ngục tối, dưới lòng đất, các hầm mỏ hay những đại sảnh tối đen. Bên cạnh đó, những cảnh quay chém giết trần trụi và mạnh bạo cũng dễ dàng khiến khán giả phải “lạnh sống lưng” khi thưởng thức tác phẩm điện ảnh này.', 1, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqWThuN09GdGk3aUE/preview', ''),
(44, 'Người Hobbit: Hành Trình Vô Định (2012)', 'The Hobbit: An Unexpected Journey (2012)', 2012, '169 min', '7.9', 'The.Hobbit.An.Unexpected.Journey.2012.jpg', 'The Hobbit đưa người xem trở về với thế giới Trung Địa huyền ảo và tham gia vào cuộc hành trình vô định của Bilbo Baggins – chú của nhân vật Frodo. Lấy mốc thời gian trước những sự kiện xảy ra trong ba phần Chúa Nhẫn, The Hobbit xoay quanh nhân vật Bilbo Baggins, người bị cuốn vào một chuyến phiêu lưu phi thường để đoạt lại xứ sở Người Lùn đang bị chiếm giữ bởi con rồng khổng lồ Smaug. Chuyến đi của Bilbo có sự hộ tống của Pháp sư Gandalf Áo Xám và 13 thành viên tộc Người Lùn mà dẫn đầu là hoàng tử Thorin Oakensheild. Cuộc hành trình đưa họ tới những vùng đất kỳ lạ của Trung Địa – nơi có những vị tiên lộng lẫy, những con yêu tinh khổng lồ, những phù thủy bí hiểm và cả những linh hồn giấu mặt đang theo dõi nhất cử nhất động của họ.', 1, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqMVNHRHoyd0VjQ2M/preview', ''),
(45, 'Bố Già Xứ Venice (2017)', 'Once Upon a Time in Venice (2017)', 2017, '1h 34min', '5.3', 'Once.Upon.a.Time.in.Venice.2017.jpg', 'Phim Bố Già Xứ Venice xoay quanh Steve Ford (Bruce Willis), gã thám tử tư với phương châm sống: “hết mình với phụ nữ, mạnh bạo với đám đàn ông” bất ngờ bị một băng đảng khét tiếng đánh cắp chú chó cưng. Để cứu lấy người bạn thân thương, Steve buộc phải trộm ma túy theo yêu cầu của tay trùm Spyder và đối mặt với những tình huống tréo ngoe, dở khóc dở cười…', 1, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqYkRZc09BMUVoQjA/preview', ''),
(46, 'Huấn Luyện Viên Đấu Vật (2016)', 'Dangal (2016)', 2016, '2h 41min', '8.7', 'Dangal 2016.jpg', 'Dangal kể về nhà vô địch đô vật Mahavir Singh Phogat, dám đứng lên chống lại những kẻ cuồng loạn để huấn luyện cho hai con gái anh – Geeta Phgat và Babita Kumari theo con đường đô vật chuyên nghiệp. Bộ phim đề cao sức mạnh của người phụ nữ, khuyến khích phụ nữ tham gia thể thao và đề cao tinh thần tự hào dân tộc.', 1, '', 'https://drive.google.com/file/d/0Bz7FgiHfhIxqbVY5dXp2TDM4Y1U/preview', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimbo`
--

CREATE TABLE `phimbo` (
  `idphim` int(11) NOT NULL,
  `tap` int(11) NOT NULL,
  `linkphude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkthuyetminh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimyeuthich`
--

CREATE TABLE `phimyeuthich` (
  `id` int(11) NOT NULL,
  `idphim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `phimyeuthich`
--

INSERT INTO `phimyeuthich` (`id`, `idphim`) VALUES
(1, 7),
(1, 8),
(1, 21),
(1, 23),
(1, 30),
(1, 33),
(3, 13),
(3, 17),
(3, 19),
(3, 21),
(4, 15),
(7, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `stt` int(11) NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idphim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`stt`, `hinh`, `phim`, `idphim`) VALUES
(4, '6.jpg', 'Phù Thủy Tối Thượng (2016)', 19),
(7, 'moana.2016.jpg', 'Hành Trình Của Moana (2016)', 24),
(8, 'The.Hobbit.The.Battle.of.the.Five.Armies.2014.jpg', 'Người Hobbit 3: Đại Chiến Năm Cánh Quân (2014)', 30),
(3, 'Kong.Skull.Island.2017.jpg', 'Kong: Đảo Đầu Lâu (2017)', 31),
(10, 'The.Fate.of.the.Furious.2017.jpg', 'Quá Nhanh Quá Nguy Hiểm Phần 8 (2017)', 33),
(11, 'Smurfs.The.Lost.Village.2017.jpg', 'Xì Trum: Ngôi Làng Kỳ Bí (2017)', 34),
(12, 'The.Boss.Baby.2017.jpg', 'Nhóc Trùm (2017)', 37),
(13, 'Vampire.Cleanup.Department.2017.jpg', 'Biệt Đội Bắt Cương Thi (2017)', 40),
(14, 'Ghost in the Shell 2017.jpg', 'Vỏ Bọc Ma (2017)', 41),
(15, 'Once.Upon.a.Time.in.Venice.2017.jpg', 'Bố Già Xứ Venice (2017)', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `dl` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idphim` int(11) NOT NULL,
  `tentheloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentheloai_khongdau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idphim`, `tentheloai`, `tentheloai_khongdau`) VALUES
(1, 'Kinh dị', 'Kinhdi'),
(1, 'Viễn tưởng', 'Vientuong'),
(2, 'Hài hước', 'Haihuoc'),
(2, 'Hành động', 'Hanhdong'),
(2, 'Võ thuật', 'Vothuat'),
(3, 'Hành động', 'Hanhdong'),
(3, 'Phưu lưu', 'Phuuluu'),
(3, 'Viễn tưởng', 'Vientuong'),
(4, 'Kinh dị', 'Kinhdi'),
(4, 'Tình cảm', 'Tinhcam'),
(5, 'Âm nhạc', 'Amnhac'),
(5, 'Hài hước', 'Haihuoc'),
(5, 'Tình cảm', 'Tinhcam'),
(7, 'Âm nhạc', 'Amnhac'),
(7, 'Hài hước', 'Haihuoc'),
(7, 'Kinh dị', 'Kinhdi'),
(8, 'Hài hước', 'Haihuoc'),
(8, 'Hành động', 'Hanhdong'),
(8, 'Phưu lưu', 'Phuuluu'),
(9, 'Gia đình', 'Giadinh'),
(9, 'Hoạt hình', 'Hoathinh'),
(9, 'Phưu lưu', 'Phuuluu'),
(9, 'Tình cảm', 'Tinhcam'),
(10, 'Chiến tranh', 'Chientranh'),
(10, 'Hài hước', 'Haihuoc'),
(10, 'Hành động', 'Hanhdong'),
(11, 'Hành động', 'Hanhdong'),
(11, 'Kinh dị', 'Kinhdi'),
(11, 'Tội phạm', 'Toipham'),
(12, 'Hài hước', 'Haihuoc'),
(12, 'Hành động', 'Hanhdong'),
(12, 'Võ thuật', 'Vothuat'),
(13, 'Hành động', 'Hanhdong'),
(13, 'Phưu lưu', 'Phuuluu'),
(13, 'Tình cảm', 'Tinhcam'),
(14, 'Hành động', 'Hanhdong'),
(14, 'Phưu lưu', 'Phuuluu'),
(14, 'Viễn tưởng', 'Vientuong'),
(15, 'Hành động', 'Hanhdong'),
(15, 'Phưu lưu', 'Phuuluu'),
(15, 'Viễn tưởng', 'Vientuong'),
(16, 'Hành động', 'Hanhdong'),
(16, 'Kinh dị', 'Kinhdi'),
(16, 'Viễn tưởng', 'Vientuong'),
(17, 'Hành động', 'Hanhdong'),
(17, 'Phưu lưu', 'Phuuluu'),
(17, 'Viễn tưởng', 'Vientuong'),
(18, 'Âm nhạc', 'Amnhac'),
(18, 'Gia đình', 'Giadinh'),
(18, 'Hài hước', 'Haihuoc'),
(18, 'Hoạt hình', 'Hoathinh'),
(19, 'Hành động', 'Hanhdong'),
(19, 'Phưu lưu', 'Phuuluu'),
(19, 'Viễn tưởng', 'Vientuong'),
(20, 'Lịch sử­', 'Lichsu­'),
(20, 'Tâm lý', 'Tamly'),
(20, 'Tội phạm', 'Toipham'),
(21, 'Hành động', 'Hanhdong'),
(21, 'Phưu lưu', 'Phuuluu'),
(21, 'Viễn tưởng', 'Vientuong'),
(22, 'Âm nhạc', 'Amnhac'),
(22, 'Viễn tưởng', 'Vientuong'),
(23, 'Hành động', 'Hanhdong'),
(23, 'Phưu lưu', 'Phuuluu'),
(23, 'Viễn tưởng', 'Vientuong'),
(24, 'Gia đình', 'Giadinh'),
(24, 'Hài hước', 'Haihuoc'),
(24, 'Hoạt hình', 'Hoathinh'),
(24, 'Phưu lưu', 'Phuuluu'),
(25, 'Hành động', 'Hanhdong'),
(25, 'Viễn tưởng', 'Vientuong'),
(25, 'Phưu lưu', 'Phuuluu'),
(26, 'Hành động', 'Hanhdong'),
(26, 'Võ thuật', 'Vothuat'),
(26, 'Tâm lý', 'Tamly'),
(27, 'Kinh dị', 'Kinhdi'),
(27, 'Viễn tưởng', 'Vientuong'),
(28, 'Hành động', 'Hanhdong'),
(28, 'Phưu lưu', 'Phuuluu'),
(28, 'Viễn tưởng', 'Vientuong'),
(29, 'Hành động', 'Hanhdong'),
(29, 'Hài hước', 'Haihuoc'),
(30, 'Phưu lưu', 'Phuuluu'),
(30, 'Viễn tưởng', 'Vientuong'),
(31, 'Hành động', 'Hanhdong'),
(31, 'Phưu lưu', 'Phuuluu'),
(31, 'Viễn tưởng', 'Vientuong'),
(33, 'Hành động', 'Hanhdong'),
(33, 'Phưu lưu', 'Phuuluu'),
(33, 'Tội phạm', 'Toipham'),
(34, 'Hoạt hình', 'Hoathinh'),
(34, 'Phưu lưu', 'Phuuluu'),
(34, 'Hài hước', 'Haihuoc'),
(34, 'Gia đình', 'Giadinh'),
(35, 'Hoạt hình', 'Hoathinh'),
(35, 'Phưu lưu', 'Phuuluu'),
(35, 'Hài hước', 'Haihuoc'),
(35, 'Gia đình', 'Giadinh'),
(36, 'Hoạt hình', 'Hoathinh'),
(36, 'Phưu lưu', 'Phuuluu'),
(36, 'Hành động', 'Hanhdong'),
(36, 'Gia đình', 'Giadinh'),
(30, 'Hành động', 'Hanhdong'),
(37, 'Hoạt hình', 'Hoathinh'),
(37, 'Hài hước', 'Haihuoc'),
(37, 'Gia đình', 'Giadinh'),
(37, 'Viễn tưởng', 'Vientuong'),
(38, 'Hành động', 'Hanhdong'),
(38, 'Phưu lưu', 'Phuuluu'),
(38, 'Tâm lý', 'Tamly'),
(39, 'Phưu lưu', 'Phuuluu'),
(39, 'Viễn tưởng', 'Vientuong'),
(39, 'Bí ẩn', 'Bian'),
(40, 'Hành động', 'Hanhdong'),
(40, 'Hài hước', 'Haihuoc'),
(40, 'Kinh dị', 'Kinhdi'),
(41, 'Hành động', 'Hanhdong'),
(41, 'Tội phạm', 'Toipham'),
(41, 'Tâm lý', 'Tamly'),
(41, 'Bí ấn', 'Bian'),
(42, 'Phưu lưu', 'Phuuluu'),
(42, 'Gia đình', 'Giadinh'),
(42, 'Huyền bí', 'Huyenbi'),
(43, 'Phưu lưu', 'Phuuluu'),
(43, 'Viễn tưởng', 'Vientuong'),
(43, 'Hành động', 'Hanhdong'),
(44, 'Phưu lưu', 'Phuuluu'),
(44, 'Viễn tưởng', 'Vientuong'),
(44, 'Hành động', 'Hanhdong'),
(45, 'Hành động', 'Hanhdong'),
(45, 'Hài hước', 'Haihuoc'),
(46, 'Hành động', 'Hanhdong'),
(46, 'Võ thuật', 'Vothuat'),
(46, 'Tâm lý', 'Tamly'),
(46, 'Thể thao', 'Thethao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `mail`, `ho_ten`, `gioitinh`, `ngaysinh`, `pass`, `avatar`) VALUES
(1, 'minhtuan9922@gmail.com', 'Minh Tuấn', 'Nam', '1992-03-10', '123', 'avatar-lmht-10.jpg'),
(2, 'mai@gmail.com', 'Mai', 'Nữ', '1994-05-01', '123', 'avatar.png'),
(3, 'abc@gmail.com', '', '', '', '123', 'avatar.png'),
(4, 'thanhtrung111333@gmail.com', '', '', '', '113113', 'avatar.png'),
(5, 'tinnguyen1803@gmail.com', '', '', '', '123123', 'avatar.png'),
(6, 'tung@yahoo.com', '', '', '', '123', 'avatar.png'),
(7, 'thanh@gmail.com', '', '', '', '123456', 'avatar.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `daodien`
--
ALTER TABLE `daodien`
  ADD PRIMARY KEY (`idphim`,`tendaodien`);

--
-- Chỉ mục cho bảng `dienvien`
--
ALTER TABLE `dienvien`
  ADD PRIMARY KEY (`idphim`,`tendienvien`);

--
-- Chỉ mục cho bảng `kichban`
--
ALTER TABLE `kichban`
  ADD PRIMARY KEY (`idphim`,`kichban`);

--
-- Chỉ mục cho bảng `luotxem`
--
ALTER TABLE `luotxem`
  ADD PRIMARY KEY (`ngay`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`idphim`);

--
-- Chỉ mục cho bảng `phimbo`
--
ALTER TABLE `phimbo`
  ADD PRIMARY KEY (`idphim`,`tap`);

--
-- Chỉ mục cho bảng `phimyeuthich`
--
ALTER TABLE `phimyeuthich`
  ADD PRIMARY KEY (`id`,`idphim`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`stt`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idphim`,`tentheloai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `idphim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
