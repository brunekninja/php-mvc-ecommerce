<h2>Products</h2>
<table border="1">
  <tr bgcolor="#ccc">
    <th style="text-align:left">Number</th>
    <th style="text-align:left">Name</th>
    <th style="text-align:left">Type</th>
  </tr>

<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 21/05/2017
 * Time: 23:40
 */

$json = file_get_contents('./ex_data/products.json');

$json_arr = json_decode($json, true);

$startTime = microtime(true);

foreach ($json_arr as $data) : ?>

      <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['type']?></td>
        <td>
          <button class="js-action">
            Add To Cart
          </button>
        </td>
      </tr>


<?php

endforeach;

$endTime = microtime(true);
$elapsed = $endTime - $startTime;
echo "Execution time : $elapsed seconds";

?>


</table>
