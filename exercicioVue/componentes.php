<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Estudo  Componentes VUE.JS + PHP</title>

	<!-- boostrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- boostrap css -->

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- css -->
</head>
<body>
<div id="app">

	<h4 class="text-center">{{tittle}}</h4>
<div class="container">
	<div class="card">
	  <div class="card-block">
		<div class="form-group">
			<label for="">{{titulo}}</label>
			<input type="text" class="form-control" v-model="campo" v-on:keyup.enter="add()">
		</div>
		<button class="btn btn-primary" v-on:click="add()" >ENVIAR</button>	 
	  </div>
	</div>

	<br><br><br><br>

	<div class="card col-sm-12" id="card-list" style="width: 18rem;" v-if="controler">
		<ul class="list-group list-group-flush" >
		   <li class="list-group-item" v-for="(value, key) in list" v-if="value.text != ''">
		   		{{value.text}}
		   	<button type="button" class="btn btn-danger" v-on:click="excluir(key)">X</button>
			</li>
		</ul>
	</div>

</div>

</div>
<script src="https://br.vuejs.org/js/vue.min.js"></script>
<script type="text/javascript">
	var instancia = new Vue({
		el: '#app',
		data: {
			campo: '',
			controler: false, //controler variavel para exibir ou não a lista 
			tittle: 'Estudo  Componentes VUE.JS + PHP',
			titulo: 'Título',
			list: [{text: ''}]
		},
		methods: {
			add(){
				if (this.campo) {
					this.list.push({text: this.campo})
					this.campo = ''
					this.controler = true //mostra lista
				}
			},
			excluir(index){
				this.list.splice(index,1)
				if (this.list.length == 1)
				{
					this.controler = false //caso não tenha mais elementos, esconde a lista
				}
				
			}

		}
	})
</script>

<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- boostrap js -->

</body>
</html>