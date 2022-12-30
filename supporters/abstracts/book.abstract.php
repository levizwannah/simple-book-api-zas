<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/



use \Common\DbModelInterface;
use \Common\FieldToPropertyTrait;
use Common\PermanenceTrait;
use Common\RefreshTrait;

#uns#


abstract class AbstractBook  implements DbModelInterface {

    public $name;
    public $serialNumber;
    public $createdAt;
    public $updatedAt;
    public $id;

    // table configs
    protected $table = "book";
    protected $idColumn = "book_id"; 

    // use traits
    use FieldToPropertyTrait;
    use PermanenceTrait;
    use RefreshTrait;
    #ut#

    public function __construct($id = 0){
        if(empty($id)) return;

        $this->id($id);
        $this->load($id);
    }

	abstract public function persist();
    abstract public function load($id);
}

?>