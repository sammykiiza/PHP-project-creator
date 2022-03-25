<?php 
namespace App\InnerFiles;

class InnerProjectFiles
{
    private $currentDir;
    private $name;
    public function __construct(
        string $name,
        string $currentDir
    )
    {
        $this->name = $name;
        $this->currentDir = $currentDir;
    }

    public function create(): void
    {
        $command1 = "chmod +rwx {$this->currentDir}/{$this->name}";
        exec($command1);

        $thisFilePath = realpath(dirname(__FILE__));

        $command2 = "cat $thisFilePath/fileContents/index.php > $this->currentDir/$this->name/index.php";
        exec($command2);

        $command3 = "mkdir {$this->currentDir}/{$this->name}/src";
        exec($command3);

        $command4 = "mkdir {$this->currentDir}/{$this->name}/src/Entities";
        exec($command4);

        $command5 = "mkdir {$this->currentDir}/{$this->name}/src/Repositories";
        exec($command5);
    }
    
}
?>