<?php


$wallet = [
    200 => 200,
    100 => 100,
    50 => 50,
    20 => 20,
    10 => 10,
    5  => 5,
    2  => 2,
    1  => 1

];

function showWallet(array $wallet): void
{
    foreach ($wallet as $coins => $amount){
        echo "$coins ($amount) | ";
    }
}

function coinChange(int $amount): array {
    $coinChange = [
        200 => 200,
        100 => 100,
        50 => 50,
        20 => 20,
        10 => 10,
        5  => 5,
        2  => 2,
        1  => 1
    ];

    foreach ($coinChange as $name => $value) {
        $coins = floor($amount / $value);
        $change[$name] = $coins;
        if ($coins > 0) {
            $amount -= ($value * $coins);
        }
    }
    return $change;
}



$latte = new stdClass();
$latte->name = "latte";
$latte->price = 200;

$blackCoffee = new stdClass();
$blackCoffee ->name = "black coffee";
$blackCoffee ->price = 99;

$tea = new stdClass();
$tea->name = "tea";
$tea->price = 65;

$chaiTeaLatte = new stdClass();
$chaiTeaLatte->name = "chai tea latte";
$chaiTeaLatte->price = 350;
$coffeeMachine = [$latte, $blackCoffee, $tea, $chaiTeaLatte];

$insertedAmount = [];
$sum = 0;
$customerChoiceTest = [];

$customerChoice = (string)readline("Choose drink ");
$i = 0;
do{
    if($customerChoice === "latte"){
        $customerChoiceTest = 1;
    }
    if($customerChoice === "black coffee"){
        $customerChoiceTest = 2;
    }
    if($customerChoice === "tea"){
        $customerChoiceTest = 3;
    }
    if($customerChoice === "chai tea latte"){
        $customerChoiceTest = 4;
    }
    foreach ($coffeeMachine as $drink => $drinkName) {
        if ($customerChoice === $drinkName->name) {
            echo "You choose: " . $drinkName->name . "Please insert $drinkName->price coins!" . PHP_EOL;


            if($drinkName->price > $sum){
                $insertedCoin = (int)readline("Insert coin: ");
                break;
            }
        }
    }

    if (!isset($wallet[$insertedCoin])) {
        echo "Invalid coin ";
        exit;
    }
    if ($wallet[$insertedCoin] <= 0) {
        echo "You don't have such coin ";
    }

    $sum = array_sum($insertedAmount);

    if($insertedCoin) {
        array_push($insertedAmount, $insertedCoin);
        $wallet[$insertedCoin] -= 1;
        showWallet($wallet);
        echo PHP_EOL;
    }

    $sum = array_sum($insertedAmount);
    echo "Inserted amount: " . $sum . PHP_EOL;
    echo PHP_EOL;

}while($drinkName->price > $sum);

$return = [];
$sum1 = array_sum($return);

if(array_key_exists($customerChoiceTest, $coffeeMachine)){
    foreach ($coffeeMachine as $drink){
        if($customerChoice === $drink->name && $drink->price < $sum){
            $return = $sum - $drink->price;
            var_dump(coinChange($return));
        }
    }
}


