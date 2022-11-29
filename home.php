<?php 
    include("protect.php");
    include("conexao.php");
    include("dados.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        p{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .rock{
            width: 150px;
        }
        .cabeça{
            display:  flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: #5C171C;
            position: relative;
            border-bottom: 2px solid white;
        }
        .user{
            display: flex;
            flex-direction: row;
        }
        a{
            text-decoration: none;
            
        }
        .titulo{
            margin-top: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
        }
        .userrr{
            color: white;
            font-weight: bolder;
            margin-top: 20px;
            position: absolute;
            right: 130px;
            top: 20px;
        }
        .foto{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: black ;
            margin-top: 20px;
            margin-right: 65px;
            cursor: pointer;
            justify-content: center;
            align-items: center;
            display: flex;
            
        }
        
        .primeiraL{
            color: white;
            font-size: 25px;
            
            
           
        }
        .logout{
            color: white;
            position: absolute;
            top: 35px;
            right: 15px;
            
            
            
        }
        .config{
            width: 100px;
            height: 100px;
            background-color: black;
            position: absolute;
            top: 100px;
            right: 40px;
            border-radius: 15px;
          text-align: center;
            display: none;
            
        }
        .logout:hover{
            text-decoration: underline;
            color: white;
        
        }
        .seta{
            border-bottom: 20px solid black;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        float: left;
        position: absolute;
        top: 80px;
        right: 83px;
        display: none;
        }
        .visivel{
            display: block;
        }
        .titulo2{
            text-align: center;
            font-family: verdana;
            font-weight: bolder;
            padding-top: 50px;
            color: white;
        }
        table th{
            padding: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 13px;
            border: 2px solid white;
            background-color: black;
            
        }
        table td{
            border: 2px solid white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 5px;
            text-align: center;
            background-color: black;
        }
        table{
            border-collapse: collapse;
            margin: auto;
            margin-top: 20px;
            color: white;
           
            
            
            
        }
        .titulo3{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            padding-top: 50px;
            color: white;
        }
        main{
            background-color: #FA4434;
            padding-bottom: 20px;
            border-bottom: 2px solid white;
        
        }
        .inputt{
            border: none;
            border-bottom: 2px solid white;
            width: 300px;
            outline: none;
            color: white;
            margin-bottom: 50px;
            background-color: transparent;
        }
        .container-input{
            position: relative;
        }
        label{
            position: absolute;
            left: 2px;
            color: white;
            opacity: 40%;
            transition: 0.2s;
            cursor: auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 15px;
        }
        .container-input .inputt:focus ~ label,
        .container-input .inputt:valid ~ label{
            transform: translateY(-30px);
            font-size: 12px;
        }
        .main2{
            background-color: #7A433E;
            padding-bottom: -20px;
            position: relative;
            border-bottom: 2px solid white;
           
            
        }
        .rock2{
            width: 500px;
            
            position: absolute;
            bottom: 0px;
            
        }
        .container2{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        form{
            margin-left: 680px;
            margin-top: 80px;
            margin-bottom: 30px;
        }
        .criar{
            width: 200px;
            padding: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bolder;
            background-color:#5C171C ;
            color: white;
            cursor: pointer;
            transition: 0.2s;
            margin-left: 50px;
        }
        .criar:hover{
            background-color: black;
        }
        footer{
            background-color: #5C171C;
            text-align: center;
            color: white;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .invisivel{
            display: none;
        }
        .msn{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            width: 300px;
            background-color: green;
            border: 2px solid black;
            text-align: center;
            color: white;
            position: absolute;
            z-index: 99;
            padding: 5px;
            top: 445px;
            right: 200px;
           
        }
    </style>
</head>
<body>
        <Header class="cabeça">
            <img class="rock" src="./imgs/The-Rock-PNG-High-Quality-Image.png" alt="">
            <h1 class="titulo">The Rock Corporation</h1>
            <section class="user">
                <span class="foto"  onclick="mostar()"><p class="primeiraL"><?php echo $_SESSION['email'][0];?></p></span>
                <p class="userrr"><?php echo $_SESSION['email'];?></p>
                <div class="config" ><a id="log" class="logout" href="logout.php">LOGOUT</a></div>
                <div class="seta"></div>
                
            </section>
        </Header>
         <main>
                <h1 class="titulo2">Lista De Sigmas</h1>
                <article>
                    <table>
                        <tr>
                            <th>Sigma</th>
                            <th>Densidade Muscular</th>
                            <th>Mulheres Rejeitadas</th>
                            <th>Nivel de frieza</th>
                            <th>Classificação</th>
                        </tr>
                        <tr>
                            <td>The Rock</td>
                            <td>1000%</td>
                            <td>5350</td>
                            <td>100%</td>
                            <td>Alfa</td>
                        </tr>
                        <?php 
                            foreach ($resultado as $sigma) {
                                $nome = $sigma['Nome'];
                                $Densidade = $sigma['Densidade_Muscular'];
                                $Rejeitadas = $sigma['Mulheres_Rejeitadas'];
                                $nivel = $sigma['nivel_de_frieza'];
                                $classs = $sigma['Classificacao'];
                            
                        ?>

                        <tr>
                        <td><?=$nome?></td>
                        <td><?=$Densidade?></td>
                        <td><?=$Rejeitadas?></td>
                        <td><?=$nivel?></td>
                        <td><?=$classs?></td>
                        </tr>

                        <?php
                            }
                        ?>
                        
                    </table>
                </article>
         </main>
         <section class="main2">
             <h1 class="titulo3">Crie Aqui O Seu Sigma</h1>
             <section class="container2">
                 <section><img class="rock2" src="./imgs/ddzb32e-3ab9be4d-28aa-4c51-ad0d-461278701679.png" alt=""></section>
                 <section>
                     <form action="dados.php" method="POST">
                        <div class="container-input">
                            <input required class="inputt" name="Nome"  type="text" id="Nome" placeholder="">
                            <label for="Nome">Nome do Sigma</label>
                        </div>
                        <div class="container-input">
                            <input required class="inputt" name="Densidade"  type="text" id="Densidade" placeholder="">
                            <label for="Densidade">Densidade Muscular (%)</label>
                        </div>
                        <div class="container-input">
                            <input required class="inputt" name="Rejeitada"  type="text" id="rejeitada" placeholder="">
                            <label for="rejeitada">Mulheres Rejeitadas</label>
                        </div>
                        <div class="container-input">
                            <input required class="inputt" name="Nivel"  type="text" id="Nivel" placeholder="">
                            <label for="Nivel">Nivel de Frieza</label>
                        </div>
                        <div class="container-input">
                            <input required class="inputt" name="classificacao"  type="text" id="classificacao" placeholder="">
                            <label for="classificacao">Classficação</label>
                        </div>
                        <button type="submit" class="criar" name="criar">Criar</button>
                     </form>
                 </section>
             </section>
         </section>
    <footer>
        <p>Site Criado Por Estudantes RedPillados &copy 2022</p>
    </footer>
 <script>
    const mens = document.querySelector(".msn")
    const logout = document.querySelector("#log")
    const seta = document.querySelector(".seta")
    const config = document.querySelector(".config")
    const btn = document.querySelector(".criar")


    const nome = document.querySelector("#Nome")
    const densidade = document.querySelector("#Densidade")
    const rejeitada = document.querySelector("#rejeitada")
    const nivel = document.querySelector("#Nivel")
    const classi = document.querySelector("#classificacao")
    
    
       function mostar(){
       
        seta.classList.toggle("visivel")
        config.classList.toggle("visivel")
       
       

    }



 </script>
</body>
</html>