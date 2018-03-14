<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {try {$this->db = $db;
        } catch (PDOException $e) {exit('Database connection could not be established.');}}
    /*AUTHENTIFICATIONS*/
      public function login($log_in,$pass_word) 
      {$query = "SELECT LOG_IN,PASS_WORD  FROM compte WHERE LOG_IN=:log_in AND PASS_WORD=:pass_word LIMIT 1";
        $result = $this->db->prepare($query);
        $params = array(':log_in' => $log_in,':pass_word' => $pass_word);
        $result->execute($params);
        return $result->fetch();}

    public function signup($ppr_,$user_name,$pass_word)
    {$query="INSERT INTO compte(LOG_IN,PASS_WORD,PPR) VALUES(:user_name,:pass_word,:ppr)";
        $result=$this->db->prepare($query);
        $params=array(':user_name' => $user_name,':pass_word' => $pass_word,':ppr'=>$ppr_);
        $result->execute($params);}

    public function search($ppr)
    {$query = "SELECT
                f.PPR,i.NOM_FR,i.PRENOM_FR,i.NOM_AR,i.PRENOM_AR,f.TYPE_F,f.FONCTION,g.GRADE,f.DATE_RECRUTE
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.PPR LIKE '%".$ppr."%'";
        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetch();}

    public  function getAllPPR()
    {
        $query = "SELECT f.PPR FROM fonctionnaire f";
            $result = $this->db->prepare($query);
            $result->execute();
            return $result->fetchAll();
            }
    /*FONCTIONNAIRE*/
    public function addAdmin($ppr,$cin,$nom,$prenom,$nomAr,$prenomAr,$sexe,$setuationF,$dateNais,$lieuNais,$adresse,$ville,$tel,$email,$fix,$fax,$specialite,$diplome,$pb,$dateOptDip,$lieuOpt,$dateRecrut,$grade,$dateNomGrade,$categorie,$dateNomCat,$echelon,$dateEffEchelon,$type_f)
    {// insert part of fonctionnaire
        $type_f=2;
        $query = "INSERT INTO fonctionnaire(PPR,FONCTION,DIPLOME,PB,DATE_OPT_DIP,LIEU_OPT,DATE_RECRUTE,TYPE_F) VALUES(:ppr,:specialite,:diplome,:pb,:dateOptDip,:lieuOpt,:dateRecrut,:type_f)";
        $resultF = $this->db->prepare($query);
        $parameters = array(':ppr' => $ppr, ':specialite' => $specialite,':diplome' => $diplome,':pb' => $pb,':dateOptDip' => $dateOptDip,':lieuOpt' => $lieuOpt,':dateRecrut' => $dateRecrut,':type_f' => $type_f);
        $resultF->execute($parameters);
        // insert part of info_personnel
        $query = "INSERT INTO info_personnel(CIN,NOM_FR,NOM_AR,PRENOM_FR,PRENOM_AR,SEXE,DATE_NAISSANCE,LIEU_NAISSANCE,ADRESSE,VILLE,TELL,FIX,FAX,EMAIL,PPR,SITUATION_FM) VALUES(:cin,:nom,:nomAr,:prenom,:prenomAr,:sexe,:dateNais,:lieuNais,:adresse,:ville,:tel,:fix,:fax,:email,:ppr,:setuationF)";
        $resultIP = $this->db->prepare($query);
        $parameters = array(':cin' => $cin, ':nom' => $nom, ':nomAr'=> $nomAr, ':prenom'=> $prenom, ':prenomAr'=> $prenomAr, ':sexe'=> $sexe, ':dateNais'=> $dateNais, ':lieuNais'=> $lieuNais, ':adresse'=> $adresse, ':ville'=> $ville, ':tel'=> $tel, ':fix'=> $fix, ':fax'=> $fax, ':email'=> $email, ':ppr'=> $ppr, ':setuationF'=> $setuationF);
        $resultIP->execute($parameters);
        // insert part of grade
        $query = "INSERT INTO grade(GRADE,DATE_NM_GRD,CATEGORIE,DATE_NM_CAT,ECHELON,DATE_EFFECT_ECH,PPR) VALUES(:grade,:dateNomGrade,:categorie,:dateNomCat,:echelon,:dateEffEchelon,:ppr)";
        $resultG = $this->db->prepare($query);
        $parameters = array(':grade' => $grade,':dateNomGrade' => $dateNomGrade,':categorie' => $categorie,':dateNomCat' => $dateNomCat,':echelon' => $echelon,':dateEffEchelon' => $dateEffEchelon,':ppr' => $ppr);
        $resultG->execute($parameters);}
    //get All Admins
    public function getAllAdmins()
    {
        $query = "SELECT 
                f.PPR,i.NOM_FR,i.PRENOM_FR,i.NOM_AR,i.PRENOM_AR,f.TYPE_F,f.FONCTION,g.GRADE,f.DATE_RECRUTE 
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.TYPE_F=2";
        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll();}
    /*Get Specific Admin by PPR*/
    //for list
    public function getAdminList($ppr_)
    {$query = "SELECT
                f.*,i.*,g.*
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.TYPE_F=2 AND f.PPR='".$ppr_."' LIMIT 1";
        $result = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $result->execute($parameters);
        return $result->fetchAll();}
    //for edit
    public function getAdminEdit($ppr_)
    {$query = "SELECT
                f.*,i.*,g.*
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.TYPE_F=2 AND f.PPR='".$ppr_."' LIMIT 1";
        $result = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $result->execute($parameters);
        return $result->fetch();}

    public function updateAdmin($ppr_,$cin,$nom,$prenom,$nomAr,$prenomAr,$sexe,$setuationF,$dateNais,$lieuNais,$adresse,$ville,$tel,$email,$fix,$fax,$specialite,$diplome,$pb,$dateOptDip,$lieuOpt,$dateRecrut,$grade,$dateNomGrade,$categorie,$dateNomCat,$echelon,$dateEffEchelon)
    {// update fonctionnaire
        $updateQueryFonctionnaire = "UPDATE fonctionnaire  SET FONCTION= :specialite,  DIPLOME= :diplome,  PB= :pb,  DATE_OPT_DIP= :dateOptDip,  LIEU_OPT= :lieuOpt,  DATE_RECRUTE= :dateRecrut WHERE PPR = :ppr_";
        $resultF = $this->db->prepare($updateQueryFonctionnaire);
        $parameters = array(':ppr_' => $ppr_, ':specialite' => $specialite,':diplome' => $diplome,':pb' => $pb,':dateOptDip' => $dateOptDip,':lieuOpt' => $lieuOpt,':dateRecrut' => $dateRecrut);
        $resultF->execute($parameters);
        //update info_personnel
        $updateQueryInfoPersonnel = "UPDATE info_personnel SET CIN = :cin, NOM_FR = :nom, PRENOM_FR = :prenom, NOM_AR = :nomAr, PRENOM_AR = :prenomAr, SEXE = :sexe, SITUATION_FM = :setuationF, DATE_NAISSANCE = :dateNais,  LIEU_NAISSANCE= :lieuNais,ADRESSE= :adresse,  VILLE= :ville,  TELL= :tel,  EMAIL= :email,  FIX= :fix,  FAX= :fax WHERE PPR = :ppr_";
        $resultIP = $this->db->prepare($updateQueryInfoPersonnel);
        $parameters = array(':cin' => $cin, ':nom' => $nom, ':nomAr'=> $nomAr, ':prenom'=> $prenom, ':prenomAr'=> $prenomAr, ':sexe'=> $sexe, ':dateNais'=> $dateNais, ':lieuNais'=> $lieuNais, ':adresse'=> $adresse, ':ville'=> $ville, ':tel'=> $tel, ':fix'=> $fix, ':fax'=> $fax, ':email'=> $email, ':ppr_'=> $ppr_, ':setuationF'=> $setuationF);
        $resultIP->execute($parameters);
        //update grade
        $updateQueryGrade = "UPDATE grade SET  GRADE= :grade,  DATE_NM_GRD= :dateNomGrade,  CATEGORIE= :categorie,  DATE_NM_CAT= :dateNomCat,  ECHELON= :echelon, DATE_EFFECT_ECH=:dateEffEchelon WHERE PPR = :ppr_";
        $resultG = $this->db->prepare($updateQueryGrade);
        $parameters = array(':grade' => $grade,':dateNomGrade' => $dateNomGrade,':categorie' => $categorie,':dateNomCat' => $dateNomCat,':echelon' => $echelon,':dateEffEchelon' => $dateEffEchelon,':ppr_' => $ppr_);
        $resultG->execute($parameters);}

    public function deleteAdmin($ppr_)
    {$query = "DELETE FROM fonctionnaire WHERE PPR = :ppr_ AND TYPE_F=2";
        $result = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $result->execute($parameters);}
    /*ENSIEGNANT*/
    public function addEnseignant($ppr,$cin,$nom,$prenom,$nomAr,$prenomAr,$sexe,$setuationF,$dateNais,$lieuNais,$adresse,$ville,$tel,$email,$fix,$fax,$specialite,$diplome,$pb,$dateOptDip,$lieuOpt,$dateRecrut,$grade,$dateNomGrade,$categorie,$dateNomCat,$echelon,$dateEffEchelon,$type_f)
    {// insert part of fonctionnaire
        $type_f=1;
        $query = "INSERT INTO fonctionnaire(PPR,FONCTION,DIPLOME,PB,DATE_OPT_DIP,LIEU_OPT,DATE_RECRUTE,TYPE_F) VALUES(:ppr,:specialite,:diplome,:pb,:dateOptDip,:lieuOpt,:dateRecrut,:type_f)";
        $resultF = $this->db->prepare($query);
        $parameters = array(':ppr' => $ppr, ':specialite' => $specialite,':diplome' => $diplome,':pb' => $pb,':dateOptDip' => $dateOptDip,':lieuOpt' => $lieuOpt,':dateRecrut' => $dateRecrut,':type_f' => $type_f);
        $resultF->execute($parameters);
      // insert part of info_personnel
        $query = "INSERT INTO info_personnel(CIN,NOM_FR,NOM_AR,PRENOM_FR,PRENOM_AR,SEXE,DATE_NAISSANCE,LIEU_NAISSANCE,ADRESSE,VILLE,TELL,FIX,FAX,EMAIL,PPR,SITUATION_FM) VALUES(:cin,:nom,:nomAr,:prenom,:prenomAr,:sexe,:dateNais,:lieuNais,:adresse,:ville,:tel,:fix,:fax,:email,:ppr,:setuationF)";
        $resultIP = $this->db->prepare($query);
        $parameters = array(':cin' => $cin, ':nom' => $nom, ':nomAr'=> $nomAr, ':prenom'=> $prenom, ':prenomAr'=> $prenomAr, ':sexe'=> $sexe, ':dateNais'=> $dateNais, ':lieuNais'=> $lieuNais, ':adresse'=> $adresse, ':ville'=> $ville, ':tel'=> $tel, ':fix'=> $fix, ':fax'=> $fax, ':email'=> $email, ':ppr'=> $ppr, ':setuationF'=> $setuationF);
        $resultIP->execute($parameters);
        // insert part of grade
        $query = "INSERT INTO grade(GRADE,DATE_NM_GRD,CATEGORIE,DATE_NM_CAT,ECHELON,DATE_EFFECT_ECH,PPR) VALUES(:grade,:dateNomGrade,:categorie,:dateNomCat,:echelon,:dateEffEchelon,:ppr)";
        $resultG = $this->db->prepare($query);
        $parameters = array(':grade' => $grade,':dateNomGrade' => $dateNomGrade,':categorie' => $categorie,':dateNomCat' => $dateNomCat,':echelon' => $echelon,':dateEffEchelon' => $dateEffEchelon,':ppr' => $ppr);
        $resultG->execute($parameters);}

    public function getAllEnseignant()
    {$query = "SELECT
                f.PPR,i.NOM_FR,i.PRENOM_FR,i.NOM_AR,i.PRENOM_AR,f.TYPE_F,f.FONCTION,g.GRADE,f.DATE_RECRUTE
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.TYPE_F=1";
        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll();}
    /*Get Specific ensiegnant by PPR*/
    //for list
    public function getEnseignantList($ppr_)
    {$query = "SELECT
                f.*,i.*,g.*
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.TYPE_F=1 AND f.PPR='".$ppr_."' LIMIT 1";
        $result = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $result->execute($parameters);
        return $result->fetchAll();}
    //for edit
    public function  getEnseignantEdit($ppr_)
    {$query = "SELECT
                f.*,i.*,g.*
                FROM fonctionnaire f INNER JOIN info_personnel i ON f.PPR=i.PPR INNER JOIN GRADE g ON g.PPR=f.PPR WHERE  f.TYPE_F=1 AND f.PPR='".$ppr_."' LIMIT 1";
        $result = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $result->execute($parameters);
        return $result->fetch();}

    public function deleteEnsiegnant($ppr_)
    {$query = "DELETE FROM fonctionnaire WHERE PPR = :ppr_ AND TYPE_F=1";
        $result = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $result->execute($parameters);}

    public function updateEnsiegnant($ppr_,$cin,$nom,$prenom,$nomAr,$prenomAr,$sexe,$setuationF,$dateNais,$lieuNais,$adresse,$ville,$tel,$email,$fix,$fax,$specialite,$diplome,$pb,$dateOptDip,$lieuOpt,$dateRecrut,$grade,$dateNomGrade,$categorie,$dateNomCat,$echelon,$dateEffEchelon)
    {// update fonctionnaire
        $updateQueryFonctionnaire = "UPDATE fonctionnaire  SET FONCTION=:specialite,DIPLOME=:diplome,PB=:pb,DATE_OPT_DIP=:dateOptDip,LIEU_OPT=:lieuOpt,DATE_RECRUTE=:dateRecrut WHERE PPR =:ppr_ ";
        $resultF = $this->db->prepare($updateQueryFonctionnaire);
        $parameters = array(':ppr_' => $ppr_, ':specialite' => $specialite,':diplome' => $diplome,':pb' => $pb,':dateOptDip' => $dateOptDip,':lieuOpt' => $lieuOpt,':dateRecrut' => $dateRecrut);
        $resultF->execute($parameters);

        //update info_personnel
        $updateQueryInfoPersonnel = "UPDATE info_personnel SET CIN = :cin, NOM_FR = :nom, PRENOM_FR = :prenom, NOM_AR = :nomAr, PRENOM_AR = :prenomAr, SEXE = :sexe, SITUATION_FM = :setuationF, DATE_NAISSANCE = :dateNais,  LIEU_NAISSANCE= :lieuNais,ADRESSE= :adresse,  VILLE= :ville,  TELL= :tel,  EMAIL= :email,  FIX= :fix,  FAX= :fax WHERE PPR = :ppr_ ";
        $resultIP = $this->db->prepare($updateQueryInfoPersonnel);
        $parameters = array(':cin' => $cin, ':nom' => $nom, ':nomAr'=> $nomAr, ':prenom'=> $prenom, ':prenomAr'=> $prenomAr, ':sexe'=> $sexe, ':dateNais'=> $dateNais, ':lieuNais'=> $lieuNais, ':adresse'=> $adresse, ':ville'=> $ville, ':tel'=> $tel, ':fix'=> $fix, ':fax'=> $fax, ':email'=> $email, ':ppr_'=> $ppr_, ':setuationF'=> $setuationF);
        $resultIP->execute($parameters);

        //update grade
        $updateQueryGrade = "UPDATE grade SET  GRADE= :grade,  DATE_NM_GRD= :dateNomGrade,  CATEGORIE= :categorie,  DATE_NM_CAT= :dateNomCat,  ECHELON= :echelon, DATE_EFFECT_ECH=:dateEffEchelon WHERE PPR = :ppr_";
        $resultG = $this->db->prepare($updateQueryGrade);
        $parameters = array(':grade' => $grade,':dateNomGrade' => $dateNomGrade,':categorie' => $categorie,':dateNomCat' => $dateNomCat,':echelon' => $echelon,':dateEffEchelon' => $dateEffEchelon,':ppr_' => $ppr_);
        $resultG->execute($parameters);}
   //GetData JSON To Pass it to The Chart
     public function getJsonData()
    {$query = "SELECT TYPE_F,COUNT(PPR) AS'count' FROM fonctionnaire GROUP BY TYPE_F";
        $result = $this->db->prepare($query);
        $result->execute();
        $results=$result->fetchALL(PDO::FETCH_ASSOC);
        return $results;}
    /*CONGE*/
    public function getConges($ppr_)
    {$query = "SELECT c.ID,t.typee,c.DATE_DEBUT,c.DATE_FINE,c.NBR_JOURS,c.DATE_REPRISE,c.ANNEE FROM conge c
                  INNER JOIN type_conge t ON t.ID=c.ID_TYPE WHERE c.PPR=:ppr_";
        $results = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $results->execute($parameters);
        return $results->fetchAll();}
    public function getLastConge($ppr_)
    {$query = "SELECT   c.ID,t.typee,c.DATE_DEBUT,c.DATE_FINE,c.NBR_JOURS,c.DATE_REPRISE,c.ANNEE FROM conge c
                  INNER JOIN type_conge t ON t.ID=c.ID_TYPE WHERE c.PPR=$ppr_ ORDER BY C.ID DESC LIMIT 1";
        $results = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $results->execute($parameters);
        return $results->fetchAll();}

    public function newConge($ppr_,$type_id,$date_debut,$date_fin,$nbr_jr,$date_reprise,$annee)
    {$query = "INSERT INTO conge(DATE_DEBUT,DATE_FINE,	NBR_JOURS,DATE_REPRISE,ANNEE,PPR,ID_TYPE) VALUES('$date_debut','$date_fin',$nbr_jr,'$date_reprise',$annee,$ppr_,$type_id)";
        $results = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_,':date_debut'=>$date_debut,':date_fin'=>$date_fin,':nbr_jr'=>$nbr_jr,':date_reprise'=>$date_reprise,':annee'=>$annee,':type_id'=>$type_id);
        $results->execute($parameters);}

    public function updateConge($id,$type_id,$date_debut,$date_fin,$nbr_jr,$date_reprise,$annee)
    {$query="UPDATE conge SET DATE_DEBUT='$date_debut',DATE_FINE='$date_fin',NBR_JOURS=$nbr_jr,DATE_REPRISE='$date_reprise',ANNEE=$annee,ID_TYPE=$type_id  WHERE ID=$id";
        $result=$this->db->prepare($query);
        $parameteres=array(':id'=>$id,':date_debut'=>$date_debut,':date_fin'=>$date_fin,':nbr_jr'=>$nbr_jr,':date_reprise'=>$date_reprise,':annee'=>$annee,':type_id'=>$type_id);
        $result->execute($parameteres);}

    public function deleteConge($id)
    {$query="DELETE FROM conge WHERE ID =$id";
        $result=$this->db->prepare($query);
        $parameters=array(':id'=>$id);
        $result->execute($parameters);}

    public function getConge($id_)
    {$query = "SELECT c.ID,t.typee,c.DATE_DEBUT,c.DATE_FINE,c.NBR_JOURS,c.DATE_REPRISE,c.ANNEE FROM conge c
                  INNER JOIN type_conge t ON t.ID=c.ID_TYPE WHERE c.ID=$id_";
        $resultConge = $this->db->prepare($query);
        $parameters = array(':id_' => $id_);
        $resultConge->execute($parameters);
        return $resultConge->fetch();}

    public function getTypesConge()
    {$query = "SELECT t.ID,t.typee FROM type_conge t";
        $results = $this->db->prepare($query);
        $results->execute();
        return $results->fetchAll();}
    /*GRADE*/
    public function getGrades($ppr_)
    {$query = "SELECT ID,GRADE,DATE_NM_GRD,CATEGORIE,DATE_NM_CAT,ECHELON,DATE_EFFECT_ECH FROM grade WHERE PPR=:ppr_";
        $results = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_);
        $results->execute($parameters);
        return $results->fetchAll();}

    public function getGrade($id)
    {$query = "SELECT GRADE,DATE_NM_GRD,CATEGORIE,DATE_NM_CAT,ECHELON,DATE_EFFECT_ECH FROM grade WHERE ID=$id";
        $results = $this->db->prepare($query);
        $parameters = array(':id' => $id);
        $results->execute($parameters);
        return $results->fetch();}

    public function addGrade($ppr_,$grade,$date_nm_grd,$categorie,$date_nm_cat,$echelon,$date_effect_ech)
    {
        $query = "INSERT INTO grade(GRADE,DATE_NM_GRD,CATEGORIE,DATE_NM_CAT,ECHELON,DATE_EFFECT_ECH,PPR) VALUES('$grade','$date_nm_grd','$categorie','$date_nm_cat','$echelon','$date_effect_ech',$ppr_)";
        $results = $this->db->prepare($query);
        $parameters = array(':ppr_' => $ppr_,':grade'=>$grade,':date_nm_grd'=>$date_nm_grd,':categorie'=>$categorie,':date_nm_cat'=>$date_nm_cat,':echelon'=>$echelon,':date_effect_ech'=>$date_effect_ech);
        $results->execute($parameters);}

    public function updateGrade($id,$grade,$date_nm_grd,$categorie,$date_nm_cat,$echelon,$date_effect_ech)
    {$query = "UPDATE  grade SET GRADE='$grade',DATE_NM_GRD='$date_nm_grd',CATEGORIE='$categorie',DATE_NM_CAT='$date_nm_cat',ECHELON='$echelon',DATE_EFFECT_ECH='$date_effect_ech' WHERE ID=$id";
        $results = $this->db->prepare($query);
        $parameters = array(':id' => $id,':grade'=>$grade,':date_nm_grd'=>$date_nm_grd,':categorie'=>$categorie,':date_nm_cat'=>$date_nm_cat,':echelon'=>$echelon,':date_effect_ech'=>$date_effect_ech);
        $results->execute($parameters);}

    public function deleteGrade($id)
    {$query = "DELETE FROM grade   WHERE ID=$id";
        $results = $this->db->prepare($query);
        $parameters = array(':id' => $id);
        $results->execute($parameters);}



}
