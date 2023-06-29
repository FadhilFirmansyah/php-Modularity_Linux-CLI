<?php
    namespace Modularity\SubModul;

    require_once __DIR__ . "/../../util/Input.php";

    use Util\Input;
    class ModulOfMobile{

        public static function installModul(){
            
            $select = Input::info("Install Modul Mobile Developer(y/n)");
            if($select == "n"){
                echo "Instalasi Cancel" . PHP_EOL . PHP_EOL;
            }elseif($select == "y"){
                echo PHP_EOL .  "Install Android Studio" . PHP_EOL;
                shell_exec("sudo add-apt-repository ppa:maarten-fonville/android-studio -y");
                shell_exec("sudo apt-get update && sudo apt-get upgrade -y");
                shell_exec("sudo apt-get install android-studio -y");
                echo "Finish install Android Studio" . PHP_EOL;

                echo PHP_EOL . "Install Java".PHP_EOL;
                shell_exec("sudo apt-get install default-jdk -y && sudo apt-get install default-jre -y");
                echo "Finish install Java".PHP_EOL;

                echo PHP_EOL . "Install Flutter" . PHP_EOL;
                shell_exec("sudo rm -rf \$HOME/Downloads/flutter.tar.xz");
                shell_exec("sudo rm -rf /opt/flutter");

                shell_exec("sudo apt-get install wget -y");
                shell_exec("wget -q -O \$HOME/Downloads/flutter.tar.xz https://storage.googleapis.com/flutter_infra_release/releases/stable/linux/flutter_linux_3.10.4-stable.tar.xz");
                shell_exec("sudo tar -xf \$HOME/Downloads/flutter.tar.xz -C /opt/");
                shell_exec("echo 'export PATH=\"\$PATH:/opt/flutter/bin\"' >> .bashrc");
                shell_exec("alias brc='source ~/.bashrc'");
                echo "Finish install Flutter" . PHP_EOL;

                echo PHP_EOL . "Install Dart" . PHP_EOL;
                shell_exec("sudo apt-get install apt-transport-https -y");
                shell_exec("sudo sh -c 'wget -qO- https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key -q add -'");
                shell_exec("sudo sh -c 'wget -qO- https://storage.googleapis.com/download.dartlang.org/linux/debian/dart_stable.list > /etc/apt/sources.list.d/dart_stable.list'");
                shell_exec("sudo apt-get update && sudo apt-get upgrade -y");
                shell_exec("sudo apt-get install dart -y");
                shell_exec("echo 'export PATH=\"\$PATH:/usr/lib/dart/bin\"' >> .bashrc");
                shell_exec("alias brc='source ~/.bashrc'");
                echo "Finish install Dart" . PHP_EOL . PHP_EOL;
            }else{
                echo "Input tidak tersedia oleh Modularity" . PHP_EOL . PHP_EOL;
            }
        }
    }
?>
