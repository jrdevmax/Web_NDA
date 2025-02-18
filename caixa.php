<?php   include_once("templates/header.php")?>

<div class="container-caixa">

    <div>
        <h1 class="title">Cupom</h1>
        <div class="cupom ">
            <div class=" d-flex">
                <img class="img__cupom" src="img/logo.png" alt="">
            </div>
            <div class="cupom__text d-block">
                <h4>Dados do Empresa</h4>
                <hr>
                <p>Empresa: Nego da Água </p>
                <p>CNPJ: 00-00.00.0001/00</span>
                <p>Tel/Cel: (98) 9 0000-0000</p>
                <p>Vendedor: Fulano</p>

                <h4>Dados do Cliente</h5>
                <hr>
                <p>produto: </span>
                <p>Quantidade: </p>
                <p>Preço: </p>
                <p>Desconto: </p>
            </div>

        </div>
        <button type="submit" class="finalizar" value="finalizar">Finalizar</button>
    </div>

    <div class="pre-venda d-flex">
        <form action="" method="post">
            <h1 class="title">pre-venda</h1>
          
            <input type="text" name="produto" placeholder="Produto" class="input-venda">
            <input type="text" name="quantidade" placeholder="Quantidade/Volume" class="input-venda">
            <input type="text" name="preco" placeholder="Preço" class="input-venda">
            <input type="text" name="desconto" placeholder="Desconto" class="input-venda">
            
            <div class="d-block container-total">
                <span>
                    <p>Total:</p>
                </span>
                <span>
                    <p style="color:green">Desconto:</p>
                </span>
            </div>

            <div class="group-actions">
                <button type="submit" class="btn" value="finalizar">Finalizar</button>
                <button type="submit" class="btn" style="background-color:green" value="adicionar">Adicionar</button>
                <!-- <button type="submit" class="btn" style="background-color:red" value="finalizar">Deletar</button> -->
            </div>
            
        </form>
    </div>

</div>



<?php include_once("templates/footer.php")?>