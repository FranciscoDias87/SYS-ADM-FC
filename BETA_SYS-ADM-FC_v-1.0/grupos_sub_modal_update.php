			<form action="<?=$_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">

				<div class="modal fade" id="Modal_<? echo "$VW_S_GRP_ID";?>" role="dialog" aria-labelledby="ModalLabel_<? echo "$VW_S_GRP_ID";?>" aria-hidden="true"><!-- On modal disable this tabindex="-1" for ckeditor fuction is ok-->
				  <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					  <div class="modal-header">

						<h6 class="modal-title" id="ModalLabel_<? echo "$VW_S_GRP_ID";?>">
							ALTERAR SUB GRUPO: <small class="text-muted">Preecha todos os dados do Sub Grupo</small><br />
							<small class="badge badge-warning">ID.: <? echo "$VW_S_GRP_ID";?></small>
						</h6>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						
						<input type="hidden" name="S_GRP_ID" value="<? echo "$VW_S_GRP_ID";?>" />
						
						<div class="card-body">
						
							<div class="card-title">

								<div class="input-group mb-3">
								  <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Descrição</span>
								  </div>
								  <input type="text" name="S_GRP_DESCR" value="<? echo "$VW_S_GRP_DESCR";?>" class="form-control" aria-label="Titulo" aria-describedby="basic-addon1">
								</div>

							</div>

						</div>

					  </div>
					  <div class="modal-footer">						
						<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-sm btn-primary" name="ALTERAR"><i class="fa fa-fw fa-save"></i> Atualizar</button>
					  </div>
					</div>
				  </div>
				</div>

			</form>