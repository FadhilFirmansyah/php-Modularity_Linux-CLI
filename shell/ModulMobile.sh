#! /usr/bin/bash

#Install Android Studio
sudo add-apt-repository ppa:maarten-fonville/android-studio -y
sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install android-studio -y

#Install Java JDK & JRE
sudo apt-get install default-jdk -y && sudo apt-get install default-jre -y

#Install Flutter
sudo rm -rf $HOME/Downloads/flutter.tar.xz
sudo rm -rf /opt/flutter
sudo apt-get install wget -y
wget -q -O $HOME/Downloads/flutter.tar.xz https://storage.googleapis.com/flutter_infra_release/releases/stable/linux/flutter_linux_3.10.4-stable.tar.xz
sudo tar -xf $HOME/Downloads/flutter.tar.xz -C /opt/
echo 'export PATH="$PATH:/opt/flutter/bin"' >> .bashrc
alias brc='source ~/.bashrc'

#Install Dart
sudo apt-get install apt-transport-https -y
sudo sh -c 'wget -qO- https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key -q add -'
sudo sh -c 'wget -qO- https://storage.googleapis.com/download.dartlang.org/linux/debian/dart_stable.list > /etc/apt/sources.list.d/dart_stable.list'
sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install dart -y
echo 'export PATH="$PATH:/usr/lib/dart/bin"' >> .bashrc
alias brc='source ~/.bashrc'