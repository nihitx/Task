
/* Unique index on garage name since it is more likely to always have a unique name. I wanted to add country
   but I did not feel that the order by would be any quicker in that way.
 And anothe reason is that since every index added makes inserts and updates slower.
 */

 CREATE TABLE `garage` (
   `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `name` varchar(100) NOT NULL,
   `garage_owner` varchar(100) NOT NULL,
   `hourly_price` DECIMAL(13, 2) NOT NULL,
   `currency` varchar(5) NOT NULL,
   `contact_email` varchar(100) NOT NULL,
   `country` varchar(100) NOT NULL,
   `garage_id` int(200) NOT NULL,
   `owner_id` int(100) NOT NULL,
   `point` Point NOT NULL,
   PRIMARY KEY (`ID`),
   KEY `owner_idx`(`owner_id`),
   UNIQUE INDEX name_idx (`name`),
   SPATIAL INDEX point_sx (`point`)
 ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARACTER SET utf8;

 INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Tampere Rautatientori', 'AutoPark', 2, '€', 'testemail@testautopark.fi', 'Finland', 12, 1, POINT('60.168607847624095',
 '24.932371066131623'));


 INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Punavuori Garage', 'AutoPark', 1.5, '€', 'testemail@testautopark.fi', 'Finland', 13, 2, POINT('60.162562',
 '24.939453'));

 INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Unknown', 'AutoPark', 3, '€', 'testemail@testautopark.fi', 'Finland', 14, 3, POINT('60.16444996645511',
 '24.938178168200714'));

 INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Fitnesstukku', 'AutoPark', 3, '€', 'testemail@testautopark.fi', 'Finland', 15, 4, POINT('60.165219358852795',
 '24.93537425994873'));

 INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Kauppis', 'AutoPark', 3, '€', 'testemail@testautopark.fi', 'Finland', 16, 5, POINT('60.17167429490068',
 '24.921585662024363'));

 INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Q-Park1', 'AutoPark', 2, '€', 'testemail@testautopark.fi', 'Finland', 17, 6, POINT('60.16867390148751',
 '24.930162952045407'));

  INSERT INTO garage (name, garage_owner, hourly_price, currency, contact_email, country, garage_id, owner_id, point) VALUES ('Masnad', 'AutoPark', 2, '€', 'testemail@testautopark.fi', 'Bangladesh', 18, 7, POINT('60.16867390148751',
  '24.930162952045407'));
