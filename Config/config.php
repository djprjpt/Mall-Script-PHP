<?php

/*
 * Dhaval Prajapati
 * Projectname: Club-<PostfixProj>
 * Responsibility: <High level defination>
 * 
 */

class Config_Req_Category {

    const Webservice = 1;
    const Crawler = 2;

}

class Config_Req_Cat_Module {

    const Mall = 1;
    const Category = 2;
    const Shop = 3;
    const Event = 4;
    const Movie = 5;
    const Dining = 6;
    const Hotel = 7;
    const Attraction = 8;
    const Offer = 9;

}

class Config_Database {
    
    const DB_TYPE = 'mysql';
    const DB_HOST = 'localhost';
    const DB_NAME = Constants_DB::Database;
    const DB_USER = 'root';
    const DB_PASS = '';
}
