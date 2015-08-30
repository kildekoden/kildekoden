#!/usr/bin/env bash

# ---------------------------------
# Kildekoden provisioning script
# ---------------------------------

# Update repositories
sudo apt-get update && sudo apt-get upgrade -y -q

# Point the default virtualhost to the app's /webroot directory
sed 's#DocumentRoot /var/www/public#DocumentRoot /var/www/source/webroot#g' /etc/apache2/sites-available/000-default.conf > /etc/apache2/sites-available/000-default.conf.tmp
mv /etc/apache2/sites-available/000-default.conf.tmp /etc/apache2/sites-available/000-default.conf

# Restart apache
sudo service apache2 restart

# Updates
sudo /usr/local/bin/composer self-update
npm update -g bower

# Install dependencies
cd /var/www/source && composer install
cd /var/www/source && bower install | xargs echo
sudo apt-get install php5-dev php5-cli php-pear mongodb-clients php5-mongo -y -q

# Import the database schema
# mysql -u root -proot scotchbox < "/var/www/design/data/schema.sql"

# Set the local timezone
echo "America/Phoenix" | sudo tee /etc/timezone
sudo dpkg-reconfigure --frontend noninteractive tzdata

# Apply branding
cat <<"EOF" | sudo tee /etc/motd.tail
██╗  ██╗██╗██╗     ██████╗ ███████╗██╗  ██╗ ██████╗    ██████╗ ███████╗
██║ ██╔╝██║██║     ██╔══██╗██╔════╝██║ ██╔╝██╔═══██╗   ██╔══██╗██╔════╝
█████╔╝ ██║██║     ██║  ██║█████╗  █████╔╝ ██║   ██║   ██║  ██║█████╗
██╔═██╗ ██║██║     ██║  ██║██╔══╝  ██╔═██╗ ██║   ██║   ██║  ██║██╔══╝
██║  ██╗██║███████╗██████╔╝███████╗██║  ██╗╚██████╔╝██╗██████╔╝███████╗
╚═╝  ╚═╝╚═╝╚══════╝╚═════╝ ╚══════╝╚═╝  ╚═╝ ╚═════╝ ╚═╝╚═════╝ ╚══════╝
                                                               by @c1v0
EOF
