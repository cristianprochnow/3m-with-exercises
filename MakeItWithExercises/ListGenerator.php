<?php

    namespace MakeItWithExercises;

    use Exception;

    class ListGenerator {
        public const DEFAULT_ARRAY_SIZE = 20000;
        public const DEFAULT_ARRAY_MIN = -999999;
        public const DEFAULT_ARRAY_MAX = 999999;

        /**
         * @return int[]
         */
        public static function buildInt(): array {
            $numbers = [];

            while (count($numbers) < self::DEFAULT_ARRAY_SIZE) {
                $numbers[] = random_int(
                    self::DEFAULT_ARRAY_MIN, self::DEFAULT_ARRAY_MAX
                );
            }

            return $numbers;
        }


        /**
         * @param int[] $numbers
         * @return array
         */
        public static function sortInt(array $numbers): array {
            foreach ($numbers as $number) {
                if (gettype($number) !== 'integer') {
                    throw new Exception('Should have int values only.');
                }
            }

            $length = count($numbers);

            for ($outCounter = 0; $outCounter < $length - 1; $outCounter++) {
                for ($inCounter = 0; $inCounter < $length - $outCounter - 1; $inCounter++) {
                    if ($numbers[$inCounter] > $numbers[$inCounter + 1]) {
                        $temporary = $numbers[$inCounter];
                        $numbers[$inCounter] = $numbers[$inCounter + 1];
                        $numbers[$inCounter + 1] = $temporary;
                    }
                }
            }

            return $numbers;
        }
    }