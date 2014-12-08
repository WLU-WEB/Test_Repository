<?PHP
//------------------generate user ID-----------------------------	
		function makeUserID() 
			{
				$salt = "ABCHEFGHJKMNPQRSTUVWXYZ"; 
				srand((double)microtime()*1000000); 
				$i = 0; 
				while ($i <= 5) 
					{ 
					$num = rand() % 33; 
					$tmp = substr($salt, $num, 1); 
					$pass = $pass . $tmp; 
					$i++; 
					} 
				return $pass; 
			} 
		$part_1 = makeUserID();
		if($part_1=='')
			{
			makeUserID();
			} 

		srand ((double) microtime( )*1000000);
		$part_2 = rand(0,9999999999);
		
		$the_array = array(1 => $part_1,$part_2);
		$generated_user_id = join("", $the_array);
//--------------------------------------------------------------------------
?>
