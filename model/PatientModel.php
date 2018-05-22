<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

        isset($_GET['order']) ? $order = $_GET['order'] : $order = 'patient_name';
	isset($_GET['sort']) ? $sort = $_GET['sort'] : $sort = 'ASC';

	$sql = 
        "SELECT patients.patient_name, patients.patient_id, species.species_description, clients.client_firstname, clients.client_lastname, patients.patient_status
        FROM patients
        JOIN species ON
        patients.species_id = species.species_id
        JOIN clients ON
        patients.client_id = clients.client_id
        ORDER BY $order $sort;";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
