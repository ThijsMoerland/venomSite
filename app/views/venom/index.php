<?php 

if(isset($_SESSION['admin'])){ ?>

<div class="row">
    <div class="col-12 p-2">
        <div class="card">
            <div class="card-body">
                <form class="w-100 mr-2 mb-0" action="/adminvenom/addVenomTypeView" method="POST">
                    <button type="submit" class="w-100 btn btn-primary" type="submit">Add Venom type</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<div class="row">
    <?php
    foreach ($venomTypes as $venomType) { ?>
        <div class="col-sm-12 col-md-3 p-2 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex justify-content-between flex-column">
                        <div class="border-bottom border-dark">
                            <h2 class="card-title"><?= $venomType->getVenomType();?></h2>
                            <!-- <img class="card-img-top" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.australiangeographic.com.au%2Ffact-file%2Fcoastal-taipan%2F&psig=AOvVaw2ez-__jHJ3A0UHu52QH0Fm&ust=1696197913875000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLjE_eOr04EDFQAAAAAdAAAAABAJ" alt="Card image cap"> -->
                            <p><?= $venomType->getDescription() ? $venomType->getDescription() : "Venom desciption not set";?></p>
                            <p><?= $venomType->getEffect() ? $venomType->getEffect() : "Venom effect not set";?></p>
                        </div>
                        <p><?= $venomType->getFoundInSpecies() ? $venomType->getFoundnSpecies() : "Species that might have this venom unset";?></p>
                        <?php
                        if(isset($_SESSION['admin'])){ ?>
                        <div class="border-top border-dark pt-3 d-flex justify-content-around">
                            <form class="w-50 mr-2" action="/admin/editVenomTypesView" method="POST">
                                <input type="hidden" name="id" value="">
                                <button type="submit" class="w-100 btn btn-warning" type="submit">Edit</button>
                            </form>
                            <form id="deleteFangTypeForm" class="w-50" action="/admin/deleteVenomTypes" method="POST">
                                <input type="hidden" name="id" value="">
                                <button onclick="return confirmDelete()" id="button" type="submit" class="w-100 btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    <?php } ?>
</div>
