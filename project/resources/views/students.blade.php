<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista Studenti</title>
  </head>
  <body>

    <div class="wrapper">
      <div class="title">
        <h1>Elenco Studenti</h1>
      </div>

      <table>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Età</th>
          <th>Sesso</th>
        </tr>
        @foreach($students as $student)
          <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->gender}}</td>
          </tr>
        @endforeach
      </table>
      
    </div>

  </body>
</html>
