<?php
if(isset($_SESSION['admin'])){ ?>

    <div class="row">
        <div class="col-12 p-2">
            <div class="card">
                <div class="card-body">
                    <form class="w-100 mr-2 mb-0" action="/adminclass/editClassTypesView" method="POST">
                        <input type="hidden" name="id" value="<?=$class->getId();?>">
                        <button type="submit" class="w-100 btn btn-warning" type="submit">Edit Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php } ?>
<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?= $class->getClassType();?></h1>
        <h4 class="class-subtitle text-muted"><?= $class->getClassCommonName();?></h4>
        <div class=" my-5 d-flex justify-content-evenly flex-wrap gap-3">
            <p><?= $class->getDescription();?></p>            
            <img class="w-25" src="<?= $class->getImgURL();?>" alt="Class image not set">
        </div>

            <h5>Lagere taxonomy</h6>
            
            <div class="taxonomy d-flex justify-content-start">
            <?php foreach($lowerTaxonomy as $order){ ?>
                <div class="card border border-rounded mr-2 mb-2" style="max-width: 200px;">
                    <div class="card-body">
                        <h6 class="card-title"><?=$order->getOrderType();?> (order)</h6>
                        <p><?=$order->getOrderName();?></p>
                        <img src="<?=$order->getImgURL();?>" alt="Image not set" class="mw-100">
                        <form class="w-100 m-2" action="/order/orderDetailview" method="POST">
                            <input type="hidden" name="id" value="<?=$order->getId();?>">
                            <button type="submit" class="w-100 btn btn-primary" type="submit">Lean more</button>
                        </form>
                    </div>
                    
                </div>
            <?php } ?>
            
        </div>
    </div>
</div>