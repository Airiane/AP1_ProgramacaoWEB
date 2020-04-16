<div class="container">
    <div class="row">
          <div class="col-sm-7">
               <img id="layouthome" src="assets/img/Cadastro.png">
          </div>
        <div class="col-sm-5">
        <h3>Entre em contato comigo</h3><br />  
               <form action="adm/?c=c&a=ica" method=POST enctype='multipart/form-data'>
                    <div class="form-group">
                         <div>
                              <label>Nome: </label>
                              <input type="text" class="form-control" name="nome"/>
                         </div>
                         <div>
                              <label>Email: </label>
                              <input type="text" name="email" class="form-control" id="email"/>
                         </div>
                         <div>
                             <label>Mensagem: </label>
                             <textarea name="mensagem" class="form-control" rows="10" cols="30"></textarea>
                         </div>
                         <br>
                         <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
               </form>
        </div>
    </div>
</div>