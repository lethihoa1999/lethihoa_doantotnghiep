<?php
function FunctionName()
{
    $data_request = $_POST['data'];
    // var_dump($data_request);

    $result = [];
    $output = '';
    foreach ($data_request as $key => $value) {
        // var_dump(isset($value["ten_vacxin"]));
        if (isset($value["ten_vacxin"])) {// kiểm tra nếu người dùng đã ấn nút Đăng ký để gửi thông tin

            $ten_vacxin = $value["ten_vacxin"]; // lấy thông tin username
        
            $so_luong = $value["so_luong"]; // lấy thông tin password
        
            $ngay_du_kien_tiem = $value["ngay_du_kien_tiem"]; // lấy thông tin email
        
            $gia_tien = $value["gia_tien"]; // lấy thông tin sex
        
            // echo $ten_vacxin . " | " .$so_luong . " | " .$ngay_du_kien_tiem . " | " .$gia_tien; // xuất dữ liệu lấy được ra cho phía server
            
            //Dưới đây sẽ là những đoạn code xử lý data theo ý bạn
            //Chẳng hạn như lưu data xuống database, kiểm tra data,...
            $data = [
                'tenvacxin' => $ten_vacxin,
                'so_luong' => $so_luong,
                'ngay_du_kien_tiem' => $ngay_du_kien_tiem,
                'gia_tien' => $gia_tien
            ];
            // var_dump($data);
            array_push($result, $data);
            $item = implode(',', array_map(
                function ($v, $k) { return sprintf('"%s":"%s"', $k, $v); },
                $data,
                array_keys($data)
            ));
            $output .= "{". $item . "}|x|";
            
        }
    }
    
    echo $output;
    $_SESSION['vacxin_selected'] = $result;
}

FunctionName();
?>