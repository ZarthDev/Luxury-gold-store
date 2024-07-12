<?php
    session_start();

    class Post {
        public $account;
        public $post_title;
        public $description_post;

        function __construct ( $account, $post_title, $description_post ) {
            $this->account          = $account;
            $this->post_title       = $post_title;
            $this->description_post = $description_post;
        }
    }

    $post = new Post($_POST['account'], $_POST['title'], $_POST['post_text']);

    try {
        $dsn = "mysql:host=localhost;dbname=store_db";
        
        $pdo = new PDO($dsn, 'root', '');

        $stmt = $pdo->prepare('
            insert into tb_posts (
                account, post_title, description_post
            ) values (
                :account, :post_title, :description_post
            )
        ');

        $stmt->bindParam(':account', $post->account);
        $stmt->bindParam(':post_title', $post->post_title);
        $stmt->bindParam(':description_post', $post->description_post);
        $stmt->execute();

        $stmt = $pdo->prepare('
            select * from tb_posts
        ');

        $stmt->execute();

        $posts_finish = $stmt->fetch(PDO::FETCH_OBJ);
        $_SESSION['posts'] = $posts_finish;

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem-sucedida!";

        header('Location: blog.php');
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }
?>