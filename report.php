<html>

<head>


</head>


<body>
<?php

class finddog
{

    private $firstname;
    private $lastname;
    private $whenithappened;
    private $howlongyouweregone;
    private $howmanydidyousee;
    private $describe;
    private $whatdidtheydo;
    private $emailid;
    private $haveyouseenmydog;
    private $user;

    public function asssign_data()
    {
        list($this->firstname, $this->lastname,
            $this->whenithappened, $this->howlongyouweregone,
            $this->howmanydidyousee, $this->describe, $this->whatdidtheydo, $this->emailid, $this->haveyouseenmydog) = $this->getdogdata();
    }

    public function getdogdata()
    {

        if ($_REQUEST == $_POST && isset($_POST['submit'])) {

            $this->user[] = $_POST['firstname'];
            $this->user[] = $_POST['lastname'];
            $this->user[] = $_POST['whenithappened'];
            $this->user[] = $_POST['howlong'];
            $this->user[] = $_POST['aliendescription'];
            $this->user[] = $_POST['whattheydid'];
            $this->user[] = $_POST['email'];
        }

        return $this->user;

    }

    public function printdata()
    {

        printf("The name of your dog is ", $this->firstname);

    }

}

$dog = new finddog();
$dog->getdogdata();
$dog->asssign_data();
$dog->printdata();


?>

</body>
</html>



