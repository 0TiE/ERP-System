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
            $districtdata = $r3->fetch_assoc();
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
                    <?php echo $districtdata["district"]; ?>
                    </td>
                    <td>
                    <?php echo $data["item_count"]; ?>
                    </td>
                    <td>Rs.
                    <?php echo $data["amount"]; ?>
                    </td>
                </tr>
            <?php
        }
    } else {

        ?>
            <tr>
                <td colspan='7' class="bg-danger text-center ">
                    <h1>No records found</h1>
                </td>
            </tr>

        <?php
    }
}
?>