<?php
    echo '  <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Sala de espera</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Datos de su consulta</h2>
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                             
                                <!-- Select Establecimienti -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="enfermedad">¿Presenta alguna de estas enfermedades?</label>
                                        <select id="enfermedad" name="enfermedad" class="form-control">
                                            <option value="Diabetes">Diabetes</option>
											<option value="Hipertension">Hipertensión</option>
                                            <option value="Cardiovascular">Cardiovascular</option>
											<option value="Asma">Asma</option>
											<option value="Ninguna" selected>Ninguna</option>
										
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Some -->
                                 <!-- Select alergia -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="alergico">¿Alérgico a algun medicamento?</label>
                                        <select id="alergico" name="alergico" class="form-control">
                                            <option value="Si">Si</option>
											<option value="No" selected>No</option>
											
										
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="medicamento">Si es alérgico. Nombre el medicamento</label>
                                        <input id="medicamento" name="medicamento" type="text" placeholder="Nombre del medicamento" class="form-control input-md">
                                       
                                    </div>
                                </div>
                                
                                 <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" >Breve detalle motivo de la consulta</label>
                                          <textarea required id="motivo" placeholder="Ingrese motivo" class="form-control" ></textarea>     
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <!--    <button id="enviar-motivo" onclick="mostrarBox()" name="enviar-motivo"class="new-btn-d br-2">Enviar</button> 
                                      -->
                                        
                                        <input id="enviar_motivo" onclick="mostrarBox()" class="btn btn-primary submit"  value="Enviar" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        
                        <div class="well-title">
                            <h2>Recordatorios e información </h2>
                        
                     <h3 class="title">Sus asuntos pendientes</h3>
                <div class="col-md-5 col-sm-6">
					<div class="box-gallery">
						<img src="assets/images/gallery-01.jpg" alt="">
						<div class="box-content" id="asuntos-pendientes">
				 <h3 class="title"><button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#pendientes">Ver</button></h3>
						</div>
					</div>
				</div>
                            
                    <h3 class="title">Libro Sugerencias</h3>
				<div class="col-md-5 col-sm-6">
					<div class="box-gallery">
						<img src="assets/images/gallery-02.jpg" alt="">
						<div class="box-content" id="libro-sugerencias">		
				<h3 class="title"><button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#libro-sugerencia">Ir</button></h3>
							<ul class="icon">
														
							</ul>
						</div>
					</div>
				</div>
                           
                    <h3 class="title">Información general de utilidad</h3>        
                <div class="col-md-5 col-sm-6">
					<div class="box-gallery">
						<img src="assets/images/gallery-03.jpg" alt="">
						<div class="box-content">		
						<a href="https://www.minsal.cl/" target="_blank" ><h3 class="title"  >Ver</h3></a>	
							<ul class="icon">
													
							</ul>
						</div>
					</div>
				</div>
                        
                    </div>
				</div>
			</div>
		</div> ';



?>