<?php


namespace MyAPP;

class bingo{
    public function create1(){
  $nums=[];
        for($i=0; $i<5; $i++){
            $col=range($i * 15 + 1, $i * 15 + 15);
            shuffle($col);
            //範囲を決めてシャッフルして前から5個取り出す。iは列
            $nums[$i]=array_slice($col,0,5);
        }
      $nums[2][2]="FREE";
      return $nums;
    }


    public function create2(){ //インスタンス化する関数の中で以下が動かない。。
        
        $stmt2 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 2");
        $status = $stmt2->execute();
    
        if($status==false){
          queryError($stmt2);
        }else{
          while( $result1 = $stmt2->fetch(PDO::FETCH_ASSOC)){
            $num1 = $result1["first"];
            $num2 = $result1["second"];
            $num3 = $result1["third"];
            $num4 = $result1["fourth"];
            $num5 = $result1["fifth"];
         }
        }
        $stmt3 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 3");
        $status = $stmt3->execute();
    
        if($status==false){
          queryError($stmt3);
        }else{
          while( $result2 = $stmt3->fetch(PDO::FETCH_ASSOC)){
            $num6 = $result2["first"];
            $num7 = $result2["second"];
            $num8 = $result2["third"];
            $num9 = $result2["fourth"];
            $num10 = $result2["fifth"];
         }
        }
        $stmt4 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 4");
        $status = $stmt4->execute();
    
        if($status==false){
          queryError($stmt4);
        }else{
          while( $result3 = $stmt4->fetch(PDO::FETCH_ASSOC)){
            $num11 = $result3["first"];
            $num12 = $result3["second"];
            $num13 = $result3["third"];
            $num14 = $result3["fourth"];
            $num15 = $result3["fifth"];
         }
        }
        $stmt5 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 5");
        $status = $stmt5->execute();
    
        if($status==false){
          queryError($stmt5);
        }else{
          while( $result4 = $stmt5->fetch(PDO::FETCH_ASSOC)){
            $num16 = $result4["first"];
            $num17 = $result4["second"];
            $num18 = $result4["third"];
            $num19 = $result4["fourth"];
            $num20 = $result4["fifth"];
         }
        }
        $stmt6 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 6");
        $status = $stmt6->execute();
    
        if($status==false){
          queryError($stmt6);
        }else{
          while( $result5 = $stmt6->fetch(PDO::FETCH_ASSOC)){
            $num21 = $result5["first"];
            $num22 = $result5["second"];
            $num23 = $result5["third"];
            $num24 = $result5["fourth"];
            $num25 = $result5["fifth"];
         }
        }

        $nums=[];
                  $col1=[$num1,$num2,$num3,$num4,$num5];
                  $col2=[$num6,$num7,$num8,$num9,$num10];
                  $col3=[$num11,$num12,$num13,$num14,$num15];
                  $col4=[$num16,$num17,$num18,$num19,$num20];
                  $col5=[$num21,$num22,$num23,$num24,$num25];
                  shuffle($col1);
                  shuffle($col2);
                  shuffle($col3);
                  shuffle($col4);
                  shuffle($col5);
                  $nums[0]=$col1;
                  $nums[1]=$col2;
                  $nums[2]=$col3;
                  $nums[3]=$col4;
                  $nums[4]=$col5;
            $nums[2][2]="FREE";
            return $nums;
          }

}