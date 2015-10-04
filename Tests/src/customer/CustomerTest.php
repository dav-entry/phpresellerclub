<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-10-04 at 20:15:43.
 */
class CustomerTest extends PHPUnit_Framework_TestCase {

  /**
   * @var Customer
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new Customer;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   * @covers Customer::createCustomer
   */
  public function testCreateCustomer() {
    $customerDetails = array(
      'user-name' => 'anishsheela@outlook.com',
      'passwd' => 'Rand@123om',
      'name' => 'Anish Sheela',
      'company' => 'N/A',
      'address-line-1' => 'Test Address Line',
      'city' => 'Mumbai',
      'state' => 'Maharashtra',
      'country' => 'IN',
      'zipcode' => '567889',
      'phone-cc' => '91',
      'phone' => '9876543210',
      'lang-pref' => 'en',
    );
    $apiOut = $this->object->createCustomer($customerDetails);
  }

  /**
   * @covers Customer::editCustomer
   */
  public function testEditCustomer() {
    $customerId = '768906';
    $customerDetails = array(
      'user-name' => 'anishsheela@outlook.com',
      'passwd' => 'Rand@123om',
      'name' => 'Anish Sheela',
      'company' => 'N/A',
      'address-line-1' => 'Test Address Line',
      'city' => 'Mumbai',
      'state' => 'Maharashtra',
      'country' => 'IN',
      'zipcode' => '567889',
      'phone-cc' => '91',
      'phone' => '9876543210',
      'lang-pref' => 'en',
    );
    $apiOut = $this->object->editCustomer($customerId, $customerDetails);
  }

  /**
   * @covers Customer::getCustomerByUserName
   * @todo   Implement testGetCustomerByUserName().
   */
  public function testGetCustomerByUserName() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::getCustomerByCustomerId
   * @todo   Implement testGetCustomerByCustomerId().
   */
  public function testGetCustomerByCustomerId() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::generateToken
   * @todo   Implement testGenerateToken().
   */
  public function testGenerateToken() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::authenticateToken
   * @todo   Implement testAuthenticateToken().
   */
  public function testAuthenticateToken() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::changePassword
   * @todo   Implement testChangePassword().
   */
  public function testChangePassword() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::generateTemporaryPassword
   * @todo   Implement testGenerateTemporaryPassword().
   */
  public function testGenerateTemporaryPassword() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::searchCustomer
   * @todo   Implement testSearchCustomer().
   */
  public function testSearchCustomer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::forgotPassword
   * @todo   Implement testForgotPassword().
   */
  public function testForgotPassword() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Customer::deleteCustomer
   * @todo   Implement testDeleteCustomer().
   */
  public function testDeleteCustomer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

}