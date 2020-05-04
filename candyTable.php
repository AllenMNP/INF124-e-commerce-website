<?php
require_once "db_connect.php";
try{
  $mysql = "
    CREATE TABLE Candies (

    Name VARCHAR(30) NOT NULL PRIMARY KEY,
    Price VARCHAR(30) NOT NULL,
    Image1 VARCHAR(30) NOT NULL,
    Image2 VARCHAR(30) NOT NULL,
    Image3 VARCHAR(30) NOT NULL,
    Description1 VARCHAR(300) NOT NULL,
    Description2 VARCHAR(300) NOT NULL,
    Description3 VARCHAR(300) NOT NULL
    )";
    if ($conn->query($mysql) === TRUE) {

    }
    else {

    }


    $sql = "INSERT IGNORE INTO Candies (Name, Price, Image1, Image2, Image3, Description1, Description2, Description3) VALUES
            ('Peanut Butter Cups', '$7.99', 'candyImages/PButter.jpg', 'candyImages/PButter2.jpg', 'candyImages/PButter3.jpg', '6 pack- 1.5 oz per cup', 'Made in-house. Creamy peanut butter filling. Crisp chocolate in every bite! Vegetarian and gluten-free.', 'Contains: peanut butter, maple syrup, powdered sugar, allspice, vanilla extract, semisweet chocolate, sea salt.'),
            ('Candy Canes', '$3.56', 'candyImages/CandyCanes.png', 'candyImages/candycanes2.jpg', 'candyImages/candycanes3.png','3 pack - 1.75 oz. size', 'Vegetarian, gluten-free and kosher. Jumbo 1.75 oz size', 'Manufactured in a facility that processes: egg, milk, mustard, peanuts, sesame, soy, sulfites, tree nuts and wheat'),
            ('Almond Joy', '$0.99', 'candyImages/AlmondJoy.png','candyImages/almondjoy2.jpg','candyImages/almondjoy3.jpg','1 pack - 1.61 oz. bar', 'Coconut filling and whole almonds covered in milk chocolate. Perfect for enjoying and sharing a sweet snack. Delicious on its own or incorporated into dessert recipes. A gluten-free and kosher candy bar.', 'Contains: milk, peanuts, soy, almonds, sugar'),
            ('Candy Corn Oreos', '$8.23', 'candyImages/CandyOreo.jpg','candyImages/candyoreos2.jpeg', 'candyImages/candyoreos3.jpg', '1 pack - 21 cookie ct.', 'Limited Edition fall seasonal Oreo cookies. 21 cookies per package. NET WT 10.5 OZ.','Contains: sugar, enriched flour, high fructose corn syrup'),
            ('Fruit Roll-Ups', '$25.97', 'candyImages/FRollup.jpg','candyImages/frollup2.jpg', 'candyImages/frollup3.jpg','72 pack - 2 flavors, strawberry and tropical tie-dye', 'Naturally flavored: fruit-flavored, gummy treats made with no artificial flavors for a delicious snack.', 'Contains: corn syrup, dried corn syrup, sugar, pear puree conentrate, palm oil'),
            ('Nerds', '$10.39', 'candyImages/nerds.png', 'candyImages/nerds2.png', 'candyImages/nerds3.jpg','36 pack - strawberry and grape flavors', 'Tiny, tangy, and crunchy candy. Grape candy is in one side of the box, and strawberry in the other side. Great for holidays and special occasions.', 'Contains: dexstrose, corn syrup, sugar, gelatin'),
            ('Swedish Fish', '$4.98', 'candyImages/sweedishFish.jpeg', 'candyImages/swedishfish2.jpg', 'candyImages/swedishfish3.jpg', '1 pack - 4 oz.', 'Classic fruity SWEDISH FISH flavor. Signature fish shapes in soft, chewy candies. Sealed bags keep this candy fresh.', 'Contains: sugar, corn syrup, modified corn starch, citric acid'),
            ('Reeses Pieces', '$6.99', 'candyImages/ReesesPieces.png', 'candyImages/rp2.jpg', 'candyImages/rp3.webp','1 pack - 4 oz.', 'Big peanut butter taste in a crunchy candy shell. Perfect for on-the-go snacking and sharing on movie night. Share bags of candy for parties, movies or everyday snacking.', 'Contains: sugar, peanuts, palm kernel, soybean oil, corn syrup, dextrose'),
            ('Skittles', '$29.20', 'candyImages/skittles.jpg', 'candyImages/skittles2.jpg', 'candyImages/skittles3.jpg','2 pack - 54 oz. resealable bag', 'These assorted fruit-flavored, bite-sized candies are one of the all-time candy greats. Two 54 oz. resealable bags of Skittle.', 'Contains: sugar, corn syrup, hydrogenated palm kernel oil, citric acid, tapioca dextrin'),
            ('Rice Krispies', '$9.49', 'candyImages/RKrispies.png', 'candyImages/rk2.jpg', 'candyImages/rk3.jpg','40 pack - .78 oz bars', 'Your family will enjoy the timeless taste of this toasted rice cereal that is deliciously fat-free! Crispy marshmallow squares.', 'Contains: rice, sugar, salt, malt flavor, corn syrup, fructose, vegetable oil, dextrose, gelatin')";
    if ($conn->query($sql) === TRUE) {

    }
    else {
        //echo "Error inserting " . $conn->error;
    }
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
    }
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
      <meta charset="utf-8">
      <title>Candy Shop</title>
      <link rel="stylesheet" href="main.css">
      <script src="candyTable.js"> </script>
    </head>

    <body>
      <h1>CANDY SHOP</h1>
      <ul class="nav">
        <li><a href="index.html">About Us</a></li>
      </ul>
        <div class="row">
          <div class="column" onclick="clickPB()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Peanut Butter Cups' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>

          </div>
          <div class="column" onclick="clickCC()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Candy Canes' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickAJ()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Almond Joy' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickCO()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Candy Corn Oreos' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickFR()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Fruit Roll-Ups' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="column" onclick="clickNerds()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Nerds' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickSF()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Swedish Fish' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickRP()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Reeses Pieces' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickSkittles()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Skittles' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
          <div class="column" onclick="clickRK()">
            <?php
              $result = $conn->query("SELECT Name, Price, Image1, Description1 FROM Candies WHERE Name = 'Rice Krispies' LIMIT 1");
              $row = mysqli_fetch_array($result);
            ?>
            <img src= <?php echo "'".$row['Image1']."'" ?>/>
            <h2><?php echo $row['Name'] ?></h2>
            <p><?php echo $row['Description1'] ?></p>
            <p><?php echo $row['Price'] ?></p>
          </div>
        </div>
    </body>
</html>
<?php
$conn = null;
?>
