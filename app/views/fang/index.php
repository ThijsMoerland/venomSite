<?php 

if(isset($_SESSION['admin'])){
    $adminUser = $_SESSION['admin'];
}

?>
<div class="row">
    <?php
    foreach ($fangTypes as $fangType) { ?>
        <div class="col-sm-12 col-md-4 p-2 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex justify-content-between flex-column">
                        <div class="border-bottom border-dark h-100">
                            <h2 class="card-title"><?= $fangType->getFangType();?></h2>
                            <!-- <img class="card-img-top" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.australiangeographic.com.au%2Ffact-file%2Fcoastal-taipan%2F&psig=AOvVaw2ez-__jHJ3A0UHu52QH0Fm&ust=1696197913875000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLjE_eOr04EDFQAAAAAdAAAAABAJ" alt="Card image cap"> -->
                            <p><b><?= $fangType->getFangCommonName();?></b></p>
                            <p><?= $fangType->getDescription();?></p>
                        </div>
                        <p class="m-1">snakes that have this fang type are every snake from the elapid family</p>
                        <?php
                        if(isset($_SESSION['admin'])){ ?>
                        <div class="border-top border-dark pt-2 d-flex justify-content-around">
                            <form class="w-50 mr-2" action="/admin/editFangTypes" method="POST">
                                <input type="hidden" name="id" value="<?= $fangType->getId();?>">
                                <button type="submit" class="w-100 btn btn-warning" type="submit">Edit</button>
                            </form>
                            <form id="deleteFangTypeForm" class="w-50" action="/admin/deleteFangTypes" method="POST">
                                <input type="hidden" name="id" value="<?= $fangType->getId();?>">
                                <button id="button" type="submit" class="w-100 btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    <?php } ?>
</div>
<script>
    document.getElementById('button').addEventListener('click',(e)=>{
        if(!confirm('Are you sure you want to delete the fang type')){
            e.preventDefault();
        }
    },false)
</script>