<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Livros</title>
</head>
<body>
  <h2>Cadastro de Livros</h2>

  <form id="livroForm" onsubmit="return cadastrarLivro()">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" required><br><br>

    <label for="autor">Autor:</label>
    <input type="text" id="autor" required><br><br>

    <label for="ano">Ano de Publicação:</label>
    <input type="number" id="ano" required><br><br>

    <input type="submit" value="Cadastrar Livro">
  </form>

  <h3>Livros Cadastrados:</h3>
  <ul id="livrosLista"></ul>

  <script>
    function cadastrarLivro() {
      
      var titulo = document.getElementById("titulo").value;
      var autor = document.getElementById("autor").value;
      var ano = document.getElementById("ano").value;

      
      var novoItem = document.createElement("li");
      novoItem.innerHTML = "<strong>Título:</strong> " + titulo + "<br><strong>Autor:</strong> " + autor + "<br><strong>Ano:</strong> " + ano;

      
      var lista = document.getElementById("livrosLista");
      lista.appendChild(novoItem);

     
      document.getElementById("titulo").value = "";
      document.getElementById("autor").value = "";
      document.getElementById("ano").value = "";

      
      return false;
    }
  </script>
</body>
</html>