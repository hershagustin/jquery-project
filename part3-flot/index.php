
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Flot Chart - Disease Cases</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	
	<script language="javascript" type="text/javascript" src="jquery.js"></script>
	<script language="javascript" type="text/javascript" src="flot.js"></script>
	<script type="text/javascript">

	$(function() {

		var datasets = {
            <?php include "popdata.php"; ?>
		};

		// hard-code color indices to prevent them from shifting as
		// countries are turned on/off

		var i = 0;
		$.each(datasets, function(key, val) {
			val.color = i;
			++i;
		});

		// insert checkboxes 
		var choiceContainer = $("#choices");
		$.each(datasets, function(key, val) {
			choiceContainer.append("<br/><input type='checkbox' name='" + key +
				"' checked='checked' id='id" + key + "'></input>" +
				"<label for='id" + key + "'>"
				+ val.label + "</label>");
		});

		choiceContainer.find("input").click(plotAccordingToChoices);

		function plotAccordingToChoices() {

			var data = [];

			choiceContainer.find("input:checked").each(function () {
				var key = $(this).attr("name");
				if (key && datasets[key]) {
					data.push(datasets[key]);
				}
			});

			if (data.length > 0) {
				$.plot("#placeholder", data, {
					yaxis: {
						min: 0
					},
					xaxis: {
						tickDecimals: 0
					}
				});
			}
		}

		plotAccordingToChoices();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
</head>
<body>

	<div id="header">
		<h2>Disease Cases</h2>
	</div>

	<div id="content">

		<div class="demo-container">
			<div id="placeholder" class="demo-placeholder" style="float:left; width:675px;"></div>
			<p id="choices" style="float:right; width:135px;"></p>
		</div>
		<p>This dataset shows the number of cases for the top 5 diseases in the world from 2020 to 2025.</p>
		<p>It includes diseases like COVID-19, Flu, Malaria, Tuberculosis, and Dengue Fever. The data helps us see how many people got sick each year and how the numbers changed over time.</p>

	</div>

</body>
</html>
