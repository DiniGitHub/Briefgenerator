<!DOCTYPE html>
<html>
    <head>
        <title>Briefgenerator Zawadzki</title>
        <LINK rel="stylesheet" type="text/css"
     href="mystyle.css" title="Default Styles" media="screen">
        <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    </head>
    <body>
        <br>
        <h1><b>Briefgenerator Zawadzki</b></h1>
        <div class="doc">
            <p>Wilkommen auf dieser Webseite! Sie können hier ein PDF-Dokument nach DIN 5008 Vorgaben erstellen. Füllen Sie dafür einfach das Formular aus!</p>
            <hr>
            <br>
            <form action="action_page.php" method="post">
                
                <div class="container" colspan="2">
                    <div class="floatLeft">
                        <table>
                            <th><h2>Adressat</h2></th>
                            <tr>
                                <td class="adressat">Firma (optional)</td>
                                <td class="input">  <input type="text" name="Firma1" required> </td>
                            </tr>
                                <tr>
                                    <td class="adressat">Anrede</td>
                                    <td class="input">  <input type="text" name="Anrede1" required> </td>
                                </tr>
                                <tr>
                                    <td class="adressat">Vorname</td>
                                    <td class="input">  <input type="text" name="Vorname1"required></td>
                                </tr>
                                <tr>
                                    <td class="adressat">Nachname</td>
                                    <td>  <input type="text" name="Nachname1" required> </td>
                                </tr>
                                <tr>
                                    <td class="adressat">Straße und Hausnummer</td>
                                    <td class="input">  <input type="text" name="StraßeHausnummer1" required> </td>
                                </tr>
                                <tr>
                                    <td class="adressat">Postleitzahl und Ort</td>
                                    <td>  <input type="text" name="PLZOrt1" required> </td>
                                </tr>
                            </table>
                        </div>
                        <div class="floatRight">
                            <table border="0" cellspacing="0" cellpadding="0" style="float:left">
                                <th><h2>Absender</h2></th>
                                <tr>
                                    <td class="absender">Firma (optional)</td>
                                    <td>  <input type="text" name="Firma2"> </td>
                                </tr>
                                <tr>
                                    <td class="absender">Anrede</td>
                                    <td>  <input type="text" name="Anrede2" required> </td>
                                </tr>
                                <tr>
                                    <td class="absender">Vorname</td>
                                    <td>  <input type="text" name="Vorname2" required> </td>
                                </tr>
                                <tr>
                                    <td class="absender">Nachname</td>
                                    <td>  <input type="text" name="Nachname2" required> </td>
                                </tr>
                                <tr>
                                    <td class="absender">Straße und Hausnummer</td>
                                    <td>  <input type="text" name="StraßeHausnummer2" required> </td>
                                </tr>
                                <tr>
                                    <td class="absender">Postleitzahl und Ort</td>
                                    <td>  <input type="text" name="PLZOrt2"> </td>
                                </tr>
                                <tr>
                                    <td class="absender">Telefonnummer (optional)</td>
                                    <td> <input type="tel" name="Telefonnummer" > </td>
                                </tr>
                                <tr>
                                    <td class="absender">E-Mail</td>
                                    <td> <input type="email" name="Email" > </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                                       
                    <br>
                    <hr>
                    <br>
                    <div class="container2">
                        <h2>Der Brief</h2>
                        <div class="brief">
                            <table>
                                <tr>
                                    <td>Datum </td>
                                    <td id="datum"> <input type="date" name="Datum" > </td>
                                </tr>
                                <tr>
                                    <td>Betreff</td>
                                    <td id="betreff">  <input type="text" name="Betreff" size="100" required> </td>
                                </tr>
                                <tr>
                                    <td>Briefinhalt</td>
                                    <td>  <textarea name="Briefinhalt" rows="25" cols="95" required></textarea> </td>
                                </tr>
                                <tr>
                                    <td>Fußzeile</td>
                                    <td id="fußzeile">  <input name="Fußzeile" size="100" required> </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <button  class="button" style="vertical-align:middle" type="submit" name="button"><span> PDF-Dokument erstellen </span></button>
                        <br>
                    </div>
                </div>
                </div>
            </form>
            <br>
        </div>
    </body>
</html>