<!DOCTYPE html> 
<html lang="en"> 
<head><meta charset="UTF-8"><title>Lab 7a Q2</title></head> 
<body> 
<?php 
$students = [ 
 ['name' => 'Irsyad', 'program' => 'BIP', 'age' => 21], 
 ['name' => 'Filzah', 'program' => 'BIS', 'age' => 20], 
 ['name' => 'Sulwan', 'program' => 'BIT', 'age' => 22] 
]; 
?> 
<table border="1" cellpadding="6"> 
<tr><th>Name</th><th>Program</th><th>Age</th></tr> 
<?php foreach ($students as $student) { ?> 
<tr> 
<td><?php echo htmlspecialchars($student['name']); ?></td> 
<td><?php echo htmlspecialchars($student['program']); ?></td> 
<td><?php echo $student['age']; ?></td> 
</tr> 
<?php } ?> 
</table> 
</body> 
</html> 
