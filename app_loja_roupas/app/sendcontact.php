<?php
    session_start();

    class Question {
        public $id;
        public $name;
        public $email;
        public $subject;
        public $text;

        function __construct ( $name, $email, $subject, $text ) {
            $this->name    = $name;
            $this->email   = $email;
            $this->subject = $subject;
            $this->text    = $text;
        }
    }

    $question = new Question($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['text']);

    try {
        $dsn = "mysql:host=localhost;dbname=store_db";
        
        $pdo = new PDO($dsn, 'root', '');

        $stmt = $pdo->prepare('
            insert into tb_questions (
                nome, email, subject, description
            ) values (
                :name, :email, :subject, :description
            );'
        );
        
        $stmt->bindParam(':name', $question->name);
        $stmt->bindParam(':email', $question->email);
        $stmt->bindParam(':subject', $question->subject);
        $stmt->bindParam(':description', $question->text);
        $stmt->execute();

        $stmt = $pdo->prepare('
            select * from tb_questions 
        ');

        $stmt->execute();

        $questions_finish = $stmt->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['questions'] = $questions_finish;

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem-sucedida!";

        header('Location: contact.php');
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }
?>