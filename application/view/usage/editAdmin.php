<form action="<?php echo URL;?>home/updateAdmin" method="post">

	<div style="margin-top: 70px" id="Tabs">
		<ul >
			<li><a  href="#infoPersonnel">Informations Personnels</a></li>
			<li><a  href="#infoProfessionnel">Informations Professionnelles</a></li>
		</ul>


		<div id="infoPersonnel" >
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">
					<label class="label label-primary labels">Nom</label>
					<input  type= "text" class = "form-control" name = "nom" id=" nf" required value="<?php echo htmlspecialchars($result->NOM_FR,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">
					<label class="label label-primary labels">النسب</label>
					<input type= "text" class = "form-control" name = "nomAr" id=" prf" required value="<?php echo htmlspecialchars($result->NOM_AR,ENT_QUOTES,'UTF-8');?>" >
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">
					<label class="label label-primary labels">Prénom</label>
					<input type= "text" class = "form-control" name = "prenom" id=" na" required value="<?php echo htmlspecialchars($result->PRENOM_FR,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">
					<label class="label label-primary labels">الإسم</label>
					<input type= "tArabeext" class = "form-control" name = "prenomAr" id=" pra" required value=" <?php echo htmlspecialchars($result->PRENOM_AR,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<label class="label label-primary labels">Sexe</label>
				<div class="input-group input-group-sm">
					<div class="radio-inline" style="margin-right: 0px!important;">
						<label><input  type="radio"  name="sexe" value="m" <?php  echo ($result->SEXE=='m')? "CHECKED":""?>>Homme</label>
					</div>
					<div class="radio-inline" style="margin-left: 100px!important;">
						<label"><input  type="radio"   name="sexe" value="f" <?php  echo ($result->SEXE=='f')? "CHECKED":""?>>Femme</label>
					</div>
				</div>
				<div class="input-group input-group-sm">
					<label class="label label-primary labels">situation familial</label>
					<select  class="combobox" style="width: 310px" name = "setuationFamilial" >
						<optgroup>
							<option value= "Célébataire"  <?php if(isset($result->SITUATION_FM) && $result->SITUATION_FM=='Célébataire' && !isset($_POST['update'])) {echo 'selected';}?>  >  Célébataire </option>
							<option value= "Marié(e)" <?php if(isset($result->SITUATION_FM) && $result->SITUATION_FM=='Marié(e)' && !isset($_POST['update'])) {echo 'selected';}?>>Marié(e) </option>
							<option value= "Divorcé(e)" <?php if(isset($result->SITUATION_FM) && $result->SITUATION_FM=='Divorcé(e)' && !isset($_POST['update'])) {echo 'selected';}?>>Divorcé(e) </option>
							<option value= "Veuf/veuve" <?php if(isset($result->SITUATION_FM) && $result->SITUATION_FM=='Veuf/veuve' && !isset($_POST['update'])) {echo 'selected';}?>>Veuf/veuve </option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Date naissaice</label>
					<input class = "form-control dp" type= "text" name = "dateNaissance" id=" dtn" required value="<?php echo htmlspecialchars($result->DATE_NAISSANCE,ENT_QUOTES,'UTF-8');?>">
				</div>



				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Lien de naissance</label>
					<input class = "form-control" type= "text" name = "lieuNaissance" id=" ln" required value="<?php echo htmlspecialchars($result->LIEU_NAISSANCE,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">


					<label class="label label-primary labels">Adresse</label>
					<input class = "form-control" type= "text" name = "adresse" id=" adr" required value="<?php echo htmlspecialchars($result->ADRESSE,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Ville</label>
					<input class = "form-control" type= "text" name = "ville" id=" vll" required value="<?php echo htmlspecialchars($result->VILLE,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Tél</label>
					<input class = "form-control" type= "text" name = "tel" id=" tel" required value="<?php echo htmlspecialchars($result->TELL,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Email</label>
					<input class = "form-control" type= "email" name = "email" id="miil" required value="<?php echo htmlspecialchars($result->EMAIL,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div " >
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Fix</label>
					<input class = "form-control" type= "text" name = "fix" id=" fixx" required value="<?php echo htmlspecialchars($result->FIX,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Fax</label>
					<input class = "form-control" type= "text" name = "fax" id="faxx" required value="<?php echo htmlspecialchars($result->FAX,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
		</div>
		<div id="infoProfessionnel" >
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">N°SOM</label>
					<input class = "form-control" type= "text" name = "ppr" id=" ppr" placeholder="PPR" required value="<?php echo htmlspecialchars($result->PPR,ENT_QUOTES,'UTF-8');?>">
					<input type= "hidden" name = "ppr_" id=" ppr" placeholder="PPR" required value="<?php echo htmlspecialchars($result->PPR,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">CIN</label>
					<input class = "form-control" type= "text" name = "cin" id=" cin"  value="<?php echo htmlspecialchars($result->CIN,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Fonction</label>
					<input class = "form-control" type= "text" name = "specialite" id=" sp" required value="<?php echo htmlspecialchars($result->FONCTION,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Diplome</label>
					<input class = "form-control" type= "text" name = "diplome" id=" dp" required  value="<?php echo htmlspecialchars($result->DIPLOME,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Date Optition Diplome</label>
					<input class = "form-control dp " type= "text" name = "dateOptDip"id="do"  required value="<?php echo htmlspecialchars($result->DATE_OPT_DIP,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Date Recrutement :</label>
					<input class = "form-control dp" type= "text" name = "dateRecrut" id=" dr" required  value="<?php echo htmlspecialchars($result->DATE_RECRUTE,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Lieu Option Diplome</label>
					<input class = "form-control" type= "text" name = "lieuOptDip" id=" lo" required value="<?php echo htmlspecialchars($result->LIEU_OPT,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">PB</label>
					<input class = "form-control" type= "text" name = "pb" id=" pb" required value="<?php echo htmlspecialchars($result->PB,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Grade</label>
					<input class = "form-control" type= "text" name = "grade" id=" gr" required value="<?php echo htmlspecialchars($result->GRADE,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Date Nomination Grade</label>
					<input class = "form-control dp" type= "text" name = "dateNomGrade" id=" dgr" required value="<?php echo htmlspecialchars($result->DATE_NM_GRD,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Catégorie</label>
					<input class = "form-control" type= "text" name = "categorie" id=" cat" required value="<?php echo htmlspecialchars($result->CATEGORIE,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Date nomination Catégorie</label>
					<input class = "form-control dp" type= "text" name = "dateNomCat"id=" dcat" required value="<?php echo htmlspecialchars($result->DATE_NM_CAT,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
			<div class="col-lg-6 div">
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Echelon</label>
					<input class = "form-control" type= "text" name = "echelon" id=" cat" required value="<?php echo htmlspecialchars($result->ECHELON,ENT_QUOTES,'UTF-8');?>">
				</div>
				<div class="input-group input-group-sm">

					<label class="label label-primary labels">Date effect Echelon</label>
					<input class = "form-control dp" type= "text" name = "dateEffEchelon" id=" dcat" required value="<?php echo htmlspecialchars($result->DATE_EFFECT_ECH,ENT_QUOTES,'UTF-8');?>">
				</div>
			</div>
		</div>

	</div>

	<button title="Mitre A Jour"   class="fa fa-save fa-3x  btn btn-default btn-md btn-bg " type="submit" name="update" value="Valider"></button>




</form>



