<?php
header('Content-type: text/html;charset="UTF-8"');
if(isset($_POST['i'])){
    $value = array('가위', '바위', '보');    //    배열 작성
 
    $ply = $_POST['i'];
    $cpu = mt_rand(0,2);
 
    if($ply == $cpu){ //    같을경우
        echo 'DRAW'; 
    }else if($ply==0&&$cpu==1){    //    가위 vs 바위
        echo 'LOSE';
    }else if($ply==0&&$cpu==2){    //    가위 vs 보
        echo 'WIN';
    }else if($ply==1&&$cpu==0){    //    바위 vs 가위
        echo 'WIN';
    }else if($ply==1&&$cpu==2){    //    바위 vs 보
        echo 'LOSE';
    }else if($ply==2&&$cpu==0){    //    보 vs 가위
        echo 'LOSE';
    }else if($ply==2&&$cpu==1){    //    보 vs 바위
        echo 'WIN';
    }
    echo ' ('.$value[$ply].' vs '.$value[$cpu].')';
}else{
    echo '
    <form method="POST">
        <select name="i">
            <option value="0">가위</option>
            <option value="1">바위</option>
            <option value="2">보</option>
        </select>
        <input type="submit">
    </form>
    ';
}
?>