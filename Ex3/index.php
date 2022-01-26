<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $str = $_REQUEST["str"];
    $errors = [];
    $currentStr = "Chuỗi đã nhập là: ".$str;
    if (empty($str)) {
        $errors["str"] = "*Vui lòng nhập chuỗi";
    } elseif (empty(checkNumber($str))) {
        $errors["check-number"] = "*Không có kí tự số nào trong chuỗi";
    } else {
        $number = "*Các kí tự số trong chuỗi là: " . checkNumber($str);
    }
    if (empty(checkUpperCase($str))){
        $errors["check-upper"] = "*Không có kí tự in hoa trong chuỗi";
    }else{
        $upper = "*Các kí tự in hoa trong chuỗi là: " . checkUpperCase($str);
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="str" placeholder="Vui lòng nhập chuỗi">
    <p><?php echo $currentStr ?? ""?></p>
    <p style="color: red"><?php echo $errors["str"] ?? "" ?></p>
    <p style="color: red"><?php echo $errors["check-number"] ?? "" ?></p>
    <p style="color: red"><?php echo $errors["check-upper"] ?? "" ?></p>
    <p style="color: blue"><?php echo $number ?? "" ?></p>
    <p style="color: blue"><?php echo $upper ?? "" ?></p>
    <button>Kiểm tra</button>
</form>

</body>
</html>
<?php
function checkNumber($string)
{
    $str = "";
    $pattern = "/^[0-9]$/";
    for ($i = 0; $i < strlen($string); $i++) {
        if (preg_match($pattern, $string[$i])) {
            $str .= $string[$i];
        }
    }
    return $str;
}
function checkUpperCase($string)
{
    $str = "";
    $pattern = "/^[A-Z]$/";
    for ($i = 0; $i < strlen($string); $i++) {
        if (preg_match($pattern, $string[$i])) {
            $str .= $string[$i];
        }
    }
    return $str;
}

?>
