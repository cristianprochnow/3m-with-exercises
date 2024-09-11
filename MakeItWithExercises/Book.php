<?php

    namespace MakeItWithExercises;

    class Book {
        public function __construct(
            public readonly string $title,
            public readonly string $description,
            public readonly string $author,
            public readonly int $year
        ) {}
    }