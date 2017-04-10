
<div class="container-fluid container-fixed-lg">
	<div class="page-container">
    <div class="main-content">
      <div class="page-title">
        <div class="title-env">
          <h3>Entreprises</h3>
        </div>
        <div class="breadcrumb-env">
          <ol class="breadcrumb bc-1" >
            <li> <i class="fa-home"></i><a href="<?=base_url();?>dashboard.html">Accueil</a> </li>
            <li class="active">Entreprises</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div data-pages="portlet" class="panel panel-default" id="portlet-basic">
          <div class="panel-heading">
            <div class="panel-title">Vos entreprises</div>
						<div class="panel-controls">
							<ul>
							<li><a data-toggle="collapse" class="portlet-collapse" href="#"><i
							class="portlet-icon portlet-icon-collapse"></i></a>
							</li>
						</ul>
					</div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr class="replace-inputs">
                    <th>Raison Sociale</th>
                    <th>Téléphone</th>
                    <th>E-Mail</th>
                    <th>Site Web</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
									<?php foreach ($result as $row) {
										echo '<tr>
														<td><a href="' . base_url() . 'entreprises/modifier/' . $row->id_ent . '">' . $row->raison_sociale . '</a></td>
														<td>' . $row->tel . '</td>
														<td>' . $row->email . '</td>
														<td>' . $row->site_web . '</td>
														<td>' . $row->cp . '</td>
														<td>' . $row->ville . '</td>
														<td>
															<div class="btn-group">
																<a class="btn btn-success" href="' . base_url() . 'entreprises/modifier/' . $row->id_ent . '">Modifier</a>
															</div>
															<div class="btn-group">
																 <a href="#" class="btn btn-success">Supprimer</a>
															</div>
														</td>
													</tr>';
									} ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Raison Sociale</th>
                      <th>Téléphone</th>
                      <th>E-Mail</th>
                      <th>Site Web</th>
                      <th>Code Postal</th>
                      <th>Ville</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Voulez-vous vraiment supprimer cette entreprise ?</h4>
            </div>
            <form action="#" method="POST">
              <input type="hidden" name="id">
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
