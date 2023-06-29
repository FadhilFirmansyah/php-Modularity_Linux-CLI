<?php
    namespace Modularity\SubModul;

    require_once __DIR__ . "/../../util/Input.php";

    use Util\Input;

    class ModulOfWeb{
        public static function installModul(){

            $select = Input::info("Pilih nomor Sub-Modul atau nama Sub-Modul (x untuk cancel)");
            if($select == "x"){
                echo "Instalasi Cancel" . PHP_EOL . PHP_EOL;
            }elseif($select == "1" || $select == "frontend"){
                echo PHP_EOL . "Install Visual Studio Code" . PHP_EOL;
                shell_exec("sudo apt-get install wget gpg -y");
                shell_exec("wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg");
                shell_exec("sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg");
                shell_exec("sudo sh -c 'echo \"deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main\" > /etc/apt/sources.list.d/vscode.list'");
                shell_exec("rm -f packages.microsoft.gpg");
                shell_exec("sudo apt-get install apt-transport-https -y -q");
                shell_exec("sudo apt-get update");
                shell_exec("sudo apt-get install code -y -q");
                echo "Finisih install Visual Studio Code" . PHP_EOL;

                echo PHP_EOL . "Install Chrome" . PHP_EOL;
                shell_exec("sudo apt-get install wget -y");
                shell_exec("wget -q https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb -O \$HOME/Downloads/chrome.deb");
                shell_exec("sudo dpkg -i \$HOME/Downloads/chrome.deb");
                shell_exec("sudo apt-get install -f");
                echo "Finish install Chrome" . PHP_EOL;
                
                echo PHP_EOL . "Install NodeJS".PHP_EOL;
                shell_exec("sudo apt-get install nodejs -y && sudo apt-get install npm -y -q 2>/dev/null");
                echo "Finish install NodeJS".PHP_EOL . PHP_EOL;
            }elseif ($select == "2" || $select == "backend") {
                echo PHP_EOL . "Install Visual Studio Code" . PHP_EOL;
                shell_exec("sudo apt-get install wget gpg -y");
                shell_exec("wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg");
                shell_exec("sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg");
                shell_exec("sudo sh -c 'echo \"deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main\" > /etc/apt/sources.list.d/vscode.list'");
                shell_exec("rm -f packages.microsoft.gpg");
                shell_exec("sudo apt-get install apt-transport-https -y -q");
                shell_exec("sudo apt-get update");
                shell_exec("sudo apt-get install code -y -q");
                echo "Finisih install Visual Studio Code" . PHP_EOL;

                echo PHP_EOL . "Install Python".PHP_EOL;
                shell_exec("sudo apt-get install python3 -y");
                echo "Finish install Python".PHP_EOL;

                echo PHP_EOL ."Install PHP".PHP_EOL;
                shell_exec("sudo apt-get install php -y");
                echo "Finish install PHP" . PHP_EOL;

                echo PHP_EOL . "Install MariaDB".PHP_EOL;
                shell_exec("sudo apt-get install mariadb-server -y");
                echo "Finish install MariaDB".PHP_EOL;

                echo PHP_EOL . "Install PostgreSQL".PHP_EOL;
                shell_exec("sudo apt-get install postgresql postgresql-contrib -y");
                echo "Finish install PostgreSQL".PHP_EOL;

                echo PHP_EOL . "Install Apache".PHP_EOL;
                shell_exec("sudo apt-get install apache2 -y");
                shell_exec("sudo systemctl stop apache2");
                echo "Finish install Apache".PHP_EOL . PHP_EOL;
            }else{
                echo "Input tidak tersedia oleh Modularity" . PHP_EOL . PHP_EOL;
            }
        }
    }
?>