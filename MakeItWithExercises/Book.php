<?php

    namespace MakeItWithExercises;

    class Book {
        public function __construct(
            public string $title,
            public string $description,
            public string $author,
            public int $year
        ) {}
    }