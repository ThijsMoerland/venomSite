<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/updateFang" method="POST" class="form">
                    <input type="hidden" value="<?=$fang->getId();?>" name="id">
                    <div class="form-group">
                        <label class="h5 text-primary" for="fangType">Scientific fang name</label>
                        <input maxlength="35" required class="form-control" type="text" id="fangType" name="fangType" value="<?=$fang->getFangType();?>"  placeholder="<?=$fang->getFangType();?>">
                        <small id="scientificNameWordCounter"class="form-text text-muted">Max. 35 characters</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="h5 text-primary" for="fangCommonName">Common fang name / short description</label>
                        <input maxlength="50" class="form-control" type="text" id="fangCommonName" name="fangCommonName" value="<?=$fang->getFangCommonName();?>" placeholder="<?=$fang->getFangCommonName();?>">
                        <small id="commonNameWordCounter" class="form-text text-muted">Max. 50 characters</small>
                    </div>

                    <div class="form-group">
                        <label class="h5 text-primary" for="description">Description</label>
                        <textarea maxlength="1000" class="form-control" id="description" name="description" rows="4" placeholder="<?=$fang->getDescription();?>" cols="50"><?=$fang->getDescription();?></textarea>
                        <small id="descriptionWordCounter" class="form-text text-muted">Max. 1000 characters</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    let scientificName = document.getElementById('fangType');
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