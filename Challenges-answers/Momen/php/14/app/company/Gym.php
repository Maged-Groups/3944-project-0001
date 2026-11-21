<?php

declare(strict_types=1);

namespace App\Company;

class Gym
{
    public const MONTHLY_PRICE = 500;
    public const QUARTERLY_PRICE = 1350;
    public const YEARLY_PRICE = 4800;
    public const PERSONAL_TRAINING_PRICE = 200;


    private string $name;
    private string $city;
    private int $capacity;

    private array $members = [];

    private int $subscriptions = 0;
    private float $revenue = 0;
    private float $expenses = 0;

    private static int $totalBranches = 0;
    private static int $totalMembers = 0;
    private static int $totalSubscriptions = 0;
    private static float $totalRevenue = 0;
    private static float $totalExpenses = 0;

    private static array $allMembers = [];

    public function create(
        string $name,
        string $city,
        int $capacity
    ): void {

        $this->name = $name;
        $this->city = $city;
        $this->capacity = $capacity;

        self::$totalBranches++;

        echo "Branch {$this->name} created successfully.<br>";
    }

    private function getSubscriptionPrice(string $type): ?float
    {
        return match ($type) {
            'monthly' => self::MONTHLY_PRICE,
            'quarterly' => self::QUARTERLY_PRICE,
            'yearly' => self::YEARLY_PRICE,
            default => null
        };
    }

    public function addMember(
        int $id,
        string $name,
        string $phone,
        string $subscriptionType
    ): void {


        if (count($this->members) >= $this->capacity) {
            echo "Sorry, {$this->name} is full.<br>";
            return;
        }
        $existingMember = array_filter(
            $this->members,
            function ($member) use ($id) {
                return $member['id'] === $id;
            }
        );

        if (!empty($existingMember)) {
            echo "Member already exists in {$this->name}.<br>";
            return;
        }
        $price = $this->getSubscriptionPrice($subscriptionType);

        if ($price === null) {
            echo "Invalid subscription type.<br>";
            return;
        }


        // Create member
        $member = [
            'id' => $id,
            'name' => $name,
            'phone' => $phone,
            'subscriptionType' => $subscriptionType,
            'subscriptionPrice' => $price,
            'branchName' => $this->name
        ];
        $this->members[] = $member;

        self::$allMembers[] = $member;
        $this->subscriptions++;
        $this->revenue += $price;
        self::$totalMembers++;
        self::$totalSubscriptions++;
        self::$totalRevenue += $price;


        echo "Member {$name} added successfully with {$subscriptionType} subscription.<br>";
    }

    public function renewSubscription(
        int $memberId,
        string $newSubscriptionType
    ): void {

        $foundMember = array_filter(
            $this->members,
            function ($member) use ($memberId) {
                return $member['id'] === $memberId;
            }
        );

        if (empty($foundMember)) {
            echo "Member not found in {$this->name}.<br>";
            return;
        }


        $newPrice = $this->getSubscriptionPrice($newSubscriptionType);

        if ($newPrice === null) {
            echo "Invalid subscription type.<br>";
            return;
        }

        $this->members = array_map(
            function ($member) use ($memberId, $newSubscriptionType, $newPrice) {

                if ($member['id'] === $memberId) {
                    $member['subscriptionType'] = $newSubscriptionType;
                    $member['subscriptionPrice'] = $newPrice;
                }

                return $member;
            },
            $this->members
        );

        self::$allMembers = array_map(
            function ($member) use ($memberId, $newSubscriptionType, $newPrice) {

                if (
                    $member['id'] === $memberId &&
                    $member['branchName'] === $this->name
                ) {
                    $member['subscriptionType'] = $newSubscriptionType;
                    $member['subscriptionPrice'] = $newPrice;
                }

                return $member;
            },
            self::$allMembers
        );
        $this->subscriptions++;
        self::$totalSubscriptions++;

        $this->revenue += $newPrice;
        self::$totalRevenue += $newPrice;


        echo "Member subscription renewed successfully in {$this->name}.<br>";
    }

    public function removeMember(int $memberId): void
    {

        $foundMember = array_filter(
            $this->members,
            function ($member) use ($memberId) {
                return $member['id'] === $memberId;
            }
        );

        if (empty($foundMember)) {
            echo "Member not found in {$this->name}.<br>";
            return;
        }

        $this->members = array_values(
            array_filter(
                $this->members,
                function ($member) use ($memberId) {
                    return $member['id'] !== $memberId;
                }
            )
        );


        self::$allMembers = array_values(
            array_filter(
                self::$allMembers,
                function ($member) use ($memberId) {

                    return !(
                        $member['id'] === $memberId &&
                        $member['branchName'] === $this->name
                    );
                }
            )
        );


        self::$totalMembers--;


        echo "Member removed successfully from {$this->name}.<br>";
    }

    public function addExpense(float $amount): void
    {

        $this->expenses += $amount;
        self::$totalExpenses += $amount;

        echo "Expense {$amount} added to {$this->name}.<br>";
    }

    public function membersReport(): void
    {
        echo "<h2>{$this->name} - Members Report</h2>";

        if (empty($this->members)) {
            echo "No members found.<br>";
            return;
        }

        foreach ($this->members as $member) {

            echo "ID: {$member['id']}<br>";
            echo "Name: {$member['name']}<br>";
            echo "Phone: {$member['phone']}<br>";
            echo "Subscription: {$member['subscriptionType']}<br>";
            echo "Price: {$member['subscriptionPrice']} EGP<br>";

            echo "<br>";
        }

        echo "Total Members: " . count($this->members) . "<br>";
    }

    public function report(): void
    {
        $currentMembers = count($this->members);

        $availableCapacity = $this->capacity - $currentMembers;

        $netProfit = $this->revenue - $this->expenses;

        echo "<h2>{$this->name} - Financial Report</h2>";

        echo "Branch Name: {$this->name}<br>";
        echo "City: {$this->city}<br>";
        echo "Maximum Capacity: {$this->capacity}<br>";
        echo "Current Members: {$currentMembers}<br>";
        echo "Available Capacity: {$availableCapacity}<br>";
        echo "Total Subscriptions: {$this->subscriptions}<br>";
        echo "Total Revenue: {$this->revenue} EGP<br>";
        echo "Total Expenses: {$this->expenses} EGP<br>";
        echo "Net Profit: {$netProfit} EGP<br>";
    }


    public static function companyMembersReport(): void
    {
        echo "<h2>Company Members Report</h2>";

        foreach (self::$allMembers as $member) {

            echo "ID: {$member['id']}<br>";
            echo "Name: {$member['name']}<br>";
            echo "Phone: {$member['phone']}<br>";
            echo "Subscription: {$member['subscriptionType']}<br>";
            echo "Price: {$member['subscriptionPrice']} EGP<br>";
            echo "Branch: {$member['branchName']}<br>";

            echo "<br>";
        }


        echo "Total Company Members: " . self::$totalMembers . "<br>";
    }

    public static function companyReport(): void
    {
        $companyProfit =
            self::$totalRevenue - self::$totalExpenses;

        echo "<h2>Company Report</h2>";

        echo "Total Branches: " . self::$totalBranches . "<br>";
        echo "Total Members: " . self::$totalMembers . "<br>";
        echo "Total Subscriptions: " . self::$totalSubscriptions . "<br>";
        echo "Total Revenue: " . self::$totalRevenue . " EGP<br>";
        echo "Total Expenses: " . self::$totalExpenses . " EGP<br>";
        echo "Total Company Profit: {$companyProfit} EGP<br>";
    }
}
