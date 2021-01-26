<?php

function graphics()
{
    $maxntries=2;      //number of tries
    $maxnum=10;     //max number;
    $ntriesLabel="tentativo numero: ";      //variable used in order to speed up the title changes
    if(isset($_POST['submit']))         //it means that on click of the submit button it does the following code
    {     
       $ntries=$_POST['ntent'];
       if($ntries==0)
       {
           $ntries=1;
       }
       else if($ntries<=$maxntries && $ntries>0)
       {
           
       }
       else
       {
           
       }
    }
    else            //this code will be generated the first time you load the page
    {
        $ntries=1;
    }
    
//start of html code
$page= <<<HTML_FORM
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>IndovinaNumero</title>
        <link rel="stylesheet" href="css.css" type="text/css">
    </head>
    <body><center>
        <legend>
            <div id="title">Gioco dell'indovina numero</div>
            <div  id="form"></br></br>
                <b>Regole del gioco:</b> Si deve indovinare nel minor numero 
                di tentativi un numero compreso fra 0 e $maxnum estratto casualmente dal sistema</br>
                <form novalidate method="POST" action="{$_SERVER['PHP_SELF']}">                     <!--method used post, action means that the page will reload itself PHP_SELF-->
                    <fieldset class="field">
                        <label><b>$ntriesLabel $ntries</b></label>
                        <input type="hidden" name="ntent" value='$ntries'></input>                  <!-- hidden input used in order to show the number of tries-->
                        <input type="number" id="inputNumber" name="numIn" required></input>        <!-- this is the input used to read the number from the client, the input must be a number (tag required forces it) -->
                        <button id="checkbutton" type="submit" name="submit">Check It!</button>
                    </fieldset>
                </form>
            </div>
         </legend>
    </center></body>
</html>
HTML_FORM;
return $page;
}
echo graphics();

?>