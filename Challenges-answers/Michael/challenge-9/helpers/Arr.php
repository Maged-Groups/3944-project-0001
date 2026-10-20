<?php
declare(strict_types=1);

class Arr {
    // Challenge 11
    static function hasFailingScore(array $scores): bool {
        return array_any($scores, fn($score) => !Num::isPassingScore($score));
    }

    // Challenge 12
    static function passingScores(array $scores): array {
        return array_values(array_filter($scores, [Num::class, 'isPassingScore']));
    }

    // Challenge 13
    static function firstPassingScore(array $scores) {
        return array_find($scores, [Num::class, 'isPassingScore']);
    }

    // Challenge 14
    static function studentScores(array $names, array $scores): array {
        $formattedNames = array_map([Str::class, 'title'], $names);
        return array_combine($formattedNames, $scores);
    }

    // Challenge 15
    static function groupProducts(array $products, int $size): array {
        $formatted = array_map([Str::class, 'title'], $products);
        return array_chunk($formatted, $size);
    }

    // Challenge 16
    static function uniqueProducts(array $store1, array $store2): array {
        return array_values(array_diff($store1, $store2));
    }

    // Challenge 17
    static function mergeCarts(array $cart1, array $cart2): array {
        $merged = array_merge($cart1, $cart2);
        return array_map([Str::class, 'title'], $merged);
    }

    // Challenge 18
    static function randomWinners(array $participants, int $count): array {
        if ($count <= 0 || empty($participants)) {
            return [];
        }
        $total = count($participants);
        $count = min($count, $total);
        
        $keys = array_rand($participants, $count);
        $keys = is_array($keys) ? $keys : [$keys];
        
        $winners = array_map(fn($key) => Str::title($participants[$key]), $keys);
        return $winners;
    }

    // Challenge 19
    static function orderTotal(array $order) {
        return array_reduce($order, fn($carry, $item) => $carry + ($item['price'] * $item['quantity']), 0);
    }

    // Challenge 20
    static function adultUsers(array $users): array {
        $adults = array_filter($users, fn($user) => Num::isAdult($user['age']));
        return array_values(array_map(function($user) {
            $user['name'] = Str::title($user['name']);
            return $user;
        }, $adults));
    }

    // Challenge 21
    static function firstAffordableProduct(array $products, $maxPrice) {
        $found = array_find($products, fn($product) => $product['price'] <= $maxPrice);
        if ($found) {
            $found['name'] = Str::title($found['name']);
        }
        return $found;
    }

    // Challenge 22
    static function inventoryReport(array $products): array {
        $available = array_values(array_filter($products, fn($p) => $p['quantity'] > 0));
        
        $formattedAvailable = array_map(function($p) {
            $p['name'] = Str::title($p['name']);
            return $p;
        }, $available);

        return [
            'available_products' => $formattedAvailable,
            'has_low_stock'      => array_any($products, fn($p) => $p['quantity'] < 5),
            'total_quantity'     => array_sum(array_column($products, 'quantity')),
            'first_available'    => array_first ($formattedAvailable),
            'last_available'     => array_last ($formattedAvailable),
        ];
    }

    // Challenge 23
    static function compareClassrooms(array $classroomA, array $classroomB): array {
        $classA = array_map([Str::class, 'title'], $classroomA);
        $classB = array_map([Str::class, 'title'], $classroomB);

        $onlyA = array_values(array_diff($classA, $classB));
        $onlyB = array_values(array_diff($classB, $classA));
        $all = array_merge($classA, $classB);

        return [
            'only_a'        => $onlyA,
            'only_b'        => $onlyB,
            'all_students'  => $all,
            'total_entries' => count($all)
        ];
    }

    // Challenge 24
    static function salesReport(array $products, array $sales): array {
        $formattedProducts = array_map([Str::class, 'title'], $products);
        $sortedSales = $sales;
        sort($sortedSales);

        return [
            'product_sales'  => array_combine($formattedProducts, $sales),
            'total_sales'    => array_sum($sales),
            'has_high_sales' => array_any($sales, fn($sale) => $sale > 500),
            'sorted_sales'   => $sortedSales,
            'product_count'  => count($products)
        ];
    }

    // Challenge 25
    static function passingStudentsReport(array $names, array $scores): array {
        $formattedNames = array_map([Str::class, 'title'], $names);
        $combined = array_combine($formattedNames, $scores);
        
        $passing = array_filter($combined, [Num::class, 'isPassingScore']);
        $passingScores = array_values($passing);
        sort($passingScores);

        return [
            'passing_students'      => $passing,
            'passing_count'         => count($passing),
            'total_passing_scores'  => array_sum($passing),
            'average_passing_score' => Num::average($passing),
            'sorted_scores'         => $passingScores,
            'first_score'           => array_first ($passingScores),
            'last_score'            => array_last ($passingScores),
        ];
    }

    // Challenge 26
    static function normalizeProducts(array $products): array {
        $normalized = array_map([Str::class, 'title'], $products);
        $unique = array_unique($normalized);
        sort($unique);
        return array_values($unique);
    }

    // Challenge 27
    static function discountedOrderTotal(array $order, $discountPercent) {
        $totalBeforeDiscount = self::orderTotal($order);
        return Num::discountedPrice($totalBeforeDiscount, $discountPercent);
    }

    // Challenge 28
    static function formatCatalog(array $products): array {
        return array_map(function($product) {
            return [
                'name'  => Str::title($product['name']),
                'price' => Num::formatPrice($product['price'])
            ];
        }, $products);
    }

    // Challenge 29
    static function completeInventoryReport(array $products): array {
        $available = array_values(array_filter($products, fn($p) => $p['quantity'] > 0));
        $outOfStock = array_values(array_filter($products, fn($p) => $p['quantity'] === 0));
        
        $formatName = function($p) {
            $p['name'] = Str::title($p['name']);
            return $p;
        };

        $totalValue = array_reduce($products, fn($carry, $p) => $carry + ($p['price'] * $p['quantity']), 0);

        return [
            'available_products' => array_map($formatName, $available),
            'out_of_stock'       => array_map($formatName, $outOfStock),
            'has_low_stock'      => array_any($products, fn($p) => $p['quantity'] < 5),
            'total_quantity'     => array_sum(array_column($products, 'quantity')),
            'inventory_value'    => $totalValue
        ];
    }
}