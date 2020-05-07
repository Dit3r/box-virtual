<?php
    echo '   <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Establecimiento</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Seleccionar datos</h2>
                            
                        </div>
                        <form id="form_establecimientos" method="post">
                            <!-- Form start -->
                            <div class="row">
                             
                              
                                <!-- Select Establecimienti -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <h3>
                                          <i class="fa fa-hospital-o fa-2x" aria-hidden="true">
                                          </i>   Establecimiento 
                                             
                                      </h3> 
                                        
                                        
                                        <label>Región</label>
                                        
                                        <select id="region" name="region" class="form-control" onchange="cambiaComuna()">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                        
                                         <label>Comuna</label>
                                        <select id="comuna" name="comuna" class="form-control" onchange="cambiaEstablecimiento()">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                        
                                        
                                         <label>Nombre , Direccion</label>
                                        <select id="establecimiento" name="establecimiento" class="form-control">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                      <!--  
                                        <label>Direccion</label>
                                        <input id="direccion" name="direccion" class="form-control">
                                        -->
                                        
                                    </div>
                                </div>
                                
                                <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3>
                                       
                                            <i class="fa fa-vcard-o fa-2x" aria-hidden="true">
                                            </i>    Sector SOME 
                                        
                                        </h3> 
                                        <select id="sector" name="sector" class="form-control">
                                        <!--    <option value="Rojo">Rojo</option>
											<option value="Verde">Verde</option>
											<option value="Azul">Azul</option>
											<option value="Amarillo">Amarillo</option>  -->
										
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                  
                                          <input id="confirmar_establecimiento" onclick="mostrarSalaEspera()" class="btn btn-primary submit"  value="Confirmar" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
                
			</div>
		</div>        ';

?>