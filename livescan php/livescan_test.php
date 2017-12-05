<?php
// This is a db connection test that will make a connection and display the layouts.
// PSM working as of 112917

// Include FileMaker API
require_once ('FileMaker.php');

$fm = new FileMaker();
$fm->setProperty('database', 'livescan_psm');
#$fm->setProperty('hostspec', '********');
$fm->setProperty('username', 'data_entry');
$fm->setProperty('password', '**********');

// query the DB for the layouts and output the name 
$layouts = $fm->listLayouts();
// If an error is found, return a message and exit.
if (FileMaker::isError($layouts)) {
    printf("Error %s: %s\n", $layouts->getCode());
    "<br>";
    printf($layouts->getMessage());
    exit;
}

// Print out layout names
foreach ($layouts as $layout) {
    echo $layout . "<br>";
}

// List fields
// Get layout first
$layout = $fm->getLayout('Form View');
$fields = $layout->listFields();

// If an error is found, return a message and exit.
if (FileMaker::isError($fields)) {
    printf("Error %s: %s\n", $fields->getCode());
    "<br>";
    printf($fields->getMessage());
    exit;
}

// Print out layout names
foreach ($fields as $field) {
    //echo $field . "<br>";
    echo '<div>';
    echo '<form action="handleForm.php" method="post">';
    echo '<label for="' . $field . '">' . $field .':' . '</label>';
    echo '<input type="text" name="' . $field . '"' . 'value="">';
}
    echo '</form>';
    echo '</div>';
    echo '<input type="submit" value="submit">';

// output some HTML and PHP for form
?>

