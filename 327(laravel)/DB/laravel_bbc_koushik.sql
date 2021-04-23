-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 03:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_bbc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'tamim', 'password', 'tamim@gmail.com', 1111999, NULL, NULL),
(2, 'hasan', 'password', 'hasan@gmail.com', 90030012, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bbc_users`
--

CREATE TABLE `bbc_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bbc_users`
--

INSERT INTO `bbc_users` (`id`, `user_name`, `password`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'john', 'password', 'john@gmail.com', 1111999, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houseads`
--

CREATE TABLE `houseads` (
  `title` text NOT NULL,
  `cost` text NOT NULL,
  `area` text NOT NULL,
  `pic` text NOT NULL,
  `bed` text NOT NULL,
  `bath` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `houseads`
--

INSERT INTO `houseads` (`title`, `cost`, `area`, `pic`, `bed`, `bath`, `size`) VALUES
('1155 Square Feet Apartment Is Available To Rent At Banasree, Block D', '20,500', 'Block D, Banasree, Dhaka', '<source type=\"image/webp\" srcset=\"https://images-cdn.bproperty.com/thumbnails/1113981-400x300.webp\"/><img role=\"presentation\" alt=\"3 Bedroom Flat for Rent in Banasree, Dhaka - 1155 Square Feet Apartment Is Available To Rent At Banasree, Block D\" title=\"3 Bedroom Flat for Rent in Banasree, Dhaka - 1155 Square Feet Apartment Is Available To Rent At Banasree, Block D\" aria-label=\"Listing photo\" src=\"https://images-cdn.bproperty.com/thumbnails/1113981-400x300.jpeg\" class=\"_6dc484ea\"/>', '3', '3', '1,155 sqft '),
('Aftab Nagar Is Offering You A 1200 Sq Ft Flat For Rent', '20,000', 'Block C, Aftab Nagar, Dhaka', '<source type=\"image/webp\" srcset=\"https://images-cdn.bproperty.com/thumbnails/1113984-400x300.webp\"/><img role=\"presentation\" alt=\"3 Bedroom Flat for Rent in Aftab Nagar, Dhaka - Aftab Nagar Is Offering You A 1200 Sq Ft Flat For Rent\" title=\"3 Bedroom Flat for Rent in Aftab Nagar, Dhaka - Aftab Nagar Is Offering You A 1200 Sq Ft Flat For Rent\" aria-label=\"Listing photo\" src=\"https://images-cdn.bproperty.com/thumbnails/1113984-400x300.jpeg\" class=\"_6dc484ea\"/>', '3', '2', '1,200 sqft '),
('750 Square Feet Apartment Is Available For Rent At Mohammadpur, Tajmahal Road', '10,000', 'Tajmahal Road, Mohammadpur, Dhaka', '<source type=\"image/webp\" srcset=\"https://images-cdn.bproperty.com/thumbnails/1113986-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Mohammadpur, Dhaka - 750 Square Feet Apartment Is Available For Rent At Mohammadpur, Tajmahal Road\" title=\"2 Bedroom Flat for Rent in Mohammadpur, Dhaka - 750 Square Feet Apartment Is Available For Rent At Mohammadpur, Tajmahal Road\" aria-label=\"Listing photo\" src=\"https://images-cdn.bproperty.com/thumbnails/1113986-400x300.jpeg\" class=\"_6dc484ea\"/>', '2', '1', '750 sqft '),
('Grab This Flat Of 750 Sq Ft Up For Rent At Battola', '8,500', 'Sheikhdi, Jatra Bari, Dhaka', '<source type=\"image/webp\" srcset=\"https://images-cdn.bproperty.com/thumbnails/1113980-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Jatra Bari, Dhaka - Grab This Flat Of 750 Sq Ft Up For Rent At Battola\" title=\"2 Bedroom Apartment for Rent in Jatra Bari, Dhaka - Grab This Flat Of 750 Sq Ft Up For Rent At Battola\" aria-label=\"Listing photo\" src=\"https://images-cdn.bproperty.com/thumbnails/1113980-400x300.jpeg\" class=\"_6dc484ea\"/>', '2', '2', '750 sqft '),
('Jatra Bari, Sheikhdi Is Offering You A 650 Sq Ft Apartment For Rent', '7,500', 'Sheikhdi, Jatra Bari, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113960-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113960-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in jatra bari, dhaka - sheikhdi is offering you a 650 sq ft title =2 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113960-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Jatra Bari, Dhaka - Jatra Bari, Sheikhdi Is Offering You A 650 Sq Ft Apartment For Rent\" title=\"2 Bedroom Apartment for Rent in Jatra Bari, Dhaka - Jatra Bari, Sheikhdi Is Offering You A 650 Sq Ft Apartment For Rent\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113960-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '650 sqft '),
('Mohammadpur Is Offering You A 720 Square Feet Apartment Up For Rent', '14,000', 'aziz Moholla, Mohammadpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113962-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113962-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom flat for rent in mohammadpur, dhaka - mohammadpur is offering you a 720 square feet apartment up title =2 aria-label                                 =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113962-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Mohammadpur, Dhaka - Mohammadpur Is Offering You A 720 Square Feet Apartment Up For Rent\" title=\"2 Bedroom Flat for Rent in Mohammadpur, Dhaka - Mohammadpur Is Offering You A 720 Square Feet Apartment Up For Rent\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113962-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '720 sqft '),
('900 Square Feet Apartment Is Up For Rent At Shahid Fazlul Haq Road', '12,500', 'Shahid Fazlul Haq Road, Joar Sahara, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113958-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113958-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in joar sahara, dhaka - 900 square feet is up at shahid fazlul haq road title =2 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113958-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Joar Sahara, Dhaka - 900 Square Feet Apartment Is Up For Rent At Shahid Fazlul Haq Road\" title=\"2 Bedroom Apartment for Rent in Joar Sahara, Dhaka - 900 Square Feet Apartment Is Up For Rent At Shahid Fazlul Haq Road\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113958-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '900 sqft '),
('In Sheikhdi A Standard Flat Is For Rent Very Next To Al Hera Jame Masjid', '9,000', 'Sheikhdi, Jatra Bari, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113953-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113953-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom flat for rent in jatra bari, dhaka - sheikhdi a standard is very next to al hera jame masjid title =2 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113953-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Jatra Bari, Dhaka - In Sheikhdi A Standard Flat Is For Rent Very Next To Al Hera Jame Masjid\" title=\"2 Bedroom Flat for Rent in Jatra Bari, Dhaka - In Sheikhdi A Standard Flat Is For Rent Very Next To Al Hera Jame Masjid\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113953-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '650 sqft '),
('1050 SQ FT residential apartment is prepared to get rented at Luxmibazar', '18,000', 'Luxmibazar, Sutrapur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113945-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113945-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in sutrapur, dhaka - 1050 sq ft residential is prepared to get rented at luxmibazar title                                 =2 aria-label=Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113945-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Sutrapur, Dhaka - 1050 SQ FT residential apartment is prepared to get rented at Luxmibazar\" title=\"2 Bedroom Apartment for Rent in Sutrapur, Dhaka - 1050 SQ FT residential apartment is prepared to get rented at Luxmibazar\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113945-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '1,050 sqft '),
('800 SQ FT residential apartment is prepared to get rented at Muradpur, Kadamtali', '7,000', 'Kadamtali, Shyampur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113936-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113936-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in shyampur, dhaka - 800 sq ft residential is prepared to get rented at muradpur, kadamtali title                                 =2 aria-label=Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113936-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Shyampur, Dhaka - 800 SQ FT residential apartment is prepared to get rented at Muradpur, Kadamtali\" title=\"2 Bedroom Apartment for Rent in Shyampur, Dhaka - 800 SQ FT residential apartment is prepared to get rented at Muradpur, Kadamtali\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113936-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '1', '800 sqft '),
('800 SQ FT residential apartment is prepared to get rented at Shyampur', '8,000', 'Jurain, Shyampur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113919-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113919-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in shyampur, dhaka - 800 sq ft residential is prepared to get rented at shyampur title                                 =2 aria-label=Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113919-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Shyampur, Dhaka - 800 SQ FT residential apartment is prepared to get rented at Shyampur\" title=\"2 Bedroom Apartment for Rent in Shyampur, Dhaka - 800 SQ FT residential apartment is prepared to get rented at Shyampur\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113919-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '1', '800 sqft '),
('800 SQ FT residential apartment is prepared to get rented at Jurain', '6,500', 'Jurain, Shyampur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113918-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113918-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in shyampur, dhaka - 800 sq ft residential is prepared to get rented at jurain title                                 =2 aria-label=Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113918-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Shyampur, Dhaka - 800 SQ FT residential apartment is prepared to get rented at Jurain\" title=\"2 Bedroom Apartment for Rent in Shyampur, Dhaka - 800 SQ FT residential apartment is prepared to get rented at Jurain\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113918-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '1', '800 sqft '),
('1800 SQ FT residential apartment is prepared to get rented at Mohammadpur', '35,000', 'Tajmahal Road, Mohammadpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113917-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113917-400x300.jpeg                                 class=_6dc484ea                                 alt=3 bedroom flat for rent in mohammadpur, dhaka - 1800 sq ft residential apartment is prepared to get rented at mohammadpur title=3 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113917-400x300.webp\"/><img role=\"presentation\" alt=\"3 Bedroom Flat for Rent in Mohammadpur, Dhaka - 1800 SQ FT residential apartment is prepared to get rented at Mohammadpur\" title=\"3 Bedroom Flat for Rent in Mohammadpur, Dhaka - 1800 SQ FT residential apartment is prepared to get rented at Mohammadpur\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113917-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '3', '4', '1,800 sqft '),
('800 SQ FT beautiful ready flat is now in Muradpur', '6,500', 'Kadamtali, Shyampur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113916-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113916-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom flat for rent in shyampur, dhaka - 800 sq ft beautiful ready is now muradpur title =2 aria-label                                 =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113916-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Shyampur, Dhaka - 800 SQ FT beautiful ready flat is now in Muradpur\" title=\"2 Bedroom Flat for Rent in Shyampur, Dhaka - 800 SQ FT beautiful ready flat is now in Muradpur\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113916-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '1', '800 sqft '),
('1150 SQ FT beautiful ready flat is now in Mirpur 6', '25,000', 'Section 6, Mirpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113928-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113928-400x300.jpeg                                 class=_6dc484ea                                 alt=3 bedroom apartment for rent in mirpur, dhaka - 1150 sq ft beautiful ready flat is now mirpur 6 title                                 =3 aria-label=Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113928-400x300.webp\"/><img role=\"presentation\" alt=\"3 Bedroom Apartment for Rent in Mirpur, Dhaka - 1150 SQ FT beautiful ready flat is now in Mirpur 6\" title=\"3 Bedroom Apartment for Rent in Mirpur, Dhaka - 1150 SQ FT beautiful ready flat is now in Mirpur 6\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113928-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '3', '2', '1,150 sqft '),
('700 SQ FT beautiful ready flat is now in Middle Paikpara', '10,000', 'Middle Paikpara, Mirpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113946-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113946-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in mirpur, dhaka - 700 sq ft beautiful ready flat is now middle paikpara title                                 =2 aria-label=Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113946-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Mirpur, Dhaka - 700 SQ FT beautiful ready flat is now in Middle Paikpara\" title=\"2 Bedroom Apartment for Rent in Mirpur, Dhaka - 700 SQ FT beautiful ready flat is now in Middle Paikpara\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113946-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '700 sqft '),
('850 SQ FT beautiful ready flat is now in Pirerbag', '11,500', 'Pirerbag, Mirpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113921-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113921-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom flat for rent in mirpur, dhaka - 850 sq ft beautiful ready is now pirerbag title =2 aria-label                                 =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113921-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Mirpur, Dhaka - 850 SQ FT beautiful ready flat is now in Pirerbag\" title=\"2 Bedroom Flat for Rent in Mirpur, Dhaka - 850 SQ FT beautiful ready flat is now in Pirerbag\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113921-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '850 sqft '),
('Get this 600 SQ FT residential flat vacant for rent at Mirpur, Middle Monipur', '8,500', 'Middle Monipur, Mirpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113904-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113904-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom apartment for rent in mirpur, dhaka - get this 600 sq ft residential flat vacant at middle monipur title =2 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113904-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Apartment for Rent in Mirpur, Dhaka - Get this 600 SQ FT residential flat vacant for rent at Mirpur, Middle Monipur\" title=\"2 Bedroom Apartment for Rent in Mirpur, Dhaka - Get this 600 SQ FT residential flat vacant for rent at Mirpur, Middle Monipur\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113904-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '1', '600 sqft '),
('Get this 600 SQ FT residential flat vacant for rent at Middle Monipur, Mirpur', '8,500', 'Middle Monipur, Mirpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113897-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113897-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom flat for rent in mirpur, dhaka - get this 600 sq ft residential vacant at middle monipur, mirpur title =2 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113897-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Mirpur, Dhaka - Get this 600 SQ FT residential flat vacant for rent at Middle Monipur, Mirpur\" title=\"2 Bedroom Flat for Rent in Mirpur, Dhaka - Get this 600 SQ FT residential flat vacant for rent at Middle Monipur, Mirpur\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113897-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '1', '600 sqft '),
('Get this 800 SQ FT residential flat vacant for rent at Mohammadpur, Road No 6', '15,000', 'Mohammadi Housing LTD., Mohammadpur, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113883-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113883-400x300.jpeg                                 class=_6dc484ea                                 alt=2 bedroom flat for rent in mohammadpur, dhaka - get this 800 sq ft residential vacant at road no 6 title =2 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113883-400x300.webp\"/><img role=\"presentation\" alt=\"2 Bedroom Flat for Rent in Mohammadpur, Dhaka - Get this 800 SQ FT residential flat vacant for rent at Mohammadpur, Road No 6\" title=\"2 Bedroom Flat for Rent in Mohammadpur, Dhaka - Get this 800 SQ FT residential flat vacant for rent at Mohammadpur, Road No 6\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113883-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '2', '2', '800 sqft '),
('Get this 1150 SQ FT residential flat vacant for rent at Adabor, Road No 7', '15,000', 'Mansurabad Housing Society, Adabor, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113891-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113891-400x300.jpeg                                 class=_6dc484ea                                 alt=3 bedroom flat for rent in adabor, dhaka - get this 1150 sq ft residential vacant at road no 7 title =3 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113891-400x300.webp\"/><img role=\"presentation\" alt=\"3 Bedroom Flat for Rent in Adabor, Dhaka - Get this 1150 SQ FT residential flat vacant for rent at Adabor, Road No 7\" title=\"3 Bedroom Flat for Rent in Adabor, Dhaka - Get this 1150 SQ FT residential flat vacant for rent at Adabor, Road No 7\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113891-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '3', '3', '1,150 sqft '),
('Get this 1250 SQ FT residential flat vacant for rent at Adabor, Mansurabad Housing Society', '17,000', 'Mansurabad Housing Society, Adabor, Dhaka', '<noscript>                             <source type=\"image/webp\" srcset=https://images-cdn.bproperty.com/thumbnails/1113884-400x300.webp />                             <img                                 role=\"presentation\"                                 src=https://images-cdn.bproperty.com/thumbnails/1113884-400x300.jpeg                                 class=_6dc484ea                                 alt=3 bedroom apartment for rent in adabor, dhaka - get this 1250 sq ft residential flat vacant at mansurabad housing society title =3 aria-label =Fallback listing photo                             />                         </noscript><source type=\"image/webp\" data-srcset=\"https://images-cdn.bproperty.com/thumbnails/1113884-400x300.webp\"/><img role=\"presentation\" alt=\"3 Bedroom Apartment for Rent in Adabor, Dhaka - Get this 1250 SQ FT residential flat vacant for rent at Adabor, Mansurabad Housing Society\" title=\"3 Bedroom Apartment for Rent in Adabor, Dhaka - Get this 1250 SQ FT residential flat vacant for rent at Adabor, Mansurabad Housing Society\" aria-label=\"Listing photo\" data-src=\"https://images-cdn.bproperty.com/thumbnails/1113884-400x300.jpeg\" class=\"_6dc484ea lazy\"/>', '3', '3', '1,250 sqft ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_01_05_164107_create_posts_table', 1),
(8, '2021_01_07_160720_create_admins_table', 2),
(9, '2021_01_07_161308_create_bbc_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tamim Hasan', 'tamimhasaneate@gmail.com', NULL, '$2y$10$im16Ywnw3ekPTYU1YpEU8OqrrWadCigVQY3U/zACz9SNDgyg4ac9m', NULL, '2021-01-07 13:51:51', '2021-01-07 13:51:51'),
(6, 'hasan', 'tamimucan@gmail.com', NULL, '789987789t', NULL, NULL, NULL),
(7, 'tamim', 'k@gmail.com', NULL, '$2y$10$/FcAGvh/lBusnLYXL3zD9ef.Vn9nFfJ7ChgrNBU0z3csy8QOXLKGO', NULL, '2021-01-08 13:20:20', '2021-01-08 13:20:20'),
(8, 'tamim', 't@gmail.com', NULL, '$2y$10$lwAEwe8/lMVoo0mbGRb9kuWVvUHd/y8cOMM0Lk7JfzVZWWgC4iyIG', NULL, '2021-01-08 14:24:53', '2021-01-08 14:24:53'),
(9, 'fuad hasan', 'f@gmail.com', NULL, '$2y$10$.prsGilbpRM/su7m6dCiyeqQoZLlsMOxk4ewXBleVpx0vxi8pCONm', NULL, '2021-01-08 15:56:23', '2021-01-08 15:56:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbc_users`
--
ALTER TABLE `bbc_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bbc_users`
--
ALTER TABLE `bbc_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
