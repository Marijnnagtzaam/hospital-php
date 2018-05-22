<h2>Patiënts</h2>

<table>
    <tr>
        <th><a href="<?= URL ?>patient?order=patient_name&sort=<?php  
            if(!isset($_GET['sort'])){
                echo "DESC";
            }
            elseif($_GET['sort'] == "DESC"){
                echo "ASC";
            } else echo "DESC";
        ?>">Name</a></th>

        <th><a href="<?= URL ?>patient?order=species.species_description&sort=<?php  
            if(!isset($_GET['sort'])){
                echo "DESC";
            }
            elseif($_GET['sort'] == "DESC"){
                echo "ASC";
            } else echo "DESC";
        ?>">Species</a></th>

        <th><a href="<?= URL ?>patient?order=patient_status&sort=<?php  
            if(!isset($_GET['sort'])){
                echo "DESC";
            }
            elseif($_GET['sort'] == "DESC"){
                echo "ASC";
            } else echo "DESC";
        ?>">Status</a></th>

        <th><a href="<?= URL ?>patient?order=clients.client_lastname&sort=<?php  
            if(!isset($_GET['sort'])){
                echo "DESC";
            }
            elseif($_GET['sort'] == "DESC"){
                echo "ASC";
            } else echo "DESC";
        ?>">Client</a></th>

        <th colspan="2">Actie</th>
    </tr>
    
    <?php foreach ($patients as $patient) { ?>
    <?php $patient['client_name'] = $patient['client_firstname'] . " " . $patient['client_lastname'] ?>
    <tr>
        <td><?= $patient['patient_name']; ?></td>
        <td><?= $patient['species_description']; ?></td>
        <td><?= $patient['patient_status']; ?></td>
        <td><?= $patient['client_name']; ?></td>
        <td><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
        <td><a href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>

</table>