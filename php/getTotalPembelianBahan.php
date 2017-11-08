


<?php
header('Access-Control-Allow-Origin: *');
$servername="localhost";
$username="root";
$password ="";
$dbName="prima";

//membuat koneksi
$conn= new mysqli($servername,$username,$password,$dbName);
//cek koneksi
if(!$conn){
	die("Connection Field.".mysqli_connect_error());
}
//else echo("Connection Success");

$sql="select (b.HargaBahanBaku*pb.jumlahpembelianbahan) as total from 
bahans b join pembelianbahans pb on b.id=pb.kodebahan";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//menampilkan data tiap row
	while($row=mysqli_fetch_assoc($result)){
		echo $row['total'].";";
		
}
}
?>