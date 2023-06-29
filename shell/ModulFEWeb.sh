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

#Install Broswer Chrome
sudo apt-get install wget -y
wget -q https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb -O $HOME/Downloads/chrome.deb
sudo dpkg -i $HOME/Downloads/chrome.deb
sudo apt-get install -f

#Install NodeJS & NPM
sudo apt-get install nodejs -y && sudo apt-get install npm -y -q 2>/dev/null