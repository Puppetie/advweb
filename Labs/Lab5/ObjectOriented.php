<?php
class Courses {
    public $code;
    public $name;
    public $desc;
    public $grade;

    public function set_code($code) {
        $this->code = $code;
    }

    public function get_code() {
        return $this->code;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_desc($desc) {
        $this->desc = $desc;
    }

    public function get_desc() {
        return $this->desc;
    }

    public function set_grade($grade) {
        $this->grade = $grade;
    }

    public function get_grade() {
        return $this->grade;
    }

    public function isAplus($grade) {
        if ($grade == "A+") {
            return true;
        }
        return false;
    }

    public function CourseDetails() {
        return [
            'Course Code' => $this->code,
            'Course Name' => $this->name,
            'Course Description' => $this->desc,
            'Grade' => $this->grade,
        ];
    }
}

$course1 = new Courses();
$course1->set_code('SWE 301');
$course1->set_name('Software Requirements');
$course1->set_desc('Introduction to Software requirements');
$course1->set_grade('A+');

$course2 = new Courses();
$course2->set_code('CIS 304');
$course2->set_name('Software Construction');
$course2->set_desc('Building application interface');
$course2->set_grade('B+');

$course3 = new Courses();
$course3->set_code('NES 212');
$course3->set_name('Data Communication');
$course3->set_desc('Managing networks');
$course3->set_grade('A');

$coursesArray = [$course1, $course2, $course3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .highlight {
            background-color: crimson;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Course Code</th>
        <th>Course Name</th>
        <th>Course Description</th>
        <th>Grade</th>
    </tr>
    <?php
    foreach ($coursesArray as $course) {
        $highlightClass = $course->isAplus($course->get_grade()) ? 'highlight' : '';

        echo "<tr class=\"$highlightClass\">
        <td>{$course->get_code()} </td>
        <td>{$course->get_name()} </td>
        <td>{$course->get_desc()} </td>
        <td>{$course->get_grade()} </td>
        </tr>";
    }
    ?>
</table>
</body>
</html>
