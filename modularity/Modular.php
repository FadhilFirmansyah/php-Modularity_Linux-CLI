<?php
    namespace Modularity;

    require_once __DIR__ . "/../util/Input.php";
    require_once __DIR__ . "/submodul/ModulOfWeb.php";
    require_once __DIR__ . "/submodul/ModulOfMobile.php";
    require_once __DIR__ . "/submodul/ModulOfMM.php";

    use Util\Input;
    use Modularity\SubModul\ModulOfWeb;
    use Modularity\SubModul\ModulOfMobile;
    use Modularity\SubModul\ModulOfMM;

    class Modular{
        public function main(){
            while(true){
                echo <<< MENU
                \tModularity
                1. Web Development
                2. Mobile Development
                3. Multimedia
                X. Exit
                MENU . PHP_EOL;

                $select = Input::info("Pilih modular");

                if($select == "1" || $select == "web"){
                    $this->web();
                }elseif($select == "2" || $select == "mobile"){
                    $this->mobile();
                }elseif($select == "3" || $select == "multimedia"){
                    $this->mm();
                }elseif($select == "x" || $select == "exit"){
                    break;
                }else{
                    echo "Modular tidak tersedia" . PHP_EOL;
                }
            }
        }

        public function web(){
            echo <<< FE

            1. Frontend Developer
                |_ Text Editor: Visual Studio Code
                |_ Browser: Chrome
                |_ Package Manager: NodeJS

            FE . PHP_EOL;

            echo <<< BE
            2. Backend Developer
                |_ Text Editor: Visual Studio Code
                |_ Languages: Python & PHP
                |_ Databases: MariaDB & PostgreSQL
                |_ Servers: Apache

            BE . PHP_EOL;

            ModulOfWeb::installModul();
        }

        public function mobile(){
            echo <<< MOBILE

            Mobile Developer
              |_ Software: Android Studio
              |_ Languages: Java, Flutter, & Dart

            MOBILE . PHP_EOL;

            ModulOfMobile::installModul();
        }

        public function mm(){

            echo <<< MULTIMEDIA
            
            Multimedia
              |_ 3D Modeling: Blender
              |_ Photo Editor: Inkscape
              |_ Video Editor: OpenShot
              |_ Audio Editor: Audacity

            MULTIMEDIA . PHP_EOL;

            ModulOfMM::installModul();
        }

    }
?>