<h1>Подготовка хоббитов к путешествию</h1>
<?php
$allHobbit = ["Фродо","Сэм","Мери","Пиппин","Бильбо"];
$partySize = rand(2,5);
shuffle($allHobbit);
$party = array_slice($allHobbit, 0, $partySize);
$names = implode(", ", $party);
$transports = ["лошадь", "осёл", "повозка", "нет транспорта"];
$transport = $transports[array_rand($transports)];
$allSupplies = ["Лембес", "Яблоки", "Грибы", "Мёд", "Сыр", "Сало", "Капченная рыба"];
shuffle($allSupplies);
$suppliesCount = rand(2, count($allSupplies));
$supplies = array_slice($allSupplies, 0, $suppliesCount);
$partyEvents = [
    "{hobbit} решил испечь пирог перед выходом.",
    "{hobbit} не смог найти свой плащ, пришлось искать вместе.",
    "{hobbit} потерял карту и пришлось искать её по всему дому.",
    "{hobbit} помог собрать лишний мешок орехов, и это задержало выход.",
    "{hobbit} наоборот всех поторопил, и сборы пошли быстрее.",
];
?>

<div class='block'>
    В поход отправился <?=count($party)?> хоббитов: <?=$names?><br>
</div>

<div class='block'>
    <? if ($transport === 'нет транспорта') { ?>
        К сожалению, транспорта нет. Хоббитам придётся идти пешком!
    <? } else { ?>
        Хоббиты нашли транспорт: <?=$transport?>
    <? } ?>
</div>

<div class='block'>
    Собрали припасы: <br>
    <? foreach ($supplies as $supply) { ?>
        - <?=$supply?> <br>
    <? } ?>
</div>

<div class='block'>
    
</div>