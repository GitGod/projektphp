

        <div id="srodek2">
            <h2>Liczby dziesiętne - Liczny binarne</h2>
            1 - 1<br/>
            2 - 10<br/>
            3 - 11<br/>
            4 - 100<br/>
            5 - 101<br/>
            6 - 110<br/>
            7 - 111<br/>
            8 - 1000<br/>
            9 - 1001<br/>
            10 - 1010<br/>
            25 - 11001<br/>
            69 - 1000101<br/>
            100 - 1100100<br/>

            <h2>Zamiana liczb z systemu binarnego na szesnastkowy</h2>
            1|0110|1010|1001|1101=$16A9D<br/>
            101|1011|1011|0110|1101|0101=$5BB6D5<br/>

            <h2></h2>

            <form action="#" method="POST" class="calculator">
                <fieldset>
                    <legend>Kalkulator</legend>
                    <ul>
                        <li><input type="text" name="number1" placeholder="Pierwsza liczba"></li>
                        <li>
                            <dl class="operations">
                                <dt><input type="radio" name="action" value="1" checked> Dodawanie</dt>
                                <dt><input type="radio" name="action" value="2"> Odejmowanie</dt>
                                <dt><input type="radio" name="action" value="3"> Mnożenie</dt>
                                <dt><input type="radio" name="action" value="4"> Dzielenie</dt>
                            </dl>
                        </li>
                        <li><input type="text" name="number2" placeholder="Druga liczba"></li>
                        <li><input type="submit" name="send" value="Oblicz"></li>
                    </ul>
                </fieldset>
            </form>
            <?php
            function good($info) {
                return '    <div class="alert alert-info informacja">
                      <h4>Sukces</h4>
                      <p>'.$info.'</p>
                    </div>';
            }

            function bad($info) {
                return '    <div class="alert alert-error informacja">
                      <h4>Błąd</h4>
                      <p>'.$info.'</p>
                    </div>';
            }

            if (isset($_POST['send'])) {
                $number1 = intval(htmlspecialchars($_POST['number1']));
                $number2 = intval(htmlspecialchars($_POST['number2']));

                switch($_POST['action'])
                {
                    case 1:
                        $result = $number1 + $number2;
                        echo good('Wynik dodawania to:' . $result);
                        break;

                    case 2:
                        $result = $number1 - $number2;
                        echo good('Wynik odejmowania to:' . $result);
                        break;

                    case 3:
                        $result = $number1 * $number2;
                        echo good('Wynik mnożenia to:' . $result);
                        break;

                    case 4:
                        if ($number2 == 0) {
                            echo bad('Mianownik nie może być 0');
                        } else {
                            $result = $number1 / $number2;
                            echo good('Wynik dzielenia to:' . $result);
                        }
                        break;
                }
            }
            ?>

        </div>

