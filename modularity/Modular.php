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

        private array $arrToolsWebDev = ["Chrome", "Visual Studio Code", "Atom"];
        private array $arrFEWebDev = ["NodeJS", "NVM", "PNPM", "YARN"];
        private array $arrBEWebDev = ["Python", "PHP", "Go", "Java", "MariaDB", "PostgreSQL", "Apache", "Nginx"];

        private array $arrToolsMobileDev = ["Android Studio"];
        private array $arrMobileDev = ["Java", "Flutter", "Dart"];
        private array $arrEmuMobileDev = ["Bluestack", "Nox"];

        private array $arr3DMultMed = ["Blender"];
        private array $arrPhotoMultMed = ["Inkscape", "GIMP"];
        private array $arrVideoMultMed = ["Shotcut", "OpenShot"];
        private array $arrAudioMultMed = ["Audacity", "Ardour"];

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
            echo "Tools" . PHP_EOL;
            foreach($this->arrToolsWebDev as $tools){
                echo "  |_ " . $tools . PHP_EOL;
            }

            echo PHP_EOL . "Frontend" . PHP_EOL;
            foreach($this->arrFEWebDev as $fe){
                echo "  |_ " . $fe . PHP_EOL;
            }

            echo PHP_EOL . "Backend" . PHP_EOL;
            foreach($this->arrBEWebDev as $be){
                echo "  |_ " . $be . PHP_EOL;
            }

            echo PHP_EOL;

            ModulOfWeb::installModul();
        }

        public function mobile(){
            echo "Tools" . PHP_EOL;
            foreach($this->arrToolsMobileDev as $tools){
                echo "  |_ " . $tools . PHP_EOL;
            }

            echo PHP_EOL . "Language" . PHP_EOL;
            foreach($this->arrMobileDev as $mobile){
                echo "  |_ " . $mobile . PHP_EOL;
            }

            echo PHP_EOL .  "Emulator" . PHP_EOL;
            foreach($this->arrEmuMobileDev as $emu){
                echo "  |_ " . $emu . PHP_EOL;
            }

            echo PHP_EOL;

            ModulOfMobile::installModul();
        }

        public function mm(){

            echo "3D Modeling" . PHP_EOL;
            foreach($this->arr3DMultMed as $ddd){
                echo "  |_ " . $ddd . PHP_EOL;
            }

            echo PHP_EOL . "Photo Editing" . PHP_EOL;
            foreach($this->arrPhotoMultMed as $photo){
                echo "  |_ " . $photo . PHP_EOL;
            }

            echo PHP_EOL . "Video Editing" . PHP_EOL;
            foreach($this->arrVideoMultMed as $video){
                echo "  |_ " . $video . PHP_EOL;
            }

            echo PHP_EOL . "Audio Editing" . PHP_EOL;
            foreach($this->arrAudioMultMed as $audio){
                echo "  |_ " . $audio . PHP_EOL;
            }

            echo PHP_EOL;

            ModulOfMM::installModul();
        }

    }
?>
