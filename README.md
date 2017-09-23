# MVC MYSQL TASK
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/8dc99509d2b94fb0a6e4516755c53d51)](https://www.codacy.com/app/nihitx/Task?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=nihitx/Task&amp;utm_campaign=Badge_Grade) [![Test Coverage](https://codeclimate.com/github/codeclimate/codeclimate/badges/coverage.svg)](https://codeclimate.com/github/codeclimate/codeclimate/coverage)

### Summary
Simulate a very simple mvc example using mysql.

### Installation
This app requires :
* [PHP](https://http://php.net/)
* [MYSQL](https://www.mysql.com/)
* [Codeigniter3](https://www.codeigniter.com)

### MYSQL TASK
The garage table was created by considering how fast it will operate till it hits millions of users.
The create statement for the table is
```
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
```
*`UUNIQUE INDEX name` since it is more likely to always have a unique name. I wanted to add country but I did not feel that the <order by> would be any quicker in that way.
 And another reason is that since every index added makes inserts and updates slower.

*`SPATIAL INDEX point` This is something new I learned while doing the task, looking at how to calculate the closest location from a user given point ( FUN!)

*`UTF8` since latin1 is old school.

### PHP TASK

`Main controller` has all the functionality that calls the garage table with given inputs.

`Main model` has all model functionality to fetch all data from the database.

`SQL Query` writing sql query instead of codeigniter function is much more easy to me hence its been coded that way.  All query have basic sql injection protection using query binding.

Here is an example.
```
$query = '
      select  a.*
      from    garage a
      where   a.country = ?';
$query = $this->db->query($query, array($country));
```
`Repeating functions` have been converted to one function.

` Library ` Since I was playing with MYSQL SPATIAL and still did not grasp the full understanding of it. So I created a library to sort out the point from the STD array and output a pure json. Would be great to know a better way for it since it looks very interesting!

**Current Json output**
```
{
name: "Unknown",
garage_owner: "AutoPark",
hourly_price: "3.00",
currency: "€",
contact_email: "testemail@testautopark.fi",
garage_id: "14",
owner_id: "3",
point: "60.164449966455 24.938178168201",
country: "Finland"
},
```

### Code cleanliness
Normally I use controller functions with `_` and module functions with `camel case`.


### Author
**MASNAD**
