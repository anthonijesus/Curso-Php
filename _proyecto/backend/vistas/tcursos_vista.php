<h2 class="center">Tipos Curso</h2>

<!-- Ingresamos el boton para agregar contenido a la tabla, asi como el modal -->
<a class="waves-effect waves-light btn modal-trigger blue black-text" href="#modal1">Ingresar</a>

<div id="modal1" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Modal Header</h4>
		<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="Placeholder" id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input disabled value="I am not editable" id="disabled" type="text" class="validate">
						<label for="disabled">Disabled</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						This is an inline input field:
						<div class="input-field inline">
							<input id="email_inline" type="email" class="validate">
							<label for="email_inline">Email</label>
							<span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	</div>
</div>

<table class="highlight">
	<thead>
		<tr>
			<th class="center">Name</th>
			<th class="center">Item Name</th>
			<th class="center">Item Price</th>
			<th class="center" style="width:125px">Botones</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td class="center">Alvin</td>
			<td class="center">Eclair</td>
			<td class="center">$0.87</td>
			<td>
				<div class="right">
					<a class="waves-effect waves-light btn blue">
						<i class="material-icons center">edit</i>
					</a>
					<a class="waves-effect waves-light btn red">
						<i class="material-icons center">delete</i>
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="center">Alan</td>
			<td class="center">Jellybean</td>
			<td class="center">$3.76</td>
			<td>
				<div class="right">
					<a class="waves-effect waves-light btn blue">
						<i class="material-icons center">edit</i>
					</a>
					<a class="waves-effect waves-light btn red">
						<i class="material-icons center">delete</i>
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="center">Alan</td>
			<td class="center">Jellybean</td>
			<td class="center">$3.76</td>
			<td>
				<div class="right">
					<a class="waves-effect waves-light btn blue">
						<i class="material-icons center">edit</i>
					</a>
					<a class="waves-effect waves-light btn red">
						<i class="material-icons center">delete</i>
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="center">Alan</td>
			<td class="center">Jellybean</td>
			<td class="center">$3.76</td>
			<td>
				<div class="right">
					<a class="waves-effect waves-light btn blue">
						<i class="material-icons center">edit</i>
					</a>
					<a class="waves-effect waves-light btn red">
						<i class="material-icons center">delete</i>
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="center">Alan</td>
			<td class="center">Jellybean</td>
			<td class="center">$3.76</td>
			<td>
				<div class="right">
					<a class="waves-effect waves-light btn blue">
						<i class="material-icons center">edit</i>
					</a>
					<a class="waves-effect waves-light btn red">
						<i class="material-icons center">delete</i>
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="center">Alan</td>
			<td class="center">Jellybean</td>
			<td class="center">$3.76</td>
			<td>
				<div class="right">
					<a class="waves-effect waves-light btn blue">
						<i class="material-icons center">edit</i>
					</a>
					<a class="waves-effect waves-light btn red">
						<i class="material-icons center">delete</i>
					</a>
				</div>
			</td>
		</tr>

		<tr class="white">
			<td colspan="6">
				<ul class="pagination center">
					<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					<li class="active"><a href="#!" class=black-text>1</a></li>
					<li class="waves-effect"><a href="#!">2</a></li>
					<li class="waves-effect"><a href="#!">3</a></li>
					<li class="waves-effect"><a href="#!">4</a></li>
					<li class="waves-effect"><a href="#!">5</a></li>
					<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				</ul>
			</td>
		</tr>
	</tbody>

</table>