<form class="columns is-multiline" action="<?php echo $page->url() ?>" method="post">

  <div class="column is-6">
    <label for="name" class="label">Dein Name <span class="req">*</span></label>
    <input class="input" type="text" id="name" name="name" value="<?php echo $data['name'] ?? '' ?>" required>
    <?php echo isset($alerts['name']) ? '<span class="has-text-danger is-block mt-2">Bitte fülle dieses Feld aus.</span>' : '' ?>
  </div>

  <div class="column is-6">
    <label for="phone" class="label">Deine Telefonnummer <span class="req">*</span></label>
    <input class="input" type="text" id="phone" name="phone" value="<?php echo $data['phone'] ?? '' ?>" required>
    <?php echo isset($alerts['phone']) ? '<span class="has-text-danger is-block mt-2">Bitte fülle dieses Feld aus.</span>' : '' ?>

    <div id="email">
      <label>E-Mail</label>
      <input type="email" id="inpMail" name="inpMail" value="" autocomplete="nope" tabindex="-1">
    </div>
  </div>

  <div class="column is-12">
    <label class="checkbox">
      <input class="mr-1" type="checkbox" name="dse" value="checked" required>
      Ich willige ein, dass meine Angaben und Daten gemäß der <a href="<?php echo url('datenschutz') ?>" target="_blank">Datenschutzerklärung</a> gespeichert und verarbeitet werden. <span class="req">*</span>
    </label>
    <?php echo isset($alerts['dse']) ? '<span class="has-text-danger is-block mt-2">Bitte fülle dieses Feld aus.</span>' : '' ?>
  </div>

  <div class="column is-12 mt-4">
    <input class="button" type="submit" name="submit" value="Jetzt anmelden">
  </div>

</form>