<?php
// エラーを出力する
ini_set('display_errors', "On");
?>

<?php echo "データベース接続をしてみます";


    try {
            require("mysql.php");
            $sql = "SELECT * FROM demo";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);

          
            $name="お名前";
            $type="";
            $age="";

            $sql="INSERT INTO demo (name,type,age)VALUES(:name,:type,:age)";
                $stmt_insert=$db->prepare($sql);
                $stmt_insert->bindValue(':name', $name , PDO::PARAM_STR);
                $stmt_insert->bindValue(':type', $type , PDO::PARAM_STR);
                $stmt_insert->bindValue(':age', $age , PDO::PARAM_STR);
                    
                $stmt_insert->execute();
                var_dump($stmt_insert);
                if($stmt_insert){
                    print"成功です";
                }
                $db=null;

    } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
    } 

        
        
?>