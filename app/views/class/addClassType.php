<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminclass/addClassType" method="POST" class="form">
                    <div class="form-group">
                        <label class="h5 text-primary" for="classType">Class *</label>
                        <input maxlength="255" required class="form-control" type="text" id="classType" name="classType"  placeholder="Enter the class">
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="classCommonName">Class common name / short description</label>
                        <input maxlength="100" class="form-control" type="text" id="classCommonName" name="classCommonName"  placeholder="Enter the class common name">
                        <small class="form-text text-muted">Max. 100 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="shortDescription">class short description</label>
                        <textarea maxlength="255" class="form-control" id="shortDescription" name="shortDescription" rows="4" placeholder="Enter short description" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">class description</label>
                        <textarea maxlength="2000" class="form-control" id="description" name="description" rows="4" placeholder="Enter full description" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="imgURL">Img url</label>
                        <input maxlength="255" class="form-control" type="text" id="imgURL" name="imgURL"  placeholder="Enter the full image url">
                        <small class="form-text text-muted">Max. 255 characters</small>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
