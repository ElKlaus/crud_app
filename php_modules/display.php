<?php
  include 'connect.php';

  if(isset($_POST['displaySend'])) {
    $table = '<table class="table">
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">Имя</th>
        <th scope="col">Почта</th>
        <th scope="col">Телефон</th>
        <th scope="col">Место проживания</th>
        <th scope="col">Редактировать запись</th>
      </tr>
    </thead>';

    $sql = "Select * from `users`";
    $result=mysqli_query($con,$sql);
    $number = 1;

    while($row=mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $place = $row['place'];

      $table.='<tr>
        <td scope="row">'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$place.'</td>
        <td>
          <button class="btn btn-dark" onclick="getDetails('.$id.')">Изменить</button>
          <button class="btn btn-danger" onclick="deleteUser('.$id.')">Удалить</button>
        </td>
      </tr>';

      $number++;
    };

    $table.='</table>';

    echo $table;
  };

?>