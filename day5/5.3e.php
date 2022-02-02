<?php
$msg = NULL;
function u_c($a)
{  
    return strtoupper($a);
}

function l_c($b)
{  
    return strtolower($b);
}
function r5_c($c)
{
    return substr($c, 0, 5);
}

function l5_c($d)
{
    return substr($d, strlen($d) -5);
}

if(isset($_GET["submit"]))
{
    $txt1=$_GET["txt1"];
    $r1=$_GET["r1"];
    
    switch($r1)
    {
        case "uc":
            $msg = u_c($txt1);
            break;
        case "lc":
            $msg = l_c($txt1);
            break;
        case "r5c":
            $msg = r5_c($txt1);
            break;
        case "l5c":
            $msg = l5_c($txt1);
            break;
        default:
            $msg = "Invalid";
            break;
    }
}

?>
<html>
    <head>
        <title>
        </title>
    <head>
        <body>
            <form action="" method="GET" name="FR">
                <table border="solid" align="center">
                    <tr>
                        <td>Enter Your String : </td>
                        <td><input type="text" name="txt1" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="uc" >Uppercase</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="lc" >Lowercase</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="r5c">Right 5 Character</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="l5c" >Left 5 Character</td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="Click"></td>
                    </tr>

                    <tr>
                        <td>Your Answer is : </td>
                        <td><input type="text" name="txt2" value="<?php echo $msg;?>"></td>
                    </tr>

                </table>
            </form>
        </body>

    </html>

