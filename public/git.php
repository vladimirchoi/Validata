<?php 

echo "<pre>";

echo "git fetch --all\n";
echo `git fetch --all 2>&1`; 

echo "\n\ngit reset --hard\n"; 
echo `git reset --hard  2>&1`; 

echo "\n\ngit pull \n";
echo `git pull 2>&1`;

echo "\n\nnpm update \n";
echo `npm update 2>&1`;

echo "\n\nbower update \n";
echo `bower update 2>&1`;

?>
