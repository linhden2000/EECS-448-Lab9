<style>
    <?php include 'style.css'; ?>
</style>
<?php
    $username = $_POST['username'];
    $i1 = $_POST['Eyeshadows'];
    $i2 = $_POST['Lipsticks'];
    $i3 = $_POST['Lipbalms'];
    $i1SubTotal = $i1 * 2;
    $i2SubTotal = $i2 * 4;
    $i3SubTotal = $i3 * 6;
    $total = $i1SubTotal + $i2SubTotal + $i3SubTotal;
    $shipping = $_POST['shipping'];
    $shippingPrice = 0;
    $shippingType = "Free 7 day";
    if($shipping == "type2"){
        $shippingPrice = 50;
        $shippingType = "Over Night";
    }
    elseif($shipping == "type3"){
        $shippingPrice = 5;
        $shippingType = "3-day";
    }
    $total = $total + $shippingPrice;
    echo "<table>
            <tr> 
                <th> </th>
                <th> Quantity </th>
                <th> Cost per Item </th>
                <th> Subtotal </th>
            </tr>";
    echo    "<tr>
                <td class='item'><b>Eyeshadows</b> </td>
                <td class='number'>" . $i1 . "</td>";
    echo       "<td class='number'> $2.00 </td>";
    echo       "<td class='number'>$" . $i1SubTotal . "</td>
            </tr>";
    echo    "<tr>
                <td class='item'><b>Lipsticks</b> </td>
                <td class='number'>" . $i2 . "</td>";
    echo       "<td class='number'> $4.00 </td>";
    echo       "<td class='number'>$" . $i2SubTotal . "</td>
            </tr>";
    echo    "<tr>
                <td class='item'><b>Lip balm</b> </td>
                <td class='number'>" . $i3 . "</td>";
    echo       "<td class='number'> $6.00 </td>";
    echo       "<td class='number'>$" . $i3SubTotal . "</td>
            </tr>";
    echo    "<tr>
                <td class='item'><b>Shipping</b> </td>
                <td class='number'>" . $shippingType . "</td>
                <td class='number'> </td>";
    echo       "<td class='number'> $" . $shippingPrice. "</td>";
    echo       "</tr>";
    echo    "<tr>
                <td class='item'><b>Total Cost</b> </td>
                <td class='item'> </td>
                <td class='item'> </td>";
    echo       "<td class='item'> $" . $total. "</td>";
    echo       "</tr>";
    echo  "</table>";
?>
