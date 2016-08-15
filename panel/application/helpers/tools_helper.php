<?php

    function get_room_category($where=array()){

        $CI = &get_instance();
        $CI->load->model("roomcategory_model");
        return $CI->roomcategory_model->get_all($where);
    }

    function get_room_properties($where=array()){

        $CI = &get_instance();
        $CI->load->model("roomproperties_model");
        return $CI->roomproperties_model->get_all($where);
    }

    function get_room_extra_services($where=array()){

        $CI = &get_instance();
        $CI->load->model("roomextraservices_model");
        return $CI->roomextraservices_model->get_all($where);
    }



?>