<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password)or die("unable to connect to MySQL");
echo "connected to MySQL<br>";
$tf=$_POST[ 'blogp' ];
$selected =mysql_select_db("salem",$dbhandle)or die("could not select examples");
$sql = mysql_query("SELECT * FROM a");

$cur=$_POST['current'];

$ci=$_POST['city'];
switch($ci)
{
	case 'salem':
		$selected =mysql_select_db("salem",$dbhandle)or die("could not select examples");
		$sql = mysql_query("SELECT * FROM a");

		if($sql)
			echo "retrieved<br>"	;
		else
			echo "no";

		if($sql)
		{
			while ($fieldinfo=mysql_fetch_field($sql))
			{
				if($tf==$fieldinfo->name)
				{
					
					while($row = mysql_fetch_array($sql, MYSQL_ASSOC))
					{
						if($row[$fieldinfo->name]=='yes')
						{
							echo "Hospital Name:{$row['Hospital Name']}<br>";
							echo "street:{$row['Street']}<br>";
							echo "-----	--------------------------------<br>";
						}
					}
				}
			}
		}	
		break;
	case 'chennai':
		$selected =mysql_select_db("chennai",$dbhandle)or die("could not select examples");
		$sql = mysql_query("SELECT * FROM b");

		if($sql)
			echo "retrieved<br>"	;
		else
			echo "no";

		if($sql)
		{
			while ($fieldinfo=mysql_fetch_field($sql))
			{
				if($tf==$fieldinfo->name)
				{
					
					while($row = mysql_fetch_array($sql, MYSQL_ASSOC))
					{
						if($row['Hospital Name']==$cur)
						{
							$condist=$row['Distance'];
							echo $condist;
						}
						if($row[$fieldinfo->name]=='yes')
						{
							
							echo "Hospital Name:{$row['Hospital Name']}<br>";
							echo "street:{$row['Street']}<br>";
							echo "-----	--------------------------------<br>";
						}
					}
				}
			}
		}	
		break;
		case 'erode':
				
			$selected =mysql_select_db("erode",$dbhandle)or die("could not select examples");
			$sql = mysql_query("SELECT * FROM d");

		if($sql)
			echo "retrieved<br>"	;
		else
			echo "no";

		if($sql)
		{
			while ($fieldinfo=mysql_fetch_field($sql))
			{
				if($tf==$fieldinfo->name)
				{
					
					while($row = mysql_fetch_array($sql, MYSQL_ASSOC))
					{
						if($row[$fieldinfo->name]=='yes')
						{
							echo "Hospital Name:{$row['Hospital Name']}<br>";
							echo "street:{$row['Street']}<br>";
							echo "-----	--------------------------------<br>";
						}
					}
				}
			}
		}	
		break;
		case 'coimbatore':
				
		$selected =mysql_select_db("coimbatore",$dbhandle)or die("could not select examples");
		$sql = mysql_query("SELECT * FROM c");

		if($sql)
			echo "retrieved<br>"	;
		else
			echo "no";

		if($sql)
		{
			while ($fieldinfo=mysql_fetch_field($sql))
			{
				if($tf==$fieldinfo->name)
				{
					
					while($row = mysql_fetch_array($sql, MYSQL_ASSOC))
					{
						if($row[$fieldinfo->name]=='yes')
						{
							echo "Hospital Name:{$row['Hospital Name']}<br>";
							echo "street:{$row['Street']}<br>";
							echo "-----	--------------------------------<br>";
						}
					}
				}
			}
		}	
		break;				
	}

		

	

mysql_close($dbhandle);
?>
</html>