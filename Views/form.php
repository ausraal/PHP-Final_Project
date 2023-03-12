<?php
 require __DIR__ . '/../private/shared/header.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registracija šuns kirpimui</title>
   <link rel="stylesheet" media="all" href="/public/stylesheets/style.css"/>
</head>
<body>
<div class="left">

        <img src="/public/pics/pic1.jpg" alt="Dog grooming picture">
    <h2>Norėdami pakeisti savo rezervacijos duomenis, įveskite savininko vardą</h2>
    <form action="/filter" method="POST">
        <input type="text" placeholder="Ieškoti.." name="search" autocomplete="off">
        <button type="submit" class="registerbtn">Ieškoti</button>
    </form>
</div>

<div class="formM">
    <h2> Registruokite augintinį kirpimui užpildydami šią formą:</h2>
<form  action="/form" method="post">

    <label for="ownerName"> Jūsų vardas:</label><br>
        <input type="text" id="ownerName" name="ownerName" placeholder="Jūsų vardas" >

    <label for="dogName"> Šuns vardas:</label><br>
        <input type="text" id="dogName" name="dogName" placeholder="Šuns vardas">

    <label for="dogBreed"> Registruojamo šuns veislė/dydis:</label><br>
        <input type="text" id="dogBreed" name="dogBreed" placeholder="Šuns dydis">

    <label for="visitDate">Pasirinkite kirpimo datą: *</label>
    <input type="date" id="visitDate" name="visitDate" min="<?php echo date("Y-m-d");?>" required><br>
    <label for="visitTime">Pasirinkite kirpimo laiką: *</label>
    <select id="visitTime" name="visitTime" required>
        <option value="empty">Pasirinkite</option>
        <option value="7:30">07:30</option>
        <option value="8:30">08:30</option>
        <option value="9:30">09:30</option>
        <option value="10:30">10:30</option>
        <option value="11:30">11:30</option>
        <option value="12:30">12:30</option>
        <option value="13:30">13:30</option>
        <option value="14:30">14:30</option>
        <option value="15:30">15:30</option>
        <option value="16:30">16:30</option>
        <option value="17:30">17:30</option>
    </select><br><br>
    <label for="phoneNumber">Įveskite telefono numerį: *<br></label><br>
    370-XXX-XX-XXX
        <input type="tel" pattern="370-[0-9]{3}-[0-9]{2}-[0-9]{3}" id="phoneNumber" name="phoneNumber" required><br>

    <input type="hidden" name="id" value="<?php echo uniqid();?>>">
    <input type="submit" name="submit" class="registerbtn" value="Rezervuoti">
    <p>* pažymėtus duomenis užpildyti privaloma</p>
</form>
</div>
</body>
</html>
<div class="footerL">
<?php require __DIR__ . '/../private/shared/footer.php';?>
</div>
