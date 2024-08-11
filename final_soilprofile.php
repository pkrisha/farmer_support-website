

<?php
include "dash.html";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Database connection setup
require_once 'database.php';

$WaterRequirement_mm = "";
$Potassium_kg_ha = "";
$Phosphorus_kg_ha = "";
$Sodium_kg_ha = "";
$pHLevel = "";

if (isset($_POST['fetch'])) {
    $cropName = $_POST['cropName'];

    $cn = Database::connect();
    $sql = "SELECT * FROM soil.crop_req WHERE Crop = ?";
    $stmt = $cn->prepare($sql);

    $stmt->execute([$cropName]);

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $WaterRequirement_mm = $row['WaterRequirement_mm'];
        $Potassium_kg_ha = $row['Potassium_kg_ha'];
        $Phosphorus_kg_ha = $row['Phosphorus_kg_ha'];
        $Sodium_kg_ha = $row['Sodium_kg_ha'];
        $pHLevel = $row['pHLevel'];
    } else {
        echo "No data found for the selected crop.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crop Requirements</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="croprequirements.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .header {
            text-align: center;
            margin: 20px 0;
        }

        .header p {
            font-size: 2em;
            color: #333;
        }

        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container select,
        .form-container button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .results-table {
            max-width: 800px;
            margin: 20px auto;
            margin-top: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #000; /* Black border for the table */
            border-collapse: collapse;
        }

        .results-table th,
        .results-table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #000; /* Black border for cells */
        }

        .results-table th {
            background-color: #f1f1f1;
        }

        .results-table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .results-table tbody tr:nth-child(even) {
            background-color: #e9e9e9;
        }
    </style>
</head>

