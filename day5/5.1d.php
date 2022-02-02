<?php
$msg = '';
function revs($a)
{  
    return strrev($a);
}

function lens($b)
{  
    return strlen($b);
}
function ss2s1($c,$e)
{
    return "'".$e . "' found at " . strpos($c,$e) . " position.";
}

function as2s1($d,$f)
{
    return $d . " " . $f;
}

if(isset($_GET["submit"]))
{
    $txt1=$_GET["txt1"];
    $txt2=$_GET["txt2"];
    $r1=$_GET["r1"];
    
    switch($r1)
    {
        case "revs":
            $msg = revs($txt1);
            break;
        case "lens":
            $msg = lens($txt1);
            break;
        case "ss2s1":
            $msg = ss2s1($txt1,$txt2);
            break;
        case "as2s1":
            $msg = as2s1($txt1,$txt2);
            break;
        default:
            $msg = "Invalid Option";
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
                        <td>Enter Your String 1 : </td>
                        <td><input type="text" name="txt1" required></td>
                    </tr>
                    <tr>
                        <td>Enter Your String 2 : </td>
                        <td><input type="text" name="txt2" ></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="revs" >Reverse String</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="lens" >Length of String</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="ss2s1">Search String 2 in String 1</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="radio" name="r1" value="as2s1" >Append String 2 into String 1</td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="Click"></td>
                    </tr>

                    <tr>
                        <td>Output: </td>
                        <td><input type="text" name="txt3" value="<?php echo $msg; ?>"></td>
                    </tr>

                </table>
            </form>
        </body>

    </html>

