<?php
include("process/db.php");
// query for rank
							$queri4 = "SET @rownum := 0;";
							$queri3 = "select rank,mark from(select @rownum := @rownum +1 AS rank, mark, name from sig_polling order by mark desc) as hasil where name = 'Objek Wisata Air Bojongsari (Owabong)'";
							mysql_query($queri4);
							$result = mysql_query($queri3);
							$rows = '';
							$data = array();
							if (!empty($result))
								$rows      =  mysql_num_rows($result);
							else
								$rows      =  '';
					 
							if (!empty($rows)){
								while ($rows = mysql_fetch_assoc($result)){
									$data[]   = $rows;
								}
							}
					 		//rank of the user
							if (empty($data[0]['rank']))
								return 1;
							return $data[0]['rank'];
							
							echo $rows['mark'];
?>