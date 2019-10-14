<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript" src="/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

</head>
<body>

<?php
$cart = array(
  "orderID" => 12345,
  "shopperName" => "Ваня Иванов",
  "shopperEmail" => "ivanov@example.com",
  "contents" => array(
    array(
      "productID" => 34,
      "productName" => "Супер товар",
      "quantity" => 1
    ),
    array(
      "productID" => 56,
      "productName" => "Чудо товар",
      "quantity" => 3
    )
  ),
  "orderCompleted" => true
);
//echo json_encode( $cart );

$cart = json_encode( $cart );
?>
<script>
var d = JSON.parse('<?=$cart?>');
..alert(d.orderID);
</script>

</body>
</html>