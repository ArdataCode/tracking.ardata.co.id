<style type="text/css">
    .filament-tables-modal-button-action {
        display: none;
    }
</style>

<div id="cetak" style="padding:10px; border:4px dashed; #333; margin: 0 auto; width:600px;">
<table cellspacing="0" style="border-collapse:collapse; width:100%">
    <img alt="{{ENV('APP_NAME')}}" title="{{ENV('APP_NAME')}}" src="/frontpage/content/uploads/2023/07/logo-2.png" style="max-width:200px;" />
    <tbody>
        <tr>
            <td colspan="2" style="border:1px solid #ccc; text-align:center; vertical-align:middle; height:50px;"><span style="font-size:16px; font-weight:600;">No Pesanan: {{$d->awb}}</span></td>
        </tr>
        <tr>
            <td colspan="2" style="height:100px; text-align:center; vertical-align:middle; white-space:nowrap">
                <img style="padding:10px;" src="https://barcode.tec-it.com/barcode.ashx?data={{$d->awb}}">
            </td>
        </tr>
        <tr>
            <td style="padding-top: 10px; padding-bottom: 10px; border-top:1px dotted #ccc; border-bottom:1px dotted #ccc; vertical-align:top; white-space:normal; width:50%">
                <strong>Penerima: {{$d->recipient}}</strong><br><strong>Alamat:</strong><br>{{$d->address}} {{$d->Regency->name}}, {{$d->province}} {{$d->postalcode}}
                <br><strong>No Telp: </strong>{{$d->phone}}
            </td>
            <td style="padding-top: 10px; padding-bottom: 10px; border-top:1px dotted #ccc; border-bottom:1px dotted #ccc; vertical-align:top; white-space:normal; width:50%">
                <strong>Pengirim: {{$d->Customer->name}}</strong><br><strong>Alamat: </strong><br>{{$d->Customer->address}} {{$d->Customer->district}}, {{$d->Customer->Regency->name}}, {{$d->Customer->province}} {{$d->Customer->postalcode}}
                <br><strong>No Telp: </strong>{{$d->Customer->phone}}
            </td>
        </tr>
        <tr>
            <td style="padding-top: 10px; padding-bottom: 10px;">
                Jenis Pengiriman: {{$d->ServicesType->name}}<br>
                Berat: {{$d->weight}} Kg<br>
                Keterangan: {{$d->goods_name}}<br>
                Biaya Kirim: Rp {{number_format($d->price,0)}}<br>
                Biaya Lainnya: Rp {{number_format($d->other_costs,0)}}<br>
                Total Biaya: Rp {{number_format($d->total,0)}}<br>
                Barang Pecah? Tidak
            </td>
            <td style="padding-top: 10px; padding-bottom: 10px; text-align: left;">
                <img style="padding:10px;" src="https://barcode.tec-it.com/barcode.ashx?data={{$d->awb}}">
            </td>
        </tr>
    </tbody>
</table>
</div>