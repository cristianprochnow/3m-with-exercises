<?php

    namespace MakeItWithExercises;

    class KiloToMass {
        private const EARTH_GRAVITY = 9.81;
        private const MOON_GRAVITY = 1.635;
        private const MARS_GRAVITY = 3.71;

        public static function convertToMars(float $weight): float {
            if (empty($weight)) return 0.0;

            return $weight * (self::EARTH_GRAVITY / self::MARS_GRAVITY);
        }

        public static function convertToMoon(float $weight): float {
            if (empty($weight)) return 0.0;

            return $weight * (self::EARTH_GRAVITY / self::MOON_GRAVITY);
        }
    }