<?php

namespace App\Tests\Unit;

use App\Entity\Promotion;
use PHPUnit\Framework\TestCase;

class PromotionTest extends TestCase
{
    public function test_nom_de_promotion_non_vide()
    {
        $promotion = new Promotion();
        $promotion->setNomDePromotion('Promotion 2023');

        $this->assertEquals('Promotion 2023', $promotion->getNomDePromotion());
    }

    public function test_date_de_debut_non_vide()
    {
        $promotion = new Promotion();
        $this->assertEmpty($promotion->getDateDeDebut());

        $promotion->setDateDeDebut(new \DateTime('2023-09-01'));
        $this->assertNotEmpty($promotion->getDateDeDebut());
    }

    public function test_date_de_fin_non_vide()
    {
        $promotion = new Promotion();
        $this->assertEmpty($promotion->getDateDeFin());

        $promotion->setDateDeFin(new \DateTime('2024-06-30'));
        $this->assertNotEmpty($promotion->getDateDeFin());
    }

    public function test_formation_non_vide()
    {
        $promotion = new Promotion();
        $promotion->setFormation('DUT Informatique');

        $this->assertEquals('DUT Informatique',$promotion->getFormation());
    }
}

