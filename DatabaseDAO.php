<?php

    class DatabaseDAO{

        private $server;
        private $username;
        private $password;
        private $port;
        private $database;

        /**
         * DatabaseDAO constructor.
         * @param $server
         * @param $username
         * @param $password
         * @param $port
         * @param $database
         */
        public function __construct($server, $username, $password, $port, $database)
        {
            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->port = $port;
            $this->database = $database;
        }

        /**
         * @return mixed
         */
        public function getServer()
        {
            return $this->server;
        }

        /**
         * @return mixed
         */
        public function getUsername()
        {
            return $this->username;
        }

        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @return mixed
         */
        public function getPort()
        {
            return $this->port;
        }

        /**
         * @return mixed
         */
        public function getDatabase()
        {
            return $this->database;
        }




        public function connect(){
            $connect = mysqli_connect($this->getServer(), $this->getUsername(), $this->getPassword(), $this->getDatabase());

            return $connect;
        }

        public function disconnect(){
            $close = mysqli_close($this->connect());
        }

        


    }