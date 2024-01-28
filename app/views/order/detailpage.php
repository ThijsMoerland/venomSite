<?php
if(isset($_SESSION['admin'])){ ?>

    <div class="row">
        <div class="col-12 p-2">
            <div class="card">
                <div class="card-body">
                    <form class="w-100 mr-2 mb-0" action="/adminorder/editOrderTypesView" method="POST">
                        <input type="hidden" name="id" value="<?=$order->getId();?>">
                        <button type="submit" class="w-100 btn btn-warning" type="submit">Edit Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php } ?>
<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?= $order->getOrderType();?></h1>
        <h4 class="class-subtitle text-muted"><?= $order->getOrderName();?></h4>
        <div class=" my-5 d-flex justify-content-between flex-wrap gap-3">
            <p><?= $order->getDescription();?></p>            
            <img class="w-25" src="<?= $order->getImgURL();?>" alt="Class image not set">
        </div>

            <h5>Hogere taxonomy</h6>
            
            <div class="taxonomy d-flex justify-content-between">
            <div class="card border border-rounded" style="max-width: 200px;">
                <div class="card-body">
                    <h6 class="card-title"><?=$higherTaxonomy->getClassType();?> (classe)</h6>
                    <p><?=$higherTaxonomy->getClassCommonName();?></p>
                    <img src="<?=$higherTaxonomy->getImgURL();?>" alt="Image not set" class="mw-100">
                    <form class="w-100 m-2" action="/class/classDetailview" method="POST">
                        <input type="hidden" name="id" value="<?=$higherTaxonomy->getId();?>">
                        <button type="submit" class="w-100 btn btn-primary" type="submit">Lean more</button>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
</div>