<?php

    use MakeItWithExercises\KiloToMass;

    describe('[exercise #4] should convert kilos', function () {
        it('may return zero to moon', function () {
            expect(KiloToMass::convertToMoon(0))->toBe((float) 0);
        });

        it('may convert kilos to lunar mass', function () {
            expect(KiloToMass::convertToMoon(6))->toBe((float) 1);
        });

        it('may return zero to mars', function () {
            expect(KiloToMass::convertToMars(0))->toBe((float) 0);
        });

        it ('may convert kilos to mars mass', function () {
            expect(KiloToMass::convertToMars(1))->toBe(2.64);
        });
    });