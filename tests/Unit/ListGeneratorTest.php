<?php

use MakeItWithExercises\ListGenerator;

describe('should generate a list', function () {
    it('may list be filled', function () {
        expect(empty(ListGenerator::buildInt()))->toBe(false);
    });

    it('may list have length of '.ListGenerator::DEFAULT_ARRAY_SIZE, function () {
        expect(count(ListGenerator::buildInt()))
            ->toBe(ListGenerator::DEFAULT_ARRAY_SIZE);
    });

    it('may items be greater than '.ListGenerator::DEFAULT_ARRAY_MIN, function () {
        $numbers = ListGenerator::buildInt();
        $min = ListGenerator::DEFAULT_ARRAY_MAX;

        foreach ($numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }

        expect($min > ListGenerator::DEFAULT_ARRAY_MIN)->toBe(true);
    });

    it('may items be minor than '.ListGenerator::DEFAULT_ARRAY_MAX, function () {
        $numbers = ListGenerator::buildInt();
        $max = ListGenerator::DEFAULT_ARRAY_MIN;

        foreach ($numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }

        expect($max < ListGenerator::DEFAULT_ARRAY_MAX)->toBe(true);
    });

    it('may items be int', function () {
        $numbers = ListGenerator::buildInt();
        $otherType = null;

        foreach ($numbers as $number) {
            if (gettype($number) !== 'integer') {
                $otherType = gettype($number);
                
                break;
            }
        }

        expect(is_null($otherType))->toBe(true);
    });

    it('may return int only with strings', function () {
        ListGenerator::sortInt([1, 2, 3, 'show', 4]);
    })->throws(Exception::class, 'Should have int values only.');

    it('may return int only with float', function () {
        ListGenerator::sortInt([1, 2, 3, 2.2, 4]);
    })->throws(Exception::class, 'Should have int values only.');

    it('may results be int', function () {
        $numbers = ListGenerator::sortInt([1, 5, 3, 5]);
        $otherType = null;

        foreach ($numbers as $number) {
            if (gettype($number) !== 'integer') {
                $otherType = gettype($number);
                
                break;
            }
        }

        expect(is_null($otherType))->toBe(true);
    });

    it('may results be ordered', function () {
        expect(ListGenerator::sortInt([3, 6, 5, 1]))->toBe([1, 3, 5, 6]);
    });

    it('may results be ordered full', function () {
        $numbers = ListGenerator::buildInt();
        $min = min($numbers);
        $max = max($numbers);

        $numbers = ListGenerator::sortInt($numbers);
        $first = $numbers[0];
        $last = $numbers[count($numbers) - 1];

        expect($first === $min && $last === $max)->toBe(true);
    });
});