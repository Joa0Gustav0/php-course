<?php

//scandir() 
#Lists a directory 📁
echo "<pre>";
print_r(scandir("../"));
echo "</pre>";

//is_dir()
#Verify if something is a directory: boolean 🔍
var_dump(is_dir("../dates"));

//is_file() 
#Verify if something is a file: boolean 🔍
var_dump(is_file(scandir("./")[2]));

//file_exists()
#Verify if a file is existent or not 🔍
var_dump(file_exists("./index.php"));

echo "<br/>";
//filesize()
#Returns the file size according to file's characters length

$filePath = "./foo.txt";

if (file_exists($filePath)) {
  //file_put_contents()
  #Adds new content to the file
  /* file_put_contents($filePath, 
  //file_get_contents()
  #Gets the content to the file
  file_get_contents($filePath)."🐘") */;
  
  $fileSize = filesize($filePath);

  echo "The file '{$filePath}' exists!<br/>";
  echo "The file's size is {$fileSize}";
} else {
  echo "File not found.";
}

echo "<br/><br/>";
//fopen()
#Opens file in an specific opening mode and returns

//fgets()
#Returns each file's line
$file = fopen($filePath, "r");
while ($fileLine = fgets($file)) {
  echo $fileLine."🐘<br/>";
}

fclose($file);

echo "<br/><br/>";
//fgetcsv()
#Returns each file's line, into an array, as a csv file
$file = fopen($filePath, "r");
while ($fileLine = fgetcsv($file)) {
  echo "{$fileLine[0]} ";
} 

//unlink()
#Deletes a file 💣´
#unlink("./foo.txt");

//copy() 
#Copy the file content to another file 🧬
#copy("./foo.txt", "./[FILE_NAME]");

//rename()
#renames an existent file ✍
#rename("./foo.txt", "[NEW_FILE_NAME]");


