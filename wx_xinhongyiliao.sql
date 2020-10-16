# Host: localhost  (Version: 5.5.53)
# Date: 2020-06-08 18:23:37
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `role` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'admin','admin',NULL,NULL,NULL,NULL,1),(2,'admin1','admin',NULL,NULL,NULL,NULL,0),(3,'xinhong','1234',NULL,NULL,NULL,NULL,0);

#
# Structure for table "category"
#

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "category"
#

INSERT INTO `category` VALUES (1,'针线','20191124/f7c8f43c4d5ef2c5f5fe3e945879099c.png'),(2,'剪刀','20191124/a2553f15b2135e002554007e619664b4.png'),(3,'镊子','20200519/31407dee014d591ff39b5d91f58a824f.png'),(4,'刀具','20191124/2bbb3e30d35339f99515ebb022808caa.png'),(5,'器械','20191124/27f4d4f459190ccf78f880f94cca1757.png'),(6,'量杯','20191124/55c2d078c8eaae767675a2c92034b1ff.png'),(7,'试管','20191124/2e78e5d7293dcc55b7da951e78153123.png'),(8,'吸管','20191124/c2697bae84cf3616ff37fb5886344de2.png'),(9,'针管','20191124/ee25bb60d16d99a7a2766115d5e4c5c7.png'),(10,'设备','20191124/fc6619090820cd20e694ff6182856218.png');

#
# Structure for table "goods"
#

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `cid` int(11) DEFAULT '0',
  `pic` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "goods"
#

INSERT INTO `goods` VALUES (1,'商品一',1,'20191124/88ab3502602e54f719ccb7f620d9bf4c.png','1323215这是简介',88.00),(2,'商品二',2,'20191124/92db9077b8acdb3536a06f9dc69d5a69.png','商品二',28.00),(3,'商品三',4,'20191124/dbfc536c4828fb656b97a41186aab64a.png','商品三',1288.00),(4,'商品四',3,'20191124/01e8eb59358d74b990f6ef9d9bb4f862.png','这是柚子',88.00),(5,'product',3,'20191124/c25caaa38e3f996fd27dda4768791d82.png','this is a ...',8.00),(6,'剪刀1',2,'20200521/caab2b83f2fba828f654d3c2130e1fd1.jpg','剪刀（jiǎn dāo）是切割布、纸、钢板、绳、圆钢等片状或线状物体的双刃工具，两刃交错，可以开合。在中国，因纺织业发展，剪子、剪刀业内有区分。如剪若刀者，称剪刀，其形状如一根铁柱对折，尖端处作对刃刀，女红纺织常用,今受外来文化影响，称u形剪。刃苗长者为剪子，用于剪裁纺织成的布。今有的地方称指甲刀为剪刀，就是因其如剪若刀。设计刀壳剪刀不用的时候用刀壳封住避免伤身。',100.00),(7,'剪刀2',2,'20200521/e7db6b1b9ecc053007e200ae9f068228.jpg','剪刀（jiǎn dāo）是切割布、纸、钢板、绳、圆钢等片状或线状物体的双刃工具，两刃交错，可以开合。在中国，因纺织业发展，剪子、剪刀业内有区分。如剪若刀者，称剪刀，其形状如一根铁柱对折，尖端处作对刃刀，女红纺织常用,今受外来文化影响，称u形剪。刃苗长者为剪子，用于剪裁纺织成的布。今有的地方称指甲刀为剪刀，就是因其如剪若刀。设计刀壳剪刀不用的时候用刀壳封住避免伤身。',100.00),(8,'剪刀3',2,'20200521/e5d58a82d39cb11691251b2aadf72b61.jpg','剪刀（jiǎn dāo）是切割布、纸、钢板、绳、圆钢等片状或线状物体的双刃工具，两刃交错，可以开合。在中国，因纺织业发展，剪子、剪刀业内有区分。如剪若刀者，称剪刀，其形状如一根铁柱对折，尖端处作对刃刀，女红纺织常用,今受外来文化影响，称u形剪。刃苗长者为剪子，用于剪裁纺织成的布。今有的地方称指甲刀为剪刀，就是因其如剪若刀。设计刀壳剪刀不用的时候用刀壳封住避免伤身。',100.00),(9,'剪刀4',2,'20200521/e4e8b61e51dacdc95485174889a07406.jpg','剪刀（jiǎn dāo）是切割布、纸、钢板、绳、圆钢等片状或线状物体的双刃工具，两刃交错，可以开合。在中国，因纺织业发展，剪子、剪刀业内有区分。如剪若刀者，称剪刀，其形状如一根铁柱对折，尖端处作对刃刀，女红纺织常用,今受外来文化影响，称u形剪。刃苗长者为剪子，用于剪裁纺织成的布。今有的地方称指甲刀为剪刀，就是因其如剪若刀。设计刀壳剪刀不用的时候用刀壳封住避免伤身。',100.00),(10,'12弧度1220医用针线真丝线长90cm',1,'20200521/0c5270509346299589d5cf938c12146c.png','12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm12弧度1220医用针线真丝线长90cm',100.00),(11,'采血针',1,'20200521/805ebb5e41a573416b0118586afd63d7.png','采血针是一种在医疗检验过程中用于采集血样的仪器，由针头和针杆组成，针头设在针杆的头部，在针杆上滑动连接有护套，在护套和针杆之间设有复位弹簧且护套的初始位置位于针头和针杆的头部。',100.00),(12,'供应生产穿刺针医用一次性耗材输液针管兽用针管加长针管',1,'20200521/2bc36ec9d9fbf613d355cd1b6d88bc6a.png','供应生产穿刺针医用一次性耗材输液针管兽用针管加长针管',100.00),(13,'美容针',1,'20200521/ad8a4d3887a1871741423640776a48d2.png','美白针是从机体百内部着手，在生理生化过程中抑制黑色素的生成。美白针能阻止皮肤黑色素合成，黑色素是度由酪氨酸（氨基酸的一种）转化而来，酪氨酸变成黑色素需要一个条件，就是酪氨酸酶的参与，离开这种酶，黑色素就不能生成。因美白针中所包含知的成分很多，所以美白针除道了抗氧化之外，这些成分还能起到抗衰老、调节免疫系统与内分泌、改善睡眠、平衡情绪等作用。美白针剂的有效成分氨基酸和抗氧化还原内剂能锁住酪氨酸酶的活性容，让它失去效能。黑色素的生产过程就停止，皮肤逐渐恢复白皙。',1000.00),(14,'皮肤针放血针双头单头叩刺拔罐针灸理疗梅花针医用针皮肤针针刺',1,'20200521/a5b2c9a26bb439287eada60d9e6ef725.png','皮肤针放血针双头单头叩刺拔罐针灸理疗梅花针医用针皮肤针针刺',100.00),(15,'一次性静脉采血针',1,'20200521/dbdc8735e86e2fd53e505a94e13317ba.png','一次性静脉采血针',100.00),(16,'医用针',1,'20200521/9586ac0fb6ab4af92e0e624d191a91dd.png','医用针主要用于外科手术缝合，多为不锈钢丝在针尾钻孔或开槽制成，外表经打磨，电解处理，应当十分光滑；针型根据实际需要分为：圆针、角针、铲针、直针等，弧度根据实际需要分为：1/2、3/8等；生产工艺十分复杂，属高科技产品，精细打孔甚至用到了激光打孔技术。',100.00),(17,'针筒',9,'20200521/25f55a7f3858db0f2cab8570bbcc0469.jpg','针筒就是一次性注射器，是采用高分子聚丙烯材料制成的，分三件式和两件式，三件式结构为芯杆、胶塞、外套三件及注射针、外包装组成，两件式结构是芯杆，外套及注射针、外包装组成。',100.00);

