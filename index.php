 <?php
$options = array(
    'option1' => array(2, 3),
    'option2' => array(5, 7),
    'option3' => array(10, 15)
);

$selectedOption = isset($_POST['option']) ? $_POST['option'] : '';
$value1 = isset($_POST['value1']) ? $_POST['value1'] : '';
$value2 = isset($_POST['value2']) ? $_POST['value2'] : '';

$result = '';
if (!empty($selectedOption) && isset($options[$selectedOption])) {
    if (isset($_POST['submit1'])) {
        $values = $options[$selectedOption];
        $value1 = $values[0];
        $value2 = $values[1];
    } elseif (isset($_POST['submit2'])) {
        $result = $value1 + $value2;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Textbox and Radio Example</title>
</head>
<body>
    <form method="post" action="">
        <input type="radio" name="option" value="option1" <?php if ($selectedOption === 'option1') echo 'checked'; ?>> Option 1
        <input type="radio" name="option" value="option2" <?php if ($selectedOption === 'option2') echo 'checked'; ?>> Option 2
        <input type="radio" name="option" value="option3" <?php if ($selectedOption === 'option3') echo 'checked'; ?>> Option 3
        <br><br>
        Value 1: <input type="text" name="value1" value="<?php echo $value1; ?>"><br>
        Value 2: <input type="text" name="value2" value="<?php echo $value2; ?>"><br>
        <br>
        <input type="submit" name="submit1" value="Select Option">
        <input type="submit" name="submit2" value="Add and Display">
    </form>

    <?php if (!empty($result)) { ?>
        <p>Result: <?php echo $result; ?></p>
    <?php } ?>
</body>
</html>

