<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Aproveitamento</title>
    <link rel="stylesheet" href="../css/fichaAproveitamento.css">
</head>
<body>

            <p>Ficha de estudante</p>
                <hr id="borda">


            <fieldset class="dados__pessoais">
                <legend>Dados Pessoais</legend>
                <div class="semFoto"><img src="../image/no_foto.gif" alt="sem foto">
            </div> 

            <div class="campos">

                <div class="nome">
                <label>Nome Completo:</label>
                <input type="text" name="nome" value="CIRILO CANGANJO" disabled>
                </div>

                <div class="dataNasc">
                <label>Data Nascimento:</label>
                <input type="text" name="data" value="20/10/2021" disabled>
                </div>

                <div class="sexo">
                <label>Sexo:</label>
                <select name="sexo" disabled >
                    <option>MASCULINO</option>
                </select>
                </div>

                <div class="telefone">
                <label>Telefone:</label>
                <input type="tel" name="tel" value="998154234" disabled>
                </div>

                <div class="email">
                <label>Email:</label>
                <input type="email" name="tel" value="exemplo@gmil.com" disabled>
                </div>

                <div class="rc">
                <label>Rua e Casa:</label>
                <textarea name="rc"  cols="30" rows="3" disabled>CASA S/N</textarea>
                </div>

                <div class="pais">
                <label>Pais:</label>
                <select name="pais" disabled >
                    <option>ANGOLA</option>
                </select>
                </div>

                <div class="provincia">
                <label>Provincia:</label>
                <select name="provincia" disabled >
                    <option>HUAMBO</option>
                </select>
                </div>

                <div class="municipio">
                <label>Municipio:</label>
                <select name="municipio" disabled>
                    <option>HUAMBO</option>
                </select>
                </div>

                <div class="bairro">
                <label>Bairro:</label>
                <select name="bairro" disabled>
                    <option>BOM PASTOR</option>
                </select>
                </div>             
                </div>
        </fieldset>
</div>

        <div class="Direita">

     <fieldset class="primeiroFieldset">
         <legend>Informações</legend>

         <ul>
             <li><a id="pessoais"href="#"><img src="../image/pessais.jpg" alt=""> Pessoais</a> </li>
            <li><a href=""><img src="../image/universidad.gif" alt="">Universitária</a></li>
            <li><a href="?url=fichaAproveitamento"><img src="../image/book.png" alt="">Ficha de Aproveitamento</a></li>


         </ul>
     </fieldset>

        <fieldset id="go__out">
            <legend>Operações</legend>
            <ul>
        
            <li><a href="" id="sair"><img src="../image/sair.jpg" alt="">Sair</a></li>


         </ul>
     </fieldset>
</div>

            <div class="table__aproveitamento">

            <table border="1">
         <thead>
             
                 <th >Cadeiras</th>    
                 <th>Semestre</th>
                 <th>Média</th>
                 <th>Frequência</th>
                 <th>Média</th>
                 <th>Exame</th>
                 <th>Média</th>
                 <th>Obs.</th>
                 <th>Recurso</th>
                 <th>Exame</th>
                 <th>Nota</th>

             </tr>
             <tbody>              
                 
                 <tr>
                     <td class="tempos">Base de Dados I</td>
                     
                    
                     <td>1º Semestre</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                    
                </tr>
                <tr>
                     <td class="tempos">Engenharia de Software I</td>

                     <td>1º Semestre</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                </tr>
                <tr>
                     <td class="tempos">Circuítos Eléctricos</td>
                     <td>Anual</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                </tr>
                <tr>
                     <td class="tempos">Redes de Computadores I</td>
                     <td>1º Semestre</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                </tr>
                <tr>
                     <td class="tempos">Redes de Computadores II</td>
                     <td>2º Semestre</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                    
                </tr>

                <tr>
                     <td class="tempos">Programação III</td>
                     <td>Anual</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                    
                </tr>
                <tr class="ultimaCel">
                     <td class="tempos">Inteligência Artificial</td>
                     <td>Anual</td>
                     <td> </td>
                     <td> </td>
                     <td> </td>                     
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                    
                </tr>
             </tbody>
         </thead>
     </table>
    </div>
   
</body>
</html>


