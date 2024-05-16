<!-- 4. Write PHP Script to store student mark-ledger data into PHP multi-dimensional array and display into  HTML table. -->
<?php
// Define the student mark-ledger data
$markLedger = [
    [
        'S.N.' => 1,
        'Symbol No.' => 1001,
        'Name' => 'John Doe',
        'OS' => 85,
        'NM' => 78,
        'SE' => 92,
        'SL' => 88,
        'DBMS' => 90,
        'Project' => 95,
        'Total' => 618,
        'Result' => 'Pass'
    ],
    [
        'S.N.' => 2,
        'Symbol No.' => 1002,
        'Name' => 'Jane Smith',
        'OS' => 78,
        'NM' => 82,
        'SE' => 88,
        'SL' => 90,
        'DBMS' => 85,
        'Project' => 92,
        'Total' => 615,
        'Result' => 'Pass'
    ]
];

// Display the data in an HTML table
echo "<table border='2' cellpadding='3'>
        <tr>
            <th>S.N.</th>
            <th>Symbol No.</th>
            <th>Name</th>
            <th>OS</th>
            <th>NM</th>
            <th>SE</th>
            <th>SL</th>
            <th>DBMS</th>
            <th>Project</th>
            <th>Total</th>
            <th>Result</th>
        </tr>";

foreach ($markLedger as $student) {
    echo "<tr>
            <td>{$student['S.N.']}</td>
            <td>{$student['Symbol No.']}</td>
            <td>{$student['Name']}</td>
            <td>{$student['OS']}</td>
            <td>{$student['NM']}</td>
            <td>{$student['SE']}</td>
            <td>{$student['SL']}</td>
            <td>{$student['DBMS']}</td>
            <td>{$student['Project']}</td>
            <td>{$student['Total']}</td>
            <td>{$student['Result']}</td>
        </tr>";
}

echo "</table>";
?>
