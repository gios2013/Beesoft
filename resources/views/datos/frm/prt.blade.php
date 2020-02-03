<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">
 
				@if ( !empty ( $datos->id) )
 
					<div class="form-group">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="nombre" type="text" id="nombre" value="{{ $datos->nombre }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="correo" class="negrita">correo:</label> 
						<div>
							<input class="form-control" placeholder="4.50" required="required" name="correo" type="text" id="correo" value="{{ $datos-correo }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="acerca_de_mi" class="negrita">acerca de mi:</label> 
						<div>
							<input class="form-control" placeholder="40" required="required" name="acerca_de_mi" type="text" id="acerca_de_mi" value="{{ $datos->acerca_de_mi }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="img" class="negrita">Selecciona una imagen:</label> 
						<div>
						<input name="img" type="file" id="img">
					<br>
					<br>
 
							@if ( !empty ( $datos->img) )
 
								<span>Imagen Actual: </span>
								<br>
								<img src="../../../uploads/{{ $datos->img }}" width="200" class="img-fluid">
 
							@else
 
								Aún no se ha cargado una imagen para este producto
 
							@endif
 
						</div>
 
					</div>
 
					@else
 
					<div class="form-group">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="nombre" type="text" id="nombre" value="{{ $datos->nombre }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="correo" class="negrita">correo:</label> 
						<div>
							<input class="form-control" placeholder="4.50" required="required" name="correo" type="text" id="correo" value="{{ $datos-correo }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="acerca_de_mi" class="negrita">acerca de mi:</label> 
						<div>
							<input class="form-control" placeholder="40" required="required" name="acerca_de_mi" type="text" id="acerca_de_mi" value="{{ $datos->acerca_de_mi }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="img" class="negrita">Selecciona una imagen:</label>
						<div>
							<input name="img" type="file" id="img"> 
						</div>
					</div>
 
				@endif
 
				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('/datos') }}" class="btn btn-warning">Cancelar</a>
 
				<br>
				<br>
 
			</div>
		</section>
	</div>
</div>