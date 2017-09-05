<?php 

/* Template Name: add_post
*
*
*
	*/
	include_once( ABSPATH . 'wp-admin/includes/image.php' );
	include_once( ABSPATH . 'wp-config.php' );
	$countries_code = array('AF' => 'Afghanistan',	'AX' => 'Aland Islands',	'AL' => 'Albania',	'DZ' => 'Algeria',	'AS' => 'American Samoa',	'AD' => 'Andorra',	'AO' => 'Angola',	'AI' => 'Anguilla',	'AQ' => 'Antarctica',	'AG' => 'Antigua And Barbuda',	'AR' => 'Argentina',	'AM' => 'Armenia',	'AW' => 'Aruba',	'AU' => 'Australia',	'AT' => 'Austria',	'AZ' => 'Azerbaijan',	'BS' => 'Bahamas',	'BH' => 'Bahrain',	'BD' => 'Bangladesh',	'BB' => 'Barbados',	'BY' => 'Belarus',	'BE' => 'Belgium',	'BZ' => 'Belize',	'BJ' => 'Benin',	'BM' => 'Bermuda',	'BT' => 'Bhutan',	'BO' => 'Bolivia',	'BA' => 'Bosnia And Herzegovina',	'BW' => 'Botswana',	'BV' => 'Bouvet Island',	'BR' => 'Brazil',	'IO' => 'British Indian Ocean Territory',	'BN' => 'Brunei Darussalam',	'BG' => 'Bulgaria',	'BF' => 'Burkina Faso',	'BI' => 'Burundi',	'KH' => 'Cambodia',	'CM' => 'Cameroon',	'CA' => 'Canada',	'CV' => 'Cape Verde',	'KY' => 'Cayman Islands',	'CF' => 'Central African Republic',	'TD' => 'Chad',	'CL' => 'Chile',	'CN' => 'China',	'CX' => 'Christmas Island',	'CC' => 'Cocos (Keeling) Islands',	'CO' => 'Colombia',	'KM' => 'Comoros',	'CG' => 'Congo',	'CD' => 'Congo, Democratic Republic',	'CK' => 'Cook Islands',	'CR' => 'Costa Rica',	'CI' => 'Cote D\'Ivoire',	'HR' => 'Croatia',	'CU' => 'Cuba',	'CY' => 'Cyprus',	'CZ' => 'Czech Republic',	'DK' => 'Denmark',	'DJ' => 'Djibouti',	'DM' => 'Dominica',	'DO' => 'Dominican Republic',	'EC' => 'Ecuador',	'EG' => 'Egypt',	'SV' => 'El Salvador',	'GQ' => 'Equatorial Guinea',	'ER' => 'Eritrea',	'EE' => 'Estonia',	'ET' => 'Ethiopia',	'FK' => 'Falkland Islands (Malvinas)',	'FO' => 'Faroe Islands',	'FJ' => 'Fiji',	'FI' => 'Finland',	'FR' => 'France',	'GF' => 'French Guiana',	'PF' => 'French Polynesia',	'TF' => 'French Southern Territories',	'GA' => 'Gabon',	'GM' => 'Gambia',	'GE' => 'Georgia',	'DE' => 'Germany',	'GH' => 'Ghana',	'GI' => 'Gibraltar',	'GR' => 'Greece',	'GL' => 'Greenland',	'GD' => 'Grenada',	'GP' => 'Guadeloupe',	'GU' => 'Guam',	'GT' => 'Guatemala',	'GG' => 'Guernsey',	'GN' => 'Guinea',	'GW' => 'Guinea-Bissau',	'GY' => 'Guyana',	'HT' => 'Haiti',	'HM' => 'Heard Island & Mcdonald Islands',	'VA' => 'Holy See (Vatican City State)',	'HN' => 'Honduras',	'HK' => 'Hong Kong',	'HU' => 'Hungary',	'IS' => 'Iceland',	'IN' => 'India',	'ID' => 'Indonesia',	'IR' => 'Iran, Islamic Republic Of',	'IQ' => 'Iraq',	'IE' => 'Ireland',	'IM' => 'Isle Of Man',	'IL' => 'Israel',	'IT' => 'Italy',	'JM' => 'Jamaica',	'JP' => 'Japan',	'JE' => 'Jersey',	'JO' => 'Jordan',	'KZ' => 'Kazakhstan',	'KE' => 'Kenya',	'KI' => 'Kiribati',	'KR' => 'Korea',	'KW' => 'Kuwait',	'KG' => 'Kyrgyzstan',	'LA' => 'Lao People\'s Democratic Republic',	'LV' => 'Latvia',	'LB' => 'Lebanon',	'LS' => 'Lesotho',	'LR' => 'Liberia',	'LY' => 'Libyan Arab Jamahiriya',	'LI' => 'Liechtenstein',	'LT' => 'Lithuania',	'LU' => 'Luxembourg',	'MO' => 'Macao',	'MK' => 'Macedonia',	'MG' => 'Madagascar',	'MW' => 'Malawi',	'MY' => 'Malaysia',	'MV' => 'Maldives',	'ML' => 'Mali',	'MT' => 'Malta',	'MH' => 'Marshall Islands',	'MQ' => 'Martinique',	'MR' => 'Mauritania',	'MU' => 'Mauritius',	'YT' => 'Mayotte',	'MX' => 'Mexico',	'FM' => 'Micronesia, Federated States Of',	'MD' => 'Moldova',	'MC' => 'Monaco',	'MN' => 'Mongolia',	'ME' => 'Montenegro',	'MS' => 'Montserrat',	'MA' => 'Morocco',	'MZ' => 'Mozambique',	'MM' => 'Myanmar',	'NA' => 'Namibia',	'NR' => 'Nauru',	'NP' => 'Nepal',	'NL' => 'Netherlands',	'AN' => 'Netherlands Antilles',	'NC' => 'New Caledonia',	'NZ' => 'New Zealand',	'NI' => 'Nicaragua',	'NE' => 'Niger',	'NG' => 'Nigeria',	'NU' => 'Niue',	'NF' => 'Norfolk Island',	'MP' => 'Northern Mariana Islands',	'NO' => 'Norway',	'OM' => 'Oman',	'PK' => 'Pakistan',	'PW' => 'Palau',	'PS' => 'Palestinian Territory, Occupied',	'PA' => 'Panama',	'PG' => 'Papua New Guinea',	'PY' => 'Paraguay',	'PE' => 'Peru',	'PH' => 'Philippines',	'PN' => 'Pitcairn',	'PL' => 'Poland',	'PT' => 'Portugal',	'PR' => 'Puerto Rico',	'QA' => 'Qatar',	'RE' => 'Reunion',	'RO' => 'Romania',	'RU' => 'Russian Federation',	'RW' => 'Rwanda',	'BL' => 'Saint Barthelemy',	'SH' => 'Saint Helena',	'KN' => 'Saint Kitts And Nevis',	'LC' => 'Saint Lucia',	'MF' => 'Saint Martin',	'PM' => 'Saint Pierre And Miquelon',	'VC' => 'Saint Vincent And Grenadines',	'WS' => 'Samoa',	'SM' => 'San Marino',	'ST' => 'Sao Tome And Principe',	'SA' => 'Saudi Arabia',	'SN' => 'Senegal',	'RS' => 'Serbia',	'SC' => 'Seychelles',	'SL' => 'Sierra Leone',	'SG' => 'Singapore',	'SK' => 'Slovakia',	'SI' => 'Slovenia',	'SB' => 'Solomon Islands',	'SO' => 'Somalia',	'ZA' => 'South Africa',	'GS' => 'South Georgia And Sandwich Isl.',	'ES' => 'Spain',	'LK' => 'Sri Lanka',	'SD' => 'Sudan',	'SR' => 'Suriname',	'SJ' => 'Svalbard And Jan Mayen',	'SZ' => 'Swaziland',	'SE' => 'Sweden',	'CH' => 'Switzerland',	'SY' => 'Syrian Arab Republic',	'TW' => 'Taiwan',	'TJ' => 'Tajikistan',	'TZ' => 'Tanzania',	'TH' => 'Thailand',	'TL' => 'Timor-Leste',	'TG' => 'Togo',	'TK' => 'Tokelau',	'TO' => 'Tonga',	'TT' => 'Trinidad And Tobago',	'TN' => 'Tunisia',	'TR' => 'Turkey',	'TM' => 'Turkmenistan',	'TC' => 'Turks And Caicos Islands',	'TV' => 'Tuvalu',	'UG' => 'Uganda',	'UA' => 'Ukraine',	'AE' => 'United Arab Emirates',	'GB' => 'United Kingdom',	'US' => 'United States',	'UM' => 'United States Outlying Islands',	'UY' => 'Uruguay',	'UZ' => 'Uzbekistan',	'VU' => 'Vanuatu',	'VE' => 'Venezuela',	'VN' => 'Viet Nam',	'VG' => 'Virgin Islands, British',	'VI' => 'Virgin Islands, U.S.',	'WF' => 'Wallis And Futuna',	'EH' => 'Western Sahara',	'YE' => 'Yemen',	'ZM' => 'Zambia',	'ZW' => 'Zimbabwe');

