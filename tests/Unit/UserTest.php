<?php
use \PHPUnit\Framework\TestCase as TestCase;


class UserTest extends TestCase {

  /** @test */
  public function the_first_and_last_name() {

    $user = new \App\Models\User;

    $user->setFirstName('steven');
    $this->assertEquals($user->getFirstName(), 'steven');
  } 

  public function test_the_last_and_last_name() {

    $user = new \App\Models\User;

    $user->setLastName('ojo');
    $this->assertEquals($user->getLastName(), 'ojo');
  } 

  public function test_full_name() {
    $user = new \App\Models\User;
    $user->setFirstName('Allen');
    $user->setLastName('Mike');

    $this->assertEquals($user->getFullName(), 'Allen Mike');

  }

  public function test_first_and_last_name_are_trim() {
    $user = new \App\Models\User;
    $user->setFirstName(' Allen  ');
    $user->setLastName('      Mike   ');

    $this->assertEquals($user->getFirstName(), 'Allen');
    $this->assertEquals($user->getLastName(), 'Mike');
  }

  public function test_email_address_can_be_set() {
    $user = new \App\Models\User;
    $email = 'chikodi543@gmail.com';

    $user->setEmail($email);

    $this->assertEquals($user->getEmail(), $email);
  }

  public function test_email_variables_contains_correct_values() {
    $user = new \App\Models\User;

    $email = 'chikodi543@gmail.com';

    $user->setFirstName(' Allen  ');
    $user->setLastName('      Mike   ');
    $user->setEmail($email);

    $emailVariables = $user->getEmailVariables();

    $this->assertArrayHasKey('full_name', $emailVariables);
    $this->assertArrayHasKey('email', $emailVariables);

    $this->assertEquals($emailVariables['full_name'], 'Allen Mike');
    $this->assertEquals($emailVariables['email'], $email);
  }
} 
