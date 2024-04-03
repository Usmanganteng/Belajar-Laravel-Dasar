<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FileControllerTest extends TestCase
{
    public function testUpload()
    {
        $picture = UploadedFile::fake()->image('Aldizar.png');

        $this->post('/file/upload', [
            'picture' => $picture
        ])->assertSeeText("OK Aldizar.png");
    }

}
