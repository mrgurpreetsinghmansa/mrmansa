<?php 

include('wp-config.php');
$servername = "localhost";
$username = DB_USER;
$password = DB_PASSWORD;
$db = DB_NAME;

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

		

			 $user_email = $_REQUEST['email']; 
			$comment_text = $_REQUEST['comment_text'];
				$usr = $_REQUEST['usr'];
				$rating = $_REQUEST['rating'];
				$user_id = $_REQUEST['user_id'];
				$post_id = $_REQUEST['post_id'];
				$ip = $_SERVER['SERVER_ADDR'];
				$user_agent = $_SERVER['HTTP_USER_AGENT'];
			
				$date = date('Y-m-d H:i:s');
				 $query  = "INSERT INTO `wp_comments` (`comment_post_ID`,`comment_author`,`comment_author_email`,`comment_date`,`comment_content`,`comment_agent`,`user_id`) VALUES ('".$post_id."','".$usr."','".$user_email."','".$date."','".$comment_text."','".$user_agent."','".$user_id."')";



		$conn->query($query);
			$last_id = $conn->insert_id;
				$rating_array = array('rating'=>$rating,'verified'=>0);
				foreach($rating_array as $key=>$value){
			$query_postmeta = "INSERT INTO `wp_commentmeta` (`comment_id`,`meta_key`,`meta_value`) VALUES(".$last_id.",'".$key."',".$value.")";
					$c = $conn->query($query_postmeta);					
					
					}
			if($c){
			
				$msg = array('succuss'=>'Comment posted !');
				echo json_encode($msg);
				
			}else{
			
					$msg = array('error'=>'Comment Not posted !');
				echo json_encode($msg);
					
			}
				die;
				
					 
					 
				
			
			



?>