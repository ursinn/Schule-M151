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

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $vorname = $_POST['vorname'];
    $strasse = $_POST['strasse'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'kunden');
    mysqli_query($con, "INSERT INTO `kunde`(`name`, `vorname`, `strasse`, `plz`, `ort`) VALUES ('$name','$vorname','$strasse','$plz','$ort')");
    mysqli_close($con);
    echo "Inserted";
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
<form action="kundneu.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="vorname">vorname</label>
    <input type="text" name="vorname" id="vorname">
    <br>
    <label for="strasse">Strasse</label>
    <input type="text" name="strasse" id="strasse">
    <br>
    <label for="plz">PLZ</label>
    <input type="text" name="plz" id="plz">
    <br>
    <label for="ort">Ort</label>
    <input type="text" name="ort" id="ort">
    <br>
    <input type="submit">
</form>
</body>
</html>
