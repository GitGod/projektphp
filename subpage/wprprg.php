
 
         <div class="pull-left">

             <h2>Silnia(rekurencyjnie)</h2>
             int silnia(int i) {<br/>
             if (i = 0) return 1; <br/>
             else return i * silnia(i - 1); }<br/>

             <h2>Silnia(iteracyjnie)</h2>
             int main() {<br/>
             int i,x,s=1;<br/>
             printf("podaj liczbe\n");<br/>
             scanf("%d",&x);<br/>
             for (i=1; i<=x; i++) {<br/>
             s=s*i;<br/>
             }<br/>
             printf("%d! = %d",x,s);<br/>
             return 0;<br/>
             }<br/>
         </div>
         <div class="pull-right">
             <form action="#" method="POST" class="silnia">
                 <fieldset>
                     <legend>Kalkulator silnii(1-140)</legend>
                      <ul>
                          <li><input type="text" name="number" placeholder="Liczba"></li>
                          <li> <input type="submit" name="send" value="Oblicz"></li>
                      </ul>
                 </fieldset>
             </form>
             <?php
              function good($info) {
                    return '    <div class="alert alert-info informacja1">
                      <h4>Sukces</h4>
                      <p>'.$info.'</p>
                    </div>';
              }

function bad($info) {
                return '    <div class="alert alert-error informacja1">
                      <h4>Błąd</h4>
                      <p>'.$info.'</p>
                    </div>';
            }
             function factorial($n)
             {
        

 $factorial = 1;

                 for($h = 1; $h <= $n; ++$h)
                 {
                     $factorial *= $h;
                 }

                 return $factorial;
             }


                if (isset($_POST['send'])) {
                    $number = intval(htmlspecialchars($_POST['number']));
                   if (($number) >0 &&  ($number) <141) {
                             $result = "Wynik działania silnii to: ". factorial($number);
                    echo good($result);
                        } else {
echo bad('Podaj liczbę z zakresu 1-140');                
}
}
             ?>
         </div>
