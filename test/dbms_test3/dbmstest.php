<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/7
 * Time: 21:11
 */
$arrInsert = insertContent("123.txt", "abcdef", 3, 4);
unlink("123.txt");
foreach ($arrInsert as $value) {
    file_put_contents("123.txt", $value, FILE_APPEND);
}
function insertContent($source, $s, $iLine, $index)
{
    $file_handle = fopen($source, "r");
    $i = 0;
    $arr = array();
    while (!feof($file_handle)) {
        $line = fgets($file_handle);
        ++$i;
        if ($i == $iLine) {
            if ($index == strlen($line) - 1)
                $arr[] = substr($line, 0, strlen($line) - 1) . $s . "n";
            else
                $arr[] = substr($line, 0, $index) . $s . substr($line, $index);
        } else {
            $arr[] = $line;
        }
    }
    fclose($file_handle);
    return $arr;
}

?>
