
 	<div id="list" class="row">

	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>SIAPE</th>
                    <th>Email</th>
                    <th>Data Cadastro</th>
                    <th>Clasificação</th>
					<th class="actions">Status</th>
					<th class="actions">Acesso</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1001</td>
					<td>Rafael Carvalho Rosina</td>
					<td>023130</td>
                    <td>rafaelcl14@hotmail.com</td>
                    <td>09/02/1996</td>
                    <td>Presidente</td>
					<td class="actions">
					<select class="form-control " name="classificacao" value="" id="clasificacao" required>
                      <option value="1">Ativado</option>
                      <option value="2">Desativado</option>
             		</select>
					</td>
					<td>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Nivel de Acesso</a>
					</td>
				</tr>
				<tr>
					<td>1002</td>
					<td>Matheus Marques Faino</td>
					<td>123456</td>
                    <td>zebuchudo@hotmail.com</td>
                    <td>09/02/1999</td>
                    <td>Membro</td>
					<td class="actions">
					<select class="form-control " name="classificacao" value="" id="clasificacao" required>
                      <option value="1">Ativado</option>
                      <option value="2">Desativado</option>
					</select>
					</td>
					<td>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Nivel de Acesso</a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

	</div> <!-- /#list -->

  <nav aria-label="Page navigation example" id="bottom" class="row">
    <ul class="pagination">
      <li class="page-item"><a class="page-link " href="#">Proxima</a></li>
      <li class="page-item"><a class="page-link " href="#">1</a></li>
      <li class="page-item"><a class="page-link " href="#">2</a></li>
      <li class="page-item"><a class="page-link " href="#">3</a></li>
      <li class="page-item"><a class="page-link " href="#">Anterior</a></li>
    </ul>
  </nav>



 <!-- Modal -->
 <div class="modal fade bd-example-modal-lg" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-dialog-scrollable modal-dialog modal-xl" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalScrollableTitle">Nivel de Acesso</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="shadow-none p-3 mb-5 bg-light rounded ">
           <br>
           <h3>Permissões de Acesso</h3>
           <br>
           <br>
           <div class="form-row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">

               <div class="form-check col-2 ">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" for="gridCheck">Funcionario</label>
               </div>
               <div class="form-check col-2 ">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" for="gridCheck">Edital</label>
               </div>
               <div class="form-check col-2">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" for="gridCheck">Questões</label>
               </div>
               <div class="form-check col-2">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" for="gridCheck">Termo</label>
               </div>
               <div class="form-check col-2">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" for="gridCheck">Aluno</label>
               </div>
               <div class="form-check col-2">
                 <input class="form-check-input" type="checkbox" id="gridCheck">
                 <label class="form-check-label" for="gridCheck">Nucleo Familiar</label>
               </div>

         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button type="button" class="btn btn-success">Salvar</button>
       </div>
     </div>
   </div>
 </div>
