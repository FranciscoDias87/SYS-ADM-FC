    <div class="container-fluid">

<? include ('tipos_post_sql.php'); ?>

		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
		<li class="breadcrumb-item">
		  <a href="?pag=painel&sec=index&vp=home">Painel</a>
		</li>
		<li class="breadcrumb-item active">Lançamentos</li>
		</ol>

		<div class="row overflow-auto">
			<div class="col-12">
<!--Ajuda alerta hide show-->
<script>
$(document).ready(function(){
	$( "#o_ajuda" ).click(function() {
	  $( "#ajuda" ).toggleClass( "d-none" );
	});
});
</script>
				<h3><span class="text-warning">Tipos</span> <small  class="text-muted" style="font-size:16px;">Aqui você insere, edita e deleta os Tipos. </small><button class="btn btn-sm btn-info" id="o_ajuda"><i class="fa fa-fw fa-question-circle"></i> Ajuda</button></h3>
				
				<div id="ajuda" class="alert alert-info alert-dismissible d-none" role="alert">
					<strong>Informação:</strong>	Para inserir ou editar Tipos e necessario que todos os campos sejam preenchidos.
				</div>

<? include ('tipos_modal_insert.php'); ?>

				<div class="input-group mb-3">
					<div class="input-group">
						<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#Modal_INSERT">
							<i class="fa fa-fw fa-plus"></i>Inserir novo item
						</button>
					</div>
				</div>

				<table class="table table-striped">
				  <thead>
					<tr class="bg-primary text-white">
					  <th scope="col">ID</th>
					  <th scope="col">DESCRIÇÂO</th>
					  <th scope="col">AÇÕES</th>
					</tr>
				  </thead>

				  <tbody>

<?
$sql_TIP = "SELECT * FROM lanc_tipos ORDER BY descricao ASC;";
//echo "$sql_TIP";
$result_TIP  = mysqli_query($connect, $sql_TIP);

while ($row_TIP  = mysqli_fetch_assoc($result_TIP )) {

	$VW_TIP_ID    = $row_TIP ['id_lanc_tipo'];
	$VW_TIP_E_ID  = $row_TIP ['id_empresa'];
	$VW_TIP_DESCR = $row_TIP ['descricao'];
	$VW_TIP_ATIVO = $row_TIP ['ativo'];

$TIP_ID = $_POST['TIP_ID'];

if ( $VW_TIP_ID=="$TIP_ID" ) { $BG_TR_L="bg-info text-white"; } else { $BG_TR_L=""; }

?>

					<tr class="<? echo "$BG_TR_L";?>">
					  <th scope="row"><? echo "$VW_TIP_ID";?></th>
					  <td><? echo "$VW_TIP_DESCR";?></td>
					  <td class="align-right" style="width:115px;">
					  
						<div class="float-left">
							<!-- Button trigger modal -->
							<a class="btn btn-sm btn-primary text-white" data-toggle="modal" data-target="#Modal_<? echo "$VW_TIP_ID";?>">
								<i class="fa fa-fw fa-edit"></i>
							</a>
						</div>
						
						<div class="float-right" style="width:10px;">&nbsp;</div>
						
						<div class="float-right">
							<!-- Button trigger modal -->
							<form action="?pag=painel&sec=index&vp=tipos" method="post" enctype="multipart/form-data">
							
								<input type="hidden" name="TIP_ID" value="<? echo "$VW_TIP_ID";?>" />
								
								<button type="submit" class="btn btn-sm btn-danger" name ="DELETAR">
									<i class="fa fa-fw fa-trash"></i>
								</button>
								
							</form>
						</div>

					  </td>
					</tr>
						<!-- Modal -->
<? include ('tipos_modal_update.php');?>
						<!-- Modal -->
<?
}
?>

				  </tbody>

				</table>
				
			</div><!-- col-12 -->
		</div><!-- row -->

	</div><!-- container-fluid -->