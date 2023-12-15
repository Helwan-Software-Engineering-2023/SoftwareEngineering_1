<?php
class ReserveVaccinationCenter{
    private $reservation_number ;
    private $user_id ;
    private $vaccination_center_id ;
    private $vacine_id ;
    private $first_dose_date ;
    private $first_taken ;
    private $second_dose_date ;
    private $second_taken ;


    public function getUser_id() {
        return $this->user_id;
    }

    public function getVaccination_center_id() {
        return $this->vaccination_center_id;
    }

    public function getVacine_id() {
        return $this->vacine_id;
    }

    public function getFirst_dose_date() {
        return $this->first_dose_date;
    }

    public function getFirst_taken() {
        return $this->first_taken;
    }

    public function getSecond_dose_date() {
        return $this->second_dose_date;
    }

    public function getSecond_taken() {
        return $this->second_taken;
    }

    public function setReservation_number($reservation_number){
        $this->reservation_number = $reservation_number;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function setVaccination_center_id($vaccination_center_id) {
        $this->vaccination_center_id = $vaccination_center_id;
    }

    public function setVacine_id($vacine_id) {
        $this->vacine_id = $vacine_id;
    }

    public function setFirst_dose_date($first_dose_date){
        $this->first_dose_date = $first_dose_date;
    }

    public function setFirst_taken($first_taken) {
        $this->first_taken = $first_taken;
    }

    public function setSecond_dose_date($second_dose_date) {
        $this->second_dose_date = $second_dose_date;
    }

    public function setSecond_taken($second_taken) {
        $this->second_taken = $second_taken;
    }

}
?>