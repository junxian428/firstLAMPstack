# firstLAMPstack

![alt text](https://cdn-images-1.medium.com/fit/t/1600/480/1*FJTQ53A9dCdcmM9g78aaOg.jpeg)

Following this Tutorial
https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/

pi@raspberrypi:~ $ sudo apt update && sudo apt upgrade -y

pi@raspberrypi:~ $ sudo apt install apache2 -y

pi@raspberrypi:~ $ cd /var/www/html

pi@raspberrypi:/var/www/html $ ls -al

index.html

pi@raspberrypi:/var/www/html $ hostname -I

pi@raspberrypi:/var/www/html $ sudo apt install php -y

pi@raspberrypi:/var/www/html $ sudo rm index.html

pi@raspberrypi:/var/www/html $ sudo nano index.php

<?php echo "hello world"; ?>

pi@raspberrypi:/var/www/html $ sudo service apache2 restart

pi@raspberrypi:/var/www/html $ sudo rm index.php

pi@raspberrypi:/var/www/html $ sudo apt install mariadb-server php-mysql -y

pi@raspberrypi:/var/www/html $ sudo service apache2 restart

pi@raspberrypi:/var/www/html $ sudo mysql_secure_installation

pi@raspberrypi:/var/www/html $ sudo mysql --user=root --password

> create user admin@localhost identified by 'your_password';

> grant all privileges on *.* to admin@localhost;

> FLUSH PRIVILEGES;

> exit;

pi@raspberrypi:/var/www/html $ sudo apt install phpmyadmin -y

pi@raspberrypi:/var/www/html $ sudo phpenmod mysqli

pi@raspberrypi:/var/www/html $ sudo service apache2 restart

pi@raspberrypi:/var/www/html $ sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin

pi@raspberrypi:/var/www/html $ ls

phpmyadmin

pi@raspberrypi:~ $ ls -lh /var/www/

pi@raspberrypi:~ $ sudo chown -R pi:www-data /var/www/html/

pi@raspberrypi:~ $ sudo chmod -R 770 /var/www/html/

pi@raspberrypi:~ $ ls -lh /var/www/


__________________________________________________________________________________________________________________________________
TUTUORIAL

Tutor: Techlead
Youtube Link: https://youtu.be/1YXqXPWjmKk
Project Title: Twitter Clone

![alt text](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFk2IbTjU-arbu7owjZF757NDLLINVh6UgvQ&usqp=CAU)

Bug Fixed:

https://stackoverflow.com/questions/10615436/fatal-error-call-to-undefined-function-mysql-connect





Database Handling:

![alt text](https://user-images.githubusercontent.com/58724748/104832745-4c354980-58ce-11eb-8277-a6999efc9962.png)


![alt text](https://user-images.githubusercontent.com/58724748/104832907-e34ed100-58cf-11eb-9ce1-9afefa0e3962.png)


create database tweetlead;

use tweetlead;

1.create table users(uid int auto_increment, primary key (uid), ip varchar(64) unique);

2.create table tweets (tid int auto_increment, primary key(tid), uid int, post varchar(140), date datetime, key(date), key(uid, date));

create table tweets (
    
    tid int auto_increment, 
    
    primary key(tid), 
   
    uid int, 
   
    post varchar(140), 
   
    date datetime, 
   
    key(date), 
    
    key(uid, date)
);

3.create table follows (uid int, follower int, primary key(uid, follower));

create table follows (

   uid int, 
   
   follower int, 
   
   primary key(uid, follower)
   
 );


