

    <div style="margin-top: 70px" id="Tabs">
        <ul >
            <li><a  href="#infoPersonnel">Informations Personnels</a></li>
            <li><a  href="#infoProfessionnel">Informations Professionnelles</a></li>
            <li><a  href="#congeSection">Congé</a></li>
            <li><a  href="#gradeSection">Grade</a></li>
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
                        <th  class ="">Specialité</th>
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
        <!--CONGE SECTION-->


        <div id="congeSection">
            <div id="tabNewConge" style="width: 440px!important;background:rgba(0,0,0,0.2)!important;">
                <ul >
                    <li><a class="btn btn-default btn-sm btn-bg"   href="#newConge"><span class="fa fa-plus" title="Nouveau Conge"></span></a></li>
                </ul>
                <div id="newConge" style="width: 420px;background: #505050!important;">
                    <form    method="POST"   >
                        <div class=" form-group " >
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon">Type Conge</span>
                                <?php $results=$this->model->getTypesConge(); ?>
                                <select id="typeConge" style="min-width: 200px!important;max-width: 200px!important;"  class="combobox"    >
                                    <optgroup style="min-width: 200px!important;max-width: 200px!important;">
                                        <?php foreach ($results as $result){?>
                                            <option id="type_conge" value= "<?php echo htmlspecialchars($result->ID,ENT_QUOTES,'UTF-8');?>"><?php echo htmlspecialchars($result->typee,ENT_QUOTES,'UTF-8');?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class=" form-group " >
                            <div class="divNewConge input-group input-group-sm">
                                <span class="input-group-addon">Date Debut</span>
                                <input id="date_debut" style="width: 140px" class="input-sm  dp">
                            </div>
                        </div>
                        <div class=" form-group " >
                            <div class="divNewConge input-group input-group-sm">
                                <span class="input-group-addon">Date Fin</span>
                                <input id="date_fin" style="width: 140px" class="input-sm  dp">
                            </div>
                        </div>
                        <div class=" form-group " >
                            <div class="divNewConge input-group input-group-sm">
                                <span class="input-group-addon">Nombre Jours</span>
                                <input type="number" id="nbr_jr"   style="width: 140px" class="input-sm">
                            </div>
                        </div>
                        <div  class="form-group " >
                            <div class="divNewConge input-group input-group-sm">
                                <span class="input-group-addon">Date Reprise</span>
                                <input id="date_reprise" style="width: 140px" class="input-sm  dp">
                            </div>
                        </div>
                        <div  class="form-group " >
                            <div class="divNewConge input-group input-group-sm">
                                <span class="input-group-addon">Année</span>
                                <input id="annee" type="number" style="width: 140px" class="input-sm  ">
                            </div>
                        </div>
                        <button type="submit" style="width: 300px" title="Enregistre" class="btn btn-default btn-md " id="add_Conge" ><i class="fa fa-floppy-o fa-2x"></i></button>
                    </form>
                </div>
            </div>
            <div id="showConges">
                <div class="tbl-header">
                    <table  id="congeTable" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th style="width: 158px" class ="">Type Congé</th>
                            <th style="width: 158px" class ="">Date Début</th>
                            <th style="width: 158px" class ="">Date Fin</th>
                            <th style="width: 158px" class ="">Nombre Jours</th>
                            <th style="width: 158px" class ="">Date Reprise</th>
                            <th style="width: 158px" class ="">Année</th>
                            <th style="width: 158px" class ="">Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div id="conge_tbl_content" class="tbl-content">

                    <table class="table-hover" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                        <?php


                                foreach($resultConges AS $resultConge){ $counterButtons++;$counterPopups++;

                        ?>
                            <tr id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8');?>">
                                <td style="width: 158px"><?php echo htmlspecialchars($resultConge->typee,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultConge->DATE_DEBUT,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultConge->DATE_FINE,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultConge->NBR_JOURS,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultConge->DATE_REPRISE,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultConge->ANNEE,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px" href="#<?php echo 'position'.$counterButtons?>" class="td" id="<?php echo 'position'.$counterButtons?>">
                                    <a id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>" class="btn btn-default btn-sm click btn-bg editConge"  title="Modifier" name="editConge" href="#<?php echo 'dialog'.$counterPopups;?>"> <span class="fa fa-edit "></span></a>
                                    <div  style="background-color: #4E4E4E;" class="hidden editCongePopup" id="<?php echo 'dialog'.$counterPopups;?>">
                                        <form  class="form-inline dialog">
                                            <div class=" form-group dialog " >
                                                <div class="input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Type Conge</span>
                                                    <?php
                                                    $results=$this->model->getTypesConge();
                                                    $resultConge=$this->model->getConge($resultConge->ID);
                                                    ?>

                                                    <select style="width: 300px"  class="combobox dialog type_conge" id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>"  >
                                                        <optgroup class="dialog">
                                                            <?php foreach ($results as $result){?>
                                                                <option class="dialog type_conge" value= "<?php echo htmlspecialchars($result->ID,ENT_QUOTES,'UTF-8');?>"><?php echo htmlspecialchars($result->typee,ENT_QUOTES,'UTF-8');?></option>
                                                            <?php }?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Date Debut</span>
                                                    <input id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>" style="width: 140px" class="input-sm  dp dialog date_debut" value="<?php echo htmlspecialchars($resultConge->DATE_DEBUT,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div class=" form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Date Fin</span>
                                                    <input id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>" style="width: 140px" class="input-sm  dp dialog date_fin" value="<?php echo htmlspecialchars($resultConge->DATE_FINE,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div class=" form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Nombre Jours</span>
                                                    <input type="number" id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>" style="width: 140px" class="input-sm dialog nbr_jr" value="<?php echo htmlspecialchars($resultConge->NBR_JOURS,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div  class="form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Date Reprise</span>
                                                    <input id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>" style="width: 140px" class="input-sm  dp dialog date_reprise" value="<?php echo htmlspecialchars($resultConge->DATE_REPRISE,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div  class="form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Année</span>
                                                    <input type="number" id="<?php echo htmlspecialchars($resultConge->ID,ENT_QUOTES,'UTF-8') ?>" style="width: 140px" class="input-sm  dialog annee" value="<?php echo htmlspecialchars($resultConge->ANNEE,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <button type="submit" style="width: 340px!important;" title="Enregistre Les Modification" class="btn btn-default btn-md dialog btn-bg save" href="<?php echo URL;?>home/updateConge"><i class="fa fa-floppy-o fa-2x"></i></button>
                                        </form>
                                    </div>


                                    <a class="btn btn-default btn-sm click1 btn-bg deleteConge"  title="Supprimer" id="deleteConge" name="deleteConge" href="#<?php echo 'confirm'.$counterPopups;?>">
                                        <span class="fa fa-trash-o "></span>
                                    </a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>

                </div>
                <div>

            </div>
        </div>
            </div>
        <!--GRADE SECTION-->
        <div id="gradeSection">
            <div id="tabNewGrade" style="width: 440px!important;background:rgba(0,0,0,0.2)!important;">
                <ul >
                    <li><a class="btn btn-default btn-sm btn-bg"  href="#newGrade"><span class="fa fa-plus" title="Nouveau Grade"></span></a></li>
                </ul>
                <div id="newGrade" style="width: 420px;background: #505050!important;">
                    <form  class="">
                        <div class=" form-group " >
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon">Grade</span>
                                <input id="grade" style="width: 140px" class="input-sm">

                            </div>
                        </div>
                        <div class=" form-group " >
                            <div class="divNewConge input-group input-group-sm">
                                <span class="input-group-addon">Date Nomination Grade</span>
                                <input id="date_nm_grd" style="width: 140px" class="input-sm  dp">
                            </div>
                        </div>
                        <div class=" form-group " >
                            <div class=" input-group input-group-sm">
                                <span class="input-group-addon">Catégorie</span>
                                <input id="categorie" style="width: 140px" class="input-sm ">
                            </div>
                        </div>
                        <div class=" form-group " >
                            <div class=" input-group input-group-sm">
                                <span class="input-group-addon">Date Nomination Catégorie</span>
                                <input id="date_nm_cat" style="width: 140px" class="input-sm  dp">
                            </div>
                        </div>
                        <div  class="form-group " >
                            <div class=" input-group input-group-sm">
                                <span class="input-group-addon">Échelon</span>
                                <input id="echelon" style="width: 140px" class="input-sm">
                            </div>
                        </div>
                        <div  class="form-group " >
                            <div class=" input-group input-group-sm">
                                <span class="input-group-addon">Date Effect Échelon</span>
                                <input id="date_effect_ech" style="width: 140px" class="input-sm  dp">
                            </div>
                        </div>
                        <button id="add_Grade" type="submit" style="width: 340px" title="Enregistre" class="btn btn-default btn-md btn-bg"><i class="fa fa-floppy-o fa-2x"></i></button>
                    </form>
                </div>
            </div>
            <div id="showGrades">
                <div class="tbl-header">
                    <table class="" id="gradeTable" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th style="width: 158px" class ="">Grade</th>
                            <th style="width: 158px" class ="">Date Nomination Grade</th>
                            <th style="width: 158px" class ="">Catégorie</th>
                            <th style="width: 158px" class ="">Date Nomination Catégorie</th>
                            <th style="width: 158px" class ="">Échelon</th>
                            <th style="width: 158px" class ="">Date Effect Échelon</th>
                            <th style="width: 158px" class ="">Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table class="table-hover" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                        <?php $counterDatepickers=0; foreach($resultGrades AS $resultGrade){ $counterButtons++;$counterPopups++;$counterDatepickers++;?>
                            <tr id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>">
                                <td style="width: 158px"><?php echo htmlspecialchars($resultGrade->GRADE,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultGrade->DATE_NM_GRD,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultGrade->CATEGORIE,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultGrade->DATE_NM_CAT,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultGrade->ECHELON,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px"><?php echo htmlspecialchars($resultGrade->DATE_EFFECT_ECH,ENT_QUOTES,'UTF-8');?></td>
                                <td style="width: 158px" href="#<?php echo 'position'.$counterButtons?>" class="td" id="<?php echo 'position'.$counterButtons?>">
                                    <a id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" class="btn btn-default btn-sm clickGrade btn-bg edit_grade" title="Modifier" name="editGrade" href="#<?php echo 'dialog'.$counterPopups;?>">
                                        <span class="fa fa-edit "></span>
                                    </a>

                                    <div  style="background-color: #4E4E4E;" class="hidden divgradee" id="<?php echo 'dialog'.$counterPopups;?>">
                                        <form  class="form-inline dialog">
                                            <div class=" form-group dialog " >
                                                <div class="input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Grade</span>
                                                    <input id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" style="width: 200px" class="input-sm  dialog grade" value="<?php echo htmlspecialchars($resultGrade->GRADE,ENT_QUOTES,'UTF-8');?>">

                                                </div>
                                            </div>
                                            <div class=" form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Date Nomination Grade</span>
                                                    <input id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" style="width: 200px"  class="input-sm  dialog  dp date_nm_grd" value="<?php echo htmlspecialchars($resultGrade->DATE_NM_GRD,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div class=" form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Catégorie</span>
                                                    <input id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" style="width: 200px"  class="input-sm dialog categorie" value="<?php echo htmlspecialchars($resultGrade->CATEGORIE,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div class=" form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Date Nomination Catégorie</span>
                                                    <input id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" style="width: 200px"  class="input-sm  dialog  dp date_nm_cat" value="<?php echo htmlspecialchars($resultGrade->DATE_NM_CAT,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div  class="form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Échelon</span>
                                                    <input id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" style="width: 200px" class="input-sm  dialog echelon" value="<?php echo htmlspecialchars($resultGrade->ECHELON,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <div  class="form-group dialog" >
                                                <div class="divNewConge input-group input-group-sm dialog">
                                                    <span class="input-group-addon dialog">Date Effect Échelon</span>
                                                    <input id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" style="width: 200px" class="input-sm  dialog  dp date_effect_ech" value="<?php echo htmlspecialchars($resultGrade->DATE_EFFECT_ECH,ENT_QUOTES,'UTF-8');?>">
                                                </div>
                                            </div>
                                            <button id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" type="submit" style="width: 400px" title="Enregistre Les Modification" class="btn btn-default btn-md dialog btn-bg update_grade" href="<?php echo URL;?>home/updateGrade"><i class="fa fa-floppy-o fa-2x"></i></button>
                                        </form>
                                    </div>


                                    <a  class="btn btn-default btn-sm click1Grade btn-bg deleteGrade"   title="Supprimer" id="<?php echo htmlspecialchars($resultGrade->ID,ENT_QUOTES,'UTF-8');?>" name="deleteGrade" href="#<?php echo 'confirm'.$counterPopups;?>">
                                        <span class="fa fa-trash-o "></span>
                                    </a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>

                </div>


            </div>
        </div>



<script type="application/javascript">

    function editConge() {
        var dialog = '';
        $('.click').click(function () {
            console.log('Click');

            dialog = $('.click').attr('href');
            $(dialog).removeClass('hidden');
            $(dialog).dialog({
                width: 400,
                title: 'Modifier Congé',
                modal: true,
                position: {
                    of: "#navbar",
                    my: "left top",
                    at: "left bottom",
                    collision: 'none'
                },
                create: function (event, ui) {
                    $(event.target).parent().css('position', 'fixed');
                }, show: {effect: 'fade', speed: '3000'}
            });


        });
    }
    function editGrade(){
        var dialog='';
        /*GRADES*/
        $('.clickGrade').click(function() {
            console.log('ClickGrade');

            dialog = $('.clickGrade').attr('href');
            $(dialog).removeClass('hidden');
            $(dialog).dialog({
                width: 440,
                title: 'Modifier Grade',
                modal: true,
                position: {
                    of: "#navbar",
                    my: "left top",
                    at: "left bottom",
                    collision: 'none'
                },
                create: function (event, ui) {
                    $(event.target).parent().css('position', 'fixed');
                }, show: {effect: 'fade', speed: '3000'}
            });
        })
    }








    //Delete Confirmation modal
    function deleteConfirmation(){
        var dialog='';
        $(".click1" ).click(function () {
            console.log('Click1');

            dialog= $(".click1").attr('href');
            $(dialog).removeClass('hidden');
            $(dialog).dialog({
                width:345,
                title:'Supprimer Congé',
                modal:true,
                position:{
                    of:"#navbar",
                    my:"left top",
                    at:"left bottom",
                    collision:'none'
                },
                create: function (event,ui) {
                    $(event.target).parent().css('position','fixed');
                    $(event.target).parent().css('background-color','#4E4E4E');
                    $(event.target).parent().css('color','#129792');
                },show:{effect:'fade',speed:'3000'}
            });

    });
        dialog='';
        /*GRADES*/
        $(".click1Grade" ).click(function () {
            console.log('Click1Grade');

            dialog= $(".click1Grade").attr('href');
        $(dialog).removeClass('hidden');
        $(dialog).dialog({
            width:345,
            title:'Supprimer Grade',
            modal:true,
            position:{
                of:"#navbar",
                my:"left top",
                at:"left bottom",
                collision:'none'
            },
            create: function (event,ui) {
                $(event.target).parent().css('position','fixed');
                $(event.target).parent().css('background-color','#4E4E4E');
                $(event.target).parent().css('color','#129792');
            },show:{effect:'fade',speed:'3000'}
        });
    });
    }




    function addCongee()
    {
        $('#add_Conge').click(function () {


            var ppr_='<?php echo $ppr_;?>';
            var type_conge=$('#type_conge').val();
            var date_debut=$('#date_debut').val();
            var date_fin=$('#date_fin').val();

            var nbr_jr=4;
            var date_reprise=$('#date_reprise').val();
            var annee=$('#annee').val();

            $.ajax({
                type: 'post',
                url: '/GRH/home/addCongee/',
                data: {ppr: ppr_,type_conge:type_conge,date_debut:date_debut,date_fin:date_fin,nbr_jr:nbr_jr,date_reprise:date_reprise,annee:annee},
                success: function () {

                  alert("Ajouté Avec Successe ");

                }
            });


            $(document).reload();


        });
    }

    //New Grade

    function addGrade()
    {
        $('#add_Grade').click(function () {


            var ppr_='<?php echo $ppr_;?>';
            var grade=$('#grade').val();

            var date_nm_grd=$('#date_nm_grd').val();
            var categorie=$('#categorie').val();

            var date_nm_cat=$('#date_nm_cat').val();

            var echelon=$('#echelon').val();

            var date_effect_ech=$('#date_effect_ech').val();
            console.log('ppr:'+ppr_);
            console.log('grade:'+grade);
            console.log('date_nm_grd:'+date_nm_grd);
            console.log('categorie:'+categorie);
            console.log('date_nm_cat:'+date_nm_cat);
            console.log('echelon:'+echelon);
            console.log('date_effect_ech:'+date_effect_ech);

            $.ajax({
                type: 'post',
                url: '/GRH/home/addGrade/',
                data: {ppr: ppr_,grade:grade,date_nm_grd:date_nm_grd,categorie:categorie,date_nm_cat:date_nm_cat,echelon:echelon,date_effect_ech:date_effect_ech},
                success: function () {

                    alert("Ajouté Avec Successe ");

                }
            });

            $(document).reload();



        });
    }















</script>



