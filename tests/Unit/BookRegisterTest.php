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
            $bookRegister = new BookRegister();

            $bookRegister->add($book);

            $books = $bookRegister->list();
            $createdBook = $books[0];

            expect($createdBook->title)->toBe($book->title);
        });

        it('may throw exception if book already exists', function () use ($book) {
            $bookRegister = new BookRegister();

            $bookRegister->add($book);
            $bookRegister->add($book);
        })->throws(Exception::class, 'Book already exists');

        it('may list books', function () use ($book) {
            $bookRegister = new BookRegister();

            $bookRegister->add(new Book(
                title: 'Interstellar',
                description: 'A book from a movie',
                author: 'Christopher Nolan',
                year: 2014
            ));
            $bookRegister->add(new Book(
                title: 'Interstellar 2',
                description: 'A book from a movie',
                author: 'Christopher Nolan',
                year: 2014
            ));
            $bookRegister->add(new Book(
                title: 'Interstellar 3',
                description: 'A book from a movie',
                author: 'Christopher Nolan',
                year: 2014
            ));

            expect(count($bookRegister->list()))->toBe(3);
        });
    });