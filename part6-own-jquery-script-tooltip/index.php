<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <!-- jQuery UI for tooltip -->
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/styles.css">

    <title>Own JQuery Script Tooltip</title>

    <script>
    $( function() {
        $( document ).tooltip();
    } );
    </script>  
</head>

<body>
    <div class="succulent-section">
        <h2 title="Succulents store water so they can survive dry spells — clever little plants!">Succulent Care Guide</h2>

        <p>Succulents are adorable little water-hoarders that make plant parenting super easy! Swing by <a href="#" title="Visit our blog to learn more about succulent types and how to care for them."> our succulent blog </a> for fun tips, care tricks, and all the inspiration you need.</p>

        <p>Most succulents love bright light. Be sure to place them near a <a href="#" title="These babies love the spotlight — 6 hours of indirect fame daily!">sunny window</a> and rotate them regularly.</p>

        <p>Below are a few popular succulent species:</p>

        <div>
            <img src="img/aloe-vera.jpg" 
                alt="Aloe Vera" title="Aloe Vera: Tough and handy, with healing powers.">
            <img src="img/echeveria.jpg" 
                alt="Echeveria" title="Echeveria: Looks fancy but easy to care for.">
            <img src="img/jade-plant.jpg" 
                alt="Jade Plant" title="Jade Plant: A lucky plant that’s hard to kill.">
        </div>

        <form>
            <p>Feel free to submit your own plant care tips!</p>

            <label for="type" title="Tell us what kind of succulent you have.">Succulent Type:</label>
            <input type="text" id="type" name="type" title="Example: Aloe Vera, Jade Plant, or your own favorite.">

            <label for="sunlight" title="How much sunlight does your plant get each day?">Sunlight Exposure:</label>
            <input type="text" id="sunlight" name="sunlight" title="Example: 6 hours, bright but not harsh sun.">

            <label for="watering" title="How often do you water your plant?">Watering Frequency:</label>
            <input type="text" id="watering" name="watering" title="Example: Once a week or when the soil feels dry.">

            <button type="submit">Submit</button>
        </form>

        <div class="tooltip-note">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
            </svg>
            <p>Hover over text, labels, and images to learn more!</p>
        </div>
    </div>
</body>

</html>

<!-- src: https://jqueryui.com/tooltip/ -->
<!-- imgs from unsplash -->