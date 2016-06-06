<?php
include "include/header.html";
?>

<body>
<div id="teren">
    <div id="container">
        <div id="logoimg">
            <img src="ccc.png" width="140" height="88"/>
        </div>
        <div id="logo">

            <h1>Wiedza ze studiów</h1>
        </div>

        <?php
        include 'include/menu.html';
        ?>
        <div id="opisowo">
            <MARQUEE>Hello</MARQUEE>
        </div>


        <div id="srodek">
            <?php

            if (isset($_GET['page'])) {
                $page = strip_tags($_GET['page']);

                switch($page)
                {
                    case 'wdm':
                        include 'subpage/wdm.php';
                    break;

                    case 'matdys':
                        include 'subpage/matdys.php';
                    break;

                    case 'wprprg':
                        include 'subpage/wprprg.php';
                    break;

                    case 'srodprog':
                        include 'subpage/srodprog.php';
                    break;

                    case 'angielski':
                        include 'subpage/angielski.php';
                    break;

                    default:
                        include 'subpage/main.php';
                    break;
                }
            } else {
                include 'subpage/main.php';
            }
            ?>
        </div>


        <?php
        include 'include/footer.php';
        ?>
    </div>
</div>
</body>


</html>