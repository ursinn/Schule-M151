<?php
/**
 * This is free and unencumbered software released into the public domain.
 *
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 *
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * For more information, please refer to <http://unlicense.org>
 */

if (isset($_POST['min'])) {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'schule');
    $res = mysqli_query($con, "SELECT * FROM `personen` WHERE `gehalt` BETWEEN '$min' AND '$max'");
    while ($data = mysqli_fetch_assoc($res)) {
        echo $data["name"] . ", "
            . $data["vorname"] . ", "
            . $data["personalnummer"] . ", "
            . $data["gehalt"] . ", "
            . $data["geburtstag"] . "<br>";
    }
    mysqli_close($con);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="gehalt.php" method="post">
    <label for="min">Min</label>
    <input type="number" name="min" id="min">
    <br>
    <label for="max">Max</label>
    <input type="number" name="max" id="max">
    <br>
    <input type="submit">
</form>
</body>
</html>
