<?php
function processFiles($files) {
    // Calculate total size
    $totalSize = 0;
    foreach ($files as $file) {
        $totalSize += $file['size'];
    }

    // Sort by file size (Smallest to Largest)
    for ($i = 0; $i < count($files) - 1; $i++) {
        for ($j = 0; $j < count($files) - $i - 1; $j++) {
            if ($files[$j]['size'] > $files[$j + 1]['size']) {
                $temp = $files[$j];
                $files[$j] = $files[$j + 1];
                $files[$j + 1] = $temp;
            }
        }
    }

    // Sort in descending order
    $sortedDescending = array_reverse($files);

    return ['sorted_files' => $files, 'total_size' => $totalSize, 'sorted_desc' => $sortedDescending];
}

// Example Usage
$files = [
    ['name' => 'file1.txt', 'size' => 400],
    ['name' => 'file2.txt', 'size' => 200],
    ['name' => 'file3.txt', 'size' => 300]
];

$result = processFiles($files);

echo "Total Size: " . $result['total_size'] . "<br><br>";

// Display sorted files (Ascending Order)
echo "<br><br>Sorted Files (Ascending):<br><br>";
foreach ($result['sorted_files'] as $file) {
    echo "Name: " . $file['name'] . ", Size: " . $file['size'] . "<br>";
}

// Display sorted files (Descending Order)
echo "<br><br>Sorted Files (Descending):<br><br>";
foreach ($result['sorted_desc'] as $file) {
    echo "Name: " . $file['name'] . ", Size: " . $file['size'] . "<br>";
}
?>
