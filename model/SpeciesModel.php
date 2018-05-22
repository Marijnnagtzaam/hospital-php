<?php

function getAllSpecies() 
{
	$db = openDatabaseConnection();
	
	isset($_GET['order']) ? $order = $_GET['order'] : $order = 'species_id';
	isset($_GET['sort']) ? $sort = $_GET['sort'] : $sort = 'ASC';

	$sql = 
        "SELECT * FROM species ORDER BY $order $sort;";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id;";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function createSpecies() 
{
	$description = isset($_POST['species_description']) ? $_POST['species_description'] : null;

	
	if (strlen($description) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_description) VALUES (:description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description));

	$db = null;
	
	return true;
}

function deleteSpecies($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function editSpecies() 
{
	$description = isset($_POST['description']) ? $_POST['description'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :description WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description,
		':id' => $id));

	$db = null;
	
	return true;
}