$country_key = array_search("Tunisia",$countries_code);

	if(isset($_REQUEST['logis_id']) && $_REQUEST['delete_property']==1){
		if(wp_delete_post($_REQUEST['logis_id'])){
			$msg = array("okay"=>"delete");
			return json_encode($msg);
			die;
		}
	}

	$servername = DB_HOST;
	$username = DB_USER;
	$password = DB_PASSWORD;
	$db = DB_NAME;

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}



		$array_terms = array('property_state'=>$_REQUEST['community'],'property_city'=>$_REQUEST['country'],'property_area'=>$_REQUEST['cross_street']);
		//echo json_encode($array_terms);die; 
		foreach($array_terms as $key=>$val){
			$check_data = "SELECT * FROM (SELECT '$val') as temp WHERE NOT EXISTS( SELECT term_id FROM wp_terms WHERE name='$val' OR slug = '$val' )";
			$verify_ima = $conn->query($check_data);
			$not_in=mysqli_fetch_row($verify_ima);
			$not_exist_array[] = $not_in[0];
		}
		foreach($array_terms as $key=>$val){
			if(in_array($val,$array_terms)){
					$term_type[] = $key;

			}
		} 

		$new_terms = array_combine($term_type,$not_exist_array);
		
	
		foreach($new_terms as $key=>$val){
			if($val){
			$insert_term_query = "INSERT INTO `wp_terms` (`name`,`slug`,`term_group`) VALUES ('".ucfirst($val)."','".str_replace(' ','-',strtolower($val))."',0)";
			$query_run = $conn->query($insert_term_query);
			$query_last_id = mysqli_insert_id($conn);

			$wp_term_taxonomy_query = "INSERT INTO `wp_term_taxonomy` (`term_id`,`taxonomy`) VALUES ($query_last_id,'".$key."')";
			$conn->query($wp_term_taxonomy_query);
			}
		}











	/* get all values related posts */


	$sql = "Select * From wp_terms";

	$result = $conn->query($sql);
	$terms_id_array =  array();
	$terms_name_array =  array();

	while($row = mysqli_fetch_assoc($result)) {
		$terms_id_array[] = $row['term_id'];
		$terms_name_array[] = strtolower(str_replace('-',' ',$row['slug']));

	}

	$get_terms = array_combine($terms_name_array,$terms_id_array);


	/* Start Upload image using custom image  Url code */


	$property_image = $_REQUEST['property_image'];

	//echo json_encode($property_image);die;
	$property_des = $_REQUEST['description'];
	$email = $_REQUEST['agency_email'];
	$type = strtolower($_REQUEST['property_type']);
	//$property_status = strtolower(($_REQUEST['transaction_type'] == 'rent' || 'sale')?'for '.$_REQUEST['transaction_type']:$_REQUEST['transaction_type']);
	$property_status = strtolower($_REQUEST['transaction_type']);
	//echo json_encode($property_status);die;
	$post_title = $_REQUEST['title'];
	$agent_name = $_REQUEST['agency_name'];
	$temp_price = str_replace('DT ','',$_REQUEST['price']);
	$price = str_replace(',','',$temp_price);
	$fave_property_map_address = $_REQUEST['location'];
	$fave_property_address = $_REQUEST['cross_street'];
	$fave_property_country = $_REQUEST['country'];
	$houzez_geolocation_lat = $_REQUEST['longitude'];
	$houzez_geolocation_long = $_REQUEST['latitute']; 
	$fave_property_size = $_REQUEST['size'];
	$fave_property_bathrooms = $_REQUEST['bathrooms'];
	$fave_property_bedrooms = $_REQUEST['rooms'];
	$fave_property_location = $_REQUEST['property_latlng'];
	$fave_property_year = $_REQUEST['year_built'];
	$fave_property_garage_size = $_REQUEST['lot_size'].' SqFt';
	$property_id = $_REQUEST['logis_id'];
	$agent_phone_no = $_REQUEST['phonenumber'];


	if(!isset($property_image) && empty($property_image)){
		$msg = array('error'=>'Property Image Not Defined !');
		echo json_encode($msg);
		die;
	}


	if(!isset($email) && empty($email)){
		$msg = array('error'=>'Email Not Defined !');
		echo json_encode($msg);
		die;
	}
	if(!isset($type) && empty($type)){
		$msg = array('error'=>'Property Type Not Defined !');
		echo json_encode($msg);
		die;
	}
	if(!isset($property_status) && empty($property_status)){
		$msg = array('error'=>'Transaction Type Not Defined !');
		echo json_encode($msg);
		die;
	}
	if(!isset($post_title) && empty($post_title)){
		$msg = array('error'=>'Post Title Not Defined !');
		echo json_encode($msg);
		die;
	}

	if(!isset($agent_name) && empty($agent_name)){
		$msg = array('error'=>'Agent Name Not Defined !');
		echo json_encode($msg);
		die;
	}
	if(!isset($price) && empty($price)){
		$msg = array('error'=>'Price Not Defined !');
		echo json_encode($msg);
		die;
	}

	/*if(!isset($property_id) && empty($property_id)){
		$msg = array('error'=>'Property ID Not Defined !');
		echo json_encode($msg);
		die;
	}*/

	if(!isset($agent_phone_no) && empty($agent_phone_no)){
		$msg = array('error'=>'Agent Phone No Not Defined !');
		echo json_encode($msg);
		die;
	}

