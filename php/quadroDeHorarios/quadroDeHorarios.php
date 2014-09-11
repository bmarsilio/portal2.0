<div class="tab-content">
  <div class="tab-pane fade in active">

  <h3>Quadro De Horários <button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-print"></span></buttom></h3>

	<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Turma</th>
							<th>Disciplina</th>
							<th>Bloco</th>
							<th>Sala</th>
							<th>Dia da Semana</th>
							<th>Data</th>
							<th>Horário</th>
							<th>Professor</th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>Turma 001</td>
							<td>Estudando PHP Básico</td>
							<td>J</td>
							<td>115</td>
							<td>Segunda-Feira</td>
							<td>01/01/2014 - 20/06/2014</td>
							<td>18:50 - 23:50</td>
							<td>Eu</td>
							<td><button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modalQuadro"><span class="glyphicon glyphicon-resize-full"></span></buttom></td>
						</tr>
						<tr>
							<td>Turma 002</td>
							<td>Estudando PHP Avançado</td>
							<td>C</td>
							<td>234</td>
							<td>Quinta-Feira</td>
							<td>04/01/2014 - 20/06/2014</td>
							<td>18:50 - 23:50</td>
							<td>Fulaninho</td>
							<td><button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modalQuadro2"><span class="glyphicon glyphicon-resize-full"></span></buttom></td>
						</tr>
					</tbody>

				</table>
	</div>

</div>
<!--
	MODAL
-->
<div class="modal fade" id="modalQuadro" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title" id="myModalLabel">Detalhes <label style="font-weight:bold!important;">Turma 001</label></h4>
			</div>
			<div class="corpo-modal">
					<div class="col-sm-6">
						<label style="font-weight:bold!important;">Professor</label><br/>
							<span>Eu</span><br/><br/>
						<label style="font-weight:bold!important;">Horário</label><br/>
							<span>18:50 - 23:50</span><br/><br/>
						<label style="font-weight:bold!important;">Dia da Semana</label><br/>
							<span>Segunda-Feira</span><br/></br>
					</div>
					<div class="col-sm-6">
						<label style="font-weight:bold!important;">Sala</label><br/>
							<span>115</span><br/></br>
						<label style="font-weight:bold!important;">Bloco</label><br/>
							<span>J</span><br/></br>
						<label style="font-weight:bold!important;">Disciplina</label><br/>
							<span>Estudando PHP Básico</span><br/></br>
					</div>

					<div class="col-sm-6">
						<br/>
						<label style="font-weight:bold!important;">Frequência (Faltas - %)</label><br/>
							<span>2/4 - 50%</span>
					</div>


					<div class="col-sm-6">
						<br/>
						<label style="font-weight:bold!important;">Média Final</label><br/>
							<span>7</span>
					</div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalQuadro2" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title" id="myModalLabel">Detalhes <label style="font-weight:bold!important;">Turma 002</label></h4>
			</div>
			<div class="corpo-modal">
					<div class="col-sm-6">
						<label style="font-weight:bold!important;">Professor</label><br/>
							<span>Fulaninho</span><br/><br/>
						<label style="font-weight:bold!important;">Horário</label><br/>
							<span>18:50 - 23:50</span><br/><br/>
						<label style="font-weight:bold!important;">Dia da Semana</label><br/>
							<span>Quinta-Feira</span><br/></br>
					</div>
					<div class="col-sm-6">
						<label style="font-weight:bold!important;">Sala</label><br/>
							<span>234</span><br/></br>
						<label style="font-weight:bold!important;">Bloco</label><br/>
							<span>C</span><br/></br>
						<label style="font-weight:bold!important;">Disciplina</label><br/>
							<span>Estudando PHP Avançado</span><br/></br>
					</div>

					<div class="col-sm-6">
						<br/>
						<label style="font-weight:bold!important;">Frequência (Faltas - %)</label><br/>
							<span>1/4 - 25%</span>
					</div>


					<div class="col-sm-6">
						<br/>
						<label style="font-weight:bold!important;">Média Final</label><br/>
							<span>9</span>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
			</div>
		</div>
	</div>
</div>

</div>