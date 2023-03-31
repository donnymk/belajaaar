-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 23, 2013 at 11:14 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `tutorial`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `A_id` int(3) NOT NULL auto_increment,
  `Usn` varchar(10) NOT NULL,
  `Pwd` varchar(32) NOT NULL,
  `Grub` varchar(20) NOT NULL,
  PRIMARY KEY  (`A_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin1', 'admin1', 'admin1');
INSERT INTO `admin` VALUES (2, 'admin2', 'admin2', 'admin2');
