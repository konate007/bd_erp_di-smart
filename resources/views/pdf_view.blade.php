<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <h1>Contrat concernant le projet {{ $projets->find($contrat->projet_id )->nom_projet }}</h1>
    <table class="table table-bordered">
      <thead>
            <tr>
                <th>Projet</th>
                <th>Plans de maintenance</th>
                <th>Description</th>
                <th>Date début</th>
                <th>Date fin</th>
            </tr>
      </thead>
      <tbody>
              <tr>
                  <td>{{ $projets->find($contrat->projet_id )->nom_projet }}</td>
                  <td>{{ $planmaintenances->find($contrat->planmaintenance_id )->titre }}</td>
                  <td>{{ $contrat->description }}</td>
                  <td>{{ $contrat->date_debut }}</td>
                  <td>{{ $contrat->date_fin }}</td>
              </tr>
      </tbody>
    </table>
    <p>Téléchargement du contrat réussit avec succès</p>
  </body>
</html>
