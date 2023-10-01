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
                    </div>
                </div>
            </div>
    <?php } ?>
</div>
