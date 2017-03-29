
<div class="container-fluid container-fixed-lg">
	<div class="page-container">
		<div class="main-content">
			<div class="page-title">
				<div class="title-env">
					<h3>Entreprises</h3>
				</div>
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1">
						<li> <i class="fa-home"></i><a href="">Accueil</a> </li>
						<li> <a href="">Entreprises</a>	</li>
						<li class="active">Ajouter une entreprise</li>
					</ol>
			  </div>
			 </div>
			 <div class="row">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <div class="panel-title">Ajouter une entreprise</div>
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
		                  <label class="control-label">Raison sociale :</label>
		                  <input type="text" class="form-control" name="raison_sociale" data-validate="required" data-message-required="Veuillez saisir une Raison Sociale" placeholder="Raison sociale" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">N° Siret :</label>
		                  <input type="text" class="form-control" name="siret" placeholder="N° Siret" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Téléphone :</label>
		                  <input type="text" class="form-control" name="tel"  placeholder="Téléphone" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Télécopie :</label>
		                  <input type="text" class="form-control" name="fax" placeholder="Télécopie" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Adresse électronique :</label>
		                  <input type="text" class="form-control" name="email" placeholder="Adresse électronique" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Site web :</label>
		                  <input type="text" class="form-control" name="site_web" placeholder="Site web" />
		                </div>
		              </div>
		              <div class="col-md-6">
		                <div class="form-group form-group-default">
		                  <label class="control-label">N° de voie :</label>
		                  <input type="text" class="form-control" name="num_voie" placeholder="N° de voie" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Nom de voie :</label>
		                  <input type="text" class="form-control" name="nom_voie" placeholder="Nom de voie" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Lieu-dit :</label>
		                  <input type="text" class="form-control" name="lieu_dit" placeholder="Lieu-dit" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Boîte postale :</label>
		                  <input type="text" class="form-control" name="bp" placeholder="Boîte postale" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Code postal :</label>
		                  <input type="text" class="form-control" name="cp" placeholder="Code postal" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Localité :</label>
		                  <input type="text" class="form-control" name="ville" placeholder="Localité" />
		                </div>
		                <div class="form-group form-group-default">
		                  <label class="control-label">Cedex :</label>
		                  <input type="text" class="form-control" name="cedex" placeholder="Cedex" />
		                </div>
		              </div>
		              <div class="col-md-12">&nbsp;</div>
		                <div class="col-md-6">
		                  <div class="form-group form-group-default">
		                    <label class="control-label">Entreprise de rattachement :</label>
		                    <select class="form-control" id="select_business" name="id_parent" >
		                      <option>Business 1</option>
		                      <option>Business 2</option>
		                      <option>Business 3</option>
		                      <option>Business 4</option>
		                    </select>
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group form-group-default">
		                    <label class="control-label">Catégories / Sous-Catégories :</label>
		                    <select class="form-control" multiple id="select_category" name="id_cat[]" >
		                      <option>Category 1</option>
		                      <option>Category 2</option>
		                      <option>Category 3</option>
		                      <option>Category 4</option>
		                    </select>
		                  </div>
		              </div>
		            </div>
		        </div>
		        <div class="panel-footer text-right">
		          <button type="submit" class="btn btn-success">AJOUTER</button>
		        </div>
		      </form>
		    </div>
			</div>
		</div>
	</div>