#
# Structure for table "orders"
#

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `goods` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0',
  `time` datetime DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `openId` varchar(255) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "orders"
#

INSERT INTO `orders` VALUES (7,'张三','13588889999','北京市长安街188号','商品二,商品一,','3,1,','40.368829377696','116.79622389869',2,'2019-11-25 01:11:00','28.00,88.00,','52f98a6ec2ac25287bce41391afa5992',172.00),(8,'张三','13588889999','北京市长安街188号','商品四,','1,','40.368829377696','116.79622389869',2,'2019-11-25 01:11:48','88.00,','52f98a6ec2ac25287bce41391afa5992',88.00),(9,'钱一多','13266669999','北京市中南海8号','商品二,','3,','39.921168919256','116.39193929858',2,'2019-11-25 02:30:52','28.00,','52f98a6ec2ac25287bce41391afa5992',84.00),(10,'其4 ',' 其','千万人无','商品一,商品四,','1,1,',NULL,NULL,2,'2020-04-18 18:36:10','88.00,88.00,','bfc0784fba0b34c4241a1b6a96c35666',176.00),(11,'其4 ',' 其','千万人无','针筒,','1,',NULL,NULL,2,'2020-04-18 19:15:46','100.00,','bfc0784fba0b34c4241a1b6a96c35666',100.00),(12,'shc ','155123516556','afa awfa  ','12弧度1220医用针线真丝线长90cm,','1,',NULL,NULL,1,'2020-05-21 20:14:00','100.00,','bfc0784fba0b34c4241a1b6a96c35666',100.00),(13,'shc ','155123516556','afa awfa  ','皮肤针放血针双头单头叩刺拔罐针灸理疗梅花针医用针皮肤针针刺,','1,',NULL,NULL,0,'2020-05-21 20:18:00','100.00,','bfc0784fba0b34c4241a1b6a96c35666',100.00);
