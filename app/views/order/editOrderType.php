<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminorder/updateOrder" method="POST" class="form">
                    <input type="hidden" value="<?=$order->getId();?>" name="id">
                    <div class="form-group">
                        <label class="h5 text-primary" for="orderType">Class</label>
                        <input maxlength="255" required class="form-control" type="text" id="orderType" name="orderType" value="<?=$order->getOrderType();?>"  placeholder="<?=$order->getOrderType();?>">
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="h5 text-primary" for="orderName">Common Class name / short description</label>
                        <input maxlength="100" class="form-control" type="text" id="orderName" name="orderName" value="<?=$order->getOrderName();?>" placeholder="<?=$order->getOrderName();?>">
                        <small class="form-text text-muted">Max. 100 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="shortDescription">class short description</label>
                        <textarea maxlength="255" class="form-control" id="shortDescription" name="shortDescription" rows="4" placeholder="<?=$order->getShortDescription();?>" cols="50"><?=$order->getShortDescription();?></textarea>
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">Description</label>
                        <textarea maxlength="1000" class="form-control" id="description" name="description" rows="4" placeholder="<?=$order->getShortDescription();?>" cols="50"><?=$order->getShortDescription();?></textarea>
                        <small id="descriptionWordCounter" class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="imgURL">Image URL</label>
                        <input maxlength="255" class="form-control" type="text" id="imgURL" name="imgURL" value="<?=$order->getImgURL();?>" placeholder="<?=$order->getImgURL();?>">
                        <small id="commonNameWordCounter" class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <h5 class="text-primary">Higher taxonomy</h5>
                    <div class="input-group mb-3 d-flex">
                        <label class="input-group-text" style="min-width:100px;" for="inputGroupSelect01">Classe</label>
                        <select name="higherTaxonomy" class="form-select flex-fill " id="inputGroupSelect01">
                            <option value="0" selected>Keep the same</option>
                            <?php foreach($classes as $class){ ?>
                                <option value="<?=$class->getId();?>"><?=$class->getClassType();?> (<?=$class->getClassCommonName();?>)</option>
                            <?php } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>