# PHP-project-creator(For Linux)

A shell template creator for php projects globally on your system.

### Installation

You clone the project into your home folder and then add the following line to your .bashrc file:
Where User is your system username

```
alias createNewProject='php /home/User/PHP-project-creator/index.php'
```
Then edit the second line of the index.php to the correct path where you have stored the file.

After that, restart your shell before usage.

### Usage

You can run the project creator from anywhere on your system by simply calling the alias your created in your .bashrc in your shell e.g

```
$ createNewProject
```
If the alias is alias createNewProject = 'path/to/file'