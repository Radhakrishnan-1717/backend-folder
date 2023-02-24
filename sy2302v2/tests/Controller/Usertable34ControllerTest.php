<?php

namespace App\Test\Controller;

use App\Entity\Usertable34;
use App\Repository\Usertable34Repository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Usertable34ControllerTest extends WebTestCase
{
    /** @var KernelBrowser */
    private $client;
    /** @var Usertable34Repository */
    private $repository;
    private $path = '/usertable34/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Usertable34::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Usertable34 index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'usertable34[Username]' => 'Testing',
            'usertable34[Useremailid]' => 'Testing',
            'usertable34[Userphonenumber]' => 'Testing',
        ]);

        self::assertResponseRedirects('/usertable34/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Usertable34();
        $fixture->setUsername('My Title');
        $fixture->setUseremailid('My Title');
        $fixture->setUserphonenumber('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Usertable34');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Usertable34();
        $fixture->setUsername('My Title');
        $fixture->setUseremailid('My Title');
        $fixture->setUserphonenumber('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'usertable34[Username]' => 'Something New',
            'usertable34[Useremailid]' => 'Something New',
            'usertable34[Userphonenumber]' => 'Something New',
        ]);

        self::assertResponseRedirects('/usertable34/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getUsername());
        self::assertSame('Something New', $fixture[0]->getUseremailid());
        self::assertSame('Something New', $fixture[0]->getUserphonenumber());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Usertable34();
        $fixture->setUsername('My Title');
        $fixture->setUseremailid('My Title');
        $fixture->setUserphonenumber('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/usertable34/');
    }
}
