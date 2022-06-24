<?Template::load('admin.header.php');?>
<a href="./admin/inmuebles/agregar" class="btn btn-primary pull-right">Agregar Inmueble</a>
<ul class="nav nav-tabs" id="myTab">
<?php foreach($this->items as $agent_name => $_item ){ ?>
	<li><a href="#agente_<?=$_item[0]->agente_id?>"><?=$agent_name." (".count($_item).")"?></a></li>
<? } ?>
</ul>
 
<div class="tab-content">
	<?php foreach($this->items as $agent_name => $items ){ ?>
	<div class="tab-pane active" id="agente_<?=$items[0]->agente_id?>">
		<table class="table table-striped table-hover">
			<tr>
				<th>#</th>
				<th width="100">Image</th>
				<th>Descripción</th>
				<th width="100">Acción</th>
			</tr>
			<?php $c = 0; foreach($items as $_item ){ $c++;
			$item = $_item->attributes();
			//$img = './images/inmuebles/'.$item['id'].'_1.jpg';
			$img = './images/inmuebles/ch/'.$item['portada'].'.jpg';
			$image = is_file($img) ? $img : './images/inmuebles/nofound.jpg'; ?>
			<tr>
				<td>
					<?=$c?>
					<? if ( !$_item->published ) { echo '<br><span class="label label-important" title="No publicado"><span class="icon-ban-circle icon-white"></span></span>'; } ?>
				</td>
				<td>
					<div class="width100"><img src="<?=$image?>" /></div>
				</td>
				<td>
					<div class="font18 uppercase">
					<?
						$title = array();
						if( $_item->codigo )	$title[] = $_item->codigo;
						if( $_item->operacion_es )	$title[] = $_item->operacion_es;
						if( $_item->categoria_es )	$title[] = utf8_encode($_item->categoria_es);
						if( $_item->ciudad )		$title[] = utf8_encode($_item->ciudad);
						if( $_item->zona )	$title[] = $_item->zona;
						echo implode(" | ",$title);
						?>
					</div>
					<div><strong>Precio:</strong> <?=number_format($item['precio'], 0, ',', '.')?> <?=$item['moneda']?> - <strong>Agente:</strong> <?=$item['agente_name']?></div>
				<td>
				<a class="btn btn-success" href="./admin/<?=MOD?>/editar/<?=$item['id']?>/?pdf"><span class="icon-download-alt"></span> PDF</a>
					<a href="./admin/<?=MOD?>/editar/<?=$item['id']?>" class="btn btn-primary"><span class="icon-edit"></span> Editar</a>
					<a href="./admin/<?=MOD?>/eliminar/<?=$item['id']?>" class="btn btn-danger"><span class="icon-trash"></span> Eliminar</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<? } ?>
</div>

<script>
 $(function () {
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$('#myTab a[href="#agente_<?=User::$curr->id?>"]').tab('show');
})
</script>
<?Template::load('admin.footer.php');?>
