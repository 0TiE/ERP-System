<?php
require "connection.php";

$fdate = $_POST["fdate"];
$tdate = $_POST["tdate"];

if (empty($fdate)) {
    echo "Please Select From Date";
} else if (empty($tdate)) {
    echo "Please Select To Date";
} else {
    $r = Database::search("SELECT * FROM `invoice` WHERE `date` BETWEEN '" . $fdate . "' AND '" . $tdate . "'");
    $n = $r->num_rows;
    if ($n > 0) {
        for ($x = 0; $x < $n; $x++) {
            $data = $r->fetch_assoc();
            $r2 = Database::search("SELECT * FROM `customer` WHERE `id` ='" . $data["customer"] . "'");
            $customerdata = $r2->fetch_assoc();


            $r3 = Database::search("SELECT * FROM `district` WHERE `id` ='" . $customerdata["district"] . "'");
            $district = $r3->fetch_assoc();

            $r4 = Database::search("SELECT * FROM `invoice_master` WHERE `invoice_no` ='" . $data["invoice_no"] . "'");
            $invoice = $r4->fetch_assoc();
            
            $r5 = Database::search("SELECT * FROM `item` WHERE `id` ='" . $invoice["item_id"]. "'");
            $item = $r5->fetch_assoc();
            
            ?>
                <tr>
                    <td>

                    </td>
                    <td>
                    <?php echo $data["invoice_no"]; ?>
                    </td>
                    <td>
                    <?php echo $data["date"]; ?>
                    </td>
                    <td>
                    <?php echo $customerdata["title"]; ?>.
                    <?php echo $customerdata["first_name"]; ?>
                    </td>

                    <td>
                    <?php echo $district["district"]; ?>
                    </td>
                    <td>
                    <?php echo $item["item_name"]; ?>
                    </td>
                    <td>
                    <?php echo $item["item_code"]; ?>
                    </td>
                    <td>
                    <?php echo $item["item_category"]; ?>
                    </td>
                    <td>
                    <?php echo $invoice["unit_price"]; ?>
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
}
?>