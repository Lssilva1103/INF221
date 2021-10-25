<?php
    require_once 'vendor/autoload.php';
   
    use \App\Model\Sensor;
    use \App\Model\SensorDAO;
    
    //$api_key_value = "7d342bc4";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $r1 = insert1();
        $r2 = insert2();
        $r3 = insert3();
        $r4 = insert4();
        $r5 = insert5();
        $r6 = insert6();
        
        //$api_key = test_input($_POST["api_key"]);
        //if($api_key == $api_key_value) {
            
            //$tipo_sensor = $_GET["t"]; //Tipo
            
            //switch ($tipo_sensor){
                //case 's1':
                    //insert1();
                   // break;
               // case 's2':
                    //insert2();
                   // break;
                //case 's3':
                    //insert3();
                   // break;
               // case 's4':
                    //insert4();
                   // break;
               // case 's5':
                    //insert5();
                   // break;
                //case 's6':
                    //insert6();
                   // break;
           // }
            
        //}
        if($r1 == "inseriu" && $r2 == "inseriu" && $r3 == "inseriu" && $r4 == "inseriu" && $r5 == "inseriu" && $r6 == "inseriu"){
            http_response_code(201); // this will get previous response code 200 and set a new one to 400
            //echo http_response_code(); // this will get previous response code which is now 400
            return;
        }else{
            http_response_code(400);
            return;
        }
    }

    function insert1(){
        
        $leitura = new Sensor();
        $leitura->setChave(test_input($_GET["id1"]));

        $leitura->setData(formataData());

        $leitura->setLeitura(test_input($_GET["v1"]));
        
        $sensorDAO = new SensorDAO();
        
        if(isset($_GET["id1"]) && isset($_GET["v1"]) && isset($_GET["dt"])){
            $insert = $sensorDAO->create1($leitura);
        }

        if($insert){
            return "inseriu";
        }else{
            return "nao inseriu";
        }        
    }

    function insert2(){
        
        $leitura = new Sensor();
        $leitura->setChave(test_input($_GET["id2"]));
        $leitura->setData(formataData());
        $leitura->setLeitura(test_input($_GET["v2"]));
        
        $sensorDAO = new SensorDAO();
        
        if(isset($_GET["id2"]) && isset($_GET["v2"]) && isset($_GET["dt"])){
            $insert = $sensorDAO->create2($leitura);
        }

        if($insert){
            return "inseriu";
        }else{
            return "nao inseriu";
        }        
    }

    function insert3(){
        
        $leitura = new Sensor();
        $leitura->setChave(test_input($_GET["id3"]));
        $leitura->setData(formataData());
        $leitura->setLeitura(test_input($_GET["v3"]));
        
        $sensorDAO = new SensorDAO();
        
        if(isset($_GET["id3"]) && isset($_GET["v3"]) && isset($_GET["dt"])){
            $insert = $sensorDAO->create3($leitura);
        }

        if($insert){
            return "inseriu";
        }else{
            return "nao inseriu";
        }        
    }
    
    function insert4(){
        
        $leitura = new Sensor();
        $leitura->setChave(test_input($_GET["id4"]));
        $leitura->setData(formataData());
        $leitura->setLeitura(test_input($_GET["v4"]));
        
        $sensorDAO = new SensorDAO();
        
        if(isset($_GET["id4"]) && isset($_GET["v4"]) && isset($_GET["dt"])){
            $insert = $sensorDAO->create4($leitura);
        }
        
        if($insert){
            return "inseriu";
        }else{
            return "nao inseriu";
        }        
    }

    function insert5(){
        
        $leitura = new Sensor();
        $leitura->setChave(test_input($_GET["id5"]));
        $leitura->setData(formataData());
        $leitura->setLeitura(test_input($_GET["v5"]));
        
        $sensorDAO = new SensorDAO();
        
        if(isset($_GET["id5"]) && isset($_GET["v5"]) && isset($_GET["dt"])){
            $insert = $sensorDAO->create5($leitura);
        }

        if($insert){
            return "inseriu";
        }else{
            return "nao inseriu";
        }        
    }

    function insert6(){
        
        $leitura = new Sensor();
        $leitura->setChave(test_input($_GET["id6"]));
        $leitura->setData(formataData());
        $leitura->setLeitura(test_input($_GET["v6"]));
        
        $sensorDAO = new SensorDAO();
        
        if(isset($_GET["id6"]) && isset($_GET["v6"]) && isset($_GET["dt"])){
            $insert = $sensorDAO->create6($leitura);
        }

        if($insert){
            return "inseriu";
        }else{
            return "nao inseriu";
        }        
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /*function formataData(){
        $data = str_split($_GET["dt"], 2);
        $dt = $data[2] . $data[3] . "-" . $data[1] . "-"  . $data[0];
        $date = Date($dt);
        return $date;


        $hora = str_split($_GET["hr"], 2);
        $hr = $hora[0] . ":" . $hora[1] . ":"  . $hora[2];
        $hora = Time($hr);
        return $hora;
    }*/

    function formataData(){
        $input = $_GET["dt"];
        $data = strtotime($input);
        //echo date('Y/m/d H:i', $data);
        return date('Y/m/d H:i', $data);
    }

?>



