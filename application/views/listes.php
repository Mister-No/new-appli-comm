
<div class="container-fluid container-fixed-lg">
	<div class="page-container">
		<div class="main-content">
			<div class="page-title">
				<div class="title-env">
					<h3 >Listes</h3>
				</div>
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1" >
						<li> <i class="fa-home"></i><a href="">Accueil</a> </li>
						<li class="active">Listes</li>
					</ol>
				</div>
			</div>
			<div class="row">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <div class="panel-title">Vos Listes</div>
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
		            <table class="table table-striped table-bordered" id="tab_result">
		              <thead>
		                <tr class="replace-inputs">
		                  <th>Titre</th>
		                  <th>Catégories</th>
		                  <th>Nbr Email</th>
		                  <th>Actions</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td><a href="">row titre</a></td>
		                  <td>category</td>
		                  <td>nbre email</td>
		                  <td>
												<div class="btn-group">
                          <a class="btn btn-success" href="">Modifier</a>
                        </div>
												<div class="btn-group">
													 <a href="#" class="btn btn-success">Supprimer</a>
												</div>
		                  </td>
		                </tr>
		              </tbody>
		              <tfoot>
		                <tr>
		                  <th>Titre</th>
		                  <th>Catégories</th>
		                  <th>Nbr Email</th>
		                  <th>Actions</th>
		                </tr>
		              </tfoot>
		            </table>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="modal fade" id="modal-1">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h4 class="modal-title">Voulez-vous vraiment supprimer cette liste ?</h4>
		        </div>
		        <form action="#" method="POST">
		          <input type="hidden" name="id" id="id">
		          <div class="modal-body"></div>
		          <div class="modal-footer">
		            <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
		            <button type="submit" class="btn btn-info">SUPPRIMER</button>
		          </div>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
