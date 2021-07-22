<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Buildtables extends Model
{
    private $DBName = '2heartsoflove';
    private $resetAll = false; // change this to true if you want drop the existing database and tables

    public $messages = [];

    // public function __construct() {
    //     $table = 'contact';
    //     parent::__construct($table);
    //     $this->_softDelete = true;
    // }

    /*
     *  creatDB() sould not be run because it will delete the database 
     *  and the connection to the database will be lost when the next function is called
     *  so the system connects to a database before any operation can be done on the database
     *  so database is created in the phpmyadmin before running this operations
     */
    private function createDB(){
        try {        
            if($this->resetAll == true){
                $sql = "DROP DATABASE IF EXISTS `".$this->DBName."`";
                $this->_db->query($sql);
                $this->messages[] = $this->DBName." Database Droped Successfully";
            }
            
            $sql = "CREATE DATABASE IF NOT EXISTS `".$this->DBName."`";
            $this->_db->query($sql);
            $this->messages[] = $this->DBName." Database Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    // core table starts here
    private function createCompanyInfoTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                logo VARCHAR(250) DEFAULT NULL,
                email VARCHAR(255) DEFAULT NULL,
                phone VARCHAR(255) DEFAULT NULL,
                social_media TEXT DEFAULT NULL,
                privacy_policy TEXT DEFAULT NULL,
                terms_of_use TEXT DEFAULT NULL,
                cookie_policy TEXT DEFAULT NULL,
                program_days TEXT DEFAULT NULL,
                sliders TEXT DEFAULT NULL,
                branches TEXT DEFAULT NULL,
                address VARCHAR(255) DEFAULT NULL,
                website VARCHAR(100) DEFAULT NULL,
                about_org MEDIUMTEXT DEFAULT NULL,
                date TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
            $sql2 = "INSERT INTO $table_name (name)
                    VALUES ('Set me up !!!')";
            $this->_db->query($sql2);
            $this->messages[] = "Info Data  Has Been Added To ".$table_name." Table Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createUsersTable($table_name){//ANY SOFTWARE USING THIS FRAMEWORK MUST HAVE THIS TABLE
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(70) NOT NULL,
                lname VARCHAR(70) NOT NULL,
                username VARCHAR(70) NOT NULL,
                password VARCHAR(70) NOT NULL,
                email VARCHAR(100) NOT NULL,
                phone VARCHAR(50) DEFAULT NULL,
                address VARCHAR(100) DEFAULT NULL,
                pix VARCHAR(100) DEFAULT NULL,
                acl VARCHAR(255)  DEFAULT NULL,
                status tinyint(1) DEFAULT 1,
                access tinyint(1) DEFAULT 1,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    
    private function createUserSessionsTable($table_name){//ANY SOFTWARE USING THIS FRAMEWORK MUST HAVE THIS TABLE
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_id int(11) NOT NULL,
                session varchar(255) NOT NULL,
                user_agent varchar(255) NOT NULL
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    // core table ends here

    // other tables begins here
    private function createContactsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(70) NOT NULL,
                lname VARCHAR(70) NOT NULL,
                email VARCHAR(100) NOT NULL,
                subject VARCHAR(250) NOT NULL,
                body TEXT NOT NULL,
                date TIMESTAMP                
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createlogsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(250) NOT NULL,
                description TEXT NOT NULL,
                status tinyint(1) DEFAULT 1,
                date TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createCategoriesTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(250) NOT NULL,
                status tinyint(1) NOT NULL DEFAULT 1,
                date TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    
    private function createblogsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_id INT(11) NOT NULL,
                cat_id INT(11) NOT NULL,
                title VARCHAR(100) NOT NULL,
                body TEXT NOT NULL,
                approved tinyint(1) DEFAULT 0,
                pix VARCHAR(250) NOT NULL,
                date TIMESTAMP,
                no_of_views  INT(11) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createCommentsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_id INT(11) NOT NULL,
                blog_id INT(11) NOT NULL,
                comment TEXT NOT NULL,
                pix VARCHAR(250) NOT NULL,
                type VARCHAR(10) DEFAULT 'Grand',
                date TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createEventNewsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(100) NOT NULL,
                description TEXT NOT NULL,
                pix VARCHAR(250) DEFAULT NULL,
                video VARCHAR(250) DEFAULT NULL,
                venue VARCHAR(250) NOT NULL,
                type VARCHAR(10) DEFAULT 'Event',
                event_date DATE DEFAULT NULL,
                event_time  TIME DEFAULT NULL,
                date TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createMediasTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                cat_id INT NOT NULL,
                sub_cat_id INT NOT NULL,
                title VARCHAR(200) NOT NULL,
                description VARCHAR(250) DEFAULT NULL,
                media VARCHAR(250) DEFAULT NULL,
                media_date DATE DEFAULT NULL,
                date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                delete TINYINT(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createCalendarTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NULL,
                start VARCHAR(255) NULL,
                end VARCHAR(255) NULL,
                backgroundColor VARCHAR(20) NULL,
                borderColor VARCHAR(20) NULL,
                allDay VARCHAR(7) DEFAULT '7',
                url VARCHAR(255) NULL  ,
                date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createFundCategoriesTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(50) NOT NULL,
                account_no INT(11) NOT NULL,
                parent INT(3) NOT NULL
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createDonationsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(100) NOT NULL,
                giving_to VARCHAR(50) NOT NULL,
                amount DECIMAL(10,2) NOT NULL,
                note VARCHAR(255) NOT NULL,
                status TINYINT(1) NOT NULL DEFAULT 0,
                date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createTestimoniesTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(50) NOT NULL,
                lname VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                phone VARCHAR(50) DEFAULT NULL,
                testimony TEXT NOT NULL,
                regular_member TINYINT(1) NOT NULL DEFAULT 0,
                include_in_website TINYINT(1) NOT NULL DEFAULT 0,
                include_name TINYINT(1) NOT NULL DEFAULT 0,
                date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                approved TINYINT(1) NOT NULL DEFAULT 0,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createPrayerrequestsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(50) NOT NULL,
                lname VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                phone VARCHAR(50) DEFAULT NULL,
                address VARCHAR(100) DEFAULT NULL,
                city VARCHAR(50) DEFAULT NULL,
                state VARCHAR(50) DEFAULT NULL,
                country VARCHAR(50) DEFAULT NULL,
                prayerrequest TEXT NOT NULL,
                acknowledge TINYINT(1) NOT NULL DEFAULT 0,
                date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function runAll(){ // run all queries
        $this->resetAll = false;
        $this->createCompanyInfoTable("company_info");
        $this->createUsersTable("users");
        $this->createUserSessionsTable("user_sessions");
        $this->createContactsTable("contacts");
        $this->createlogsTable("logs");
        $this->createCategoriesTable("categories");
        $this->createBlogsTable("blogs");
        $this->createCommentsTable("comments");
        $this->createEventNewsTable("event_news");
        $this->createMediasTable("medias");
        $this->createCalendarTable("calendar");
        $this->createFundCategoriesTable("fund_categories");
        $this->createDonationsTable("donations");
        $this->createTestimoniesTable("testimonies");
        $this->createPrayerrequestsTable("prayerrequests");
        return $this->messages;
    }

}


// $sql = "TRUNCATE TABLE blogs";
// $this->_db->query($sql);