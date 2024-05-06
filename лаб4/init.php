<?php
require_once 'function.php';

function baza() {
    $publications = [
        [
            'id' => 1,
            'title' => 'Курячі рулетики з грибами',
            'content' => 'Курячі рулетики з грибами прикрасять будь-який святковий стіл, що вже казати, про звичайному вечері. Рулетики виходять мякі, ніжні, а всередині сюрприз: смажені шампіньйони з цибулею ідеально доповнюють все це блюдо. Таке необхідно спробувати кожному, хоч раз у житті – смакота!',
            'author' => 'cookery',
            'image' => '1.jpg',
            'created' => '20 березня 2024',

        ],
         [
            'id' => 2,
            'title' => 'Помідори по-корейськи',
            'content' => 'Ви любите пікантні овочеві страви – закуски? Тоді помідори по-корейськи можуть стати родзинкою вашого святкового або повсякденного столу. Ніжний, в міру гостре і дуже насичене страва підкорить вас своїм ароматом і смаком!',
            'author' => 'cookery',
            'image' => '6.jpg',
            'created' => '19 березня 2024',

        ]
    ];

    $pdo = getDbConnection();
    foreach ($publications as $publication) {
        $sql = "INSERT INTO articles SET title = '{$publication['title']}', content = '{$publication['content']}', author = '{$publication['author']}', image = '{$publication['image']}', created = '{$publication['created']}'";
        $result = $pdo->exec($sql);
        if (false === $result) {
            var_dump($pdo->errorInfo());
            http_response_code(500);
        }
    }
}


?>
