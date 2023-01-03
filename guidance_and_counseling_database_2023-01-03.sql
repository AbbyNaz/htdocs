

CREATE TABLE `announcements` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `duration` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO announcements VALUES("18","New Job Fair for Tourism Students","the job fair is located at the sm clark","3","Inactive","2022-12-27");



CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timeslot` varchar(255) NOT NULL,
  `timeslot_end` varchar(100) NOT NULL,
  `date` varchar(150) NOT NULL,
  `user_type` varchar(150) NOT NULL,
  `ref_id` int(20) NOT NULL,
  `id_number` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nature` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `appointment_type` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `app_status` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `meeting_link` varchar(500) NOT NULL,
  `app_by` int(2) NOT NULL,
  `app_id` int(11) NOT NULL,
  `cancel_reason` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4;

INSERT INTO appointment_history VALUES("131","9:00 am","10:00 am","2022-12-28","Student","0","2000245727","Bangeles, Rowella","Academic,Career,Personal","test","Walk-in","test","Cancelled","2022-12-28 18:13:26","no link","1","122","sadasfasfaddsfd","2022-12-28");
INSERT INTO appointment_history VALUES("132","9:00 am","10:00 am","2022-12-28","Student","0","2000245727","Bangeles, Rowella","Academic,Career,Personal","test","Walk-in","test","Cancelled","2022-12-28 18:14:25","no link","1","123","just cancel","2022-12-28");
INSERT INTO appointment_history VALUES("133","9:00 am","10:00 am","2022-12-28","Student","0","2000245727","Bangeles, Rowella","Academic,Career,Personal,Crisis","test","Walk-in","test","Completed","2022-12-28 18:28:39","no link","1","125","","2022-12-28");
INSERT INTO appointment_history VALUES("134","9:00 am","10:00 am","2022-12-28","Student ","154","2000245727","Rowella Bangeles","Academic, Career, Personal, Crisis","test","Walk-in","test","Completed Referral","2022-12-28 18:54:41","no link","1","126","","2022-12-28");
INSERT INTO appointment_history VALUES("135","9:00 am","10:00 am","2022-12-29","","0","0","Rowella Bangeles","","test","Walk-in","test","Cancelled","2022-12-28 22:43:59","","0","129","fffdfdfdfd","2022-12-28");
INSERT INTO appointment_history VALUES("136","9:00 am","10:00 am","2022-12-29","Student","0","2000232823","Marqueyza Acub","","test","Walk-in","test","Cancelled","2022-12-28 21:51:57","","0","127","sdfggdfg","2022-12-28");
INSERT INTO appointment_history VALUES("137","9:00 am","10:00 am","2022-12-29","Student","0","2000245727","Rowella Bangeles","","test","Walk-in","test","Cancelled","2022-12-28 22:46:05","","0","130","gfddgdfgfdgdfg","2022-12-28");
INSERT INTO appointment_history VALUES("138","11:00 am","2:00 pm","2022-12-29","","0","0","Rowella Bangeles","","test","Walk-in","ASDSADSD","Cancelled","2022-12-28 22:48:24","","0","132","utrfkm jhyg","2022-12-28");
INSERT INTO appointment_history VALUES("139","9:00 am","10:00 am","2022-12-29","Student","0","2000232823","Marqueyza Acub","","test","Walk-in","test","Cancelled","2022-12-28 22:46:04","","0","128","just cancel","2022-12-30");
INSERT INTO appointment_history VALUES("140","9:00 am","","2022-12-30","Staff","0","2000257868","Chris Bennan","","sergrh","Walk-in","hrhrhrh","Cancelled","2022-12-30 15:50:24","","0","136","awdawdawd","2022-12-30");
INSERT INTO appointment_history VALUES("141","11:00 am","","2022-12-29","Staff","0","2000253423","David Buna","","test","Walk-in","test","Cancelled","2022-12-28 22:50:45","","0","133","dadadawd","2022-12-30");
INSERT INTO appointment_history VALUES("142","9:00 am","10:00 am","2023-01-04","Student","0","2000245727","Rowella Bangeles","","fsefsef","Walk-in","fsefsef","Cancelled","2022-12-30 18:32:30","","0","138","dadadw","2022-12-30");
INSERT INTO appointment_history VALUES("143","9:00 am","","2022-12-30","Staff","0","2000257868","Chris Bennan","","adawd","Walk-in","dawdd","No Response","2023-01-03 18:04:09","","0","140","","2023-01-03");
INSERT INTO appointment_history VALUES("144","9:00 am","","2022-12-30","Staff","0","2000257868","Chris Bennan","","adawd","Walk-in","dawdd","No Response","2023-01-03 18:04:09","","0","141","","2023-01-03");



CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timeslot` varchar(255) NOT NULL,
  `timeslot_end` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `user_type` varchar(150) NOT NULL,
  `ref_id` int(20) DEFAULT 0,
  `id_number` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nature` varchar(500) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `appointment_type` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL,
  `app_status` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `meeting_link` varchar(255) NOT NULL,
  `app_by` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4;

INSERT INTO appointments VALUES("142","9:00 am","10:00 am","2023-01-03","Student","0","2000245727","Rowella Bangeles","","dwadwad","Walk-in","lhktrhpotjh","In Review","2022-12-30 18:46:28","","0");
INSERT INTO appointments VALUES("143","9:00 am","10:00 am","2023-01-03","Student","0","2000245727","Rowella Bangeles","","dwadwad","Walk-in","lhktrhpotjh","In Review","2022-12-30 18:46:28","","0");



