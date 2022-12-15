<?php
include_once ("../models/m_information_user.php");
$key = $_POST['id'];
$m_data = new m_information_user();
$data = $m_data->read_dictricts($key);

foreach ($data as $key) { ?>
    <option value="<?php echo $key->id;?>"><?php echo $key->ten_quan_huyen;?></option>
    <?php
}
?>