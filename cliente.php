<?php
    include_once("templates/header.php");
?>

   <div class="container-cadastro">
        <div class="title__cadastro">
            <h1>Cadastro Cliente</h1>
        </div>
        <form action="" method="post">
            <input type="text" name="nome" placeholder="Nome do Cliente" autocomplete="off">
            <input type="text" name="sobrenome" placeholder="Sobrenome do Cliente" autocomplete="off">
            <input type="text" name="endereco" placeholder="Endereço" autocomplete="off">
            <input type="text" name="referencia" placeholder="Referência" autocomplete="off">
            <select name="bairro" id="">
                <option value="">Bairro</option>
                <option value="Anjo da Guarda">Anjo da Guarda</option>
                <option value="Anjo da Guarda">Alto da Eperança</option>
                <option value="Anjo da Guarda">Fumacê</option>
                <option value="Anjo da Guarda">Gancharia</option>
                <option value="Anjo da Guarda">V São Luis</option>
                <option value="Anjo da Guarda">M Fecury II</option>
                <option value="Anjo da Guarda">M Fecury I</option>
                <option value="Anjo da Guarda">Vila Nova</option>
            </select>
           <div class="group-datas">
                <div>
                    <label for="Data de Fabricacao">Data de Fabricacao</label>
                    <input type="date" name="frabicacao" id="" class="date">
                </div>
            
                <div>
                    <label for="Data de Validade">Data de Validade</label>
                    <input type="date" name="validade" id="" class="date">
                </div>
           </div>
           
            <input type="submit" value="Cadastrar">
        </form>
   </div>

   <!-- <div class="lista-cliente">
        <div class="title__list">
            <h1>Lista de Cliente</h1>
        </div>
        <li>Nome</li>
        <li>sobrenome</li>
   </div> -->
<?php include_once("templates/footer.php")?>