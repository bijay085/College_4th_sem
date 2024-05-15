<!-- 3. Write PHP Script to display following array in HTML table. 
$info = [ 'name' => 'Ram Bahadur', 'address' => 'Lalitpur', 'email' => 'info@ram.com', 'phone' =>  9845454500, 'website' => 'www.ram.com'];  -->

<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 9845454500,
    'website' => 'www.ram.com'
];

echo "<table border='1'>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>";

foreach ($info as $key => $value) {
    echo "<tr>
            <td>$key</td>
            <td>$value</td>
        </tr>";
}

echo "</table>";
?>
