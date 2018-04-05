
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../stylesheet/home.css">
    <title>register</title>
</head>
<body>
<h2>회원 가입</h2>
<form name="mem_form" method="post" action="../php/mem_print.php">
    <input type="hidden" name="title" value="회원 가입 양식">
    <table border="1" width="640" cellspacing="1" cellpadding="4">
        <tr>
            <td align="right">* 아이디 :</td>
            <td><? echo $id ?></td>
        </tr>
        <tr>
            <td align="right"> * 이름 :</td>
            <td><? echo $name ?></td>
        </tr>
        <tr>
            <td align="right"> * 비밀번호 :</td>
            <td><? echo $passwd ?></td>
        </tr>
        <tr>
            <td align="right"> * 비밀번호 확인 :</td>
            <td><? echo $passwd_confirm?></td>
        </tr>
        <tr>
            <td align="right">성별 :</td>
            <td>
                <? echo $gender ?>
            </td>
        </tr>
        <tr>
            <td align="right">휴대전화 :</td>
            <td>
                <?echo "$phone1 - $phone2 - $phone3" ?>
            </td>
        </tr>
        <tr>
            <td align="right">주 소 :</td>
            <td><?echo $address ?></td>
        </tr>
        <tr>
            <td align="right">취 미 :</td>
            <td>
                <?
                    for($i = 0; $i <4; $i++){
                        if($hobby[$i] != ""){
                            echo $hobby[$i] . " ";
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td align="right">자기소개 :</td>
            <td><?echo $intro?></td>
        </tr>
    </table>

</body>
</html>
