<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
if (isset($_POST['generate'])) {
    $uppr_case = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
    $lower_case = "abcdefghijklmnopqrstuwxyz";
    $numbers + "123456789";
    $special_chars = "&#*@€";

    $generated_upper_case = substr(str_shuffle($uppr_case), 0, 2);
    $generated_lower_case = substr(str_shuffle($lower_case), 0, 2);
    $generated_numbers = substr(str_shuffle($numbers), 0, 2);
    $generated_special_chars = substr(str_shuffle($special_chars), 0, 2);

    $mixed = "$generated_upper_case$generated_lower_case$generated_numbers$generated_special_chars";

    $generated_mixed = substr(str_shuffle($mixed), 2, 8);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    * {
        background-color: cyan;
    }

    .genr-form {
        display: flex;
        justify-content: center;
        border: 2px solid black;
        margin-top: 20%;
    }
    </style>
    <div class="genr-form">
        <form action="index.php" method="POST">
            <input type="submit" name="generate" value="Generate">
            <br>

            <?php echo '<h3>' . $mixed . '</h3>' ?>
        </form>
    </div>
</body>

</html>