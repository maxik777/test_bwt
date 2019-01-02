<?php foreach ($weather as $val): ?>
    <div class="panel panel-default">
        <div class="panel-heading"><h3><?php echo $val[3]; ?></h3></div>
        <div class="panel-heading">
            <h4>Осадки: <?php echo $val[0]; ?></h4>
            <h4>Tемпература воздуха °C: <?php echo $val[1]; ?></h4>
            <h4>Ощущается °C:<?php echo $val[2]; ?></h4>
        </div>
    </div>

<?php endforeach; ?>