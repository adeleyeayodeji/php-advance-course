<?php

namespace Other\Code\NewArea\Data;

class Table
{
    public $title2 = "";
    public $numRows2 = 0;
    public function message()
    {
        echo "<p>Table 2 '{$this->title2}' has {$this->numRows2} rows.</p>";
    }
}
