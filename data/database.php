<?php 

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

 <p>データベース接続をしてみます。<br>
 localhost:4040にアクセスすると、データベースを管理できるphpMyadminが開きます.
 <br>
 user userpassでログインできます。<br>
 今はデータを管理するテーブルが一つもないので、教科書を参考にしつつdemoテーブルを作り、
 idカラム,nameカラム,typeカラム,ageカラムの構造にしてください。</p>