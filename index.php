<?php
//use Gamajo\Quadratic;
include 'all_php.php';
// Represents x^2 + 5x + 6 = 0.
$a=rand(-20,20);
if($a == 0) $a+=1;
$b=rand(-20,20);
$c=rand(-20,20);
$equation = new BasicQuadraticEquation($a, $b, $c);

$solver = new Solver($equation);
$solver->solve();

echo '<div style="width:90%;margin:auto;text-align:center;direction:ltr;"><h1 style="margin-bottom:6px;direction:rtl;">משוואה:</h1>';
if($b>0&&$c>0){
    echo $a.'x<sup>2</sup>+'.$b.'x+'.$c.'=0';
} else if ($b<0&&$c>0){
    echo $a.'x<sup>2</sup>'.$b.'x+'.$c.'=0';
} else if ($b>0&&$c<0){
    echo $a.'x<sup>2</sup>+'.$b.'x'.$c.'=0';
} else {
    echo $a.'x<sup>2</sup>'.$b.'x'.$c.'=0';
}
//echo '<br>';
//echo $solver->get(); // '2 and 3'
echo '<h4 style="margin-bottom:6px;direction:rtl;">פתרונות:</h4>';
echo 'x<sub>1</sub> = ';
echo $solver->get('root1'); // '2'
echo '<br>';
echo 'x<sub>2</sub> = ';
echo $solver->get('root2'); // '3'

$minus_b=-1*$b;
$delta=$b * $b - 4 * $a * $c;
$two_a=2*$a;
$sqrt_delta=round(sqrt($delta),2);
echo '<h4 style="margin-bottom:6px;direction:rtl;">דרך מלאה:</h4>';
echo '<table style="margin:auto;direction:ltr;">
        <tr>
            <td rowspan="2">x<sub>1,2</sub> = </td>
            <td style="border-bottom:1px black solid;">-b&#177;&#8730;<span style="text-decoration:overline;">b<span style="font-size: 10px;vertical-align:+25%;">2</span>-4ac</span></td>
            <td rowspan="2"> = </td>
            <td style="border-bottom:1px black solid;">-('.$b.')&#177;&#8730;<span style="text-decoration:overline;">('.$b.')<span style="font-size: 10px;vertical-align:+25%;">2</span>-4('.$a.')('.$c.')</span></td>
            <td rowspan="2"> = </td>
            <td style="border-bottom:1px black solid;">('.$minus_b.')&#177;&#8730;<span style="text-decoration:overline;">('.$delta.')</span></td>
            <td rowspan="2"> = </td>
            <td style="border-bottom:1px black solid;">('.$minus_b.')&#177;('.$sqrt_delta.')</td>
            
            </tr>    
        <tr>
            <td style="text-align:center;">2a</td>
            <td style="text-align:center;">2('.$a.')</td>
            <td style="text-align:center;">('.$two_a.')</td>
            <td style="text-align:center;">('.$two_a.')</td>
        </tr>    
        </table>
        ';
echo '</div>';
// Represents 3x^2 + 4x + 5 = 0.
// $equation = new BasicQuadraticEquation(3, 4, 5);

// $solver = new Solver($equation);
// $solver->solve();

// echo $solver->get(); // '-0.667 + 1.106i and -0.667 - 1.106i'
// Represents x^2 + 5x + 6 = 0.
// $equation = new BasicQuadraticEquation(1, 5, 6);

// echo $equation->getA(); // 1
// echo $equation->getB(); // 5
// echo $equation->getC(); // 6
// print_r( $equation->getArgsAsArray() ); // [1, 5, 6]
?>