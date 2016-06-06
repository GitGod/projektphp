<div id="footer">
    <a href="index.php">Strona Główna</a>
    <a href="index.php?page=wdm">WDM</a>
    <a href="index.php?page=matdys">Mat. Dyskretna</a>
    <a href="index.php?page=wprprg">Wpr. do Prog.</a>
    <a href="index.php?page=srodprog">Środ. Prog.</a>
    <a href="index.php?page=angielski">Angielski</a>
    &copy; Bartosz Mazurkiewicz ----
    <?php
     function d()
     {
        $file = 'include/views.txt';

        if (isset($_COOKIE['counter'])) {
            $cookie = $_COOKIE['counter'];
        }

        if (isset($cookie)) {
            if (file_exists($file) && filesize($file) !== 0) {
                return file_get_contents($file);
            }
        } else {
            setcookie('counter', 1);
            $views = file_get_contents($file);
            unlink($file);
            file_put_contents($file, intval($views) + 1);
            return ((int)$views + 1);
        }

        return 0;
     }

     echo 'Ilość unikalnych wyświetleń  strony: '. d();
    ?>
</div>