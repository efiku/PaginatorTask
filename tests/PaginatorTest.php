<?php
/**
 * Created by PhpStorm.
 * User: efik
 * Date: 15.09.16
 * Time: 12:30
 */
class PaginatorTest extends PHPUnit_Framework_TestCase
{


    public function testPaginator()
    {
        $paginator = new Paginator\Paginator($this->dataProvider());

        $result = $paginator->setActivePage(2)->setItemsPerPage(3)->getItems();
        $this->assertSame(
            [ 'Zofia', 'Cezary', 'Jurek' ],
            $result
        );


        $result = $paginator->setActivePage(2)->setItemsPerPage(4)->getItems();
        $this->assertSame(
            [ 'Cezary', 'Jurek', 'Wacława', 'Stefan' ],
            $result
        );

    }


    private function dataProvider()
    {
        return [
            'Anna', 'Wanda', 'Klementyna', 'Zofia', 'Cezary', 'Jurek', 'Wacława', 'Stefan', 'Agnieszka', 'Paweł', 'Jurek'
        ];
    }
}
