<?php 

class UserDataMapper {

    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function findUserById($id) {
        $statement = $this->pdo->prepare('SELECT * FROM user WHERE id_user = :id');

        $statement->execute(['id' => $id]);

        $userData = $statement->fetch();
        ///var_dump('user', $userData);
        // 
        if (empty($userData)) {
            return null;
        }

        return new User($userData['login']);
    }

    public function createUser(array $data) {

    }

    public function updateUser(User $user, array $data) {

    }

    public function deleteUser(User $user) {
        
    }
}