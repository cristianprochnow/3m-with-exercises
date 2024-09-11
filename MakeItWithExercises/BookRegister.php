<?php

    namespace MakeItWithExercises;

    use Exception;

    class BookRegister {
        /**
         * @var Book[]
         */
        private array $books = [];

        public function add(Book $newBook): void {
            foreach ($this->books as $book) {
                if ($book->title === $newBook->title) {
                    throw new Exception('Book already exists');
                }
            }

            $this->books[] = $newBook;
        }

        /**
         * @return Book[]
         */
        public function list(): array {
            return $this->books;
        }
    }