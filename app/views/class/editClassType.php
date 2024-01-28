<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminclass/updateClass" method="POST" class="form">
                    <input type="hidden" value="<?=$class->getId();?>" name="id">
                    <div class="form-group">
                        <label class="h5 text-primary" for="classType">Class</label>
                        <input maxlength="255" required class="form-control" type="text" id="classType" name="classType" value="<?=$class->getClassType();?>"  placeholder="<?=$class->getClassType();?>">
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="h5 text-primary" for="classCommonName">Common Class name / short description</label>
                        <input maxlength="100" class="form-control" type="text" id="classCommonName" name="classCommonName" value="<?=$class->getClassCommonName();?>" placeholder="<?=$class->getClassCommonName();?>">
                        <small class="form-text text-muted">Max. 100 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="shortDescription">class short description</label>
                        <textarea maxlength="255" class="form-control" id="shortDescription" name="shortDescription" rows="4" placeholder="<?=$class->getShortDescription();?>" cols="50"><?=$class->getShortDescription();?></textarea>
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">Description</label>
                        <textarea maxlength="1000" class="form-control" id="description" name="description" rows="4" placeholder="<?=$class->getDescription();?>" cols="50"><?=$class->getDescription();?></textarea>
                        <small id="descriptionWordCounter" class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="imgURL">Image URL</label>
                        <input maxlength="255" class="form-control" type="text" id="imgURL" name="imgURL" value="<?=$class->getImgURL();?>" placeholder="<?=$class->getImgURL();?>">
                        <small id="commonNameWordCounter" class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>