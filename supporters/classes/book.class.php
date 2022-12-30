<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/




use \Common\PermanenceTrait;
#uns#


class Book extends AbstractBook  {

	public $author;
	public $pageCount;

    // use traits
	#ut#

    public function __construct($id = 0){
		parent::__construct($id);
    }

	/**
	 * Save the book
	 * @return bool
	 */
	public function persist() {
		$sql = "INSERT INTO $this->table ($this->idColumn, book_name, book_serialNumber, book_author, book_pageCount) values (?, ?, ?, ?, ?) on duplicate key update book_name = ?, book_serialNumber = ?, book_author = ?, book_pageCount = ?";

		$conn = DbManager::connect();
		$stmt = $conn->prepare($sql);

		$values = [$this->name, $this->serialNumber, $this->author, $this->pageCount];
		$stmt->bind_param("isssisssi", $this->id, ...$values, ...$values);

		$stmt->execute() or throw new Exception("Unable to save book");

		empty($this->id) && $this->id($conn->insert_id);

		$this->refresh();

		return true;
	}

	/**
	 * Loads a book from the database
	 * @param mixed $id
	 * 
	 */
	public function load($id) {
		$conn = DbManager::connect();
		$bookInfo = $conn->query("SELECT * from $this->table where $this->idColumn = $id");

		$bookInfo->num_rows > 0 or throw new Exception("Book Not Found");

		$bookInfo = $bookInfo->fetch_assoc();

		foreach($bookInfo as $key => $value){
			$property = preg_split("/_/", $key)[1];
			$this->$property($value);
		}
	}

	/**
	 * Get all books from the database
	 */
	public function all(){
		$conn = DbManager::connect();
		$stmt = $conn->prepare("SELECT * from $this->table");

		$stmt->execute() or throw new Exception("Couldn't fetch all books");

		$books = $stmt->get_result();
		$books = $books->fetch_all(MYSQLI_ASSOC);

		return $books;
	}
}

?>