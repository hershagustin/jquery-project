<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Jquery Multi-Select-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <title>Jquery Multi-Select Script</title>

</head>

<body>
    <h2>Select your Web or Media Skills:</h2>
    <form method="post" action="">
        <select name="skills[]" multiple class="multi-select">
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
        <option value="React">React</option>
        <option value="SQL">SQL</option>
        <option value="Bootstrap">Bootstrap</option>
        <option value="Tailwind">Tailwind</option>
        <option value="Figma">Figma</option>
        <option value="Wordpress">Wordpress</option>
        <option value="Photoshop">Photoshop</option>
        <option value="Illustrator">Illustrator</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        $(".multi-select").chosen({
            width: "1000px",
            placeholder_text_multiple: "Select Skills:"
        });
    </script>

    <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['skills'])) {
                echo "<h3>Selected Skills:</h3><ul>";
                foreach ($_POST['skills'] as $skill) {
                    echo "<li>" . htmlspecialchars($skill) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p><strong>No skill/s selected.</strong></p>";
            }
        }
    ?>
</body>
</html>

<!-- src: https://cdnjs.com/libraries/chosen -->