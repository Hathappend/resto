<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>as</title>
    <style>
        /* Basic styling, adapt as needed */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 100%;
        }
        .row{
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .col{
            width: 50%;
            border: 1px solid black;
            padding:20px;
        }
        .text-center {
            text-align: center;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        p{
            font-size: 0.9rem;
            line-height: 1.5rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h1>Pak Resto</h1>
                <p>No Pesanan: #<?=$orders[0]['id']?> </p>
            </div>
            <hr>

            <table border="0">
                <thead>
                <tr>
                    <td>Tanggal</td>
                    <td align="right"> <?= date('d-m-Y', strtotime($orders[0]['created_at'])) ?></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td align="right"><?= date('H:i:s', strtotime($orders[0]['created_at'])) ?></td>
                </tr>
                <tr>
                    <td>No Meja</td>
                    <td align="right"> <?= $orders[0]['table_number']?></td>
                </tr>
                <tr>
                    <td>Kasir</td>
                    <td align="right"> <?= $cashier['first_name'] .' '. $cashier['last_name'] ?></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($order_details as $order_detail): ?>
                    <tr>
                        <td><?= htmlspecialchars($order_detail['menu']) ?></td>
                        <td rowspan="2" align="right"><?= number_format($order_detail['qty'] * $order_detail['price']) ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?= htmlspecialchars($order_detail['qty']) ?>x
                            (Rp. <?= number_format($order_detail['price']) ?>)
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td align="right"><strong>Total</strong></td>
                    <td align="right"><strong><?= number_format($orders[0]['total'], 2) ?></strong></td>
                </tr>
                <tr><td colspan="2"><hr></td></tr>
                <tr>
                    <td colspan="2" align="center">
                        <p><i>*Sudah Termasuk Pajak 10%</i></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="text-center">
                            <p>Terimakasih sudah berkunjung ke Pak Resto! Kami tunggu kehadirannya kembali</p>
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>
