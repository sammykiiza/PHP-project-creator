<?php 
namespace App;
class createNewProject
{
    function create(string $name) : void
    {
        $output = null;
        $result_code = null;
        $currentDir = exec("pwd");
        try {
            $command = "mkdir ".$name;
            echo exec($command, $output, $result_code);
            echo "Created Project ".$name." in folder ",$currentDir,"/",$name,"\n";
        } catch (\Exception $e) {
            echo $e->getMessage()," on line: ",$e->getLine(),"\nWith code: ",$e->getCode(),"\n";
        }
    }
}
?>