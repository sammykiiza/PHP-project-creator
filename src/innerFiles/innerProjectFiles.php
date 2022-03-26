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

        $thisFilePath = realpath(dirname(__FILE__));

        $command2 = "cat $thisFilePath/fileContents/index.php > $this->currentDir/$this->name/index.php";

        $command3 = "mkdir -v -p {$this->currentDir}/{$this->name}/src {$this->currentDir}/{$this->name}/src/Entities {$this->currentDir}/{$this->name}/src/Repositories";

        exec($command1."&&".$command2."&&".$command3."&& cd "
        .$this->currentDir."/".$this->name."&& composer init");
    }
    
}
?>