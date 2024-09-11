<?php

use MakeItWithExercises\Book;
use MakeItWithExercises\BookRegister;
use MakeItWithExercises\KiloToMass;

    describe('[exercise #4] should register books', function () {
        $book = new Book(
            title: 'Interstellar',
            description: 'A book from a movie',
            author: 'Christopher Nolan',
            year: 2014
        );

        it('may register a new book', function () use ($book) {
            $bookRegister = new BookRegister();
            
            $bookRegister->add($book);
            
            expect(count($bookRegister->list()))->toBe(1);
        });

        it('may register a new book correctly', function () use ($book) {
            
        });

        it('may throw exception if book already exists', function () use ($book) {
            
        });
    });