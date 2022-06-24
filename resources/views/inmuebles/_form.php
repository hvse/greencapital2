<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
	<? if ( User::$curr->rol == 9 ) { ?>
	<div style="background:#ddd"  class="padd5 redondeado6">
		Publicado: si <input type="radio" name="published" value="1" <?=$this->item->published?"checked":""?> > | no <input type="radio" name="published" value="0" <?=!$this->item->published?"checked":""?>>
	</div>
	<div class="height10"></div>
	<? } ?>

	<div style="background:#ddd"  class="padd5 redondeado6">
		Vendido: si <input type="radio" name="sold" value="1" <?=$this->item->sold?"checked":""?> > | no <input type="radio" name="sold" value="0" <?=!$this->item->sold?"checked":""?>>
	</div>
	<div class="height10"></div>

	
	<ul class="nav nav-tabs" id="myTab">
		<li class="active"><a href="#spanish">Español</a></li>
		<li><a href="#english">Inglés</a></li>
	</ul>
	 
	<div class="tab-content">
		<div class="tab-pane active" id="spanish">
			<!-- INMUEBLES TABLA ESPANOL-->
			<table class="table table-bordered">
				<tr>
					<td width="10%"><input class="span12" placeholder="código" value="<?=$this->item->codigo?>" required name="codigo" type="text" maxlength="6"></td>
					<td width="20%">
						<select class="span12" name="operacion_id" required>
						  <option value="0">Operación</option>
						  <? foreach( Operaciones::find("all") as $op ) { ?>
							<option value="<?=$op->id?>" <? if( $op->id == $this->item->operacion_id ){ echo 'selected';}?>>
								<?=$op->name_es?>
							</option>
						  <? } ?>
						</select>
					</td>
					<td width="15%">Dormitorios</td>
					<td width="15%"><input class="span12" value="<?=$this->item->dormitorios?>" name="dormitorios" type="number"></td>
					<td width="70%" rowspan="4">Características<br>
						<textarea name="caracteristicas_es" cols="" rows="6" class="span12" required><?=$this->item->caracteristicas_es?></textarea>
					</td>
				</tr>
				<tr>
					<td>Tipo</td>
					<td>
						<select class="span12" name="categoria_id">
						  <option value="0">Seleccionar</option>
						  <?
							foreach( $this->categorias as $cat ) { ?>
						  <option value="<?=$cat->id?>" <? if( $cat->id == $this->item->categoria_id ){ echo 'selected';}?>>
							<?=$cat->name_es?>
							</option>
						  <? } ?>
						</select>
					</td>
					<td>Baños</td>
					<td><input class="span12" value="<?=$this->item->banos?>" name="banos" type="number"></td>
				</tr>

			<tr>
				<td>Departamento/Ciudad</td>
				<td>
					<select name="departamento_ciudad" class="span12">
					<option value="0">Paraguay</option>
					<optgroup label="Departamentos">
						<?
						$departamentos = Paraguay::find("all", array("conditions"=>array("departamento_id=0"), "order" => "nombre" ));
						foreach ( $departamentos as $departamento ) {
							$selected = $this->item->departamento_ciudad == $departamento->id ? "selected" : "";
							echo '<option value="'.$departamento->id.'" '.$selected.'>'.utf8_encode($departamento->nombre).'</option>';
						}
						?>
					</optgroup>

					<?
						$departamentos = Paraguay::find("all", array("conditions"=>array("departamento_id=0"), "order" => "nombre" ));
						foreach ( $departamentos as $departamento ) {
							echo '<optgroup label="'.utf8_encode($departamento->nombre).'">';
							foreach ( Paraguay::find( "all", array( "conditions" => array( "departamento_id=?", $departamento->id ), "order" => "nombre" ) ) as $ciudad ) {
								$selected = $this->item->departamento_ciudad == $ciudad->id ? "selected" : "";
								echo '<option value="'.$ciudad->id.'" '.$selected.'>'.utf8_encode($ciudad->nombre).'</option>';
							}
							echo '</optgroup>';
						}
						?>

					</select>
				</td>
				<td>Área de servicio</td>
				<td><input name="area_de_servicio" type="number" class="span12" id="area_de_servicio" value="<?=$this->item->area_de_servicio?>" /></td>
			</tr>

			<tr>
				<td>Zona</td>
				<td><input class="span12" value="<?=$this->item->zona?>" name="zona" type="text" required></td>
				<td>Cochera</td>
				<td><input class="span12" value="<?=$this->item->cochera?>" name="cochera" type="number"></td>
			</tr>
			<tr>
				<td>Superficie total</td>
				<td>
					<input class="span7" value="<?=$this->item->superficie_total?>" name="superficie_total" type="number" required>
					<select name="medida_id" class="span4">
					  <? foreach( Medidas::find("all") as $moneda ) { ?>
						<option value="<?=$moneda->id?>" <? if( $moneda->id == $this->item->medida_id ){ echo 'selected';}?>>
						<?=$moneda->name?>
						</option>
					  <? } ?>
					</select>

				</td>
				<td>Precio<br/></td>
				<td><input class="span7 numeric" value="<?=$this->item->precio?>" name="precio" type="number" />
				  <select name="moneda_id" class="span4">
				    <? foreach( Monedas::find("all") as $moneda ) { ?>
				    <option value="<?=$moneda->id?>" <? if( $moneda->id == $this->item->moneda_id ){ echo 'selected';}?>>
				      <?=$moneda->name?>
			        </option>
				    <? } ?>
			      </select></td>
				<td width="70%" rowspan="3">Nota<br><textarea name="nota_es" cols="" rows="4" class="span12" required><?=$this->item->nota_es?></textarea></td>
			</tr>
			<tr>
				<td>Área Construida</td>
				<td>
					<input class="span7 numeric" value="<?=$this->item->area_construida?>" name="area_construida" type="number" />
					m<sup>2</sup></td>
				<td colspan="2" rowspan="2">
					<? if ( ACC == "agregar" || ( User::$curr->rol == 9 || $this->item->agente_id == User::$curr->id ) ) { ?><span class="label label-important" title="Importante">Cliente:</span> Teléfonos | Dirección | Observaciones<br>
					<textarea name="cliente" cols="" rows="2" class="span12" required id="cliente"><?=$this->item->cliente?></textarea>
					<? } ?>
				</td>
			</tr>
			<tr>
				<td>Contacto</td>
				<td>
					<select class="span12" name="agente_id" <? if( User::$curr->rol != 9 ) {echo 'readonly'; }?> >
						<? foreach( User::find("all") as $cat ) { ?>
							<option <? if( User::$curr->rol != 9 && User::$curr->id != $cat->id ) {echo 'disabled'; }?> value="<?=$cat->id?>" <? if( ( ACC == 'agregar' && User::$curr->id == $cat->id ) || ( ACC == "editar" && $cat->id == $this->item->agente_id ) ){ echo 'selected';}?>>
								<?=$cat->name?>
							</option>
						<? } ?>
					</select>
				</td>
			</tr>
			</table>
			

			<h3>FOTOS</h3>
			<!-- IMAGES -->
			<ul id="sortable">
			<? $fotos = Fotos::inmueblePhoto( $this->item->id );
			foreach( $fotos as $foto ){ ?>
			<li class="input_image" id="photo<?=$foto->id?>">
				<a href="#myModal" onClick="toDelete(<?=$foto->id?>)" data-toggle="modal" title="Eliminar esta foto"><span class="icon-trash icon-white"></span></a>
				<? $src = "./images/inmuebles/ch/".$foto->id.".jpg"; ?>
				<img src="<?=is_file($src)?$src:""?>" />
				<input type="hidden" name="fotos[]" value="<?=$foto->id?>">
				<input class="input_portada" type="radio" name="portada" value="<?=$foto->id?>" <?if( $foto->id == $this->item->portada ){echo'checked';}?> title="Imagen para mostrar en la lista de búsquedas" />
			</li>
			<? } ?>
			</ul>

			<a class="input_image fff font72 center bold" style="text-decoration:none" title="Agregar Foto" href="javascript:;" id="addPhoto">
				<div class="height30"></div>
				+
			</a>

			<div class="clear"></div>
		</div>
		<div class="tab-pane" id="english">
			Características<br><textarea name="caracteristicas_en" cols="" rows="6" class="span12"><?=$this->item->caracteristicas_en?></textarea>
			Nota<br><textarea name="nota_en" cols="" rows="4" class="span12"><?=$this->item->nota_en?></textarea>
		</div>
	</div>
  
  <div class="control-group">
    <div class="form-actions">
	  <button type="submit" class="btn btn-primary">Guardar</button>
	  <a class="btn" href="./admin/<?=MOD?>/">Cancelar</a>
	  <a class="btn btn-danger pull-right" href="./admin/<?=MOD?>/eliminar/<?=$this->item->id?>">Eliminar</a>
	</div>
  </div>
  
