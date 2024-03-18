<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Add</title>
</head>
<body>
    <h1>OOP CRUD | PHP</h1>
    <hr>
    <form action="item_func.php" method="post">
        <input type="text" name="title" placeholder="Item Title"><br>
        <input type="text" name="category" placeholder="Item category"><br>
        <input type="text" name="price" placeholder="Item price"><br>
        <input type="number" name="quantity" placeholder="Item quantity"><br>
        <input type="submit" name="addItem" value="Add Item">
    </form>
    <br>
    <table>
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Added Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once "item.php";
                $item = new Item();
                $data = $item->showItem();
                
                $counter = 1;
                while($result = mysqli_fetch_array($data)){
                    ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $result['item_title']; ?></td>
                            <td><?php echo $result['item_category']; ?></td>
                            <td><?php echo $result['item_price']; ?></td>
                            <td><?php echo $result['item_quantity']; ?></td>
                            <td><?php echo $result['item_add_date']; ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>