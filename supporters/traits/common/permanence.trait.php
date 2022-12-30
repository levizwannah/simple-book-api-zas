<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Common;

use Closure;
use DbManager;

#uns#


trait PermanenceTrait {
    #ut#
    public function delete(callable $deletable = null, ...$args){
        if(!is_callable($deletable)){
            $deletable = function(){return true;};
        }
        if(!call_user_func($deletable, ...$args)) return false;

        $conn = DbManager::connect();
        $stmt = $conn->prepare("DELETE FROM $this->table where $this->idColumn = ?");
        return $stmt->execute([$this->id]);
    }

    public function visibility(int $visibility = 0){
        $conn = DbManager::connect();
        $stmt = $conn->prepare("UPDATE $this->table set {$this->table}_enabled = $visibility where $this->idColumn = ?");
        return $stmt->execute([$this->id]);
    }

    public function enable(){
        return $this->visibility(1);
    }

    public function disable(){
        return $this->visibility(0);
    }
}

?>