foreach($property_image as $val){
	$url = $val;

	//$url = 'https://cdn.pixabay.com/photo/2017/03/13/10/31/greylag-goose-2139296_960_720.jpg';
	$filename = substr($url, strrpos($url, '/')+1);
	$imge_ext = pathinfo($url,PATHINFO_EXTENSION);
	$filename_name = pathinfo($url,PATHINFO_FILENAME);
	$uploaddir = wp_upload_dir();
	$uploadfile = $uploaddir['path'] . '/' . $filename;
	$contents= file_get_contents($url);
	$savefile = fopen($uploadfile, 'w');
	fwrite($savefile, $contents);
	fclose($savefile);

	$wp_filetype =  wp_check_filetype(basename($filename), null );
	$attachment = array(
		'post_mime_type' => $wp_filetype['type'],
		'post_title' => $filename,
		'post_content' => '',
		'post_status' => 'inherit'
	);


	$attach_id[] = wp_insert_attachment( $attachment, $uploadfile );
}

	foreach($attach_id as $val){
		$imagenew = get_post( $val );
		$fullsizepath = get_attached_file( $imagenew->ID );
		$attach_data = wp_generate_attachment_metadata( $val, $fullsizepath );
		wp_update_attachment_metadata( $val, $attach_data );
	}

	$post_meta_array = array('fave_property_id'=>'LM'.$_REQUEST['property_id'],'_thumbnail_id'=>$attach_id[0],'fave_property_price'=>$price,'fave_property_map_address'=>$fave_property_map_address,'fave_property_address'=>$fave_property_address,'fave_property_country'=>$fave_property_country,'houzez_geolocation_lat'=>$houzez_geolocation_lat,'houzez_geolocation_long'=>$houzez_geolocation_long,'fave_property_size'=>$fave_property_size,'fave_property_bathrooms'=>$fave_property_bathrooms,'fave_property_bedrooms'=>$fave_property_bedrooms,'fave_property_location'=>$fave_property_location,'fave_property_year'=>$fave_property_year,'fave_property_garage_size'=>$fave_property_garage_size,'fave_property_country'=>$country_key);


	/* End  image code */
	$term_array = array($property_status,$type,strtolower($_REQUEST['country']),strtolower($_REQUEST['community']),strtolower($_REQUEST['cross_street']));
	$value = array();
	foreach($term_array as $types){
		if(array_key_exists($types,$get_terms)){
		 $value[] = $get_terms[$types];	
		}
	}