<body>

    <div class="header">
        <p>Crop Requirements</p>
    </div>

    <div class="form-container">
        <form method="post" action="aa.php" name="form1">
            <div class="form-group">
                <label for="cropName">Crop Name</label>
                <select name="cropName" id="cropName" class="form-control">
                    <option value=""></option>
                    <option value="Wheat" <?php if (isset($cropName) && $cropName == 'Wheat') echo 'selected'; ?>>Wheat</option>
                    <option value="Rice" <?php if (isset($cropName) && $cropName == 'Rice') echo 'selected'; ?>>Rice</option>
                    <option value="Corn" <?php if (isset($cropName) && $cropName == 'Corn') echo 'selected'; ?>>Corn</option>
                    <option value="Soybean" <?php if (isset($cropName) && $cropName == 'Soybean') echo 'selected'; ?>>Soybean</option>
                    <option value="Barley" <?php if (isset($cropName) && $cropName == 'Barley') echo 'selected'; ?>>Barley</option>
                    <option value="Sunflower" <?php if (isset($cropName) && $cropName == 'Sunflower') echo 'selected'; ?>>Sunflower</option>
                    <option value="Potato" <?php if (isset($cropName) && $cropName == 'Potato') echo 'selected'; ?>>Potato</option>
                    <option value="Tomato" <?php if (isset($cropName) && $cropName == 'Tomato') echo 'selected'; ?>>Tomato</option>
                    <option value="Cotton" <?php if (isset($cropName) && $cropName == 'Cotton') echo 'selected'; ?>>Cotton</option>
                    <option value="Sugarcane" <?php if (isset($cropName) && $cropName == 'Sugarcane') echo 'selected'; ?>>Sugarcane</option>
                    <option value="Peanuts" <?php if (isset($cropName) && $cropName == 'Peanuts') echo 'selected'; ?>>Peanuts</option>
                    <option value="Alfalfa" <?php if (isset($cropName) && $cropName == 'Alfalfa') echo 'selected'; ?>>Alfalfa</option>
                    <option value="Lettuce" <?php if (isset($cropName) && $cropName == 'Lettuce') echo 'selected'; ?>>Lettuce</option>
                    <option value="Carrot" <?php if (isset($cropName) && $cropName == 'Carrot') echo 'selected'; ?>>Carrot</option>
                    <option value="Grapes" <?php if (isset($cropName) && $cropName == 'Grapes') echo 'selected'; ?>>Grapes</option>
                    <option value="Apple" <?php if (isset($cropName) && $cropName == 'Apple') echo 'selected'; ?>>Apple</option>
                    <option value="Banana" <?php if (isset($cropName) && $cropName == 'Banana') echo 'selected'; ?>>Banana</option>
                    <option value="Cabbage" <?php if (isset($cropName) && $cropName == 'Cabbage') echo 'selected'; ?>>Cabbage</option>
                    <option value="Onion" <?php if (isset($cropName) && $cropName == 'Onion') echo 'selected'; ?>>Onion</option>
                    <option value="Peas" <?php if (isset($cropName) && $cropName == 'Peas') echo 'selected'; ?>>Peas</option>
                    <option value="Strawberries" <?php if (isset($cropName) && $cropName == 'Strawberries') echo 'selected'; ?>>Strawberries</option>
                    <option value="Broccoli" <?php if (isset($cropName) && $cropName == 'Broccoli') echo 'selected'; ?>>Broccoli</option>
                    <option value="Cauliflower" <?php if (isset($cropName) && $cropName == 'Cauliflower') echo 'selected'; ?>>Cauliflower</option>
                    <option value="Spinach" <?php if (isset($cropName) && $cropName == 'Spinach') echo 'selected'; ?>>Spinach</option>
                    <option value="Garlic" <?php if (isset($cropName) && $cropName == 'Garlic') echo 'selected'; ?>>Garlic</option>
                    <option value="Oats" <?php if (isset($cropName) && $cropName == 'Oats') echo 'selected'; ?>>Oats</option>
                    <option value="Lentils" <?php if (isset($cropName) && $cropName == 'Lentils') echo 'selected'; ?>>Lentils</option>
                    <option value="Chickpeas" <?php if (isset($cropName) && $cropName == 'Chickpeas') echo 'selected'; ?>>Chickpeas</option>
                    <option value="Pumpkin" <?php if (isset($cropName) && $cropName == 'Pumpkin') echo 'selected'; ?>>Pumpkin</option>
                    <option value="Eggplant" <?php if (isset($cropName) && $cropName == 'Eggplant') echo 'selected'; ?>>Eggplant</option>
                    <option value="Cucumbers" <?php if (isset($cropName) && $cropName == 'Cucumbers') echo 'selected'; ?>>Cucumbers</option>
                    <option value="Melon" <?php if (isset($cropName) && $cropName == 'Melon') echo 'selected'; ?>>Melon</option>
                    <option value="Watermelon" <?php if (isset($cropName) && $cropName == 'Watermelon') echo 'selected'; ?>>Watermelon</option>
                    <option value="Mango" <?php if (isset($cropName) && $cropName == 'Mango') echo 'selected'; ?>>Mango</option>
                    <option value="Pineapple" <?php if (isset($cropName) && $cropName == 'Pineapple') echo 'selected'; ?>>Pineapple</option>
                    <option value="Avocado" <?php if (isset($cropName) && $cropName == 'Avocado') echo 'selected'; ?>>Avocado</option>
                    <option value="Coffee" <?php if (isset($cropName) && $cropName == 'Coffee') echo 'selected'; ?>>Coffee</option>
                    <option value="Tea" <?php if (isset($cropName) && $cropName == 'Tea') echo 'selected'; ?>>Tea</option>
                </select>
            </div>
            <button class="btn btn-primary" name="fetch" type="submit" value="FetchData">Submit</button>
        </form>
    </div>

    <?php if (isset($_POST['fetch']) && !empty($WaterRequirement_mm)) { ?>
        <div class="results-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Water Requirement (mm)</td>
                        <td><?php echo $WaterRequirement_mm; ?></td>
                    </tr>
                    <tr>
                        <td>Potassium (kg/ha)</td>
                        <td><?php echo $Potassium_kg_ha; ?></td>
                    </tr>
                    <tr>
                        <td>Phosphorus (kg/ha)</td>
                        <td><?php echo $Phosphorus_kg_ha; ?></td>
                    </tr>
                    <tr>
                        <td>Sodium (kg/ha)</td>
                        <td><?php echo $Sodium_kg_ha; ?></td>
                    </tr>
                    <tr>
                        <td>pH Level</td>
                        <td><?php echo $pHLevel; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
