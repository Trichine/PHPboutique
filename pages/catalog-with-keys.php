<?php 
include 'template/header.php';
?>
    
<?php 
    $teeshirt = array(
        "name" => "Teeshirt fatal Dev",
        "price"=>"19,90€",
        "weight"=>"150",
        "discount"=>NULL,
        "picture_url"=> "<img src= /assets/images/t-shirt-fatal.png>",
    );
     //var_dump($teeshirt); pour tester/afficher une variable pour debug.

    $poster = array(
        "name" => "poster",
        "price"=>"22,90€",
        "weight"=>"120",
        "discount"=>NULL,
        "picture_url"=> "<img src= /assets/images/poster.jpg>",
    );

    $tapisSouris = array(
        "name" => "tapis souris fatal Dev",
        "price"=>"29,90€",
        "weight"=>"250",
        "discount"=>NULL,
        "picture_url"=> "<img src= /assets/images/tapis-souris.jpg>",
    );

?>
   <div>
    <h3><?php echo $teeshirt ["name"]?> </h3>
    <p><?php echo $teeshirt ["price"]?></p>
    <p><?php echo $teeshirt ["weight"]?></p>
    <p><?php echo $teeshirt ["discount"]?></p>
    <p><?php echo $teeshirt ["picture_url"]?></p>
   </div> 

   <div>
    <h3><?php echo $poster ["name"]?> </h3>
    <p><?php echo $poster ["price"]?></p>
    <p><?php echo $poster ["weight"]?></p>
    <p><?php echo $poster ["discount"]?></p>
    <p><?php echo $poster ["picture_url"]?></p>
   </div> 

   <div>
    <h3><?php echo $tapisSouris ["name"]?> </h3>
    <p><?php echo $tapisSouris ["price"]?></p>
    <p><?php echo $tapisSouris ["weight"]?></p>
    <p><?php echo $tapisSouris ["discount"]?></p>
    <p><?php echo $tapisSouris ["picture_url"]?></p>
   </div> 

<?php 
include 'template/footer.php';
?>

