<style type="text/css">
    .table tr td {
        border:0;
        padding: 5px;
    }

    .filament-tables-modal-button-action {
        display: none;
    }
</style>

<table class="table" style="width:60%;">
<tbody>
<tr>
<td class="w1">No Resi</td>
<td style="width:10px;">:</td>
<td style=""><?php echo e($record->awb); ?></td>
</tr>
<tr>
<td>Customer</td>
<td>:</td>
<td><?php echo e($record->Customer->name); ?></td>
</tr>
<tr>
<td>Dari</td>
<td>:</td>
<td><?php echo e($record->KotaAsal->name); ?></td>
</tr>
<tr>
<td>Tujuan</td>
<td>:</td>
<td><?php echo e($record->KotaTujuan->name); ?></td>
</tr>
<tr>
<td>Tanggal Pengiriman</td>
<td>:</td>
<td><?php echo e($record->delivery_date); ?></td>
</tr>
<tr>
<td>Keterangan Barang</td>
<td>:</td>
<td><?php echo e($record->goods_name); ?></td>
</tr>
<tr>
<td>Jenis Barang</td>
<td>:</td>
<td><?php echo e($record->GoodsType->name); ?></td>
</tr>
<tr>
<td>Ukuran Unit</td>
<td>:</td>
<td><?php echo e($record->weight); ?> <?php echo e($record->unit_size); ?></td>
</tr>
<tr>
<td>Kategori Pengiriman</td>
<td>:</td>
<td><?php echo e($record->ServicesType->name); ?></td>
</tr>
<tr>
<td>Biaya Kirim</td>
<td>:</td>
<td>Rp <?php echo e(number_format($record->price,0)); ?></td>
</tr>
<tr>
<td>Biaya Lainnya</td>
<td>:</td>
<td>Rp <?php echo e(number_format($record->other_costs,0)); ?> <?php if($record->other_costs_notes): ?>(<?php echo e($record->other_costs_notes); ?>)<?php endif; ?></td>
</tr>
<tr>
<td>Total Biaya</td>
<td>:</td>
<td>Rp <?php echo e(number_format($record->total,0)); ?></td>
</tr>
<tr>
<td>Status</td>
<td>:</td>
<td>
    <?php if($record->status == 'pending'): ?>
        Pending
    <?php elseif($record->status == 'progress'): ?>
        On Progress
    <?php elseif($record->status == 'delivered'): ?>
        Delivered
    <?php endif; ?>
</td>
</tr>
<tr>
<td>Nama Penerima</td>
<td>:</td>
<td><?php echo e($record->recipient); ?></td>
</tr>
<tr>
<td>Tanggal Penerimaan</td>
<td>:</td>
<td>
    <?php if($record->receipt_photo): ?>
        <?php echo e($record->receipt_date); ?>

    <?php else: ?>
        -
    <?php endif; ?>
</td>
</tr>
</tbody>
</table><?php /**PATH /home/u726706882/domains/sistem.amanatkilatsemesta.com/public_html/resources/views/shipping-orders-preview.blade.php ENDPATH**/ ?>