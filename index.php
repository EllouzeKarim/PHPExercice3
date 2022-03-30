<?php
include_once 'entete.php';
session_start();
$_SESSION['user'] = 'user1';
?>
<div class="container">

    <h1 style="text-align: center">Vous pouvez écrire vos note</h1>
    <form action="note.php" method="post">
        <div class="form-group">
            <label for="Titre">Titre:</label>
            <textarea class="form-control" name="Titre" id="Titre" rows="1" placeholder="Titre" ></textarea>
        </div>
        <div class="form-group">
        <label for="note">Note:</label>
        <textarea class="form-control" name="note" id="note" rows="4" placeholder="..." ></textarea>
    </div>
    <br>
    <div class="form-check">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

</body>
</html>