<div class="col-sm-10 col-sm-offset-1 section">
	<div class="row form-default">
		<div class="col-xs-12">
			<h2 ng-if="!editar.status">Agregar nuevos productos via .CSV</h2>

			<form action="{{url('/guardarCsv')}}" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="detail">
							<div class="form-group">
								<div class="images">
									<h5 ng-show="editar.imgShow">Seleccione archivo</h5>
									<input type="file" class="form-control" name="archivoCSV" required>
								
								</div>
							</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="buttons text-right">
							<input type="submit" class="btn btn-success" value="Registrar">
						</div>
					</div>
				</div>
		    </form>
	    </div>
	</div>
</div>
