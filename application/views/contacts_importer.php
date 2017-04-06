
<div class="container-fluid container-fixed-lg">
	<div class="page-container">
		<div class="main-content">
			<div class="page-title">
				<div class="title-env">
					<h3>Contacts</h3>
				</div>
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1" >
						<li> <i class="fa-home"></i><a href="">Accueil</a> </li>
						<li> <a href="">Contacts</a> </li>
						<li class="active">Importer un contact</li>
					</ol>
				</div>
			</div>
			<div class="row">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <div class="panel-title">importer un contact</div>
		          <div class="panel-options">
		            <a href="#" data-toggle="panel">
		              <span class="collapse-icon">&ndash;</span>
		              <span class="expand-icon">+</span>
		            </a>
		          </div>
		      </div>
		      <form id="form1" method="post" class="validate" action="#">
		        <div class="panel-body">
		          <div class="row">
		            <div class="col-md-6">
		              <div class="form-group form-group-default">
		                <label class="control-label">Nom :</label>
		                <input type="file" class="form-control" name="fichier" data-validate="required" data-message-required="Veuillez choisir un fichier" />
		              </div>
		            </div>
		            <div class="col-md-6">
									<div class="form-group form-group-default form-group-default-select2 ">
										<label class="">Catégories / Sous-Catégories :</label>
											<select class="full-width" data-placeholder="Choisir une catégorie" data-init-plugin="select2" multiple id="select_category" name="id_cat[]" disabled>
												<option value=""></option>
		                </select>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="panel-footer text-right">
		          <button type="submit" class="btn btn-success">IMPORTER</button>
		        </div>
		      </form>
		    </div>
			</div>
		</div>
	</div>
	<script type="text/javascript">

	var id_ent = null;
	var urlSelect = 'select_all_cat';

	select ('#select_category', id_ent, urlSelect);

	</script>
