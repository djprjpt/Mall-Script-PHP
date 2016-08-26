<?php

/*
 * Dhaval Prajapati
 * Projectname: Initial process and session verification
 * Responsibility: Managing initial request and redirecting to modules
 * 
 */

class Bootstrap {

    function __construct($args) {
        if (isset($args['req'])) {
            switch ($args['req']) {
                case Config_Req_Category::Webservice:
                    echo 'Webservice';
                    break;
                case Config_Req_Category::Crawler:
                    if (isset($args['mod'])) {
                        switch ($args['mod']) {
                            case Config_Req_Cat_Module::Mall:
                                require_once 'Crawling/mall.php';
                                $mall = new Mall();
                                break;
                            case Config_Req_Cat_Module::Category:
                                require_once 'Crawling/category.php';
                                $category = new Category();
                                echo "Category";
                                break;
                            case Config_Req_Cat_Module::Shop:
                                require_once 'Crawling/shop.php';
                                $shop = new Shop();
                                break;
                            case Config_Req_Cat_Module::Event:
                                require_once 'Crawling/event.php';
                                $event = new Event();
                                break;
                            case Config_Req_Cat_Module::Movie:
                                require_once 'Crawling/movie.php';
                                $movie = new Movie();
                                break;
                            case Config_Req_Cat_Module::Dining:
                                require_once 'Crawler/dining.php';
                                $dining = new Dining();
                                break;
                            case Config_Req_Cat_Module::Hotel:
                                require_once 'Crawling/hotel.php';
                                $hotel = new Hotel();
                                break;
                            case Config_Req_Cat_Module::Attraction:
                                require_once 'Crawling/attraction.php';
                                $hotel = new Attraction();
                                break;
                            case Config_Req_Cat_Module::Offer:
                                require_once 'Crawling/offer.php';
                                $hotel = new Offer();
                                break;
                            default:
                                echo "Error";
                                break;
                        }
                    } else {
                        echo 'Error';
                    }
                    break;
                default :
                    echo 'Error';
                    return;
            }
        } else {
            echo 'Error';
            return;
        }
    }

}
