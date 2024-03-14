<?php
//strpos
$mijnstring = 'dit is mijn string';
$vindmij   = 'vind mij';
$pos = strpos($mijnstring, $vindmij);

if ($pos === false) {
    echo "The string '$vindmij' was not found in the string '$mijnstring'";
} else {
    echo "The string '$vindmij' was found in the string '$mijnstring'";
    echo " and exists at position $pos";
}
?>



<?php
//strtoupper
$str = "dit is een string en hij is uppercase";
$str = strtoupper($str);
echo $str; 
?>



<?php
//file_exists
$filename = 'M3PROG_PROJECT/public/01/functions.php';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>


<?php echo "strtoupper" ?>
<?php echo "strpos" ?>
<?php echo "file_exists" ?>