<table border="1" width="100%">
    <thead>
    <tr>
        <th>Наименоване</th>
        <th>Цена</th>
    </tr>
    </thead>
    <tbody>
    <?php  foreach ($allProducts as $name => $price):?>
    <tr>
        <td><?= $name?></td>
        <td><?= $price?> руб. </td>
    </tr>
    <?php endforeach?>
    </tbody>
</table>