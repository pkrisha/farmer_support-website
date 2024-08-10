<?php
    require_once 'database.php';
    $WaterRequirement_mm = "";
    $Potassium_kg_ha = "";
    $Phosphorus_kg_ha = "";
    $Sodium_kg_ha = "";
    $pHLevel = "";

    if (isset($_POST['fetch'])) {
        $cropName = $_POST['cropName'];

        $cn = Database::connect();
        $sql = "SELECT * FROM cropRequirement WHERE cropName = ?";
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
<link rel="stylesheet" href="menu/css/bootstrap.css" />
<script type="text/javascript" src="menu/js/bootstrap.bundle.min.js"></script>
<link href="croprequirements.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    .auto-style7 {
        font-size: xx-large;
    }
</style>

</head>
<body>
<?php include("head.php"); ?>

<div style="width:80%;margin:0 auto">
    <p style="font-size:xx-large" class="auto-style6">Crop Requirements</p>
</div>

<form method="post" action="" name="form1">
    <table class="locmasttab1" style="width: 80%;margin:30px auto">
        <tr>
            <td style="width:25%">Crop Name</td>
            <td style="width:75%">
                <input type="text" class="input" name="cropName" required="required" />
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                <input class="button1" name="fetch" type="submit" value="Fetch Data" style="width: 149px" />
            </td>
        </tr>
    </table>
</form>

<?php if (isset($_POST['fetch']) && !empty($WaterRequirement_mm)): ?>
    <div style="width:80%;margin:0 auto">
        <table class="tab2" style="width: 80%;margin:30px auto">
            <tr>
                <td style="width:25%">Water Requirement (mm)</td>
                <td style="width:75%"><?php echo $WaterRequirement_mm; ?></td>
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
        </table>
    </div>
<?php endif; ?>

<?php include("footer.html"); ?>
</body>
</html>
