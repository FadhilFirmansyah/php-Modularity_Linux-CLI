<?php
    namespace Modularity\SubModul;

    require_once __DIR__ . "/../../util/Input.php";

    use Util\Input;

    class ModulOfMM{

        public static function installModul(){

            $select = Input::info("Install Modul Multimedia(y/n)");
            if($select == "n"){
                echo "Instalasi Cancel" . PHP_EOL . PHP_EOL;
            }elseif($select == "y"){
                echo PHP_EOL . "Install Blender" . PHP_EOL;
                shell_exec("sudo apt-get install blender -y -q 2>/dev/null");
                echo "Finish install Blender" . PHP_EOL;

                echo PHP_EOL . "Install Inkscape" . PHP_EOL;
                shell_exec("sudo apt-get install inkscape -y -q 2>/dev/null");
                echo "Finsih install Inkscape" . PHP_EOL;

                echo PHP_EOL . "Install OpenShot". PHP_EOL;
                shell_exec("sudo apt-get install openshot-qt -y -q 2>/dev/null");
                echo "Finish install OpenShot" . PHP_EOL;

                echo PHP_EOL . "Install Audacity" . PHP_EOL;
                shell_exec("sudo apt-get install audacity -y -q 2>/dev/null");
                echo "Finish install Audacity" . PHP_EOL . PHP_EOL;
            }else{
                echo "Input tidak tersedia oleh Modularity" . PHP_EOL . PHP_EOL;
            }
        }
    }
?>
