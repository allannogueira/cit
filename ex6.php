<?php
    class SelectField{
        public function selectGenero(){
            echo "<select id='genero' name='genero'>";
            echo "<option val='masculino'>Masculino</option>";
            echo "<option val='feminino'>Feminino</option>";
            echo "</select>";
        }
    }
?>

<form>
    <input type="nome" id="nome" name="cidade" placeholder="nome">
    <?php
        $sf = new SelectField();
        $sf->selectGenero();  
    ?>

</form>