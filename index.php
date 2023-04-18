<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <script src="https://kit.fontawesome.com/4cd457a180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/htdocs/images/to-do-list.png">
    
</head>
<body>
    <h1 class="heading">To Do List</h1>
    <div class="container">
        <form action="handleAction.php" method="post">
            <div class="input-section">
                <input type="text" name="inputbox" id="inputbox" placeholder=" Type here..." >
                <button type="submit" name="add" id="add">Add</button>
            </div>
            
            <ul class="list">
                <?php
                    $itemList=get_items();
                    while($row=$itemList->fetch_assoc())
                    {
                ?>
                <li class="item">
                    <p><?php echo $row["item"]; ?></p>
                    <div class="icon">
                        <button type="submit" name="checked" id="check" value="<?php echo $row["id"]; ?>"><i class="fa fa-check-circle-o"></i></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"]; ?>"><i class="fa fa-trash"></i></button>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <hr>
            <ul class="list">
                <?php
                    $itemList=get_items_checked();
                    while($row=$itemList->fetch_assoc())
                    {
                ?>
                    <li class="item fade">
                        <p class="deletedtext"><span><?php echo $row["item"]; ?></span></p>
                        <div class="icon">
                         <button type="submit" name="" id="check"><i class="fa fa-check-circle-o hidden"></i></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"]; ?>"><i class="fa fa-trash"></i></button>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </form>
            
    </div>
</body>
</html>