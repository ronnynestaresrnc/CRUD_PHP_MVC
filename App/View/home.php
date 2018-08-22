
 <div class="container">
  	<!--row-->
	<div class="row justify-content-center">
		<!--col-->
		<div class="col ">
			<!--card-->
			<div class="card border-dark bg-dark text-white">
				<div class="card-header border ">
					Lista de Usuario
				</div>
				<div class="card-body border">
					<form class="form-inline " action="https://basededatosapp.000webhostapp.com/home/ver"  method="post">
						<div class="form-group">
							<input type="search" class="form-control mx-sm-2 " id="email_id" name="email_name" placeholder="Buscar">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-secondary "  value="ver" >Buscar</button>
						</div>
				
						<div class="mx-auto"></div>
					<div class="form-group">
                      <select class="custom-select">
                        <option value="">Escoger </option>
                        <option value="1">10</option>
                        <option value="2">25</option>
                        <option value="3">50</option>
                      </select>
					</div>
					</form>

					<div class="mb-3"></div>
					<!--TABLE RESPONSIVE-->
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Email</th>
									<th scope="col">Ciudad</th>
									<th scope="col">Dni</th>
									<th scope="col">Edad</th>
								</tr>
							</thead>

							<tbody>
												
	<?php 
	
$user = new user;
$user->mostrar();

	 ?>
								
								

							</tbody>
						</table>
					</div>
					<!-- fin table resposive-->
				</div>
			</div>
			<!-- fin card-->
		</div>
		<!-- fin col-->
	</div>
	<!-- fin row-->
  </div>
  
