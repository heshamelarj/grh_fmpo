<form action="" method="post">
    <div style="margin-top: 70px" id="Tabs">
        <ul >
            <li><a  href="#infoPersonnel">Informations Personnels</a></li>
            <li><a  href="#infoProfessionnel">Informations Professionnelles</a></li>
        </ul>
    <div id="infoPersonnel" >
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Nom</label>
                <input  type= "text" class = "form-control" name = "nom" id=" nf" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Nom en Arabe</label>
                <input type= "text" class = "form-control" name = "nomAr" id=" prf" required value="" >
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Prénom</label>
                <input type= "text" class = "form-control" name = "prenom" id=" na" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Prénom en Arabe</label>
                <input type= "tArabeext" class = "form-control" name = "prenomAr" id=" pra" required value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <label class="label label-primary labels">Sexe</label>
            <div class="input-group input-group-sm">
                <div class="radio-inline">
                    <label><input  type="radio" name="sexe" value="m" >Male</label>
                </div>
                <div class="radio-inline">
                    <label><input  type="radio" name="sexe" value="f">Female</label>
                </div>
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">situation familial</label>
                <select  class="combobox" style="width: 310px" name = "setuationFamilial" >
                    <optgroup>
                        <option value= "Célébataire">  Célébataire </option>
                        <option value= "Marié(e)" >Marié(e) </option>
                        <option value= "Divorcé(e)" >Divorcé(e) </option>
                        <option value= "Veuf/veuve" >Veuf/veuve </option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Date naissaice</label>
                <input class = "form-control dp" type= "text" name = "dateNaissance" id=" dtn" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Lien de naissance</label>
                <input class = "form-control" type= "text" name = "lieuNaissance" id=" ln" required value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Adresse</label>
                <input class = "form-control" type= "text" name = "adresse" id=" adr" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Ville</label>
                <input class = "form-control" type= "text" name = "ville" id=" vll" required value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Tél</label>
                <input class = "form-control" type= "text" name = "tel" id=" tel" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Email</label>
                <input class = "form-control" type= "email" name = "email" id="miil" required value="">
            </div>
        </div>
        <div class="col-lg-6 div " >
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Fix</label>
                <input class = "form-control" type= "text" name = "fix" id=" fixx" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Fax</label>
                <input class = "form-control" type= "text" name = "fax" id="faxx" required value="">
            </div>
        </div>
    </div>
    <div id="infoProfessionnel" >
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">N°SOM</label>
                <input class = "form-control" type= "number" maxlength="8" name = "ppr" id=" ppr" placeholder="PPR" required value="">
                <input type= "hidden" name = "ppr_" id=" ppr" placeholder="PPR" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">CIN</label>
                <input class = "form-control" type= "text" name = "cin" id=" cin"  value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Fonction</label>
                <input class = "form-control" type= "text" name = "specialite" id=" sp" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Diplome</label>
                <input class = "form-control" type= "text" name = "diplome" id=" dp" required  value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Date Optition Diplome</label>
                <input class = "form-control dp " type= "text" name = "dateOptDip"id="do"  required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Date Recrutement :</label>
                <input class = "form-control dp" type= "text" name = "dateRecrut" id=" dr" required  value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Lieu Option Diplome</label>
                <input class = "form-control" type= "text" name = "lieuOptDip" id=" lo" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">PB</label>
                <input class = "form-control" type= "text" name = "pb" id=" pb" required value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Grade</label>
                <input class = "form-control" type= "text" name = "grade" id=" gr" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Date Nomination Grade</label>
                <input class = "form-control dp" type= "text" name = "dateNomGrade" id=" dgr" required value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Catégorie</label>
                <input class = "form-control" type= "text" name = "categorie" id=" cat" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Date nomination Catégorie</label>
                <input class = "form-control dp" type= "text" name = "dateNomCat" id=" dnmcat" required value="">
            </div>
        </div>
        <div class="col-lg-6 div">
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Echelon</label>
                <input class = "form-control" type= "text" name = "echelon" id=" cat" required value="">
            </div>
            <div class="input-group input-group-sm">
                <label class="label label-primary labels">Date effect Echelon</label>
                <input class = "form-control dp" type= "text" name = "dateEffEchelon" id=" deffechh" required value="">
            </div>
        </div>
    </div>
</div>

    <button title="Valider"   class="fa fa-save fa-3x  btn btn-default btn-md btn-bg" type="submit" name="valider" value="Valider"></button>




</form>
