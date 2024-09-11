<?php

    namespace MakeItWithExercises;

    class KiloToMass {
        private const EARTH_GRAVITY = 9.81;
        private const MOON_GRAVITY = 1.635;
        private const MARS_GRAVITY = 3.71;

        public static function convertToMars(float $weight): float {
            if (empty($weight)) return 0.0;

            return round(
                num: $weight * (self::EARTH_GRAVITY / self::MARS_GRAVITY),
                precision: 2
            );
        }

        public static function convertToMoon(float $weight): float {
            if (empty($weight)) return 0.0;

            return round(
                num: $weight * (self::MOON_GRAVITY / self::EARTH_GRAVITY),
                precision: 2
            );
        }
    }