	
	<div class="page-container">
		
		<div class="main-content">
	
			<div class="page-title">
			
				<div class="title-env">
					<h3 >Catégories</h3>
				</div>
			
				<div class="breadcrumb-env">
			
					<ol class="breadcrumb bc-1" >
						<li>
							<i class="fa-home"></i><a href="<?php echo base_url(); ?>dashboard.html">Accueil</a>
						</li>
						<li class="active">
							Catégorie
						</li>
					</ol>
						
				</div>
				
			</div>
    
 		
			<div class="row">
			     
                <?php foreach ($result as $row) { ?>
                <form action="/categories/export_csv.html" method="post">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <input type="checkbox" class="checkbox" style="float:left; margin-right:20px;" name="cat[]" value="<?php echo $row->id; ?>" > <?php echo $row->titre; ?>
                                </div>
                                
                                <div class="panel-options">

                                    <input type="checkbox" style="float:left; margin-right:10px;" class="check_all" > 
                                    <label for="check_all" style="float:left; margin-right:20px; color:#979898;">Tout cocher</label>

                                    <a href="<?php echo base_url(); ?>categories/modifier/<?php echo $row->id; ?>">
                                        <li class="fa fa-edit"></li>
                                    </a>

                                    <a href="#" data-toggle="panel">
                                        <span class="collapse-icon">&ndash;</span>
                                        <span class="expand-icon">+</span>
                                    </a>
                                    
                                </div>
                                    
                            </div>
                            
                            <div class="panel-body">
                                
                                <div class="list-group list-group-minimal">
                                    <?php 
                                        $result_cat = $this->My_categories->get_child_cat($row->id);
                                        foreach ($result_cat as $row_cat) {
                                    ?>
                                        <li class="list-group-item">
                                            <?php echo $row_cat->titre; ?> 
                                            <input type="checkbox" class="checkbox" style="float:right;" name="cat[]" value="<?php echo $row_cat->id; ?>">
                                        </li>
                                    <?php } ?>
                                </div>
                                
                                <button type="submit" class="btn btn-success">EXPORTER</button>
                            </div>
                        
                        </div>
                    </div>
                </form>
                <?php } ?>
            			
			</div>


            <script>

            $(".check_all"). click (function (){
                $(this).parent().parent().parent().find (".checkbox").prop('checked', $(this).prop("checked"));
            });
            

            function openModal(titre, id)
            {
                $(".modal").find ("#id").val(id);
                $(".modal-body").append (titre);
                $('#modal-1').modal('show', {backdrop: 'fade'});
            }

            </script>