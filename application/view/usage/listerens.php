<script>
    $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();


</script>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<form method="get">
    <?php $current_page="listens";?>

    <div style="margin-top: 100px" class="tbl-header" >
        <table id="ensTable" cellpadding="0" cellspacing="0" border="0"   >
            <thead  >
            <tr >
                <th style="width: 126px"  >PPR</th>
                <th style="width: 126px"  >Nom</th>
                <th style="width: 126px" class ="">Prénom</th>
                <th style="width: 126px" class ="">النسب</th>
                <th style="width: 126px" class ="">الإسم</th>
                <th style="width: 126px" class ="">Specialité</th>
                <th style="width: 126px" class ="">Grade</th>
                <th style="width: 127px" class ="">Date Recrutement</th>
                <th style="width: 126px" class =" ">Action</th>

            </tr>
            </thead>
        </table>
    </div>
    <div style="min-height: 60px!important;max-height: 60px!important;" class="tbl-content" >
        <table  class="table-hover tbl-result " cellpadding="0" cellspacing="0" border="0" >
            <tbody>
            <tr>
            <h1 class="hidden">AucunReslult</h1>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="tbl-content">
        <table class="  table-hover tbl" cellpadding="0" cellspacing="0" border="0" class="">
            <?php $recordsCount=0; foreach($results as $listens): $recordsCount++;?>
            <tbody >
            <tr class="zoom-in record" id="<?php echo ''.$listens -> PPR;;?>">
                <td  style="width: 126px" class ="" ><?php echo $listens -> PPR; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens->NOM_FR; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens -> PRENOM_FR ; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens -> NOM_AR; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens -> PRENOM_AR ; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens -> FONCTION ; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens -> GRADE ; ?></td>
                <td style="width: 126px" class ="" ><?php echo $listens -> DATE_RECRUTE ;?></td>
                <td style="width: 127px;padding: 0px" >
                    <a class=" btn btn-default btn-sm btn-bg" title="Modifier" name="edit" href="<?php echo URL.'home/editEnsiegnant/'.htmlspecialchars($listens->PPR,ENT_QUOTES,"UTF-8");?>">
                        <span style="font-size: 10px" class="fa fa-edit "></span>
                    </a>
                    <button class=" btn btn-default btn-sm deleteEns btn-bg" title="Supprimer"  href="<?php echo URL;?>home/deleteEnsiegnant"  name="delete" >
                        <span style="font-size: 10px" class="fa fa-trash-o"></span>
                    </button>
                    <a class=" btn btn-default btn-sm btn-bg" title="Afficher" name="show" href="<?php echo URL.'home/enseignant/'.htmlspecialchars($listens->PPR,ENT_QUOTES,"UTF-8");?>">
                        <span style="font-size: 10px" class="fa fa-eye"></span>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            </tbody>
        </table>
    </div>



    <div style="float: right">


        <a class="btn btn-default btn-bg" title="Nouveau Ensiegnant" type="submit" href="<?php echo URL;?>home/newEnseignant">
            <span class="fa fa-plus fa-lg"></span>
        </a>

        <a class="btn btn-default btn-bg hidden" title="Exporter PDF"  type="submit" name="export"  value="Exporter PDF" href="<?php echo URL?>home/topdf"/>
        <span class="fa fa-save fa-lg"></span>
        </a>


    </div>
</form>

</div>