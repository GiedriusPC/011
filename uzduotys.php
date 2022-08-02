<h1>Kintamieji ir sąlygos</h1>

<?php

/* 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių 
ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
 */
echo('<h5> ---1--- </h5>');

$Vardas = 'Vardenis';
$Pavarde = 'Pavardenis';
$GimimoMetai = 2000;
$DabartiniaiMetai = 2022;

$AsmensAmzius = $DabartiniaiMetai - $GimimoMetai;

echo "Aš esu $Vardas $Pavarde. Man yra $AsmensAmzius metai.";

/* Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
 Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. */

 /* 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/
echo('<h5> ---5--- </h5>'); 

$_1 = rand(0, 2);
$_2 = rand(0, 2);
$_3 = rand(0, 2);
$_4 = rand(0, 2);

$two = 0;

if ($_1 == 2) {
    $two++;
}
if ($_2 == 2) {
    $two++;
}
if ($_3 == 2) {
    $two++;
}
if ($_4 == 2) {
    $two++;
}

$suma = $_1 + $_2 + $_3 + $_4;

$one = $suma - (2 * $two);

$zero = 4 - $one -$two;

echo "$_1 $_2 $_3 $_4 ----- $zero:$one:$two";


 /* 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
*/
echo('<h5> ---6--- </h5>');

$r = rand(1, 6);

echo "<h$r>$r</h$r>";

echo "<br>";

var_dump (0 == "");