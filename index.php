<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div id="background">
    <div class="container">
        <form action="" method="post">
            <table>
                <thead>
                    <tr>
                        <td>Money:</td>
                        <td><input type="number" name="money"></td>
                    </tr>
                </thead>
                <tbody>
                    <td>To:</td>
                    <td><select name="value1">
                            <option value="USD">Đô là Mỹ (USD)</option>
                            <option value="VND">Việt Nam Đồng (VND)</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>From:</td>
                        <td><select name="value2">
                                <option value="USD">Đô là Mỹ (USD)</option>
                                <option value="VND">Việt Nam Đồng (VND)</option>
                            </select></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><input type="submit" value="Current"></td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $money = $_POST['money'];
            $to = $_POST['value1'];
            $from = $_POST['value2'];
            $submit = $_POST['submit'];
            $result = 0;
            if ($to == 'USD' && $from == 'VND') {
                $result = $money * 23500;
                echo $result;
            } elseif ($to == 'VND' && $from == 'USD') {
                $result = $money / 23500;
                echo $result;
            } else {
                echo $money;
            }
        }
        ?>
    </div>
    </div>
</body>

</html>