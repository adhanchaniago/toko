<div id="content-right">




<div class="cleaner_h10"></div>
<div id="sub-content-title">Produk Terbaru </div>
<div id="sub-content-center-privat">
<ul id="produkbaru">

@foreach($proterbaru as $row)
  <?php $name = DB::table('stock_orders')->where('id',$row->product_id)->first()->name; ?> 
<li>
<div id="list-produk">
<p style="text-align:center; margin:0px auto; height:35px;"><strong>{{ $name }}</strong></p><p style="text-align:center; margin:0px auto;">

	<img src="{{ url($row->photo) }}" width="100" class="vtip" title="{{ $name }}" /><br />{!!  "Rp " . number_format($row->price,2,',','.');  !!}

	<div style="width:152px; margin:0px auto; padding:0px;">
		<a href="{{ url('order/'.$row->id) }}" class="tombol-beli" ></a>
	<a href="{{ url('detail/'.$row->id) }}" class="vtip" title="{{ $name }} - Harga Rp {!! number_format($row->price,2,',','.')  !!}">
				<img src="{{ asset('images/bar-detail.png') }}" border=0 style="float:right;" />
			</a>
	</div>
</p>
</div>
</li>

@endforeach

</ul>
</div>
<div id="sub-content-footer"></div>





<div class="cleaner_h10"></div>
<div id="sub-content-title">Jasa Pengiriman Barang</div>
<div id="sub-content-center">
	<p align="center" style="margin:0px auto; padding:3px;"><a href="http://www.tiki-online.com/" target="_blank"><img src="{{ url('/images/tiki.png') }}" border="0" /></a></p>
	<p align="center" style="margin:0px auto; padding:3px;"><a href="http://www.esl-express.com/" target="_blank"><img src="{{ url('/images/sl.png') }}" border="0" /></a></p>
	<p align="center" style="margin:0px auto; padding:3px;"><a href="http://www.jne.co.id/" target="_blank"><img src="{{ url('/images/jne.png') }}" border="0" /></a></p>
</div>
<div id="sub-content-footer"></div>



</div>