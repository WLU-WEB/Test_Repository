<?PHP
//------------------generate project ID-----------------------------	
		function makeProjectID() 
			{
				$salt = "abchefghjkmnpqrstuvwxyz"; 
				srand((double)microtime()*1000000); 
				$i = 0; 
				while ($i <= 3) 
					{ 
					$num = rand() % 33; 
					$tmp = substr($salt, $num, 1); 
					$pass = $pass . $tmp; 
					$i++; 
					} 
				return $pass; 
			} 
		$part_1 = makeProjectID();
		if($part_1=='')
			{
			makeProjectID();
			} 

		srand ((double) microtime( )*1000000);
		$part_2 = rand(0,999);

		$part_3 = date("YmdHis"); //2008 02 25 24 00 59
		$part_4 = '-';
		
		$the_array = array(1 => $part_3,$part_4,$part_1,$part_2);
		$generated_submission_id = join("", $the_array);
		//echo "generated_submission_id: [$generated_submission_id]";
//--------------------------------------------------------------------------
?>
