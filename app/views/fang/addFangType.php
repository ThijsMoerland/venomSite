<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminfang/addFangType" method="POST" class="form">
                    <div class="form-group">
                        <label class="h5 text-primary" for="fangType">Scientific fang name</label>
                        <input maxlength="35" required class="form-control" type="text" id="fangType" name="fangType"  placeholder="Enter scientific name">
                        <small class="form-text text-muted">Max. 35 characters</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="h5 text-primary" for="fangCommonName">Common fang name / short description</label>
                        <input maxlength="50" class="form-control" type="text" id="fangCommonName" name="fangCommonName" placeholder="Enter short common description">
                        <small class="form-text text-muted">Max. 50 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">Description</label>
                        <textarea maxlength="1000" class="form-control" id="description" name="description" rows="4" placeholder="Enter full description" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 1000 characters</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
