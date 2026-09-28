<?php
    echo "<pre>"; 

    echo "associative: ";
    $user = array('name' => 'testuser', 'age' => 20);
    var_dump($user);
    echo "<br>";

    echo("multidimentional :");
    $profile = array(
        'name' => 'John',
        'age' => 20,
        'language' => array('PHP', 'JS', 'HTML'),
        'hobby' => 'coding'
    );


    var_dump($profile);
?>