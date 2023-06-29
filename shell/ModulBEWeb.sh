#! /usr/bin/bash

#Install Visual Studio Code
sudo apt-get install wget gpg -y
wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg
sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg
sudo sh -c 'echo "deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main" > /etc/apt/sources.list.d/vscode.list'
rm -f packages.microsoft.gpg
sudo apt-get install apt-transport-https -y -q
sudo apt-get update
sudo apt-get install code -y -q

#Install Python
sudo apt-get install python3 -y

#Install PHP
sudo apt-get install php -y

#Install MariaDB
sudo apt-get install mariadb-server -y

#Install PostgreSQL
sudo apt-get install postgresql postgresql-contrib -y

#Install Apache
sudo apt-get install apache2 -y
sudo systemctl stop apache2