<?php
require_once "./classes/User.php";
require_once "./classes/StoreData.php";

echo "<h2>Step 1: USER REGISTRATION </h2>";
$newUser = new User("userNick", "peppino_sparalesto@gmail.com");
var_dump($newUser);

echo "<h2>Step 2: USER SETS PERSONAL DATA </h2>";
$newUser->setPersonalData("peppino", "sparalesto", 33309877654, "viale italia 1", "it", "milano");
// $newUser->set
var_dump($newUser);

echo "<h2>Step 3: USER ADDS PAYMENT METHOD </h2>";
$newUser->addPaymentMethod("paypal", $newUser->getAddress());
// $newUser->set
var_dump($newUser);

echo "<h2>Step 4: SHOP ADDS 3 PRODUCTS TO THE E-COMMERCE </h2>";
StoreData::$productsList[] = new Product("123", 55, "descrizione prodotto 1");
StoreData::$productsList[] = new Product("125", 108, "descrizione prodotto 2");
StoreData::$productsList[] = new Product("445", 45, "descrizione prodotto 3");
var_dump(StoreData::$productsList);

echo "<h2>Step 5: USER ADDS PRODUCT 2 TO CART</h2>";
$newUser->addProductToCart("125");
var_dump($newUser);

echo "<h2>Step 6: TEST THROWS PRODUCT-EXCEPTION WHEN ADD TO CART A WRONG PRODUCT ID</h2>";
try {
    $newUser->addProductToCart("random-id");
    echo "NO ERROR THROWN";
} catch (Exception $e) {
    echo "AN ERROR WAS THROWN!<br>";
    echo $e->getMessage();
}

echo "<h2>Step 7: TEST THROWS EMAIL-EXCEPTION WHEN USER CREATED WITH WRONG EMAIL ID</h2>";
try {
    $newUser = new User("userNick", "peppino_sparalesto");
    var_dump($newUser);
    echo "NO ERROR THROWN";
} catch (Exception $e) {
    echo "AN ERROR WAS THROWN!<br>";
    echo $e->getMessage();
}
// var_dump($newUser);
