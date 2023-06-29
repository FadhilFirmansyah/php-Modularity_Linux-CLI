#! /usr/bin/bash

sudo apt-get install php -y > /dev/null

touch modularitea

echo "#! /usr/bin/bash" > modularitea
echo "php ~/Documents/modularity-tealinux/main.php" >> modularitea

sudo chmod +x modularitea

sudo mv modularitea /usr/local/bin/

echo "Setup Complete, please run modularitea on directory Home"