<?php
include_once 'entete.php';
session_start();
$_SESSION['user'] = 'user1';

if (isset($_SESSION['notes'])) {

    $_SESSION['notes'] = array_merge($_SESSION['notes'],[ $_POST['Titre']], [$_POST["note"]]);
} else {

    $_SESSION['notes'] = array_merge([$_POST['Titre']],[$_POST["note"]]);
}

?>

<div class="container" id="1">
    <h1 style="text-align: center">Notes</h1>
    <br><br>
    <?php
    if ($_SESSION["user"] == "user1") {
    for ($i=0;$i<count($_SESSION['notes']);$i++){

            ?>
            <table class="table table-sm">
                <tr>
                    <td class="col-2" ><b><?= $_SESSION['notes'][$i] ; $i++; ?></b></td>
                    <td class="col-10"><?= ($_SESSION['notes'][$i]); ?></td>
                </tr>
            </table>
        <?php }
    }  ?>
</div>
</body>
</html>