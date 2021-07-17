<?php


class Formulario
{
    private int $id;
    private string $titulo;
    private string $descripcion;
    private string $estructura;
    private DateTime $fechaCreacion;

    /**
     * Formulario constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return string
     */
    public function getEstructura(): string
    {
        return $this->estructura;
    }

    /**
     * @param string $estructura
     */
    public function setEstructura(string $estructura): void
    {
        $this->estructura = $estructura;
    }

    /**
     * @return DateTime
     */
    public function getFechaCreacion(): DateTime
    {
        return $this->fechaCreacion;
    }

    /**
     * @param DateTime $fechaCreacion
     */
    public function setFechaCreacion(DateTime $fechaCreacion): void
    {
        $this->fechaCreacion = $fechaCreacion;
    }
}