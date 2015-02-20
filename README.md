##Installing bikeMg

#####Download & Install [Vagrant](https://www.vagrantup.com/downloads.html)
#####Download & Install [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
#####Download & Install [Sequel Pro](http://www.sequelpro.com/download)

#####Terminal commands (inside your project folder):

```
mkdir scotch.io/
cd scotch.io/
git clone https://github.com/scotch-io/scotch-box.git bikeMg
cd bikeMg
vagrant up
```

#####Configure Sequel Pro:

* Click '+' in bottom left to add a New Favorite Connection

```
SSH
Name: scotch
MySQL Host: 127.0.0.1
Username: root
Password: root
SSH Host: 192.168.33.10
SSH User: vagrant
SSH Password: vagrant
```

* Connect
* Choose Database... > Add Database... > Name: bikeMg
* Copypasta these queries:

```
CREATE TABLE Frames (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,brand VARCHAR(30) NOT NULL,name VARCHAR(30) NOT NULL,year YEAR NOT NULL,weight INT(5) NOT NULL);
CREATE TABLE Forks LIKE bikeMg.Frames;CREATE TABLE Wheelsets LIKE bikeMg.Frames;CREATE TABLE Brakesets LIKE bikeMg.Frames;CREATE TABLE Seatposts LIKE bikeMg.Frames;
INSERT INTO bikeMg.Frames (brand, name, year, weight) VALUES ('Transition','Covert Carbon 26','2013','3150');
INSERT INTO bikeMg.Forks (brand, name, year, weight) VALUES ('Rock Shox','Pike RCT3 26','2014','1835');
INSERT INTO bikeMg.Wheelsets (brand, name, year, weight) VALUES ('Stans','ZTR Flow EX 26','2014','1780');
INSERT INTO bikeMg.Brakesets (brand, name, year, weight) VALUES ('Shimano','XT','2014','900');
INSERT INTO bikeMg.Seatposts (brand, name, year, weight) VALUES ('KS','Lev','2014','450');
```

* Select All > Run Selection

Location of App: 192.168.33.10



