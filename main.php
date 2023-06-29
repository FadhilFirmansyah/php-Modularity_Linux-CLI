<?php
    require_once __DIR__ . "/modularity/Modular.php";

    use modularity\Modular;

    shell_exec("sudo apt-get update && sudo apt-get upgrade -y");

    $app = new Modular();

    $app->main();
?>
