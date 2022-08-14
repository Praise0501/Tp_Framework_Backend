<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mon formulaire</title>
</head>
<body>

    <form method="post" action="#">
        @csrf
        @if($errors->has('nom'));
            <p>{{$errors->first('nom')}}</p>
        @endif
        <input type="text" name="nom" placeholder="nom"><br><br>
        @if($errors->has('date_demarrage'));
            <p>{{$errors->first('date_demarrage')}}</p>
        @endif
        <input type="text" name="date_demarrage" placeholder="date de demarrage"><br>
        @if($errors->has('date_fin'));
            <p>{{$errors->first('date_fin')}}</p>
        @endif
        <input type="text" name="date_fin" placeholder="date de fin"><br>
        @if($errors->has('description'));
            <p>{{$errors->first('description')}}</p>
        @endif
        <input type="text" name="description" placeholder="description">
        <input type="submit" value="enregistrer">

    </form>

     <button><a href="{{route('event')}} ">Liste des évènements</a></button> 

</body>
</html>