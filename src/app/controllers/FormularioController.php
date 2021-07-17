<?php
include_once '../services/FormularioService.php';
include_once '../models/Formulario.php';

// Init objects
$formularioService = new FormularioService();
$formularioModel = new Formulario();

//Init variables
$action = "";
$id = "";
$title = "";
$structure = "";
$description = "";

if ($_POST) {
    $action = $_POST['action'] ?? null;
    $title = $_POST['title'] ?? null;
    $description = $_POST['description'] ?? null;
    $structure = $_POST['structure'] ?? null;
    $id = $_POST['id'] ?? null;

    switch ($action) {
        case 'create':
            $formularioModel->setTitulo($title);
            $formularioModel->setEstructura($structure);
            $formularioModel->setDescripcion($description);
            if ($formularioService->addForm($formularioModel)) {
                echo 'Successful';
            } else {
                echo 'Error';
            }
            break;
        case 'delete':
            if ($formularioService->deleteForm($id)) {
                echo 'Successful';
            } else {
                echo 'Error';
            }
            break;
        case 'getOne':
           $formularioModel = $formularioService->getFormById($id);
            if ($formularioModel != null) {
                $json = array();
                $json[] = array(
                    'id' => $formularioModel->getId(),
                    'title' => $formularioModel->getTitulo(),
                    'description' => $formularioModel->getDescripcion(),
                    'structure' => $formularioModel->getEstructura(),
                    'creation_date' => $formularioModel->getFechaCreacion(),
                );
                $jsonstring = json_encode($json[0]);
                echo $jsonstring;
            }else{
                echo 'error';
            }
            break;
        default:
            echo 'No valid option';
    }
} else {
    $json = array();
    foreach ($formularioService->getAllForms() as $row) {
        $json[] = array(
            'id' => $row->getId(),
            'title' => $row->getTitulo(),
            'description' => $row->getDescripcion(),
            'structure' => $row->getEstructura(),
            'creationDate' => date_format($row->getFechaCreacion(), "d/m/Y H:i:s"),
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}