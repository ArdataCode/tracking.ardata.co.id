@php
	$data = $this->getData();
	$awb = $data->ShippingOrders->awb;
	echo $data;
@endphp

<x-filament::page>
	<div class="content">
		{{$awb}} => {{$data['notes']}}
	</div>

	<div class="button">
		<a style="padding: 10px; background: #ddd;" href="create/resi/{{$data['shipping_id']}}">Input Resi</a>
	</div>
</x-filament::page>