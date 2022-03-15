<?php
function debug($dat) {
    echo '<pre>' . print_r($dat, 1) . '</pre>';
}
$labels = [
    'id' => 'Поле ID',
    'name' => 'Поле имя',
    'surname' => 'Поле фамилия',
    'patronymic' => 'Поле отчество',
    'floor' => 'Поле пол',
    'date' => 'Поле дата рождения',
];
$rules = [
    'required' => ['id', 'name', 'surname', 'floor', 'date'],
    'lengthMax' => [
        ['surname', 35], ['patronymic', 35], ['name', 25],
    ],
    'regex' => [
        ['name', '/^[а-я]+$/iu'], ['surname', '/^[а-я]+$/iu'], ['patronymic', '/^[а-я]+$/iu']
    ],

    'integer' => [
        ["id"],
    ],
    'DateFormat' => [
        ['created_at', 'd-m-Y']
    ],
    'dateBefore' => [
        ['date', '13-10-2018']
    ],
    'dateAfter' => [
        ['date', '01-01-1990']
    ]
];


if (!empty($_POST)) {
    \Valitron\Validator::lang('ru');
    $v = new \Valitron\Validator($_POST);
    $v->labels($labels);
    $v->rules($rules);
    if ($v->validate()){
        $_SESSION['success'] = 'Данные сохранены';
        $result = implode("\n\r", $_POST);
        $res = file_put_contents('info.txt', $result . PHP_EOL,FILE_APPEND);
    } else {
        $errors = '<ul>';
        foreach ($v->errors() as $error) {
            foreach ($error as $item) {
                $errors .= "<li>{$item}</li>";
            }
        }
        $errors .= "</ul>";
        $_SESSION['errors'] = $errors;
    }
    header("Location: index.php");
    die;
}