//	echo json_encode($value);die;

	/* user verify code */
	if(!$property_id){
		$user_verify = get_user_by_email($email);

/* end get all values related posts */

	if(!$user_verify){
	 if( null == username_exists( $email ) ) {	

	  // Generate the password and create the user
	  $password = wp_generate_password( 12, false );
	  $user_id = wp_create_user( $agent_name, $password, $email );

	  // Set the nickname
	  wp_update_user(
		array(
		  'ID'          =>    $user_id,
		  'nickname'    =>    $email
		)
	  );

	  // Set the role
	  $user = new WP_User( $user_id );
	  $user->set_role( 'houzez_agent' );
	 $user_create = wp_mail( $email, 'Welcome!', 'Your Password: ' . $password.' Your email is '.$email );
	} // end if
  
	if($user_create){
		echo "user created";
	}
		
	$user_verify_again = get_user_by_email($email);	

	$add_agent_post = array(
		'post_title' => $agent_name,
		'post_content' => '',
		'post_status' => 'publish',
		'post_date' => date('Y-m-d H:i:s'),
		'post_author' => $user_verify_again->ID,
		'post_type' => 'houzez_agent'
	);
	$agent_post_id = wp_insert_post($add_agent_post);
	
	$agent_post_check = get_page_by_title($agent_name, OBJECT, 'property');
	 $agent_meta_val_array = array('fave_agent_mobile'=>$agent_phone_no,'fave_agent_email'=>$email);
	foreach($agent_meta_val_array as $key=>$val){
 		$sql = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ($agent_post_id,'fave_agent_email','$email')";
		mysqli_query($conn, $sql);
	}

	wp_mail( $email, 'Agent Added', 'Agent added successfully ! '.$agent_name );

	$new_post = array(
	'post_title' => $post_title,
	'post_content' => $property_des.' Pour toute information supplémentaire et visite gratuite, merci de nous contacter «  '.$agent_name.' Name «  au « '.$agent_phone_no.' » (Ville: = '.$_REQUEST['country'].', Commune: = '.$_REQUEST['community'].', Quartier: = '.$_REQUEST['cross_street'].')',
	'post_status' => 'publish',
	'post_date' => date('Y-m-d H:i:s'),
	'post_author' => $user_verify_again->ID,
	'post_type' => 'property'
	);
	$post_id = wp_insert_post($new_post);
	$check = get_page_by_title($post_title, OBJECT, 'property');
	foreach($value as $metaval){
	$sql = "INSERT INTO `wp_term_relationships` (`object_id`,`term_taxonomy_id`) VALUES ($post_id,$metaval)";
	mysqli_query($conn, $sql);
	
	}
	
	
	
	/* code for get agent_id */
	
	$query = array(
	'post_type' => 'houzez_agent',
	'post_author' => $user_verify->ID,
	'post_status' => array('publish')    
	);
	$loop = new WP_Query($query);

	$agentid = $loop->post->ID;

	/* end code for get agent_id */
	/* assign agent id to agent post */
	//$porperties_meta_values = array('fave_property_price'=>$price,'fave_agents'=>$agentid,'_thumbnail_id'=>$attach_id);
	foreach($attach_id as $val){
		$image_insert = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ('$post_id','fave_property_images','$val')";
		mysqli_query($conn, $image_insert);	
	}	
		
	$agent_value_array = array('fave_agents'=>$agentid,'fave_agent_display_option'=>'agent_info');
	$real_agent_array = array_merge($post_meta_array,$agent_value_array);
	foreach($real_agent_array as $key=>$val){
		 
	 $sql1 = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ('$post_id','$key','$val')";
		mysqli_query($conn, $sql1);
	}
	/* assign agent id to agent post */
	//wp_mail( $email, 'Property Added', 'Property added successfully but still pending need to apprvoe by admin first by '.$agent_name );
	if($post_id){
	$msg = array('success'=>'post added','post_id'=>$post_id);
	echo json_encode($msg);
	}

	}else{



$new_post = array(
	'post_title' => $post_title,
	'post_content' => $property_des.' Pour toute information supplémentaire et visite gratuite, merci de nous contacter «  '.$agent_name.' Name «  au « '.$agent_phone_no.' » (Ville: = '.$_REQUEST['country'].', Commune: = '.$_REQUEST['community'].', Quartier: = '.$_REQUEST['cross_street'].')',
	'post_status' => 'pending',
	'post_date' => date('Y-m-d H:i:s'),
	'post_author' => $user_verify->ID,
	'post_type' => 'property'
	);
	$post_id = wp_insert_post($new_post);
	$check = get_page_by_title($post_title, OBJECT, 'property');
	
	foreach($value as $metaval){
	$sql = "INSERT INTO `wp_term_relationships` (`object_id`,`term_taxonomy_id`) VALUES ($check->ID,$metaval)";
	mysqli_query($conn, $sql);
	}
	

	$query = "SELECT ID FROM `wp_posts` WHERE post_author=".$user_verify->ID." AND post_type = 'houzez_agent' ";
	$row = mysqli_fetch_row($conn->query($query));

	$agentid = $row[0];
	
	//$porperties_meta_values = array('fave_property_price'=>$price,'fave_agents'=>$agentid,'_thumbnail_id'=>$attach_id);
	foreach($attach_id as $val){
		$image_insert = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ('$post_id','fave_property_images','$val')";
		mysqli_query($conn, $image_insert);	
	}	
	$agent_value_array = array('fave_agents'=>$agentid,'fave_agent_display_option'=>'agent_info');
	$real_agent_array = array_merge($post_meta_array,$agent_value_array);

	foreach($real_agent_array as $key=>$val){
		  $sql1 = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ('$post_id','$key','$val')";
		mysqli_query($conn, $sql1);
	}
	
	//wp_mail( $email, 'Property Added', 'Property added successfully but still pending need to apprvoe by admin first ! '.$agent_name );

}

		if($post_id){
			$msg = array('success'=>'post added','post_id'=>$post_id);
			echo json_encode($msg);
		}
	}
	else{
	/*if(!isset($property_id) && empty($property_id)){
		$msg = array('error'=>'Property ID Not Defined !');
		echo json_encode($msg);
		die;
	}
	*/	
		//echo json_encode($value);die;
	$old_title = get_the_title($property_id);
		//print_r($old_title);die;
	//$title = 'Amazing home for family';
	//$email = "gurpreet@webklabs.com";
	$author_id = get_page_by_title($old_title,OBJECT,'property');

	$author_details = get_user_by('ID',$author_id->post_author);

	if($email != $author_details->data->user_email){
		$msg = array('error'=>'That post does not belog from this user '.$email);
		echo json_encode($msg);
		die;
	}

		$my_post = array(
		'ID'           => $property_id,
		'post_title'   => $post_title,
		'post_content' => $property_des.' Pour toute information supplémentaire et visite gratuite, merci de nous contacter «  '.$agent_name.' Name «  au « '.$agent_phone_no.' » (Ville: = '.$_REQUEST['country'].', Commune: = '.$_REQUEST['community'].', Quartier: = '.$_REQUEST['cross_street'].')',
		);

	// Update the post into the database
	 	$update_post = wp_update_post( $my_post );
		$delete_terms = 'DELETE FROM `wp_term_relationships`  WHERE object_id='.$property_id;
		$terms_delete = mysqli_query($conn, $delete_terms);
		foreach($value as $metaval){
			$sql = "INSERT INTO `wp_term_relationships` (`object_id`,`term_taxonomy_id`) VALUES ($property_id,$metaval)";
			mysqli_query($conn, $sql);
		}

		/* code for get agent_id */

		$query = array(
			'post_type' => 'houzez_agent',
			'post_author' => $user_verify->ID,
			'post_status' => array('publish')    
		);
		$loop = new WP_Query($query);

		$agentid = $loop->post->ID;
		$delete_postmeta = 'DELETE FROM `wp_postmeta`  WHERE post_id='.$property_id; 
		mysqli_query($conn, $delete_postmeta);

		/* end code for get agent_id */
		/* assign agent id to agent post */
		//$porperties_meta_values = array('fave_property_price'=>$price,'fave_agents'=>$agentid,'_thumbnail_id'=>$attach_id);

		foreach($attach_id as $val){
		$image_insert = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ('$property_id','fave_property_images','$val')";
		mysqli_query($conn, $image_insert);	
		}	
		
	
		$agent_value_array = array('fave_agents'=>$agentid,'fave_agent_display_option'=>'agent_info');
		$real_agent_array = array_merge($post_meta_array,$agent_value_array);
		//print_r($real_agent_array);die;

		foreach($real_agent_array as $key=>$val){
			 $sql1 = "INSERT INTO `wp_postmeta` (`post_id`,`meta_key`,`meta_value`) VALUES ('$property_id','$key','$val')";
		     $query1 =	mysqli_query($conn, $sql1);

		}

		if($update_post):
		// wp_mail($email,'Post updated','Click to see post '.esc_url( get_permalink($property_id)));
			$msg = array('succuss'=>'Post succussfully updated.');
			echo json_encode($msg);
		else:
		$msg = array('error'=>'Post not update plase tr again !');
			echo json_encode($msg);
	
		endif;

		die;



	}
?>