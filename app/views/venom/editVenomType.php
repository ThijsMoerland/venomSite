<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/adminvenom/updateVenomType" method="POST" class="form">
                    <input type="hidden" value="<?=$venom->getId();?>" name="id">
                    <div class="form-group">
                        <label class="h5 text-primary" for="venomType">Scientific venom name</label>
                        <input maxlength="100" required class="form-control" type="text" id="venomType" name="venomType" value="<?=$venom->getVenomType();?>"  placeholder="<?=$venom->getVenomType();?>">
                        <small id="scientificNameWordCounter"class="form-text text-muted">Max. 100 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">Description</label>
                        <textarea maxlength="2000" class="form-control" id="description" name="description" rows="4" placeholder="<?=$venom->getDescription();?>" cols="50"><?=$venom->getDescription();?></textarea>
                        <small id="descriptionWordCounter" class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="effect">Venom Effect</label>
                        <textarea maxlength="2000" class="form-control" id="effect" name="effect" rows="4" placeholder="<?=$venom->getEffect();?>" cols="50"><?=$venom->getEffect();?></textarea>
                        <small id="descriptionWordCounter" class="form-text text-muted">Max. 2000 characters</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    let scientificName = document.getElementById('venomType');
    let commonName = document.getElementById('fangCommonName');
    let description = document.getElementById('description');

    ['keydown','keyup','onchange'].forEach( event =>{
        scientificName.addEventListener(event, function(){
            if(scientificName.value.length > 35){
                document.getElementById('scientificNameWordCounter').classList.add('text-danger');
                document.getElementById('scientificNameWordCounter').classList.remove('text-muted');
            } else {
                document.getElementById('scientificNameWordCounter').classList.add('text-muted');
                document.getElementById('scientificNameWordCounter').classList.remove('text-danger');
            }
        });
    });  
    
    ['keydown','keyup','onchange'].forEach( event =>{
        commonName.addEventListener(event, function(){
            if(commonName.value.length > 50){
                document.getElementById('commonNameWordCounter').classList.add('text-danger');
                document.getElementById('commonNameWordCounter').classList.remove('text-muted');
            } else {
                document.getElementById('commonNameWordCounter').classList.add('text-muted');
                document.getElementById('commonNameWordCounter').classList.remove('text-danger');
            }
        });
    });  
    
    ['keydown','keyup','onchange'].forEach( event =>{
        description.addEventListener(event, function(){
            if(description.value.length > 1000){
                document.getElementById('descriptionWordCounter').classList.add('text-danger');
                document.getElementById('descriptionWordCounter').classList.remove('text-muted');
            } else {
                document.getElementById('descriptionWordCounter').classList.add('text-muted');
                document.getElementById('descriptionWordCounter').classList.remove('text-danger');
            }
        });
    });
</script> -->