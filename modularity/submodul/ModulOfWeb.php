<?php
    namespace Modularity\SubModul;

    require_once __DIR__ . "/../../util/Input.php";

    use Util\Input;

    class ModulOfWeb{
        public static function installModul(){

            $shellOfModul = [];

            while(true){
                $webSel = Input::info("Pilih modul Web Development (x untuk selesai)");

                if($webSel == "x"){
                    break;
                }else{
                    array_push($shellOfModul, strtolower($webSel));
                }
            }

            for($z = 0; $z < count($shellOfModul); $z++){
                switch($shellOfModul[$z]){
                    case "chrome":
                        echo "Install Chrome" . PHP_EOL;

                        shell_exec("sudo apt-get install wget -y");
                        shell_exec("wget -q https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb -O \$HOME/Downloads/chrome.deb");
                        shell_exec("sudo dpkg -i \$HOME/Downloads/chrome.deb");
                        shell_exec("sudo apt-get install -f");

                        echo "Finish install Chrome" . PHP_EOL;
                        break;

                    case "visual studio code":
                        echo "Install Visual Studio Code" . PHP_EOL;

                        shell_exec("sudo apt-get install wget gpg -y");
                        shell_exec("wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg");
                        shell_exec("sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg");
                        shell_exec("sudo sh -c 'echo \"deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main\" > /etc/apt/sources.list.d/vscode.list'");
                        shell_exec("rm -f packages.microsoft.gpg");
                        shell_exec("sudo apt-get install apt-transport-https -y -q");
                        shell_exec("sudo apt-get update");
                        shell_exec("sudo apt-get install code -y -q");

                        echo "Finisih install Visual Studio Code" . PHP_EOL;
                        break;

                    case "atom":
                        echo "Install Atom" . PHP_EOL;

                        shell_exec("sudo apt-get purge atom -y");
                        shell_exec("sudo rm -rf /usr/share/keyrings/atom-archive-keyring.gpg");
                        shell_exec("sudo apt-get install curl -y");
                        shell_exec("curl -sSL https://packagecloud.io/AtomEditor/atom/gpgkey | sudo gpg --dearmor -o /usr/share/keyrings/atom-archive-keyring.gpg");
                        shell_exec("sudo sh -c 'echo \"deb [signed-by=/usr/share/keyrings/atom-archive-keyring.gpg] https://packagecloud.io/AtomEditor/atom/any/ any main\" > /etc/apt/sources.list.d/atom.list'");
                        shell_exec("sudo apt-get install atom -y");

                        echo "Finish install Atom" . PHP_EOL;
                        break;

                    case "nodejs":
                        echo "Install NodeJS".PHP_EOL;

                        shell_exec("sudo apt-get install nodejs -y && sudo apt-get install npm -y -q 2>/dev/null");

                        echo "Finish install NodeJS".PHP_EOL;
                        break;

                    case "pnpm":
                        echo "Install PNPM".PHP_EOL;

                        shell_exec("sudo apt-get install nodejs -y && sudo apt-get install npm -y -q 2>/dev/null");
                        shell_exec("sudo npm uninstall -g  pnpm");
                        shell_exec("sudo npm install -g pnpm");

                        echo "Finish install PNPM".PHP_EOL;
                        break;

                    case "nvm":
                        echo "Install NVM".PHP_EOL;

                        shell_exec("sudo apt-get install curl -y");
                        shell_exec("curl --silent -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash 2>/dev/null");

                        echo "Finish install NVM".PHP_EOL;
                        break;

                    case "yarn":
                        echo "Install YARN".PHP_EOL;

                        shell_exec("sudo apt-get install nodejs -y && sudo apt-get install npm -y -q 2>/dev/null");
                        shell_exec("sudo npm uninstall -g  yarn");
                        shell_exec("sudo npm install -g yarn");

                        echo "Finish install YARN".PHP_EOL;
                        break;

                    case "python":
                        echo "Install Python".PHP_EOL;

                        shell_exec("sudo apt-get install python3 -y");

                        echo "Finish install Python".PHP_EOL;
                        break;

                    case "php":
                        echo "Install PHP".PHP_EOL;
                        shell_exec("sudo apt-get install php -y");
                        echo "Finish install PHP" . PHP_EOL;
                        break;

                    case "go":
                        echo "Install Go".PHP_EOL;

                        shell_exec("sudo apt-get install golang-go -y");

                        echo "Finish install Go".PHP_EOL;
                        break;

                    case "java":
                        echo "Install Java".PHP_EOL;

                        shell_exec("sudo apt-get install default-jdk -y");

                        echo "Finish install Java".PHP_EOL;
                        break;

                    case "mariadb":
                        echo "Install MariaDB".PHP_EOL;

                        shell_exec("sudo apt-get install mariadb-server -y");

                        echo "Finish install MariaDB".PHP_EOL;
                        break;

                    case "postgresql":
                        echo "Install PostgreSQL".PHP_EOL;

                        shell_exec("sudo apt-get install postgresql postgresql-contrib -y");

                        echo "Finish install PostgreSQL".PHP_EOL;
                        break;

                    case "apache":
                        echo "Install Apache".PHP_EOL;

                        shell_exec("sudo apt-get install apache2 -y");
                        shell_exec("sudo systemctl stop apache2");

                        echo "Finish install Apache".PHP_EOL;
                        break;

                    case "nginx":
                        echo "Install Nginx" . PHP_EOL;

                        shell_exec("sudo apt-get install nginx -y");
                        shell_exec("sudo systemctl stop nginx");

                        echo "Finish install Nginx".PHP_EOL;
                        break;
                    default:
                        echo "Your modular " . $shellOfModul[$z] . " does not supported by modularity" . PHP_EOL;
                }
            }
        }
    }
?>
