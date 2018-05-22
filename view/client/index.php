<h2>Clients</h2>

<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th colspan="2">Actie</th>
    </tr>
    
    <?php foreach ($clients as $client) { ?>
    <tr>
        <td><?= $client['client_firstname']; ?></td>
        <td><?= $client['client_lastname']; ?></td>
        <td><a href="<?= URL ?>client/edit/<?= $client['client_id'] ?>">Edit</a></td>
        <td><a href="<?= URL ?>client/delete/<?= $client['client_id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>

</table>

<p><a href="<?= URL ?>client/create">Create</a></p>