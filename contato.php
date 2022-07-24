<?php
    include_once("templates/header.php");
?>
<div class="container">

    <form action="#" method="POST">
        <h1>Entre em contato</h1>
        <div class="form-container">
            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Nome</label>
            </div>

            <div class="input-group">
                <input required="" type="email" name="email" autocomplete="off" class="input">
                <label class="user-label">E-mail</label>
            </div>

            <div class="input-group">
                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Insira sua mensagem"></textarea>
            </div>

            <div class="input-group">
                <input required="" type="submit" name="submit" autocomplete="off" class="input">
            </div>
        </div>
    </form>
</div>



<?php
    include_once("templates/footer.php");
?>