<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test1 Махин Андрей</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#ModalCenter">Регистрация</button>

		<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="ModalLongTitle">Регистрация</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<p id="alert" class="text-danger bg-light"></p>
		        <form name="form" id="form">
		        	<div class="form-group">
		        		<label for="name">Имя:</label>
		        		<input type="text" name="name" class="form-control" placeholder="Введите имя" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="surname">Фамилия:</label>
		        		<input type="text" name="surname" class="form-control" placeholder="Введите фамилию" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="email">E-mail:</label>
		        		<input type="text" name="email" class="form-control" placeholder="Введите свой e-mail" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="pass">Пароль:</label>
		        		<input type="password" name="pass" class="form-control" placeholder="Не менее 5 символов" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="pass2">Повторите пароль:</label>
		        		<input type="password" name="pass2" class="form-control" placeholder="Повторите пароль" required>
		        	</div>
		        	<input type="submit" name="submit" class="btn btn-primary" value="Регистрация">
		        </form>
		      </div>
		    </div>
		  </div>
		</div>

	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="js/formaction.js"></script>
</body>
</html>