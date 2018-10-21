<?php
    function json($re){
        header('Content-type:text/json');
        echo json_encode($re);
    }
    function md5_salt($str,$salt='233'){
    	return md5(md5($str).$salt);
    }
    function ele_bootstrap(){
        echo "<meta charset=\"utf-8\">";
	    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
	    echo "<link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css\">";
	    echo "<script src=\"https://cdn.bootcss.com/jquery/1.11.1/jquery.min.js\"></script>";
	    echo "<script src=\"https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>";

    }
    function ele_head($title='',$keywords='',$description=''){
        echo "<head>";
        echo "<title>".$title."</title>";
        echo "<meta name=\"description\" content=\"".$description."\">";
        echo "<meta name=\"keywords\" content=\"".$keywords."\">";
        bootstrap();
        echo "</head>";
    }
    function ele_table($info,$array=[],$show=[]){
        foreach($array as $key=>$value){
            $swap=$key."=".$value;
            $str=$str.$swap." ";
        }
        echo "<table ".$str.">";
            if(count($show)){
                echo "<tr>";
                    foreach ($show as $th) {
                        echo "<th>".$th."</th>";
                    }
                echo "</tr>";
                foreach ($info as $trd) {
                    echo "<tr>";
                    foreach ($show as $th) {
                        if(isset($trd[$th])){
                            echo "<td>".$trd[$th]."</td>";
                        }
                    }
                    echo "</tr>";
                }
            }else{
                for ($i=0; $i < count($info); $i++) { 
                    if($i==0){
                        echo "<tr>";
                        foreach ($info[$i] as $th => $tv) {
                            echo "<th>".$th."</th>";                            
                        }
                        echo "</tr>";
                    }
                    echo "<tr>";
                    foreach ($info[$i] as $th => $tv) {
                        echo "<td>".$tv."</td>";                            
                    }
                    echo "</tr>";
                }
            }
            
        echo "</table>";
    }
    function ele_q($element='div',$array=[],$info){
        $str='';
        foreach($array as $key=>$value){
            $swap=$key."=".$value;
            $str=$str.$swap." ";
        }
        echo "<".$element." ".$str.">";
        echo $info;
        echo "</".$element.">";
    }
    function ele_s($element='div',$array=[]){
        $str='';
        foreach($array as $key=>$value){
            $swap=$key."=".$value;
            $str=$str.$swap." ";
        }
        echo "<".$element." ".$str.">";
    }
    function ele_e($element='div'){
        echo "</".$element.">";
    }
