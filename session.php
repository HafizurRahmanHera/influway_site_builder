<?php 

class database extends PDO{
	
	function __construct($dsn, $user, $pass){
		
		 parent::__construct($dsn, $user, $pass);
	}

	public function selectuserdata($token){
		try{
			$sql="SELECT * FROM users WHERE  apiToken='".$token."' ";
			//echo $sql;
			//echo $sql;
		$stat=$this->prepare($sql);
		$stat->execute();
		

		return $stat->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage(); 
		}
  }
}
// $dsn = 'mysql:dbname=jango_e_commerce; host=localhost';
// $user = 'root';
// $pass = '';
$dsn = 'mysql:dbname=boss_influway; host=localhost';
$user = 'root';
$pass = 'mypass';
$db = new database($dsn, $user, $pass);

// session_start();
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_GET['token'])) {
    // collect value of input field
    // $_SESSION['asdad'] = 'asdasd';
    // $_SESSION['name'] =  $_POST['name']; 
    // $data['name'] = $_POST['name']; 
    // $data['email'] = $_POST['email']; 
    // $data['username'] = $_POST['username']; 
    // $data['name'] = $_POST['name']; 
    // $data['name'] = $_POST['name']; 
    
    // $data[''] = 'Sylhet'; 
    // $data['userType'] = 'Sylhet'; 
    // $data['contact'] = 'Sylhet'; 
    
    // $_SESSION['isLoggedIn'] = true;
    $token = $_GET['token'];
    $user = $db->selectuserdata($token);
    if($user){
        unset($user[0]['password']);
        unset($user[0]['remember_token']);
        unset($user[0]['passwordToken']);
        unset($user[0]['apiToken']);
        // print_r($user);
         $_SESSION['isLoggedIn'] = true;
         $_SESSION['user'] = $user[0];
        // header("Location: http://localhost/influwaymaker"); 
        header("Location: https://site.influway.com/"); 
    }
    // else header("Location: http://slither.io"); 
    else{
      session_unset();
		  session_destroy();
      // header("Location: http://localhost:3000/login"); 
      header("Location: https://app.influway.com/login"); 
      die();
    } 
    echo json_encode([
        'status' => 200,
        'message' => $_POST,
    ]);
   
    exit();
}
else{
  if(!isset($_SESSION['user'])){
    session_unset();
    session_destroy();
    // header("Location: http://localhost:3000/login"); 
    header("Location: https://app.influway.com/login"); 
    die();
    
  }
}
// header("Location: http://slither.io");

?>