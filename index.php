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
<body>
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
    <div class="jumbotron"></div>
    <div class="col-9">
        <div class="c">
            <div class="very-small-title">Experience a Rolex</div>
            <div class="large-title">Rolex watches</div>
            <p style="margin-bottom:30px;" class="description">Main Paragraph: Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste enim voluptate rerum quaerat tenetur quos placeat inventore et architecto illum nobis accusamus consequatur at cumque, commodi animi fugit sed vitae. Praesentium voluptatibus assumenda nam eligendi dolorem, nesciunt officia harum sed quod error reprehenderit illum fuga quasi aliquid est, nulla asperiores nihil incidunt sapiente repellendus! Modi nulla inventore illo impedit a laudantium sequi, illum, eos magni cum placeat consequuntur iusto animi suscipit praesentium. Expedita porro laudantium fuga ad itaque ullam animi ex magnam provident in, aliquam cumque voluptatum beatae inventore officiis, impedit blanditiis? Corporis, saepe. Maiores ad perferendis odit iusto repellendus?
            </p>
            <button style="margin:auto;" class="button">Button Label</button>
        </div>
    </div>
    <div style="display: flex; flex-wrap: wrap;">
        <?php
            if(isset($_GET["pid"])) $sql = "SELECT * FROM products where model_number != 0 AND pid = ${_GET['pid']}"; 
            else $sql = "SELECT * FROM products where model_number != 0";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()):?>
                <div class="card" style="margin:15px 0px;">
                <a style="color:black; text-decoration:none;" href="details.php?id=<?= $row['id'] ?>">
                    <img src="assets/Product Images/<?= $row['model_number'] ?>.png"/>
                    <div class="small-title center"><?= $row["small_title"] ?></div>
                    <div class="large-title center"><?= $row["large_title"] ?></div>
                </a>
                </div>
        <?php endwhile; ?>
        <?php $conn->close(); ?>
    </div>
    
    <script src="js/index.php.js"></script>
</body>
</html>