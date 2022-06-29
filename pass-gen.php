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
<form action="index.php" method="POST">
    <input type="submit" name="generate" value="Generate">
    <br>

    <?php echo '<h3>' . $mixed . '</h3>' ?>
</form>