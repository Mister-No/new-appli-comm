
<div class="container-fluid container-fixed-lg">
	<div class="page-container">
		<div class="main-content">
			<div class="page-title">
				<div class="title-env">
					<h3>Listes</h3>
				</div>
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1" >
						<li> <i class="fa-home"></i><a href="">Accueil</a> </li>
						<li> <a href="">Listes</a> </li>
						<li class="active">Modifier une liste</li>
					</ol>
				</div>
			</div>
		  <form id="form1" method="post" class="validate" action="#">
		    <input type="hidden" name="id" value=""/>
		    <div class="row">
		      <div class="col-md-12">
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <div class="panel-title">Modifier une liste</div>
		            <div class="panel-options">
		              <a href="#" data-toggle="panel">
		                <span class="collapse-icon">&ndash;</span>
		                <span class="expand-icon">+</span>
		              </a>
		            </div>
		          </div>
		          <div class="panel-body">
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label class="control-label">Titre :</label>
		                  <input type="text" class="form-control" name="titre" value="" data-validate="required" data-message-required="Veuillez saisir un titre" placeholder="Titre" />
		                </div>
		              </div>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-4 ">
		      <div class="panel panel-default">
		        <div class="panel-heading">
		          <div class="panel-title">row titre</div>
		          <div class="panel-options">
		            <input type="checkbox" name="id_cat[]" class="check_all" value="row id">
		              <a href="#" data-toggle="panel">
		                <span class="collapse-icon">&ndash;</span>
		                <span class="expand-icon">+</span>
		              </a>
		            </div>
		          </div>
		          <div class="panel-body">
		            <div class="list-group list-group-minimal">
		              <ul>
		                <li class="list-group-item">row titre
		                  <input type="checkbox" class="pull-right"  name="id_cat[]" value="">
		                </li>
		              </ul>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-12">
		        <button type="submit" class="btn btn-success pull-right">ENREGISTRER</button>
		      </div>
		    </div>
		  </form>
		</div>
	</div>
