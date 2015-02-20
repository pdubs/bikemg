CREATE TABLE Frames (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	brand VARCHAR(30) NOT NULL,
	name VARCHAR(30) NOT NULL,
	year YEAR NOT NULL,
	weight INT(5) NOT NULL
);

CREATE TABLE Forks LIKE bikeMg.Frames;
CREATE TABLE Wheelsets LIKE bikeMg.Frames;
CREATE TABLE Brakesets LIKE bikeMg.Frames;
CREATE TABLE Seatposts LIKE bikeMg.Frames;

INSERT INTO bikeMg.Frames (brand, name, year, weight) VALUES ('Transition','Covert Carbon 26','2013','3150');
INSERT INTO bikeMg.Forks (brand, name, year, weight) VALUES ('Rock Shox','Pike RCT3 26','2014','1835');
INSERT INTO bikeMg.Wheelsets (brand, name, year, weight) VALUES ('Stans','ZTR Flow EX 26','2014','1780');
INSERT INTO bikeMg.Brakesets (brand, name, year, weight) VALUES ('Shimano','XT','2014','900');
INSERT INTO bikeMg.Seatposts (brand, name, year, weight) VALUES ('KS','Lev','2014','450');

/* v1.01 */

CREATE TABLE Headsets LIKE bikeMg.Frames;
CREATE TABLE Cranksets LIKE bikeMg.Frames;
CREATE TABLE Cassettes LIKE bikeMg.Frames;
CREATE TABLE Derailleurs LIKE bikeMg.Frames;
CREATE TABLE Shifters LIKE bikeMg.Frames;
CREATE TABLE Chains LIKE bikeMg.Frames;
CREATE TABLE Pedals LIKE bikeMg.Frames;
CREATE TABLE Handlebars LIKE bikeMg.Frames;
CREATE TABLE Grips LIKE bikeMg.Frames;
CREATE TABLE Stems LIKE bikeMg.Frames;
CREATE TABLE Saddles LIKE bikeMg.Frames;
CREATE TABLE Tires LIKE bikeMg.Frames;

INSERT INTO bikeMg.Headsets (brand, name, year, weight) VALUES ('FSA','No. 57 Orbit 1.5 ZS','2014','125');
INSERT INTO bikeMg.Cranksets (brand, name, year, weight) VALUES ('Shimano','SLX FC-M660','2014','890');
INSERT INTO bikeMg.Cassettes (brand, name, year, weight) VALUES ('Shimano','XT CS-M771','2014','286');


/*
Starting DB extremely simple and then expanding functionality later

currently FOUR separate standards for part numbers:
	BTI Item #, Vendor Part #, UPC, EAN

Frames
	add: frame size, version (alt. to year)

Forks
	add: travel length

Wheelsets - comprised of 2 rims, 2 hubs, spokes, any valve stems, rim tape, skewers or thru-axles

Brakesets - comprised of 2 brake levers, hoses+oil, 2 calipers w/ pads, 2 rotors

Seatposts
	add: length, diameter, travel
*/






























