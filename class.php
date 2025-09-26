<?php

class Student
{
    private $photo, $fullname, $studentId, $program, $guardianFullname, $guardianAddress, $guardianContact, $studentBirth;

    public function __construct($photo, $fullname, $studentId, $program, $guardianFullname, $guardianAddress, $guardianContact, $studentBirth)
    {
        $this->photo = $photo;
        $this->fullname = $fullname;
        $this->studentId = $studentId;
        $this->program = $program;
        $this->guardianFullname = $guardianFullname;
        $this->guardianAddress = $guardianAddress;
        $this->guardianContact = $guardianContact;
        $this->studentBirth = $studentBirth;

    }
    public function get_student()
    {
        return "\nName: " . $this->fullname .
            "\nID: " . $this->studentId .
            "\nProgram: " . $this->program .
            "\nBirthdate: " . $this->studentBirth .
            "\nGuardian Name: " . $this->guardianFullname .
            "\nGuardian Address: " . $this->guardianAddress .
            "\nGuardian Contact: " . $this->guardianContact .
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
        $students = [];
        while (($line = fgets($this->fileOpen)) !== false) {
            $students[] = trim($line);
        }

        $this->close_students();
        return $students;
    }
    private function close_students()
    {
        fclose($this->fileOpen);
    }
    public function clear_student()
    {
        $fileOpen = fopen($this->file, "w");
        fwrite($fileOpen, "");
        $this->close_students();
    }
}
class Department
{
    private $programs;
    public function __construct($programs)
    {
        $this->programs = $programs;
    }
    public function getPrograms()
    {
        return $this->programs;
    }
}
?>