</form>



<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Borrar Foto</h3>
  </div>
  <div class="modal-body">
    <img id="img_to_delete" />
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true" id="btnCancelPhotoDelete">Cancelar</button>
    <button class="btn btn-danger" id="btnPhotoDelete">Borrar</button>
  </div>
</div>



<script>

var to_delete;
var c = 0;
var abc = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","x","y","z"];

function toDelete ( id ) {
	to_delete = id;
	$("#img_to_delete").attr("src",'./images/inmuebles/'+id+'.jpg');
}

function readURL(input) {

	var img = $(input).parent().children();
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(img).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {

	$("#btnPhotoDelete").click(function(){
		$.post("./admin/inmuebles/editar/<?=$this->item->id?>",{photo:to_delete},function(){
			$("#photo"+to_delete).remove();
			$('#myModal').modal('hide');
		});
	});

	$("#btnCancelPhotoDelete").click(function(){
		to_delete = "";
		$("#img_to_delete").attr("src",'');
	});

	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})

	$('.numeric').numeric({ decimal : "." , negative : false });

	// SORT IMAGES
	$( "#sortable" ).sortable().disableSelection();


	$("input[type|='file']").change(function(){
		readURL(this);
	});

	$("#addPhoto").click(function(){
		$("#sortable").append('<li class="input_image">'+
			'<input type="hidden" name="fotos[]" value="'+abc[c]+'"><img src="" />'+
			'<a href="javascript:;" title="Eliminar esta foto" class="to_add"><span class="icon-trash icon-white"></span></a>'+
			'<input name="imagen[]" type="file"/>'+
			'<input class="input_portada" type="radio" value="'+abc[c]+'" name="portada" title="Imagen para mostrar en la lista de búsquedas" />'+
			'</li>');
		c++;
		$("li.input_image a.to_add").click(function(){
			$(this).parent().remove();
		});

		$("input[type|='file']").change(function(){
			readURL(this);
		});
	});
})
</script>