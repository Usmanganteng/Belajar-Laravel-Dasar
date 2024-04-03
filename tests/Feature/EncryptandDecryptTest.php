<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

class EncryptandDecryptTest extends TestCase
{

    public function testEncryption()
    {
        $encrypt = Crypt::encrypt('Aldizar Ilham');
        var_dump($encrypt);

        $decrypt = Crypt::decrypt($encrypt);

        self::assertEquals('Aldizar Ilham', $decrypt);
    }
}
