<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Common;

#uns#


trait RefreshTrait {
    #ut#
    public function refresh(){
        $this->load($this->id);
    }
}

?>