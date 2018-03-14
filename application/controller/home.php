<?php
class Home extends Controller
{
	public function index()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
	if(!isset($_SESSION["currentUserName"]))
	{
	 header("location:".URL.'home/login');
	}else {
		 $current_page = "index";
		 // load views
		//$this->chartData();
		 require APP . 'view/_templates/header.php';
		 require APP . 'view/usage/indexView.php';
		 require APP . 'view/_templates/sidebar.php';
		 require APP . 'view/_templates/footer.php';
	 }
	}
	public function search()
	{
		if(isset($_REQUEST['ppr']))
		{
			$ppr=$_REQUEST['ppr'];
			$result=$this->model->search($ppr);
			$data=json_encode($result,JSON_NUMERIC_CHECK);
		}
	}
	//sign up
	 public function signup()
	 {
		if(isset($_POST['inscrit']))
		{
			if(isset($_POST['pprInscrit']) && isset($_POST['userNamaInscrit']) && isset($_POST['passwordInscrit']))
			{
				$ppr_=$_POST['pprInscrit'];
				$user_name=$_POST['userNamaInscrit'];
				$pass_word=$_POST['passwordInscrit'];
				$result=$this->model->signup($ppr_,$user_name,$pass_word);
				$this->index();
			}
		}
	 }



	public function chartData()
	{
		header("Content-Type: application/json");
		$results=$this->model->getJsonData();
		$data=json_encode($results,JSON_NUMERIC_CHECK);
		print_r($data);
	}



	//enseignant
	public function enseignant($ppr_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($ppr_))
			{
				$result=$this->model->getEnseignantEdit($ppr_);
				$counterButtons=0;
				$counterPopups=0;
				$resultConges=$this->model->getConges($ppr_);
				$resultGrades=$this->model->getGrades($ppr_);
			}
			//load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/enseignant.php';
			require APP . 'view/_templates/footer.php';
		}
	}
	public function Admin($ppr_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($ppr_)) {
				$result = $this->model->getAdminEdit($ppr_);
			}
			//load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/admin.php';
			require APP . 'view/_templates/footer.php';
			 }
		}
	//grade
	public function grade()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			//loading the views from the 6
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/grade.php';
			require APP . 'view/_templates/footer.php';
			}
		}
	//inscrit
	public function inscrit()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			//load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/usage/inscrit.php';
			require APP . 'view/_templates/footer.php';
			}
		}
	//listerens
	public  function listerens()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			$current_page = "listens";
			if (isset($_POST['search_btn']) && isset($_POST['search_inp']) && $_POST['search_inp'] != null) {
				$ppr_ = $_POST['search_inp'];
				$results = $this->model->getEnseignantList($ppr_);
			} else {
				$results = $this->model->getAllEnseignant();
			}
			//load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/listerens.php';
			require APP . 'view/_templates/footer.php';
		}
		}
	public function listAdmin()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($_POST['search_btn']) && isset($_POST['search_inp']) && $_POST['search_inp'] != null) {
				$results = $this->model->getAdminList($_POST['search_inp']);
			} else {
				$results = $this->model->getAllAdmins();
			}
			$current_page = "listadmin";
			// load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/adminView.php';
			require APP . 'view/_templates/footer.php';
		}
		}
	//login page
	public  function login() 
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		$_SESSION['currentUserName']=null;
			$errors = "";
			if (isset($_POST['sign_in'])) {
				$userN = $_POST['log_in'];
				$password = $_POST['pass_word'];
				$results = $this->model->login($userN, $password);
				if ($results != null) {
					$_SESSION['currentUserName'] = $userN;
					header('location:' . URL . 'home/index');
				} else {
					$errors = "Nom d'utilisateur ou Mot de passe est incorrect!";
				}
			}
			//load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/usage/login.php';
			require APP . 'view/_templates/footer.php';
		}
	//newadmin page
	public  function newadmin()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
		if(isset($_POST['valider'])) {
			//Info_Personnel Table
			//$_id is auto_increment
			$_nom = $_POST['nom'];
			$_prenom = $_POST['prenom'];
			$_nomAr = $_POST['nomAr'];
			$_prenomAr = $_POST['prenomAr'];
			$_cin = $_POST['cin'];
			$_sexe = $_POST['sexe'];
			$_setuationFamilial = $_POST['setuationFamilial'];
			$_dateNaissance = $_POST['dateNaissance'];
			$_lieuNaissance = $_POST['lieuNaissance'];
			$_adresse = $_POST['adresse'];
			$_ville = $_POST['ville'];
			$_tel = $_POST['tel'];
			$_email = $_POST['email'];
			$_fix = $_POST['fix'];
			$_fax = $_POST['fax'];
			//+ppr foriegn key
			//Fonctionnaire Table
			$_ppr = $_POST['ppr'];
			$_specialite = $_POST['specialite'];
			$_diplome = $_POST['diplome'];
			$_pb = $_POST['pb'];
			$_dateOptDip = $_POST['dateOptDip'];
			$_lieuOpt = $_POST['lieuOptDip'];
			$_dateRecrut = $_POST['dateRecrut'];
			//+type 1/2
			//Grade Table
			//ID auto_increment
			$_grade = $_POST['grade'];
			$_dateNomGrade = $_POST['dateNomGrade'];
			$_categorie = $_POST['categorie'];
			$_dateNomCat = $_POST['dateNomCat'];
			$_echelon = $_POST['echelon'];
			$_dateEffEchelon = $_POST['dateEffEchelon'];
			$result = $this->model->addAdmin($_ppr, $_cin, $_nom, $_prenom, $_nomAr, $_prenomAr, $_sexe, $_setuationFamilial, $_dateNaissance, $_lieuNaissance, $_adresse, $_ville, $_tel, $_email, $_fix, $_fax, $_specialite, $_diplome, $_pb, $_dateOptDip, $_lieuOpt, $_dateRecrut, $_grade, $_dateNomGrade, $_categorie, $_dateNomCat, $_echelon, $_dateEffEchelon, 2);
			header("location:".URL.'home/listAdmin');
			}else
		{
			//load views
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/newadmin.php';
			require APP . 'view/_templates/footer.php';
		}
		}
		}
	//edit Admin
	public function editAdmin($ppr_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		};
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($ppr_)) {
				$result = $this->model->getAdminEdit($ppr_);
			}
			//load view
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/editAdmin.php';
			require APP . 'view/_templates/footer.php';
		}
		}
	public function updateAdmin()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($_POST['update'])) {
				//Info_Personnel Table
				//$_id is auto_increment
				$_nom = $_POST['nom'];
				$_prenom = $_POST['prenom'];
				$_nomAr = $_POST['nomAr'];
				$_prenomAr = $_POST['prenomAr'];
				$_cin = $_POST['cin'];
				$_sexe = $_POST['sexe'];
				$_setuationFamilial = $_POST['setuationFamilial'];
				$_dateNaissance = $_POST['dateNaissance'];
				$_lieuNaissance = $_POST['lieuNaissance'];
				$_adresse = $_POST['adresse'];
				$_ville = $_POST['ville'];
				$_tel = $_POST['tel'];
				$_email = $_POST['email'];
				$_fix = $_POST['fix'];
				$_fax = $_POST['fax'];
				//+ppr foriegn key
				//Fonctionnaire Table
				$_ppr = $_POST['ppr'];
				$_specialite = $_POST['specialite'];
				$_diplome = $_POST['diplome'];
				$_pb = $_POST['pb'];
				$_dateOptDip = $_POST['dateOptDip'];
				$_lieuOpt = $_POST['lieuOptDip'];
				$_dateRecrut = $_POST['dateRecrut'];
				//+type 1/2
				//Grade Table
				//ID auto_increment
				$_grade = $_POST['grade'];
				$_dateNomGrade = $_POST['dateNomGrade'];
				$_categorie = $_POST['categorie'];
				$_dateNomCat = $_POST['dateNomCat'];
				$_echelon = $_POST['echelon'];
				$_dateEffEchelon = $_POST['dateEffEchelon'];
				$this->model->updateAdmin($_ppr, $_cin, $_nom, $_prenom, $_nomAr, $_prenomAr, $_sexe, $_setuationFamilial, $_dateNaissance, $_lieuNaissance, $_adresse, $_ville, $_tel, $_email, $_fix, $_fax, $_specialite, $_diplome, $_pb, $_dateOptDip, $_lieuOpt, $_dateRecrut, $_grade, $_dateNomGrade, $_categorie, $_dateNomCat, $_echelon, $_dateEffEchelon);
				header("location:".URL.'home/listAdmin');
			}
		}
	}
	public function deleteAdmin()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($_REQUEST['ppr_'])) {
				$ppr_=$_GET['ppr_'];
				$this->model->deleteAdmin($ppr_);
				header("location:".URL.'home/listadmin');
			}
		}
		}
	//new ensignant page
	public  function newEnseignant()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($_POST['valider'])) {
				//Info_Personnel Table
				//$_id is auto_increment
				$_nom = $_POST['nom'];
				$_prenom = $_POST['prenom'];
				$_nomAr = $_POST['nomAr'];
				$_prenomAr = $_POST['prenomAr'];
				$_cin = $_POST['cin'];
				$_sexe = $_POST['sexe'];
				$_setuationFamilial = $_POST['setuationFamilial'];
				$_dateNaissance = $_POST['dateNaissance'];
				$_lieuNaissance = $_POST['lieuNaissance'];
				$_adresse = $_POST['adresse'];
				$_ville = $_POST['ville'];
				$_tel = $_POST['tel'];
				$_email = $_POST['email'];
				$_fix = $_POST['fix'];
				$_fax = $_POST['fax'];
				//+ppr foriegn key
				//Fonctionnaire Table
				$_ppr = $_POST['ppr'];
				$_specialite = $_POST['specialite'];
				$_diplome = $_POST['diplome'];
				$_pb = $_POST['pb'];
				$_dateOptDip = $_POST['dateOptDip'];
				$_lieuOpt = $_POST['lieuOptDip'];
				$_dateRecrut = $_POST['dateRecrut'];
				//+type 1/2
				//Grade Table
				//ID auto_increment
				$_grade = $_POST['grade'];
				$_dateNomGrade = $_POST['dateNomGrade'];
				$_categorie = $_POST['categorie'];
				$_dateNomCat = $_POST['dateNomCat'];
				$_echelon = $_POST['echelon'];
				$_dateEffEchelon = $_POST['dateEffEchelon'];
				$result = $this->model->addEnseignant($_ppr, $_cin, $_nom, $_prenom, $_nomAr, $_prenomAr, $_sexe, $_setuationFamilial, $_dateNaissance, $_lieuNaissance, $_adresse, $_ville, $_tel, $_email, $_fix, $_fax, $_specialite, $_diplome, $_pb, $_dateOptDip, $_lieuOpt, $_dateRecrut, $_grade, $_dateNomGrade, $_categorie, $_dateNomCat, $_echelon, $_dateEffEchelon, 1);
				header("location:".URL.'home/listerens');
			} else {
				require APP . 'view/_templates/header.php';
				require APP . 'view/_templates/sidebar.php';
				require APP . 'view/usage/newEnseignant.php';
				require APP . 'view/_templates/footer.php';
			}
		}
	}
	//editEnsiegnant
	public function editEnsiegnant($ppr_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($ppr_)) {
				$result = $this->model->getEnseignantEdit($ppr_);
			}
			//load view
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/usage/editEnsiegnant.php';
			require APP . 'view/_templates/footer.php';

		}}
	//deleteEnsiegnant
	public function deleteEnsiegnant()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($_REQUEST['ppr_']))
			{
				$ppr_=$_GET['ppr_'];
				$this->model->deleteEnsiegnant($ppr_);
				header("location:".URL.'home/listerens');
			}
		}
	}
	//updateEnsiegnant
	public function updateEnsiegnant()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if (isset($_POST['update'])) {
				//Info_Personnel Table
				//$_id is auto_increment
				$_nom = $_POST['nom'];
				$_prenom = $_POST['prenom'];
				$_nomAr = $_POST['nomAr'];
				$_prenomAr = $_POST['prenomAr'];
				$_cin = $_POST['cin'];
				$_sexe = $_POST['sexe'];
				$_setuationFamilial = $_POST['setuationFamilial'];
				$_dateNaissance = $_POST['dateNaissance'];
				$_lieuNaissance = $_POST['lieuNaissance'];
				$_adresse = $_POST['adresse'];
				$_ville = $_POST['ville'];
				$_tel = $_POST['tel'];
				$_email = $_POST['email'];
				$_fix = $_POST['fix'];
				$_fax = $_POST['fax'];
				//+ppr foriegn key
				//Fonctionnaire Table
				$_ppr = $_POST['ppr'];
				$_specialite = $_POST['specialite'];
				$_diplome = $_POST['diplome'];
				$_pb = $_POST['pb'];
				$_dateOptDip = $_POST['dateOptDip'];
				$_lieuOpt = $_POST['lieuOptDip'];
				$_dateRecrut = $_POST['dateRecrut'];
				//+type 1/2
				//Grade Table

				$_grade = $_POST['grade'];
				$_dateNomGrade = $_POST['dateNomGrade'];
				$_categorie = $_POST['categorie'];
				$_dateNomCat = $_POST['dateNomCat'];
				$_echelon = $_POST['echelon'];
				$_dateEffEchelon = $_POST['dateEffEchelon'];
				$this->model->updateEnsiegnant($_ppr,$_cin,$_nom,$_prenom,$_nomAr,$_prenomAr,$_sexe,$_setuationFamilial,$_dateNaissance,$_lieuNaissance,$_adresse,$_ville,$_tel,$_email,$_fix,$_fax,$_specialite,$_diplome,$_pb,$_dateOptDip,$_lieuOpt,$_dateRecrut,$_grade,$_dateNomGrade,$_categorie,$_dateNomCat,$_echelon,$_dateEffEchelon);
				header("location:".URL.'home/listerens');
			}
		}
	}
	/*CONGE*/
	public function getConges($ppr_)
	{

			if(isset($ppr_))
			{
				$resultConge=$this->model->getConges($ppr_);
			}
	}


	public function addCongee()
	{
		//TODO:How To get The Number Of days Auto ?

			if(isset($_REQUEST['ppr']) && isset($_REQUEST['type_conge']) && isset($_REQUEST['date_debut']) && isset($_REQUEST['date_fin']) && isset($_REQUEST['nbr_jr']) && isset($_REQUEST['date_reprise']) && isset($_REQUEST['annee']) )
			{

				$ppr_=$_POST['ppr'];
				$type_id=$_REQUEST['type_conge'];
				$date_debut=$_REQUEST['date_debut'];
				$date_fin=$_REQUEST['date_fin'];
				$nbr_jr=$_REQUEST['nbr_jr'];
				$date_reprise=$_REQUEST['date_reprise'];
				$annee=$_REQUEST['annee'];

				$this->model->newConge($ppr_,$type_id,$date_debut,$date_fin,$nbr_jr,$date_reprise,$annee);


		}
	}

	public function updateConge()
	{

		echo "we are outside bb";
		//How To get The Number Of days Auto ?
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($_REQUEST['id']) && isset($_REQUEST['type_id']) && isset($_REQUEST['date_debut']) && isset($_REQUEST['date_fin']) && isset($_REQUEST['nbr_jr']) && isset($_REQUEST['date_reprise']) && isset($_REQUEST['annee']))
			{
				echo "we are inside bb";
				$id_=$_REQUEST['id'];
				$type_id=$_REQUEST['type_id'];
				$date_debut=$_REQUEST['date_debut'];
				$date_fin=$_REQUEST['date_fin'];
				$nbr_jr= $_REQUEST['nbr_jr'];
				$date_reprise=$_REQUEST['date_reprise'];
				$annee =$_REQUEST['annee'];
				$resultConge=$this->model->updateConge($id_,$type_id,$date_debut,$date_fin,$nbr_jr,$date_reprise,$annee);
			}
		}
	}

	public function deleteConge()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($_REQUEST['id']))
			{
				$resultConge=$this->model->deleteConge($_REQUEST['id']);
			}
		}
	}

	public function getConge($id_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($id_))
			{
				$resultConge=$this->model->getConge($id_);
			}
		}
	}


	/*GRADE*/
	public function getGrades($ppr_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($ppr_))
			{
				$resultGrade=$this->model->getGrades($ppr_);
			}
		}
	}

	public function getGrade($id_)
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($id_))
			{
				$resultGrade=$this->model->getGrade($id_);
			}
		}
	}

	public function addGrade()
	{
		echo "OUTERSIDE";
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			echo "OUTSIDE";
			if(isset($_REQUEST['ppr']) && isset($_REQUEST['grade']) && isset($_REQUEST['date_nm_grd']) && isset($_REQUEST['categorie']) && isset($_REQUEST['date_nm_cat']) && isset($_REQUEST['echelon']) && isset($_REQUEST['date_effect_ech']))
			{
				echo 'INSIDE';
				$ppr_=$_REQUEST['ppr'];
				$grade=$_REQUEST['grade'];
				 $date_nm_grd=$_REQUEST['date_nm_grd'];

				$categorie=$_REQUEST['categorie'];
				$date_nm_cat=$_REQUEST['date_nm_cat'];
				$echelon=$_REQUEST['echelon'];
				$date_effct_ech=$_REQUEST['date_effect_ech'];

				$resultGrade=$this->model->addGrade($ppr_,$grade,$date_nm_grd,$categorie,$date_nm_cat,$echelon,$date_effct_ech);
			}
		}
	}

	public function updateGrade()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {

			if(isset($_REQUEST['id']) && isset($_REQUEST['grade']) && isset($_REQUEST['date_nm_grd']) && isset($_REQUEST['categorie']) && isset($_REQUEST['date_nm_cat']) && isset($_REQUEST['echelon']) && isset($_REQUEST['date_effect_ech']))
			{
				echo "inside update grade";
				$resultGrade=$this->model->updateGrade($_REQUEST['id'],$_REQUEST['grade'],$_REQUEST['date_nm_grd'],$_REQUEST['categorie'],$_REQUEST['date_nm_cat'],$_REQUEST['echelon'],$_REQUEST['date_effect_ech']);
			}
		}
	}

	public function deleteGrade()
	{
		if(!isset($_SESSION["currentUserName"]))
		{
			session_start();
		}
		if(!isset($_SESSION["currentUserName"]))
		{
			header("location:".URL.'home/login');
		}else {
			if(isset($_REQUEST['id']))
			{
				$resultGrade=$this->model->deleteGrade($_REQUEST['id']);
			}
		}
	}




}
