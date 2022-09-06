<?php

include 'number.php';

for ($i = 0; $i < $p; $i++) {
    $newArr[$i] = (explode(' ', $example_persons_array[$i]['fullname']));
    $getPartsFromFullname[$i] = array_combine($persons, $newArr[$i]);
}

// $newArr Вид строки: [0] => Array ( [0] => Иванов [1] => Иван [2] => Иванович 

// print_r($newArr);


// getPartsFromFullname Вид стоки: [0] => Array ( [patronomyc] => Иванов [name] => Иван [surname] => Иванович 

// print_r($getPartsFromFullname); 

//-------------------------------------------------------

for ($i = 0; $i < $p; $i++) {
    $newArr[$i] = (explode(' ', $example_persons_array[$i]['fullname']));
    $getFullnameFromParts[$i] = $newArr[$i][0] . ' ' . $newArr[$i][1] . ' ' . $newArr[$i][2];
}

// $getFullnameFromParts Вид стоки: [0] => Иванов Иван Иванович

// print_r($getFullnameFromParts);

//---------------------------------------------------------

for ($i = 0; $i < $p; $i++) {
    $newArr[$i] = (explode(' ', $example_persons_array[$i]['fullname']));
    $getShortName[$i] = $newArr[$i][0] . ' ' . mb_substr($newArr[$i][1], 0, 1) . '.';
}

// $getShortName Вид стоки: [0] => Иванов И. 

// print_r($getShortName);

//---------------------------------------------------------

function getGenderFromName() {
    include 'number.php';
for ($i = 0; $i < $p; $i++) {
    $newArr[$i] = (explode(' ', $example_persons_array[$i]['fullname']));
    $newArr[$i][3] = $gender;
    $getFullnameFromParts[$i] = $newArr[$i][0] . ' ' . $newArr[$i][1] . ' ' . $newArr[$i][2];
    if (mb_substr($newArr[$i][2], -3, 3) == 'вна') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][1], -1, 1) == 'а') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][0], -2, 2) == 'ва') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][2], -2, 2) == 'ич') {
        $newArr[$i][3]++;
    };
    if (mb_substr($newArr[$i][1], -1, 1) == ('й'&&'н')) {
        $newArr[$i][3]++;
    };
    if (mb_substr($newArr[$i][0], -1, 1) == 'в') {
        $newArr[$i][3]++;
    };
    if ($newArr[$i][3] > 0) {
        $newArr[$i][3] = 'мужчина';
    } elseif ($newArr[$i][3] < 0) {
        $newArr[$i][3] = 'женщина';
    } else {
        $newArr[$i][3] = 'пол не определён';
    };
    print_r($newArr[$i]);
}
}

// getGenderFromName();

// getGenderFromName(); Вид стоки: [0] => Иванов [1] => Иван [2] => Иванович [3] => мужчина 

//---------------------------------------------------------

function getGenderDescription() {
    include 'number.php';
for ($i = 0; $i < $p; $i++) {
    $newArr[$i] = (explode(' ', $example_persons_array[$i]['fullname']));
    $newArr[$i][3] = $gender;
    if (mb_substr($newArr[$i][2], -3, 3) == 'вна') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][1], -1, 1) == 'а') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][0], -2, 2) == 'ва') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][2], -2, 2) == 'ич') {
        $newArr[$i][3]++;
    };
    if (mb_substr($newArr[$i][1], -1, 1) == ('й'&&'н')) {
        $newArr[$i][3]++;
    };
    if (mb_substr($newArr[$i][0], -1, 1) == 'в') {
        $newArr[$i][3]++;
    };
    if ($newArr[$i][3] > 0) {
        $man++;
    } elseif ($newArr[$i][3] < 0) {
        $woman++;
    } else {
        $unknown++;
    };
}
$x = round((100*$man)/$p, 1);
$y = round((100*$woman)/$p, 1);
$z = round((100*$unknown)/$p, 1);
$enter = <<<MYHEREDOCTEXT
Гендерный состав аудитории:  <br>
------------------------------------  <br>
Мужчины - $x% <br>
Женщины - $y% <br>
Не удалось определить - $z% <br>
MYHEREDOCTEXT;
print_r("$enter");
}

// getGenderDescription();

// Выводит текст:
// Гендерный состав аудитории:
// ------------------------------------
// Мужчины - 63.6%
// Женщины - 18.2%
// Не удалось определить - 18.2%

//---------------------------------------------------------

function getPerfectPartner() {
    include 'number.php';
for ($i = 0; $i < $p; $i++) {
    $newArr[$i] = (explode(' ', $example_persons_array[$i]['fullname']));
    $newArr[$i][3] = $gender;
    if (mb_substr($newArr[$i][2], -3, 3) == 'вна') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][1], -1, 1) == 'а') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][0], -2, 2) == 'ва') {
        $newArr[$i][3]--;
    };
    if (mb_substr($newArr[$i][2], -2, 2) == 'ич') {
        $newArr[$i][3]++;
    };
    if (mb_substr($newArr[$i][1], -1, 1) == ('й'&&'н')) {
        $newArr[$i][3]++;
    };
    if (mb_substr($newArr[$i][0], -1, 1) == 'в') {
        $newArr[$i][3]++;
    };
    if ($newArr[$i][3] > 0) {
        $newArr[$i][3] = 'мужчина';
    } elseif ($newArr[$i][3] < 0) {
        $newArr[$i][3] = 'женщина';
    } else {
        $newArr[$i][3] = 'пол не определён';
    };
}
$partner = $newArr[rand(0, $p-1)];
    if ($partner[3] == 'пол не определён') {
        ob_clean();
        getPerfectPartner();
        return;
    }
$partner2 = $newArr[rand(0, $p-1)];
if ($partner2[3] === 'пол не определён'||$partner2[3] == $partner[3]) {
    ob_clean();
    getPerfectPartner();
    return;
}

$shotPartner = $partner[0] . ' ' . mb_substr($partner[1], 0, 1) . '. +';
$shotPartner2 = $partner2[0] . ' ' . mb_substr($partner2[1], 0, 1) . '. =';

$link = <<<MYHEREDOCTEXT
$shotPartner $shotPartner2  <br>
♡ Идеально на $rand% ♡  <br>
MYHEREDOCTEXT;
print_r("$link");
}

// getPerfectPartner();

// Выводит информацию типа:
// Степанова Н. + Славин С. =
// ♡ Идеально на 78.41% ♡
?>