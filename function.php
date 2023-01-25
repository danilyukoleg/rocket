<?php
$user = "test_db";
$password = "Dff6ds2323_";
$database = "test_db";
$table = "list";
try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  foreach ($db->query("SELECT check_list, new_price, order_id FROM $table") as $row) {
    $data = '
       <div class="check-up__block">
       <div class="check-up__wrap">
         <div class="check-up__item">
           <h3 class="check-up__title">Check-UP</h3>
           <p class="check-up__text">для мужчин</p>
           <ul class="check-up__list">'
      . $row["check_list"] .
      '
           </ul>
           <div class="check-up__price">
             <p class="new-price">Всего ' . $row["new_price"] . '</p>
             <p class="old-price">' . $row["order_id"] .  '</p>
           </div>
           <div class="check-up__block">
             <button class="check-up__button" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Записаться
             </button>
             <button class="check-up__button-more" data-bs-toggle="modal" data-bs-target="#thanks">
               Подробнее
             </button>
           </div>
         </div>
       </div>
       <div class="check-up__image">
         <img src="assets/images/docto.jpg" alt="check-up для мужчин" />
       </div>
     </div>
       ';
  }
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
