<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminorder/addOrderType" method="POST" class="form">
                    <div class="form-group">
                        <label class="h5 text-primary" for="orderType">Order *</label>
                        <input maxlength="100" required class="form-control" type="text" id="orderType" name="orderType"  placeholder="Enter the order">
                        <small class="form-text text-muted">Max. 100 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="orderName">Order common name</label>
                        <input maxlength="100" class="form-control" type="text" id="orderName" name="orderName"  placeholder="Enter the order common name">
                        <small class="form-text text-muted">Max. 100 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="shortDescription">order short description</label>
                        <textarea maxlength="255" class="form-control" id="shortDescription" name="shortDescription" rows="4" placeholder="Enter short description" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">order description</label>
                        <textarea maxlength="2000" class="form-control" id="description" name="description" rows="4" placeholder="Enter full description" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="imgURL">Img url</label>
                        <input maxlength="255" class="form-control" type="text" id="imgURL" name="imgURL"  placeholder="Enter the full image url">
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <h5 class="text-primary">Higher taxonomy</h5>
                    <div class="input-group mb-3 d-flex">
                        <label class="input-group-text" style="min-width:100px;" for="inputGroupSelect01">Classe</label>
                        <select name="higherTaxonomy" class="form-select flex-fill " id="inputGroupSelect01">
                            <option value="0">Choose...</option>
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
