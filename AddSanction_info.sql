

CREATE TABLE `announcements` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `duration` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO announcements VALUES("14","maglilinis tayo","uytofuiygh","14","Active","2022-12-22");
INSERT INTO announcements VALUES("15","adssdsadsadsad","fsdfdsfdsfds","1","Inactive","2022-12-20");
INSERT INTO announcements VALUES("16","adssdsadsadsad","asdsdsad","14","Active","2022-12-22");
INSERT INTO announcements VALUES("17","asdasd","sadssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss","7","Active","2022-12-22");



CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_number` int(50) NOT NULL,
  `cancel_reason` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO appointment_history VALUES("81","74","bully","Completed","2022-12-16","2022-12-16 15:21:56","2000245727","");
INSERT INTO appointment_history VALUES("82","74","bully","Completed","2022-12-16","2022-12-16 15:21:56","2000245727","");
INSERT INTO appointment_history VALUES("83","75","asd","Cancelled","2022-12-19","2022-12-20 01:23:53","0","");
INSERT INTO appointment_history VALUES("84","75","asdd","Cancelled","2022-12-19","2022-12-20 01:36:44","0","");
INSERT INTO appointment_history VALUES("85","78","","Cancelled","2022-12-20","2022-12-20 17:46:24","0","");
INSERT INTO appointment_history VALUES("86","79","","Cancelled","0000-00-00","2022-12-21 23:28:42","0","");
INSERT INTO appointment_history VALUES("87","80","","Cancelled","2022-12-21","2022-12-21 23:34:27","2000245727","");
INSERT INTO appointment_history VALUES("88","81","","Cancelled","2022-12-21","2022-12-22 00:04:26","2000245727","");
INSERT INTO appointment_history VALUES("89","82","","Cancelled","2022-12-21","2022-12-22 00:04:29","2000257868","");
INSERT INTO appointment_history VALUES("90","83","","Cancelled","2022-12-22","2022-12-22 16:13:53","2000245727","");
INSERT INTO appointment_history VALUES("91","84","","Cancelled","2022-12-22","2022-12-22 21:40:16","2000232823","fdsfsd");
INSERT INTO appointment_history VALUES("92","85","","Cancelled","2022-12-22","2022-12-22 23:30:34","2000232823","fgdfg");
INSERT INTO appointment_history VALUES("93","86","","Cancelled","2022-12-22","2022-12-22 23:30:37","2000245727","fdgfdgdfg");
INSERT INTO appointment_history VALUES("94","87","","Cancelled","2022-12-22","2022-12-22 23:30:40","2000197721","dfgdfgfdg");
INSERT INTO appointment_history VALUES("95","88","","Cancelled","2022-12-22","2022-12-22 23:30:44","2000155605","fgdfgdfgdf");
INSERT INTO appointment_history VALUES("96","89","","Cancelled","2022-12-22","2022-12-22 23:30:47","2000273259","dfgdfgdfgfd");
INSERT INTO appointment_history VALUES("97","93","","Cancelled","2022-12-22","2022-12-22 23:58:09","2000155605","sadfgbhn");
INSERT INTO appointment_history VALUES("98","90","","Cancelled","2022-12-22","2022-12-22 23:58:13","2000273259","asdgfsdafsf");
INSERT INTO appointment_history VALUES("99","91","","Cancelled","2022-12-22","2022-12-22 23:58:16","2000232823","fdfsdfsdfa");
INSERT INTO appointment_history VALUES("100","92","","Cancelled","2022-12-22","2022-12-22 23:58:21","2000232816","asfdfsfga");
INSERT INTO appointment_history VALUES("101","94","","Cancelled","2022-12-22","2022-12-23 00:03:43","2000273259","4ytsrg");
INSERT INTO appointment_history VALUES("102","95","","Cancelled","2022-12-22","2022-12-23 00:09:56","2000266053","ythg");
INSERT INTO appointment_history VALUES("103","96","","Cancelled","2022-12-22","2022-12-23 00:09:57","2000232823","");
INSERT INTO appointment_history VALUES("104","97","","Cancelled","2022-12-22","2022-12-23 00:09:59","2000273259","");
INSERT INTO appointment_history VALUES("105","98","","Cancelled","2022-12-22","2022-12-23 00:22:52","2000257868","");
INSERT INTO appointment_history VALUES("106","99","","Cancelled","2022-12-22","2022-12-23 00:22:54","2000273259","");
INSERT INTO appointment_history VALUES("107","100","","Cancelled","2022-12-22","2022-12-23 00:22:56","2000245727","");
INSERT INTO appointment_history VALUES("108","101","","Cancelled","2022-12-22","2022-12-23 00:22:58","2000432424","");
INSERT INTO appointment_history VALUES("109","102","","Cancelled","2022-12-22","2022-12-23 00:22:59","2000266053","");
INSERT INTO appointment_history VALUES("110","103","","Cancelled","2022-12-22","2022-12-23 00:29:43","2000200086","");
INSERT INTO appointment_history VALUES("111","104","","Cancelled","2022-12-22","2022-12-23 00:42:35","2000232823","");
INSERT INTO appointment_history VALUES("112","105","","Cancelled","2022-12-22","2022-12-23 00:43:51","2000232823","");
INSERT INTO appointment_history VALUES("113","106","","Cancelled","2022-12-22","2022-12-23 00:46:40","2000232823","");
INSERT INTO appointment_history VALUES("114","107","","Cancelled","2022-12-22","2022-12-23 00:48:41","2000253423","ADSSAD");
INSERT INTO appointment_history VALUES("115","108","","Cancelled","2022-12-22","2022-12-23 01:28:02","2000232823","");
INSERT INTO appointment_history VALUES("116","110","","Cancelled","2022-12-22","2022-12-23 02:50:14","2000232823","");
INSERT INTO appointment_history VALUES("117","110","","Cancelled","2022-12-23","2022-12-23 15:09:23","2000232823","");
INSERT INTO appointment_history VALUES("118","110","","Cancelled","2022-12-23","2022-12-23 15:10:57","2000232823","");
INSERT INTO appointment_history VALUES("119","109","","Cancelled","2022-12-23","2022-12-23 15:41:12","2000245727","");
INSERT INTO appointment_history VALUES("120","110","","Cancelled","2022-12-23","2022-12-23 15:41:14","2000232823","");
INSERT INTO appointment_history VALUES("121","111","","Cancelled","2022-12-23","2022-12-23 16:25:30","2000232823","");
INSERT INTO appointment_history VALUES("122","111","","Cancelled","2022-12-23","2022-12-23 16:37:11","2000232823","");
INSERT INTO appointment_history VALUES("123","112","","Cancelled","2022-12-23","2022-12-23 16:37:13","2000197721","");



CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timeslot` varchar(255) NOT NULL,
  `timeslot_end` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `user_type` varchar(150) NOT NULL,
  `ref_id` int(20) DEFAULT 0,
  `id_number` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `appointment_type` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL,
  `app_status` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `meeting_link` varchar(255) NOT NULL,
  `app_by` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO appointments VALUES("113","9:00 am","10:00 am","2022-12-23","Student","0","2000232823","Marqueyza Acub","ASDSDSDA","Walk-in","ASDSADSD","In Review","2022-12-23 16:40:11","","0");



