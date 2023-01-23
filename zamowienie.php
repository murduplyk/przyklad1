
<?php
define("KOSZULKA", 14.99); // cena koszulki jako sta�a
define("SPODNIE", 45.99); // cena spodni
define("CZAPKA", 9.63); // cena czapki
define("P_VAT", 0.23); // wysoko�� podatku VAT
// przypisanie zmiennych formularza
$ile_koszulki = $_POST['koszulki'];
$ile_spodnie = $_POST['spodnie'];
$ile_czapki = $_POST['czapki'];
// warto�� netto zam�wionych przedmiot�w
$kwota_koszulki_netto = $ile_koszulki * KOSZULKA;
$kwota_spodnie_netto = $ile_spodnie * SPODNIE;
$kwota_czapki_netto = $ile_czapki * CZAPKA;
// cena netto ca�ego zam�wienia
$kwota_zamowienia_netto = $kwota_koszulki_netto +
$kwota_spodnie_netto + $kwota_czapki_netto;
// warto�ci brutto
$kwota_koszulki_brutto = $kwota_koszulki_netto +
$kwota_koszulki_netto * P_VAT;
$kwota_spodnie_brutto = $kwota_spodnie_netto +
$kwota_spodnie_netto * P_VAT;
$kwota_czapki_brutto = $kwota_czapki_netto +
$kwota_czapki_netto * P_VAT;
// cena zam�wienia brutto
$kwota_zamowienia_brutto = $kwota_koszulki_brutto +
$kwota_spodnie_brutto + $kwota_czapki_brutto;
?>

<html>
<head>
<title>Obs�uga zam�wienia</title>
</head>
<body>
<?php
echo "Cena netto zam�wionych koszulek: ".
$kwota_koszulki_netto."<br/>";
echo "Cena netto zam�wionych spodni: ".
$kwota_spodnie_netto."<br/>";
echo "Cena netto zam�wionych czapek: ".
$kwota_czapki_netto."<br/>";
echo "Warto�� netto ca�ego zam�wienia: ".
$kwota_zamowienia_netto."<br/>";
echo "Cena brutto zam�wionych koszulek: ".
$kwota_koszulki_brutto."<br/>";
echo "Cena brutto zam�wionych spodni: ".
$kwota_spodnie_brutto."<br/>";
echo "Cena brutto zam�wionych czapek: ".
$kwota_czapki_brutto."<br/>";
echo "Warto�� brutto ca�ego zam�wienia: ".
$kwota_zamowienia_brutto."<br/>";
?>
</body>
</html>


