<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Les évènements</title>
</head>
<body>
	<h1>Les évènements</h1>
	<button><a href="{{route('home')}} ">Enregistrer un évènement</a></button>
	<ul>
		@foreach($evenements as $value)
			<li>{{$value->nom}} {{$value->date_demarrage}} {{$value->date_fin}} {{$value->description}}</li>
		@endforeach
	</ul> 
</body>
</html>