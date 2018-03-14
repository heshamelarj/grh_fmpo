<?php $current_page="listadmin";?>
 <div style="margin-top: 100px" class="tbl-header" >

            <table id="foncTable"  cellpadding="0" cellspacing="0" border="0" >
                <thead >
                <tr >
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">PPR</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">Nom</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">Prénom</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">النسب</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">الإسم</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">Fonction</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">Grade</th>
                    <th style="width: 127px" class ="col-lg-2 col-md-2 col-sm-2 col-xs-2">Date Recrutement</th>
                    <th style="width: 126px" class ="col-lg-1 col-md-1 col-sm-1 col-xs-1">Action</th>


                </tr>
                </thead>
            </table>
        </div>
        <form method="get">

            <div style="min-height: 60px!important;max-height: 60px!important;" class="tbl-content" >
                <table  class="table-hover tbl-result " cellpadding="0" cellspacing="0" border="0" >
                    <tbody>
                        <tr>
                            <h1 class="hidden" style="text-align: center;padding-bottom: 5px;padding-top: 5px">Aucun Result</h1>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tbl-content" >
                <table class="table-hover tbl " cellpadding="0" cellspacing="0" border="0" >



                    <?php foreach($results as $listens): ?>
                    <tr id="<?php echo ''.$listens -> PPR;?>" >
                        <td style="width: 126px" class id="<?php echo $listens -> PPR; ?>"  ="c2"><?php echo $listens -> PPR; ?></td>
                        <input type= "hidden" name = "ppr_" id=" ppr" placeholder="PPR" required value="<?php echo htmlspecialchars($listens->PPR,ENT_QUOTES,'UTF-8');?>">
                        <td style="width: 126px" class =""><?php echo $listens->NOM_FR; ?></td>
                        <td style="width: 126px" class =""><?php echo $listens -> PRENOM_FR ; ?></td>
                        <td style="width: 126px" class =""><?php echo $listens -> NOM_AR; ?></td>
                        <td style="width: 126px" class =""><?php echo $listens -> PRENOM_AR ; ?></td>
                        <td style="width: 126px" class =""><?php echo $listens -> FONCTION ; ?></td>
                        <td style="width: 126px" class =""><?php echo $listens -> GRADE ; ?></td>
                        <td style="width: 126px" class =""><?php echo $listens -> DATE_RECRUTE ;?></td>
                        <td style="width: 126px;padding: 0" class ="">
                            <a class="btn btn-default btn-sm btn-bg" name="edit" href="<?php  echo URL .'home/editAdmin/'. htmlspecialchars($listens->PPR,ENT_QUOTES,'UTF-8');?>">
                                <span style="font-size: 10px" class="fa fa-edit"></span>
                            </a>
                            <button class="btn btn-default btn-sm deleteFonc btn-bg" name="delete" href="">
                                <span style="font-size: 10px" class="fa fa-trash-o "></span>
                            </button>
                            <a  class="btn btn-default btn-sm btn-bg" name="show" href="<?php echo URL .'home/admin/'.htmlspecialchars($listens->PPR,ENT_QUOTES,'UTF-8');?>">
                                <span style="font-size: 10px" class="fa fa-eye"></span>
                            </a></td>
                        <?php endforeach;?>
                    </tr>

                </table>
            </div>

        </form>




    <div style="float: right">

        <a href="<?php echo URL;?>home/newadmin" class="btn btn-default btn-bg" type="submit" value="Nouveux" title="Nouveau Fonctionnaire">
            <span class="fa fa-plus fa-lg "></span>
        </a>
        <a href="<?php echo URL?>home/topdf" class="btn btn-default btn-bg hidden" type="submit" value="Exporter PDF" title="Exporter PDF">
            <span class="fa fa-save fa-lg "></span>
        </a>

    </div>
