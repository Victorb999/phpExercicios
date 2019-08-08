<?php
include "Estacionamento.php";

$estacionamento = [new Estacionamento(1,"Shopping estacionamento G1",10.50)];
$vaga = [
        new Vaga($estacionamento[0],1,"a1","ocupada"),
        new Vaga($estacionamento[0],2,"a2","disponível"),
        new Vaga($estacionamento[0],6,"a3","disponível"),
        new Vaga($estacionamento[0],4,"b1","ocupada"),
        new Vaga($estacionamento[0],5,"b2","disponível"),
        new Vaga($estacionamento[0],6,"b3","ocupada"),
        new Vaga($estacionamento[0],4,"c1","ocupada"),
        new Vaga($estacionamento[0],5,"c2","disponível"),
        new Vaga($estacionamento[0],6,"c3","disponível"),
];


// echo "<tr>";
// echo "<td>".$vaga->idVaga."</td>";
// echo "<td>".$vaga->descricaoVaga."</td>";
// echo "<td>".$vaga->status."</td>";
// echo "</tr>";

?>
<html>
<?php include 'head.php'; ?>
<body>
    <div class="container">
    <div class="card">
        <h5 class="card-header">Estacionamento</h5>
        <div class="card-body">
            <table class="table">
                <?php
                
                foreach($estacionamento as $estacionamentos){?>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"><?php echo $estacionamentos->get("idEstacionamento");?></th>
                        <th scope="col"><?php echo $estacionamentos->get("descricaoEstacionamento");?></th>
                        <th scope="col">Hora: <?php echo 'R$' . number_format($estacionamentos->get("valorhora"), 2, ',', '');?></th>                        
                    </tr>
                </thead>
                <thead class="thead-light">
                    <tr>
                    <th scope="col">id da Vaga</th>
                    <th scope="col">Descrição Vaga</th>
                    <th scope="col">Status</th>                    
                    </tr>
                </thead>
                <tbody>
                <?php
                $count=0;
                $ocupadas=0;
                $disponiveis=0;
                foreach($vaga as $vagas){
                    echo "<tr>";
                    echo "<td>".$vagas->getV("idVaga")."</td>";
                    echo "<td>".$vagas->getV("descricaoVaga")."</td>";
                    echo "<td>".$vagas->getV("status")."</td>";
                    echo "</tr>";
                    $count ++;
                    if($vagas->getV("status") == 'ocupada'){
                        $ocupadas++;
                    }else{
                        $disponiveis++;
                    }
                }
                ?>
                </tbody>
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"><?php echo $count;?> vagas totais</th>
                    <th scope="col"><?php echo $ocupadas;?> vagas ocupadas </th>
                    <th scope="col"><?php echo $disponiveis;?> vagas disponíveis</th>                    
                    </tr>
                </thead>
            <?php }?>
            </table>
        </div>
        </div>
    </div>
</body>
</html>