<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<title>String Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .result {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #ccc;
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="result">
    <h2>PHP String Operations</h2>

    <?php
    $sentence = "the main body of a book";

    // Lowercase
    $lowercase = strtolower($sentence);

    // Uppercase
    $uppercase = strtoupper($sentence);

    // Replace "book" with "acolleg"
    $replaced = str_replace("book", "acolleg", $sentence);

    // Length of the sentence
    $length = strlen($sentence);

    // Check if 'm' exists and display it
    $char_m = strpos($sentence, 'm') !== false ? "Character 'm' is present." : "Character 'm' is not present.";

    // Display all results
    echo "<p><strong>Original sentence:</strong> $sentence</p>";
    echo "<p><strong>Lowercase:</strong> $lowercase</p>";
    echo "<p><strong>Uppercase:</strong> $uppercase</p>";
    echo "<p><strong>Replaced 'book' with 'acolleg':</strong> $replaced</p>";
    echo "<p><strong>Length of sentence:</strong> $length</p>";
    echo "<p><strong>Character check:</strong> $char_m</p>";
    ?>
</div>

</body>
</html>