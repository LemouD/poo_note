<?php
    class Meeting{
        
        private $startDate;
        private $endDate;
        private $title;
        private $description;
        private $isActive;
        private $participants = array();
        private $organizers = array();
        
        public function getStartDate(){
            return $this->startDate;
        }
        
        public function setStartDate($value){
            $this->startDate = $value;
        }
        
        public function getEndDate(){
            return $this->endDate;
        }
        
        public function setEndDate($value){
            $this->endDate = $value;
        }
        
        public function getTitle(){
            return $this->Title;
        }
        
        public function setTitle($value){
            $this->title = $value;
        }
        
        public function getDescription(){
            return $this->description;
        }
        
        public function setDescription($value){
            $this->description = $value;
        }
        
        //renvoie false si le meeting est supprimé
        public function isActive(){
            return $this->isActive;
        }
        
        public function __construct($startDate, $endDate, $title, $description, $participants, $organizers)
        {
            $this->startDate = $startDate;
            $this->endDate = $endDate;
            $this->title = $title;
            $this->description = $description;
            $this->isActive = true;
            
            foreach($organizers as $organizer){
                array_push($this->organizers, $organizer);
            }
            
            foreach($participants as $participant){
                array_push($this->participants, $participant);
            }
        }
        
    }
?>