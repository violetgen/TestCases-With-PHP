<?php

namespace App\Models;

class User {

  private $first_name;
  private $last_name;
  private $email;



  public function setFirstName($first_name) {
    $this->first_name = trim($first_name);
  }

  public function getFirstName() {

    return $this->first_name;
  }

  public function setLastName($last_name) {
    $this->last_name = trim($last_name);
  }

  public function getLastName() {

    return $this->last_name;
  }

  public function getFullName() {

    return $this->first_name . ' ' . $this->last_name;
  }

  // public function getTrimFirstName() {
  //   return trim($this->getFirstName());
  // }

  // public function getTrimLastName() {
  //   return trim($this->getLastName());
  // }

  public function setEmail($email) {
    $this->email =  $email;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getEmailVariables() {
    return  [
      // 'full_name' => $this->getFirstName() . ' ' . $this->getLastName(),
      'full_name' => $this->getFullName(),
      'email' => $this->getEmail()
    ];
  }
}