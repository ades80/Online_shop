<?php 
	include 'db.php';

	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_category WHERE category_id = '".$_GET['idk']."' ");
		echo '<script>window.location="data-kategori.php"</script>';
	}

    if(isset($_GET['idp'])){
        $produk= mysqli_query($conn, "SELECT product_image FROM tb_product WHERE product_id = '".$_GET['idp']."' ");
        $p = mysqli_fetch_object($produk);

        unlink('./produk/'.$p->product_image);
        $delete = mysqli_query($conn, "DELETE FROM tb_product WHERE product_id = '".$_GET['idp']."' ");
        echo '<script>window.location="data-produk.php"</script>';
    }
 ?>




































 <!-- <?php
include 'db.php';

if (isset($_GET['idk']) && !empty($_GET['idk'])) {
    $idk = mysqli_real_escape_string($conn, $_GET['idk']);
    $delete = mysqli_query($conn, "DELETE FROM tb_category WHERE category_id = '$idk'");

    if ($delete) {
        echo '<script>alert("Data berhasil dihapus!"); window.location="data-kategori.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data!"); window.location="data-kategori.php";</script>';
    }
} else {
    echo '<script>alert("ID kategori tidak valid!"); window.location="data-kategori.php";</script>';
}
?> -->
