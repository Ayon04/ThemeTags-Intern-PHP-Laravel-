<?php
 
namespace Tests\Feature;
 
use Tests\TestCase;
 
class UserTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_default_route(): void
    {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    } 

    // Statuts : OK, but there were issues!
   // Tests: 3, Assertions: 3, PHPUnit Deprecations: 1.

   public function test_create_route(): void
    {
        $response = $this->json('POST','/student_create',['name'=>'Ayon','username'=>'Ayon10',
                               'mobile'=>'0181377526']);
        
 
        $response->assertStatus(201)->assertJson(

            ['Created'=>true]
        );
    } 

 
//./vendor/bin/phpunit

}