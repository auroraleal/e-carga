                <div class="row">
                            <div class="col-md-3">
                                <label for="ano">Data do Carregamento</label>
                                
                                <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="dt_carregamento" name="dt_carregamento" value="{{ $rastreio->dt_carregamento ?? '' }}" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <label for="planurb">Placa do Caminhão</label>
                                <input type="text" class="form-control" id="placa_caminhao" name="placa_caminhao" value="{{ $rastreio->placa_caminhao ?? '' }}">
                            </div>
                            <div class="col-md-3">
                                <label for="secretaria_responsavel">Produto</label>
                                <input type="text" class="form-control" id="produto" name="produto" value="{{ $rastreio->produto ?? '' }}">
                            </div>
                            <div class="col-md-3">
                                <label for="orgao">Quantidade Carregada</label>
                                <input type="text" class="form-control" id="quantidade_carregada" name="quantidade_carregada" value="{{ $rastreio->quantidade_carregada ?? '' }}">
                            </div>
                            <div class="col-md-6">
                                <label for="sit">Transportadora</label>
                                <input type="text" class="form-control" id="transportadora" name="transportadora" value="{{ $rastreio->transportadora ?? '' }}">
                            </div>
                             <div class="col-md-6">
                                <label for="sit">Nota Fiscal</label>
                                <input type="text" class="form-control" id="nota_fiscal" name="nota_fiscal" value="{{ $rastreio->nota_fiscal ?? '' }}">
                            </div>
                            <div class="col-md-3">
                              <label for="inicio">Previsão de Chegada</label>

                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="previsao_chegada" name="previsao_chegada" value="{{ $rastreio->previsao_chegada ?? '' }}" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <div class="col-md-3">
                              <label for="inicio">Data de Chegada</label>

                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="data_chegada" name="data_chegada" value="{{ $rastreio->data_chegada ?? '' }}" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <div class="col-md-3">
                              <label for="inicio">Saida do Terminal</label>

                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="saida_terminal" name="saida_terminal" value="{{ $rastreio->saida_terminal ?? '' }}" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                              </div>
                              <!-- /.input group -->
                            </div>
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-primary next-step">Salvar</button>
                    </div>
