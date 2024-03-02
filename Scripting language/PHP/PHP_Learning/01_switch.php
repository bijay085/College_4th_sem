<?php
$age = 20;

switch ($age) {
    case '12':
        echo "You are under age.";
        break;
    case '20':
        echo "You can drink tea.";
        break;
    case '25':
        echo "You can drink anything.";
        break;
    
    default:
        echo "Enter valid age";
        break;
}

?>