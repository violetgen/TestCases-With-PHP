<?php
use \PHPUnit\Framework\TestCase as TestCase;


class UserTest extends TestCase {

  protected $user;

  public function setUp() : void {
    // parent::setUp();
    $this->user = new \App\Models\User;
  }

  /** @test */
  public function the_first_and_last_name() {

    $this->user->setFirstName('steven');
    $this->assertEquals($this->user->getFirstName(), 'steven');
  } 

  public function test_the_last_and_last_name() {

    // $this->user = new \App\Models\User;

    $this->user->setLastName('ojo');
    $this->assertEquals($this->user->getLastName(), 'ojo');
  } 

  public function test_full_name() {

    $this->user->setFirstName('Allen');
    $this->user->setLastName('Mike');

    $this->assertEquals($this->user->getFullName(), 'Allen Mike');

  }

  public function test_first_and_last_name_are_trim() {

    $this->user->setFirstName(' Allen  ');
    $this->user->setLastName('      Mike   ');

    $this->assertEquals($this->user->getFirstName(), 'Allen');
    $this->assertEquals($this->user->getLastName(), 'Mike');
  }

  public function test_email_address_can_be_set() {

    $email = 'chikodi543@gmail.com';

    $this->user->setEmail($email);

    $this->assertEquals($this->user->getEmail(), $email);
  }

  public function test_email_variables_contains_correct_values() {

    $email = 'chikodi543@gmail.com';

    $this->user->setFirstName(' Allen  ');
    $this->user->setLastName('      Mike   ');
    $this->user->setEmail($email);

    $emailVariables = $this->user->getEmailVariables();

    $this->assertArrayHasKey('full_name', $emailVariables);
    $this->assertArrayHasKey('email', $emailVariables);

    $this->assertEquals($emailVariables['full_name'], 'Allen Mike');
    $this->assertEquals($emailVariables['email'], $email);
  }
} 
