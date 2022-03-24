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

        $command2 = "cat src/innerFiles/fileContents/index.php > $this->currentDir/$this->name/index.php";
        exec($command2);
    }
    
}
?>