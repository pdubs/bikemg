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
git clone git@github.com:pdubs/bikemg.git public
```

#####Configure Sequel Pro:

* '+' in bottom left adds a New Favorite Connection

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
* Add in queries from https://github.com/pdubs/bikemg/blob/master/sql.txt
* Select All > Run Selection

Location of App: 192.168.33.10



