<?php echo "データベース接続をしてみます";
 print date('G');


    try {
            # hostには「docker-compose.yml」で指定したコンテナ名を記載
            require("mysql.php");

            $sql = "SELECT * FROM demo";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        } 

        
        
?>