CREATE TABLE `articles` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ARTICLECODE` varchar(15) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PICTURE` text NOT NULL,
  `DURATION` varchar(15) NOT NULL,
  `ART_STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO articles VALUES("2","221128-160540-4","Growth Mindset","There’s a fine line between instilling discipline through toughening acts and a fear of failure by punishing infractions. Unfortunately, most people can attest that this line has been blurred and that the notion of failure, while common, is often viewed not just as a negative but something to be ashamed of. In some cultures, around the world, it is treated as an extremely terrible thing. Children are taught to not just fear failure, but actively avoid it.","uploads/dec1.png","January","Active");
INSERT INTO articles VALUES("3","221128-222651-4","Diversity, Equity, Inclusion","Diversity exists when you go above and beyond being aware of differences or accepting differences to the point of actively including people who are different from you. Diversity is learning from our differences to make the whole community a better place. It is a combination of our differences that shape our view of the world, our perspective and our approach.","uploads/dec2.png","January","Active");
INSERT INTO articles VALUES("4","221129-144937-9","Self Care","have a significant impact on how we view ourselves.  Sometimes we look in the mirror and don’t like who we see.  It is important to remember that our reflection is two dimensional, we do not see the whole picture of ourselves, yet we are the ones who judge most harshly. The following article provides 3 strategies to help you strengthen your self-esteem.","uploads/dec3.jpg","January","Active");
INSERT INTO articles VALUES("6","221214-145526-1","article a","abecd","uploads/article-1.png","December","Active");
INSERT INTO articles VALUES("7","221222-012816-7","dadawd","dwadwadwa","uploads/article-1.png","December","Active");



CREATE TABLE `autobackupdetails` (
  `UseAuto` int(10) NOT NULL DEFAULT 0,
  `Days` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO autobackupdetails VALUES("1","1");



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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO inventory VALUES("20","2022","1st semester","","Rowella","Mallari","Bangeles","2000245727","","HUMMS","row","FILIPINO","Female","SINGLE","Roman Catholic","2022-12-14","09121312331","bangeles.245727@angeles.sti.edu.ph","","","","","","","","0","No","","","Married","","","","","","","0","","","","","","","","0.00","","0","","","","","","","","0.00","","0","","","","","0","","","","","0","","","","","","","","","","","","","","","","","","","","","2022-12-16");
INSERT INTO inventory VALUES("21","2022","1st semester","","Marqueyza","Butic","Acub","2000232823","","MAWD","abby","FILIPINO","","SINGLE","Roman Catholic","2022-12-07","09217112098","acub.232823@angeles.sti.edu.ph","","","","","","","","0","No","","","Married","","","","","","","0","","","","","","","","0.00","","0","","","","","","","","0.00","","0","","","","","0","","","","","0","","","","","","","","","","","","","","","","","","","","","2022-12-16");
INSERT INTO inventory VALUES("22","2022","2nd semester","","Abigail","Macales","Nazal","2000092923","","BSIT","abby","Filipino","Female","Single","Roman Catholic","2000-09-04","19182806421","Abbynazal4@gmail.com","Abbynazal4@gmail.com","","Malabanias","","","","","0","No","","","Married","","","","","","","0","","","","","","","","0.00","","0","","","","","","","","0.00","","0","","","","","0","","","","","0","","","","","","","","","","","","","","","","","","","","","2022-12-27");



CREATE TABLE `logs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user` varchar(300) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `action_made` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1136 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO logs VALUES("690","Guidance","1001","Logged out","2022-12-23 17:00:06");
INSERT INTO logs VALUES("691","Guidance","1001","Logged in the system","2022-12-23 17:00:10");
INSERT INTO logs VALUES("692","Guidance","1001","Logged out","2022-12-23 17:00:21");
INSERT INTO logs VALUES("693","Guidance","1001","Logged in the system","2022-12-23 17:00:26");
INSERT INTO logs VALUES("694"," Admin","1001","Updated an announcement","2022-12-23 17:00:44");
INSERT INTO logs VALUES("695"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-24 00:10:45");
INSERT INTO logs VALUES("696"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-24 00:11:10");
INSERT INTO logs VALUES("697"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-24 00:11:37");
INSERT INTO logs VALUES("698"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-24 00:12:04");
INSERT INTO logs VALUES("699"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-24 00:12:36");
INSERT INTO logs VALUES("700"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-24 00:19:31");
INSERT INTO logs VALUES("701","Guidance","1001","Logged out","2022-12-23 17:40:02");
INSERT INTO logs VALUES("702","Guidance","1001","Logged in the system","2022-12-23 17:40:08");
INSERT INTO logs VALUES("703","Guidance","1001","Logged out","2022-12-23 17:44:19");
INSERT INTO logs VALUES("704","Staff","2000257868","Logged in the system","2022-12-23 17:44:29");
INSERT INTO logs VALUES("705","Staff","2000257868","Logged out","2022-12-23 17:59:01");
INSERT INTO logs VALUES("706","Guidance","1001","Logged in the system","2022-12-23 17:59:06");
INSERT INTO logs VALUES("707","Guidance","1001","Logged out","2022-12-23 18:04:03");
INSERT INTO logs VALUES("708","Guidance","1001","Logged in the system","2022-12-23 18:04:05");
INSERT INTO logs VALUES("709","Guidance","1001","Logged in the system","2022-12-24 06:42:33");
INSERT INTO logs VALUES("710","Guidance","1001","Logged out","2022-12-24 06:44:20");
INSERT INTO logs VALUES("711","Guidance","1001","Logged in the system","2022-12-24 06:45:36");
INSERT INTO logs VALUES("712","Guidance","1001","Logged out","2022-12-24 06:45:56");
INSERT INTO logs VALUES("713","Staff","2000257868","Logged in the system","2022-12-24 06:46:02");
INSERT INTO logs VALUES("714","Staff","2000257868","Logged out","2022-12-24 07:47:55");
INSERT INTO logs VALUES("715","Guidance","1001","Logged in the system","2022-12-24 17:54:59");
INSERT INTO logs VALUES("716","Guidance","1001","Logged out","2022-12-24 17:55:03");
INSERT INTO logs VALUES("717","Guidance","1001","Logged in the system","2022-12-24 17:55:33");
INSERT INTO logs VALUES("718","Guidance","1001","Logged in the system","2022-12-24 17:55:49");
INSERT INTO logs VALUES("719","Guidance","1001","Logged out","2022-12-24 17:56:40");
INSERT INTO logs VALUES("720","Guidance","1001","Logged in the system","2022-12-24 17:56:46");
INSERT INTO logs VALUES("721","Guidance","1001","Logged out","2022-12-24 17:57:05");
INSERT INTO logs VALUES("722","Guidance","1001","Logged in the system","2022-12-24 17:57:10");
INSERT INTO logs VALUES("723","Guidance","1001","Logged in the system","2022-12-25 12:30:09");
INSERT INTO logs VALUES("724","Guidance","1001","Logged out","2022-12-25 12:30:13");
INSERT INTO logs VALUES("725","Guidance","1001","Logged in the system","2022-12-25 12:30:17");
INSERT INTO logs VALUES("726","Guidance","1001","Logged in the system","2022-12-25 12:42:38");
INSERT INTO logs VALUES("727","Guidance","1001","Logged out","2022-12-25 13:08:03");
INSERT INTO logs VALUES("728","Guidance","1001","Logged in the system","2022-12-25 13:12:08");
INSERT INTO logs VALUES("729","Guidance","1001","Logged out","2022-12-25 13:17:26");
INSERT INTO logs VALUES("730","Guidance","1001","Logged in the system","2022-12-25 13:17:31");
INSERT INTO logs VALUES("731","Guidance","1001","Logged out","2022-12-25 13:51:53");
INSERT INTO logs VALUES("732","Guidance","1001","Logged in the system","2022-12-25 13:51:56");
INSERT INTO logs VALUES("733","Guidance","1001","Logged in the system","2022-12-25 15:03:44");
INSERT INTO logs VALUES("734","Guidance","1001","Logged in the system","2022-12-25 16:55:17");
INSERT INTO logs VALUES("735","Guidance","1001","Logged in the system","2022-12-26 10:44:23");
INSERT INTO logs VALUES("736","Guidance","1001","Logged in the system","2022-12-26 17:00:44");
INSERT INTO logs VALUES("737","Guidance","1001","Logged out","2022-12-26 17:23:17");
INSERT INTO logs VALUES("738","Guidance","1001","Logged in the system","2022-12-26 17:23:22");
INSERT INTO logs VALUES("739","Guidance","1001","Logged in the system","2022-12-26 17:31:20");
INSERT INTO logs VALUES("740","Guidance","1001","Logged in the system","2022-12-27 02:18:31");
INSERT INTO logs VALUES("741"," Admin","1001","Added a new offense on [ ID = 2000257346] Gefel Abadies to the offense list","2022-12-27 09:19:56");
INSERT INTO logs VALUES("742"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-27 09:20:11");
INSERT INTO logs VALUES("743"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-27 09:20:24");
INSERT INTO logs VALUES("744"," Admin","1001","Added a new offense on [ ID = 2000257346] Gefel Abadies to the offense list","2022-12-27 09:21:06");
INSERT INTO logs VALUES("745"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-27 09:21:20");
INSERT INTO logs VALUES("746","Guidance","1001","Logged out","2022-12-27 02:21:43");
INSERT INTO logs VALUES("747","Guidance","1001","Logged in the system","2022-12-27 02:21:54");
INSERT INTO logs VALUES("748"," Admin","1001","Added a new student [ ID = 2000092923] Abigail Nazal to the students list","2022-12-27 02:22:26");
INSERT INTO logs VALUES("749","Guidance","1001","Logged out","2022-12-27 02:28:46");
INSERT INTO logs VALUES("750","Guidance","1001","Logged in the system","2022-12-27 02:29:03");
INSERT INTO logs VALUES("751","Guidance","1001","Logged out","2022-12-27 02:29:06");
INSERT INTO logs VALUES("752","Guidance","1001","Logged in the system","2022-12-27 02:29:18");
INSERT INTO logs VALUES("753","","2000092923","Individual Inventory Added by [ ID = 2000092923] Abigail Nazal","2022-12-27 02:33:51");
INSERT INTO logs VALUES("754","Guidance","1001","Logged out","2022-12-27 02:34:21");
INSERT INTO logs VALUES("755","Guidance","1001","Logged in the system","2022-12-27 02:34:48");
INSERT INTO logs VALUES("756","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-27 02:36:28");
INSERT INTO logs VALUES("757","Guidance","1001","Logged out","2022-12-27 02:36:42");
INSERT INTO logs VALUES("758","Guidance","1001","Logged in the system","2022-12-27 02:36:49");
INSERT INTO logs VALUES("759","Guidance","1001","Logged out","2022-12-27 02:37:38");
INSERT INTO logs VALUES("760","Guidance","1001","Logged in the system","2022-12-27 02:37:45");
INSERT INTO logs VALUES("761","Guidance","1001","Logged out","2022-12-27 02:37:50");
INSERT INTO logs VALUES("762","Guidance","1001","Logged in the system","2022-12-27 02:39:17");
INSERT INTO logs VALUES("763","Guidance","1001","Logged out","2022-12-27 02:39:26");
INSERT INTO logs VALUES("764","Guidance","1001","Logged in the system","2022-12-27 02:39:32");
INSERT INTO logs VALUES("765","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-27 02:41:32");
INSERT INTO logs VALUES("766","Guidance","1001","Logged out","2022-12-27 02:42:20");
INSERT INTO logs VALUES("767","Guidance","1001","Logged in the system","2022-12-27 02:42:25");
INSERT INTO logs VALUES("768","Guidance","1001","Logged out","2022-12-27 02:44:16");
INSERT INTO logs VALUES("769","Guidance","1001","Logged in the system","2022-12-27 02:44:21");
INSERT INTO logs VALUES("770","Guidance","1001","Logged out","2022-12-27 02:44:32");
INSERT INTO logs VALUES("771","Guidance","1001","Logged in the system","2022-12-27 02:44:36");
INSERT INTO logs VALUES("772","Guidance","1001","Logged in the system","2022-12-27 04:39:47");
INSERT INTO logs VALUES("773","Guidance","1001","Logged out","2022-12-27 04:39:57");
INSERT INTO logs VALUES("774","Guidance","1001","Logged in the system","2022-12-27 04:52:05");
INSERT INTO logs VALUES("775"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-27 11:53:06");
INSERT INTO logs VALUES("776"," Admin","1001","Added a new announcement","2022-12-27 04:53:55");
INSERT INTO logs VALUES("777","Guidance","1001","Logged out","2022-12-27 05:03:03");
INSERT INTO logs VALUES("778","Guidance","1001","Logged in the system","2022-12-27 05:03:08");
INSERT INTO logs VALUES("779","Guidance","1001","Logged out","2022-12-27 05:03:24");
INSERT INTO logs VALUES("780","Guidance","1001","Logged in the system","2022-12-27 05:03:30");
INSERT INTO logs VALUES("781","Guidance","1001","Logged out","2022-12-27 05:04:09");
INSERT INTO logs VALUES("782","Guidance","1001","Logged in the system","2022-12-27 05:04:14");
INSERT INTO logs VALUES("783","Guidance","1001","Logged out","2022-12-27 05:04:41");
INSERT INTO logs VALUES("784","Guidance","1001","Logged in the system","2022-12-27 05:04:46");
INSERT INTO logs VALUES("785"," Admin","1001","Added a new offense on [ ID = 2000092923] Abigail Nazal to the offense list","2022-12-27 12:07:58");
INSERT INTO logs VALUES("786","Guidance","1001","Logged out","2022-12-27 05:09:57");
INSERT INTO logs VALUES("787","Guidance","1001","Logged in the system","2022-12-27 05:10:02");
INSERT INTO logs VALUES("788","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-27 05:11:08");
INSERT INTO logs VALUES("789","Guidance","1001","Logged out","2022-12-27 05:11:26");
INSERT INTO logs VALUES("790","Guidance","1001","Logged in the system","2022-12-27 05:11:30");
INSERT INTO logs VALUES("791","Guidance","1001","Logged in the system","2022-12-27 05:41:32");
INSERT INTO logs VALUES("792","Guidance","1001","Logged in the system","2022-12-27 08:09:28");
INSERT INTO logs VALUES("793","Guidance","1001","Logged out","2022-12-27 09:42:59");
INSERT INTO logs VALUES("794","Guidance","1001","Logged in the system","2022-12-27 09:43:02");
INSERT INTO logs VALUES("795","Guidance","1001","Logged in the system","2022-12-27 09:44:42");
INSERT INTO logs VALUES("796","Guidance","1001","Logged in the system","2022-12-27 10:49:06");
INSERT INTO logs VALUES("797","Guidance","1001","Logged out","2022-12-27 10:56:58");
INSERT INTO logs VALUES("798","Guidance","1001","Logged in the system","2022-12-27 10:57:41");
INSERT INTO logs VALUES("799","Guidance","1001","Logged out","2022-12-27 12:05:07");
INSERT INTO logs VALUES("800","Guidance","1001","Logged in the system","2022-12-27 12:05:11");
INSERT INTO logs VALUES("801","Guidance","1001","Logged in the system","2022-12-27 15:54:48");
INSERT INTO logs VALUES("802","Guidance","1001","Logged out","2022-12-27 16:35:58");
INSERT INTO logs VALUES("803","Staff","2000257868","Logged in the system","2022-12-27 16:36:24");
INSERT INTO logs VALUES("804","Staff","2000257868","Logged out","2022-12-27 16:39:26");
INSERT INTO logs VALUES("805","Staff","2000257868","Logged in the system","2022-12-27 16:39:31");
INSERT INTO logs VALUES("806","Staff","2000257868","Logged out","2022-12-27 16:40:13");
INSERT INTO logs VALUES("807","Staff","2000257868","Logged in the system","2022-12-27 16:41:02");
INSERT INTO logs VALUES("808","Staff","2000257868","Logged out","2022-12-27 16:41:46");
INSERT INTO logs VALUES("809","Guidance","1001","Logged in the system","2022-12-27 16:42:22");
INSERT INTO logs VALUES("810","Guidance","1001","Logged out","2022-12-27 17:52:33");
INSERT INTO logs VALUES("811","Guidance","1001","Logged in the system","2022-12-27 17:57:05");
INSERT INTO logs VALUES("812","Guidance","1001","Logged in the system","2022-12-28 07:05:14");
INSERT INTO logs VALUES("813","Guidance","1001","Logged in the system","2022-12-28 08:36:11");
INSERT INTO logs VALUES("814","Guidance","1001","Logged out","2022-12-28 09:22:09");
INSERT INTO logs VALUES("815","Guidance","1001","Logged in the system","2022-12-28 09:23:25");
INSERT INTO logs VALUES("816","Student","1001","Added a new referral [ ID = 356]   to the referral list","2022-12-28 09:23:55");
INSERT INTO logs VALUES("817","Guidance","1001","Logged out","2022-12-28 09:24:37");
INSERT INTO logs VALUES("818","Guidance","1001","Logged in the system","2022-12-28 09:25:26");
INSERT INTO logs VALUES("819","Guidance","1001","Logged out","2022-12-28 11:49:36");
INSERT INTO logs VALUES("820","Guidance","1001","Logged in the system","2022-12-28 11:49:58");
INSERT INTO logs VALUES("821","Student","1001","Added a new referral [ ID = 355]   to the referral list","2022-12-28 11:54:12");
INSERT INTO logs VALUES("822","Guidance","1001","Logged out","2022-12-28 11:54:22");
INSERT INTO logs VALUES("823","Guidance","1001","Logged in the system","2022-12-28 11:54:27");
INSERT INTO logs VALUES("824","Guidance","1001","Logged out","2022-12-28 11:55:17");
INSERT INTO logs VALUES("825","Staff","2000253423","Logged in the system","2022-12-28 11:55:21");
INSERT INTO logs VALUES("826","Staff","2000253423","Logged out","2022-12-28 11:59:53");
INSERT INTO logs VALUES("827","Staff","2000253423","Logged in the system","2022-12-28 11:59:57");
INSERT INTO logs VALUES("828","Staff","2000253423","Logged out","2022-12-28 12:00:40");
INSERT INTO logs VALUES("829","Staff","2000253423","Logged in the system","2022-12-28 12:00:49");
INSERT INTO logs VALUES("830","Staff","2000253423","Logged out","2022-12-28 12:02:28");
INSERT INTO logs VALUES("831","Staff","2000253423","Logged in the system","2022-12-28 12:02:33");
INSERT INTO logs VALUES("832","Staff","2000253423","Logged out","2022-12-28 12:03:47");
INSERT INTO logs VALUES("833","Staff","2000253423","Logged in the system","2022-12-28 12:03:56");
INSERT INTO logs VALUES("834","Staff","2000253423","Logged in the system","2022-12-28 12:04:22");
INSERT INTO logs VALUES("835","Staff","2000253423","Logged out","2022-12-28 12:04:26");
INSERT INTO logs VALUES("836","Staff","2000253423","Logged in the system","2022-12-28 12:04:28");
INSERT INTO logs VALUES("837","Staff","2000253423","Logged out","2022-12-28 12:05:01");
INSERT INTO logs VALUES("838","Staff","2000253423","Logged in the system","2022-12-28 12:05:31");
INSERT INTO logs VALUES("839","Staff","2000253423","Logged out","2022-12-28 12:06:29");
INSERT INTO logs VALUES("840","Staff","2000253423","Logged in the system","2022-12-28 12:06:33");
INSERT INTO logs VALUES("841","Staff","2000253423","Logged out","2022-12-28 12:08:21");
INSERT INTO logs VALUES("842","Guidance","1001","Logged in the system","2022-12-28 12:08:26");
INSERT INTO logs VALUES("843","Guidance","1001","Logged out","2022-12-28 12:43:25");
INSERT INTO logs VALUES("844","Staff","2000251944","Logged in the system","2022-12-28 12:43:49");
INSERT INTO logs VALUES("845","Staff","2000251944","Logged out","2022-12-28 12:46:06");
INSERT INTO logs VALUES("846","Staff","2000251944","Logged in the system","2022-12-28 12:46:13");
INSERT INTO logs VALUES("847","Staff","2000251944","Logged out","2022-12-28 12:46:42");
INSERT INTO logs VALUES("848","Guidance","1001","Logged in the system","2022-12-28 12:46:48");
INSERT INTO logs VALUES("849","Guidance","1001","Logged out","2022-12-28 12:48:23");
INSERT INTO logs VALUES("850","Guidance","1001","Logged in the system","2022-12-28 12:48:27");
INSERT INTO logs VALUES("851","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-28 12:49:15");
INSERT INTO logs VALUES("852","Guidance","1001","Logged out","2022-12-28 12:49:28");
INSERT INTO logs VALUES("853","Guidance","1001","Logged in the system","2022-12-28 12:49:34");
INSERT INTO logs VALUES("854","Guidance","1001","Logged out","2022-12-28 14:50:19");
INSERT INTO logs VALUES("855","Guidance","1001","Logged in the system","2022-12-28 14:51:12");
INSERT INTO logs VALUES("856","Guidance","1001","Logged out","2022-12-28 14:51:24");
INSERT INTO logs VALUES("857","Guidance","1001","Logged in the system","2022-12-28 14:51:29");
INSERT INTO logs VALUES("858","Guidance","1001","Logged out","2022-12-28 15:00:21");
INSERT INTO logs VALUES("859","Staff","2000253423","Logged in the system","2022-12-28 15:00:33");
INSERT INTO logs VALUES("860","Staff","2000253423","Logged out","2022-12-28 15:01:15");
INSERT INTO logs VALUES("861","Guidance","1001","Logged in the system","2022-12-28 15:01:21");
INSERT INTO logs VALUES("862","Guidance","1001","Logged out","2022-12-28 15:41:51");
INSERT INTO logs VALUES("863","Guidance","1001","Logged in the system","2022-12-28 15:41:57");
INSERT INTO logs VALUES("864","Guidance","1001","Logged out","2022-12-28 15:42:17");
INSERT INTO logs VALUES("865","Guidance","1001","Logged in the system","2022-12-28 15:42:23");
INSERT INTO logs VALUES("866","Guidance","1001","Logged out","2022-12-28 15:43:41");
INSERT INTO logs VALUES("867","Guidance","1001","Logged in the system","2022-12-28 15:43:47");
INSERT INTO logs VALUES("868","Guidance","1001","Logged out","2022-12-28 15:44:32");
INSERT INTO logs VALUES("869","Guidance","1001","Logged in the system","2022-12-28 15:44:38");
INSERT INTO logs VALUES("870","Guidance","1001","Logged out","2022-12-28 15:45:49");
INSERT INTO logs VALUES("871","Guidance","1001","Logged in the system","2022-12-28 15:45:54");
INSERT INTO logs VALUES("872","Guidance","1001","Logged out","2022-12-28 15:46:19");
INSERT INTO logs VALUES("873","Guidance","1001","Logged in the system","2022-12-28 15:46:40");
INSERT INTO logs VALUES("874","Guidance","1001","Logged out","2022-12-28 15:48:37");
INSERT INTO logs VALUES("875","Guidance","1001","Logged in the system","2022-12-28 15:49:00");
INSERT INTO logs VALUES("876","Guidance","1001","Logged out","2022-12-28 15:49:28");
INSERT INTO logs VALUES("877","Staff","2000253423","Logged in the system","2022-12-28 15:49:38");
INSERT INTO logs VALUES("878","Staff","2000253423","Logged out","2022-12-28 15:50:12");
INSERT INTO logs VALUES("879","Guidance","1001","Logged in the system","2022-12-28 15:50:17");
INSERT INTO logs VALUES("880","Guidance","1001","Logged out","2022-12-28 16:49:53");
INSERT INTO logs VALUES("881","Staff","2000253423","Logged in the system","2022-12-28 16:50:02");
INSERT INTO logs VALUES("882","Staff","2000253423","Logged out","2022-12-28 17:10:55");
INSERT INTO logs VALUES("883","Staff","2000253423","Logged in the system","2022-12-28 17:11:00");
INSERT INTO logs VALUES("884","Staff","2000253423","Logged out","2022-12-29 13:47:43");
INSERT INTO logs VALUES("885","Guidance","1001","Logged in the system","2022-12-29 13:48:46");
INSERT INTO logs VALUES("886","Guidance","1001","Logged out","2022-12-29 13:55:51");
INSERT INTO logs VALUES("887","Guidance","1001","Logged in the system","2022-12-29 13:56:00");
INSERT INTO logs VALUES("888","Guidance","1001","Logged out","2022-12-29 13:57:05");
INSERT INTO logs VALUES("889","Guidance","1001","Logged in the system","2022-12-29 13:57:10");
INSERT INTO logs VALUES("890","Guidance","1001","Logged out","2022-12-29 14:02:14");
INSERT INTO logs VALUES("891","Guidance","1001","Logged in the system","2022-12-29 14:02:31");
INSERT INTO logs VALUES("892","Guidance","1001","Logged out","2022-12-29 14:02:42");
INSERT INTO logs VALUES("893","Staff","2000253423","Logged in the system","2022-12-29 14:02:46");
INSERT INTO logs VALUES("894","Staff","2000253423","Logged out","2022-12-29 14:03:19");
INSERT INTO logs VALUES("895","Guidance","1001","Logged in the system","2022-12-29 14:03:24");
INSERT INTO logs VALUES("896"," Admin","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2022-12-29 21:16:25");
INSERT INTO logs VALUES("897","Guidance","1001","Logged out","2022-12-29 14:17:25");
INSERT INTO logs VALUES("898","Guidance","1001","Logged in the system","2022-12-29 14:18:12");
INSERT INTO logs VALUES("899","Guidance","1001","Logged out","2022-12-29 14:18:27");
INSERT INTO logs VALUES("900","Staff","2000253423","Logged in the system","2022-12-29 14:18:34");
INSERT INTO logs VALUES("901","Staff","2000253423","Logged out","2022-12-29 14:18:44");
INSERT INTO logs VALUES("902","Staff","2000253423","Logged in the system","2022-12-29 14:21:24");
INSERT INTO logs VALUES("903","Staff","2000253423","Logged out","2022-12-29 14:28:12");
INSERT INTO logs VALUES("904","Guidance","1001","Logged in the system","2022-12-29 14:28:21");
INSERT INTO logs VALUES("905","Guidance","1001","Logged out","2022-12-29 14:50:08");
INSERT INTO logs VALUES("906","Guidance","1001","Logged in the system","2022-12-29 14:50:24");
INSERT INTO logs VALUES("907","Guidance","1001","Logged out","2022-12-29 14:51:26");
INSERT INTO logs VALUES("908","Guidance","1001","Logged in the system","2022-12-29 14:51:31");
INSERT INTO logs VALUES("909","Guidance","1001","Logged out","2022-12-29 14:55:02");
INSERT INTO logs VALUES("910","Guidance","1001","Logged in the system","2022-12-29 14:55:05");
INSERT INTO logs VALUES("911","Guidance","1001","Logged out","2022-12-29 15:06:36");
INSERT INTO logs VALUES("912","Guidance","1001","Logged in the system","2022-12-29 15:06:47");
INSERT INTO logs VALUES("913","Guidance","1001","Logged out","2022-12-29 15:06:59");
INSERT INTO logs VALUES("914","Guidance","1001","Logged in the system","2022-12-29 15:07:04");
INSERT INTO logs VALUES("915","Guidance","1001","Logged out","2022-12-29 15:21:28");
INSERT INTO logs VALUES("916","Guidance","1001","Logged in the system","2022-12-29 15:21:44");
INSERT INTO logs VALUES("917","Guidance","1001","Logged out","2022-12-29 15:22:00");
INSERT INTO logs VALUES("918","Guidance","1001","Logged in the system","2022-12-29 15:22:04");
INSERT INTO logs VALUES("919","Guidance","1001","Logged out","2022-12-29 15:22:12");
INSERT INTO logs VALUES("920","Guidance","1001","Logged in the system","2022-12-29 15:22:16");
INSERT INTO logs VALUES("921","Guidance","1001","Logged out","2022-12-29 15:32:23");
INSERT INTO logs VALUES("922","Guidance","1001","Logged in the system","2022-12-29 15:32:29");
INSERT INTO logs VALUES("923","Guidance","1001","Logged out","2022-12-29 15:32:45");
INSERT INTO logs VALUES("924","Staff","2000253423","Logged in the system","2022-12-29 15:32:52");
INSERT INTO logs VALUES("925","Staff","2000253423","Logged out","2022-12-29 15:41:40");
INSERT INTO logs VALUES("926","Guidance","1001","Logged in the system","2022-12-29 15:41:49");
INSERT INTO logs VALUES("927","Guidance","1001","Logged out","2022-12-29 15:42:14");
INSERT INTO logs VALUES("928","Staff","2000253423","Logged in the system","2022-12-29 15:42:20");
INSERT INTO logs VALUES("929","Staff","2000253423","Logged out","2022-12-29 15:43:18");
INSERT INTO logs VALUES("930","Guidance","1001","Logged in the system","2022-12-29 15:43:23");
INSERT INTO logs VALUES("931","Guidance","1001","Logged out","2022-12-29 15:47:04");
INSERT INTO logs VALUES("932","Staff","2000253423","Logged in the system","2022-12-29 15:47:10");
INSERT INTO logs VALUES("933","Staff","2000253423","Logged out","2022-12-29 15:48:28");
INSERT INTO logs VALUES("934","Staff","2000253423","Logged in the system","2022-12-29 15:48:33");
INSERT INTO logs VALUES("935","Staff","2000253423","Logged out","2022-12-29 15:48:39");
INSERT INTO logs VALUES("936","Staff","2000253423","Logged in the system","2022-12-29 15:48:43");
INSERT INTO logs VALUES("937","Staff","2000253423","Logged out","2022-12-29 15:48:49");
INSERT INTO logs VALUES("938","Guidance","1001","Logged in the system","2022-12-29 15:48:53");
INSERT INTO logs VALUES("939","Guidance","1001","Logged out","2022-12-29 15:49:13");
INSERT INTO logs VALUES("940","Guidance","1001","Logged in the system","2022-12-29 15:49:18");
INSERT INTO logs VALUES("941","Guidance","1001","Logged out","2022-12-29 15:53:19");
INSERT INTO logs VALUES("942","Staff","2000253423","Logged in the system","2022-12-29 15:53:27");
INSERT INTO logs VALUES("943","Staff","2000253423","Logged out","2022-12-29 15:53:56");
INSERT INTO logs VALUES("944","Guidance","1001","Logged in the system","2022-12-29 16:21:00");
INSERT INTO logs VALUES("945","Guidance","1001","Logged out","2022-12-29 17:07:37");
INSERT INTO logs VALUES("946","Guidance","1001","Logged in the system","2022-12-29 17:07:47");
INSERT INTO logs VALUES("947","Guidance","1001","Logged out","2022-12-29 17:07:50");
INSERT INTO logs VALUES("948","Guidance","1001","Logged in the system","2022-12-29 17:07:54");
INSERT INTO logs VALUES("949","Guidance","1001","Logged out","2022-12-29 17:13:30");
INSERT INTO logs VALUES("950","Guidance","1001","Logged in the system","2022-12-29 17:13:36");
INSERT INTO logs VALUES("951","Guidance","1001","Logged out","2022-12-29 17:13:47");
INSERT INTO logs VALUES("952","Guidance","1001","Logged in the system","2022-12-29 17:13:55");
INSERT INTO logs VALUES("953","Guidance","1001","Logged out","2022-12-29 17:20:13");
INSERT INTO logs VALUES("954","Staff","2000253423","Logged in the system","2022-12-29 17:20:22");
INSERT INTO logs VALUES("955","Staff","2000253423","Logged out","2022-12-29 17:28:00");
INSERT INTO logs VALUES("956","Staff","2000253423","Logged in the system","2022-12-29 17:28:04");
INSERT INTO logs VALUES("957","Staff","2000253423","Logged out","2022-12-29 17:29:28");
INSERT INTO logs VALUES("958","Staff","2000253423","Logged in the system","2022-12-29 17:29:31");
INSERT INTO logs VALUES("959","Staff","2000253423","Logged out","2022-12-30 06:49:18");
INSERT INTO logs VALUES("960","Guidance","1001","Logged in the system","2022-12-30 06:49:38");
INSERT INTO logs VALUES("961"," Admin","1001","Updated the details of staff [ ID = 2000257868] Chris Bennan","2022-12-30 07:22:23");
INSERT INTO logs VALUES("962","Guidance","1001","Logged out","2022-12-30 07:23:41");
INSERT INTO logs VALUES("963","Guidance","1001","Logged in the system","2022-12-30 07:23:46");
INSERT INTO logs VALUES("964","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-30 07:34:37");
INSERT INTO logs VALUES("965","Guidance","1001","Logged out","2022-12-30 07:35:48");
INSERT INTO logs VALUES("966","Guidance","1001","Logged in the system","2022-12-30 07:35:55");
INSERT INTO logs VALUES("967","Guidance","1001","Logged out","2022-12-30 07:37:03");
INSERT INTO logs VALUES("968","Guidance","1001","Logged in the system","2022-12-30 07:37:10");
INSERT INTO logs VALUES("969","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-30 08:00:54");
INSERT INTO logs VALUES("970","Guidance","1001","Logged out","2022-12-30 08:01:14");
INSERT INTO logs VALUES("971","Guidance","1001","Logged in the system","2022-12-30 08:01:18");
INSERT INTO logs VALUES("972","Guidance","1001","Logged out","2022-12-30 08:04:30");
INSERT INTO logs VALUES("973","Guidance","1001","Logged in the system","2022-12-30 08:04:34");
INSERT INTO logs VALUES("974","Guidance","1001","Logged out","2022-12-30 08:21:51");
INSERT INTO logs VALUES("975","Guidance","1001","Logged in the system","2022-12-30 08:21:54");
INSERT INTO logs VALUES("976"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-30 15:22:18");
INSERT INTO logs VALUES("977"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-30 15:22:41");
INSERT INTO logs VALUES("978","Guidance","1001","Logged out","2022-12-30 08:22:44");
INSERT INTO logs VALUES("979","Guidance","1001","Logged in the system","2022-12-30 08:22:49");
INSERT INTO logs VALUES("980","Guidance","1001","Logged out","2022-12-30 08:23:03");
INSERT INTO logs VALUES("981","Guidance","1001","Logged in the system","2022-12-30 08:23:06");
INSERT INTO logs VALUES("982","Guidance","1001","Logged out","2022-12-30 08:23:09");
INSERT INTO logs VALUES("983","Guidance","1001","Logged in the system","2022-12-30 08:23:12");
INSERT INTO logs VALUES("984"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-30 15:23:48");
INSERT INTO logs VALUES("985"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-30 15:24:16");
INSERT INTO logs VALUES("986"," Admin","1001","Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list","2022-12-30 15:24:56");
INSERT INTO logs VALUES("987","Guidance","1001","Logged out","2022-12-30 08:25:11");
INSERT INTO logs VALUES("988","Guidance","1001","Logged in the system","2022-12-30 08:25:14");
INSERT INTO logs VALUES("989","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-30 08:37:27");
INSERT INTO logs VALUES("990","Guidance","1001","Logged out","2022-12-30 08:44:02");
INSERT INTO logs VALUES("991","Staff","2000257868","Logged in the system","2022-12-30 08:44:05");
INSERT INTO logs VALUES("992","Staff","2000257868","Logged out","2022-12-30 08:44:39");
INSERT INTO logs VALUES("993","Guidance","1001","Logged in the system","2022-12-30 08:44:46");
INSERT INTO logs VALUES("994","Guidance","1001","Logged out","2022-12-30 08:46:16");
INSERT INTO logs VALUES("995","Guidance","1001","Logged in the system","2022-12-30 08:46:21");
INSERT INTO logs VALUES("996","Guidance","1001","Logged out","2022-12-30 08:46:23");
INSERT INTO logs VALUES("997","Staff","2000257868","Logged in the system","2022-12-30 08:46:26");
INSERT INTO logs VALUES("998","Staff","2000257868","Logged out","2022-12-30 08:48:50");
INSERT INTO logs VALUES("999","Guidance","1001","Logged in the system","2022-12-30 08:48:54");
INSERT INTO logs VALUES("1000","Guidance","1001","Logged out","2022-12-30 08:49:02");
INSERT INTO logs VALUES("1001","Staff","2000257868","Logged in the system","2022-12-30 08:49:06");
INSERT INTO logs VALUES("1002","Staff","2000257868","Logged out","2022-12-30 08:50:12");
INSERT INTO logs VALUES("1003","Guidance","1001","Logged in the system","2022-12-30 08:50:17");
INSERT INTO logs VALUES("1004","Guidance","1001","Logged out","2022-12-30 08:50:27");
INSERT INTO logs VALUES("1005","Staff","2000257868","Logged in the system","2022-12-30 08:50:32");
INSERT INTO logs VALUES("1006","Staff","2000257868","Added a new referral [ ID = 361]   to the referral list","2022-12-30 08:54:57");
INSERT INTO logs VALUES("1007","Staff","2000257868","Added a new referral [ ID = 355]   to the referral list","2022-12-30 09:02:09");
INSERT INTO logs VALUES("1008","Staff","2000257868","Added a new referral [ ID = 357]   to the referral list","2022-12-30 09:02:22");
INSERT INTO logs VALUES("1009","Staff","2000257868","Logged out","2022-12-30 09:32:01");
INSERT INTO logs VALUES("1010","Guidance","1001","Logged in the system","2022-12-30 09:32:06");
INSERT INTO logs VALUES("1011","Guidance","1001","Logged out","2022-12-30 09:43:34");
INSERT INTO logs VALUES("1012","Guidance","1001","Logged in the system","2022-12-30 09:43:38");
INSERT INTO logs VALUES("1013","Guidance","1001","Logged out","2022-12-30 09:44:20");
INSERT INTO logs VALUES("1014","Guidance","1001","Logged in the system","2022-12-30 09:44:23");
INSERT INTO logs VALUES("1015","Guidance","1001","Logged out","2022-12-30 09:45:03");
INSERT INTO logs VALUES("1016","Guidance","1001","Logged in the system","2022-12-30 09:45:07");
INSERT INTO logs VALUES("1017","Guidance","1001","Logged out","2022-12-30 10:00:08");
INSERT INTO logs VALUES("1018","Guidance","1001","Logged in the system","2022-12-30 10:00:13");
INSERT INTO logs VALUES("1019"," Admin","1001","Updated the details of staff [ ID = 2000257868] Chris Bennan","2022-12-30 10:00:21");
INSERT INTO logs VALUES("1020"," Admin","1001","Updated the details of staff [ ID = 2000257868] Chris Bennan","2022-12-30 10:00:27");
INSERT INTO logs VALUES("1021"," Admin","1001","Updated the details of staff [ ID = 2000257868] Chris Bennan","2022-12-30 10:00:33");
INSERT INTO logs VALUES("1022"," Admin","1001","Updated the details of staff [ ID = 2000253423] David Buna","2022-12-30 10:00:39");
INSERT INTO logs VALUES("1023","Guidance","1001","Logged out","2022-12-30 10:01:46");
INSERT INTO logs VALUES("1024","Guidance","1001","Logged in the system","2022-12-30 10:01:50");
INSERT INTO logs VALUES("1025","Guidance","1001","Logged out","2022-12-30 10:02:00");
INSERT INTO logs VALUES("1026","Staff","2000257868","Logged in the system","2022-12-30 10:02:05");
INSERT INTO logs VALUES("1027","Staff","2000257868","Logged out","2022-12-30 10:02:28");
INSERT INTO logs VALUES("1028","Guidance","1001","Logged in the system","2022-12-30 10:02:34");
INSERT INTO logs VALUES("1029","Guidance","1001","Logged out","2022-12-30 10:08:09");
INSERT INTO logs VALUES("1030","Staff","2000257868","Logged in the system","2022-12-30 10:08:14");
INSERT INTO logs VALUES("1031","Staff","2000257868","Added a new referral [ ID = 357]   to the referral list","2022-12-30 10:12:46");
INSERT INTO logs VALUES("1032","Staff","2000257868","Logged out","2022-12-30 10:14:11");
INSERT INTO logs VALUES("1033","Staff","2000257868","Logged in the system","2022-12-30 10:14:15");
INSERT INTO logs VALUES("1034","Staff","2000257868","Logged out","2022-12-30 10:28:03");
INSERT INTO logs VALUES("1035","Staff","2000257868","Logged in the system","2022-12-30 10:28:08");
INSERT INTO logs VALUES("1036","Staff","2000257868","Logged out","2022-12-30 10:28:23");
INSERT INTO logs VALUES("1037","Guidance","1001","Logged in the system","2022-12-30 10:28:28");
INSERT INTO logs VALUES("1038","Guidance","1001","Logged out","2022-12-30 10:29:39");
INSERT INTO logs VALUES("1039","Staff","2000257868","Logged in the system","2022-12-30 10:29:43");
INSERT INTO logs VALUES("1040","Staff","2000257868","Logged out","2022-12-30 10:29:53");
INSERT INTO logs VALUES("1041","Guidance","1001","Logged in the system","2022-12-30 10:29:57");
INSERT INTO logs VALUES("1042","Guidance","1001","Logged out","2022-12-30 10:30:09");
INSERT INTO logs VALUES("1043","Guidance","1001","Logged in the system","2022-12-30 10:30:12");
INSERT INTO logs VALUES("1044","Guidance","1001","Logged out","2022-12-30 10:42:36");
INSERT INTO logs VALUES("1045","Staff","2000257868","Logged in the system","2022-12-30 10:42:42");
INSERT INTO logs VALUES("1046","Staff","2000257868","Logged out","2022-12-30 10:43:17");
INSERT INTO logs VALUES("1047","Guidance","1001","Logged in the system","2022-12-30 10:43:22");
INSERT INTO logs VALUES("1048","Guidance","1001","Logged out","2022-12-30 10:52:22");
INSERT INTO logs VALUES("1049","Guidance","1001","Logged in the system","2022-12-30 10:52:27");
INSERT INTO logs VALUES("1050","Student","1001","Added a new referral [ ID = 359]   to the referral list","2022-12-30 10:59:00");
INSERT INTO logs VALUES("1051","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-30 10:59:30");
INSERT INTO logs VALUES("1052","Student","1001","Added a new referral [ ID = 359]   to the referral list","2022-12-30 11:00:06");
INSERT INTO logs VALUES("1053","Guidance","1001","Logged out","2022-12-30 11:31:20");
INSERT INTO logs VALUES("1054","Guidance","1001","Logged in the system","2022-12-30 11:31:24");
INSERT INTO logs VALUES("1055","Guidance","1001","Logged out","2022-12-30 11:42:03");
INSERT INTO logs VALUES("1056","Staff","2000257868","Logged in the system","2022-12-30 11:42:09");
INSERT INTO logs VALUES("1057","Staff","2000257868","Logged out","2022-12-30 11:46:01");
INSERT INTO logs VALUES("1058","Staff","2000257868","Logged in the system","2022-12-30 11:46:06");
INSERT INTO logs VALUES("1059","Staff","2000257868","Logged out","2022-12-30 12:14:26");
INSERT INTO logs VALUES("1060","Staff","2000257868","Logged in the system","2022-12-30 12:14:30");
INSERT INTO logs VALUES("1061","Staff","2000257868","Logged out","2022-12-30 12:53:53");
INSERT INTO logs VALUES("1062","Staff","2000257868","Logged in the system","2022-12-30 12:53:59");
INSERT INTO logs VALUES("1063","Staff","2000257868","Logged out","2022-12-30 12:57:01");
INSERT INTO logs VALUES("1064","Guidance","1001","Logged in the system","2022-12-30 12:57:05");
INSERT INTO logs VALUES("1065"," Admin","1001","Added a new slide","2022-12-30 13:02:53");
INSERT INTO logs VALUES("1066","Guidance","1001","Logged out","2022-12-30 13:02:57");
INSERT INTO logs VALUES("1067","Guidance","1001","Logged in the system","2022-12-30 13:03:02");
INSERT INTO logs VALUES("1068","Guidance","1001","Logged out","2022-12-30 13:03:06");
INSERT INTO logs VALUES("1069","Guidance","1001","Logged in the system","2022-12-30 13:23:39");
INSERT INTO logs VALUES("1070","Guidance","1001","Logged out","2022-12-30 13:28:37");
INSERT INTO logs VALUES("1071","Guidance","1001","Logged in the system","2022-12-30 13:28:40");
INSERT INTO logs VALUES("1072","Guidance","1001","Logged out","2022-12-30 13:28:44");
INSERT INTO logs VALUES("1073","Guidance","1001","Logged in the system","2022-12-30 13:28:48");
INSERT INTO logs VALUES("1074","Guidance","1001","Logged out","2022-12-30 13:29:10");
INSERT INTO logs VALUES("1075","Guidance","1001","Logged in the system","2022-12-30 13:29:16");
INSERT INTO logs VALUES("1076","Guidance","1001","Logged out","2022-12-30 13:30:08");
INSERT INTO logs VALUES("1077","Guidance","1001","Logged in the system","2022-12-30 13:30:20");
INSERT INTO logs VALUES("1078","Guidance","1001","Logged out","2022-12-30 13:30:39");
INSERT INTO logs VALUES("1079","Guidance","1001","Logged in the system","2022-12-30 13:30:42");
INSERT INTO logs VALUES("1080","Guidance","1001","Logged out","2022-12-30 13:33:42");
INSERT INTO logs VALUES("1081","Guidance","1001","Logged in the system","2022-12-30 13:33:46");
INSERT INTO logs VALUES("1082","Guidance","1001","Logged out","2022-12-30 13:34:38");
INSERT INTO logs VALUES("1083","Guidance","1001","Logged in the system","2022-12-30 13:35:11");
INSERT INTO logs VALUES("1084","Guidance","1001","Logged in the system","2022-12-30 13:37:19");
INSERT INTO logs VALUES("1085","Guidance","1001","Logged out","2022-12-30 13:37:23");
INSERT INTO logs VALUES("1086","Guidance","1001","Logged in the system","2022-12-30 13:37:27");
INSERT INTO logs VALUES("1087","Student","1001","Added a new referral [ ID = 357]   to the referral list","2022-12-30 13:47:01");
INSERT INTO logs VALUES("1088","Guidance","1001","Logged out","2022-12-30 13:49:30");
INSERT INTO logs VALUES("1089","Guidance","1001","Logged in the system","2022-12-30 13:49:36");
INSERT INTO logs VALUES("1090"," Admin","1001","Deleted the offense of [ ID = ]  ","2022-12-30 14:05:13");
INSERT INTO logs VALUES("1091"," Admin","1001","Updated the offense of [ ID = ]  ","2022-12-30 21:07:54");
INSERT INTO logs VALUES("1092","Guidance","1001","Logged out","2022-12-30 14:09:51");
INSERT INTO logs VALUES("1093","Staff","2000257868","Logged in the system","2022-12-30 14:09:55");
INSERT INTO logs VALUES("1094","Staff","2000257868","Added a new referral [ ID = 355]   to the referral list","2022-12-30 14:11:48");
INSERT INTO logs VALUES("1095","Staff","2000257868","Logged out","2022-12-30 14:21:51");
INSERT INTO logs VALUES("1096","Staff","2000257868","Logged in the system","2022-12-30 14:21:55");
INSERT INTO logs VALUES("1097","Staff","2000257868","Logged out","2022-12-30 14:22:01");
INSERT INTO logs VALUES("1098","Guidance","1001","Logged in the system","2022-12-30 14:22:05");
INSERT INTO logs VALUES("1099"," Admin","1001","Updated an announcement","2022-12-30 14:22:12");
INSERT INTO logs VALUES("1100","Guidance","1001","Logged out","2022-12-30 14:22:16");
INSERT INTO logs VALUES("1101","Guidance","1001","Logged in the system","2022-12-30 14:22:20");
INSERT INTO logs VALUES("1102","Guidance","1001","Logged out","2022-12-30 14:24:03");
INSERT INTO logs VALUES("1103","Guidance","1001","Logged in the system","2022-12-30 14:24:10");
INSERT INTO logs VALUES("1104","Guidance","1001","Logged out","2022-12-30 16:57:25");
INSERT INTO logs VALUES("1105","Staff","2000257868","Logged in the system","2022-12-30 16:57:45");
INSERT INTO logs VALUES("1106","Staff","2000257868","Added a new referral [ ID = 357]   to the referral list","2022-12-30 16:57:57");
INSERT INTO logs VALUES("1107","Staff","2000257868","Logged out","2022-12-30 17:15:53");
INSERT INTO logs VALUES("1108","Staff","2000257868","Logged in the system","2022-12-30 17:16:09");
INSERT INTO logs VALUES("1109","Staff","2000257868","Logged out","2022-12-30 17:58:26");
INSERT INTO logs VALUES("1110","Staff","2000257868","Logged in the system","2022-12-30 17:58:31");
INSERT INTO logs VALUES("1111","Staff","2000257868","Logged out","2022-12-30 17:58:34");
INSERT INTO logs VALUES("1112","Staff","2000257868","Logged in the system","2022-12-30 17:58:37");
INSERT INTO logs VALUES("1113","Guidance","1001","Logged in the system","2023-01-03 11:04:08");
INSERT INTO logs VALUES("1114","","0","Logged in the system","2023-01-03 11:13:39");
INSERT INTO logs VALUES("1115","","0","Logged out","2023-01-03 11:13:55");
INSERT INTO logs VALUES("1116","Guidance","1001","Logged in the system","2023-01-03 11:14:18");
INSERT INTO logs VALUES("1117"," Guidance","1001","Updated a slide","2023-01-03 11:15:20");
INSERT INTO logs VALUES("1118","Guidance","1001","Logged out","2023-01-03 11:15:27");
INSERT INTO logs VALUES("1119"," Guidance","1001","Updated a slide","2023-01-03 11:17:44");
INSERT INTO logs VALUES("1120"," Guidance","1001","Updated a slide","2023-01-03 11:21:22");
INSERT INTO logs VALUES("1121","Guidance","1001","Logged out","2023-01-03 11:21:27");
INSERT INTO logs VALUES("1122","Guidance","1001","Logged in the system","2023-01-03 11:22:06");
INSERT INTO logs VALUES("1123","Guidance","1001","Logged out","2023-01-03 11:22:46");
INSERT INTO logs VALUES("1124","Guidance","1001","Logged in the system","2023-01-03 11:23:15");
INSERT INTO logs VALUES("1125"," Guidance","1001","Deleted the offense of [ ID = ]  ","2023-01-03 11:26:11");
INSERT INTO logs VALUES("1126"," Guidance","1001","Deleted the offense of [ ID = ]  ","2023-01-03 11:32:56");
INSERT INTO logs VALUES("1127","Guidance","1001","Logged in the system","2023-01-03 12:18:43");
INSERT INTO logs VALUES("1128"," Guidance","1001","Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list","2023-01-03 19:20:49");
INSERT INTO logs VALUES("1129","Guidance","1001","Logged in the system","2023-01-03 15:06:16");
INSERT INTO logs VALUES("1130","Guidance","1001","Logged out","2023-01-03 15:26:45");
INSERT INTO logs VALUES("1131","Guidance","1001","Logged in the system","2023-01-03 15:27:08");
INSERT INTO logs VALUES("1132","Guidance","1001","Logged out","2023-01-03 15:27:29");
INSERT INTO logs VALUES("1133","Guidance","1001","Logged in the system","2023-01-03 15:27:42");
INSERT INTO logs VALUES("1134","Guidance","1001","Logged out","2023-01-03 15:28:14");
INSERT INTO logs VALUES("1135","Guidance","1001","Logged in the system","2023-01-03 15:28:28");



CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` int(20) NOT NULL,
  `to_user` int(20) NOT NULL,
  `Type` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `info_ID` int(11) NOT NULL,
  `isRead` int(1) NOT NULL,
  `notif_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=507 DEFAULT CHARSET=utf8mb4;

INSERT INTO notifications VALUES("456","2000232823","1001","Reminder","128","1","2022-12-29 20:55:43");
INSERT INTO notifications VALUES("457","1001","2000232823","Reminder","128","1","2022-12-29 20:55:43");
INSERT INTO notifications VALUES("458","2000253423","1001","Reminder","133","1","2022-12-29 20:55:43");
INSERT INTO notifications VALUES("459","1001","2000253423","Reminder","133","1","2022-12-29 20:55:43");
INSERT INTO notifications VALUES("460","1001","2000232823","Offense","78","1","2022-12-29 21:16:25");
INSERT INTO notifications VALUES("461","2000245727","1001","Referral","156","1","2022-12-30 14:34:37");
INSERT INTO notifications VALUES("462","2000245727","1001","Referral","156","0","2022-12-30 15:00:54");
INSERT INTO notifications VALUES("463","1001","2000245727","Offense","79","1","2022-12-30 15:22:18");
INSERT INTO notifications VALUES("464","1001","2000245727","Offense","80","0","2022-12-30 15:22:41");
INSERT INTO notifications VALUES("465","1001","2000245727","Offense","80","0","2022-12-30 15:23:48");
INSERT INTO notifications VALUES("466","1001","2000245727","Offense","82","1","2022-12-30 15:24:56");
INSERT INTO notifications VALUES("467","2000245727","1001","Referral","156","0","2022-12-30 15:37:27");
INSERT INTO notifications VALUES("468","2000257868","1001","Appointment","134","0","2022-12-30 15:44:11");
INSERT INTO notifications VALUES("469","2000257868","1001","Reminder","134","0","2022-12-30 15:44:46");
INSERT INTO notifications VALUES("470","1001","2000257868","Reminder","134","0","2022-12-30 15:44:46");
INSERT INTO notifications VALUES("471","2000257868","1001","Appointment","135","0","2022-12-30 15:48:46");
INSERT INTO notifications VALUES("472","2000257868","1001","Reminder","135","0","2022-12-30 15:48:54");
INSERT INTO notifications VALUES("473","1001","2000257868","Reminder","135","0","2022-12-30 15:48:54");
INSERT INTO notifications VALUES("474","2000257868","1001","Appointment","136","0","2022-12-30 15:50:09");
INSERT INTO notifications VALUES("475","2000257868","1001","Reminder","136","0","2022-12-30 15:50:17");
INSERT INTO notifications VALUES("476","1001","2000257868","Reminder","136","0","2022-12-30 15:50:17");
INSERT INTO notifications VALUES("477","2000257868","1001","Referral","159","0","2022-12-30 15:54:57");
INSERT INTO notifications VALUES("478","2000257868","1001","Referral","160","0","2022-12-30 16:02:09");
INSERT INTO notifications VALUES("479","2000257868","1001","Referral","161","0","2022-12-30 16:02:22");
INSERT INTO notifications VALUES("480","1001","2000245727","Rejection","158","0","2022-12-30 16:44:49");
INSERT INTO notifications VALUES("481","1001","2000257868","Rejection","160","0","2022-12-30 16:44:56");
INSERT INTO notifications VALUES("482","2000245727","1001","Appointment","137","0","2022-12-30 16:46:24");
INSERT INTO notifications VALUES("483","2000245727","1001","Appointment","138","0","2022-12-30 16:46:24");
INSERT INTO notifications VALUES("484","2000257868","1001","Referral","161","0","2022-12-30 17:12:46");
INSERT INTO notifications VALUES("485","2000257868","1001","Appointment","139","0","2022-12-30 17:28:20");
INSERT INTO notifications VALUES("486","2000257868","1001","Reminder","139","0","2022-12-30 17:28:28");
INSERT INTO notifications VALUES("487","1001","2000257868","Reminder","139","0","2022-12-30 17:28:28");
INSERT INTO notifications VALUES("488","2000245727","1001","Referral","163","0","2022-12-30 17:59:00");
INSERT INTO notifications VALUES("489","2000245727","1001","Referral","156","0","2022-12-30 17:59:30");
INSERT INTO notifications VALUES("490","2000245727","1001","Referral","163","0","2022-12-30 18:00:06");
INSERT INTO notifications VALUES("491","2000257868","1001","Appointment","140","0","2022-12-30 18:43:59");
INSERT INTO notifications VALUES("492","2000257868","1001","Appointment","141","0","2022-12-30 18:43:59");
INSERT INTO notifications VALUES("493","2000245727","1001","Appointment","142","0","2022-12-30 18:46:28");
INSERT INTO notifications VALUES("494","2000245727","1001","Appointment","143","0","2022-12-30 18:46:28");
INSERT INTO notifications VALUES("495","2000257868","1001","Reminder","140","0","2022-12-30 19:57:05");
INSERT INTO notifications VALUES("496","1001","2000257868","Reminder","140","0","2022-12-30 19:57:05");
INSERT INTO notifications VALUES("497","2000257868","1001","Reminder","141","0","2022-12-30 19:57:05");
INSERT INTO notifications VALUES("498","1001","2000257868","Reminder","141","0","2022-12-30 19:57:05");
INSERT INTO notifications VALUES("499","2000245727","1001","Referral","156","0","2022-12-30 20:47:01");
INSERT INTO notifications VALUES("500","2000257868","1001","Referral","160","0","2022-12-30 21:11:48");
INSERT INTO notifications VALUES("501","2000257868","1001","Referral","161","0","2022-12-30 23:57:57");
INSERT INTO notifications VALUES("502","2000245727","1001","Reminder","142","0","2023-01-03 18:04:09");
INSERT INTO notifications VALUES("503","1001","2000245727","Reminder","142","0","2023-01-03 18:04:09");
INSERT INTO notifications VALUES("504","2000245727","1001","Reminder","143","0","2023-01-03 18:04:09");
INSERT INTO notifications VALUES("505","1001","2000245727","Reminder","143","0","2023-01-03 18:04:09");
INSERT INTO notifications VALUES("506","1001","2000232823","Offense","83","0","2023-01-03 19:20:49");



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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

INSERT INTO offense_monitoring VALUES("76","2000245727","Rowella Bangeles","Minor Offense","vaping around school premises","2022-12-27","suspended for 3 days","2022-12-16","2022-12-22","Sanction Ended","Inactive","2022-12-27 11:53:06","2022-12-27 11:53:06");
INSERT INTO offense_monitoring VALUES("77","2000092923","Abigail Nazal","Minor Offense","Bullying a student","2022-12-27","Clean toilet for 3 days","2022-12-26","2022-12-29","Sanction Ended","Inactive","2022-12-27 12:07:58","2022-12-30 15:21:57");
INSERT INTO offense_monitoring VALUES("78","2000232823","Marqueyza Acub","Major Offense B","nagtapon ng tae","2022-12-29","linisin yung tae","2022-12-28","2022-12-31","Sanction Ended","Inactive","2022-12-29 21:16:25","2023-01-03 18:26:06");
INSERT INTO offense_monitoring VALUES("79","2000245727","Rowella Bangeles","Minor Offense","Bullying a student","2022-12-30","Clean toilet for 5 days","2022-12-31","2023-01-01","Sanction Ended","Inactive","2022-12-30 15:22:18","2023-01-03 18:26:06");
INSERT INTO offense_monitoring VALUES("82","2000245727","Rowella Bangeles","Major Offense A","Ang cute ko kase","2022-12-30","tatakbo mula sm to astro","2022-12-30","2022-12-31","Sanction Ended","Inactive","2022-12-30 15:24:56","2023-01-03 18:26:06");
INSERT INTO offense_monitoring VALUES("83","2000232823","Marqueyza Acub","Minor Offense","QQQQ","2023-01-03","EEEEEE","2023-01-02","2023-01-05","2 days","Active","2023-01-03 19:20:49","2023-01-03 19:20:49");



CREATE TABLE `personal_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL DEFAULT 0,
  `timeslot` varchar(255) DEFAULT NULL,
  `timeslot_end` varchar(100) DEFAULT NULL,
  `information` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `app_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;




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
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4;

INSERT INTO refferals VALUES("150","357","Student","373","2022-12-27"," Academic, Career","di alam anong kukunin na course","kinausap ko sya","being problematic","","","Complete referral","2022-12-27 12:12:39");
INSERT INTO refferals VALUES("151","355","Student","373","2022-12-27"," Academic","Help ko po sya regarding with her academic course","nagusap kami ","di nakikinig","","","Cancelled referral","2022-12-27 12:08:35");
INSERT INTO refferals VALUES("152","355","Student","373","2022-12-27"," Academic","she is having a problem with her academics","kinausap ko sya","","","","Cancelled referral","2022-12-28 16:21:48");
INSERT INTO refferals VALUES("153","356","Student","357","2022-12-28"," Academic, Career, Personal, Crisis","Wala lang","tapon","basura","","","Cancelled referral","2022-12-28 16:55:21");
INSERT INTO refferals VALUES("154","355","Guidance Counselor","357","2022-12-28","Academic","dasdsasf","dasdsad","sadsadsa","","","Cancelled","2022-12-28 19:48:40");
INSERT INTO refferals VALUES("155","357","Student","357","2022-12-28"," Academic, Career, Personal, Crisis","sdasasfa","sfdsfda","asdsadas","","","Pending","2022-12-28 19:49:15");
INSERT INTO refferals VALUES("156","357","Guidance Counselor","355","2022-12-30","Academic","dawddawdwaddawdawddawdawdawd","dawddawdwaddawdwadadawdaw","dawddawdwaddawdwddawdawd","","","Pending","2022-12-31 00:23:56");
INSERT INTO refferals VALUES("157","357","Student","355","2022-12-30"," Career","dadwada","dadawdwa","dawdw","","","Cancelled","2022-12-30 15:37:05");
INSERT INTO refferals VALUES("158","357","Student","355","2022-12-30"," Career, Personal","dawdawdaw","dawdawda","dadwa","awdadaw","2022-12-30","Cancelled","2022-12-30 16:44:49");
INSERT INTO refferals VALUES("159","361","Staff","349","2022-12-30"," Career, Personal","dwadwadwad","dawdwad","dawdwda","","","Cancelled","2022-12-30 16:09:14");
INSERT INTO refferals VALUES("160","355","Staff","349","2022-12-30"," Career, Personal","dawdwdwa","ddawdwad","dawdwd","dawdawdaw","2022-12-30","Cancelled","2022-12-30 16:44:56");
INSERT INTO refferals VALUES("161","357","Staff","349","2022-12-30"," Academic, Career, Personal, Crisis","dwdwd","kukukhu","kuhlulul","","","Cancelled","2022-12-30 16:09:16");
INSERT INTO refferals VALUES("162","357","Staff","349","2022-12-30"," Career","dawdwd","dawdw","ddawdwd","dawdwad","2022-12-31","Cancelled","2022-12-31 00:59:23");
INSERT INTO refferals VALUES("163","359","Student","355","2022-12-30","","","","","","","For Appointment","2022-12-30 20:51:52");
INSERT INTO refferals VALUES("164","357","Student","355","2022-12-30"," Academic","dawdwad","dawdwad","dawdaw","","","Pending","2022-12-30 17:59:30");
INSERT INTO refferals VALUES("165","359","Student","355","2022-12-30"," Career, Personal","dawdwd","dwadwddaw","dawdwd","","","Cancelled","2022-12-31 00:23:25");
INSERT INTO refferals VALUES("166","357","Student","355","2022-12-30"," Academic, Career","dawdwad","dwadwd","dawdwd","","","Pending","2022-12-30 20:47:01");
INSERT INTO refferals VALUES("167","355","Staff","349","2022-12-30"," Career, Personal","dawdawdwad","dawdwad","dawdwad","","","Pending","2022-12-30 21:11:48");
INSERT INTO refferals VALUES("168","357","Staff","349","2022-12-30"," Career, Personal","dawdwd","dwadgdhtf","htfhfthft","","","Pending","2022-12-30 23:57:57");



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
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4;

INSERT INTO refferals_nature VALUES("94","357","Student","373","2022-12-27","Academic","di alam anong kukunin na course","kinausap ko sya","being problematic","Pending","2022-12-27 09:36:27");
INSERT INTO refferals_nature VALUES("95","357","Student","373","2022-12-27","Career","di alam anong kukunin na course","kinausap ko sya","being problematic","Pending","2022-12-27 09:36:28");
INSERT INTO refferals_nature VALUES("96","355","Student","373","2022-12-27","Academic","Help ko po sya regarding with her academic course","nagusap kami ","di nakikinig","Pending","2022-12-27 09:41:32");
INSERT INTO refferals_nature VALUES("97","355","Student","373","2022-12-27","Academic","she is having a problem with her academics","kinausap ko sya","","Pending","2022-12-27 12:11:07");
INSERT INTO refferals_nature VALUES("98","356","Student","357","2022-12-28","Academic","Wala lang","tapon","basura","Pending","2022-12-28 16:23:55");
INSERT INTO refferals_nature VALUES("99","356","Student","357","2022-12-28","Career","Wala lang","tapon","basura","Pending","2022-12-28 16:23:55");
INSERT INTO refferals_nature VALUES("100","356","Student","357","2022-12-28","Personal","Wala lang","tapon","basura","Pending","2022-12-28 16:23:55");
INSERT INTO refferals_nature VALUES("101","356","Student","357","2022-12-28","Crisis","Wala lang","tapon","basura","Pending","2022-12-28 16:23:55");
INSERT INTO refferals_nature VALUES("102","355","Student","357","2022-12-28","Academic","dasdsasf","dasdsad","sadsadsa","Pending","2022-12-28 18:54:12");
INSERT INTO refferals_nature VALUES("103","355","Student","357","2022-12-28","Career","dasdsasf","dasdsad","sadsadsa","Pending","2022-12-28 18:54:12");
INSERT INTO refferals_nature VALUES("104","355","Student","357","2022-12-28","Personal","dasdsasf","dasdsad","sadsadsa","Pending","2022-12-28 18:54:12");
INSERT INTO refferals_nature VALUES("105","355","Student","357","2022-12-28","Crisis","dasdsasf","dasdsad","sadsadsa","Pending","2022-12-28 18:54:12");
INSERT INTO refferals_nature VALUES("106","357","Student","357","2022-12-28","Academic","sdasasfa","sfdsfda","asdsadas","Pending","2022-12-28 19:49:15");
INSERT INTO refferals_nature VALUES("107","357","Student","357","2022-12-28","Career","sdasasfa","sfdsfda","asdsadas","Pending","2022-12-28 19:49:15");
INSERT INTO refferals_nature VALUES("108","357","Student","357","2022-12-28","Personal","sdasasfa","sfdsfda","asdsadas","Pending","2022-12-28 19:49:15");
INSERT INTO refferals_nature VALUES("109","357","Student","357","2022-12-28","Crisis","sdasasfa","sfdsfda","asdsadas","Pending","2022-12-28 19:49:15");
INSERT INTO refferals_nature VALUES("110","357","Student","355","2022-12-30","Personal","dawd","dawd","dawd","Pending","2022-12-30 14:34:37");
INSERT INTO refferals_nature VALUES("111","357","Student","355","2022-12-30","Crisis","dawd","dawd","dawd","Pending","2022-12-30 14:34:37");
INSERT INTO refferals_nature VALUES("112","357","Student","355","2022-12-30","Career","dadwada","dadawdwa","dawdw","Pending","2022-12-30 15:00:54");
INSERT INTO refferals_nature VALUES("113","357","Student","355","2022-12-30","Career","dawdawdaw","dawdawda","dadwa","Pending","2022-12-30 15:37:27");
INSERT INTO refferals_nature VALUES("114","357","Student","355","2022-12-30","Personal","dawdawdaw","dawdawda","dadwa","Pending","2022-12-30 15:37:27");
INSERT INTO refferals_nature VALUES("115","361","Staff","349","2022-12-30","Career","dwadwadwad","dawdwad","dawdwda","Pending","2022-12-30 15:54:57");
INSERT INTO refferals_nature VALUES("116","361","Staff","349","2022-12-30","Personal","dwadwadwad","dawdwad","dawdwda","Pending","2022-12-30 15:54:57");
INSERT INTO refferals_nature VALUES("117","355","Staff","349","2022-12-30","Career","dawdwdwa","ddawdwad","dawdwd","Pending","2022-12-30 16:02:09");
INSERT INTO refferals_nature VALUES("118","355","Staff","349","2022-12-30","Personal","dawdwdwa","ddawdwad","dawdwd","Pending","2022-12-30 16:02:09");
INSERT INTO refferals_nature VALUES("119","357","Staff","349","2022-12-30","Academic","dwdwd","kukukhu","kuhlulul","Pending","2022-12-30 16:02:22");
INSERT INTO refferals_nature VALUES("120","357","Staff","349","2022-12-30","Career","dwdwd","kukukhu","kuhlulul","Pending","2022-12-30 16:02:22");
INSERT INTO refferals_nature VALUES("121","357","Staff","349","2022-12-30","Personal","dwdwd","kukukhu","kuhlulul","Pending","2022-12-30 16:02:22");
INSERT INTO refferals_nature VALUES("122","357","Staff","349","2022-12-30","Crisis","dwdwd","kukukhu","kuhlulul","Pending","2022-12-30 16:02:22");
INSERT INTO refferals_nature VALUES("123","357","Staff","349","2022-12-30","Career","dawdwd","dawdw","ddawdwd","Pending","2022-12-30 17:12:46");
INSERT INTO refferals_nature VALUES("124","357","Student","355","2022-12-30","Academic","dawdwad","dawdwad","dawdaw","Pending","2022-12-30 17:59:30");
INSERT INTO refferals_nature VALUES("125","359","Student","355","2022-12-30","Career","dawdwd","dwadwddaw","dawdwd","Pending","2022-12-30 18:00:06");
INSERT INTO refferals_nature VALUES("126","359","Student","355","2022-12-30","Personal","dawdwd","dwadwddaw","dawdwd","Pending","2022-12-30 18:00:06");
INSERT INTO refferals_nature VALUES("127","357","Student","355","2022-12-30","Academic","dawdwad","dwadwd","dawdwd","Pending","2022-12-30 20:47:01");
INSERT INTO refferals_nature VALUES("128","357","Student","355","2022-12-30","Career","dawdwad","dwadwd","dawdwd","Pending","2022-12-30 20:47:01");
INSERT INTO refferals_nature VALUES("129","355","Staff","349","2022-12-30","Career","dawdawdwad","dawdwad","dawdwad","Pending","2022-12-30 21:11:48");
INSERT INTO refferals_nature VALUES("130","355","Staff","349","2022-12-30","Personal","dawdawdwad","dawdwad","dawdwad","Pending","2022-12-30 21:11:48");
INSERT INTO refferals_nature VALUES("131","357","Staff","349","2022-12-30","Career","dawdwd","dwadgdhtf","htfhfthft","Pending","2022-12-30 23:57:57");
INSERT INTO refferals_nature VALUES("132","357","Staff","349","2022-12-30","Personal","dawdwd","dwadgdhtf","htfhfthft","Pending","2022-12-30 23:57:57");



CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `refferal_id` int(20) NOT NULL,
  `offense` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO roles VALUES("1","administrator");
INSERT INTO roles VALUES("2","staff");
INSERT INTO roles VALUES("3","student");
INSERT INTO roles VALUES("4","counselor");



CREATE TABLE `slides` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `slide_title` varchar(500) NOT NULL,
  `slide_picture` varchar(500) NOT NULL,
  `slide_date` varchar(500) NOT NULL,
  `slide_status` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO slides VALUES("1","dawdawd","C:\xampp\htdocs\imagesmake-the-right-choice-thumb.png","2022-12-29","Active");
INSERT INTO slides VALUES("2","hfnthtfh","C:\xampp\htdocs\imagescounseling banner.jpg","2022-12-29","Active");
INSERT INTO slides VALUES("3","dawdawd","C:\xampp\htdocs\imagesDoc1.png","","Active");



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
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=utf8mb4;

INSERT INTO sms VALUES("164","1","355","hi bangeles","1","2022-12-16 15:31:01","355","0");
INSERT INTO sms VALUES("165","355","1","hi guidance counselor","1","2022-12-16 15:31:54","355","0");
INSERT INTO sms VALUES("166","355","1","hi guidance counselor","1","2022-12-25 00:57:02","355","0");
INSERT INTO sms VALUES("167","1","355","hi guidance","1","2022-12-27 12:09:29","355","0");
INSERT INTO sms VALUES("168","1","355","hi bangeles","1","2022-12-27 12:09:35","355","0");
INSERT INTO sms VALUES("169","1","373","Hi abigail","1","2022-12-27 12:09:53","373","0");
INSERT INTO sms VALUES("170","1","355","dfsdfsdfd","1","2022-12-29 21:54:28","355","0");
INSERT INTO sms VALUES("171","353","1","hello","1","2022-12-29 22:33:02","353","0");
INSERT INTO sms VALUES("172","1","353","hakdog","1","2022-12-29 22:42:01","353","0");
INSERT INTO sms VALUES("173","1","353","ha","1","2022-12-29 22:42:10","353","0");
INSERT INTO sms VALUES("174","355","1","dawdawd","1","2022-12-30 20:27:39","355","0");



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
  `profile_picture` varchar(999) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES("1","1001","Castor","Mary Faith","","Angeles City","09123456789","Female","0000-00-00","","Guidance Counselor","","","Guidance","","","maryfaith.castor@angeles.sti.edu","MFCastor","1","2022-12-30 14:20:41","0","1","0","0","0");
INSERT INTO users VALUES("349","2000257868","Bennan","Chris","","PORAC","09613688865","","0000-00-00","Academics","Kitchen Custodian","","","Staff","Active","","bennan.257868@angeles.sti.edu.ph","CB257868","2","2023-01-03 18:04:09","0","0","0","0","0");
INSERT INTO users VALUES("350","2000251944","Dela Cruz","Katrina","Womax","ANGELES","09195591329","","0000-00-00","Academics","Kitchen Custodian","","","Staff","Active","","delacruz.251944@angeles.sti.edu.ph","KDC251944","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("351","2000224235","Guzman","Rhodes","Daniella","MAGALANG","09195591329","","0000-00-00","Academics","Lab Custodian","","","Staff","Active","","guzman.224235@angeles.sti.edu.ph","RG224235","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("352","2000251942","Williams","Jane","George","272 SINURA AVENUE ","09195591329","","0000-00-00","Administrative","Administrative Officer","","","Staff","Active","","williams.251942@angeles.sti.edu.ph","JW251942","2","2022-12-16 14:08:57","0","0","0","0","0");
INSERT INTO users VALUES("353","2000253423","Buna","David","Santos","121 SAN SIMON, MABALACAT, PAMPANGA","09195591329","","0000-00-00","Administrative","Record","","","Staff","Active","","buna.253423@angeles.sti.edu.ph","DB253423","2","2022-12-30 17:00:39","0","0","0","0","0");
INSERT INTO users VALUES("354","2000432424","Parker","Kevin","","123 PAMPANG AVENUE BALIBAGO","09195591329","","0000-00-00","Administrative","Record","","","Staff","Active","","parker.432424@angeles.sti.edu.ph","KP432424","2","2022-12-23 00:22:58","0","0","0","0","0");
INSERT INTO users VALUES("355","2000245727","Bangeles","Rowella","Mallari","213 sta ana st. angeles city","09121312331","","0000-00-00","","","HUMMS","Grade 11","Student","Active","","bangeles.245727@angeles.sti.edu.ph","RB245727","3","2022-12-30 18:46:28","1","0","0","0","1");
INSERT INTO users VALUES("356","2000258351","Baquiran","Charmaine"," ","B11 L13 PHASE 4 COBAL  ST. MANSFIELD RESIDENCES STO DOMINGO, ANGELES CITY    ","09123456789","","0000-00-00","","","CUART","Grade 11","Student","Active","","baquiran.258351@angeles.sti.edu.ph","CB258351","3","2022-12-28 16:55:21","0","0","0","0","0");
INSERT INTO users VALUES("357","2000232823","Acub","Marqueyza","Butic","03 LAURA ST. BRGY. LAKANDULA       MABALACAT CITY","09217112098","","0000-00-00","","","MAWD","Grade 12","Student","Active","","acub.232823@angeles.sti.edu.ph","MA232823","3","2022-12-30 20:50:09","1","0","0","0","1");
INSERT INTO users VALUES("358","2000232816","Acub","Rina Elhym","Butic","03 LAURA ST. BRGY LAKANDULA       MABALACAT CITY","09217238346","","0000-00-00","","","CCTECH","Grade 12","Student","Active","","acub.232816@angeles.sti.edu.ph","REA232816","3","2022-12-22 23:58:18","0","0","0","0","0");
INSERT INTO users VALUES("359","2000257346","Abadies","Gefel","Nabor","BLK.8 LOT 16 SOLANA FRONTERA FLAMINGO ST. SAPALIBUTAD   ANGELES","09269979985","","0000-00-00","","","BSTM","1st Year","Student","Active","","abadies.257346@angeles.sti.edu.ph","GA257346","3","2022-12-30 20:51:51","1","0","0","0","0");
INSERT INTO users VALUES("360","2000197721","Abasolo","Richard","Imperial","34-24 SARITA ST. DIAMOND SUBD.     ANGELES CITY","09199925436","","0000-00-00","","","BSTM","3rd Year","Student","Active","","abasolo.197721@angeles.sti.edu.ph","RA197721","3","2022-12-23 16:37:13","0","0","0","0","0");
INSERT INTO users VALUES("361","2000155605","Abasula","Criselda","Oloya","B45 L65 MAPAGMALASAKIT ST. FIESTA COMMUNITIES MANIBAUG PORAC PAMP.  ","09261696596","","0000-00-00","","","BSTM","3rd Year","Student","Active","","abasula.155605@angeles.sti.edu.ph","CA155605","3","2022-12-22 23:58:06","0","0","0","0","0");
INSERT INTO users VALUES("362","2000273259","Abella","Ella Mae","Ongray","13033 PERAS ST. DAU HOMESITE     MABALACAT","09183593384","","0000-00-00","","","BSTM","1st Year","Student","Active","","abella.273259@angeles.sti.edu.ph","EMA273259","3","2022-12-23 00:22:54","0","0","0","0","0");
INSERT INTO users VALUES("363","2000266053","Abog","Jezza","Reyes","BLK. 19 LOT 13 17 ST MRC BRGY. MAWAQUE MABALACAT   ANGELES","09475861724","","0000-00-00","","","BSTM","1st Year","Student","Active","","abog.266053@angeles.sti.edu.ph","JA266053","3","2022-12-23 00:22:59","0","0","0","0","0");
INSERT INTO users VALUES("364","2000109278","Acar","Mark Joseph","Damalia","184 IPIL-IPIL PUROK 7 PULONG MARAGUL       ANGELES CITY","09265333300","","0000-00-00","","","BSIT","2nd Year","Student","Active","","acar.109278@angeles.sti.edu.ph","MJA109278","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("365","2000200086","Alan","Gerald"," ","BLK 19 LOT 31 ANA ST. XEVERA BRGY TABUN     MABALACAT","09303434579","","0000-00-00","","","BSBAOM","3rd Year","Student","Active","","alan.200086@angeles.sti.edu.ph","GA200086","3","2022-12-23 00:29:43","0","0","0","0","0");
INSERT INTO users VALUES("366","2000041648","Alonzo","Ruzzel Justin"," ","785 MABINI STREET PLARIDEL 1 MALABANIAS       ANGELES CITY","09752434037","","0000-00-00","","","BSHM","4th Year","Student","Active","","alonzo.041648@angeles.sti.edu.ph","RJA041648","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("367","2000083331","Anciano","Erica Mae","Sotero","JAOVIL       ANGELES CITY","09355832215","","0000-00-00","","","BSHM","3rd Year","Student","Active","","anciano.083331@angeles.sti.edu.ph","EMA083331","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("368","2000080306","Anore","Justine Andrielle","Ocampo","31-14 SY OROSA ST. DIAMOND SUB. BALIBAGO   ANGELES CITY","09167416756","","0000-00-00","","","BSHM","3rd Year","Student","Active","","anore.080306@angeles.sti.edu.ph","JAA080306","3","2022-12-16 14:09:31","0","0","0","0","0");
INSERT INTO users VALUES("372","0","sadasdsad","dasdasd","sadasd","sadsadsa","asdasd","","0000-00-00","Academics","Kitchen Custodian","","","Staff","Active","","sadasdsad.adsdas@angeles.sti.edu.ph","DSadsdas","2","2022-12-28 18:04:27","0","0","0","0","0");
INSERT INTO users VALUES("373","2000092923","Nazal","Abigail","Macales","Malabanias","09182806421","","","","","BSIT","4th Year","Student","Active","","nazal.092923@angeles.sti.edu.ph","AN092923","3","2022-12-27 23:40:36","0","0","0","0","1");

