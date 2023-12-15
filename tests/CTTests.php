<?php
use App\Document\CT;
use PHPUnit\Framework\TestCase;
use Doctrine\ODM\MongoDB\DocumentManager;

class CTTests extends TestCase
{
    public function testFindByDMId(): void
    {
        // Create an instance of the class containing the method
        $ctObject = new CT(); 

        $id = '6574ceb62818e8fe4e36e189';

        $documentManager = DocumentManager::create(); 

        $response = $ctObject->findByDMId($documentManager, $id);

        // Validate the response
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
    }
}
