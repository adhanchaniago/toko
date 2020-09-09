
@foreach($product as $row)
  <?php $name = DB::table('stock_orders')->where('id',$row->product_id)->first()->name; ?> 
	<div class="thumb-produk">
	<p style="text-align:center; height:40px; margin:0px auto;">
		<strong>{{ $name }}</strong>
	</p>

	<p style="text-align:center; margin:0px auto;">
		<img src="{{ url($row->photo) }}" width="100" />
		<br /> {!!  "Rp " . number_format($row->price,2,',','.');  !!}

		<div style="width:152px; margin:0px auto; padding:0px;">
			<a href="{{ url('order/'.$row->id) }}" class="tombol-beli" ></a>
			<a href="{{ url('detail/'.$row->id) }}" class="vtip" title="{{ $name }} - Harga Rp {!! number_format($row->price,2,',','.')  !!}">
				<img src="{{ asset('images/bar-detail.png') }}" border=0 style="float:right;" />
			</a>
		</div>
	</p>
	</div>


@endforeach

