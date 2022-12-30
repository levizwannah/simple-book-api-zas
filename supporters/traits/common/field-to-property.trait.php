<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Common;

use BadMethodCallException;

#uns#


trait FieldToPropertyTrait {
    #ut#
    public function __call($name, $arguments){
        
        property_exists($this, $name) || throw new BadMethodCallException("$name is not found");    

        if(empty($arguments)) return $this->$name;

        $this->$name = $arguments[0];

        return $this;
    }
}

?>