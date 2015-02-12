<link rel="stylesheet" href="/AssessmentDatabase/public/css/header.css">
<link rel="stylesheet" href="/AssessmentDatabase/public/css/bootstrap_css/bootstrap.min.css">
<link rel="stylesheet" href="/AssessmentDatabase/public/css/bootstrap_css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/AssessmentDatabase/public/css/tables.css">
</head>
<body>

<h1 class="main_title">Mark <?= $data['className']; ?></h1>

<div class="center-block text-center">

    <br><br>
<table class="table-bordered table-responsive">
    <tr>
        <td>Student Name</td>
        <td>Unit Name</td>
        <td>Overall Comment</td>
    </tr>

<?php
    foreach ($data['students'] as $student)
    {
        echo '<tr>';
        echo '<td><a href="/Assessmentdatabase/public/classmanagement/mark/' . $data['className'] . '/' . $data['identifier']. '/' . $student['student_name'] . '/"> ' . $student['student_name'] . ' </a>';
        echo '<td>' . $data['unitName'][0]['unit_name'] . '</td>';
        echo '<td><textarea rows="2" cols="20"></textarea></td>';
        echo '</tr>';
    }
?>
</table
    <br>

<input type="submit" value="Update Comments">
<a href="/AssessmentDatabase/public/ClassManagement/assess/<?=$data['className'];?>">Back</a>

    </div>
    </body>
</html>