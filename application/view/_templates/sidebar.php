<nav class="navbar   navbar-fixed-top" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavBar" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>
                <div  class="collapse navbar-collapse" id="myNavBar" >

                        <ul class="nav navbar-nav">
                             <li class="active"  >
                                 <a   class="home"href="<?php echo URL;?>home/index">
                                     <span class="fa fa-home fa-2x " title="Accueil"></span>
                                 </a>
                             </li>
                             <li class="dividerV"></li>
                            <li  >
                                <a  class="ensiegnant" style="height: 59px" href="<?php echo URL;?>home/listerens">
                                    <span>ESPACE ENSEIGNANT</span>
                                </a>
                            </li>
                            <li class="dividerV"></li>
                            <li   >
                                <a  class="admin" style="height: 59px" href="<?php echo URL;?>home/listAdmin">
                                    <span>ESPACE FONCTIONNAIRE</span>
                                </a>
                            </li>
<!--                            <li class="dividerV"></li>-->
                            <li  class="dropdown hidden">
                                <a  class="services" style="height: 59px"  href='#' class="dropdown-toggle" data-toggle="dropdown">
                                    <span>SERVICES</span>
                                <span class="caret"></span>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href='#' class="text-danger"><span>Attestation Du Travail</span></a></li>
                                    <li><a href='#' class="text-danger"><span>Dossier Complet</span></a></li>

                                </ul>
                            </li>

                        </ul>

                    <div>
                        <a  class="pull-right"   href='<?php echo URL;?>home/login'><span style="height: 59px;margin-left:10px  "  class="fa fa-sign-out fa-4x"  title="Déconnexion"></span></a>
                    </div>
                    <ul class="nav navbar-nav about">
                        <li class="dividerV"></li>
                        <li  class="about hidden">
                            <a style="height: 59px"  href='<?php echo URL?>home/about' class="" >
                                <span>A PROPOS</span>
                            </a>
                        </li>


                    </ul>

                    <div id="verticalDivider"></div>
                    <div id="searchDiv" class="<?php if((isset($current_page))&&( $current_page=='listens' || $current_page=='listadmin')) {echo 'active';}else {echo 'hidden';}?>">
                        <form method="post"   style="margin-top: 13px"  class="navbar-form navbar-right" role="search" >
                            <div class="form-group">
                                <input type="text" class="form-control" id="searchInput" placeholder="Rechercher Avec PPR" name="search_inp" style="height: 40px!important;">
                            </div>
                            <button style="height: 34px" id="btn_search" class="btn btn-default glyphicon glyphicon-search " type="submit" name="search_btn"></button>
                        </form>
                    </div>

                </div>
    </div>
</nav>

<script>
    //AutoComplet PPR


    $(function () {
        $("#searchInput").click(function () {

            $('#searchInput').autocomplete({
                source:function(request,response){
                    $.ajax({
                        url:'/GRH/home/returnPPRJsonData/',
                        dataType:'json',
                        data:{
                            term:request.term
                        },
                        success: function (data) {
                            response(data);
                        }
                    })
                }
            });
        });

    });


</script>