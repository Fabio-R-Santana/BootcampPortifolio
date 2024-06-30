<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Portifolio Fábio</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script>
        function validacao(){
            let nome = document.getElementById("name").value
            let email = document.getElementById("email").value
            let mensagem = document.getElementById("descricao").value
            const rejex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
            if(nome == ""){
                alert("Preencha seu nome corretamente");
                    return false;
                }if(email == "" || !rejex.teste(email)){
                    alert("Preencha seu email corretamente");
                    return false;
                }if(mensasgem == ""){
                    alert("Preencha a mensagem corretamente");
                    return false;
                }
            return true;
        }

        function construirProjetos(){
            const jasonPortifolio = `[
                {
                "projetoNome":"MONTASK",
                "projetoIMG":"IMGmontask.jpeg",
                "projetoDesc": "O projeto se trata de um site desenvolvidop por 4 pessoas, para organizar tarefas do dia a dia escolar",
                "projetoLink": "https://github.com/dashboard"
                },
                {
                "projetoNome":"ARDUINO",
                "projetoIMG":"arduino.jpeg",
                "projetoDesc": "Carrinho robô feito com arduino, progeto idealizado nas dependencias do Senac e no curso Programação para Robótica",
                "projetoLink": "https://linkFake.com/arduino    "
                }
                ]`;
                let objetoProjetos = JSON.parse(jasonPortifolio);
                //cria o template original para ser copiado abaixo
                const template = document.getElementById('caixaTemplate');
                // Adiciona o objeto ao container de objetos
                const container = document.getElementById('objtContainer');
                //forech para fazer o loop que passara pelo json
                objetoProjetos.forEach(projeto =>{
                // Clona o template
                const objetoClone = document.importNode(template.content, true);

                // Preenche os dados do objeto
                objetoClone.querySelector('.objetoNome').textContent = projeto.projetoNome;
                objetoClone.querySelector('.objetoDesc').textContent = projeto.projetoDesc;
                objetoClone.querySelector('.objetoLink').textContent = projeto.projetoLink;
                objetoClone.querySelector('.objetoLink').href = projeto.projetoLink;
                objetoClone.querySelector('#objetoImagem').src = projeto.projetoIMG;
                container.appendChild(objetoClone);
                })//termina o forEach
                
        }
        document.addEventListener('DOMContentLoaded', function() {
            construirProjetos();
        });
    </script>
  </head>
  <body>
    <header>
        <div class="caixa">
            <nav>
                <a>Fábio Rafael Santana</a>
            </nav>
        </div>
    </header>

        <section class="texto-principal">
            <h2 class="titulo-principal"> Sobre Mim</h2>
                <p class="texto">Prazer!! meu nome é: <strong>Fábio Rafael Santana</strong> Tenho 17 anos, estou cursando o 3° ano do ensino médio Técnico em desenvolvimento de sistemas, Atualmente, tenho interresse de fazer uma faculdade na área de tecnologia.</p><br>
                <p class="texto">Gosto ler, assistir filmes e séries, cozinhar, jogar, aprender coisas novas.</p><br>
                <p class="texto">Além do desenvolvimento web, me interresei bastante pelo bootcamp Estou animado com a possibilidade de contribuir com o meu grupo, onde posso colaborar com outras pessoas talentosos e continuar aprendendo e crescendo profissionalmente, espero poder contribuir com o projeto.</p><br>
                <p class="texto">Acredito firmemente na importância do aprendizado contínuo e estou sempre buscando aprimorar minhas habilidades e conhecimentos, seja através de cursos, projetos pessoais ou colaboração com outros profissionais.</p><br>
                <h3 class="titulo-principal">Capacitações</h3>

            <div class="conteudo-lista">
                <ul>
                    <li class="itens">HTML e CSS</li>
                    <li class="itens">PYTHON</li>
                    <li class="itens">Javascript</li>
                    <li class="itens">C</li>
                    <li class="itens">Programação para Robótica(Arduíno)</li>
                </ul>
            </div>

            <div class="contato">
                <h1 class="tituloContato">Contato</h1>
                <form action="#" method="post" class="formContato" >
                    <label for="name" class="labelContato" >Nome</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email" class="labelContato">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="descricao" class="labelContato">Descrição</label>
                    <textarea id="descricao" name="descricao" cols="70" rows="4" required></textarea>

                    <button type="submit">Enviar</button>
                </form>
            </div>
            
        

    <!-- Definição do template -->
    <template id="caixaTemplate">
        <div class="objeto">
            <img id="objetoImagem" alt="objetoImg" >
            <h2 class="objetoNome" cont> AAAA </h2>
            <p class="objetoDesc"></p>
            <a class="objetoLink"> aaaaa </a>
        </div>
    </template>

    <!-- a div para substituir os objetos -->
    <div id="objtContainer" class="objtCont">

    </div>
    
    </section>

        <footer>
            <p>&copy;Fábio Rafael Santana</p>
            <a class="github" href="https://github.com/Fabio-R-Santana">GitHub</a><br>
        </footer>
    </body>
</html>
