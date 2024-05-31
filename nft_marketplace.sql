-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 02:47 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nft_marketplace`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`CartID`, `CreatedAt`, `UserID`) VALUES
(1, '2023-10-16 02:30:13', 6),
(2, '0000-00-00 00:00:00', 4),
(3, '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cartnft`
--

CREATE TABLE `cartnft` (
  `CreatedAt` datetime NOT NULL,
  `CartID` int(11) NOT NULL,
  `NFTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cartnft`
--

INSERT INTO `cartnft` (`CreatedAt`, `CartID`, `NFTID`) VALUES
('2023-10-16 02:43:10', 1, 15),
('0000-00-00 00:00:00', 2, 13),
('0000-00-00 00:00:00', 2, 17),
('0000-00-00 00:00:00', 3, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoriy`
--

CREATE TABLE `categoriy` (
  `CategoriyID` int(2) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `OrderCT` int(2) NOT NULL,
  `Home` enum('show','hide') NOT NULL DEFAULT 'show',
  `Description` varchar(2000) DEFAULT NULL,
  `URLImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categoriy`
--

INSERT INTO `categoriy` (`CategoriyID`, `Name`, `OrderCT`, `Home`, `Description`, `URLImage`) VALUES
(1, 'Art', 1, 'show', NULL, '1.webp'),
(2, 'Gaming', 2, 'show', NULL, '2.webp'),
(3, 'Memberships', 3, 'show', NULL, '3.webp'),
(4, 'FPTs', 4, 'show', NULL, '4.webp'),
(5, 'Photography', 5, 'show', NULL, '5.webp'),
(6, 'Music', 6, 'show', NULL, '6.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collections`
--

CREATE TABLE `collections` (
  `CollectionID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(2000) DEFAULT NULL,
  `LogoImage` varchar(255) DEFAULT NULL,
  `FeaturedImage` varchar(255) DEFAULT NULL,
  `BannerImage` varchar(255) DEFAULT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CategoryID` int(11) NOT NULL,
  `CreatorID` int(11) NOT NULL,
  `Floor` int(11) DEFAULT NULL,
  `Views` int(11) NOT NULL DEFAULT 0,
  `Volume` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collections`
--

INSERT INTO `collections` (`CollectionID`, `Name`, `Description`, `LogoImage`, `FeaturedImage`, `BannerImage`, `CreatedAt`, `UpdatedAt`, `CategoryID`, `CreatorID`, `Floor`, `Views`, `Volume`) VALUES
(3, '0N1 FORCE', NULL, 'lg1.jpg', 'ft1.jpg', 'bn1.jpg', '2023-10-12 14:00:16', '2023-10-18 09:44:35', 1, 3, NULL, 0, 0),
(4, 'ART BLOCKS', NULL, 'lg2.jpg', 'ft2.jpg', 'bn2.jpg', '2023-10-12 15:51:03', '2023-10-18 09:47:22', 2, 2, 234452, 0, 0),
(5, 'AXIE INFINITY', NULL, 'lg3.jpg', 'ft3.jpg', 'bn3.jpg', '2023-10-12 15:51:03', '2023-10-18 09:47:22', 6, 4, 334021, 0, 0),
(8, 'AZUKI', 'Developed by Los Angeles-based startup Chiru Labs, Azuki is a 10,000 character collection that features anime-styled NFTs. They are most commonly used as profile picture NFTs, or PFP NFTs, which helps a user establish how they want to be represented in Web3. Additionally, acquisition of an Azuki renders access to “The Garden,” an exclusive virtual collective where artists, builders and metaverse-minded folks can collaborate on Web3 projects.', 'ft4.jpg', 'ft4.jpg', 'bn4.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 4, 5, NULL, 0, 0),
(9, 'BEANZ', 'Another Chiru Labs creation, Beanz is a 20,000 piece collection of digital art that depicts small, bean-like characters that serve as sidekicks to Azuki characters. Each contains a set of unique features, spanning background color, clothing, eyes, face, headgear, shoe and type. For example, red “Toshi” types are known for their rebellious nature, according to online publication Beanztalk.io. ', 'lg5.jpg', 'ft5.jpg', 'bn5.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 3, 2, NULL, 0, 0),
(10, 'BORED APE YACHT CLUB', 'Bored Ape Yacht Club is an NFT collection of 10,000 vibrant, funky primates that serve as an NFT PFP and passkey to exclusive benefits. It holds a total sales volume of $2.7 billion, according to NFT data aggregator CryptoSlam. The most expensive simian, golden ape #3749, sporting a sailor cap and laser-beamed eyes, sold for $2.9 million two years ago. Online crypto publication Decrypt has dubbed Bored Ape as the “Celebrity NFT of Choice” as more collectibles land in the hands of holders such as Madonna, Shaq, Eminem and Snoop Dogg.', 'lg6.jpg', 'ft6.jpg', 'bn6.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 1, 2, NULL, 0, 0),
(11, 'COOL CATS', 'Cool Cats started as a sole blue, hand-drawn cartoon feline that blew up into a 9,999 piece NFT collection. NFT holders belong to a virtual community named “Cooltopia,” and each collectible is ranked on a “coolness scale,” ranging from cool (least points, more common) to exotic (most points, rarer). There are just 66 super rare and totally unique tokens with no shared traits.', 'lg7.jpg', 'ft7.jpg', 'bn7.jpg', '2023-10-12 15:57:00', '2023-10-18 16:49:49', 1, 3, 214852, 0, 0),
(12, 'CRYPTOADZ', 'Another art NFT, CrypToadz is a 6,969-piece project made up of pixelated amphibious avatars with unique traits. The anonymous indie artist and creator of CrypToadz, Gremplin, is also behind the “infinite” generative art project, Nouns DAO. Both NFT collections have been placed in public domain, all copyrights waived. As cryptocurrency exchange Kraken explained it, this “allows anyone to build off of these NFTs, potentially developing new products and ecosystems based on the original artwork.”', 'lg8.jpg', 'ft8.jpg', 'bn8.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 1, 4, NULL, 0, 0),
(13, 'CRYPTOPUNKS', 'Recognized as one of the first NFT collections, CryptoPunks is a 24x24 pixel-art image project that set the template many NFT outfits still follow today. CryptoPunks were created by a duo of Canadian software technologists out of New York City-based Larva Labs in 2017 and acquired by Bored Ape Yacht Club creator YugaLabs in 2021. It has sold over $2 billion in lifetime sales. As NFT PFPs, they predominantly serve as a digital status symbol.', 'lg9.jpg', 'ft9.jpg', 'bn9.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 6, 4, NULL, 0, 0),
(14, 'CLONEX', 'Brought to the metaverse by Nike and digital fashion and collectible company RTFKT, CloneX NFT is a collection of 20,000 three-dimensional avatars that share eight different DNA types. Their makeup is formulated from human, alien, reptile, robot, undead, angel, demon or Murakami, a special skin that was added following a collaboration with Japanese pop artist Takashi Murakami. Users are encouraged to personalize their characters with digital wearables pulled from the platform’s Clone inventory, like streetwear or socks. RTFKT has been known to drop “phygital” fashion collections, where new items unlocked virtually become available in real life.', 'lg10.jpg', 'ft10.jpg', 'bn10.jpg', '2023-10-12 15:57:00', '2023-10-18 09:47:22', 1, 5, 173457, 0, 0),
(15, 'DOODLES', 'Two Dapper Labs and CryptoKitties alumni, Evan Keast and Jordan Castro, teamed with pastel-palette illustrator Scott Martin, more popularly known by his alias Burnt Toast, to create Doodles. This NFT PFP collection consists of 10,000 whimsical tokens featuring sherbet-colored cartoons of cats, humans, pickles, flowers and aliens. As society members, token holders can vote for experiences and activations paid for by the Doodles Community Treasury.', 'lg11.jpg', 'ft11.jpg', 'bn11.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 2, 5, NULL, 0, 0),
(16, 'LOOT', 'Marketed for the Dungeons and Dragons crowd, Loot is a text-based NFT collection. In it, there are 8,000 tokens simply featuring white serif font on a black background. These randomized lists specify gear suited for gameplay in a fantasy world, like dragonskin gloves and a “bronze ring of fury.” Token holders are left to their own devices, as stats, images and other functionality “are intentionally omitted for others to interpret.”', 'lg12.jpg', 'ft12.jpg', 'bn12.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 1, 5, NULL, 0, 0),
(17, 'MEEBITS', 'The same creators behind CryptoPunks dropped another algorithmically generated avatar project with Meebits. Except this time, the 20,000 collection is intentionally designed in low-poly and voxel 3D graphics — the kind made famous by Minecraft — for the purpose of exploring virtual worlds, games and virtual reality.', 'lg13.jpg', 'ft13.jpg', 'bn13.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 2, 4, NULL, 0, 0),
(18, 'MOONBIRDS', 'Moonbirds is a 10,000-piece collection of pixelated owl NFT PFPs, each with their own unique set of randomized traits. The longer a token holder stakes, or locks up, an asset without listing or selling it — known as “nesting” in Moonbird terms — the more rewards they reap. Moonbirds co-founder Kevin Rose is also the co-founder and CEO of the PROOF Collective, an exclusive group of 1,000 NFT collectors and artists. Moonbirds holders may dip into projects from both pools.', 'lg14.jpg', 'ft15.jpg', 'bn16.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 1, 2, NULL, 0, 0),
(19, 'MUTANT APE YACHT CLUB', NULL, 'lg17.jpg', 'ft17.jpg', 'bn17.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 5, 2, NULL, 0, 0),
(20, 'NBA TOP SHOT', NULL, 'lg16.jpg', 'ft16.jpg', 'bn16.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 3, 2, NULL, 0, 0),
(21, 'OTHERDEED', '', 'lg18.jpg', 'ft18.jpg', 'bn18.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 3, 4, NULL, 0, 0),
(22, 'PUDGY PENGUINS', NULL, 'lg19.jpg', 'ft19.jpg', 'bn19.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 4, 3, NULL, 0, 0),
(23, 'SORARE 25', NULL, 'lg25.gif', 'ft25.gif', 'bn25.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 4, 5, NULL, 0, 0),
(24, 'WORLD OF WOMEN', NULL, 'lg23.jpg', 'ft23.jpg', 'bn23.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 6, 3, NULL, 0, 0),
(25, 'SEBASTAIN 2020', NULL, 'lg20.jpg', 'ft20.jpg', 'bn20.jpg', '2023-10-12 15:57:00', '2023-10-18 09:44:35', 1, 4, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `Content` text NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` int(11) NOT NULL,
  `NFTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`CommentID`, `Content`, `CreatedAt`, `UpdatedAt`, `UserID`, `NFTID`) VALUES
(1, 'Non-fungible tokens (NFTs) dường như đang tạo nên một cơn sốt dữ dội trong năm nay. Những vật phẩm kỹ thuật số từ nghệ thuật, âm nhạc đến bánh taco và giấy vệ sinh đang được rao bán với giá hàng triệu đô la như vụ “Bong bóng hoa tulip Hà Lan” hồi thế kỷ 17.', '2023-10-19 21:36:27', '2023-10-19 19:38:41', 6, 37),
(2, 'Mặc dù chỉ mới xuất hiện hồi năm 2014, NFTs hiện đang được nhiều người biết đến bởi chúng đang ngày một trở thành cách phổ biến để mua bán các tác phẩm nghệ thuật số. Một khoản tiền khổng lồ 174 triệu USD đã được chi cho NFT từ tháng 11/2017.', '2023-10-19 21:36:27', '2023-10-19 19:38:41', 6, 37),
(3, 'Bất cứ ai cũng có thể xem những hình ảnh riêng lẻ hay thậm chí những bộ ảnh trên mạng miễn phí. Vậy tại sao người ta sẵn sàng chi hàng triệu đô la cho những thứ mà họ dễ dàng sở hữu bằng cách tải xuống hoặc chụp màn hình?', '2023-10-19 21:36:27', '2023-10-19 19:38:41', 3, 37),
(4, 'NFT thì khác. Mỗi NFT có một chữ ký kỹ thuật số do đó NFT không thể thay thế được (non-fungible), nghĩa là không thể trao đổi một NFT với một NFT khác. Ví dụ: NBA Top Shot (Bộ sưu tập các thẻ dưới dạng NFT, mỗi NFT là video clip ngắn khoảnh khắc trong lịch sử bóng rổ) không thể hoán đổi với tác phẩm số EVERYDAYS đơn giản bởi vì cả hai đều là NFT. (Tương tự, video clip của NBA Top Shot này cũng không thể trao đổi với một video clip của NBA Top Shot khác).', '2023-10-19 21:36:27', '2023-10-19 19:38:41', 5, 37),
(5, 'Thuật ngữ “không thể thay thế (non-fungible)” đề cập đến bản chất không thể thay thế được của một mặt hàng. Không thể đổi trực tiếp một mặt hàng không thể thay thế cho một mặt hàng khác có cùng giá trị vì cả hai mặt hàng đều có những đặc điểm khác nhau. Điều này có nghĩa là các mặt hàng không thể thay thế không thể được giao dịch trên quy mô tiêu chuẩn vì giá trị của chúng bắt nguồn từ tính độc đáo và giá trị chủ quan mà người mua đặt vào chúng.', '2023-10-19 22:05:49', '2023-10-19 20:06:18', 4, 37),
(24, 'esvseadasf', '2023-10-20 11:53:57', '2023-10-20 09:54:29', 6, 37),
(29, 'hoathanvu', '2023-10-20 17:20:35', '2023-10-20 10:20:35', 2, 14),
(43, 'Gió nhẹ sang tôi ngỡ trời Xuân, Nắng hừng lên tôi ngỡ đông Tàn, Ai có ngờ đâu đông vẫn còn đây Xuân chưa về', '2023-10-20 18:01:16', '2023-10-20 11:01:16', 2, 37),
(45, 'aizzz đẹp vl', '2023-10-20 18:04:21', '2023-10-20 11:04:21', 2, 36),
(46, 'Gió mang Đông về giờ em ở đâu, vướng trên môi nụ hồng của aiiiiii ', '2023-10-20 18:05:49', '2023-10-20 11:05:49', 2, 36),
(47, 'đừng về đâyyyyy', '2023-10-20 18:06:37', '2023-10-20 11:06:37', 2, 23),
(48, 'hoa công tử ', '2023-10-20 18:06:56', '2023-10-20 11:06:56', 2, 14),
(49, 'meeeeee', '2023-10-20 18:08:05', '2023-10-20 11:08:05', 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listings`
--

CREATE TABLE `listings` (
  `ListingID` int(11) NOT NULL,
  `Status` enum('active','sold') NOT NULL DEFAULT 'active',
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NFTID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IsListed` enum('listed','unlisted') NOT NULL DEFAULT 'listed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `listings`
--

INSERT INTO `listings` (`ListingID`, `Status`, `CreatedAt`, `UpdatedAt`, `NFTID`, `UserID`, `IsListed`) VALUES
(23, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 13, 4, 'listed'),
(24, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 14, 4, 'listed'),
(25, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 15, 4, 'listed'),
(26, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 16, 4, 'listed'),
(27, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 17, 4, 'listed'),
(28, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 18, 4, 'listed'),
(29, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 19, 4, 'listed'),
(30, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 20, 4, 'listed'),
(31, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 21, 4, 'listed'),
(32, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 36, 5, 'listed'),
(33, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 37, 5, 'listed'),
(34, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 38, 5, 'listed'),
(35, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 2, 5, 'listed'),
(36, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 3, 5, 'listed'),
(37, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 4, 5, 'listed'),
(38, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 22, 3, 'listed'),
(39, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 23, 3, 'listed'),
(40, 'active', '2023-10-13 00:56:59', '2023-10-16 09:42:56', 24, 3, 'listed');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nfts`
--

CREATE TABLE `nfts` (
  `NFTID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `ImageURL` varchar(255) NOT NULL,
  `FileURL` varchar(255) DEFAULT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CodeNFTs` varchar(11000) NOT NULL,
  `OwnerID` int(11) NOT NULL,
  `CollectionID` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nfts`
--

INSERT INTO `nfts` (`NFTID`, `Name`, `Description`, `ImageURL`, `FileURL`, `CreatedAt`, `UpdatedAt`, `CodeNFTs`, `OwnerID`, `CollectionID`, `views`) VALUES
(2, 'CLONEX #1011', NULL, 'l (1).jpg', NULL, '2023-10-12 17:40:48', '2023-10-12 15:46:38', '121020238971', 5, 14, 0),
(3, 'CLONEX #1012', NULL, 'l (2).jpg', NULL, '2023-10-12 17:40:48', '2023-10-12 15:46:38', '121020238972', 5, 14, 0),
(4, 'CLONEX #1013', NULL, 'l (3).jpg', NULL, '2023-10-12 17:40:48', '2023-10-12 15:46:38', '121020238973', 5, 14, 0),
(5, 'CLONEX #1014', NULL, 'l (4).jpg', NULL, '2023-10-12 17:40:48', '2023-10-12 15:46:38', '121020238974', 5, 14, 0),
(6, 'SEBASTAN #4541', NULL, 'w (2).jpg', NULL, '2023-10-12 17:46:55', '2023-10-12 15:50:03', '121020238975', 4, 25, 0),
(7, 'SEBASTAN #4542', NULL, 'w (3).jpg', NULL, '2023-10-12 17:46:55', '2023-10-12 15:50:03', '121020238976', 4, 25, 0),
(8, 'CRYPTOADZ #X25', NULL, 'k (1).jpg', NULL, '2023-10-12 17:50:09', '2023-10-12 15:54:06', '1210202389711', 4, 12, 0),
(9, 'CRYPTOADZ #X26', NULL, 'k (2).jpg', NULL, '2023-10-12 17:50:09', '2023-10-12 15:54:06', '1210202389710', 4, 12, 0),
(10, 'CRYPTOADZ #X27', NULL, 'k (3).jpg', NULL, '2023-10-12 17:50:09', '2023-10-12 15:54:06', '121020238979', 4, 12, 0),
(11, 'CRYPTOADZ #X28', NULL, 'k (4).jpg', NULL, '2023-10-12 17:50:09', '2023-10-12 15:54:06', '121020238978', 4, 12, 0),
(12, 'CRYPTOADZ #X29', NULL, 'k (5).jpg', NULL, '2023-10-12 17:50:09', '2023-10-12 15:54:06', '121020238977', 4, 12, 0),
(13, 'ART BLOCKS #X01', NULL, 'v (9).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389720', 2, 4, 0),
(14, 'ART BLOCKS #X02', NULL, 'v (8).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389719', 2, 4, 0),
(15, 'ART BLOCKS #X03', NULL, 'v (7).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389718', 2, 4, 0),
(16, 'ART BLOCKS #X04', NULL, 'v (6).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389717', 2, 4, 0),
(17, 'ART BLOCKS #X05', NULL, 'v (5).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389716', 2, 4, 0),
(18, 'ART BLOCKS #X06', NULL, 'v (4).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389715', 2, 4, 0),
(19, 'ART BLOCKS #X07', NULL, 'v (3).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389714', 2, 4, 0),
(20, 'ART BLOCKS #X08', NULL, 'v (2).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389713', 2, 4, 0),
(21, 'ART BLOCKS #X09', NULL, 'v (1).jpg', NULL, '2023-10-12 17:54:34', '2023-10-12 15:59:47', '1210202389712', 2, 4, 0),
(22, 'COOL CATS #C89', NULL, 'x (1).jpg', NULL, '2023-10-12 18:01:14', '2023-10-12 16:04:24', '1210202389725', 3, 11, 0),
(23, 'COOL CATS #C90', NULL, 'x (2).jpg', NULL, '2023-10-12 18:01:14', '2023-10-12 16:04:24', '1210202389724', 3, 11, 0),
(24, 'COOL CATS #C91', NULL, 'x (3).jpg', NULL, '2023-10-12 18:01:14', '2023-10-12 16:04:24', '1210202389723', 3, 11, 0),
(25, 'COOL CATS #C92', NULL, 'x (4).jpg', NULL, '2023-10-12 18:01:14', '2023-10-12 16:04:24', '1210202389722', 3, 11, 0),
(26, 'COOL CATS #C93', NULL, 'x (5).jpg', NULL, '2023-10-12 18:01:14', '2023-10-12 16:04:24', '1210202389721', 3, 11, 0),
(27, 'MUTANT APE YACHT CLUB #Y78', NULL, 'g (2).jpg', NULL, '2023-10-12 18:06:24', '2023-10-12 16:08:59', '1210202389728', 2, 19, 0),
(28, 'MUTANT APE YACHT CLUB #Y79', NULL, 'g (3).jpg', NULL, '2023-10-12 18:06:24', '2023-10-12 16:08:59', '1210202389727', 2, 19, 0),
(29, 'MUTANT APE YACHT CLUB #Y80', NULL, 'g (4).jpg', NULL, '2023-10-12 18:06:24', '2023-10-12 16:08:59', '1210202389726', 2, 19, 0),
(30, 'NBA TOP SHOT #478', NULL, 'e (5).jpg', NULL, '2023-10-12 18:09:02', '2023-10-12 16:11:48', '1210202389729', 2, 20, 0),
(31, 'NBA TOP SHOT #479', NULL, 'e (4).jpg', NULL, '2023-10-12 18:09:02', '2023-10-12 16:11:48', '1210202389730', 2, 20, 0),
(32, 'SORARE 25 #5557', NULL, 'c (3).jpg', NULL, '2023-10-12 18:11:03', '2023-10-12 16:13:27', '1210202389731', 5, 23, 0),
(33, 'SORARE 25 #5558', NULL, 'c (1).jpg', NULL, '2023-10-12 18:11:03', '2023-10-12 16:13:27', '1210202389732', 5, 23, 0),
(34, 'MOONBIRDS #187', NULL, 'p (3).jpg', NULL, '2023-10-12 18:13:56', '2023-10-12 16:15:14', '1210202389734', 2, 18, 0),
(35, 'MOONBIRDS #188', NULL, 'p (1).jpg', NULL, '2023-10-12 18:13:56', '2023-10-12 16:15:14', '1210202389733', 2, 18, 0),
(36, 'AXIE INFINITY #IRELIA1', NULL, 'ir (1).jpg', NULL, '2023-10-12 18:16:06', '2023-10-12 16:18:09', '1210202389736', 4, 5, 0),
(37, 'AXIE INFINITY #IRELIA2', NULL, 'ir (2).jpg', NULL, '2023-10-12 18:16:06', '2023-10-12 16:18:09', '1210202389737', 4, 5, 0),
(38, 'AXIE INFINITY #IRELIA3', NULL, 'ir (3).jpg', NULL, '2023-10-12 18:16:06', '2023-10-12 16:18:09', '1210202389738', 4, 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `NotificationID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Price` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `NFTID` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UserID` int(11) NOT NULL,
  `CodeO` varchar(11) NOT NULL,
  `Status` enum('unpaid','paid','cancelled') NOT NULL DEFAULT 'paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `prices`
--

CREATE TABLE `prices` (
  `PriceID` int(11) NOT NULL,
  `ListedPrice` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `NFTID` int(11) NOT NULL,
  `ListingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `prices`
--

INSERT INTO `prices` (`PriceID`, `ListedPrice`, `CreatedAt`, `NFTID`, `ListingID`) VALUES
(1, 245000, '2023-10-13 00:46:59', 20, 30),
(2, 373000, '2023-10-13 00:23:26', 13, 23),
(3, 400000, '2023-10-13 00:23:26', 14, 24),
(4, 457000, '2023-10-13 00:23:26', 15, 25),
(5, 400020, '2023-10-13 00:23:26', 16, 26),
(6, 974455, '2023-10-13 00:23:26', 17, 27),
(7, 1414010, '2023-10-13 00:23:26', 18, 28),
(8, 234452, '2023-10-13 00:23:26', 19, 29),
(10, 987324, '2023-10-13 00:23:26', 36, 32),
(11, 631124, '2023-10-13 00:23:26', 37, 33),
(12, 334021, '2023-10-13 00:23:26', 38, 34),
(13, 438321, '2023-10-13 00:23:26', 2, 35),
(14, 173457, '2023-10-13 00:23:26', 3, 36),
(15, 673214, '2023-10-13 00:23:26', 4, 37),
(16, 0, '2023-10-13 00:23:26', 5, 0),
(17, 325257, '2023-10-13 00:23:26', 22, 38),
(18, 419369, '2023-10-13 00:23:26', 23, 39),
(19, 214852, '2023-10-13 00:23:26', 24, 40),
(20, 0, '2023-10-13 00:23:26', 25, 0),
(21, 0, '2023-10-13 00:23:26', 26, 0),
(22, 0, '2023-10-13 00:23:26', 8, 0),
(23, 0, '2023-10-13 00:23:26', 9, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `responses`
--

CREATE TABLE `responses` (
  `Message` text NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `TicketID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ResponsesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supportticket`
--

CREATE TABLE `supportticket` (
  `TicketID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `IssueDescription` varchar(2000) NOT NULL,
  `Status` enum('New','In','Progress','Resolved','Closed','Cancelled') NOT NULL DEFAULT 'New',
  `CreatedAt` datetime NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `BankName` varchar(50) DEFAULT NULL,
  `BankAccountNumber` varchar(20) DEFAULT NULL,
  `AvatarImage` varchar(255) DEFAULT 'main.jpg',
  `CoverImage` varchar(255) DEFAULT NULL,
  `Role` enum('admin','user') NOT NULL DEFAULT 'user',
  `Bio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `username`, `Password`, `Email`, `BankName`, `BankAccountNumber`, `AvatarImage`, `CoverImage`, `Role`, `Bio`) VALUES
(1, 'johanfpt', '123456', 'thuyethoatiensinh@gmail.com', NULL, NULL, 'johanfpt.jpg', NULL, 'admin', NULL),
(2, 'phamtan', '123456', 'tanpvps28473@gmail.com', NULL, NULL, 'phamtan.jpg', NULL, 'user', NULL),
(3, 'clubs15', '123456', 'clubs15@gmail.com', NULL, NULL, 'h11.jpg', NULL, 'user', NULL),
(4, 'spades78', '123456', 'spades78@gmail.com', NULL, NULL, 'h13.jpg', NULL, 'user', NULL),
(5, 'heas56v', '1234567', 'heas56v@gmail.com', NULL, NULL, 'h14.jpg', NULL, 'user', NULL),
(6, 'JoeBien', '123', 'fpt145@gmail.com', NULL, NULL, 'h12.jpg', NULL, 'user', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `FK_CART_USER` (`UserID`);

--
-- Chỉ mục cho bảng `cartnft`
--
ALTER TABLE `cartnft`
  ADD PRIMARY KEY (`CartID`,`NFTID`),
  ADD KEY `FK_CARTNFT_NFT` (`NFTID`),
  ADD KEY `CartID` (`CartID`);

--
-- Chỉ mục cho bảng `categoriy`
--
ALTER TABLE `categoriy`
  ADD PRIMARY KEY (`CategoriyID`);

--
-- Chỉ mục cho bảng `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`CollectionID`),
  ADD KEY `FK_COLLECTION_CATEGORY` (`CategoryID`),
  ADD KEY `FK_COLLECTION_USER` (`CreatorID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `FK_COMMENT_USER` (`UserID`),
  ADD KEY `FK_COMMENT_NFT` (`NFTID`);

--
-- Chỉ mục cho bảng `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`ListingID`),
  ADD KEY `FK_LISTING_NFT` (`NFTID`),
  ADD KEY `FK_LISTING_USER` (`UserID`);

--
-- Chỉ mục cho bảng `nfts`
--
ALTER TABLE `nfts`
  ADD PRIMARY KEY (`NFTID`),
  ADD KEY `FK_NFT_USER` (`OwnerID`),
  ADD KEY `FK_NFT_COLLECTION` (`CollectionID`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NotificationID`),
  ADD KEY `FK_NOTIFICATION_USER` (`UserID`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`NFTID`,`OrderID`) USING BTREE,
  ADD KEY `FK_OD_ODER` (`OrderID`),
  ADD KEY `NFTID` (`NFTID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`);

--
-- Chỉ mục cho bảng `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`PriceID`),
  ADD KEY `FK_PRICE_NFT` (`NFTID`),
  ADD KEY `FK_PRICE_LISTING` (`ListingID`);

--
-- Chỉ mục cho bảng `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`ResponsesID`),
  ADD UNIQUE KEY `FK_RES'-USER` (`UserID`),
  ADD UNIQUE KEY `FK_RES-TICKET` (`TicketID`);

--
-- Chỉ mục cho bảng `supportticket`
--
ALTER TABLE `supportticket`
  ADD PRIMARY KEY (`TicketID`),
  ADD KEY `FK_TICKET_USER` (`UserID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categoriy`
--
ALTER TABLE `categoriy`
  MODIFY `CategoriyID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `collections`
--
ALTER TABLE `collections`
  MODIFY `CollectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `listings`
--
ALTER TABLE `listings`
  MODIFY `ListingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `nfts`
--
ALTER TABLE `nfts`
  MODIFY `NFTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `prices`
--
ALTER TABLE `prices`
  MODIFY `PriceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `responses`
--
ALTER TABLE `responses`
  MODIFY `ResponsesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `supportticket`
--
ALTER TABLE `supportticket`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CART_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `cartnft`
--
ALTER TABLE `cartnft`
  ADD CONSTRAINT `FK_CARTNFT_CART` FOREIGN KEY (`CartID`) REFERENCES `cart` (`CartID`),
  ADD CONSTRAINT `FK_CARTNFT_NFT` FOREIGN KEY (`NFTID`) REFERENCES `nfts` (`NFTID`);

--
-- Các ràng buộc cho bảng `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `FK_COLLECTION_CATEGORY` FOREIGN KEY (`CategoryID`) REFERENCES `categoriy` (`CategoriyID`),
  ADD CONSTRAINT `FK_COLLECTION_USER` FOREIGN KEY (`CreatorID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_COMMENT_NFT` FOREIGN KEY (`NFTID`) REFERENCES `nfts` (`NFTID`),
  ADD CONSTRAINT `FK_COMMENT_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `FK_LISTING_NFT` FOREIGN KEY (`NFTID`) REFERENCES `nfts` (`NFTID`),
  ADD CONSTRAINT `FK_LISTING_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `nfts`
--
ALTER TABLE `nfts`
  ADD CONSTRAINT `FK_NFT_COLLECTION` FOREIGN KEY (`CollectionID`) REFERENCES `collections` (`CollectionID`),
  ADD CONSTRAINT `FK_NFT_USER` FOREIGN KEY (`OwnerID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FK_NOTIFICATION_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_OD_NFT` FOREIGN KEY (`NFTID`) REFERENCES `nfts` (`NFTID`),
  ADD CONSTRAINT `FK_OD_ODER` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_ORDER_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `FK_PRICE_LISTING` FOREIGN KEY (`ListingID`) REFERENCES `listings` (`ListingID`),
  ADD CONSTRAINT `FK_PRICE_NFT` FOREIGN KEY (`NFTID`) REFERENCES `nfts` (`NFTID`);

--
-- Các ràng buộc cho bảng `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `FK_RES_TICKET` FOREIGN KEY (`TicketID`) REFERENCES `supportticket` (`TicketID`),
  ADD CONSTRAINT `FK_RES_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `supportticket`
--
ALTER TABLE `supportticket`
  ADD CONSTRAINT `FK_TICKET_USER` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
