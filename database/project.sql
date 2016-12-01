-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: examination
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('raashid2012','rashid');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analog`
--

DROP TABLE IF EXISTS `analog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analog` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analog`
--

LOCK TABLES `analog` WRITE;
/*!40000 ALTER TABLE `analog` DISABLE KEYS */;
INSERT INTO `analog` VALUES ('To prevent a DC return between ource and load it is necessary to use','A)resistor between source and load','B)inductor between source and load','C)capacitor between source and load','D)either (a) and (b)','C)capacitor between source and load'),('Which of the following oscillators is suitable for frequencies in the rangeof mega hertz ?','A)RC phase shift','B)Wien bridge','C)Hartley','D)Both (a) nad (c)','C)Hartley'),('To protect the diodes in a rectifier and capacitor input filter circuit it is necessary to use ?','A)Surge resistor','B)Surge inductor','C)Surge capacitor','D)both (a) and (b)','A)Surge resistor');
/*!40000 ALTER TABLE `analog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(50) DEFAULT NULL,
  `op3` varchar(50) DEFAULT NULL,
  `op4` varchar(50) DEFAULT NULL,
  `ans` varchar(50) DEFAULT NULL,
  `rans` varchar(50) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compiler`
--

DROP TABLE IF EXISTS `compiler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compiler` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `qno` int(11) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compiler`
--

LOCK TABLES `compiler` WRITE;
/*!40000 ALTER TABLE `compiler` DISABLE KEYS */;
INSERT INTO `compiler` VALUES ('Parshing is also known as ?','A)Lexical analysis','B)Syntax analysis','C)Semantic analysis','D)code generator','B)Syntax analysis',1),('Predictive parsers can be ?','A)Recursive','B)Constructive','C)Non recursive','D)Both A and B','A)Recursive',2),('The Linker is?','A)is same as the loader','B)is required to create a load module','C)is always used before programs are excuted','D)non of above','B)is required to create a load module',3);
/*!40000 ALTER TABLE `compiler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_structure`
--

DROP TABLE IF EXISTS `data_structure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_structure` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_structure`
--

LOCK TABLES `data_structure` WRITE;
/*!40000 ALTER TABLE `data_structure` DISABLE KEYS */;
INSERT INTO `data_structure` VALUES ('What data structure is used for depth first traversal of a graph','A)Queue','B)Stack','C)List','D)none of the above','B)Stack'),('Which of the following is example of in-place algorithm','A)Bubble sort','B)Merge sort','C)Insertion sort','D)All of the above','B)Merge sort'),('Which of the following uses memoization?','A)Greedy approach','B)Divide and conquer approach','C)Dynamic programming approach','D)None of the above','C)Dynamic programming approach'),('Which of the following usees FIFO method','A) Queue','B)Stack','C)Hash Table','D) Binary Search Tree','A) Queue'),('Which one of the below mentioned is linear data structure ','A)Queue','B)Stack','C)Array','D)All of the above.','D)All of the above.'),('Which of the following is not possible with an array in C programming langauge','A)Declaration','B)Definition','C) Dynamic Allocation','D)Array of string','C) Dynamic Allocation'),('Access time of a binary search tree may go worse in terms of time complexity upto','A)ÎŸ(n2)','B)ÎŸ(n log n)','C)ÎŸ(n)','D)ÎŸ(1)','C)ÎŸ(n)'),('In linear search algorithm the Worst case occurs when','A) The item is somewhere in the middle of the array','B) The item is not in the array at all','C)The item is the last element in the array','D)The item is the last element in the array or is not there at all','D)The item is the last element in the array or is not there at all'),('Arrays are best data structures','A)for relatively permanent collections of data','B)for the size of the structure and the data in the structure are constantly changing','C)for both of above situation','D) for none of above situation','A)for relatively permanent collections of data'),('Which of the following case does not exist in complexity theory\r\n','A)Best case','B) Worst case','C)Average case','D)Null case','D)Null case'),('Finding the location of the element with a given value is:','A)Traversal','B)Search','C)Sort','D) None of above','B)Search');
/*!40000 ALTER TABLE `data_structure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `databas`
--

DROP TABLE IF EXISTS `databas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `databas` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `qno` int(11) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `databas`
--

LOCK TABLES `databas` WRITE;
/*!40000 ALTER TABLE `databas` DISABLE KEYS */;
INSERT INTO `databas` VALUES ('Aggregate functions are functions that take a as input and return a single value','a) Collection of values','b) Single value','c) Aggregate value','d) Both a & b','a) Collection of values',0),('A Boolean data type that can take values true, false, and','a) 1','b) 0','c) Null','d) Unknown','d) Unknown',2),('Which of the following indicates the minimum number of entities that must be involved in a relationship?\r\n','a)Minimum cardinality','b)Maximum cardinality','c)ERD','d)Greater Entity Count (GEC)','a)Minimum cardinality',3),('In which of the following is a single-entity instance of one type related to many entity instances of another type?','a)One-to-One Relationship','b)One-to-Many Relationship','c)Many-to-Many Relationship','d)Composite Relationship','b)One-to-Many Relationship',4),('SQL stands for?','a)Structured Query Language','b)Sequential Query Language','c)Structured Question Language','d)Sequential Question Language','a)Structured Query Language',5),('The following are functions of a DBMS except ','a)creating and processing forms','b)creating databases','c)processing data','d)administrating databases','a)creating and processing forms',6),('Which of the following is not considered to be a basic element of an enterprise-class database system','a)Users','b)Database applications','c)DBMS','d)COBOL programs','d)COBOL programs',7),('The SQL command to create a table is:','a)MAKE TABLE.','b)ALTER TABLE.','c)DEFINE TABLE.','d)CREATE TABLE.','d)CREATE TABLE.',8),('The DROP TABLE statement','a)deletes the table structure only.','b)deletes the table structure along with the table data.','c)works whether or not referential integrity constraints would be violated.','d)is not an SQL statement.','b)deletes the table structure along with the table data.',9),('SQL views can be used to hide:','a)columns and rows only.','b)complicated SQL syntax only.','c)both of the above can be hidden by an SQL view.','d)None of the above is correct.','c)both of the above can be hidden by an SQL view.',10);
/*!40000 ALTER TABLE `databas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `dname` varchar(50) DEFAULT NULL,
  `Did` varchar(20) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES ('IT','Dept1'),('EE','Dept2');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `digital_system`
--

DROP TABLE IF EXISTS `digital_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `digital_system` (
  `qno` int(11) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `digital_system`
--

LOCK TABLES `digital_system` WRITE;
/*!40000 ALTER TABLE `digital_system` DISABLE KEYS */;
/*!40000 ALTER TABLE `digital_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `power_electronics`
--

DROP TABLE IF EXISTS `power_electronics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `power_electronics` (
  `qno` int(11) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `power_electronics`
--

LOCK TABLES `power_electronics` WRITE;
/*!40000 ALTER TABLE `power_electronics` DISABLE KEYS */;
/*!40000 ALTER TABLE `power_electronics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `name` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Did` varchar(50) DEFAULT NULL,
  `rollno` varchar(20) DEFAULT NULL,
  `pquestion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  KEY `Did` (`Did`),
  CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `department` (`Did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES ('Aditya kumar','aditya123','123456','Dept1','14IT105','kumar'),('Aditya anurag','adtiya321','123456','Dept2','14ee125','ad'),('kapil sen','kapil212','123456','Dept1','14IT219','kaps'),('manoj yadav','manoj123','123456','Dept2','14ee122','manu'),('rajesh ','rajesh123','123456','dept1','14it236','rajju'),('raashid','rashid123','123456','dept1','14it122','alam'),('Risheek','risheek123','123456','dept1','14IT236','rishi'),('yousuf alam','yousuf123','123456','Dept2','14EE213','yousuf');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `examid` varchar(20) NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `marks_obtain` int(11) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `percentage` varchar(20) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`examid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES ('252','yousuf123','yousuf alam',4,10,'10/11/16','40','838:59:59','analog'),('371','rajesh123','rajesh ',1,10,'10/11/16','10','838:59:59','Web_tech'),('410','rashid123','raashid',5,10,'11/11/16','50','00:00:00','Databas'),('510','rashid123','raashid',1,10,'10/11/16','10','00:00:00','Databas'),('519','rashid123','raashid',5,10,'10/11/16','50','00:00:00','Databas'),('63','rashid123','raashid',5,10,'31/10/16','50','838:59:59','Databas'),('682','rashid123','raashid',5,10,'31/10/16','50','838:59:59','Databas'),('718','rashid123','raashid',5,10,'11/11/16','50','00:00:00','Databas'),('799','rashid123','raashid',2,10,'10/11/16','20','00:00:00','Databas'),('892','aditya123','Aditya kumar',1,10,'10/11/16','10','838:59:59','Data_structure');
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signal_system`
--

DROP TABLE IF EXISTS `signal_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signal_system` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signal_system`
--

LOCK TABLES `signal_system` WRITE;
/*!40000 ALTER TABLE `signal_system` DISABLE KEYS */;
INSERT INTO `signal_system` VALUES ('An energy signal has G(f)=10. its energy dencity spectrum is ?','A)10','B)100','C)50','D)20','B)100'),('The Laplace transform of impulse @(t) is ?','A)1','B)1/s','C)s','D)1/s^2','A)1'),('Which of following is recursive system?','A)y(n - 1)','B)y(n + 1)','C)y(n)','D)y(n) + y(n + 1)','A)y(n - 1)'),('If the system transfer function of a discrete time system  then system is','A)stable','B)unstable','C)stable at z = 1','D)unstable at z = 1','A)stable'),('Two rectangular waveforms of duration t1 and t2 seconds are convolved. What is the shape of the resulting waveform?','A)Triangular','B)Rectangular','C)Trapezoidal','D)Semi-circular','C)Trapezoidal'),('The function (sin x)/x','A)has a period 2p, decays with increasing x and has zeros at np, n = Â± 1, Â± 2','B)has a period p','C)has a period p/2','D)has a period 2p, decays with increasing x, is an even function and has zeros at np, n = Â± 1, Â± 2','D)has a period 2p, decays with increasing x, is an even function and has zeros at np, n = Â± 1, Â± 2'),('Auto correlation for t = 0 is equal to','A)average power S of waveform','B)square of average power S of waveform','C)half of average power S of waveform','D)square root of average power S of waveform','A)average power S of waveform'),('For an ac sinusoidal wave, the rms value is 10 A. For the same wave delayed by 60Â° in each half cycle, the rms value is likely to be','A)10 A','B)7.07 A','C)6.35 A','D)3.5 A','A)10 A'),('If a sequence is causal then ROC is (where a is any number)','A)|z| > a','B)|z| < a','C)|z| = a','D)Entire Plane','A)|z| > a'),('A signum function is\r\n','A)zero for t greater than zero','B)zero for t less than zero','C)unity for t greater than zero','D)2âˆª(t) - 1','D)2âˆª(t) - 1'),('If a number of even functions are added, the resultant sum is','A)even function','B)odd funtion','C)either even or odd function','D)mixture of odd amd even functions','A)even function');
/*!40000 ALTER TABLE `signal_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_tech`
--

DROP TABLE IF EXISTS `web_tech`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_tech` (
  `question` varchar(500) DEFAULT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `op4` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `qno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_tech`
--

LOCK TABLES `web_tech` WRITE;
/*!40000 ALTER TABLE `web_tech` DISABLE KEYS */;
INSERT INTO `web_tech` VALUES ('HTML stnad for ?','A)Hyper text markup language','B)High Text markup language','C)Hyper tabular markup language','D) non of these','A)Hyper text markup language',NULL),('Markup tags tell the web browser','A)How to organise the page','B)How to display the page','C)How to display message box on page','D)Non of these','B)How to display the page',NULL),('WWW is based on which model','A)Local-sever','B)Client-server','C)3-tier','D)None of these','B)Client-server',NULL),('Which of the following attributes of text box control allow to limit the maximum character?\r\n','A)size','B)len','C)maxlength','D)all of these','C)maxlength',NULL),('HTML is a subset of','A)SGMT','B)SGML','C)SGMD','D)None of these','B)SGML',NULL),('The tag which allows you to rest other HTML tags within the description is','A)<TH>','B)<TD>','C)<TR>','D)<CAPTION>','D)<CAPTION>',NULL),('Dynamic web page','A)is same every time whenever it displays','B)generates on demand by a program or a request from browser','C)both (a) and (b)','D)none of the mentioned','B)generates on demand by a program or a request from browser',NULL),('URL stands for','A)unique reference label','B)uniform reference label','C)uniform resource locator','D)unique resource locator','C)uniform resource locator',NULL),('What is document object model (DOM)?','A)convention for representing and interacting with objects in html documents','B)application programming interface','C)hierarchy of objects in ASP.NET','D)none of the mentioned','A)convention for representing and interacting with objects in html documents',NULL),('What is a web browser?','A)a program that can display a web page','B)a program used to view html documents','C) it enables user to access the resources of internet','D) all of the mentioned','D) all of the mentioned',NULL),('Common gateway interface is used to','A)generate executable files from web content by web server','B)generate web pages','C)stream videos','D)none of the mentioned','A)generate executable files from web content by web server',NULL);
/*!40000 ALTER TABLE `web_tech` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-15 19:49:52
