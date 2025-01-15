<?php 

abstract class Book {
    protected $title;
    protected $author;
    protected $isBorrowed = false;


    public function __construct( $title, $author )
    {
        $this->title  = $title;
        $this->author = $author;        
    }

    public function isAvailable () {
        return !$this->isBorrowed;
    }

    public function getTitle () {
        return $this->title;
    }

    abstract public function borrow ( $member );
    abstract public function returnBook ();

}

class PrintedBook extends Book {
    public function borrow ( $member ) {
        if ( $this->isBorrowed ) {
            return "{$this->title} is already borrowed";
        }
        $this->isBorrowed = true;
         return "{$member->getName()} has borrowed '{$this->title}'. Due in 14 days";
    }

    public function returnBook()
    {
        $this->isBorrowed = false;
        return "The book '{$this->title}' has been returned";
    }

}

class EBook extends Book {
    public function borrow ( $member ) {
        if ( $this->isBorrowed ) {
            return "{$this->title} is already borrowed";
        }
        $this->isBorrowed = true;
        return "{$member->getName()} has borrowed the e-book '{$this->title}' Due in 7 days";
    }

    public function returnBook()
    {
        $this->isBorrowed = false;
        return "This book '{$this->title}' has been returned";
    }
}

class Member {
    private $name;
    private $email;

    public function __construct( $name, $email )
    {
        $this->name = $name;
        $this->email= $email;
    }

    public function getName () {
        return $this->name;
    }
}


class Library {
    private $books = [];

    public function addBook ( Book $book ) {
        $this->books[] = $book;
    }

    public function borrowBook ( Member $member, $title ) {
        foreach ( $this->books as $book ) {
            if ( $book->isAvailable() && $book->getTitle() === $title ) {
                return $book->borrow( $member );
            }
        }
        return "The book '{$title}' is not available";
    }

    public function returnBook ( $title ) {
        foreach ( $this->books as $book ) {
            if ( !$book->isAvailable() && $book->title === $title ) {
                return $book->returnBook();
            }
        }

        return "The book '{$title}' is not currently borrowed";
    }

}


$library = new Library();
$library->addBook( new PrintedBook('1984', 'George Orwell'));

$member = new Member('Alice', 'alice@example.com');
echo $library->borrowBook( $member, '1984');
