<?php

class Student
{
    private $photo, $fullname, $studentId, $program;

    public function __construct($photo, $fullname, $studentId, $program)
    {
        $this->photo = $photo;
        $this->fullname = $fullname;
        $this->studentId = $studentId;
        $this->program = $program;
    }
    public function get_student()
    {
        return "\nName: " . $this->fullname .
            "\nID: " . $this->studentId .
            "\nProgram: " . $this->program .
            "\nImage: " . $this->photo .
            "\n";
    }
}
class StudentService
{
    private $fileOpen;
    private $file = "students.txt";
    public function __construct()
    {
        $this->fileOpen = fopen($this->file, "a+");
    }
    private function open_file()
    {
        $this->fileOpen = fopen($this->file, "");
    }
    public function save_student($student)
    {
        fwrite($this->fileOpen, $student);
        $this->close_students();
    }
    public function read_students()
    {
        $students = fread($this->fileOpen, filesize($this->file));
        return $students;
    }
    private function close_students()
    {
        fclose($this->fileOpen);
    }
}
?>