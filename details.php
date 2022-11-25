<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="css/framework.css" rel="stylesheet"/>
    <link href="css/fontawsome.min.css" rel="stylesheet"  type='text/css'>
    <?php
        $conn = new mysqli("localhost", "root", "", "programmer1_maindb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
</head>
<body style="overflow-x: hidden;">
    <div class="container" onclick="toggleBurger(this)">
        Menu <i class="fa fa-angle-down"></i> 
    </div>
    <nav>
        <div class="col-9">
            <div class="logo">
                <a href="/index.php">
                    <img src="assets/assets_landscape/official-retailer-plaque-en.png"/>
                </a>
            </div>
            <div class="nav">
                <ul>
                    <li class="button-label"><a href="/index.php?pid=4">Date Just</a></li>
                    <li class="button-label"><a href="/index.php?pid=5">Date Just Pearl</a></li>
                    <li class="button-label"><a href="/index.php?pid=6">Day-Date</a></li>
                    <li class="button-label"><a href="/index.php">All</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="display:flex;width:100vw;">
        <?php
            $sql = "SELECT * FROM products where id = ${_GET['id']}";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()):?>
                    <div style="width:50vw; padding-left:10vw; padding-right:10vw; box-sizing:border-box; display:inline-block;">
                        <p class="section-title">Type</p>
                        <p class="description mb-20"><?= $row['type'] ?></p>
                        <p class="section-title">Model Number</p>
                        <p class="description mb-20"><?= $row['model_number'] ?></p>
                        <p class="section-title">Model Case</p>
                        <p class="description mb-20"><?= $row['model_case'] ?></p>
                        <p class="section-title">Water Resistance</p>
                        <p class="description mb-20"><?= $row['water_resistance'] ?></p>
                        <p class="section-title">Movement</p>
                        <p class="description mb-20"><?= $row['movement'] ?></p>
                        <p class="section-title">Caliber</p>
                        <p class="description mb-20"><?= $row['caliber'] ?></p>
                        <p class="section-title">Power Reserver</p>
                        <p class="description mb-20"><?= $row['power_reserve'] ?></p>
                        <p class="section-title">Bracelet</p>
                        <p class="description mb-20"><?= $row['bracelet'] ?></p>
                        <p class="section-title">Dial</p>
                        <p class="description mb-20"><?= $row['dial'] ?></p>
                        <p class="section-title">Large Title</p>
                        <p class="description mb-20"><?= $row['large_title'] ?></p>
                        <p class="section-title">Small Title</p>
                        <p class="description mb-20"><?= $row['small_title'] ?></p>
                        <p class="section-title">Description</p>
                        <p class="description mb-20"><?= $row['description'] ?></p>
                        <p class="section-title">Price</p>
                        <p class="description mb-20"><?= $row['price'] ?></p>
                    </div>
                    <div style="width:50vw;display:inline-block">
                        <img style="width:100%;" src="assets/Product Images/<?= $row['model_number'] ?>.png"/>
                    </div>
        <?php endwhile; ?>
        <?php $conn->close(); ?>
    </div>
    
    <script src="js/index.js"></script>
</body>
</html>