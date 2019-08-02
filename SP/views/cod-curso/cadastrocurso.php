<div class="col-9 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Cadastrar Usuario</h4>
            <form class="form-sample" method="post" action="<?= localview('save-users') ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sobrenome</label>
                            <div class="col-sm-9">
                                <input type="text" name="sobrenome" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tipo de Usuario</label>
                            <div class="col-sm-8">
                                <select name="tipo" class="form-control">
                                    <option value="6">Triagem</option>
                                    <option value="5">Estagiario</option>
                                    <option value="4">Coord. Estagio</option>
                                    <option value="3">Médico</option>                                    
                                    <option value="2">Coord. Curso</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">RA</label>
                            <div class="col-sm-9">
                                <input type="text" name="RA" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Login</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="login"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Senha</label>
                            <div class="col-sm-9">
                                <input type="password" name="senha" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Salvar Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>