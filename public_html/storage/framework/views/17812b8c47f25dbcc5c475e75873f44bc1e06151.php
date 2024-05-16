<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(ENV('APP_NAME')); ?></title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    </head>

    <style type="text/css">
        body {
            font-family: 'Poppins';
        }
    </style>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="padding-top:10%;">
          
            <div id="cetak" style="padding:10px; border:4px dashed; #333; margin: 0 auto; width:600px;">
            <table cellspacing="0" style="border-collapse:collapse; width:100%">
                <img alt="<?php echo e(ENV('APP_NAME')); ?>" title="<?php echo e(ENV('APP_NAME')); ?>" src="/frontpage/content/uploads/2023/07/logo-2.png" style="max-width:200px;" />
                <tbody>
                    <tr>
                        <td colspan="2" style="border:1px solid #ccc; text-align:center; vertical-align:middle; height:50px;"><span style="font-size:16px; font-weight:600;">No Pesanan: <?php echo e($d->awb); ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:100px; text-align:center; vertical-align:middle; white-space:nowrap">
                            <img style="padding:10px;" src="https://barcode.tec-it.com/barcode.ashx?data=<?php echo e($d->awb); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 10px; padding-bottom: 10px; border-top:1px dotted #ccc; border-bottom:1px dotted #ccc; vertical-align:top; white-space:normal; width:50%">
                            <strong>Penerima: <?php echo e($d->recipient); ?></strong><br><strong>Alamat:</strong><br><?php echo e($d->address); ?> <?php echo e($d->Regency->name); ?>, <?php echo e($d->province); ?> <?php echo e($d->postalcode); ?>

                            <br><strong>No Telp: </strong><?php echo e($d->phone); ?>

                        </td>
                        <td style="padding-top: 10px; padding-bottom: 10px; border-top:1px dotted #ccc; border-bottom:1px dotted #ccc; vertical-align:top; white-space:normal; width:50%">
                            <strong>Pengirim: <?php echo e($d->Customer->name); ?></strong><br><strong>Alamat: </strong><br><?php echo e($d->Customer->address); ?> <?php echo e($d->Customer->district); ?>, <?php echo e($d->Customer->Regency->name); ?>, <?php echo e($d->Customer->province); ?> <?php echo e($d->Customer->postalcode); ?>

                            <br><strong>No Telp: </strong><?php echo e($d->Customer->phone); ?>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 10px; padding-bottom: 10px;">
                            Jenis Pengiriman: <?php echo e($d->ServicesType->name); ?><br>
                            Ukuran Unit: <?php echo e($d->weight); ?> <?php echo e($d->unit_size); ?><br>
                            Keterangan: <?php echo e($d->goods_name); ?><br>
                            Biaya Kirim: Rp <?php echo e(number_format($d->price,0)); ?><br>
                            Biaya Lainnya: Rp <?php echo e(number_format($d->other_costs,0)); ?><br>
                            Total Biaya: Rp <?php echo e(number_format($d->total,0)); ?><br>
                            Barang Pecah? Tidak
                        </td>
                        <td style="padding-top: 10px; padding-bottom: 10px; text-align: left;">
                            <img style="padding:10px;" src="https://barcode.tec-it.com/barcode.ashx?data=<?php echo e($d->awb); ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>

            <br>

            <div style="margin:0 auto; text-align: center;">
                <button type="button" id="print" style="padding:8px 15px 8px 15px; font-family: 'Poppins';"><a style="text-decoration: none; color: #222;" href="#">Cetak</a></button>
            </div>
            
        </div>

        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", () => {
                let printLink = document.getElementById("print");
                printLink.addEventListener("click", event => {
                    event.preventDefault();
                    printLink.style.display = "none";
                    window.print();
                    location.reload();
                }, false);
            }, false);
        </script>

    </body>
</html><?php /**PATH /home/1126019.cloudwaysapps.com/wduukqjrbn/public_html/resources/views/shipping-orders-print.blade.php ENDPATH**/ ?>