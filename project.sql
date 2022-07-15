-- MySQL dump 10.13  Distrib 8.0.15, for osx10.14 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Icecream`
--

DROP TABLE IF EXISTS `Icecream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Icecream` (
  `Icecream_code` int(11) NOT NULL AUTO_INCREMENT,
  `Icecream_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Explanation` text COLLATE utf8mb4_general_ci NOT NULL,
  `Season_Fixed` tinyint(1) NOT NULL,
  `Sweet_Fruity_Nutty` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `Kcal` int(11) NOT NULL,
  `Img_ref` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`Icecream_code`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Icecream`
--

LOCK TABLES `Icecream` WRITE;
/*!40000 ALTER TABLE `Icecream` DISABLE KEYS */;
INSERT INTO `Icecream` VALUES (1,'블랙소르베','반전 매력이 가득! 까만 아이스크림에 상큼한 맛이 가득',1,'상큼',140,'/BR/assets/img/Icecream/블랙소르베.png'),(2,'아이스죠리퐁','고소한 죠리퐁 아이스크림과 우유향 아이스크림에 고소한 초코코팅 죠리퐁이 쏘옥!',1,'달콤',267,'/BR/assets/img/Icecream/아이스죠리퐁.png'),(3,'아이스카라멜콘땅콩','카라멜콘땅콩 아이스크림과 카라멜 아이스크림에 바삭한 땅콩이 가득!',1,'고소',267,'/BR/assets/img/Icecream/아이스카라멜콘땅콩.png'),(4,'31올스타','초콜릿 아이스크림, 바닐라향 아이스크림에 초콜릿칩과 크림샌드 쿠키, 카라멜 리본이 쏘옥~',1,'달콤',291,'/BR/assets/img/Icecream/31올스타.png'),(5,'쫀떡궁합','고소한 흑임자, 인절미 아이스크림에 쫄깃한 떡리본과 바삭한 프랄린 피칸이 쏙쏙!',0,'고소',298,'/BR/assets/img/Icecream/쫀떡궁합.png'),(6,'애플민트','상큼한 청사과향과 시원한 민트향이 기분까지 상쾌하게',1,'상큼',189,'/BR/assets/img/Icecream/애플민트.png'),(7,'너는참달고나','달콤한 카라멜 아이스크림에 바삭한 달고나가 쏘옥~',1,'달콤',261,'/BR/assets/img/Icecream/너는참달고나.png'),(8,'바람과함께사라지다','블루베리와 딸기로 상큼함을 더한 치즈케이크 한조각',0,'달콤',223,'/BR/assets/img/Icecream/바람과함께사라지다.png'),(9,'엄마는외계인','밀크, 다크, 화이트 세가지 맛 초콜릿에 달콤 바삭 초코볼',0,'달콤',285,'/BR/assets/img/Icecream/엄마는외계인.png'),(10,'이상한나라의솜사탕','부드럽고 달콤한 솜사탕과 함께 떠나는 이상한 나라로의 여행',0,'달콤',287,'/BR/assets/img/Icecream/이상한나라의솜사탕.png'),(11,'쿠키앤크림','바닐라향 아이스크림에 바삭한 초콜릿 쿠키가 듬뿍 들어있는 제품',0,'달콤',245,'/BR/assets/img/Icecream/쿠키앤크림.png'),(12,'초코나무숲','2014년 아이스크림 콘테스트 1위 선정작!',0,'달콤',290,'/BR/assets/img/Icecream/초코나무숲.png'),(13,'31요거트','유산균이 살아 있는 오리지널 요거트 아이스크림',0,'상큼',196,'/BR/assets/img/Icecream/31요거트.png'),(14,'다크초코나이트','초콜릿 프레첼과 함께 즐기는 진한 다크 초콜릿의 맛',0,'달콤',270,'/BR/assets/img/Icecream/다크초코나이트.png'),(15,'피스타치오아몬드','피스타치오향과 아몬드가 만나 고소함이 두배!',0,'고소',288,'/BR/assets/img/Icecream/피스타치오아몬드.png'),(16,'월넛','고소하고 향긋한 호두 아이스크림에 호두가 듬뿍 들어있는 제품',0,'고소',276,'/BR/assets/img/Icecream/월넛.png'),(17,'아몬드봉봉','입안 가득 즐거운 초콜릿, 아몬드로 더욱 달콤하게!',0,'고소',243,'/BR/assets/img/Icecream/아몬드봉봉.png'),(18,'사랑에빠진딸기','크런치 초콜릿, 치즈 케이크, 스트로베리가 듬뿍 들어있는 아이스크림',0,'달콤',285,'/BR/assets/img/Icecream/사랑에빠진딸기.png'),(19,'베리베리스트로베리','새콤상큼 딸기 과육이 듬뿍!',0,'달콤',218,'/BR/assets/img/Icecream/베리베리스트로베리.png'),(20,'민트초콜릿칩','쿨한 그녀들의 선택! 상쾌한 민트향에 초코칩까지!',0,'달콤',265,'/BR/assets/img/Icecream/민트초콜릿칩.png'),(21,'슈팅스타','톡톡 터지는 팝핑 캔디와 스프링클 캔디,상큼한 체리 시럽이 들어있는 제품',0,'달콤',253,'/BR/assets/img/Icecream/슈팅스타.png'),(22,'러브미','부드럽고 상큼한 바닐라향, 스트로베리, 블루베리 아이스크림 안에 색색깔의 롤리팝 캔디가 들어있는 제품',1,'달콤',221,'/BR/assets/img/Icecream/러브미.png'),(23,'레인보우샤베트','상큼한 파인애플, 오렌지, 라즈베리 샤베트',0,'상큼',162,'/BR/assets/img/Icecream/레인보우샤베트.png'),(24,'바닐라','부드럽고 깔끔한 바닐라 아이스크림',0,'달콤',197,'/BR/assets/img/Icecream/바닐라.png'),(25,'초콜릿','진하고 부드러운 정통 초콜릿 아이스크림',0,'달콤',245,'/BR/assets/img/Icecream/초콜릿.png'),(26,'뉴욕치즈케이크','부드럽게 즐기는 뉴욕식 정통 치즈케이크 아이스크림	',0,'달콤',295,'/BR/assets/img/Icecream/뉴욕치즈케이크.png'),(27,'그린티','엄선된 녹차를 사용한 싱그러운 그린티 아이스크림',0,'달콤',220,'/BR/assets/img/Icecream/그린티.png'),(28,'자모카아몬드훠지','깊고 풍부한 자모카 아이스크림에 고소한 아몬드와 초콜릿 훠지 시럽이 들어있는 제품',0,'고소',273,'/BR/assets/img/Icecream/자모카아몬드훠지.png'),(29,'체리쥬빌레','체리과육이 탱글탱글 씹히는 체리 아이스크림	',0,'달콤',201,'/BR/assets/img/Icecream/체리쥬빌레.png'),(30,'초콜릿무스','초콜릿 칩이 들어있는 진한 초콜릿 아이스크림',0,'달콤',280,'/BR/assets/img/Icecream/초콜릿무스.png');
/*!40000 ALTER TABLE `Icecream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Icecream_Ingredients`
--

DROP TABLE IF EXISTS `Icecream_Ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Icecream_Ingredients` (
  `Icecream_code` int(11) NOT NULL,
  `Ingredient_code` int(11) NOT NULL,
  PRIMARY KEY (`Icecream_code`,`Ingredient_code`),
  KEY `Ingredient_code` (`Ingredient_code`),
  CONSTRAINT `icecream_ingredients_ibfk_1` FOREIGN KEY (`Icecream_code`) REFERENCES `icecream` (`Icecream_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `icecream_ingredients_ibfk_2` FOREIGN KEY (`Ingredient_code`) REFERENCES `ingredients` (`Ingredient_code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Icecream_Ingredients`
--

LOCK TABLES `Icecream_Ingredients` WRITE;
/*!40000 ALTER TABLE `Icecream_Ingredients` DISABLE KEYS */;
INSERT INTO `Icecream_Ingredients` VALUES (8,1),(18,1),(12,2),(27,2),(7,3),(2,4),(3,4),(4,4),(5,4),(7,4),(8,4),(9,4),(10,4),(11,4),(12,4),(14,4),(17,4),(18,4),(20,4),(21,4),(22,4),(26,4),(30,4),(8,5),(18,5),(19,5),(22,5),(3,6),(5,6),(14,6),(18,6),(1,7),(23,8),(1,9),(6,10),(20,10),(2,11),(3,11),(4,11),(5,11),(8,11),(9,11),(11,11),(12,11),(14,11),(18,11),(21,11),(26,11),(4,12),(11,12),(22,12),(24,12),(8,13),(22,13),(21,14),(15,15),(17,15),(28,15),(23,16),(1,17),(13,18),(2,19),(3,19),(4,19),(5,19),(6,19),(7,19),(8,19),(9,19),(10,19),(11,19),(12,19),(13,19),(14,19),(15,19),(16,19),(17,19),(18,19),(19,19),(20,19),(21,19),(22,19),(23,19),(24,19),(25,19),(26,19),(27,19),(28,19),(29,19),(30,19),(5,20),(28,21),(2,22),(5,23),(6,24),(29,25),(21,26),(9,27),(9,28),(11,28),(12,28),(14,28),(17,28),(25,28),(28,28),(30,28),(4,29),(20,29),(30,29),(8,30),(18,30),(26,30),(3,31),(7,31),(11,32),(18,33),(4,34),(23,35),(21,36),(14,37),(15,38),(5,39),(16,40),(5,41);
/*!40000 ALTER TABLE `Icecream_Ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ingredients`
--

DROP TABLE IF EXISTS `Ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Ingredients` (
  `Ingredient_code` int(11) NOT NULL AUTO_INCREMENT,
  `Ingredient_name` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Allergy` tinyint(1) NOT NULL,
  `Unique_taste` tinyint(1) NOT NULL,
  PRIMARY KEY (`Ingredient_code`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ingredients`
--

LOCK TABLES `Ingredients` WRITE;
/*!40000 ALTER TABLE `Ingredients` DISABLE KEYS */;
INSERT INTO `Ingredients` VALUES (1,'계란',1,0),(2,'그린티',0,1),(3,'달고나',0,1),(4,'대두',1,0),(5,'딸기',1,0),(6,'땅콩',1,0),(7,'라임',1,0),(8,'라즈베리',1,0),(9,'레몬',1,0),(10,'민트',0,1),(11,'밀',1,0),(12,'바닐라',0,0),(13,'블루베리',1,0),(14,'스프링클 캔디',0,0),(15,'아몬드',1,0),(16,'오렌지',1,0),(17,'오징어',0,0),(18,'요거트',0,0),(19,'우유',1,0),(20,'인절미',0,0),(21,'자모카',0,0),(22,'죠리퐁',0,0),(23,'찹쌀떡',0,1),(24,'청사과',1,0),(25,'체리',1,0),(26,'체리시럽',0,0),(27,'초코볼',0,0),(28,'초콜릿',0,1),(29,'초콜릿칩',0,0),(30,'치즈케이크',0,1),(31,'카라멜',0,1),(32,'쿠키',0,0),(33,'크런치초콜릿',0,0),(34,'크림샌드쿠키',0,0),(35,'파인애플',1,0),(36,'팝핑캔디',0,1),(37,'프레첼',0,0),(38,'피스타치오',0,0),(39,'피칸',0,0),(40,'호두',1,0),(41,'흑임자',0,0);
/*!40000 ALTER TABLE `Ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `order_code` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`order_code`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'테스트');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_icecream`
--

DROP TABLE IF EXISTS `orders_icecream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders_icecream` (
  `Order_code` int(11) NOT NULL,
  `Icecream_code` int(11) NOT NULL,
  PRIMARY KEY (`Order_code`,`Icecream_code`),
  KEY `Icecream_code` (`Icecream_code`),
  CONSTRAINT `orders_icecream_ibfk_2` FOREIGN KEY (`Icecream_code`) REFERENCES `icecream` (`Icecream_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_icecream_ibfk_3` FOREIGN KEY (`Order_code`) REFERENCES `orders` (`order_code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_icecream`
--

LOCK TABLES `orders_icecream` WRITE;
/*!40000 ALTER TABLE `orders_icecream` DISABLE KEYS */;
INSERT INTO `orders_icecream` VALUES (1,3),(1,4);
/*!40000 ALTER TABLE `orders_icecream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ReviewsOfIcecream`
--

DROP TABLE IF EXISTS `ReviewsOfIcecream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ReviewsOfIcecream` (
  `Review_code` int(11) NOT NULL AUTO_INCREMENT,
  `Icecream_code` int(11) NOT NULL,
  `Contents` text COLLATE utf8mb4_general_ci NOT NULL,
  `Score` int(11) NOT NULL,
  PRIMARY KEY (`Review_code`),
  KEY `review_icecream_fk` (`Icecream_code`),
  CONSTRAINT `review_icecream_fk` FOREIGN KEY (`Icecream_code`) REFERENCES `icecream` (`Icecream_code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ReviewsOfIcecream`
--

LOCK TABLES `ReviewsOfIcecream` WRITE;
/*!40000 ALTER TABLE `ReviewsOfIcecream` DISABLE KEYS */;
INSERT INTO `ReviewsOfIcecream` VALUES (1,1,'까만색 아이스크림이라서 특이해서 먹어보고 싶었는데 역시 나는 레인보우샤베트 같은 상큼한 맛은 별로라서 별로였다.<br />\r\n그리고 먹을 때 이랑 혀가 까매지는 걸 조심해야 한다.ㅋㅋㅋ',2),(2,5,'고소한 맛이 땡길 때 먹으면 나름 괜찮은 것 같다.<br />\r 떡도 들어 있어서 씹는 맛도 있다.<br />\r 근데 나는 초코 들어간 달콤한 아이스크림이 좋아서 내 돈 주고 산다면 안 고를 것 같다.',3),(3,27,'나는 녹차를 좋아해서 좋은데 녹차 싫어하는 사람들이 많아서 다른 사람들이랑 같이 먹을 때 고를 수 없다.<br />\r\n그리고 녹차와 초코가 들어간 초코나무숲이 있기 때문에 굳이 고를 이유가 없긴 하다.',3),(4,5,'나이 있으신 분들이 좋아할 만한 맛이 였다. 인절미 향이 강해서 인절미를 좋아하거나 고소한 맛을 선호하는 사람들에게는 추천하는 맛이다. 하지만 나는 인절미 향을 별로 좋아하지 않아 별로였다.',2),(5,8,'과일들의 상큼, 달콤한 맛과 좋아하는 치즈도 들어있어 일석이조의 기쁨의 맛이였다. 하지만 과일과 치즈의 조화가 이뤄지는 맛은 아니였다.',3),(6,9,'리얼 진득한 초코의 맛이 나서 초코를 좋아하는 사람들은 꼭 먹어야하는 맛이였다. 또 달기만한게 아니라 안에 들어있는 초코볼이 고소함까지 더해주어 무척 강추하는 맛이다.',5),(7,10,'처음 먹었을 때 아이스크림 이름을 정말 잘 지었다는 생각이 들었다. 어디서도 먹어본 적 없는 달콤하면서도 뭔가 오묘한 느낌이 드는 맛이다.',5),(8,1,'색깔과 맛이 매치가 안된다. 검은색이라 짙은 초콜렛 맛이 날꺼라고 생각했는데 의외로 상큼하고 단맛이다. <br />\r\n그러나 다른 아이스크림과 같이 펐을 때,<br />\r\n유난히 시꺼매서 석탄먹는 느낌이 났다. ',3),(9,24,'그냥 특별한 맛 없는 바닐라 아이스크림이라 굳이 배스킨라빈스에서 먹기에는 아까워서 내가 고를 일은 없을 것 같다.<br />\r\n맛없는 건 아닌데 그렇다고 그렇게 맛있는 것도 아니다.<br />\r\n특색이 없으므로 2점',2),(10,11,'정말 이름처럼 딱 쿠키와 크림 맛이다. 달달한 맛을 좋아하는 사람은 무난하게 먹을 수 있는 맛이나 누구나 아는 그런 맛이다.',3),(11,12,'초코의 달달한 맛과 녹차의 살짝 씁쓸한 맛이 조화가 참 잘 되는 맛이다. 다만 녹차가 호불호를 타는 맛이라 녹차 좋아하는 사람에게 추천한다. 그리고 이름이 호기심을 불러일으켜서 한번 쯤 먹어보고 싶어진다.',4),(12,13,'정말 딱 요거트 맛이다. 상상하는 그 이상 그 이하의 맛도 아니다.',2),(13,30,'그냥 초콜릿은 뭔가 심심 초콜릿칩박혀있는걸 먹어야지',4),(14,14,'최고의 극강 단 초코의 맛을 보고 싶다면 추천하는 맛이다. 단 걸 정말 좋아하지만 많이 먹으면 너무 달아서 물린다.',4),(15,29,'데이터베이스 교수님의 최애아이스크림.. 교수님은 평점 5점 주시겠지?',5),(16,2,'아이스죠리퐁이라는 이름에 걸맞게 정말로 죠리퐁에 우유를 섞어서 아이스크림으로 만든 것 같은 맛이 난다.<br />\r\n우리에게 굉장히 친숙한 맛이라는 것이 장점이다.<br />\r\n그러나 엄청 달아서 먹다보면 금방 질린다는 것이 단점이다.',3),(17,1,'새까만것이 아주 상콤한 매력이 있었다. 아주 맛있었다. 왜냐하면 나는 샤베트 요정이기 때문이다.<br />\r\n',4),(18,15,'파스타치오도 호불호가 갈리는 맛이라 파스치오를 좋아하는 사람만 먹기를 추천한다. 친구가 시킨 거 먹어봤다가 욕할 뻔했다. 파스치오 극불호!',1),(19,17,'고소한 아몬드와 달콤한 헤이즐넛 맛이 어울려서 누구나 좋아할 만한 맛이라고 생각된다. 근데 아몬드가 자꾸 이에 낀다.',3),(20,18,'내가 가장 좋아하는 사빠딸!! 좋아하는 딸기도 있고 사랑하는 치즈도 있어 세상 행복하지는 맛이다. 강력 추천!!',5),(21,9,'초코가 진하지만 질리지 않는다. 적당히 달아서 계속 먹고 싶어지는 맛이다. 속속에 들어가 있는 크런키볼이 바삭하게 씹는 맛을 준다. 크런키볼을 찾아가면서 먹는 것도 이 아이스크림의 포인트가 되는 것 같다. ',5),(22,20,'극불호의 맛이다. 세상에서 없어져야 하는 맛이다.',1),(23,21,'슈팅스타를 먹은 이유는 단연 입속에서 톡톡 터지는 볼? 때문이다. 많이 먹으면 혀가 좀 아프지만 맛과 재미 모두 있는 아이스크림이다.',3),(24,23,'상큼한 맛에 최강자이다. 고기를 먹었거나 갈증이 있다 그러면 이 아이스크림을 먹어라 그러면 입안과 마음이 상큼, 상쾌해질 것이다.',4),(25,26,'치즈를 사랑하고 치즈덕후들에게 강력 추천하는 아이스크림이다. 기본적으로 치즈 맛이 날 뿐만 아니라 안이 들어있는 치즈큐브?같은 걸 씹으면 더욱더 강한 치즈의 맛을 느낄 수 있다. 정말 맛있다.',5),(26,29,'체리마루의 살짝 고급스러워진 맛이다.  ',3);
/*!40000 ALTER TABLE `ReviewsOfIcecream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Users` (
  `User_ID` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `User_PW` varchar(4) COLLATE utf8mb4_general_ci NOT NULL,
  `Name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES ('asdf','1234','김소영'),('sungdragon97','1111','문성용이올시'),('정선아','0000','정선아'),('테스트','11','안녕');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-13 17:05:31
