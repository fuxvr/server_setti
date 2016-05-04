
        <div id="mws-container" class="clearfix">
            

            	<div class="mws-panel grid_4">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-list">Inserimento partecipante</span>
                    </div>
                    <div class="mws-panel-body">
                    	<form class="mws-form" action="DB/insert_db.php"   method="post">
                    		    <div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label>Partecipante :</label>
                    				<div class="mws-form-item large">
										<input type="hidden" name="evento" value= "<?php echo $_GET['idev']?>"/>
                    					<input type="hidden" name="myusername" value= "<?php echo $_SESSION['myusername']?>"/>
                    					<input name="partecipante" type="text" class="mws-textinput" /></div>
                                      </div>
                                    <div class="mws-form-row">
                                    <label>Note stampate :</label>
                    				<div class="mws-form-item large">
									<input name="notestampate" type="text" class="mws-textinput" /></div>
                                    </div>
                                     <div class="mws-form-row">
                                    <label>Note :</label>
                    				<div class="mws-form-item large">
									<input name="note" type="text" class="mws-textinput" /></div>
                                    </div>
                    			</div>                   			
                    		<div class="mws-button-row">
                    			<input type="submit" value="Inserisci" class="mws-button green" />
                    		</div>
                    	</form>
                    </div> 
                </div>
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-table-1">Lista partecipanti evento</span>
                    </div>
                    <div class="mws-panel-body">
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th>Partecipante</th>
                                    <th>Note</th>
                                    <th>Note Stampate</th>
                                    <th>Data inserimento</th>
									<th>Elimina</th>
                                    <th>Stampa</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php do { ?>
								 <tr class="gradeA">
								 	<td><?php echo $row_rs_lista['nome']; ?></td>
                                    <td><?php echo $row_rs_lista['note']; ?></td>
                                    <td><?php echo $row_rs_lista['notestampate']; ?></td>
                                    <td><?php echo $row_rs_lista['data']; ?></td>
									<?php  
									 echo "<td><a onClick=\"javascript: return confirm('Confermi la cancellazione ?');\" href='DB/delete_parteciapnte.php?id=".$row_rs_lista['id']."&idevento=".$_GET['idev']."'><img src='images/icone/ico2.jpg' alt='Elimina'/></a></td>";
										
									?>
                                    <td style="width: 160px">
									<?php  
										echo '<form action="stampa.php" target="_blank" name="azioni" method="post">';
										echo '<input name="idmedico"  type="hidden" value= ' .$row_rs_lista['id'] .' />';
										echo '<input name="idevento"  type="hidden" value= ' .$row_rs_lista['evento'] .' />';
										echo '<input name="nome"  type="hidden" value= "' .$row_rs_lista['nome'] .'"/>';
										echo '<input name="notestampate"  type="hidden" value= "' .$row_rs_lista['notestampate'] .'"/>';
										echo '<input name="1" type="image" src="images/icone/printer_add.png" alt="Stampa"/>';
										echo '</form>';
									?>
									</td> 
                                </tr>
                           		<?php } while ($row_rs_lista = mysql_fetch_assoc($rs_lista)); ?>
                            </tbody>
                        </table>
                    </div>
        
                </div>           
            <div id="mws-footer">
            	Copyright Your Website 2016. All Rights Reserved.
                <ul class="rubrica" id="rubrica">
               </ul>
            </div>
            
        </div>

