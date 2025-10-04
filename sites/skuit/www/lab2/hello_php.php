<?
$name = 'Корявко Матвей Петрович'
$age = 17;
?>

 <title><?= $name?></title>
 <?for ($age; $age > 0; $age-- ):?>
    <p> <?= $age?> Статичный текст </p>
<?endfor;?>