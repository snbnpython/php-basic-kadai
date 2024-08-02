<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php

        $Food = new Food('potato', 250);
        print_r($Food);

        print_r('<br>');

        $Animal = new Animal('dog', 60, 5000);
        print_r($Animal);

        print_r('<br>');

        $Food->show_price();

        $Animal->show_height();


        class Food
        {
            public $name;
            public $price;

            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            public function set_price(int $price)
            {
                $this->price = $price;
            }
            public function show_price()
            {
                echo $this->price . '<br>';
            }

        }


        class Animal
        {
            public $name;
            public $height;
            public $weight;

            public function __construct(string $name, int $height,int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function set_height(int $height)
            {
                $this->height = $height;
            }
            public function show_height()
            {
                echo $this->height . '<br>';
            }
        }
        ?>
    </p>
</body>

</html>