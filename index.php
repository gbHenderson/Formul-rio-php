<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Único</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        # Para pegar os valores.
        $nome = $_GET["name"]?? "Gabriel";
        $email = $_GET["email"] ?? "Não tem.";
        $estado = $_GET["estado"]??"RJ";
        $sexo = $_GET["sexo"]??"Masculino";
        $nas = $_GET["subject"]??"2000-12-02";
        $men = $_GET["message"]?? "Olá!";
    ?>

<main class="cont">
        <!--Para mandar para o próprio arquivo, usa-se essa action-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <fieldset class="ident">
                <legend>Identificação</legend>
                   <p>
                       <label for="nome">Nome: </label>
                       <input placeholder="Digite seu nome..." type="text" required name="name"
                       id="nome">
                    
                       <label for="email">Email: </label>
                       <input size="28" placeholder="Digite seu e-mail..." required type="email" name="email" id="email">
                
                       <label for="estado">Estado: </label>
                       <select name="estado" id="estado">
                           <option>Acre</option>
                           <option>Alagoas</option>
                           <option>Amapá</option>
                           <option>Amazonas</option>
                           <option>Bahia</option>
                           <option>Ceará</option>
                           <option>Distrito Federal</option>
                           <option>Espírito Santo</option>
                           <option>Goiás</option>
                           <option>Maranhão</option>
                           <option>Mato Grosso</option>
                           <option>Mato Grosso do Sul</option>
                           <option>Minas Gerais</option>
                           <option>Pará</option>
                           <option>Paraíba</option>
                           <option>Pernambuco</option>
                           <option>Piauí</option>
                           <option selected>Rio de Janeiro</option>
                           <option>Rio Grande do Norte</option>
                           <option>Rio Grande do Sul</option>
                           <option>Rondônia</option>
                           <option>Roraima</option>
                           <option>Santa Catarina</option>
                           <option>São Paulo</option>
                           <option>Sergipe</option>
                           <option>Tocantins</option>
                       </select>
                    </p>

                   <fieldset>
                       <legend>Sexo</legend>
                       <input checked name="sexo" type="radio" id="mas">
                       <label for="mas">Masculino</label> 
                       <input id="fem" name="sexo" type="radio">
                       <label for="fem">Feminino</label>
                   </fieldset>

                <p>
                    <label for="nas">Data de Nascimento: </label>
                    <input type="date" name="subject" id="nas">
                </p>
                
                <p>
                    <label for="msg">Mensagem: </label>
                    <textarea name="message" id="msg" cols="45" rows="6" required placeholder="Digite sua mensagem..."></textarea>
                    <button>Enviar</button>
                </p>
            </fieldset>
        </form>
    </main>

    <p>
        <?php 
            echo $nome;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $estado;
            echo "<br>";
            echo $sexo;
            echo "<br>";
            echo $nas;
            echo "<br>";
            echo $men;
        ?>
    </p>
</body>
</html>
