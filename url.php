<?php
    include('db.php');
    function generateRandomKey(){
        $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charsLength=strlen($chars);
        $randomKey='';
        for($i=0;$i<5;$i++){
            $randomKey .=$chars[rand(0,$charsLength-1)];
        }
        return $randomKey;
    }

    $userInput=$_POST['url'];
    if(filter_var($userInput,FILTER_VALIDATE_URL)){
        $sql="SELECT * from sites where fullurl='$userInput'";
        $result=$conn->query($sql);
        //var_dump($result);
        if($result->num_rows>0){
            echo "url already exits in database";
            $row=$result->fetch_assoc();
            $short_url=$_SERVER['HTTP_REFERER']."decode?c=".$row['shorturl'];
            $op=array("original_url"=>$row['fullurl'],
                        "short_url"=>$short_url);
        }
        else{
                $rand=generateRandomKey();
                $sql="INSERT INTO sites(fullurl,shorturl) VALUES('$userInput','$rand')";
                //var_dump($rand);
                $result=$conn->query($sql);
                $short_url=$_SERVER['HTTP_REFERER']."/decode?c=".$rand;
                $op=array("original_url"=>$userInput,
                            "short_url"=>$short_url);
        }
        echo "<pre style='word-wrap: break-word; white-space: pre-wrap;'>".json_encode($op,JSON_UNESCAPED_SLASHES)."</pre>";
    }
    else{
        $error=array("error"=>"Invalid Url.Try again");
        echo "<pre style='word-wrap: break-word; white-space: pre-wrap;'>".json_encode($error)."</pre>";
    }
 ?>
