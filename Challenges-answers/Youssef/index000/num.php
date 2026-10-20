<?php
class Num{
    public static function isPassingScore(int $score): bool {
        return $score >= 50;
    }
    public static function isAdult(int $score): bool {
        return $score >= 18;
    }
}
