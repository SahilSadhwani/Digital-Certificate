<?php

require_once("Block.php");

$var = Block::isValid(2,"Sanjay Janyani", "CMPN", "1st", "Dance", "sanjayjanyani27@gmail.com", "431eaa6202d3b7861db4e24ee76703bd2d5afd208e9fa67d538d26d3fa4d010d", "newfile");

$var2 = new Block(2,"Sanjay Janyani", "CMPN", "1st", "Dance", "sanjayjanyani27@gmail.com", "431eaa6202d3b7861db4e24ee76703bd2d5afd208e9fa67d538d26d3fa4d010d");
                  
echo "<br>".$var2->hash."<br>";



?>