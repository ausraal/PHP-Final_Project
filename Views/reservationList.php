<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rezervacija</title>
<link rel="stylesheet" media="all" href="/public/stylesheets/style.css"/>
</head>
<body>
<div class="msg">
    <h2><?php echo $message ?></h2>
    <button class="registerbtn"><a href="/form">Atgal</a></button>
    <?php if (!empty($dataList)):?>
    <h2>Jūsų rezervacijos duomenys:</h2>
</div>
<div>
  <table>
     <tr>
        <th> Šeimininko vardas</th>
        <th> Augintinio vardas</th>
        <th>Augintinio veislė/dydis</th>
        <th>Rezervacijos data</th>
        <th>Rezervacijos laikas</th>
        <th>Kontaktinis telefono numeris</th>
         <th> </th>
    </tr>
<?php foreach  ($dataList as $item):?>
      <form action="/editForm" method="POST">
      <tr>
        <td><?php echo $item['ownerName'] ?></td>
        <td><?php echo $item['dogName'] ?></td>
        <td><?php echo $item['dogBreed'] ?></td>
        <td><?php echo $item['visitDate'] ?></td>
        <td><?php echo $item['visitTime'] ?></td>
        <td><?php echo$item['phoneNumber'] ?></td>
        <td> <input type="hidden" name="id" value="<?php echo $item['id']?>">
            <button type="submit">Pakeisti</button>
        </td>
          <td> <form action="/delete" method="POST">
                  <input type="hidden" name="id" value="<?php echo $item['id']?>">
              <button type="submit">Ištrinti</button></form>
          </td>
      </tr>
      </form>

 <?php endforeach; ?>
    </table>
    <form action="/download" method="POST">
        <button class="registerbtn" type="submit">Atsisiųsti CSV</button>
    </form>
    <?php endif; ?>
 </div>
</body>
<div class="footerL">
    <?php require __DIR__ . '/../private/shared/footer.php';?>
</div>
</html>



