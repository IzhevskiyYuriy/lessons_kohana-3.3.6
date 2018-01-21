<table border="0" width="100%" class="btl" cellpadding="0">
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
        <td align="center"><?= $price?> руб. </td>
    </tr>
    <?php endforeach?>
    </tbody>
</table>