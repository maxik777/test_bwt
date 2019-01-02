<?php foreach ($comments as $comment):?>

    <div class="panel panel-default">
        <div class="panel-heading">  <p><?php echo $comment['email'];?></p></div>
        <div class="panel-body">
            <h4><?php echo $comment['name'];?> :</h4>
            <p><?php echo $comment['message'];?></p>
        </div>
    </div>

<?php endforeach ;?>
