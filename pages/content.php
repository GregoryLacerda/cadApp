<!-- Listas -->
<div class="tab-content" id="myTabContent">
    <!-- Aba Adiantamento-->
    <div class="tab-pane fade show active" id="adiant" role="tabpanel" aria-labelledby="adiant-tab">
        <div class="list-group list-group-horizontal-sm">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dia do Pagamento</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Vencimento</th>
                        <th scope="col">Parcelas</th>
                        <th scope="col">V Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $consult->adiantamento(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Aba Final Do Mês-->
    <div class="tab-pane fade" id="fnMes" role="tabpanel" aria-labelledby="fnMes-tab">
        <div class="list-group list-group-horizontal-sm">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dia do Pagamento</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Vencimento</th>                        
                        <th scope="col">Parcelas</th>
                        <th scope="col">V Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $consult->fimMes(); ?> 
                </tbody>
            </table>
        </div>
    </div>

    <!-- Aba dos Atrasados-->
    <div class="tab-pane fade" id="atrasados" role="tabpanel" aria-labelledby="atrasados-tab">
        <div class="list-group list-group-horizontal-sm">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dia do Pagamento</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Vencimento</th>
                        <th scope="col">Parcelas</th>
                        <th scope="col">V Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-danger">
                    <?php $consult->atrasos(); ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modals section -->

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Adicionar nova Conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario Cadastro de conta -->
                <form class="card p-2 border-white" action="db/Cadastrar.php" method="post" comple>
                    <div class="form-row align-items-cente">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome Da Conta</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tipoConta">Tipo de Conta</label>
                            <select id="tipoConta" class="form-control" name="tipoConta" required>
                                <option selected>Cartão de Credito</option>
                                <option>Água e Luz </option>
                                <option>Internet e Telefone</option>
                                <option>Emprestimo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="descri">Descrição</label>
                            <input type="text" class="form-control" id="descri" placeholder="Descrição" name="descri" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="diaPag">Dia do Pagamento</label>
                            <select id="diaPag" class="form-control" name="diaPag" required>
                                <option selected>Adiantamento</option>
                                <option>Final do Mês</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="valor">Valor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" step="any" class="form-control" aria-label="Amount (to the nearest dollar)" id="valor" placeholder="Valor" name="valor" required>

                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="venci">Vencimento</label>
                            <input type="date" class="form-control" id="venci" placeholder="Vencimento" name="venci" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="parc">Parcelas</label>
                            <input type="number" class="form-control" id="parcelas" placeholder="Parcelas" name="parcelas" required>
                        </div>
                        
                        <div class="form-group btn-group btn-group-toggle col-md-6 row-md-1" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="atrasado" id="option1" autocomplete="off" value="não atrasado" checked> Não atrasado
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="atrasado" id="option2" autocomplete="off" value="atrasado"> Atrasado
                            </label>
                        </div>
                    </div>

                    <!-- botões do Modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar nova Conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario Edição de conta -->
                <form class="card p-2 border-white" action=".php" method="post">
                    <div class="form-row align-items-cente">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome Da Conta</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tipoConta">Tipo de Conta</label>
                            <select id="tipoConta" class="form-control" name="tipoConta" required>
                                <option selected>Cartão de Credito</option>
                                <option>Água e Luz </option>
                                <option>Internet e Telefone</option>
                                <option>Emprestimo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="descri">Descrição</label>
                            <input type="text" class="form-control" id="descri" name="descri" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="diaPag">Dia do Pagamento</label>
                            <select id="diaPag" class="form-control" name="diaPag" required>
                                <option selected>Adiantamento</option>
                                <option>Final do Mês</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="valor">Valor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" step="any" class="form-control" aria-label="Amount (to the nearest dollar)" id="valor" name="valor" required>

                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="venci">Vencimento</label>
                            <input type="date" class="form-control" id="venci" placeholder="Vencimento" name="venci" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="parc">Parcelas</label>
                            <input type="number" class="form-control" id="parcelas" name="parcelas" required>
                        </div>
                        
                        <div class="form-group btn-group btn-group-toggle col-md-6 row-md-1" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="atrasado" id="option1" autocomplete="off" value="não atrasado" checked> Não atrasado
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="atrasado" id="option2" autocomplete="off" value="atrasado"> Atrasado
                            </label>
                        </div>
                    </div>

                    <!-- botões do Modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="excluir" >Excluir</button>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
                
            </div>

        </div>
    </div>
</div>

<!-- Excluir Modal
<div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="excluirModalLabel">Excluir Conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir esta conta?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="delete">Sim</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
      </div>
    </div>
  </div>
</div> -->

