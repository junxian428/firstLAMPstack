# firstLAMPstack


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

