<?php
require "connection.php";

$item_code = $_POST["item_code"];


    $r = Database::search("SELECT * FROM `item` WHERE `item_code` = '" . $item_code . "' ");
    $n = $r->num_rows;
    if ($n > 0) {
        for ($x = 0; $x < $n; $x++) {
            $item = $r->fetch_assoc();
        
            ?>
                <tr>
                <td>
                    
                    </td>
                    <td>
                    <?php echo $item["item_name"]; ?>
                    </td>
                    
                    <td>
                    <?php echo $item["item_category"]; ?>
                    </td>
                    <td>
                    <?php echo $item["item_subcategory"]; ?>
                    </td>
                    <td>
                    <?php echo $item["quantity"]; ?>
                    </td>
                </tr>
            <?php
        }
    } else {

        ?>
            <tr>
                <td colspan='9' class="bg-danger text-center ">
                    <h1>No records found</h1>
                </td>
            </tr>

        <?php
    }

?>