CREATE TABLE `articles` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ARTICLECODE` varchar(15) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PICTURE` text NOT NULL,
  `DURATION` varchar(15) NOT NULL,
  `ART_STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO articles VALUES("2","221128-160540-4","Growth Mindset","There???s a fine line between instilling discipline through toughening acts and a fear of failure by punishing infractions. Unfortunately, most people can attest that this line has been blurred and that the notion of failure, while common, is often viewed not just as a negative but something to be ashamed of. In some cultures, around the world, it is treated as an extremely terrible thing. Children are taught to not just fear failure, but actively avoid it.","uploads/dec1.png","December","Active");
INSERT INTO articles VALUES("3","221128-222651-4","Diversity, Equity, Inclusion","Diversity exists when you go above and beyond being aware of differences or accepting differences to the point of actively including people who are different from you. Diversity is learning from our differences to make the whole community a better place. It is a combination of our differences that shape our view of the world, our perspective and our approach.","uploads/dec2.png","December","Active");
INSERT INTO articles VALUES("4","221129-144937-9","Self Care","have a significant impact on how we view ourselves.  Sometimes we look in the mirror and don???t like who we see.  It is important to remember that our reflection is two dimensional, we do not see the whole picture of ourselves, yet we are the ones who judge most harshly. The following article provides 3 strategies to help you strengthen your self-esteem.","uploads/dec3.jpg","December","Active");
INSERT INTO articles VALUES("6","221214-145526-1","article a","abecd","uploads/article-1.png","December","Active");
INSERT INTO articles VALUES("7","221222-012816-7","dadawd","dwadwadwa","uploads/article-1.png","January","Active");



CREATE TABLE `autobackupdetails` (
  `UseAuto` int(10) NOT NULL DEFAULT 0,
  `Days` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO autobackupdetails VALUES("1","7");



CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `section` varchar(150) NOT NULL,
  `app_id` int(20) NOT NULL,
  `session_date` date NOT NULL,
  `feedback_date` date NOT NULL,
  `action_taken` varchar(300) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO feedback VALUES("1","hannah marie perez","BSIT","3","1","2022-10-18","2022-10-18","Feedback Action Taken1","Feedback Remarks1","2022-10-18 23:06:29");
INSERT INTO feedback VALUES("2","Josephine Bracken","BSIT","4","2","2022-10-20","2022-10-18","Feedback Action Taken2","Feedback Remarks2","2022-10-18 23:08:51");
INSERT INTO feedback VALUES("3","juan dela cruz","BSIT","4","3","2022-10-21","2022-10-18","Feedback Action Taken3","Feedback Remarks3","2022-10-18 23:26:21");
INSERT INTO feedback VALUES("4","jessica bernardo","BSIT","4","4","2022-10-19","2022-10-18","Feedback Action Taken4","Feedback Remarks4","2022-10-18 23:55:06");



CREATE TABLE `inventory` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `SY` varchar(30) NOT NULL,
  `SEM` varchar(30) NOT NULL,
  `QUARTER` varchar(30) NOT NULL,
  `FIRST` varchar(60) NOT NULL,
  `MIDDLE` varchar(60) NOT NULL,
  `LAST` varchar(60) NOT NULL,
  `STUDNUMBER` int(10) NOT NULL,
  `YEARLEVEL` varchar(30) NOT NULL,
  `PROGRAMSECTION` varchar(30) NOT NULL,
  `NICKNAME` varchar(60) NOT NULL,
  `NATIONALITY` varchar(60) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `RELIGION` varchar(60) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `MOBILE` varchar(30) NOT NULL,
  `EMAIL1` varchar(60) NOT NULL,
  `EMAIL2` varchar(60) NOT NULL,
  `HOMENUMBER` varchar(30) NOT NULL,
  `PRESENT` text NOT NULL,
  `PERMANENT` text NOT NULL,
  `PROVINCIAL` text NOT NULL,
  `MARRIED_FIRST` varchar(60) NOT NULL,
  `MARRIED_LAST` varchar(60) NOT NULL,
  `SPOUSE_AGE` int(3) NOT NULL,
  `WORK_STATUS` varchar(10) NOT NULL,
  `OCCUPATION` varchar(200) NOT NULL,
  `MARRIED_CONTACT` varchar(30) NOT NULL,
  `GUARDIAN_STATUS` varchar(30) NOT NULL,
  `GUARDIAN_NAME` varchar(100) NOT NULL,
  `GUARDIAN_ADDRESS` text NOT NULL,
  `GUARDIAN_CONTACT` varchar(30) NOT NULL,
  `GUARDIAN_EMERGENCY` varchar(30) NOT NULL,
  `GUARDIAN_OTHERCONTACT` varchar(30) NOT NULL,
  `GUARDIAN_FATHERNAME` varchar(100) NOT NULL,
  `GUARDIAN_FATHERAGE` int(3) NOT NULL,
  `GUARDIAN_FATHERDOB` varchar(30) NOT NULL,
  `GUARDIAN_FATHERNATIONALITY` varchar(60) NOT NULL,
  `GUARDIAN_FATHERRELIGION` varchar(100) NOT NULL,
  `GUARDIAN_FATHEREDUCATIONAL` varchar(100) NOT NULL,
  `GUARDIAN_FATHEROCCUPATION` varchar(100) NOT NULL,
  `GUARDIAN_FATHERCONTACT` varchar(30) NOT NULL,
  `GUARDIAN_FATHERCOMPANY` varchar(100) NOT NULL,
  `GUARDIAN_FATHERINCOME` double(10,2) NOT NULL,
  `GUARDIAN_MOTHERNAME` varchar(100) NOT NULL,
  `GUARDIAN_MOTHERAGE` int(3) NOT NULL,
  `GUARDIAN_MOTHERDOB` varchar(30) NOT NULL,
  `GUARDIAN_MOTHERNATIONALITY` varchar(60) NOT NULL,
  `GUARDIAN_MOTHERRELIGION` varchar(100) NOT NULL,
  `GUARDIAN_MOTHEREDUCATIONAL` varchar(100) NOT NULL,
  `GUARDIAN_MOTHEROCCUPATION` varchar(100) NOT NULL,
  `GUARDIAN_MOTHERCONTACT` varchar(30) NOT NULL,
  `GUARDIAN_MOTHERCOMPANY` varchar(100) NOT NULL,
  `GUARDIAN_MOTHERINCOME` double(10,2) NOT NULL,
  `SO1_NAME` varchar(100) NOT NULL,
  `SO1_AGE` int(3) NOT NULL,
  `SO1_GENDER` varchar(15) NOT NULL,
  `SO1_PROGOCCUP` varchar(100) NOT NULL,
  `SO1_SCHCOMP` varchar(100) NOT NULL,
  `SO2_NAME` varchar(100) NOT NULL,
  `SO2_AGE` int(3) NOT NULL,
  `SO2_GENDER` varchar(15) NOT NULL,
  `SO2_PROGOCCUP` varchar(100) NOT NULL,
  `SO2_SCHCOMP` varchar(100) NOT NULL,
  `SO3_NAME` varchar(100) NOT NULL,
  `SO3_AGE` int(3) NOT NULL,
  `SO3_GENDER` varchar(15) NOT NULL,
  `SO3_PROGOCCUP` varchar(100) NOT NULL,
  `SO3_SCHCOMP` varchar(100) NOT NULL,
  `SPORTS` varchar(100) NOT NULL,
  `HOBBIES` varchar(100) NOT NULL,
  `TALENTS` varchar(100) NOT NULL,
  `SOCIO` varchar(100) NOT NULL,
  `SCHOOL_ORGANIZATION` text NOT NULL,
  `WE1_COMPNAME` varchar(100) NOT NULL,
  `WE1_POSITION` varchar(100) NOT NULL,
  `WE1_DURATION` varchar(100) NOT NULL,
  `WE1_JOB` text NOT NULL,
  `WE2_COMPNAME` varchar(100) NOT NULL,
  `WE2_POSITION` varchar(100) NOT NULL,
  `WE2_DURATION` varchar(100) NOT NULL,
  `WE2_JOB` text NOT NULL,
  `WE3_COMPNAME` varchar(100) NOT NULL,
  `WE3_POSITION` varchar(100) NOT NULL,
  `WE3_DURATION` varchar(100) NOT NULL,
  `WE3_JOB` text NOT NULL,
  `DATE_INCREATED` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO inventory VALUES("20","2022","1st semester","","Rowella","Mallari","Bangeles","2000245727","","HUMMS","row","FILIPINO","Female","SINGLE","Roman Catholic","2022-12-14","09121312331","bangeles.245727@angeles.sti.edu.ph","","","","","","","","0","No","","","Married","","","","","","","0","","","","","","","","0.00","","0","","","","","","","","0.00","","0","","","","","0","","","","","0","","","","","","","","","","","","","","","","","","","","","2022-12-16");
INSERT INTO inventory VALUES("21","2022","1st semester","","Marqueyza","Butic","Acub","2000232823","","MAWD","abby","FILIPINO","","SINGLE","Roman Catholic","2022-12-07","09217112098","acub.232823@angeles.sti.edu.ph","","","","","","","","0","No","","","Married","","","","","","","0","","","","","","","","0.00","","0","","","","","","","","0.00","","0","","","","","0","","","","","0","","","","","","","","","","","","","","","","","","","","","2022-12-16");



CREATE TABLE `logs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user` varchar(300) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `action_made` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=690 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logs VALUES("1","Admin","1001","Logged in the system","2022-12-12 07:17:06");
INSERT INTO logs VALUES("2","Admin","1001","Logged out","2022-12-12 07:17:30");
INSERT INTO logs VALUES("3","Staff","2000022222","Logged in the system","2022-12-12 07:17:37");
INSERT INTO logs VALUES("4","Staff","2000022222","Logged out","2022-12-12 07:18:14");
INSERT INTO logs VALUES("5","Admin","1001","Logged in the system","2022-12-12 07:18:19");
INSERT INTO logs VALUES("6","Admin","1001","Logged in the system","2022-12-12 07:24:09");
INSERT INTO logs VALUES("7","Admin","1001","Logged out","2022-12-12 07:24:27");
INSERT INTO logs VALUES("8","Student","2000011111","Logged in the system","2022-12-12 07:24:33");
INSERT INTO logs VALUES("9","Student","2000011111","Logged out","2022-12-12 07:25:53");
INSERT INTO logs VALUES("10","Admin","1001","Logged in the system","2022-12-12 07:25:59");
INSERT INTO logs VALUES("11","Admin","1001","Logged out","2022-12-12 07:27:11");
INSERT INTO logs VALUES("12","Student","2000245727","Logged in the system","2022-12-12 07:27:28");
INSERT INTO logs VALUES("13","Student","2000245727","Logged out","2022-12-12 07:32:15");
INSERT INTO logs VALUES("14","Student","2000011111","Logged in the system","2022-12-12 07:32:24");
INSERT INTO logs VALUES("15","Student","2000011111","Logged out","2022-12-12 07:32:30");
INSERT INTO logs VALUES("16","Student","2000011111","Logged in the system","2022-12-12 08:17:17");
INSERT INTO logs VALUES("17","Student","2000011111","Logged out","2022-12-12 08:18:26");
INSERT INTO logs VALUES("18","Admin","1001","Logged in the system","2022-12-12 08:18:34");
INSERT INTO logs VALUES("19","Admin","1001","Logged out","2022-12-12 09:03:00");
INSERT INTO logs VALUES("20","Student","2000011111","Logged in the system","2022-12-12 09:03:06");
INSERT INTO logs VALUES("21","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:03:25");
INSERT INTO logs VALUES("22","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:04:23");
INSERT INTO logs VALUES("23","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:05:13");
INSERT INTO logs VALUES("24","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:34:54");
INSERT INTO logs VALUES("25","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:36:02");
INSERT INTO logs VALUES("26","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:37:53");
INSERT INTO logs VALUES("27","Student","2000011111","Logged out","2022-12-12 09:40:01");
INSERT INTO logs VALUES("28","Staff","2000022222","Logged in the system","2022-12-12 09:40:06");
INSERT INTO logs VALUES("29","Staff","2000022222","Added a new referral [ ID = 196]   to the referral list","2022-12-12 09:40:25");
INSERT INTO logs VALUES("30","Staff","2000022222","Logged out","2022-12-12 09:44:43");
INSERT INTO logs VALUES("31","Admin","1001","Logged in the system","2022-12-12 09:44:48");
INSERT INTO logs VALUES("32","Admin","1001","Logged out","2022-12-12 10:03:32");
INSERT INTO logs VALUES("33","Admin","1001","Logged in the system","2022-12-12 10:03:46");
INSERT INTO logs VALUES("34","Admin","1001","Logged out","2022-12-12 10:07:06");
INSERT INTO logs VALUES("35","Admin","1001","Logged in the system","2022-12-12 10:10:36");
INSERT INTO logs VALUES("36","Admin","1001","Logged in the system","2022-12-12 12:38:47");
INSERT INTO logs VALUES("37","Admin","1001","Logged out","2022-12-12 12:40:18");
INSERT INTO logs VALUES("38","Student","2000011111","Logged in the system","2022-12-12 12:40:27");
INSERT INTO logs VALUES("39","Student","2000011111","Logged out","2022-12-12 13:36:20");
INSERT INTO logs VALUES("40","Admin","1001","Logged in the system","2022-12-12 13:36:27");
INSERT INTO logs VALUES("41","Admin","1001","Logged in the system","2022-12-12 17:26:09");
INSERT INTO logs VALUES("42","Admin","1001","Logged out","2022-12-12 17:50:06");
INSERT INTO logs VALUES("43","Student","2000011111","Logged in the system","2022-12-12 17:50:13");
INSERT INTO logs VALUES("44","Admin","1001","Logged in the system","2022-12-13 04:02:04");
INSERT INTO logs VALUES("45","Admin","1001","Logged out","2022-12-13 04:02:34");
INSERT INTO logs VALUES("46","Student","2000011111","Logged in the system","2022-12-13 04:02:41");
INSERT INTO logs VALUES("47","Student","2000011111","Logged out","2022-12-13 04:02:52");
INSERT INTO logs VALUES("48","Admin","1001","Logged in the system","2022-12-13 06:30:51");
INSERT INTO logs VALUES("49","Admin","1001","Logged out","2022-12-13 07:40:54");
INSERT INTO logs VALUES("50","Admin","1001","Logged in the system","2022-12-13 07:40:58");
INSERT INTO logs VALUES("51","Admin","1001","Logged in the system","2022-12-13 09:57:24");
INSERT INTO logs VALUES("52","Admin","1001","Logged out","2022-12-13 10:07:54");
INSERT INTO logs VALUES("53","Admin","1001","Logged in the system","2022-12-13 10:08:06");
INSERT INTO logs VALUES("54","Admin","1001","Logged out","2022-12-13 10:08:17");
INSERT INTO logs VALUES("55","Admin","1001","Logged in the system","2022-12-13 10:08:34");
INSERT INTO logs VALUES("56","Admin","1001","Logged out","2022-12-13 10:09:14");
INSERT INTO logs VALUES("57","Student","2000011111","Logged in the system","2022-12-13 10:09:30");
INSERT INTO logs VALUES("58","Student","2000011111","Logged out","2022-12-13 10:09:35");
INSERT INTO logs VALUES("59","Student","2000266053","Logged in the system","2022-12-13 10:11:09");
INSERT INTO logs VALUES("60","Student","2000266053","Logged out","2022-12-13 10:17:41");
INSERT INTO logs VALUES("61","Admin","1001","Logged in the system","2022-12-13 10:17:50");
INSERT INTO logs VALUES("62","Admin","1001","Logged out","2022-12-13 10:21:18");
INSERT INTO logs VALUES("63","Student","2000011111","Logged in the system","2022-12-13 10:21:27");
INSERT INTO logs VALUES("64","Student","2000011111","Added a new referral [ ID = 196]   to the referral list","2022-12-13 10:28:38");
INSERT INTO logs VALUES("65","Student","2000011111","Logged out","2022-12-13 10:28:46");
INSERT INTO logs VALUES("66","Admin","1001","Logged in the system","2022-12-13 10:28:52");
INSERT INTO logs VALUES("67","Admin","1001","Logged out","2022-12-13 10:48:47");
INSERT INTO logs VALUES("68","Admin","1001","Logged out","2022-12-13 10:49:18");
INSERT INTO logs VALUES("69","Admin","1001","Logged in the system","2022-12-13 12:52:21");
INSERT INTO logs VALUES("70","Student","2000011111","Logged in the system","2022-12-13 14:48:23");
INSERT INTO logs VALUES("71","Student","2000011111","Logged out","2022-12-13 16:06:35");
INSERT INTO logs VALUES("72","Student","2000011111","Logged in the system","2022-12-13 16:06:39");
INSERT INTO logs VALUES("73","","2000011111","Individual Inventory Added by [ ID = 2000011111] student test","2022-12-13 16:07:22");
INSERT INTO logs VALUES("74","","2000011111","Individual Inventory Added by [ ID = 2000011111] student test","2022-12-13 16:08:57");
INSERT INTO logs VALUES("75","Student","2000011111","Logged out","2022-12-13 16:09:09");
INSERT INTO logs VALUES("76","Admin","1001","Logged in the system","2022-12-13 16:10:01");
INSERT INTO logs VALUES("77","Admin","1001","Logged out","2022-12-13 16:11:42");
INSERT INTO logs VALUES("78","Admin","1001","Logged in the system","2022-12-13 16:11:51");
INSERT INTO logs VALUES("79","Admin","1001","Logged out","2022-12-13 16:11:54");
INSERT INTO logs VALUES("80","Admin","1001","Logged in the system","2022-12-13 16:12:36");
INSERT INTO logs VALUES("81","Admin","1001","Logged in the system","2022-12-13 16:13:59");
INSERT INTO logs VALUES("82","Admin","1001","Logged in the system","2022-12-13 16:14:12");
INSERT INTO logs VALUES("83","","2000245727","Individual Inventory Added by [ ID = 2000245727] ROWELLA BANGELES","2022-12-13 16:15:12");
INSERT INTO logs VALUES("84","Admin","1001","Logged out","2022-12-13 16:15:19");
INSERT INTO logs VALUES("85","Admin","1001","Logged in the system","2022-12-13 16:15:24");
INSERT INTO logs VALUES("86","Admin","1001","Logged out","2022-12-13 16:20:50");
INSERT INTO logs VALUES("87","Admin","1001","Logged out","2022-12-14 07:08:59");
INSERT INTO logs VALUES("88","Admin","1001","Logged in the system","2022-12-14 07:12:31");
INSERT INTO logs VALUES("89","Admin","1001","Logged out","2022-12-14 07:19:25");
INSERT INTO logs VALUES("90","Admin","1001","Logged in the system","2022-12-14 07:19:41");
INSERT INTO logs VALUES("91","Admin","1001","Logged in the system","2022-12-14 07:20:39");
INSERT INTO logs VALUES("92"," Admin","1001","Uploaded a student list batch file to the system","2022-12-14 07:27:18");
INSERT INTO logs VALUES("93"," Admin","1001","Added a new offense on [ ID = 2000245727] ROWELLA BANGELES to the offense list","2022-12-14 14:54:07");
INSERT INTO logs VALUES("94","Admin","1001","Logged out","2022-12-14 07:56:10");
INSERT INTO logs VALUES("95","Admin","1001","Logged in the system","2022-12-14 07:56:44");
INSERT INTO logs VALUES("96","Admin","1001","Logged out","2022-12-14 07:57:27");
INSERT INTO logs VALUES("97","Admin","1001","Logged in the system","2022-12-14 07:58:06");
INSERT INTO logs VALUES("98","Admin","1001","Logged out","2022-12-14 07:59:44");
INSERT INTO logs VALUES("99","Admin","1001","Logged in the system","2022-12-14 07:59:56");
INSERT INTO logs VALUES("100","","2000090161","Individual Inventory Added by [ ID = 2000090161] ervin doria","2022-12-14 08:00:26");
INSERT INTO logs VALUES("101","Admin","1001","Logged out","2022-12-14 08:01:04");
INSERT INTO logs VALUES("102","Admin","1001","Logged in the system","2022-12-14 08:01:35");
INSERT INTO logs VALUES("103","Admin","1001","Logged out","2022-12-14 08:01:49");
INSERT INTO logs VALUES("104","Admin","1001","Logged in the system","2022-12-14 08:03:34");
INSERT INTO logs VALUES("105","","2000245727","Individual Inventory Added by [ ID = 2000245727] ROWELLA BANGELES","2022-12-14 08:04:47");
INSERT INTO logs VALUES("106","Admin","1001","Logged out","2022-12-14 08:10:00");
INSERT INTO logs VALUES("107","Admin","1001","Logged in the system","2022-12-14 08:10:13");
INSERT INTO logs VALUES("108","Admin","1001","Logged out","2022-12-14 08:10:42");
INSERT INTO logs VALUES("109","Admin","1001","Logged in the system","2022-12-14 08:20:03");
INSERT INTO logs VALUES("110","Admin","1001","Logged out","2022-12-14 08:35:57");
INSERT INTO logs VALUES("111","Admin","1001","Logged in the system","2022-12-14 08:37:49");
INSERT INTO logs VALUES("112","Admin","1001","Logged out","2022-12-14 08:38:11");
INSERT INTO logs VALUES("113","Admin","1001","Logged in the system","2022-12-14 08:38:30");
INSERT INTO logs VALUES("114"," Admin","1001","Added a new offense on [ ID = 2000011111] student test to the offense list","2022-12-14 15:57:42");
INSERT INTO logs VALUES("115"," Admin","1001","Added a new offense on [ ID = 2000011111] student test to the offense list","2022-12-14 16:05:52");
INSERT INTO logs VALUES("116"," Admin","1001","Added a new offense on [ ID = 2000011111] student test to the offense list","2022-12-14 16:07:15");
INSERT INTO logs VALUES("117"," Admin","1001","Added a new offense on [ ID = 2000090161] ervin doria to the offense list","2022-12-14 16:10:17");
INSERT INTO logs VALUES("118"," Admin","1001","Added a new offense on [ ID = 2000011111] student test to the offense list","2022-12-14 16:10:47");
INSERT INTO logs VALUES("119"," Admin","1001","Added a new offense on [ ID = 2000011111] student test to the offense list","2022-12-14 16:11:17");
INSERT INTO logs VALUES("120"," Admin","1001","Added a new offense on [ ID = 2000011111] student test to the offense list","2022-12-14 16:12:43");
INSERT INTO logs VALUES("121","Admin","1001","Logged out","2022-12-14 09:12:57");
INSERT INTO logs VALUES("122","Admin","1001","Logged in the system","2022-12-14 09:13:05");
INSERT INTO logs VALUES("123","Admin","1001","Logged out","2022-12-14 09:18:27");
INSERT INTO logs VALUES("124","Admin","1001","Logged in the system","2022-12-14 09:19:21");
INSERT INTO logs VALUES("125","Admin","1001","Logged out","2022-12-14 10:09:34");
INSERT INTO logs VALUES("126","Admin","1001","Logged in the system","2022-12-14 10:09:42");
INSERT INTO logs VALUES("127","Student","1001","Added a new referral [ ID = 196]   to the referral list","2022-12-14 10:10:15");
INSERT INTO logs VALUES("128","Admin","1001","Logged out","2022-12-14 10:10:24");
INSERT INTO logs VALUES("129","Admin","1001","Logged in the system","2022-12-14 10:10:30");
INSERT INTO logs VALUES("130","Admin","1001","Logged in the system","2022-12-14 10:17:19");
INSERT INTO logs VALUES("131","Admin","1001","Logged out","2022-12-14 10:42:18");
INSERT INTO logs VALUES("132","Admin","1001","Logged in the system","2022-12-14 10:42:38");
INSERT INTO logs VALUES("133","Admin","1001","Logged out","2022-12-14 10:43:52");
INSERT INTO logs VALUES("134","Admin","1001","Logged in the system","2022-12-14 10:44:04");
INSERT INTO logs VALUES("135","Admin","1001","Logged in the system","2022-12-14 11:13:51");
INSERT INTO logs VALUES("136","Admin","1001","Logged out","2022-12-14 11:32:26");
INSERT INTO logs VALUES("137","Admin","1001","Logged in the system","2022-12-14 11:32:36");
INSERT INTO logs VALUES("138","","2000090161","Individual Inventory Added by [ ID = 2000090161] ervin doria","2022-12-14 11:33:33");
INSERT INTO logs VALUES("139","Student","1001","Added a new referral [ ID = 196]   to the referral list","2022-12-14 11:34:05");
INSERT INTO logs VALUES("140","Admin","1001","Logged out","2022-12-14 11:34:27");
INSERT INTO logs VALUES("141","Admin","1001","Logged in the system","2022-12-14 11:34:38");
INSERT INTO logs VALUES("142","Admin","1001","Logged out","2022-12-14 11:37:20");
INSERT INTO logs VALUES("143","Admin","1001","Logged in the system","2022-12-14 11:37:31");
INSERT INTO logs VALUES("144","Admin","1001","Logged out","2022-12-14 11:37:50");
INSERT INTO logs VALUES("145","Admin","1001","Logged in the system","2022-12-14 11:38:07");
INSERT INTO logs VALUES("146","Admin","1001","Logged out","2022-12-14 13:21:54");
INSERT INTO logs VALUES("147","Admin","1001","Logged in the system","2022-12-14 13:30:01");
INSERT INTO logs VALUES("148","Admin","1001","Logged out","2022-12-14 16:54:50");
INSERT INTO logs VALUES("149","Admin","1001","Logged in the system","2022-12-14 16:55:00");
INSERT INTO logs VALUES("150","Student","1001","Added a new referral [ ID = 253]   to the referral list","2022-12-14 16:55:32");
INSERT INTO logs VALUES("151","Admin","1001","Logged out","2022-12-14 16:55:38");
INSERT INTO logs VALUES("152","Admin","1001","Logged in the system","2022-12-14 17:05:17");
INSERT INTO logs VALUES("153","Admin","1001","Logged out","2022-12-14 17:37:07");
INSERT INTO logs VALUES("154","Admin","1001","Logged in the system","2022-12-14 17:37:17");
INSERT INTO logs VALUES("155","Student","1001","Added a new referral [ ID = 256]   to the referral list","2022-12-14 17:37:39");
INSERT INTO logs VALUES("156","Admin","1001","Logged out","2022-12-14 17:37:52");
INSERT INTO logs VALUES("157","Admin","1001","Logged in the system","2022-12-14 17:37:59");
INSERT INTO logs VALUES("158","","0","Logged in the system","2022-12-15 06:02:41");
INSERT INTO logs VALUES("159","Student","0","Added a new referral [ ID = 256]   to the referral list","2022-12-15 06:03:21");
INSERT INTO logs VALUES("160","Student","0","Added a new referral [ ID = 250]   to the referral list","2022-12-15 06:03:47");
INSERT INTO logs VALUES("161","","0","Logged out","2022-12-15 06:04:12");
INSERT INTO logs VALUES("162","Admin","1001","Logged in the system","2022-12-15 06:04:22");
INSERT INTO logs VALUES("163","Admin","1001","Logged out","2022-12-15 06:40:32");
INSERT INTO logs VALUES("164","Admin","1001","Logged in the system","2022-12-15 06:40:37");
INSERT INTO logs VALUES("165","Admin","1001","Logged out","2022-12-15 07:16:16");
INSERT INTO logs VALUES("166","Admin","1001","Logged in the system","2022-12-15 07:16:24");
INSERT INTO logs VALUES("167","Student","1001","Added a new referral [ ID = 254]   to the referral list","2022-12-15 07:17:10");
INSERT INTO logs VALUES("168","Admin","1001","Logged out","2022-12-15 07:17:25");
INSERT INTO logs VALUES("169","Admin","1001","Logged in the system","2022-12-15 07:17:35");
INSERT INTO logs VALUES("170","Admin","1001","Logged in the system","2022-12-15 07:27:24");
INSERT INTO logs VALUES("171","Admin","1001","Logged out","2022-12-15 09:18:58");
INSERT INTO logs VALUES("172","Admin","1001","Logged in the system","2022-12-15 09:19:08");
INSERT INTO logs VALUES("173","Student","1001","Added a new referral [ ID = 250]   to the referral list","2022-12-15 09:20:39");
INSERT INTO logs VALUES("174","Admin","1001","Logged out","2022-12-15 09:20:43");
INSERT INTO logs VALUES("175","Admin","1001","Logged in the system","2022-12-15 09:21:05");
INSERT INTO logs VALUES("176","Admin","1001","Logged out","2022-12-15 09:23:34");
INSERT INTO logs VALUES("177","Admin","1001","Logged in the system","2022-12-15 09:23:43");
INSERT INTO logs VALUES("178","Student","1001","Added a new referral [ ID = 250]   to the referral list","2022-12-15 09:24:16");
INSERT INTO logs VALUES("179","Admin","1001","Logged out","2022-12-15 09:24:21");
INSERT INTO logs VALUES("180","Admin","1001","Logged in the system","2022-12-15 09:24:28");
INSERT INTO logs VALUES("181","Admin","1001","Logged out","2022-12-15 09:29:41");
INSERT INTO logs VALUES("182","Admin","1001","Logged in the system","2022-12-15 09:29:48");
INSERT INTO logs VALUES("183","Student","1001","Added a new referral [ ID = 197]   to the referral list","2022-12-15 09:30:36");
INSERT INTO logs VALUES("184","Admin","1001","Logged out","2022-12-15 09:30:39");
INSERT INTO logs VALUES("185","Admin","1001","Logged in the system","2022-12-15 09:30:46");
INSERT INTO logs VALUES("186","Admin","1001","Logged out","2022-12-15 09:34:40");
INSERT INTO logs VALUES("187","Admin","1001","Logged in the system","2022-12-15 09:34:50");
INSERT INTO logs VALUES("188","Student","1001","Added a new referral [ ID = 262]   to the referral list","2022-12-15 09:35:08");
INSERT INTO logs VALUES("189","Student","1001","Added a new referral [ ID = 197]   to the referral list","2022-12-15 09:35:29");
INSERT INTO logs VALUES("190","Admin","1001","Logged out","2022-12-15 09:35:37");
INSERT INTO logs VALUES("191","Admin","1001","Logged in the system","2022-12-15 09:35:42");
INSERT INTO logs VALUES("192","Admin","1001","Logged in the system","2022-12-15 11:51:52");
INSERT INTO logs VALUES("193"," Admin","1001","Deleted the staff [ ID = 2000257868] CHRIS BENNAN in the staff list","2022-12-15 11:56:51");
INSERT INTO logs VALUES("194"," Admin","1001","Deleted the staff [ ID = 2000251944] KATRINA KEATON in the staff list","2022-12-15 11:56:55");
INSERT INTO logs VALUES("195"," Admin","1001","Deleted the staff [ ID = 2000251944] KATRINA KEATON in the staff list","2022-12-15 11:57:16");
INSERT INTO logs VALUES("196"," Admin","1001","Deleted the staff [ ID = 131311] Abigail Nazal in the staff list","2022-12-15 11:57:20");
INSERT INTO logs VALUES("197"," Admin","1001","Deleted the staff [ ID = 2000022222] staff test in the staff list","2022-12-15 11:57:24");
INSERT INTO logs VALUES("198"," Admin","1001","Deleted the staff [ ID = 2000257868] CHRIS BENNAN in the staff list","2022-12-15 11:57:28");
INSERT INTO logs VALUES("199"," Admin","1001","Deleted the staff [ ID = 2000257868] CHRIS BENNAN in the staff list","2022-12-15 11:57:50");
INSERT INTO logs VALUES("200"," Admin","1001","Deleted the staff [ ID = 2000251944] KATRINA KEATON in the staff list","2022-12-15 11:57:54");
INSERT INTO logs VALUES("201","Admin","1001","Logged out","2022-12-15 11:59:09");
INSERT INTO logs VALUES("202","Guidance","2000010001","Logged in the system","2022-12-15 12:08:54");
INSERT INTO logs VALUES("203"," Admin","1001","Uploaded a student list batch file to the system","2022-12-15 12:15:52");
INSERT INTO logs VALUES("204"," Admin","1001","Added a new student [ ID = 2000011111] ABIGAIL NAZAL to the students list","2022-12-15 12:16:33");
INSERT INTO logs VALUES("205"," Admin","1001","Deleted the student [ ID = 2000011111] ABIGAIL NAZAL in the students list","2022-12-15 12:17:01");
INSERT INTO logs VALUES("206"," Admin","1001","Added a new student [ ID = 21312421412123] Abigail Nazal to the students list","2022-12-15 12:20:05");
INSERT INTO logs VALUES("207"," Guidance Counselor","1001","Uploaded a staff list batch file to the system","2022-12-15 12:49:34");
INSERT INTO logs VALUES("208"," Guidance Counselor","1001","Uploaded a student list batch file to the system","2022-12-15 13:05:03");
INSERT INTO logs VALUES("209"," Admin","1001","Deleted the student [ ID = 2000232816] Rina Elhym Acub in the students list","2022-12-15 13:06:09");
INSERT INTO logs VALUES("210"," Guidance Counselor","1001","Uploaded a staff list batch file to the system","2022-12-15 13:06:26");
INSERT INTO logs VALUES("211"," Admin","1001","Added a new student [ ID = 2000092923] Abigail Nazal to the students list","2022-12-15 13:18:44");
INSERT INTO logs VALUES("212"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-15 20:20:13");
INSERT INTO logs VALUES("213"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-15 20:20:13");
INSERT INTO logs VALUES("214"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-15 20:20:21");
INSERT INTO logs VALUES("215"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-15 20:20:21");
INSERT INTO logs VALUES("216"," Admin","1001","Added a new offense on [ ID = 2000092923] Abigail Nazal to the offense list","2022-12-15 20:33:32");
INSERT INTO logs VALUES("217"," Admin","1001","Updated the details of student [ ID = 2000092923] Abigail Nazal","2022-12-15 13:53:28");
INSERT INTO logs VALUES("218","Guidance","2000010001","Logged out","2022-12-15 14:08:23");
INSERT INTO logs VALUES("219","Guidance","2000010001","Logged in the system","2022-12-15 14:08:52");
INSERT INTO logs VALUES("220","","2000092923","Individual Inventory Added by [ ID = 2000092923] Abigail Nazal","2022-12-15 14:10:49");
INSERT INTO logs VALUES("221","Guidance","1001","Logged in the system","2022-12-15 14:11:45");
INSERT INTO logs VALUES("222","Student","2000010001","Added a new referral [ ID = 324]   to the referral list","2022-12-15 14:12:30");
INSERT INTO logs VALUES("223","Guidance","2000010001","Logged out","2022-12-15 14:24:43");
INSERT INTO logs VALUES("224","Guidance","2000010001","Logged in the system","2022-12-15 14:24:47");
INSERT INTO logs VALUES("225","Guidance","2000010001","Logged out","2022-12-15 14:24:50");
INSERT INTO logs VALUES("226","Staff","2000257868","Logged in the system","2022-12-15 14:25:43");
INSERT INTO logs VALUES("227","Staff","2000257868","Logged out","2022-12-15 14:41:33");
INSERT INTO logs VALUES("228","Staff","2000257868","Logged in the system","2022-12-15 14:41:40");
INSERT INTO logs VALUES("229","Staff","2000257868","Logged out","2022-12-15 14:41:59");
INSERT INTO logs VALUES("230","Staff","2000257868","Logged in the system","2022-12-15 14:45:21");
INSERT INTO logs VALUES("231","Staff","2000257868","Logged out","2022-12-15 14:45:26");
INSERT INTO logs VALUES("232","Guidance","1001","Logged in the system","2022-12-15 14:53:06");
INSERT INTO logs VALUES("233","Guidance","1001","Logged out","2022-12-15 14:54:54");
INSERT INTO logs VALUES("234","Guidance","1001","Logged in the system","2022-12-15 14:54:59");
INSERT INTO logs VALUES("235","Guidance","1001","Logged out","2022-12-15 15:31:00");
INSERT INTO logs VALUES("236","Guidance","1001","Logged in the system","2022-12-15 15:31:12");
INSERT INTO logs VALUES("237"," Admin","1001","Added a new student [ ID = 20000123456] Jose Rizal to the students list","2022-12-15 15:45:18");
INSERT INTO logs VALUES("238","Guidance","1001","Logged out","2022-12-15 15:45:27");
INSERT INTO logs VALUES("239","Guidance","1001","Logged in the system","2022-12-15 15:45:54");
INSERT INTO logs VALUES("240","Guidance","1001","Logged in the system","2022-12-15 15:46:13");
INSERT INTO logs VALUES("241"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-15 22:54:57");
INSERT INTO logs VALUES("242"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-15 22:54:57");
INSERT INTO logs VALUES("243","Guidance","1001","Logged out","2022-12-15 16:02:36");
INSERT INTO logs VALUES("244","Guidance","1001","Logged in the system","2022-12-15 16:03:08");
INSERT INTO logs VALUES("245","","2000245727","Individual Inventory Added by [ ID = 2000245727] Rowella Bangeles","2022-12-15 16:16:40");
INSERT INTO logs VALUES("246","Guidance","1001","Logged out","2022-12-15 16:29:03");
INSERT INTO logs VALUES("247","Guidance","1001","Logged in the system","2022-12-15 16:29:08");
INSERT INTO logs VALUES("248","Guidance","1001","Logged out","2022-12-15 16:41:41");
INSERT INTO logs VALUES("249","Guidance","1001","Logged in the system","2022-12-15 16:42:10");
INSERT INTO logs VALUES("250","Guidance","1001","Logged out","2022-12-15 16:46:06");
INSERT INTO logs VALUES("251","Guidance","1001","Logged in the system","2022-12-15 16:46:10");
INSERT INTO logs VALUES("252","Guidance","1001","Logged out","2022-12-15 16:46:18");
INSERT INTO logs VALUES("253","Staff","2000257868","Logged in the system","2022-12-15 16:46:24");
INSERT INTO logs VALUES("254","Staff","2000257868","Logged out","2022-12-15 16:55:58");
INSERT INTO logs VALUES("255","Guidance","1001","Logged in the system","2022-12-15 16:56:02");
INSERT INTO logs VALUES("256","Guidance","1001","Logged out","2022-12-15 16:56:52");
INSERT INTO logs VALUES("257","Guidance","1001","Logged in the system","2022-12-15 16:57:02");
INSERT INTO logs VALUES("258","Guidance","1001","Logged out","2022-12-15 16:57:08");
INSERT INTO logs VALUES("259","Guidance","1001","Logged in the system","2022-12-15 16:57:12");
INSERT INTO logs VALUES("260"," Admin","1001","Added a new staff [ ID = 131311] Abigail Nazal to the staff list","2022-12-15 17:06:39");
INSERT INTO logs VALUES("261"," Admin","1001","Deleted the staff [ ID = 131311] Abigail Nazal in the staff list","2022-12-15 17:06:47");
INSERT INTO logs VALUES("262","Guidance","1001","Logged out","2022-12-15 17:12:29");
INSERT INTO logs VALUES("263","Staff","2000257868","Logged in the system","2022-12-15 17:12:34");
INSERT INTO logs VALUES("264","Staff","2000257868","Logged out","2022-12-15 17:20:48");
INSERT INTO logs VALUES("265","Guidance","1001","Logged in the system","2022-12-15 17:20:53");
INSERT INTO logs VALUES("266","Guidance","1001","Logged out","2022-12-15 17:21:32");
INSERT INTO logs VALUES("267","Staff","2000257868","Logged in the system","2022-12-15 17:21:36");
INSERT INTO logs VALUES("268","Staff","2000257868","Logged out","2022-12-15 17:25:18");
INSERT INTO logs VALUES("269","Guidance","1001","Logged in the system","2022-12-15 17:25:22");
INSERT INTO logs VALUES("270","Guidance","1001","Logged out","2022-12-15 17:25:28");
INSERT INTO logs VALUES("271","Staff","2000257868","Logged in the system","2022-12-15 17:25:32");
INSERT INTO logs VALUES("272","Staff","2000257868","Logged out","2022-12-15 18:33:15");
INSERT INTO logs VALUES("273","Staff","2000257868","Logged in the system","2022-12-15 18:33:18");
INSERT INTO logs VALUES("274","Staff","2000257868","Logged out","2022-12-15 18:34:17");
INSERT INTO logs VALUES("275","Guidance","1001","Logged in the system","2022-12-15 18:34:23");
INSERT INTO logs VALUES("276"," Admin","1001","Added a new offense on [ ID = 2000092923] Abigail Nazal to the offense list","2022-12-16 01:34:56");
INSERT INTO logs VALUES("277"," Admin","1001","Added a new offense on [ ID = 2000266053] Jezza Abog to the offense list","2022-12-16 01:35:38");
INSERT INTO logs VALUES("278"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-16 01:36:19");
INSERT INTO logs VALUES("279"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-16 01:36:19");
INSERT INTO logs VALUES("280"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-16 01:36:24");
INSERT INTO logs VALUES("281"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-16 01:36:24");
INSERT INTO logs VALUES("282","Guidance","1001","Logged in the system","2022-12-15 21:10:23");
INSERT INTO logs VALUES("283","Guidance","1001","Logged out","2022-12-15 21:10:46");
INSERT INTO logs VALUES("284","Guidance","1001","Logged in the system","2022-12-15 21:10:50");
INSERT INTO logs VALUES("285","Guidance","1001","Logged out","2022-12-15 21:11:33");
INSERT INTO logs VALUES("286","Guidance","1001","Logged in the system","2022-12-15 21:14:41");
INSERT INTO logs VALUES("287","Guidance","1001","Logged out","2022-12-15 21:15:09");
INSERT INTO logs VALUES("288","Guidance","1001","Logged in the system","2022-12-15 21:15:15");
INSERT INTO logs VALUES("289","Student","1001","Added a new referral [ ID = 322]   to the referral list","2022-12-15 21:15:40");
INSERT INTO logs VALUES("290","Guidance","1001","Logged out","2022-12-15 21:16:26");
INSERT INTO logs VALUES("291","Guidance","1001","Logged in the system","2022-12-15 21:16:31");
INSERT INTO logs VALUES("292"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-16 04:21:01");
INSERT INTO logs VALUES("293"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-16 04:21:01");
INSERT INTO logs VALUES("294"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-16 04:21:49");
INSERT INTO logs VALUES("295"," Admin","1001","Error: Attemptedt to update the offense of [ ID = ]  ","2022-12-16 04:21:49");
INSERT INTO logs VALUES("296"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-16 04:24:03");
INSERT INTO logs VALUES("297"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-16 04:26:38");
INSERT INTO logs VALUES("298","Guidance","1001","Logged out","2022-12-15 21:27:23");
INSERT INTO logs VALUES("299","Staff","2000257868","Logged in the system","2022-12-15 21:27:28");
INSERT INTO logs VALUES("300","Staff","2000257868","Logged out","2022-12-15 21:27:44");
INSERT INTO logs VALUES("301","Guidance","1001","Logged in the system","2022-12-16 00:45:58");
INSERT INTO logs VALUES("302","Guidance","1001","Logged in the system","2022-12-16 01:06:45");
INSERT INTO logs VALUES("303","Guidance","1001","Logged out","2022-12-16 01:06:56");
INSERT INTO logs VALUES("304","Guidance","1001","Logged in the system","2022-12-16 01:07:01");
INSERT INTO logs VALUES("305","Guidance","1001","Logged out","2022-12-16 01:07:19");
INSERT INTO logs VALUES("306","Guidance","1001","Logged in the system","2022-12-16 01:14:28");
INSERT INTO logs VALUES("307","Student","1001","Added a new referral [ ID = 322]   to the referral list","2022-12-16 01:17:35");
INSERT INTO logs VALUES("308","Guidance","1001","Logged out","2022-12-16 01:17:39");
INSERT INTO logs VALUES("309","Guidance","1001","Logged in the system","2022-12-16 01:18:04");
INSERT INTO logs VALUES("310","Guidance","1001","Logged out","2022-12-16 01:22:48");
INSERT INTO logs VALUES("311","Guidance","1001","Logged in the system","2022-12-16 01:22:56");
INSERT INTO logs VALUES("312","Student","1001","Added a new referral [ ID = 329]   to the referral list","2022-12-16 01:23:22");
INSERT INTO logs VALUES("313","Guidance","1001","Logged out","2022-12-16 01:23:26");
INSERT INTO logs VALUES("314","Guidance","1001","Logged in the system","2022-12-16 01:23:34");
INSERT INTO logs VALUES("315"," Admin","1001","Uploaded a staff list batch file to the system","2022-12-16 03:08:18");
INSERT INTO logs VALUES("316","Guidance","1001","Logged in the system","2022-12-16 03:12:12");
INSERT INTO logs VALUES("317","Guidance","1001","Logged out","2022-12-16 03:56:04");
INSERT INTO logs VALUES("318","Guidance","1001","Logged in the system","2022-12-16 03:56:12");
INSERT INTO logs VALUES("319","Student","1001","Added a new referral [ ID = 340]   to the referral list","2022-12-16 04:08:46");
INSERT INTO logs VALUES("320","Guidance","1001","Logged out","2022-12-16 04:08:55");
INSERT INTO logs VALUES("321","Guidance","1001","Logged in the system","2022-12-16 04:09:00");
INSERT INTO logs VALUES("322","Guidance","1001","Logged out","2022-12-16 04:10:26");
INSERT INTO logs VALUES("323","Guidance","1001","Logged in the system","2022-12-16 04:10:32");
INSERT INTO logs VALUES("324","Student","1001","Added a new referral [ ID = 322]   to the referral list","2022-12-16 04:10:53");
INSERT INTO logs VALUES("325","Student","1001","Added a new referral [ ID = 322]   to the referral list","2022-12-16 04:11:22");
INSERT INTO logs VALUES("326","Student","1001","Added a new referral [ ID = 348]   to the referral list","2022-12-16 04:12:00");
INSERT INTO logs VALUES("327","Guidance","1001","Logged out","2022-12-16 04:16:43");
INSERT INTO logs VALUES("328","Guidance","1001","Logged in the system","2022-12-16 04:21:57");
INSERT INTO logs VALUES("329","Guidance","1001","Logged in the system","2022-12-16 04:21:59");
INSERT INTO logs VALUES("330","","0","Logged in the system","2022-12-16 04:24:10");
INSERT INTO logs VALUES("331","Guidance","1001","Logged out","2022-12-16 04:24:59");
INSERT INTO logs VALUES("332","Guidance","1001","Logged in the system","2022-12-16 04:25:07");
INSERT INTO logs VALUES("333","Student","1001","Added a new referral [ ID = 320]   to the referral list","2022-12-16 04:28:28");
INSERT INTO logs VALUES("334","Guidance","1001","Logged out","2022-12-16 04:29:13");
INSERT INTO logs VALUES("335","Guidance","1001","Logged in the system","2022-12-16 04:29:19");
INSERT INTO logs VALUES("336","Student","1001","Added a new referral [ ID = 320]   to the referral list","2022-12-16 04:29:45");
INSERT INTO logs VALUES("337","Student","1001","Added a new referral [ ID = 320]   to the referral list","2022-12-16 04:30:31");
INSERT INTO logs VALUES("338","Guidance","1001","Logged out","2022-12-16 04:30:36");
INSERT INTO logs VALUES("339","Guidance","1001","Logged in the system","2022-12-16 04:30:41");
INSERT INTO logs VALUES("340","Guidance","1001","Logged out","2022-12-16 04:36:37");
INSERT INTO logs VALUES("341","Guidance","1001","Logged in the system","2022-12-16 04:37:00");
INSERT INTO logs VALUES("342","Guidance","1001","Logged out","2022-12-16 04:37:21");
INSERT INTO logs VALUES("343","Guidance","1001","Logged in the system","2022-12-16 04:38:52");
INSERT INTO logs VALUES("344","Guidance","1001","Logged out","2022-12-16 04:40:12");
INSERT INTO logs VALUES("345","Guidance","1001","Logged in the system","2022-12-16 04:40:40");
INSERT INTO logs VALUES("346","Guidance","1001","Logged in the system","2022-12-16 07:07:00");
INSERT INTO logs VALUES("347"," Admin","1001","Uploaded a staff list batch file to the system","2022-12-16 07:08:57");
INSERT INTO logs VALUES("348"," Guidance Counselor","1001","Uploaded a student list batch file to the system","2022-12-16 07:09:31");
INSERT INTO logs VALUES("349","Guidance","1001","Logged out","2022-12-16 07:12:44");
INSERT INTO logs VALUES("350","Guidance","1001","Logged in the system","2022-12-16 07:13:37");
INSERT INTO logs VALUES("351","","2000245727","Individual Inventory Added by [ ID = 2000245727] Rowella Bangeles","2022-12-16 07:15:02");
INSERT INTO logs VALUES("352","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-16 07:26:50");
INSERT INTO logs VALUES("353","Guidance","1001","Logged out","2022-12-16 07:48:45");
INSERT INTO logs VALUES("354","Staff","2000257868","Logged in the system","2022-12-16 07:49:22");
INSERT INTO logs VALUES("355","Staff","2000257868","Added a new referral [ ID = 357]   to the referral list","2022-12-16 07:52:11");
INSERT INTO logs VALUES("356","Staff","2000257868","Logged out","2022-12-16 07:52:32");
INSERT INTO logs VALUES("357","Guidance","1001","Logged in the system","2022-12-16 07:52:46");
INSERT INTO logs VALUES("358","Guidance","1001","Logged in the system","2022-12-16 08:10:57");
INSERT INTO logs VALUES("359","","2000232823","Individual Inventory Added by [ ID = 2000232823] Marqueyza Acub","2022-12-16 08:11:27");
INSERT INTO logs VALUES("360","Guidance","1001","Logged out","2022-12-16 08:19:32");
INSERT INTO logs VALUES("361","Guidance","1001","Logged in the system","2022-12-16 08:19:58");
INSERT INTO logs VALUES("362","Guidance","1001","Logged out","2022-12-16 08:36:46");
INSERT INTO logs VALUES("363","Guidance","1001","Logged in the system","2022-12-16 08:37:13");
INSERT INTO logs VALUES("364","Guidance","1001","Logged out","2022-12-16 08:37:47");
INSERT INTO logs VALUES("365","Admin","1001","Logged out","2022-12-19 15:27:06");
INSERT INTO logs VALUES("366","Guidance","1001","Logged in the system","2022-12-19 15:27:17");
INSERT INTO logs VALUES("367","Guidance","1001","Logged out","2022-12-19 17:43:39");
INSERT INTO logs VALUES("368","Guidance","1001","Logged in the system","2022-12-19 17:44:04");
INSERT INTO logs VALUES("369","Guidance","1001","Logged in the system","2022-12-19 17:45:36");
INSERT INTO logs VALUES("370","Guidance","1001","Logged out","2022-12-19 17:52:31");
INSERT INTO logs VALUES("371","Guidance","1001","Logged in the system","2022-12-19 17:52:33");
INSERT INTO logs VALUES("372","Guidance","1001","Logged out","2022-12-19 19:11:57");
INSERT INTO logs VALUES("373","Guidance","1001","Logged in the system","2022-12-20 05:11:19");
INSERT INTO logs VALUES("374","Guidance","1001","Logged out","2022-12-20 05:17:28");
INSERT INTO logs VALUES("375","Staff","2000251944","Logged in the system","2022-12-20 05:18:12");
INSERT INTO logs VALUES("376","Staff","0","Error in adding a new referral [ ID = ]   to the referral list","2022-12-20 05:18:37");
INSERT INTO logs VALUES("377","Staff","2000251944","Logged out","2022-12-20 05:27:41");
INSERT INTO logs VALUES("378","Staff","2000251944","Logged in the system","2022-12-20 05:27:46");
INSERT INTO logs VALUES("379","Staff","2000251944","Logged out","2022-12-20 05:27:50");
INSERT INTO logs VALUES("380","Guidance","1001","Logged in the system","2022-12-20 05:28:00");
INSERT INTO logs VALUES("381","Guidance","1001","Logged in the system","2022-12-20 06:48:03");
INSERT INTO logs VALUES("382","Guidance","1001","Logged out","2022-12-20 09:02:59");
INSERT INTO logs VALUES("383","Guidance","1001","Logged in the system","2022-12-20 09:03:06");
INSERT INTO logs VALUES("384","Guidance","1001","Logged out","2022-12-20 09:12:37");
INSERT INTO logs VALUES("385","Staff","2000251944","Logged in the system","2022-12-20 09:12:43");
INSERT INTO logs VALUES("386","Staff","0","Error in adding a new referral [ ID = ]   to the referral list","2022-12-20 09:13:05");
INSERT INTO logs VALUES("387","Staff","2000251944","Logged out","2022-12-20 09:14:05");
INSERT INTO logs VALUES("388","Staff","2000253423","Logged in the system","2022-12-20 09:14:18");
INSERT INTO logs VALUES("389","Staff","0","Error in adding a new referral [ ID = ]   to the referral list","2022-12-20 09:16:33");
INSERT INTO logs VALUES("390","Staff","2000253423","Logged out","2022-12-20 09:16:40");
INSERT INTO logs VALUES("391","Staff","2000253423","Logged in the system","2022-12-20 09:16:43");
INSERT INTO logs VALUES("392","Staff","2000253423","Logged out","2022-12-20 09:20:06");
INSERT INTO logs VALUES("393","Staff","2000253423","Logged in the system","2022-12-20 09:20:13");
INSERT INTO logs VALUES("394","Staff","2000253423","Logged out","2022-12-20 09:20:15");
INSERT INTO logs VALUES("395","Guidance","1001","Logged in the system","2022-12-20 09:20:23");
INSERT INTO logs VALUES("396","Guidance","1001","Logged out","2022-12-20 09:23:47");
INSERT INTO logs VALUES("397","Guidance","1001","Logged in the system","2022-12-20 09:24:13");
INSERT INTO logs VALUES("398","Guidance","1001","Logged out","2022-12-20 10:46:58");
INSERT INTO logs VALUES("399","Staff","2000251944","Logged in the system","2022-12-20 10:47:19");
INSERT INTO logs VALUES("400","Staff","2000251944","Logged out","2022-12-20 11:56:08");
INSERT INTO logs VALUES("401","Staff","2000251944","Logged in the system","2022-12-20 11:56:38");
INSERT INTO logs VALUES("402","Staff","2000251944","Logged out","2022-12-20 15:00:14");
INSERT INTO logs VALUES("403","Staff","2000251944","Logged in the system","2022-12-20 15:00:18");
INSERT INTO logs VALUES("404","Staff","2000251944","Logged out","2022-12-20 15:03:50");
INSERT INTO logs VALUES("405","Staff","2000251944","Logged in the system","2022-12-20 15:03:57");
INSERT INTO logs VALUES("406","Staff","2000251944","Logged out","2022-12-20 15:04:00");
INSERT INTO logs VALUES("407","Guidance","1001","Logged in the system","2022-12-20 15:04:24");
INSERT INTO logs VALUES("408"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 22:08:51");
INSERT INTO logs VALUES("409","Guidance","1001","Logged out","2022-12-20 15:46:05");
INSERT INTO logs VALUES("410","Guidance","1001","Logged in the system","2022-12-20 15:46:08");
INSERT INTO logs VALUES("411"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:09:08");
INSERT INTO logs VALUES("412"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:09:51");
INSERT INTO logs VALUES("413"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:14:33");
INSERT INTO logs VALUES("414"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:21:04");
INSERT INTO logs VALUES("415"," Admin","1001","Added a new offense on [ ID = 2000258351] Charmaine Baquiran to the offense list","2022-12-20 23:22:46");
INSERT INTO logs VALUES("416"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:23:51");
INSERT INTO logs VALUES("417","Guidance","1001","Logged out","2022-12-20 16:24:01");
INSERT INTO logs VALUES("418","Guidance","1001","Logged in the system","2022-12-20 16:24:37");
INSERT INTO logs VALUES("419","Guidance","1001","Logged out","2022-12-20 16:27:17");
INSERT INTO logs VALUES("420","Guidance","1001","Logged in the system","2022-12-20 16:27:25");
INSERT INTO logs VALUES("421"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:27:42");
INSERT INTO logs VALUES("422"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:28:30");
INSERT INTO logs VALUES("423"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:28:59");
INSERT INTO logs VALUES("424"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:29:55");
INSERT INTO logs VALUES("425"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-20 23:30:19");
INSERT INTO logs VALUES("426","Guidance","1001","Logged out","2022-12-20 16:30:32");
INSERT INTO logs VALUES("427","Guidance","1001","Logged in the system","2022-12-20 16:30:38");
INSERT INTO logs VALUES("428","Guidance","1001","Logged out","2022-12-20 16:37:29");
INSERT INTO logs VALUES("429","Guidance","1001","Logged in the system","2022-12-20 16:37:36");
INSERT INTO logs VALUES("430","Guidance","1001","Logged out","2022-12-20 16:46:31");
INSERT INTO logs VALUES("431","Guidance","1001","Logged in the system","2022-12-20 16:46:39");
INSERT INTO logs VALUES("432","Guidance","1001","Logged out","2022-12-20 17:06:32");
INSERT INTO logs VALUES("433","Guidance","1001","Logged in the system","2022-12-20 17:06:38");
INSERT INTO logs VALUES("434","Guidance","1001","Logged out","2022-12-20 17:17:02");
INSERT INTO logs VALUES("435","Staff","2000253423","Logged in the system","2022-12-20 17:17:09");
INSERT INTO logs VALUES("436","Staff","0","Error in adding a new referral [ ID = ]   to the referral list","2022-12-20 17:19:28");
INSERT INTO logs VALUES("437","Staff","0","Error in adding a new referral [ ID = ]   to the referral list","2022-12-20 17:23:23");
INSERT INTO logs VALUES("438","Staff","2000253423","Logged out","2022-12-20 17:23:30");
INSERT INTO logs VALUES("439","Staff","2000253423","Logged in the system","2022-12-20 17:23:32");
INSERT INTO logs VALUES("440","Staff","0","Error in adding a new referral [ ID = ]   to the referral list","2022-12-20 17:25:24");
INSERT INTO logs VALUES("441","Staff","2000253423","Logged out","2022-12-20 17:25:27");
INSERT INTO logs VALUES("442","Staff","2000253423","Logged in the system","2022-12-20 17:25:30");
INSERT INTO logs VALUES("443","Staff","2000253423","Logged out","2022-12-20 17:27:29");
INSERT INTO logs VALUES("444","Staff","2000253423","Logged in the system","2022-12-20 17:27:41");
INSERT INTO logs VALUES("445","Staff","2000253423","Logged out","2022-12-20 17:28:00");
INSERT INTO logs VALUES("446","Staff","2000253423","Logged in the system","2022-12-20 17:28:03");
INSERT INTO logs VALUES("447","Staff","2000253423","Logged out","2022-12-20 17:38:21");
INSERT INTO logs VALUES("448","Staff","2000253423","Logged in the system","2022-12-20 17:38:24");
INSERT INTO logs VALUES("449","Staff","2000253423","Logged out","2022-12-20 17:39:07");
INSERT INTO logs VALUES("450","Staff","2000253423","Logged in the system","2022-12-21 05:26:39");
INSERT INTO logs VALUES("451","Staff","2000253423","Logged out","2022-12-21 05:29:16");
INSERT INTO logs VALUES("452","Staff","2000253423","Logged in the system","2022-12-21 05:29:18");
INSERT INTO logs VALUES("453","Staff","2000253423","Logged out","2022-12-21 05:49:22");
INSERT INTO logs VALUES("454","Staff","2000253423","Logged in the system","2022-12-21 05:49:26");
INSERT INTO logs VALUES("455","Staff","2000253423","Logged out","2022-12-21 05:57:26");
INSERT INTO logs VALUES("456","Guidance","1001","Logged in the system","2022-12-21 05:57:33");
INSERT INTO logs VALUES("457"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-21 13:08:15");
INSERT INTO logs VALUES("458","Guidance","1001","Logged out","2022-12-21 16:36:15");
INSERT INTO logs VALUES("459","Guidance","1001","Logged in the system","2022-12-21 16:36:21");
INSERT INTO logs VALUES("460","Guidance","1001","Logged out","2022-12-21 16:39:06");
INSERT INTO logs VALUES("461","Staff","2000257868","Logged in the system","2022-12-21 16:39:53");
INSERT INTO logs VALUES("462","Staff","2000257868","Logged out","2022-12-21 16:42:43");
INSERT INTO logs VALUES("463","Guidance","1001","Logged in the system","2022-12-21 16:42:49");
INSERT INTO logs VALUES("464","Guidance","1001","Logged out","2022-12-21 16:47:33");
INSERT INTO logs VALUES("465","Staff","2000257868","Logged in the system","2022-12-21 16:47:38");
INSERT INTO logs VALUES("466","Staff","2000257868","Logged out","2022-12-21 17:03:51");
INSERT INTO logs VALUES("467","Staff","2000257868","Logged in the system","2022-12-21 17:03:58");
INSERT INTO logs VALUES("468","Staff","2000257868","Logged out","2022-12-21 17:04:03");
INSERT INTO logs VALUES("469","Staff","2000257868","Logged in the system","2022-12-21 17:04:08");
INSERT INTO logs VALUES("470","Guidance","1001","Logged in the system","2022-12-21 17:04:18");
INSERT INTO logs VALUES("471","Guidance","1001","Logged out","2022-12-21 17:04:38");
INSERT INTO logs VALUES("472","Guidance","1001","Logged in the system","2022-12-21 17:04:44");
INSERT INTO logs VALUES("473","Guidance","1001","Logged out","2022-12-21 17:20:59");
INSERT INTO logs VALUES("474","Staff","2000257868","Logged in the system","2022-12-21 17:21:06");
INSERT INTO logs VALUES("475","Staff","2000257868","Logged out","2022-12-21 18:00:00");
INSERT INTO logs VALUES("476","Guidance","1001","Logged in the system","2022-12-21 18:00:05");
INSERT INTO logs VALUES("477"," Admin","1001","Added a new announcement","2022-12-21 18:17:07");
INSERT INTO logs VALUES("478"," Admin","1001","Added a new announcement","2022-12-21 19:00:34");
INSERT INTO logs VALUES("479"," Admin","1001","Added a new announcement","2022-12-21 19:07:58");
INSERT INTO logs VALUES("480"," Admin","1001","Added a new announcement","2022-12-22 07:06:57");
INSERT INTO logs VALUES("481"," Admin","1001","Added a new announcement","2022-12-22 07:52:40");
INSERT INTO logs VALUES("482"," Admin","1001","Added a new announcement","2022-12-22 07:52:54");
INSERT INTO logs VALUES("483"," Admin","1001","Added a new announcement","2022-12-22 08:40:17");
INSERT INTO logs VALUES("484"," Admin","1001","Updated an announcement","2022-12-22 08:50:39");
INSERT INTO logs VALUES("485"," Admin","1001","Updated an announcement","2022-12-22 08:50:56");
INSERT INTO logs VALUES("486"," Admin","1001","Updated an announcement","2022-12-22 08:51:35");
INSERT INTO logs VALUES("487"," Admin","1001","Updated an announcement","2022-12-22 08:51:46");
INSERT INTO logs VALUES("488"," Admin","1001","Added a new announcement","2022-12-22 08:58:50");
INSERT INTO logs VALUES("489"," Admin","1001","Updated an announcement","2022-12-22 09:11:05");
INSERT INTO logs VALUES("490"," Admin","1001","Updated an announcement","2022-12-22 09:11:12");
INSERT INTO logs VALUES("491"," Admin","1001","Updated an announcement","2022-12-22 09:11:20");
INSERT INTO logs VALUES("492"," Admin","1001","Error: Attempted to delete an announcement","2022-12-22 09:11:24");
INSERT INTO logs VALUES("493"," Admin","1001","Added a new announcement","2022-12-22 09:11:32");
INSERT INTO logs VALUES("494"," Admin","1001","Added a new announcement","2022-12-22 09:11:47");
INSERT INTO logs VALUES("495"," Admin","1001","Updated an announcement","2022-12-22 09:12:13");
INSERT INTO logs VALUES("496"," Admin","1001","Updated an announcement","2022-12-22 09:12:25");
INSERT INTO logs VALUES("497"," Admin","1001","Updated an announcement","2022-12-22 09:12:31");
INSERT INTO logs VALUES("498"," Admin","1001","Updated an announcement","2022-12-22 09:26:18");
INSERT INTO logs VALUES("499"," Admin","1001","Updated an announcement","2022-12-22 09:26:48");
INSERT INTO logs VALUES("500"," Admin","1001","Updated an announcement","2022-12-22 09:27:57");
INSERT INTO logs VALUES("501"," Admin","1001","Updated an announcement","2022-12-22 09:29:47");
INSERT INTO logs VALUES("502"," Admin","1001","Updated an announcement","2022-12-22 09:30:43");
INSERT INTO logs VALUES("503"," Admin","1001","Updated an announcement","2022-12-22 09:31:24");
INSERT INTO logs VALUES("504"," Admin","1001","Updated an announcement","2022-12-22 09:33:28");
INSERT INTO logs VALUES("505"," Admin","1001","Updated an announcement","2022-12-22 09:33:36");
INSERT INTO logs VALUES("506"," Admin","1001","Updated an announcement","2022-12-22 09:34:12");
INSERT INTO logs VALUES("507"," Admin","1001","Updated an announcement","2022-12-22 09:34:17");
INSERT INTO logs VALUES("508"," Admin","1001","Updated an announcement","2022-12-22 09:34:28");
INSERT INTO logs VALUES("509"," Admin","1001","Updated an announcement","2022-12-22 09:34:38");
INSERT INTO logs VALUES("510"," Admin","1001","Error: Attempted to delete an announcement","2022-12-22 09:37:05");
INSERT INTO logs VALUES("511"," Admin","1001","Added a new announcement","2022-12-22 09:39:01");
INSERT INTO logs VALUES("512"," Admin","1001","Updated an announcement","2022-12-22 09:39:14");
INSERT INTO logs VALUES("513"," Admin","1001","Updated an announcement","2022-12-22 09:40:12");
INSERT INTO logs VALUES("514"," Admin","1001","Updated an announcement","2022-12-22 09:40:25");
INSERT INTO logs VALUES("515"," Admin","1001","Error: Attempted to delete an announcement","2022-12-22 09:40:48");
INSERT INTO logs VALUES("516"," Admin","1001","Error: Attempted to delete an announcement","2022-12-22 09:41:45");
INSERT INTO logs VALUES("517"," Admin","1001","Added a new announcement","2022-12-22 09:42:50");
INSERT INTO logs VALUES("518"," Admin","1001","Deleted an announcement","2022-12-22 09:42:53");
INSERT INTO logs VALUES("519"," Admin","1001","Added a new announcement","2022-12-22 09:43:00");
INSERT INTO logs VALUES("520"," Admin","1001","Updated an announcement","2022-12-22 09:43:15");
INSERT INTO logs VALUES("521"," Admin","1001","Deleted an announcement","2022-12-22 09:43:43");
INSERT INTO logs VALUES("522"," Admin","1001","Added a new announcement","2022-12-22 09:45:40");
INSERT INTO logs VALUES("523"," Admin","1001","Added a new announcement","2022-12-22 09:46:34");
INSERT INTO logs VALUES("524"," Admin","1001","Updated an announcement","2022-12-22 09:46:53");
INSERT INTO logs VALUES("525","Guidance","1001","Logged out","2022-12-22 09:51:46");
INSERT INTO logs VALUES("526","Guidance","1001","Logged in the system","2022-12-22 09:51:50");
INSERT INTO logs VALUES("527","Guidance","1001","Logged out","2022-12-22 09:51:53");
INSERT INTO logs VALUES("528","Guidance","1001","Logged in the system","2022-12-22 09:52:03");
INSERT INTO logs VALUES("529","Guidance","1001","Logged out","2022-12-22 09:57:30");
INSERT INTO logs VALUES("530","Guidance","1001","Logged in the system","2022-12-22 09:57:38");
INSERT INTO logs VALUES("531"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-22 16:57:56");
INSERT INTO logs VALUES("532","Guidance","1001","Logged out","2022-12-22 09:58:07");
INSERT INTO logs VALUES("533","Guidance","1001","Logged in the system","2022-12-22 09:58:12");
INSERT INTO logs VALUES("534","Guidance","1001","Logged out","2022-12-22 13:39:46");
INSERT INTO logs VALUES("535","Guidance","1001","Logged in the system","2022-12-22 13:39:55");
INSERT INTO logs VALUES("536"," Admin","1001","Added a new announcement","2022-12-22 13:40:20");
INSERT INTO logs VALUES("537"," Admin","1001","Added a new announcement","2022-12-22 13:40:44");
INSERT INTO logs VALUES("538","Guidance","1001","Logged out","2022-12-22 13:40:57");
INSERT INTO logs VALUES("539","Guidance","1001","Logged in the system","2022-12-22 13:41:06");
INSERT INTO logs VALUES("540","Guidance","1001","Logged out","2022-12-22 14:38:24");
INSERT INTO logs VALUES("541","Guidance","1001","Logged in the system","2022-12-22 14:38:43");
INSERT INTO logs VALUES("542","Guidance","1001","Logged out","2022-12-22 14:40:23");
INSERT INTO logs VALUES("543","Guidance","1001","Logged in the system","2022-12-22 14:40:30");
INSERT INTO logs VALUES("544","Guidance","1001","Logged out","2022-12-22 14:40:34");
INSERT INTO logs VALUES("545","Guidance","1001","Logged in the system","2022-12-22 14:40:42");
INSERT INTO logs VALUES("546","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:22:33");
INSERT INTO logs VALUES("547","Guidance","1001","Logged out","2022-12-22 15:27:12");
INSERT INTO logs VALUES("548","Staff","2000251944","Logged in the system","2022-12-22 15:27:22");
INSERT INTO logs VALUES("549","Staff","2000251944","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:27:43");
INSERT INTO logs VALUES("550","Staff","2000251944","Added a new referral [ ID = 355]   to the referral list","2022-12-22 15:30:43");
INSERT INTO logs VALUES("551","Staff","2000251944","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:31:08");
INSERT INTO logs VALUES("552","Staff","2000251944","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:32:14");
INSERT INTO logs VALUES("553","Staff","2000251944","Logged out","2022-12-22 15:32:19");
INSERT INTO logs VALUES("554","Guidance","1001","Logged in the system","2022-12-22 15:32:23");
INSERT INTO logs VALUES("555","Guidance","1001","Logged out","2022-12-22 15:35:05");
INSERT INTO logs VALUES("556","Guidance","1001","Logged in the system","2022-12-22 15:35:12");
INSERT INTO logs VALUES("557","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:35:25");
INSERT INTO logs VALUES("558","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:36:53");
INSERT INTO logs VALUES("559","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:37:32");
INSERT INTO logs VALUES("560","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:38:50");
INSERT INTO logs VALUES("561","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:41:41");
INSERT INTO logs VALUES("562","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-22 15:47:55");
INSERT INTO logs VALUES("563","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-22 15:48:34");
INSERT INTO logs VALUES("564","Guidance","1001","Logged out","2022-12-22 15:49:01");
INSERT INTO logs VALUES("565","Guidance","1001","Logged in the system","2022-12-22 15:49:07");
INSERT INTO logs VALUES("566"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-22 22:49:58");
INSERT INTO logs VALUES("567","Guidance","1001","Logged out","2022-12-22 15:50:02");
INSERT INTO logs VALUES("568","Guidance","1001","Logged in the system","2022-12-22 15:50:07");
INSERT INTO logs VALUES("569","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-22 15:51:38");
INSERT INTO logs VALUES("570","Guidance","1001","Logged out","2022-12-22 15:51:44");
INSERT INTO logs VALUES("571","Guidance","1001","Logged in the system","2022-12-22 15:51:52");
INSERT INTO logs VALUES("572","Guidance","1001","Logged out","2022-12-22 15:52:33");
INSERT INTO logs VALUES("573","Guidance","1001","Logged in the system","2022-12-22 15:52:38");
INSERT INTO logs VALUES("574","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-22 15:52:52");
INSERT INTO logs VALUES("575","Guidance","1001","Logged out","2022-12-22 15:53:35");
INSERT INTO logs VALUES("576","Guidance","1001","Logged in the system","2022-12-22 15:53:40");
INSERT INTO logs VALUES("577","Guidance","1001","Logged out","2022-12-22 15:54:18");
INSERT INTO logs VALUES("578","Staff","2000253423","Logged in the system","2022-12-22 15:54:24");
INSERT INTO logs VALUES("579","Staff","2000253423","Added a new referral [ ID = 357]   to the referral list","2022-12-22 15:54:37");
INSERT INTO logs VALUES("580","Staff","2000253423","Logged out","2022-12-22 15:54:44");
INSERT INTO logs VALUES("581","Guidance","1001","Logged in the system","2022-12-22 15:54:51");
INSERT INTO logs VALUES("582","Guidance","1001","Logged out","2022-12-22 15:55:06");
INSERT INTO logs VALUES("583","Guidance","1001","Logged in the system","2022-12-22 16:01:28");
INSERT INTO logs VALUES("584","Guidance","1001","Logged out","2022-12-22 16:42:23");
INSERT INTO logs VALUES("585","Guidance","1001","Logged in the system","2022-12-22 16:42:29");
INSERT INTO logs VALUES("586","Guidance","1001","Logged out","2022-12-22 16:49:21");
INSERT INTO logs VALUES("587","Guidance","1001","Logged in the system","2022-12-22 16:49:27");
INSERT INTO logs VALUES("588","Guidance","1001","Logged out","2022-12-22 17:30:10");
INSERT INTO logs VALUES("589","Guidance","1001","Logged in the system","2022-12-22 17:30:17");
INSERT INTO logs VALUES("590","Guidance","1001","Logged out","2022-12-22 17:30:42");
INSERT INTO logs VALUES("591","Guidance","1001","Logged in the system","2022-12-22 17:39:05");
INSERT INTO logs VALUES("592","Guidance","1001","Logged out","2022-12-22 17:42:21");
INSERT INTO logs VALUES("593","Guidance","1001","Logged in the system","2022-12-22 17:42:28");
INSERT INTO logs VALUES("594","Guidance","1001","Logged out","2022-12-22 17:42:39");
INSERT INTO logs VALUES("595","Guidance","1001","Logged in the system","2022-12-22 17:42:44");
INSERT INTO logs VALUES("596","Guidance","1001","Logged out","2022-12-22 17:43:25");
INSERT INTO logs VALUES("597","Guidance","1001","Logged in the system","2022-12-22 17:43:31");
INSERT INTO logs VALUES("598","Guidance","1001","Logged out","2022-12-22 17:43:38");
INSERT INTO logs VALUES("599","Guidance","1001","Logged in the system","2022-12-22 17:43:46");
INSERT INTO logs VALUES("600","Guidance","1001","Logged out","2022-12-22 17:43:55");
INSERT INTO logs VALUES("601","Guidance","1001","Logged in the system","2022-12-22 17:44:05");
INSERT INTO logs VALUES("602","Guidance","1001","Logged out","2022-12-22 17:46:02");
INSERT INTO logs VALUES("603","Guidance","1001","Logged in the system","2022-12-22 17:46:09");
INSERT INTO logs VALUES("604","Guidance","1001","Logged out","2022-12-22 17:47:15");
INSERT INTO logs VALUES("605","Staff","2000253423","Logged in the system","2022-12-22 17:47:22");
INSERT INTO logs VALUES("606","Staff","2000253423","Logged out","2022-12-22 17:47:43");
INSERT INTO logs VALUES("607","Guidance","1001","Logged in the system","2022-12-22 17:47:50");
INSERT INTO logs VALUES("608","Guidance","1001","Logged out","2022-12-22 18:07:06");
INSERT INTO logs VALUES("609","Guidance","1001","Logged in the system","2022-12-22 18:07:12");
INSERT INTO logs VALUES("610","Guidance","1001","Logged out","2022-12-22 18:07:23");
INSERT INTO logs VALUES("611","Guidance","1001","Logged in the system","2022-12-22 18:07:28");
INSERT INTO logs VALUES("612","Guidance","1001","Logged out","2022-12-22 18:28:06");
INSERT INTO logs VALUES("613","Guidance","1001","Logged in the system","2022-12-22 18:28:18");
INSERT INTO logs VALUES("614","Guidance","1001","Logged out","2022-12-22 18:28:39");
INSERT INTO logs VALUES("615","Guidance","1001","Logged in the system","2022-12-22 18:28:45");
INSERT INTO logs VALUES("616","Guidance","1001","Logged out","2022-12-22 18:28:55");
INSERT INTO logs VALUES("617","Guidance","1001","Logged in the system","2022-12-22 18:30:53");
INSERT INTO logs VALUES("618","Guidance","1001","Logged out","2022-12-22 19:03:28");
INSERT INTO logs VALUES("619","Guidance","1001","Logged in the system","2022-12-22 19:03:32");
INSERT INTO logs VALUES("620","Guidance","1001","Logged out","2022-12-22 19:03:35");
INSERT INTO logs VALUES("621","Guidance","1001","Logged in the system","2022-12-22 19:03:40");
INSERT INTO logs VALUES("622","Student","1001","Added a new referral [ ID = 356]   to the referral list","2022-12-22 19:03:55");
INSERT INTO logs VALUES("623","Guidance","1001","Logged out","2022-12-22 19:04:07");
INSERT INTO logs VALUES("624","Guidance","1001","Logged in the system","2022-12-22 19:04:12");
INSERT INTO logs VALUES("625","Guidance","1001","Logged out","2022-12-22 19:22:50");
INSERT INTO logs VALUES("626","Guidance","1001","Logged in the system","2022-12-22 19:22:56");
INSERT INTO logs VALUES("627","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-22 19:23:26");
INSERT INTO logs VALUES("628","Guidance","1001","Logged out","2022-12-22 19:23:32");
INSERT INTO logs VALUES("629","Guidance","1001","Logged in the system","2022-12-22 19:23:37");
INSERT INTO logs VALUES("630","Guidance","1001","Logged out","2022-12-22 19:50:24");
INSERT INTO logs VALUES("631","Guidance","1001","Logged in the system","2022-12-23 08:09:17");
INSERT INTO logs VALUES("632","Guidance","1001","Logged out","2022-12-23 08:12:06");
INSERT INTO logs VALUES("633","Guidance","1001","Logged in the system","2022-12-23 08:12:13");
INSERT INTO logs VALUES("634","Guidance","1001","Logged out","2022-12-23 08:40:42");
INSERT INTO logs VALUES("635","Guidance","1001","Logged in the system","2022-12-23 08:41:05");
INSERT INTO logs VALUES("636","Guidance","1001","Logged out","2022-12-23 08:43:12");
INSERT INTO logs VALUES("637","Guidance","1001","Logged in the system","2022-12-23 08:43:22");
INSERT INTO logs VALUES("638","Guidance","1001","Logged out","2022-12-23 08:43:49");
INSERT INTO logs VALUES("639","Guidance","1001","Logged in the system","2022-12-23 08:43:54");
INSERT INTO logs VALUES("640","Guidance","1001","Logged out","2022-12-23 09:16:31");
INSERT INTO logs VALUES("641","Guidance","1001","Logged in the system","2022-12-23 09:16:52");
INSERT INTO logs VALUES("642","Guidance","1001","Logged out","2022-12-23 09:16:55");
INSERT INTO logs VALUES("643","Guidance","1001","Logged in the system","2022-12-23 09:23:02");
INSERT INTO logs VALUES("644","Guidance","1001","Logged out","2022-12-23 09:39:25");
INSERT INTO logs VALUES("645","Guidance","1001","Logged in the system","2022-12-23 09:39:55");
INSERT INTO logs VALUES("646","Guidance","1001","Logged out","2022-12-23 09:40:18");
INSERT INTO logs VALUES("647","Guidance","1001","Logged in the system","2022-12-23 09:40:24");
INSERT INTO logs VALUES("648","Guidance","1001","Logged out","2022-12-23 09:59:58");
INSERT INTO logs VALUES("649","Guidance","1001","Logged in the system","2022-12-23 10:00:05");
INSERT INTO logs VALUES("650","Guidance","1001","Logged out","2022-12-23 10:15:13");
INSERT INTO logs VALUES("651","Staff","2000253423","Logged in the system","2022-12-23 10:15:18");
INSERT INTO logs VALUES("652","Staff","2000253423","Logged out","2022-12-23 10:26:15");
INSERT INTO logs VALUES("653","Guidance","1001","Logged in the system","2022-12-23 10:26:20");
INSERT INTO logs VALUES("654","Guidance","1001","Logged out","2022-12-23 10:26:44");
INSERT INTO logs VALUES("655","Guidance","1001","Logged in the system","2022-12-23 10:26:46");
INSERT INTO logs VALUES("656","Guidance","1001","Logged out","2022-12-23 10:26:53");
INSERT INTO logs VALUES("657","Staff","2000253423","Logged in the system","2022-12-23 10:27:00");
INSERT INTO logs VALUES("658","Staff","2000253423","Logged out","2022-12-23 10:28:50");
INSERT INTO logs VALUES("659","Guidance","1001","Logged in the system","2022-12-23 10:28:57");
INSERT INTO logs VALUES("660"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 17:29:16");
INSERT INTO logs VALUES("661","Guidance","1001","Logged out","2022-12-23 10:29:47");
INSERT INTO logs VALUES("662","Guidance","1001","Logged in the system","2022-12-23 10:29:51");
INSERT INTO logs VALUES("663","Guidance","1001","Logged out","2022-12-23 10:30:58");
INSERT INTO logs VALUES("664","Guidance","1001","Logged in the system","2022-12-23 10:31:03");
INSERT INTO logs VALUES("665"," Admin","1001","Added a new staff [ ID = 1234334] Nick joshua montemayor to the staff list","2022-12-23 11:02:48");
INSERT INTO logs VALUES("666"," Admin","1001","Deleted the staff [ ID = 1234334] Nick joshua montemayor in the staff list","2022-12-23 11:03:06");
INSERT INTO logs VALUES("667"," Admin","1001","Added a new staff [ ID = 1234334] dasdasdas aaaaaasdfgk to the staff list","2022-12-23 11:03:23");
INSERT INTO logs VALUES("668"," Admin","1001","Deleted the staff [ ID = 1234334] dasdasdas aaaaaasdfgk in the staff list","2022-12-23 11:03:31");
INSERT INTO logs VALUES("669"," Admin","1001","Added a new staff [ ID = 1234334] dasdsdasd sadasd to the staff list","2022-12-23 11:07:45");
INSERT INTO logs VALUES("670"," Admin","1001","Deleted the staff [ ID = 1234334] dasdsdasd sadasd in the staff list","2022-12-23 11:09:36");
INSERT INTO logs VALUES("671"," Admin","1001","Added a new staff [ ID = adsdas] dasdasd sadasdsad to the staff list","2022-12-23 11:09:52");
INSERT INTO logs VALUES("672"," Admin","1001","Updated the details of staff [ ID = 2000257868] Chris Bennan","2022-12-23 12:12:43");
INSERT INTO logs VALUES("673"," Admin","1001","Updated the details of staff [ ID = 2000257868] Chris Bennan","2022-12-23 12:12:56");
INSERT INTO logs VALUES("674"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-23 19:17:11");
INSERT INTO logs VALUES("675"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-23 19:17:29");
INSERT INTO logs VALUES("676","Guidance","1001","Logged out","2022-12-23 14:42:48");
INSERT INTO logs VALUES("677","Guidance","1001","Logged in the system","2022-12-23 14:44:11");
INSERT INTO logs VALUES("678"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 22:06:46");
INSERT INTO logs VALUES("679"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 22:07:24");
INSERT INTO logs VALUES("680"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-23 22:07:48");
INSERT INTO logs VALUES("681"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 22:08:05");
INSERT INTO logs VALUES("682"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 22:12:24");
INSERT INTO logs VALUES("683","Guidance","1001","Logged out","2022-12-23 15:12:35");
INSERT INTO logs VALUES("684","Guidance","1001","Logged in the system","2022-12-23 15:12:58");
INSERT INTO logs VALUES("685","Guidance","1001","Logged out","2022-12-23 15:27:52");
INSERT INTO logs VALUES("686","Guidance","1001","Logged in the system","2022-12-23 15:28:00");
INSERT INTO logs VALUES("687"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-23 22:28:17");
INSERT INTO logs VALUES("688"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 22:41:06");
INSERT INTO logs VALUES("689"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-23 22:41:21");



CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` int(20) NOT NULL,
  `to_user` int(20) NOT NULL,
  `Type` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `info_ID` int(11) NOT NULL,
  `isRead` int(1) NOT NULL,
  `notif_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=401 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO notifications VALUES("390","2000232823","1001","Appointment","113","1","2022-12-23 16:40:11");
INSERT INTO notifications VALUES("391","2000232823","1001","Reminder","113","1","2022-12-23 09:40:24");
INSERT INTO notifications VALUES("392","1001","2000232823","Reminder","113","1","2022-12-23 09:40:24");
INSERT INTO notifications VALUES("393","1001","2000232823","Offense","62","0","2022-12-23 17:29:16");
INSERT INTO notifications VALUES("394","1001","2000232823","Offense","63","0","2022-12-23 22:06:46");
INSERT INTO notifications VALUES("395","1001","2000232823","Offense","64","0","2022-12-23 22:07:24");
INSERT INTO notifications VALUES("396","1001","2000245727","Offense","65","0","2022-12-23 22:07:48");
INSERT INTO notifications VALUES("397","1001","2000232823","Offense","66","0","2022-12-23 22:08:05");
INSERT INTO notifications VALUES("398","1001","2000232823","Offense","67","0","2022-12-23 22:12:24");
INSERT INTO notifications VALUES("399","1001","2000232823","Offense","68","0","2022-12-23 22:41:06");
INSERT INTO notifications VALUES("400","1001","2000232823","Offense","69","0","2022-12-23 22:41:21");



CREATE TABLE `offense_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(150) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `offense_type` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date_created` date NOT NULL,
  `sanction` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `sanction_info` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO offense_monitoring VALUES("65","2000245727","Rowella Bangeles","Major Offense B","nagtapon ng tae","2022-12-23","linisin yung tae","2022-12-20","2022-12-24","1 day","Active","2022-12-23 22:07:48","2022-12-23 22:07:48");



CREATE TABLE `personal_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL DEFAULT 0,
  `timeslot` varchar(255) DEFAULT NULL,
  `timeslot_end` varchar(100) DEFAULT NULL,
  `information` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `app_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `refferals` (
  `ref_id` int(11) NOT NULL AUTO_INCREMENT,
  `reffered_user` int(20) NOT NULL,
  `source` varchar(255) NOT NULL,
  `reffered_by` int(20) NOT NULL,
  `reffered_date` date NOT NULL,
  `nature` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `actions` text NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `Cancel_Reason` varchar(200) DEFAULT NULL,
  `Cancel_Date` date DEFAULT NULL,
  `ref_status` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ref_id`),
  KEY `user_id` (`reffered_user`),
  CONSTRAINT `user_id` FOREIGN KEY (`reffered_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO refferals VALUES("148","356","Student","357","2022-12-22"," Academic, Career,","degssdgsd","fdsfsdfd","fdsfsdf","","","Cancelled","2022-12-23 02:23:09");
INSERT INTO refferals VALUES("149","355","Student","357","2022-12-22"," Personal,","fgds","sdf","sdf","sfasdfdsf","2022-12-23","Cancelled","2022-12-23 15:11:29");



CREATE TABLE `refferals_nature` (
  `ref_id2` int(11) NOT NULL AUTO_INCREMENT,
  `reffered_user2` int(20) NOT NULL,
  `source2` varchar(255) NOT NULL,
  `reffered_by2` int(20) NOT NULL,
  `reffered_date2` date NOT NULL,
  `nature2` varchar(255) NOT NULL,
  `reason2` text NOT NULL,
  `actions2` text NOT NULL,
  `remarks2` varchar(255) NOT NULL,
  `ref_status2` varchar(255) NOT NULL,
  `updated_at2` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ref_id2`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO refferals_nature VALUES("32","357","Student","355","2022-12-16","Academic","Career problem","kinausap ko sya","Problematic","Pending","2022-12-16 14:26:49");
INSERT INTO refferals_nature VALUES("33","357","Student","355","2022-12-16","Career","Career problem","kinausap ko sya","Problematic","Pending","2022-12-16 14:26:49");
INSERT INTO refferals_nature VALUES("34","357","Staff","349","2022-12-16","Academic","abc","abc","","Pending","2022-12-16 14:52:11");
INSERT INTO refferals_nature VALUES("35","357","Student","357","2022-12-22","Academic","afsdfsfdfdsfd","fdsfdfsdfds","dsfdsfsdfsdfsd","Pending","2022-12-22 22:22:33");
INSERT INTO refferals_nature VALUES("36","357","Student","357","2022-12-22","Career","afsdfsfdfdsfd","fdsfdfsdfds","dsfdsfsdfsdfsd","Pending","2022-12-22 22:22:33");
INSERT INTO refferals_nature VALUES("37","357","Student","357","2022-12-22","Personal","afsdfsfdfdsfd","fdsfdfsdfds","dsfdsfsdfsdfsd","Pending","2022-12-22 22:22:33");
INSERT INTO refferals_nature VALUES("38","357","Student","357","2022-12-22","Crisis","afsdfsfdfdsfd","fdsfdfsdfds","dsfdsfsdfsdfsd","Pending","2022-12-22 22:22:33");
INSERT INTO refferals_nature VALUES("39","357","Staff","350","2022-12-22","Academic","adsfsdfds","dsfdsfsd","sdfsdfsdf","Pending","2022-12-22 22:27:43");
INSERT INTO refferals_nature VALUES("40","357","Staff","350","2022-12-22","Career","adsfsdfds","dsfdsfsd","sdfsdfsdf","Pending","2022-12-22 22:27:43");
INSERT INTO refferals_nature VALUES("41","357","Staff","350","2022-12-22","Personal","adsfsdfds","dsfdsfsd","sdfsdfsdf","Pending","2022-12-22 22:27:43");
INSERT INTO refferals_nature VALUES("42","357","Staff","350","2022-12-22","Crisis","adsfsdfds","dsfdsfsd","sdfsdfsdf","Pending","2022-12-22 22:27:43");
INSERT INTO refferals_nature VALUES("43","355","Staff","350","2022-12-22","Academic","asdasdsadsadas","asdsad","sadasdsa","Pending","2022-12-22 22:30:43");
INSERT INTO refferals_nature VALUES("44","355","Staff","350","2022-12-22","Career","asdasdsadsadas","asdsad","sadasdsa","Pending","2022-12-22 22:30:43");
INSERT INTO refferals_nature VALUES("45","355","Staff","350","2022-12-22","Personal","asdasdsadsadas","asdsad","sadasdsa","Pending","2022-12-22 22:30:43");
INSERT INTO refferals_nature VALUES("46","355","Staff","350","2022-12-22","Crisis","asdasdsadsadas","asdsad","sadasdsa","Pending","2022-12-22 22:30:43");
INSERT INTO refferals_nature VALUES("47","357","Staff","350","2022-12-22","Academic","sdasdas","dsadsa","asdasdas","Pending","2022-12-22 22:31:08");
INSERT INTO refferals_nature VALUES("48","357","Staff","350","2022-12-22","Career","sdasdas","dsadsa","asdasdas","Pending","2022-12-22 22:31:08");
INSERT INTO refferals_nature VALUES("49","357","Staff","350","2022-12-22","Academic","sdasdsa","dsadsa","dasdas","Pending","2022-12-22 22:32:14");
INSERT INTO refferals_nature VALUES("50","357","Staff","350","2022-12-22","Career","sdasdsa","dsadsa","dasdas","Pending","2022-12-22 22:32:14");
INSERT INTO refferals_nature VALUES("51","357","Staff","350","2022-12-22","Personal","sdasdsa","dsadsa","dasdas","Pending","2022-12-22 22:32:14");
INSERT INTO refferals_nature VALUES("52","357","Staff","350","2022-12-22","Crisis","sdasdsa","dsadsa","dasdas","Pending","2022-12-22 22:32:14");
INSERT INTO refferals_nature VALUES("53","357","Student","357","2022-12-22","Academic","dsfsdf","dsfsdf","dfsdf","Pending","2022-12-22 22:35:25");
INSERT INTO refferals_nature VALUES("54","357","Student","357","2022-12-22","Career","dsfsdf","dsfsdf","dfsdf","Pending","2022-12-22 22:35:25");
INSERT INTO refferals_nature VALUES("55","357","Student","357","2022-12-22","Personal","dsfsdf","dsfsdf","dfsdf","Pending","2022-12-22 22:35:25");
INSERT INTO refferals_nature VALUES("56","357","Student","357","2022-12-22","Crisis","dsfsdf","dsfsdf","dfsdf","Pending","2022-12-22 22:35:25");
INSERT INTO refferals_nature VALUES("57","357","Student","357","2022-12-22","Academic","sdsadas","dsadas","dsadas","Pending","2022-12-22 22:36:53");
INSERT INTO refferals_nature VALUES("58","357","Student","357","2022-12-22","Career","sdsadas","dsadas","dsadas","Pending","2022-12-22 22:36:53");
INSERT INTO refferals_nature VALUES("59","357","Student","357","2022-12-22","Personal","sdsadas","dsadas","dsadas","Pending","2022-12-22 22:36:53");
INSERT INTO refferals_nature VALUES("60","357","Student","357","2022-12-22","Crisis","sdsadas","dsadas","dsadas","Pending","2022-12-22 22:36:53");
INSERT INTO refferals_nature VALUES("61","357","Student","357","2022-12-22","Academic","rerhgfhgdf","gfdgdf","gdfgdf","Pending","2022-12-22 22:37:32");
INSERT INTO refferals_nature VALUES("62","357","Student","357","2022-12-22","Career","rerhgfhgdf","gfdgdf","gdfgdf","Pending","2022-12-22 22:37:32");
INSERT INTO refferals_nature VALUES("63","357","Student","357","2022-12-22","Crisis","rerhgfhgdf","gfdgdf","gdfgdf","Pending","2022-12-22 22:37:32");
INSERT INTO refferals_nature VALUES("64","357","Student","357","2022-12-22","Academic","asdsad","sadsad","dasdasd","Pending","2022-12-22 22:38:50");
INSERT INTO refferals_nature VALUES("65","357","Student","357","2022-12-22","Career","asdsad","sadsad","dasdasd","Pending","2022-12-22 22:38:50");
INSERT INTO refferals_nature VALUES("66","357","Student","357","2022-12-22","Personal","asdsad","sadsad","dasdasd","Pending","2022-12-22 22:38:50");
INSERT INTO refferals_nature VALUES("67","357","Student","357","2022-12-22","Crisis","asdsad","sadsad","dasdasd","Pending","2022-12-22 22:38:50");
INSERT INTO refferals_nature VALUES("68","357","Student","357","2022-12-22","Academic","gfhdfghdf","fdgdfgdfg","dfgfdgdfgfd","Pending","2022-12-22 22:41:41");
INSERT INTO refferals_nature VALUES("69","357","Student","357","2022-12-22","Career","gfhdfghdf","fdgdfgdfg","dfgfdgdfgfd","Pending","2022-12-22 22:41:41");
INSERT INTO refferals_nature VALUES("70","357","Student","357","2022-12-22","Personal","gfhdfghdf","fdgdfgdfg","dfgfdgdfgfd","Pending","2022-12-22 22:41:41");
INSERT INTO refferals_nature VALUES("71","357","Student","357","2022-12-22","Crisis","gfhdfghdf","fdgdfgdfg","dfgfdgdfgfd","Pending","2022-12-22 22:41:41");
INSERT INTO refferals_nature VALUES("72","355","Student","0","2022-12-22","Academic","sad","asdasdas","asdsadas","Pending","2022-12-22 22:47:55");
INSERT INTO refferals_nature VALUES("73","355","Student","0","2022-12-22","Career","sad","asdasdas","asdsadas","Pending","2022-12-22 22:47:55");
INSERT INTO refferals_nature VALUES("74","355","Student","0","2022-12-22","Personal","sad","asdasdas","asdsadas","Pending","2022-12-22 22:47:55");
INSERT INTO refferals_nature VALUES("75","355","Student","0","2022-12-22","Crisis","sad","asdasdas","asdsadas","Pending","2022-12-22 22:47:55");
INSERT INTO refferals_nature VALUES("76","355","Student","357","2022-12-22","Academic","fdsdf","sdfsdfdsf","sdfsdfsdf","Pending","2022-12-22 22:48:34");
INSERT INTO refferals_nature VALUES("77","355","Student","357","2022-12-22","Career","fdsdf","sdfsdfdsf","sdfsdfsdf","Pending","2022-12-22 22:48:34");
INSERT INTO refferals_nature VALUES("78","355","Student","357","2022-12-22","Personal","fdsdf","sdfsdfdsf","sdfsdfsdf","Pending","2022-12-22 22:48:34");
INSERT INTO refferals_nature VALUES("79","355","Student","357","2022-12-22","Academic","asdsadas","dsadsad","asdasd","Pending","2022-12-22 22:51:38");
INSERT INTO refferals_nature VALUES("80","355","Student","357","2022-12-22","Career","asdsadas","dsadsad","asdasd","Pending","2022-12-22 22:51:38");
INSERT INTO refferals_nature VALUES("81","355","Student","357","2022-12-22","Personal","asdsadas","dsadsad","asdasd","Pending","2022-12-22 22:51:38");
INSERT INTO refferals_nature VALUES("82","355","Student","357","2022-12-22","Crisis","asdsadas","dsadsad","asdasd","Pending","2022-12-22 22:51:38");
INSERT INTO refferals_nature VALUES("83","355","Student","357","2022-12-22","Academic","sdasdsadsad","dsadsa","sadasd","Pending","2022-12-22 22:52:52");
INSERT INTO refferals_nature VALUES("84","355","Student","357","2022-12-22","Career","sdasdsadsad","dsadsa","sadasd","Pending","2022-12-22 22:52:52");
INSERT INTO refferals_nature VALUES("85","355","Student","357","2022-12-22","Personal","sdasdsadsad","dsadsa","sadasd","Pending","2022-12-22 22:52:52");
INSERT INTO refferals_nature VALUES("86","355","Student","357","2022-12-22","Crisis","sdasdsadsad","dsadsa","sadasd","Pending","2022-12-22 22:52:52");
INSERT INTO refferals_nature VALUES("87","357","Staff","353","2022-12-22","Academic","sdasdsa","sadasdsa","sadsadsad","Pending","2022-12-22 22:54:37");
INSERT INTO refferals_nature VALUES("88","357","Staff","353","2022-12-22","Career","sdasdsa","sadasdsa","sadsadsad","Pending","2022-12-22 22:54:37");
INSERT INTO refferals_nature VALUES("89","357","Staff","353","2022-12-22","Personal","sdasdsa","sadasdsa","sadsadsad","Pending","2022-12-22 22:54:37");
INSERT INTO refferals_nature VALUES("90","357","Staff","353","2022-12-22","Crisis","sdasdsa","sadasdsa","sadsadsad","Pending","2022-12-22 22:54:37");
INSERT INTO refferals_nature VALUES("91","356","Student","357","2022-12-22","Academic","degssdgsd","fdsfsdfd","fdsfsdf","Pending","2022-12-23 02:03:54");
INSERT INTO refferals_nature VALUES("92","356","Student","357","2022-12-22","Career","degssdgsd","fdsfsdfd","fdsfsdf","Pending","2022-12-23 02:03:55");
INSERT INTO refferals_nature VALUES("93","355","Student","357","2022-12-22","Personal","fgds","sdf","sdf","Pending","2022-12-23 02:23:26");



CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `refferal_id` int(20) NOT NULL,
  `offense` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO roles VALUES("1","administrator");
INSERT INTO roles VALUES("2","staff");
INSERT INTO roles VALUES("3","student");
INSERT INTO roles VALUES("4","counselor");



CREATE TABLE `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` int(255) NOT NULL DEFAULT 0,
  `reciever` int(255) NOT NULL DEFAULT 0,
  `text_sms` varchar(255) DEFAULT NULL,
  `seen_status` int(11) NOT NULL DEFAULT 0,
  `date_sent` datetime NOT NULL DEFAULT current_timestamp(),
  `group_sms` int(22) NOT NULL DEFAULT 0,
  `delete_status` int(100) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO sms VALUES("164","1","355","hi bangeles","1","2022-12-16 15:31:01","355","0");
INSERT INTO sms VALUES("165","355","1","hi guidance counselor","1","2022-12-16 15:31:54","355","0");



CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` int(20) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `dep_position` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `user_image` varchar(999) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `limit_app` int(100) NOT NULL DEFAULT 0,
  `sms_status` int(100) NOT NULL DEFAULT 0,
  `active_status` int(100) NOT NULL DEFAULT 0,
  `typing` int(11) NOT NULL DEFAULT 0,
  `inv_act` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `id_number` (`id_number`),
  KEY `user-role` (`role`),
  CONSTRAINT `user-role` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=373 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("1","1001","Castor","Mary Faith","","Angeles City","09123456789","Female","0000-00-00","","Guidance Counselor","","","Guidance","","","maryfaith.castor@angeles.sti.edu","MFCastor","1","2022-12-16 08:16:26","0","1","0","0","0");
INSERT INTO users VALUES("349","2000257868","Bennan","Chris","","PORAC","09613688865","","0000-00-00","Academics","Utility","","","Staff","Active","","bennan.257868@angeles.sti.edu.ph","CB257868","2","2022-12-23 19:12:56","0","0","0","0","0");
INSERT INTO users VALUES("350","2000251944","Dela Cruz","Katrina","Womax","ANGELES","09195591329","","0000-00-00","Academics","Kitchen Custodian","","","Staff","Active","","delacruz.251944@angeles.sti.edu.ph","KDC251944","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("351","2000224235","Guzman","Rhodes","Daniella","MAGALANG","09195591329","","0000-00-00","Academics","Lab Custodian","","","Staff","Active","","guzman.224235@angeles.sti.edu.ph","RG224235","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("352","2000251942","Williams","Jane","George","272 SINURA AVENUE ","09195591329","","0000-00-00","Administrative","Administrative Officer","","","Staff","Active","","williams.251942@angeles.sti.edu.ph","JW251942","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("353","2000253423","Buna","David","Santos","121 SAN SIMON, MABALACAT, PAMPANGA","09195591329","","0000-00-00","Administrative","Registrar","","","Staff","Active","","buna.253423@angeles.sti.edu.ph","DB253423","2","2022-12-23 00:48:39","0","0","0","0","0");
INSERT INTO users VALUES("354","2000432424","Parker","Kevin","","123 PAMPANG AVENUE BALIBAGO","09195591329","","0000-00-00","Administrative","Record","","","Staff","Active","","parker.432424@angeles.sti.edu.ph","KP432424","2","2022-12-23 00:22:58","0","0","0","0","0");
INSERT INTO users VALUES("355","2000245727","Bangeles","Rowella","Mallari","213 sta ana st. angeles city","09121312331","","0000-00-00","","","HUMMS","Grade 11","Student","Active","","bangeles.245727@angeles.sti.edu.ph","RB245727","3","2022-12-23 15:41:12","0","0","0","0","1");
INSERT INTO users VALUES("356","2000258351","Baquiran","Charmaine"," ","B11 L13 PHASE 4 COBAL  ST. MANSFIELD RESIDENCES STO DOMINGO, ANGELES CITY    ","09123456789","","0000-00-00","","","CUART","Grade 11","Student","Active","","baquiran.258351@angeles.sti.edu.ph","CB258351","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("357","2000232823","Acub","Marqueyza","Butic","03 LAURA ST. BRGY. LAKANDULA       MABALACAT CITY","09217112098","","0000-00-00","","","MAWD","Grade 12","Student","Active","","acub.232823@angeles.sti.edu.ph","MA232823","3","2022-12-23 16:40:11","1","0","0","0","1");
INSERT INTO users VALUES("358","2000232816","Acub","Rina Elhym","Butic","03 LAURA ST. BRGY LAKANDULA       MABALACAT CITY","09217238346","","0000-00-00","","","CCTECH","Grade 12","Student","Active","","acub.232816@angeles.sti.edu.ph","REA232816","3","2022-12-22 23:58:18","0","0","0","0","0");
INSERT INTO users VALUES("359","2000257346","Abadies","Gefel","Nabor","BLK.8 LOT 16 SOLANA FRONTERA FLAMINGO ST. SAPALIBUTAD   ANGELES","09269979985","","0000-00-00","","","BSTM","1st Year","Student","Active","","abadies.257346@angeles.sti.edu.ph","GA257346","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("360","2000197721","Abasolo","Richard","Imperial","34-24 SARITA ST. DIAMOND SUBD.     ANGELES CITY","09199925436","","0000-00-00","","","BSTM","3rd Year","Student","Active","","abasolo.197721@angeles.sti.edu.ph","RA197721","3","2022-12-23 16:37:13","0","0","0","0","0");
INSERT INTO users VALUES("361","2000155605","Abasula","Criselda","Oloya","B45 L65 MAPAGMALASAKIT ST. FIESTA COMMUNITIES MANIBAUG PORAC PAMP.  ","09261696596","","0000-00-00","","","BSTM","3rd Year","Student","Active","","abasula.155605@angeles.sti.edu.ph","CA155605","3","2022-12-22 23:58:06","0","0","0","0","0");
INSERT INTO users VALUES("362","2000273259","Abella","Ella Mae","Ongray","13033 PERAS ST. DAU HOMESITE     MABALACAT","09183593384","","0000-00-00","","","BSTM","1st Year","Student","Active","","abella.273259@angeles.sti.edu.ph","EMA273259","3","2022-12-23 00:22:54","0","0","0","0","0");
INSERT INTO users VALUES("363","2000266053","Abog","Jezza","Reyes","BLK. 19 LOT 13 17 ST MRC BRGY. MAWAQUE MABALACAT   ANGELES","09475861724","","0000-00-00","","","BSTM","1st Year","Student","Active","","abog.266053@angeles.sti.edu.ph","JA266053","3","2022-12-23 00:22:59","0","0","0","0","0");
INSERT INTO users VALUES("364","2000109278","Acar","Mark Joseph","Damalia","184 IPIL-IPIL PUROK 7 PULONG MARAGUL       ANGELES CITY","09265333300","","0000-00-00","","","BSIT","2nd Year","Student","Active","","acar.109278@angeles.sti.edu.ph","MJA109278","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("365","2000200086","Alan","Gerald"," ","BLK 19 LOT 31 ANA ST. XEVERA BRGY TABUN     MABALACAT","09303434579","","0000-00-00","","","BSBAOM","3rd Year","Student","Active","","alan.200086@angeles.sti.edu.ph","GA200086","3","2022-12-23 00:29:43","0","0","0","0","0");
INSERT INTO users VALUES("366","2000041648","Alonzo","Ruzzel Justin"," ","785 MABINI STREET PLARIDEL 1 MALABANIAS       ANGELES CITY","09752434037","","0000-00-00","","","BSHM","4th Year","Student","Active","","alonzo.041648@angeles.sti.edu.ph","RJA041648","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("367","2000083331","Anciano","Erica Mae","Sotero","JAOVIL       ANGELES CITY","09355832215","","0000-00-00","","","BSHM","3rd Year","Student","Active","","anciano.083331@angeles.sti.edu.ph","EMA083331","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("368","2000080306","Anore","Justine Andrielle","Ocampo","31-14 SY OROSA ST. DIAMOND SUB. BALIBAGO   ANGELES CITY","09167416756","","0000-00-00","","","BSHM","3rd Year","Student","Active","","anore.080306@angeles.sti.edu.ph","JAA080306","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("372","0","sadasdsad","dasdasd","sadasd","sadsadsa","asdasd","","","Academics","Kitchen Custodian","","","Staff","Active","","sadasdsad.adsdas@angeles.sti.edu.ph","DSadsdas","2","2022-12-23 18:09:52","0","0","0","0","0");

