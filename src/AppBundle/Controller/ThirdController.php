<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ThirdController extends Controller
{
    /*
     * A
     */
    /**
     * @Route("/nie-rzucaj-perel.html", name="nie-rzucaj-perel")
     */
    public function nieRzucajPerelAction()
    {
        return $this->render('default/nie-rzucaj-perel.html.twig');
    }
    /*
     * B
     */
    /**
     * @Route("/atak-jest.html", name="atak-jest")
     */
    public function atakAction()
    {
        return $this->render('default/atak-jest.html.twig');
    }
    /*
     * C
     */

    /*
     * D
     */

    /*
     * E
     */
    /**
     * @Route("/chlop.html", name="chlop")
     */
    public function chlopAction()
    {
        return $this->render('default/chlop.html.twig');
    }
    /*
     * F
     */

    /*
     * G
     */

    /*
     * H
     */

    /*
     * I
     */

    /**
     * @Route("/i-kwasne-jablko.html", name="i-kwasne-jablko")
     */
    public function iKwasneJablko()
    {
        return $this->render('default/i-kwasne-jablko.html.twig');
    }

    /*
     * J
     */

    /*
     * K
     */

    /*
     * L
     */

    /*
     * M
     */

    /*
     * N
     */

    /**
     * @Route("/nadgorliwosc-gorsza.html", name="nadgorliwosc-gorsza")
     */
    public function nadgorliwoscGorszaAction()
    {
        return $this->render('default/nadgorliwosc-gorsza.html.twig');
    }

    /*
     * O
     */

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */

    /*
     * S
     */
    /**
    * @Route("/kto-rano-wstaje.html", name="kto-rano-wstaje")
     */
    public function  ktoRanoWstajeAction()
    {
        return $this->render('default/kto-rano-wstaje.html.twig');
    }

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */


    /**
     * @Route("/drapiezniki-lowi-sie.html", name="drapiezniki-lowi-sie")
     */
    public function  drapieznikiLowiSieAction()
    {
        return $this->render('default/drapiezniki-lowi-sie.html.twig');
    }


    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */
}
