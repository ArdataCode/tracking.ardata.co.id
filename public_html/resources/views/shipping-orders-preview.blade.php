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
<td style="">{{$record->awb}}</td>
</tr>
<tr>
<td>Customer</td>
<td>:</td>
<td>{{$record->Customer->name}}</td>
</tr>
<tr>
<td>Dari</td>
<td>:</td>
<td>{{$record->KotaAsal->name}}</td>
</tr>
<tr>
<td>Tujuan</td>
<td>:</td>
<td>{{$record->KotaTujuan->name}}</td>
</tr>
<tr>
<td>Tanggal Pengiriman</td>
<td>:</td>
<td>{{$record->delivery_date}}</td>
</tr>
<tr>
<td>Keterangan Barang</td>
<td>:</td>
<td>{{$record->goods_name}}</td>
</tr>
<tr>
<td>Jenis Barang</td>
<td>:</td>
<td>{{$record->GoodsType->name}}</td>
</tr>
<tr>
<td>Ukuran Unit</td>
<td>:</td>
<td>{{$record->weight}} {{$record->unit_size}}</td>
</tr>
<tr>
<td>Kategori Pengiriman</td>
<td>:</td>
<td>{{$record->ServicesType->name}}</td>
</tr>
<tr>
<td>Biaya Kirim</td>
<td>:</td>
<td>Rp {{number_format($record->price,0)}}</td>
</tr>
<tr>
<td>Biaya Lainnya</td>
<td>:</td>
<td>Rp {{number_format($record->other_costs,0)}} @if($record->other_costs_notes)({{$record->other_costs_notes}})@endif</td>
</tr>
<tr>
<td>Total Biaya</td>
<td>:</td>
<td>Rp {{number_format($record->total,0)}}</td>
</tr>
<tr>
<td>Status</td>
<td>:</td>
<td>
    @if ($record->status == 'pending')
        Pending
    @elseif ($record->status == 'progress')
        On Progress
    @elseif ($record->status == 'delivered')
        Delivered
    @endif
</td>
</tr>
<tr>
<td>Nama Penerima</td>
<td>:</td>
<td>{{$record->recipient}}</td>
</tr>
<tr>
<td>Tanggal Penerimaan</td>
<td>:</td>
<td>
    @if ($record->receipt_photo)
        {{$record->receipt_date}}
    @else
        -
    @endif
</td>
</tr>
</tbody>
</table>