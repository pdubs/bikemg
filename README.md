Using this AJAX/PHP/MySQL tutorial: http://www.w3schools.com/php/php_ajax_database.asp

What exactly do we need?
	A web page to fetch & sum up bike part weights from a MySQL db via AJAX.

Essential Parts
	MySQL database of bike part data
	HTML page to display drop down for each part and total weight
	JavaScript functions to call the PHP script and handle returned data
	PHP script to query db and return part data to JavaScript function

Example of Functionality
	-1. drop downs are populated with part names from db
	0. user selects part from drop down
	1. JS function fired on select which asks the PHP script (request to controller)
	2. JS asks PHP script to lookup part weight in db (controller request to model)
	3. PHP script returns part weight from db to JS (model return response to controller)
	4. JS injects part weight into HTML page (controller returns response to view)
	5. HTML page is displayed with part weights (view renders response to initial request)

https://scotch.io/bar-talk/introducing-scotch-box-a-vagrant-lamp-stack-that-just-works

location of app: 192.168.33.10

Classical LAMP Server Model
	1. server side - PHP scripts to provide an HTTP interface to MySQL database
	2. client side - HTML/CSS with JS functions calling HTTP interface that echos MySQL data

Model - PHP scripts that expose ways to access & echo data from MySQL
View - HTML to create basic structure, CSS to shape & style the structure
Controller - JS to retrieve data and insert into HTML via AJAX

