<?php
//use Gamajo\Quadratic;
include 'all_php.php';
// Represents x^2 + 5x + 6 = 0.
$equation = new BasicQuadraticEquation(1, 5, 6);

$solver = new Solver($equation);
$solver->solve();

echo $solver->get(); // '2 and 3'
echo $solver->get('root1'); // '2'
echo $solver->get('root2'); // '3'
?>