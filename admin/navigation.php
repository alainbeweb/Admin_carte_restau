                <header class="header">
                  <a href="#" class="header__icon" id="header__icon"></a>
                  <a href="/" class="header__logo">RES-TO-KEN</a>
                    <nav class="menu">

                        <?php
                        if ($handle = opendir('./content')) {
                            while (false !== ($entry = readdir($handle))) {
                                if ($entry != "." && $entry != ".." && $entry != "404.php" && $entry != "view.php" && $entry != "home.php") {
                                    $base = basename($entry,'.php');
                                    echo "<a href=\"?p=$base\">$base</a>";
                                }
                            }
                            closedir($handle);
                        }
                        ?>
                    </nav>

                </header>


<?php
$file = 'user.txt';
// Une nouvelle personne à ajouter
$person = "root root\n";
// Ecrit le contenu dans le fichier, en utilisant le drapeau
// FILE_APPEND pour rajouter à la suite du fichier et
// LOCK_EX pour empêcher quiconque d'autre d'écrire dans le fichier
// en même temps
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
?>
