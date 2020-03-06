<div class="row">
    <div class="col-md-6">
        <center><h1>To Do List</h1></center>
    </div>
    <div class="col-md-6">
        <button class="btn btn-default" type="submit" style="margin-top:20px;">Créer</button>
    </div>

</div>
<?php include('models/read.php');?>
<table class="table table-condensed">
    <?php
        while ($donnees = $req->fetch()){
    ?>
    <tr><td><?php echo$donnees['nom']?></td></tr>
        <?php }  $req->closeCursor();?>

</table>