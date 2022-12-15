$(document).ready(function () {
    $(".tinh").change(function () {
        var id = $(".tinh").val();
        $.post("controllers/data_district.php" , {id:id}, function (data) {
            $(".quan").html(data);
        })
    })

    $(".quan").change(function () {
        var id = $(".quan").val();
        $.post("controllers/data_wards.php" , {id:id}, function (data) {
            $(".phuong").html(data);
        })
    })

    $(".tinh_di").change(function () {
        var id = $(".tinh_di").val();
        $.post("controllers/data_district.php" , {id:id}, function (data) {
            $(".quan_di").html(data);
        })
    })

    $(".quan_di").change(function () {
        var id = $(".quan_di").val();
        $.post("controllers/data_wards.php" , {id:id}, function (data) {
            $(".phuong_di").html(data);
        })
    })

    $(".tinh_den").change(function () {
        var id = $(".tinh_den").val();
        $.post("controllers/data_district.php" , {id:id}, function (data) {
            $(".quan_den").html(data);
        })
    })

    $(".quan_den").change(function () {
        var id = $(".quan_den").val();
        $.post("controllers/data_wards.php" , {id:id}, function (data) {
            $(".phuong_den").html(data);
        })
    })
});
