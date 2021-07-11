<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    th {
      background-color: black;
      color: white;
      padding: 5px 30px;
    }

    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="/add" method="POST">
    <table>
      @csrf
      <tr>
        <th>id</th>
        <td>
          <input type="text" name="id">
        </td>
      </tr>
      <tr>
        <th>name</th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>age</th>
        <td>
          <input type="text" name="age">
        </td>
      </tr>
    </table>
    <button>送信</button>
  </form>  
</body>

</html>