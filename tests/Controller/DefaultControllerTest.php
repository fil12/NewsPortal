<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 29.12.18
 * Time: 17:02.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testContacts()
    {
        $client = static::createClient();

        $client->request('GET', '/contacts');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testContactsPageHasEmail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');

        $this->assertContains(
            'exepmle@i.ua',
            $client->getResponse()->getContent()
        );
    }

    public function testContactsPageHasPhone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');

        $this->assertContains(
            '+38 050 500 50 50',
            $client->getResponse()->getContent()
        );
    }

    public function testContactsPageHasAdress()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');

        $this->assertContains(
            'Kiev, Hetmana 3',
            $client->getResponse()->getContent()
        );
    }

    public function testContactForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');

        $form = $crawler->selectButton('contact[save]')->form();

        // set some values
        $form['contact[name]'] = 'Lucas';
        $form['contact[email]'] = 'Lucas@test.i';
        $form['contact[message]'] = 'Hey there!';

        // submit the form
        $crawler = $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }
}
