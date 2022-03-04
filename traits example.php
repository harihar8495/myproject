<?php
trait communicate{
    public function telegram(){
        echo "message sent";
    }
}
class Dial{
    use communicate;
}
class Contact{
    use communicate;
}
$dial = new Dial();
$dial->telegram();
$contact = new Contact();
$contact->telegram();

/*
 * output
 * message sent
 * message sent
 */