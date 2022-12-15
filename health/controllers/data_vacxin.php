<?php
include_once ("../models/m_registered_vaccin.php");
$key = $_POST['id'];
$m_data = new m_registered_vaccin();
$data = $m_data->read_vacxin($key);

foreach ($data as $key) { ?>
    <option value="<?php echo $key->id;?>"><?php echo $key->ten_vacxin;?></option>
    <?php
}
?>