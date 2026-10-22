<?php
declare(strict_types=1);
class Arr
{
    public static function hasFailingScore(array $score): bool
    {
        return array_any($score, fn($score) => $score >= 50 ? true : false);
    }
    //this way important favorite
    public static function hasFailingScoree(array $score): bool
    {
        return array_any($score, fn($score) => !\Num::isPassingScore($score));
    }
    //this way important favorite
    public static function passingScores(array $scores): array
    {
        return array_filter($scores, "Num::isPassingScore");
    }
    public static function firstPassingScore(array $scores): mixed
    {
        return array_find($scores, "Num::isPassingScore");
    }
    public static function studentScores(array $names, array $scores): array
    {
        $names = array_map("Str::title", $names);
        return array_combine($names, $scores);
    }
    public static function groupProducts(array $names)
    {
        $m = array_map("Str::title", $names);
        return array_chunk($m, 2);

    }
    public static function uniqueProducts(array $store1, array $store2)
    {
        return array_diff($store1, $store2);
    }
    public static function mergeCarts(array $cart1, array $cart2)
    {
        $c = array_merge($cart1, $cart2);
        return array_map("Str::title", $c);
    }
    //this difficult 
    public static function randomWinners(array $rand, int $number): array
    {
        if ($number <= 0 || count($rand) == 0) {
            return [];
        }
        $number = min($number, count($rand));
        $r = array_rand($rand, $number);
        $r = (array) $r;

        $P = [];
        foreach ($r as $key) {
            $P[] = \Str::title($rand[$key]);
        }
        return $P;
    }
    public static function orderTotal(array $order)
    {
        return array_reduce($order, static fn($total, $item) => $total + ($item['price'] * $item['quantity']), 0);
    }
    public static function adultUsers(array $users)
    {
        $users = array_filter($users, static fn($user) => !\Num::isAdult($user['age']));
        return array_map(static fn($user) => \Str::title($user['name']), $users);
    }

    //important for me  favorite
    public static function firstAffordableProduct(array $products, float $maxPrice): ?array
    {
        $product = array_find(
            $products,
            static fn($item) => $item['price'] <= $maxPrice
        );
        if ($product === null) {
            return null;
        }
        $product['name'] = \Str::title($product['name']);
        return $product;
    }
    public static function inventoryReport(array $product){
        $f=array_filter($product,static fn($item)=>$item['quantity']>0);
        print_r($f);
        $a=array_any($product,static fn($item)=>$item['quantity']<5);
        echo "<pre>";
        print_r($a);
        echo "<pre>";
        $c=array_column($f,"quantity");
        print_r($c);
        /*$total = array_sum(array_column($f, 'quantity'));
        print_r($total);*/
        $total2=array_sum($c);
        print_r($total2);
        $f = \Str::title(array_first(array_column($product, "name")));
        echo "<pre>";
        print_r($f);
        echo "<pre>";
        $l = \Str::title(array_last(array_column($product, "name")));
        echo "<pre>";
        print_r($l);
        echo "<pre>";
        
        
    }

}
