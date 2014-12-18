﻿<?php
$folder="/";
$folderCSS="../";
include($folder . "incl/header.php"); 
?>
        <div id="content">
            <h2>Ärenden</h2>
            <p class="info">Du är inloggad som samordnare</p>

            <table id="managerForm">
                <tr>
                    <td class="label">Välj status:</td>
                    <td class="label">Välj avdelning:</td>
                    <td>&nbsp;</td>
                    <td class="label">Ärendenummer:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <select name="status">
                            <option selected="selected">Välj alla</option>
                            <option value="stat0">Inrapporterad</option>
                            <option value="stat1">Ingen åtgärd</option>
                            <option value="stat2">Påbörjad</option>
                            <option value="stat3">Klar</option>
                        </select>
                    </td>
                    <td>
                        <select name="department">
                            <option selected="selected">Välj alla</option>
                            <option value="teknik">Tekniska avloppshanteringen</option>
                            <option value="klimat">Klimat och energi</option>
                            <option value="miljo">Miljö och Hälsoskydd</option>
                            <option value="natur">Natur och Skogsvård</option>
                            <option value="avfall">Renhållning och Avfall</option>
                        </select>
                    </td>
                    <td><input class="button" type="submit" value="Hämta lista" /></td>
                    <td><input name="casenumber" /></td>
                    <td><input class="button" type="submit" value="Sök" /></td>
                </tr>
            </table>
            <!--Nedan ser man en lista på ärenden-->
            <table>
                <tr>
                    <th>Ärende anmält</th>
                    <th>Ärendenummer</th>
                    <th>Miljöbrott</th>
                    <th>Status</th>
                    <th>Avdelning</th>
                    <th>Handläggare</th>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0201</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Ej startad</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Ingen utredare satt</td>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0202</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Pågående</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Ada Bengtsson</td>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0203</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Ej startad</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Ingen utredare satt</td>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0204</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Ej startad</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Ingen utredare satt</td>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0205</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Pågående</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Bengt Cederström</td>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0206</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Ej startad</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Ingen utredare satt</td>
                </tr>
                <tr>
                    <td>2014-05-01</td>
                    <td><a href="crimeCoordinator.html">2014-45-0206</a></td>
                    <td>Oljeutsläpp</td>
                    <td>Ej startad</td>
                    <td>Tekniska avloppshanteringen</td>
                    <td>Ingen utredare satt</td>
                </tr>
            </table>

            <?php
            include($folder . "incl/footer.php");
            ?>
