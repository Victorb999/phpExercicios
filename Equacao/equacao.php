<?php 
//Escreva uma função que receba como parâmetros os coeficientes de uma equação de segundo grau e retorne suas raízes.
function equacaosegundo($a,$b,$c){
    
    //calcula o delta
    $delta = pow($b,2) - 4 * $a * $c;
    
    if ($delta>=0) {
        $res['x1']= (-$b+sqrt($delta))/(2*$a);
        $res['x2']= (-$b-sqrt($delta))/(2*$a);
        return $res;
    }else{
        $res['x1'] = "Erro";
        $res['x2'] = "Não pertence aos reais.";
        return $res;
    }
}

//======================================================
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$resposta = equacaosegundo($a,$b,$c);

?>
<html>
<?php include 'head.php'; ?>
<body>
    <div class="container">
    <div class="card">
        <h5 class="card-header">Resposta</h5>
        <div class="card-body">
            <h1>As raízes obtidas foram:</h1>
            <h1><?php echo $resposta['x1'];?></h1>
            <h1><?php echo $resposta['x2'];?></h1>   
        </div>
        </div>
    </div>
</body>
</html>