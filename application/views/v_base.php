<!DOCTYPE>
<html>
<head>
    <title><?= $siteName?> | <?= $pageTitle?></title>
    <meta content="text/html; charset=utf8">
    <?php foreach ($styles as $fileStyle):?>
        <?= html::style($fileStyle)?>
    <?php endforeach;?>

    <?php foreach ($scripts as $fileScript):?>
        <?= html::script($fileStyle)?>
    <?php endforeach;?>
</head>
<body>
    <center>
    <table align="center" border="0" width="100%"  cellpadding="0">
        <thead>
        <tr>
            <th align="left"  colspan="3">
              <div id="header">
                  <a href="/"><h1><?= $siteName?></h1></a>
                  <h3><?= $siteDescription?></h3>
              </div>
            </th>
        </tr>
        </thead>
        <tbody>
            <tr valid="top">
                <!-- Левый блок -->
                <?php if (isset($blockLeft)):?>
                    <td width="320">
                        <?php foreach ($blockLeft as $lBlock):?>
                            <?= $lBlock?>
                        <?php endforeach;?>
                    </td>
                <?php endif;?>
                <!-- /Левый блок -->

                <!-- Центральный блок -->
                <?php if (isset($blockCenter)):?>
                    <td width="320">
                        <h2><?= $pageTitle?></h2>
                        <?php foreach ($blockCenter as $сBlock):?>
                                <?= $сBlock?>
                            <?php endforeach;?>
                    </td>
                <?php endif;?>
                <!-- /Центральный блок -->

                <!-- Правый блок -->
                <?php if (isset($blockRight)):?>
                    <td width="200">
                        <?php foreach ($blockRight as $rBlock):?>
                            <?= $rBlock?>
                        <?php endforeach;?>
                    </td>
                <?php endif;?>
                <!-- /Правый блок -->

            </tr>
        </tbody>
    </table>
    </center>
</body>
</html>