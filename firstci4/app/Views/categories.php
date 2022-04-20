<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1><?= $title ?> </h1>
<div class="row">
    <div class="col-12 col-ms-8 offset-md-2">
    
        <form method="post" action="/categories">
            
            <br>
            <div class="form-group">
                <button class="btn btn-success btn-sm" value="A" name="category_A">Category A</button>
                <br><br>
                <button class="btn btn-success btn-sm" value="B" name="category_B">Category B</button><br><br>
                
                <?php 
                if(isset($_POST['category_A'])) {
                    echo '<br>Categore A<br>';
                }
                else if(isset($_POST['category_B'])) {
                    echo '<br>Categore B<br>';
                }

                ?>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>


