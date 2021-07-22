<?php $this->start('body'); ?>
<h1 class="text-center red">Building The site Tables!</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
            <?php foreach ($this->Buildtables as $value): ?>
                <li class="list-group-item"><?=$value?> <span class="badge">good</span></li>
            <?php endforeach;?>
            </ul> 
        </div>
    </div>
</div>
<?php $this->end(); ?>