<html>
<?php include 'head.php'; ?>
<body>
    <div class="container">
    <div class="card">
        <h5 class="card-header">Calcula equação 2º grau</h5>
        <div class="card-body">
            <form action="equacao.php" method="post">

                
                <div class="form-group">
                    <label for="a">A</label>
                    <input type="number" class="form-control" id="a" placeholder="Digite o a" name="a">
                </div>
                <div class="form-group">
                    <label for="b">b</label>
                    <input type="number" class="form-control" id="b" placeholder="Digite o b" name="b">
                </div>
                <div class="form-group">
                    <label for="c">c</label>
                    <input type="number" class="form-control" id="c" placeholder="Digite o c" name="c">
                </div>
               
                <button type="submit" class="btn btn-primary">Calcular</button>

            </form>
        </div>
        </div>
    </div>
</body>
</html>