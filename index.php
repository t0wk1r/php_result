<?php


$mark = isset($_POST["num"]) ? $_POST["num"] : NULL;

function test()
{

    global $mark;

    if ($mark < 0 || $mark > 100) {
        return "Invalid number";
    } else if ($mark >= 80) {
        return "apni a+ paisen";
    } else if ($mark >= 70) {
        return "apni a paisen";
    } else if ($mark >= 60) {
        return "apni a- paisen";
    } else if ($mark >= 50) {
        return "apni b paisen";
    } else if ($mark >= 40) {
        return "apni c paisen";
    } else if ($mark >= 33) {
        return "apni D paisen";
    } else if ($mark > -1) {
        return "apni fail korsen";
    } else {
        return "please input number";
    }
}
$result = test();
?>

<form action="?" method="post">
    <input type="text" name="num"><br>
    <input type="submit">
</form>

<h1><?php echo $result ?></h1>
