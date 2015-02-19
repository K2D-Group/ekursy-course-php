<?php
require_once "vendor/autoload.php";


function get($name){
    $f = file_get_contents(__DIR__.'/PHP - Pliki i katalogi/'.$name.'.md');
    $f = Parsedown::instance()->setMarkupEscaped(true)->text($f);

    return $f;
}

$HTML = '<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <meta charset="utf-8">
    </head>
    <body>';
$HTML .= get('001 Tworzenie katalogów');
$HTML .= '<hr>';
$HTML .= get('002 Kasowanie katalogów');
$HTML .= '<hr>';
$HTML .= get('003 Czy to katalog');
$HTML .= '<hr>';
$HTML .= get('004 Zmiana nazwy');
$HTML .= '<hr>';
$HTML .= get('005 Listowanie katalogów');
$HTML .= '<hr>';
$HTML .= get('006 Sprawdzanie');
$HTML .= '<hr>';
$HTML .= get('007 Odczyt i zapis plików - file');
$HTML .= '<hr>';
//$HTML .= get('008 Odczyt i zapis plików - f');
//$HTML .= '</hr>';
$HTML .= get('009 Zwracanie śceżki dostępu');
$HTML .= '<hr>';
$HTML .= get('010 Ilość wolnego miejsca');
$HTML .= '</body></html>';


file_put_contents('sandbox/output.html', $HTML);


$mpdf=new mPDF();
$mpdf->SetFooter('K2D ©2015');
$mpdf->WriteHTML($HTML);
$mpdf->Output('sandbox/output.pdf');