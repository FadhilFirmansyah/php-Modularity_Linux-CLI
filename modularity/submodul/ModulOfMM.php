<?php
    namespace Modularity\SubModul;

    require_once __DIR__ . "/../../util/Input.php";

    use Util\Input;

    class ModulOfMM{

        public static function installModul(){
            $shellOfModul = [];

            while(true){
                $webSel = Input::info("Pilih modul Multi Media (x untuk selesai)");

                if($webSel == "x"){
                    break;
                }else{
                    array_push($shellOfModul, strtolower($webSel));
                }
            }

            for($i = 0; $i < count($shellOfModul); $i++){
                switch($shellOfModul[$i]){
                    case "blender":
                        echo "Install Blender" . PHP_EOL;

                        shell_exec("sudo apt-get install blender -y");

                        echo "Finish install Blender" . PHP_EOL;
                        break;

                    case "inkscape":
                        echo "Install Inkscape" . PHP_EOL;

                        shell_exec("sudo apt-get install inkscape -y");

                        echo "Finsih install Inkscape" . PHP_EOL;
                        break;

                    case "gimp":
                        echo "Install GIMP" . PHP_EOL;

                        shell_exec("sudo apt-get install gimp -y");

                        echo "Finish install GIMP" . PHP_EOL;
                        break;

                    case "shotcut":
                        echo "Install Shotcut" . PHP_EOL;

                        shell_exec("sudo apt-get install shotcut -y -q");

                        echo "Finsih install Shotcut" . PHP_EOL;
                        break;

                    case "openshot":
                        echo "Install OpenShot". PHP_EOL;

                        shell_exec("sudo apt-get install openshot-qt -y");

                        echo "Finish install OpenShot" . PHP_EOL;
                        break;

                    case "audacity":
                        echo "Install Audacity" . PHP_EOL;

                        shell_exec("sudo apt-get install audacity -y");

                        echo "Finish install Audacity" . PHP_EOL;
                        break;

                    case "ardour":
                        echo "Install Ardour" . PHP_EOL;

                        shell_exec("sudo apt-get install ardour -y");

                        echo "Finish install Ardour" . PHP_EOL;
                        break;

                    default:
                        echo "Your modular " . $shellOfModul[$i] . " does not supported by modularity" . PHP_EOL;
                }
            }
        }
    }
?>
