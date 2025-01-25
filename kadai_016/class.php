<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <p>
    <?php
      class Food {
        private $name;
        private $price;

        public function show_price () {
          print_r($this->price);
          echo '<br>';
        }
        
        public function __construct (string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

      };

      class Animal {
        private $name;
        private $height;
        private $weight;
        
        public function show_height () {
          print_r($this->height);
          echo '<br>';
        }
        
        public function __construct (string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

      };

      $food = new Food('potato', 250);
      $animal = new Animal('dog', 60, 5000);

      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';
      $food->show_price();
      $animal->show_height();
    ?>
  </p>
  
</body>
</html>