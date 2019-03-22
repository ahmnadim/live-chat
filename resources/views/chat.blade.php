<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Live Chat</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }} ">
	<style>
		.list-group{
			height: 300px;
		    overflow-y:scroll;
		    background: white;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row" id="app">
			<div class="offset-4 col-4" >
				<li class="list-group-item active">Chat</li>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
				<ul class="list-group " v-chat-scroll="{always: false, smooth: true}">

				  <message v-for="msg,index in chat.message" :key="msg.id" :color="chat.color[index]" :user="chat.user[index]" :time="chat.time[index]">
				  	@{{ msg }}
				  </message>
				</ul>
				  <input type="text" name="" class="form-control" placeholder="Type your message..." v-model="message" @keyup.enter="send">
			</div>
		</div>
	</div>
	


	<script type="text/javascript" src="{{ asset('js/app.js') }} "></script>
</body>
</html>