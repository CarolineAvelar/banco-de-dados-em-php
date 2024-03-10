<h1>Cadastro de usuário</h1>
<div class="row">
    <form class="col s12" action="index.php?link=3&acaoU=inserir" method="post">
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <input name="nome" id="name" type="text" class="validate">
          <label for="name">Nome</label>
        </div>        
      </div>
     <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="senha" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
     <input type="submit" name="submit" value="Inserir"> 
     
    </form>
  </div>