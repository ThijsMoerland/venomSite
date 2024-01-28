<?php 

if(isset($_SESSION['admin'])){ ?>

<div class="row">
    <div class="col-12 p-2">
        <div class="card">
            <div class="card-body">
                <form class="w-100 mr-2 mb-0" action="/adminclass/addClassTypeView" method="POST">
                    <button type="submit" class="w-100 btn btn-primary" type="submit">Add Class</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<div class="row">
    <?php
    foreach ($classes as $class) { ?>
        <div class="col-sm-12 col-md-6 col-lg-3 p-2 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex justify-content-between flex-column">
                        <div class="border-bottom border-dark">
                            <h2 class="card-title"><?= $class->getClassType();?></h2>
                            <?= $class->getImgURL() ? '<img class="card-img-top" src="'.$class->getImgURL().'" alt="Card image cap">' : '<b>No image available</b>'; ?>
                            <p><b><?= $class->getClassCommonName(); ?></b></p>
                        </div>
                        <p><?= $class->getShortDescription() ? $class->getShortDescription() : "short class desciption not set";?></p>
                    
                        <div class="p-3 border-top border-dark pt-3 d-flex justify-content-around">
                            <form class="w-100 mr-2" action="/class/classDetailview" method="POST">
                                <input type="hidden" name="id" value="<?=$class->getId();?>">
                                <button type="submit" class="w-100 btn btn-primary" type="submit">Lean more</button>
                            </form>
                            <?php
                            if(isset($_SESSION['admin'])){ ?>
                                <form class="w-50 mr-2" action="/adminclass/editClassTypesView" method="POST">
                                    <input type="hidden" name="id" value="<?=$class->getId();?>">
                                    <button type="submit" class="w-100 btn btn-warning" type="submit">Edit</button>
                                </form>
                                <form id="deleteFangTypeForm" class="w-50" action="/adminclass/deleteClass" method="POST">
                                    <input type="hidden" name="id" value="<?=$class->getId();?>">
                                    <button onclick="return confirmDelete()" id="button" type="submit" class="w-100 btn btn-danger" type="submit">Delete</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>
</div>

<script>
function confirmDelete(){
        if(confirm('Are you sure you want to delete this class type') == false){
            return false;
        }
    }
</script>