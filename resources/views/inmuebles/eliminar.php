<?Template::load("admin.header.php")?>
<ul class="breadcrumb">
  <li><a href="./<?=MOD?>"><?=MOD?></a> <span class="divider">/</span></li>
  <li><a href="./<?=MOD?>/<?=ACC?>"><?=ACC?></a> <span class="divider">/</span></li>
  <li class="active"><?=$this->params['get']['id']?></li>
</ul>
<h2 class="uppercase">
<?
	$title = array();
	if( $this->item->codigo )	$title[] = $this->item->codigo;
	if( $this->item->operacion_es )	$title[] = $this->item->operacion_es;
	if( $this->item->categoria_es )	$title[] = utf8_encode($this->item->categoria_es);
	if( $this->item->ciudad )		$title[] = utf8_encode($this->item->ciudad);
	if( $this->item->zona )	$title[] = $this->item->zona;
	echo implode(" | ",$title);
?>
</h2>
<form method="post" class="form-horizontal">
  <div class="control-group">
    <div class="controls">
	  <input type="hidden" name="id" value="<?=$_GET['id']?>">
    </div>
  </div>

  <div class="control-group">
    <div class="form-actions">
	  <button type="submit" class="btn btn-danger">Eliminar</button>
	  <a class="btn" href="./admin/<?=MOD?>/">Cancelar</a>
	</div>
  </div>
</form>
<?Template::load("admin.footer.php")?>