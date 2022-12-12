<?php

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user_sub_menu WHERE id = $id");

    return mysqli_affected_rows($conn);
}
$id = $_GET["id"];

if( hapus($id) > 0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '<?=$this->load->view('menu/submenu');?>';
    </script>
";
}else{
echo "
<script>
    alert('data gagal dihapus');
    document.location.href = '<?=$this->load->view('menu/submenu');?>';
</script>

";
}

?>