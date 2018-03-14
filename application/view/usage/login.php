<div >
    <img id="logoMed"  class="img-responsive" src="<?php echo URL ?>img/med-logo.png"/>
    <img id="logoOffpt" class="img-responsive" src="<?php echo URL ?>img/offpt-logo.png"/>

</div>




            <div style="" class="login-page col-lg-6 col-md-6 col-sm-6 col-xs-10 ">
                <div  class="form col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <form action="<?php echo URL;?>home/signup" class="register-form" method="post">
                       

<!--                        <input id="pprAutoComplete" name="pprInscrit" type="text" placeholder="PPR">-->
                        <?php $results=$this->model->getAllPPR();?>
                        <div style="margin-right: 0px" class="">

                            <label class="label label-default">PPR</label>
                            <select style="width: 100px"  class="  " name="pprInscrit"   >
                                <optgroup class="">
                                    <?php foreach ($results as $result){?>
                                        <option class=" " value= "<?php echo htmlspecialchars($result->PPR,ENT_QUOTES,'UTF-8');?>"><?php echo htmlspecialchars($result->PPR,ENT_QUOTES,'UTF-8');?></option>
                                    <?php }?>
                                </optgroup>
                            </select>
                        </div>

                        <input name="userNamaInscrit" type="tex" placeholder="Nom Etulisateur">
                        <input name="passwordInscrit" type="password" placeholder="Mot De Passe">
                        <button name="inscrit">Inscrit Vous</button>
                    </form>

                    <form action="<?php echo URL;?>home/login" method="post" class="login-form">
                                <input style="" class="form-control loginInput" type="text" placeholder="Votre login" name="log_in" required>

                                <input style="" class="form-control loginInput" type="password" placeholder="Votre mot de passe" name="pass_word" required>

                            <h4 style="color: red;font-size: smaller" id="errorMessage"><?php  if(isset($errors)) echo $errors ?></h4>
                            <button style=""   class="btn btn-primary btn-sm pull-right button page-header btn-bg" type="submit" value="" name="sign_in">
                                <i class="fa fa-sign-in fa-2x"></i>
                            </button>
                        <p class="message">Inscrit Vous<a  href="#">Nouveau Compte</a></p>

                        </form>
                </div>


            </div>




