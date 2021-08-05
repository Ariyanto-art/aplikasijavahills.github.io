<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbjh";


$koneksi = mysqli_connect($server, $user , $pass , $database)or die (mysqli_eror($koneksi));

// multiflora
if (isset($_POST['multiflora'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getmultiflora = mysqli_query($koneksi,"INSERT INTO multiflora (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getmultiflora) 
	{
		header('location:multiflora_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='multiflora_cms.php'</script>";
	}
}

// edit multiflora
if (isset($_POST['editmultiflora'])) 
{
	$idmultiflora = $_POST['idmultiflora'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getmultiflora = mysqli_query($koneksi, "UPDATE multiflora SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_multiflora='$idmultiflora'");

	if ($getmultiflora) 
	{
		header('location:multiflora_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='multiflora_cms.php'</script>";
	}
}

// Delete multiflora
if (isset($_POST['deletemultiflora'])) 
{
	$idmultiflora = $_POST['idmultiflora'];

	$getmultiflora = mysqli_query($koneksi, "DELETE FROM multiflora WHERE id_multiflora='$idmultiflora'");

	if ($getmultiflora) 
	{
		header('location:multiflora_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='multiflora_cms.php'</script>";
	}
}

// coffee
if (isset($_POST['coffee'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getcoffee = mysqli_query($koneksi,"INSERT INTO coffee (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getcoffee) 
	{
		header('location:coffee_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='coffee_cms.php'</script>";
	}
}

// edit coffee
if (isset($_POST['editcoffee'])) 
{
	$idcoffee = $_POST['idcoffee'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getcoffee = mysqli_query($koneksi, "UPDATE coffee SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_coffee='$idcoffee'");

	if ($getcoffee) 
	{
		header('location:coffee_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='coffee_cms.php'</script>";
	}
}

// Delete coffee
if (isset($_POST['deletecoffee'])) 
{
	$idcoffee = $_POST['idcoffee'];

	$getcoffee = mysqli_query($koneksi, "DELETE FROM coffee WHERE id_coffee='$idcoffee'");

	if ($getcoffee) 
	{
		header('location:coffee_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='coffee_cms.php'</script>";
	}
}

// diet
if (isset($_POST['diet'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getdiet = mysqli_query($koneksi,"INSERT INTO diet (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getdiet) 
	{
		header('location:diet_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='diet_cms.php'</script>";
	}
}

// edit diet
if (isset($_POST['editdiet'])) 
{
	$iddiet = $_POST['iddiet'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getdiet = mysqli_query($koneksi, "UPDATE diet SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_diet='$iddiet'");

	if ($getdiet) 
	{
		header('location:diet_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='diet_cms.php'</script>";
	}
}

// Delete diet
if (isset($_POST['deletediet'])) 
{
	$iddiet = $_POST['iddiet'];

	$getdiet = mysqli_query($koneksi, "DELETE FROM diet WHERE id_diet='$iddiet'");

	if ($getdiet) 
	{
		header('location:diet_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='diet_cms.php'</script>";
	}
}

// javatrigona
if (isset($_POST['javatrigona'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getjavatrigona = mysqli_query($koneksi,"INSERT INTO javatrigona (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getjavatrigona) 
	{
		header('location:javatrigona_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='javatrigona_cms.php'</script>";
	}
}

// edit javatrigona
if (isset($_POST['editjavatrigona'])) 
{
	$idjavatrigona = $_POST['idjavatrigona'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getjavatrigona = mysqli_query($koneksi, "UPDATE javatrigona SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_javatrigona='$idjavatrigona'");

	if ($getjavatrigona) 
	{
		header('location:javatrigona_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='javatrigona_cms.php'</script>";
	}
}

// Delete javatrigona
if (isset($_POST['deletejavatrigona'])) 
{
	$idjavatrigona = $_POST['idjavatrigona'];

	$getjavatrigona = mysqli_query($koneksi, "DELETE FROM javatrigona WHERE id_javatrigona='$idjavatrigona'");

	if ($getjavatrigona) 
	{
		header('location:javatrigona_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='javatrigona_cms.php'</script>";
	}
}

// kalimantan
if (isset($_POST['kalimantan'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getkalimantan = mysqli_query($koneksi,"INSERT INTO kalimantan (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getkalimantan) 
	{
		header('location:kalimantan_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='kalimantan_cms.php'</script>";
	}
}

// edit kalimantan
if (isset($_POST['editkalimantan'])) 
{
	$idkalimantan = $_POST['idkalimantan'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getkalimantan = mysqli_query($koneksi, "UPDATE kalimantan SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_kalimantan='$idkalimantan'");

	if ($getkalimantan) 
	{
		header('location:kalimantan_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='kalimantan_cms.php'</script>";
	}
}

// Delete kalimantan
if (isset($_POST['deletekalimantan'])) 
{
	$idkalimantan = $_POST['idkalimantan'];

	$getkalimantan = mysqli_query($koneksi, "DELETE FROM kalimantan WHERE id_kalimantan='$idkalimantan'");

	if ($getkalimantan) 
	{
		header('location:kalimantan_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='kalimantan_cms.php'</script>";
	}
}

// maag
if (isset($_POST['maag'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getmaag = mysqli_query($koneksi,"INSERT INTO maag (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getmaag) 
	{
		header('location:maag_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='maag_cms.php'</script>";
	}
}

// edit maag
if (isset($_POST['editmaag'])) 
{
	$idmaag = $_POST['idmaag'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getmaag = mysqli_query($koneksi, "UPDATE maag SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_maag='$idmaag'");

	if ($getmaag) 
	{
		header('location:maag_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='maag_cms.php'</script>";
	}
}

// Delete maag
if (isset($_POST['deletemaag'])) 
{
	$idmaag = $_POST['idmaag'];

	$getmaag = mysqli_query($koneksi, "DELETE FROM maag WHERE id_maag='$idmaag'");

	if ($getmaag) 
	{
		header('location:maag_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='maag_cms.php'</script>";
	}
}

// mint
if (isset($_POST['mint'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getmint = mysqli_query($koneksi,"INSERT INTO mint (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getmint) 
	{
		header('location:mint_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='mint_cms.php'</script>";
	}
}

// edit mint
if (isset($_POST['editmint'])) 
{
	$idmint = $_POST['idmint'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getmint = mysqli_query($koneksi, "UPDATE mint SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_mint='$idmint'");

	if ($getmint) 
	{
		header('location:mint_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='mint_cms.php'</script>";
	}
}

// Delete mint
if (isset($_POST['deletemint'])) 
{
	$idmint = $_POST['idmint'];

	$getmint = mysqli_query($koneksi, "DELETE FROM mint WHERE id_mint='$idmint'");

	if ($getmint) 
	{
		header('location:mint_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='mint_cms.php'</script>";
	}
}

// rambutan
if (isset($_POST['rambutan'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getrambutan = mysqli_query($koneksi,"INSERT INTO rambutan (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getrambutan) 
	{
		header('location:rambutan_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='rambutan_cms.php'</script>";
	}
}

// edit rambutan
if (isset($_POST['editrambutan'])) 
{
	$idrambutan = $_POST['idrambutan'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getrambutan = mysqli_query($koneksi, "UPDATE rambutan SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_rambutan='$idrambutan'");

	if ($getrambutan) 
	{
		header('location:rambutan_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='rambutan_cms.php'</script>";
	}
}

// Delete rambutan
if (isset($_POST['deleterambutan'])) 
{
	$idrambutan = $_POST['idrambutan'];

	$getrambutan = mysqli_query($koneksi, "DELETE FROM rambutan WHERE id_rambutan='$idrambutan'");

	if ($getrambutan) 
	{
		header('location:rambutan_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='rambutan_cms.php'</script>";
	}
}

// randu
if (isset($_POST['randu'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getrandu = mysqli_query($koneksi,"INSERT INTO randu (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getrandu) 
	{
		header('location:randu_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='randu_cms.php'</script>";
	}
}

// edit randu
if (isset($_POST['editrandu'])) 
{
	$idrandu = $_POST['idrandu'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getrandu = mysqli_query($koneksi, "UPDATE randu SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_randu='$idrandu'");

	if ($getrandu) 
	{
		header('location:randu_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='randu_cms.php'</script>";
	}
}

// Delete randu
if (isset($_POST['deleterandu'])) 
{
	$idrandu = $_POST['idrandu'];

	$getrandu = mysqli_query($koneksi, "DELETE FROM randu WHERE id_randu='$idrandu'");

	if ($getrandu) 
	{
		header('location:randu_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='randu_cms.php'</script>";
	}
}

// wild
if (isset($_POST['wild'])) 
{
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getwild = mysqli_query($koneksi,"INSERT INTO wild (manfaat_kiri,manfaat_kanan) VALUES ('$manfaatkiri','$manfaatkanan')");

	if ($getwild) 
	{
		header('location:wild_cms.php');
	}
	else
	{
		echo "<script>alert('Input Manfaat Gagal');document.location='wild_cms.php'</script>";
	}
}

// edit wild
if (isset($_POST['editwild'])) 
{
	$idwild = $_POST['idwild'];
	$manfaatkiri = $_POST['manfaatkiri'];
	$manfaatkanan = $_POST['manfaatkanan'];

	$getwild = mysqli_query($koneksi, "UPDATE wild SET manfaat_kiri='$manfaatkiri',manfaat_kanan='$manfaatkanan' WHERE id_wild='$idwild'");

	if ($getwild) 
	{
		header('location:wild_cms.php');
	}
	else
	{
		echo "<script>alert('Edit Manfaat Gagal');document.location='wild_cms.php'</script>";
	}
}

// Delete wild
if (isset($_POST['deletewild'])) 
{
	$idwild = $_POST['idwild'];

	$getwild = mysqli_query($koneksi, "DELETE FROM wild WHERE id_wild='$idwild'");

	if ($getwild) 
	{
		header('location:wild_cms.php');
	}
	else
	{
		echo "<script>alert('Hapus Manfaat Gagal');document.location='wild_cms.php'</script>";
	}
}
?>