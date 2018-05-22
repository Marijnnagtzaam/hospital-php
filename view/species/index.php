
<h2>Species</h2>

<table>
    <tr>
        <th><a href="<?= URL ?>species?order=species_id&sort=<?php  
            if(!isset($_GET['sort'])){
                echo "DESC";
            }
            elseif($_GET['sort'] == "DESC"){
                echo "ASC";
            } else echo "DESC";
        ?>">#</a></th>

        <th><a href="<?= URL ?>species?order=species_description&sort=<?php
            if(!isset($_GET['sort'])){
                echo "DESC";
            }
            elseif($_GET['sort'] == "DESC"){
                echo "ASC";
            } else echo "DESC";
        ?>">Description</a></th>
        <th colspan="2">Actie</th>
    </tr>
    
    <?php foreach ($species as $species_) { ?>
    <tr>
        <td><?= $species_['species_id']; ?></td>
        <td><?= $species_['species_description']; ?></td>
        <td><a href="<?= URL ?>species/edit/<?= $species_['species_id'] ?>">Edit</a></td>
        <td><a href="<?= URL ?>species/delete/<?= $species_['species_id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>

</table>

<p><a href="<?= URL ?>species/create">Create</a></p>
