<?php
include_once '../configs/Connection.php';
include_once '../models/Formulario.php';

class FormularioService
{
    private Connection $conn;

    public function addForm(Formulario $formulario): bool
    {
        $titulo = $formulario->getTitulo();
        $estructura = $formulario->getEstructura();
        $descripcion = $formulario->getDescripcion();
        $conn = new Connection();
        try {
            $transaction = $conn->getConnection();
            $query = "INSERT INTO formulario VALUES(null, :titulo, :descripcion, :estructura, sysdate())";
            $stmt = $transaction->prepare($query);
            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":estructura", $estructura);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        } finally {
            $conn = null;
        }
    }

    public function deleteForm(int $id):bool
    {
        $conn = new Connection();
        try {
            $transaction = $conn->getConnection();
            $stmt = $transaction->prepare("DELETE FROM formulario WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        } finally {
            $conn = null;
        }
    }

    public function getFormById(int $id): Formulario
    {
        $conn = new Connection();
        $formulario = new Formulario();
        try {
            $transaction = $conn->getConnection();
            $stmt = $transaction->prepare("SELECT * FROM formulario WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch();
            $formulario->setId($row['id']);
            $formulario->setTitulo($row['titulo']);
            $formulario->setDescripcion($row['descripcion']);
            $formulario->setEstructura($row['estructura']);
            $formulario->setFechaCreacion(date_create($row['fecha_creacion']));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
        return $formulario;
    }

    public function getAllForms(): array
    {
        $conn = new Connection();
        $formularioList = array();
        try {
            $transaction = $conn->getConnection();
            $stmt = $transaction->prepare("SELECT * FROM formulario");
            $stmt->execute();
            $rows = $stmt->fetchAll();
            foreach ($rows as $row) {
                $formulario = new Formulario();
                $formulario->setId($row['id']);
                $formulario->setTitulo($row['titulo']);
                $formulario->setDescripcion($row['descripcion']);
                $formulario->setEstructura($row['estructura']);
                $formulario->setFechaCreacion(date_create($row['fecha_creacion']));
                array_push($formularioList, $formulario);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
        return $formularioList;
    }
}