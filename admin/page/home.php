<div class="page-header">
	<h2>Daftar Mobil</small></h2>
</div>
<div class="row">
	<?php $query = $connection->query("SELECT * FROM mobil JOIN jenis USING(id_jenis)"); while ($row = $query->fetch_assoc()): ?>
		<div class="col-xs-6 col-md-6">
			<div class="thumbnail">
				<a href="assets/img/mobil/<?=$row['gambar']?>" class="fancybox">
				<img class="img-responsive" src="<?=$url?>assets/img/mobil/<?=$row['gambar']?>" style="height:250px; width:100%" alt="<?=$row['nama_mobil']?>">
			</a>
	      <div class="caption text-center">
	        <h4><?=$row["nama_mobil"]?></h4>
	        <h5>Rp.<?=$row["harga"]?>,- <?=$row["nama"]?> - <?=$row["merk"]?></h5>
	        <h6><?=$row["no_mobil"]?></h6>
			<span class="label label-<?=($row['status']) ? "warning" : "success" ?>"><?=($row['status']) ? "Belum tersewa" : "Tersewa oleh" ?></span>

	        <p>
	        	<h4>Total: <?=getTotalTransaksi($row['id_mobil'])['total']?> Transaksi</h4>
				<br>
				<a href="<?=($row['status']) ? "?page=transaksi&id=$row[id_mobil]" : "#" ?>" style="display: <?=($row['status']) ?: "none" ?>" class="btn btn-primary">Edit Mobil</a>
			</p>
	      </div>
	    </div>
	  </div>
	<?php endwhile; ?>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		iframe : {
			preload: false
		}
	});
	$(".various").fancybox({
		maxWidth    : 800,
		maxHeight    : 600,
		fitToView    : false,
		width        : '70%',
		height        : '70%',
		autoSize    : false,
		closeClick    : false,
		openEffect    : 'none',
		closeEffect    : 'none'
	});
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});
</script>
