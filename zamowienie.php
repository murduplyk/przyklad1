
<?php
define("KOSZULKA", 14.99); // cena koszulki jako sta³a
define("SPODNIE", 45.99); // cena spodni
define("CZAPKA", 9.63); // cena czapki
define("P_VAT", 0.23); // wysokoœæ podatku VAT
// przypisanie zmiennych formularza
$ile_koszulki = $_POST['koszulki'];
$ile_spodnie = $_POST['spodnie'];
$ile_czapki = $_POST['czapki'];
// wartoœæ netto zamówionych przedmiotów
$kwota_koszulki_netto = $ile_koszulki * KOSZULKA;
$kwota_spodnie_netto = $ile_spodnie * SPODNIE;
$kwota_czapki_netto = $ile_czapki * CZAPKA;
// cena netto ca³ego zamówienia
$kwota_zamowienia_netto = $kwota_koszulki_netto +
$kwota_spodnie_netto + $kwota_czapki_netto;
// wartoœci brutto
$kwota_koszulki_brutto = $kwota_koszulki_netto +
$kwota_koszulki_netto * P_VAT;
$kwota_spodnie_brutto = $kwota_spodnie_netto +
$kwota_spodnie_netto * P_VAT;
$kwota_czapki_brutto = $kwota_czapki_netto +
$kwota_czapki_netto * P_VAT;
// cena zamówienia brutto
$kwota_zamowienia_brutto = $kwota_koszulki_brutto +
$kwota_spodnie_brutto + $kwota_czapki_brutto;
?>

<html>
<head>
<title>Obs³uga zamówienia</title>
</head>
<body>
<?php
echo "Cena netto zamówionych koszulek: ".
$kwota_koszulki_netto."<br/>";
echo "Cena netto zamówionych spodni: ".
$kwota_spodnie_netto."<br/>";
echo "Cena netto zamówionych czapek: ".
$kwota_czapki_netto."<br/>";
echo "Wartoœæ netto ca³ego zamówienia: ".
$kwota_zamowienia_netto."<br/>";
echo "Cena brutto zamówionych koszulek: ".
$kwota_koszulki_brutto."<br/>";
echo "Cena brutto zamówionych spodni: ".
$kwota_spodnie_brutto."<br/>";
echo "Cena brutto zamówionych czapek: ".
$kwota_czapki_brutto."<br/>";
echo "Wartoœæ brutto ca³ego zamówienia: ".
$kwota_zamowienia_brutto."<br/>";
?>
</body>
</html>


