<form action="<?php echo URL;?>home/updateEnsiegnant" method="post">

	<div style="margin-top: 70px" id="Tabs">
		<ul >
			<li><a  href="#infoPersonnel">Informations Personnels</a></li>
			<li><a " href="#infoProfessionnel">Informations Professionnelles</a></li>
		</ul>


		<div id="infoPersonnel" >
			<div class="tbl-header">
				<table  id="infoPersonnal_1_TableHeader" cellpadding="0" cellspacing="0" border="0">
					<thead>
					<tr>
						<th  class ="">Nom</th>
						<th  class ="">النسب</th>
						<th  class ="">Prénom</th>
						<th  class ="">الإسم</th>
						<th  class ="">Sexe</th>
						<th  class ="">situation familial</th>
						<th  class ="">Date naissaice</th>

					</tr>
					</thead>
				</table>
			</div>
			<div  class="tbl-content" id="infoPersonnal_1_TableBody">
				<table   class="tabale-hover" cellpadding="0" cellspacing="0" border="0">
					<tbody>
					<tr>
						<td >
							<?php echo htmlspecialchars($result->NOM_FR,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->NOM_AR,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->PRENOM_FR,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->PRENOM_AR,ENT_QUOTES,'UTF-8');?>
						</td>

						<td >
							<?php echo htmlspecialchars($result->SEXE,ENT_QUOTES,'UTF-8');?>

						</td>
						<td >
							<?php echo htmlspecialchars($result->SITUATION_FM,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->DATE_NAISSANCE,ENT_QUOTES,'UTF-8');?>
						</td>



					</tr>
					</tbody>
				</table>
			</div>
			<div class="tbl-header">
				<table  id="infoPersonnal_2_TableHeader" cellpadding="0" cellspacing="0" border="0">
					<thead>
					<tr>
						<th class ="">Lien de naissance</th>
						<th class ="">Adresse</th>
						<th class ="">Ville</th>
						<th class ="">Tél</th>
						<th class ="">Email</th>
						<th class ="">Fix</th>
						<th class ="">Fax</th>
					</tr>
					</thead>
				</table>
			</div>
			<div  class="tbl-content" id="infoPersonnal_2_TableBody">
				<table   class="tabale-hover" cellpadding="0" cellspacing="0" border="0">
					<tbody>
					<tr>
						<td >
							<?php echo htmlspecialchars($result->LIEU_NAISSANCE,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->ADRESSE,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->VILLE,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->TELL,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->EMAIL,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->FIX,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->FAX,ENT_QUOTES,'UTF-8');?>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div id="infoProfessionnel" >
			<div class="tbl-header">
				<table  id="infoProfesionnel_1_TableHeader" cellpadding="0" cellspacing="0" border="0">
					<thead>
					<tr>
						<th  class ="">N°SOM</th>
						<th  class ="">CIN</th>
						<th  class ="">Fonction</th>
						<th  class ="">Diplome</th>
						<th  class ="">Date Optition Diplome</th>
						<th  class ="">Date Recrutement </th>
						<th  class ="">Lieu Option Diplome</th>
					</tr>
					</thead>
				</table>
			</div>
			<div  class="tbl-content" id="infoProfesionnel_1_TableBody">
				<table   class="tabale-hover" cellpadding="0" cellspacing="0" border="0">
					<tbody>
					<tr>
						<td >
							<?php echo htmlspecialchars($result->PPR,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->CIN,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->FONCTION,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->DIPLOME,ENT_QUOTES,'UTF-8');?>
						</td>

						<td >
							<?php echo htmlspecialchars($result->DATE_OPT_DIP,ENT_QUOTES,'UTF-8');?>

						</td>
						<td >
							<?php echo htmlspecialchars($result->DATE_RECRUTE,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->LIEU_OPT,ENT_QUOTES,'UTF-8');?>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="tbl-header">
				<table  id="infoProfesionnel_2_TableHeader" cellpadding="0" cellspacing="0" border="0">
					<thead>
					<tr>
						<th class ="">PB</th>
						<th class ="">Grade</th>
						<th class ="">Date Nomination Grade</th>
						<th class ="">Catégorie</th>
						<th class ="">Date nomination Catégorie</th>
						<th class ="">Echelon</th>
						<th class ="">Date effect Echelon</th>
					</tr>
					</thead>
				</table>
			</div>
			<div  class="tbl-content" id="infoProfesionnel_2_TableBody">
				<table   class="tabale-hover" cellpadding="0" cellspacing="0" border="0">
					<tbody>
					<tr>
						<td >
							<?php echo htmlspecialchars($result->PB,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->GRADE,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->DATE_NM_GRD,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->CATEGORIE,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->DATE_NM_CAT,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->ECHELON,ENT_QUOTES,'UTF-8');?>
						</td>
						<td >
							<?php echo htmlspecialchars($result->DATE_EFFECT_ECH,ENT_QUOTES,'UTF-8');?>
						</td>
					</tr>
					</tbody>
				</table>
			</div>

	</div>





</form>



