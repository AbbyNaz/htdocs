

CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_number` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO appointment_history VALUES("81","74","bully","Completed","2022-12-16","2022-12-16 15:21:56","2000245727");
INSERT INTO appointment_history VALUES("82","74","bully","Completed","2022-12-16","2022-12-16 15:21:56","2000245727");
INSERT INTO appointment_history VALUES("83","75","asd","Cancelled","2022-12-19","2022-12-20 01:23:53","0");
INSERT INTO appointment_history VALUES("84","75","asdd","Cancelled","2022-12-19","2022-12-20 01:36:44","0");
INSERT INTO appointment_history VALUES("85","78","","Cancelled","2022-12-20","2022-12-20 17:46:24","0");



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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO appointments VALUES("78","9:00 am","10:00 am","2022-12-22","Staff","0","2000257868","Bennan, Chris","ASDSDSDA","Walk-in","test","Cancelled","2022-12-20 17:46:22","no link");



CREATE TABLE `articles` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ARTICLECODE` varchar(15) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PICTURE` text NOT NULL,
  `DURATION` varchar(15) NOT NULL,
  `ART_STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO articles VALUES("2","221128-160540-4","Growth Mindset","There’s a fine line between instilling discipline through toughening acts and a fear of failure by punishing infractions. Unfortunately, most people can attest that this line has been blurred and that the notion of failure, while common, is often viewed not just as a negative but something to be ashamed of. In some cultures, around the world, it is treated as an extremely terrible thing. Children are taught to not just fear failure, but actively avoid it.","uploads/dec1.png","December","Active");
INSERT INTO articles VALUES("3","221128-222651-4","Diversity, Equity, Inclusion","Diversity exists when you go above and beyond being aware of differences or accepting differences to the point of actively including people who are different from you. Diversity is learning from our differences to make the whole community a better place. It is a combination of our differences that shape our view of the world, our perspective and our approach.","uploads/dec2.png","December","Active");
INSERT INTO articles VALUES("4","221129-144937-9","Self Care","have a significant impact on how we view ourselves.  Sometimes we look in the mirror and don’t like who we see.  It is important to remember that our reflection is two dimensional, we do not see the whole picture of ourselves, yet we are the ones who judge most harshly. The following article provides 3 strategies to help you strengthen your self-esteem.","uploads/dec3.jpg","December","Active");
INSERT INTO articles VALUES("6","221214-145526-1","article a","abecd","uploads/article-1.png","December","Active");



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
) ENGINE=InnoDB AUTO_INCREMENT=458 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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



CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` int(20) NOT NULL,
  `to_user` int(20) NOT NULL,
  `Type` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `info_ID` int(11) NOT NULL,
  `isRead` int(1) NOT NULL,
  `notif_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO notifications VALUES("23","1001","2000232823","Offense","58","0","2022-12-21 13:08:15");



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
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




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
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO refferals_nature VALUES("32","357","Student","355","2022-12-16","Academic","Career problem","kinausap ko sya","Problematic","Pending","2022-12-16 14:26:49");
INSERT INTO refferals_nature VALUES("33","357","Student","355","2022-12-16","Career","Career problem","kinausap ko sya","Problematic","Pending","2022-12-16 14:26:49");
INSERT INTO refferals_nature VALUES("34","357","Staff","349","2022-12-16","Academic","abc","abc","","Pending","2022-12-16 14:52:11");



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
) ENGINE=InnoDB AUTO_INCREMENT=369 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("1","1001","Castor","Mary Faith","","Angeles City","09123456789","Female","","","Guidance Counselor","","","Guidance","","","maryfaith.castor@angeles.sti.edu","MFCastor","1","2022-12-16 08:16:26","0","1","0","0","0");
INSERT INTO users VALUES("349","2000257868","Bennan","Chris","","PORAC","09613688865","","","Academics","Instructor","","","Staff","Active","","bennan.257868@angeles.sti.edu.ph","CB257868","2","2022-12-20 16:24:31","1","0","0","0","0");
INSERT INTO users VALUES("350","2000251944","Dela Cruz","Katrina","Womax","ANGELES","09195591329","","","Academics","Kitchen Custodian","","","Staff","Active","","delacruz.251944@angeles.sti.edu.ph","KDC251944","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("351","2000224235","Guzman","Rhodes","Daniella","MAGALANG","09195591329","","","Academics","Lab Custodian","","","Staff","Active","","guzman.224235@angeles.sti.edu.ph","RG224235","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("352","2000251942","Williams","Jane","George","272 SINURA AVENUE ","09195591329","","","Administrative","Administrative Officer","","","Staff","Active","","williams.251942@angeles.sti.edu.ph","JW251942","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("353","2000253423","Buna","David","Santos","121 SAN SIMON, MABALACAT, PAMPANGA","09195591329","","","Administrative","Registrar","","","Staff","Active","","buna.253423@angeles.sti.edu.ph","DB253423","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("354","2000432424","Parker","Kevin","","123 PAMPANG AVENUE BALIBAGO","09195591329","","","Administrative","Record","","","Staff","Active","","parker.432424@angeles.sti.edu.ph","KP432424","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("355","2000245727","Bangeles","Rowella","Mallari","213 sta ana st. angeles city","09121312331","","","","","HUMMS","Grade 11","Student","Active","","bangeles.245727@angeles.sti.edu.ph","RB245727","3","2022-12-19 22:29:55","1","0","0","0","1");
INSERT INTO users VALUES("356","2000258351","Baquiran","Charmaine"," ","B11 L13 PHASE 4 COBAL  ST. MANSFIELD RESIDENCES STO DOMINGO, ANGELES CITY    ","09123456789","","","","","CUART","Grade 11","Student","Active","","baquiran.258351@angeles.sti.edu.ph","CB258351","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("357","2000232823","Acub","Marqueyza","Butic","03 LAURA ST. BRGY. LAKANDULA       MABALACAT CITY","09217112098","","","","","MAWD","Grade 12","Student","Active","","acub.232823@angeles.sti.edu.ph","MA232823","3","2022-12-20 15:48:08","1","0","0","0","1");
INSERT INTO users VALUES("358","2000232816","Acub","Rina Elhym","Butic","03 LAURA ST. BRGY LAKANDULA       MABALACAT CITY","09217238346","","","","","CCTECH","Grade 12","Student","Active","","acub.232816@angeles.sti.edu.ph","REA232816","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("359","2000257346","Abadies","Gefel","Nabor","BLK.8 LOT 16 SOLANA FRONTERA FLAMINGO ST. SAPALIBUTAD   ANGELES","09269979985","","","","","BSTM","1st Year","Student","Active","","abadies.257346@angeles.sti.edu.ph","GA257346","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("360","2000197721","Abasolo","Richard","Imperial","34-24 SARITA ST. DIAMOND SUBD.     ANGELES CITY","09199925436","","","","","BSTM","3rd Year","Student","Active","","abasolo.197721@angeles.sti.edu.ph","RA197721","3","2022-12-20 16:03:54","1","0","0","0","0");
INSERT INTO users VALUES("361","2000155605","Abasula","Criselda","Oloya","B45 L65 MAPAGMALASAKIT ST. FIESTA COMMUNITIES MANIBAUG PORAC PAMP.  ","09261696596","","","","","BSTM","3rd Year","Student","Active","","abasula.155605@angeles.sti.edu.ph","CA155605","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("362","2000273259","Abella","Ella Mae","Ongray","13033 PERAS ST. DAU HOMESITE     MABALACAT","09183593384","","","","","BSTM","1st Year","Student","Active","","abella.273259@angeles.sti.edu.ph","EMA273259","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("363","2000266053","Abog","Jezza","Reyes","BLK. 19 LOT 13 17 ST MRC BRGY. MAWAQUE MABALACAT   ANGELES","09475861724","","","","","BSTM","1st Year","Student","Active","","abog.266053@angeles.sti.edu.ph","JA266053","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("364","2000109278","Acar","Mark Joseph","Damalia","184 IPIL-IPIL PUROK 7 PULONG MARAGUL       ANGELES CITY","09265333300","","","","","BSIT","2nd Year","Student","Active","","acar.109278@angeles.sti.edu.ph","MJA109278","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("365","2000200086","Alan","Gerald"," ","BLK 19 LOT 31 ANA ST. XEVERA BRGY TABUN     MABALACAT","09303434579","","","","","BSBAOM","3rd Year","Student","Active","","alan.200086@angeles.sti.edu.ph","GA200086","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("366","2000041648","Alonzo","Ruzzel Justin"," ","785 MABINI STREET PLARIDEL 1 MALABANIAS       ANGELES CITY","09752434037","","","","","BSHM","4th Year","Student","Active","","alonzo.041648@angeles.sti.edu.ph","RJA041648","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("367","2000083331","Anciano","Erica Mae","Sotero","JAOVIL       ANGELES CITY","09355832215","","","","","BSHM","3rd Year","Student","Active","","anciano.083331@angeles.sti.edu.ph","EMA083331","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("368","2000080306","Anore","Justine Andrielle","Ocampo","31-14 SY OROSA ST. DIAMOND SUB. BALIBAGO   ANGELES CITY","09167416756","","","","","BSHM","3rd Year","Student","Active","","anore.080306@angeles.sti.edu.ph","JAA080306","3","2022-12-16 14:09:31","0","0","0","0","0");

