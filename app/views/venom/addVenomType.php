<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminvenom/addVenomType" method="POST" class="form">
                    <div class="form-group">
                        <label class="h5 text-primary" for="venomType">Venom type</label>
                        <input maxlength="35" required class="form-control" type="text" id="venomType" name="venomType"  placeholder="Enter the venom type">
                        <small class="form-text text-muted">Max. 35 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">Venom description</label>
                        <textarea maxlength="2000" class="form-control" id="description" name="description" rows="4" placeholder="Enter full description" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="effect">Venom effect</label>
                        <textarea maxlength="2000" class="form-control" id="effect" name="effect" rows="4" placeholder="Enter full description of the general effect of the venom" cols="50"></textarea>
                        <small class="form-text text-muted">Max. 2000 characters</small>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
