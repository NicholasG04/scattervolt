<h1>Welcome to the secret admin page</h1>
<h2>No this is not password protected as it's only temporary, so I don't recommend sharing it around.</h2>
<h3>Product numbers are in order as on website, 1 = sold, nothing = available</h3>

<?php 
$url = 'products.json';
$data = file_get_contents($url);
$products = json_decode($data, true);
#echo $products[0]['sold']
?>


<style>
table, th, td {
  border: 1px solid black;
}
</style>


<table>
    <tr>
        <th>Product</th>
        <th>Sold?</th>
        <th>Switch</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $products[0]['sold']?></td>
        <td>
            <form method="POST" action="submit.php">
                <input type="text" value="0" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $products[1]['sold']?></td>
        <td>
            <form method="POST" action="submit.php">
                <input type="text" value="1" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td><?php echo $products[2]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="2" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td><?php echo $products[3]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="3" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td><?php echo $products[4]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="4" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td><?php echo $products[5]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="5" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>7</td>
        <td><?php echo $products[6]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="6" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>8</td>
        <td><?php echo $products[7]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="7" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>9</td>
        <td><?php echo $products[8]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="8" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>10</td>
        <td><?php echo $products[9]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="9" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>11</td>
        <td><?php echo $products[10]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="10" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>12</td>
        <td><?php echo $products[11]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="11" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>13</td>
        <td><?php echo $products[12]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="12" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>14</td>
        <td><?php echo $products[13]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="13" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>15</td>
        <td><?php echo $products[14]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="14" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>
    <tr>
        <td>16</td>
        <td><?php echo $products[15]['sold']?></td>
                <td>
            <form method="POST" action="submit.php">
                <input type="text" value="15" name="productId" hidden>
                <input type="submit" value="Switch">
            </form>
        </td>
    </tr>