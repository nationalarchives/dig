<div class="panel panel-default">
    <div class="panel-heading">
		<?php
            $letters = range('A','Z');
            $k = array_rand($letters);
            $v = $letters[$k];
		?>
        <a href="#">
            <h3 class="panel-title"><?php echo 'Transfer '.$v; ?></h3>
        </a>
    </div>
    <div class="panel-body">
        <div class="col-md-1">
            <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
        </div>
        <div class="col-md-11">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <div class="btn-group pull-right" role="group" aria-label="...">
                <button type="button" class="btn btn-default">Button 1</button>
                <button type="button" class="btn btn-default">Button 2</button>
                <button type="button" class="btn btn-default">Button 3</button>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        Transfer Footer
    </div>
</div>