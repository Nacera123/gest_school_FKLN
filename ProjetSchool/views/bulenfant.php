<head>
  <title>ELEVES</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Feuille CSS -->
<!-- <link rel="stylesheet" href="./css/enfant.css"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

</head>

<div class="bulletin">

                <table class ="table">
                <thead>
                    <tr>
                        <th>Matières</th>
                        <th>Professeurs</th>
                        <th>Notes</th>
                        <th>Appréciations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($viewVars['noteList'] as $note) :?>
                     <tr> 
                        <td><?= $note->getmatiereN()?></td>
                        <td><?= $note->getidprofesseurN()?></td>
                        <td><?= $note->getnoteN()?></td>
                        <td><?= $note->getappreciationN()?></td>
                    </tr>
                    <?php endforeach?>

                </tbody>
             </table>

    </div>

<style>
.bulletin{
height: 600px;
  width: 800px;
  margin-left: 50px;
  border: 3px black solid;
  background-color:#dce7f5;
}

table {
    margin-top:10px;
    border:2px solid black;
    border-collapse:collapse;
    width:90%;
    margin:auto;
    }
  
    thead{
      background-color:#c6d9f1;
      border:1px solid black;
      }
  
      tbody {
      background-color:#FFFFFF;
      border:1px solid black;
      color:black;
     
      }
  
      th {
      font-family:monospace;
      border:1px dotted black;
      padding:5px;
      background-color:#EFF6FF;
      width:25%;
      font-size:30px;
      }
  
      td {
      font-family:sans-serif;
      font-size:80%;
      border:1px solid black;
      padding:10px;
      text-align:left;
      font-size:25px;
      }
  

#bouton{
    /* background-color: black; */
    width: 200px; height: 80px;
    /* margin-top: 50px; */
    margin-left: 800px;
}

</style>