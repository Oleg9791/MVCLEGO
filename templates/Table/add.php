
<form action="?type=Table&action=insert" method="post">
    <?php
    print_r($this->data);
    foreach ($this->data as $key => $value) {
        echo " <input name='$key' placeholder='$value'>";

    }
    ?>
    <input type="submit" value="insert">

</form>
