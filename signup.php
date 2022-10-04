<?php 
    $title = "Sign Up";
    global $title;
    include "includes/head.php";
    include "includes/header.php";
 ?>

<?php



?>

<div class="container my-5">
<h1 class="display-4 fw-bold lh-1 text-center mb-3 p-4">Become a member!</h1>

    <div class="row align-items-center">
      <div class="mx-auto p-4 text-center col-8">
        <p class="fs-4">Wir freuen uns sehr, dass du Mitglied des Vereins
Feed Southern Africa e.V. werden möchtest.
Der Mitgliedsbeitrag beträgt jährlich 25,00 €, welcher bei dem
Vereinseintritt auf das unten angegebene Vereinskonto zu überweisen
ist. Das Mitglied erhält eine Beitragsquittung und eine Kopie der
aktuellen <a href="program.php">Vereinssatzung</a>.
Im Falle eines nachgewiesenen Verstoßes gegen die Vereinsinteressen
(§ 5 der Vereinssatzung) kann eine Mitgliedschaft mit sofortiger Wirkung
beendet werden.<br><br>
Hiermit beantragst Du die Mitgliedschaft bei Feed Southern Africa e.V.:</p>
      </div>
    </div>
      <div class="row">
      <div class="mx-auto col-lg-7">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" name="message" action="index.php">

        <h1 class="text-center">Sign up form</h1><br>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="first_name">
            <label for="floatingInput">First Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="last_name">
            <label for="floatingInput">Last Name</label>
          </div>
          <div class="row">
            <div class="form-floating mb-3 col-4">
              <input type="number" class="form-control" id="floatingInput" name="plz">
              <label for="floatingInput">PLZ</label>
            </div>
            <div class="form-floating mb-3 col-8">
              <input type="text" class="form-control" id="floatingInput" name="Ort">
              <label for="floatingInput">Ort</label>
            </div>
          </div>
          <div class="row">
            <div class="form-floating mb-3 col-9">
              <input type="text" class="form-control" id="floatingInput" name="strasse">
              <label for="floatingInput">Straße</label>
            </div>
            <div class="form-floating mb-3 col-3">
              <input type="number" class="form-control" id="floatingInput" name="hs-nr">
              <label for="floatingInput">Hausnummer</label>
            </div>
          </div>
          
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" name="birth_date">
            <label for="floatingInput">Date of Birth</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="mail">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="checkbox mb-3">
            <h6>Send me updates</h6>
            <label>
              <input type="checkbox" value="remember-me"> Yes, I want to get updated 
            </label><br>
            <small class="text-muted">By hitting the checkbox, you agree to get an update for blog-posts, news and other topics regarding
              our association via mail.</small>

          </div>
          <button class="w-100 btn btn-lg btn-dark" type="submit">Sign up</button>
          <hr class="my-4">
        </form>
      </div>
    </div>
</div>
</div>

<?php include "includes/footer.php"; ?>