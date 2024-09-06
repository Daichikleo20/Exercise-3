<?php

echo file_get_contents("test.txt");
echo file_put_contents("test.txt","Hello World. Testing!");
echo file_exists("webdictionary.txt");
print_r(file("test.txt"));


?>