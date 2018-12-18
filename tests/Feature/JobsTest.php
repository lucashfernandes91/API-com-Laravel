<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobsTest extends TestCase
{
     public function testeIndex()
    {
        //$this->get('/api/jobs')->assertStatus(200);
        $this->post('/api/jobs', [])->assertStatus(422);
    }

   /*public function testJobs()
    {
        $this->post('/api/jobs', [
            'id'            => '2',
            'title'         => 'Vaga Teste TDD',
            'description'   => 'Descrição',
            'local'         => 'Porto Alegre',
            'remote'        => 'no',
            'type'          => '1',
            'company_id'    => '1'
        ])->assertStatus(201);    
    }*/

    public function testShow()
    {
        $this->get('/api/jobs/1');
    }
    
}
