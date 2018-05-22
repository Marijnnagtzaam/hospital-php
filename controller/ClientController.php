<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/index", array(
		'clients' => getAllClients()
	));
}

function create()
{
	render("client/create");
}

function createSave()
{
	if (!createClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
}

function delete($id)
{
	render("client/delete", array(
		'client' => getclient($id)
	));
}
function deleteSave($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "client/index");
}

function edit($id)
{
	render("client/edit", array(
		'client' => getClient($id)
	));
}

function editSave()
{
	if (!editClient()) {
		var_dump($_POST);
		header("Location:" . URL . "error/index");
		exit();
	}

	// var_dump($_POST);
	header("Location:" . URL . "client/index");
} 