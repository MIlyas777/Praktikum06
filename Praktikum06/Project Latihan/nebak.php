form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <label for="inputNebak">Bilangan tebakan anda: </label>
  <input type="number" name="nebakNumber" id="inputNebak" placeholder="tebakan anda" required>

  <button type="submit" name="submitNebak">Tebak</button>
</form>