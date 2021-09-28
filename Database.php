<?php
class Database
{
    private $user = 'root';
    private $password = '';
    private $name = 'formdata';

    /**
     * Connect to database
     *
     * @return PDO
     */
    public function getDb(): PDO
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $db = null;
        try {
            $db = new PDO('mysql:host=localhost;dbname=' . $this->name . ';charset=UTF8', $this->user, $this->password);
        } catch (Exception $e) {
            die('Oups! Erreur de connexion: ' . $e->getMessage());
        }

        return $db;
    }
}
