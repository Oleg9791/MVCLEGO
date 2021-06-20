<form action="?type=Table&action=edt&id=<?= $this->data['id'] ?>" method="post">
    <?php
    print_r($this->data);
    foreach ($this->data['row'] as $key => $value) {
        echo $this->data['comments'][$key] . "<br><br>";
        echo "<input name='$key' value='$value'>.<br><br>";

    }
    ?>
    <input type="submit" value="insert">

</form>

