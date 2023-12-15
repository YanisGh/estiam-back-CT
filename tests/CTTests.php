<?php
use App\Document\CT;
use PHPUnit\Framework\TestCase;
use Doctrine\ODM\MongoDB\DocumentManager;

class CTTests extends TestCase
{
    public function testFindByDMId(): void
    {
        // Create an instance of the class containing the method
        $ctObject = new CT(); // Replace with your actual class name

        // Replace this with an actual ID that exists in your database
        $id = '6574ceb62818e8fe4e36e189';

        // Replace $documentManager with your actual DocumentManager instance
        $documentManager = DocumentManager::create(); // Replace with your actual DocumentManager instance

        // Call the method
        $response = $ctObject->findByDMId($documentManager, $id);

        // Validate the response
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
    }
}
